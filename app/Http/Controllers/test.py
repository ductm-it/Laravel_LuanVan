import sys
import os
from selenium import webdriver
import path
import time
import re
from bs4 import BeautifulSoup as bs
from bs4 import BeautifulSoup
import pathlib
import joblib
import numpy as np
import json
import gzip
from selenium import webdriver
import path
import requests
import urllib, json
import pandas as pd
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LogisticRegression
from sklearn.linear_model import LogisticRegression
import unidecode
import joblib
try:
    driver = webdriver.Chrome(executable_path="C:\chromedriver_win32\chromedriver.exe")

    Link_Tiki = [sys.argv[1]]

    #chuỗi example: 'https://tiki.vn/binh-nuoc/c6963?src=c.6963.hamburger_menu_fly_out_banner'
    # tìm ra vị trí của dấu / đầu tiên
    result = Link_Tiki[0].find('/')

    #cắt chuỗi lấy tên danh mục
    # cắt chuỗi từ https://tiki.vn/
    split_name = [x[result+10:len(Link_Tiki[0])] for x in Link_Tiki]

    result = split_name[0].find('/')

    Name_Menu = [x[0:result] for x in split_name]


    #chuỗi example: 'https://tiki.vn/binh-nuoc/c6963?src=c.6963.hamburger_menu_fly_out_banner'
    # cắt chuỗi lấy id danh mục
    # tìm ra vị trí của dấu / đầu tiên
    result = Link_Tiki[0].find('/')

    # cắt chuỗi từ https://tiki.vn/
    split_id = [x[result+10:len(Link_Tiki[0])] for x in Link_Tiki]

    #tìm ra chuỗi có dấu / chứa tên danh mục
    result = split_id[0].find('/')

    #cắt chuỗi có chứa tên danh mục
    split_id = [x[result+2:len(Link_Tiki[0])] for x in split_id]

    #lấy id của danh mục
    result = split_id[0].find('?')

    Id_Link_Tiki = [x[0:result] for x in split_id]

    json_tiki ='https://tiki.vn/api/v2/products?limit=48&include=advertisement&aggregations=1&trackity_id=885165d7-0190-ddf2-804a-2d5bd70d6338&category=' + str(Id_Link_Tiki[0]) + '&page=1&src=c.' + str(Id_Link_Tiki[0]) + '.hamburger_menu_fly_out_banner&urlKey=' + str(Name_Menu[0])
    soup_tiki=""
    driver.get(json_tiki)
    page_source=(driver.page_source)
    soup_tiki = bs(page_source,"lxml")
    json_url = urllib.request.urlopen(json_tiki)
    data = json.loads(json_url.read())
    #Lấy ra các giá trị trong mục 'data'
    content = data['data']

    # Get id sản phẩm và link của các sản phẩm
    id_product = []
    link_each_product = []
    for item in content:
        id_product.append(item['id'])
        link_each_product.append('https://tiki.vn/' + str(item['url_path']))

    Link_Link = []
    for item in id_product:
        id_link = link_each_product[id_product.index(item)]
        Link_Link.append(id_link)

    def writeToJson(ArrOutputData):
        y=json.dumps({"data":ArrOutputData},ensure_ascii=False).encode('utf8')
        a=json.loads(y)
        with open('tikijson.json', 'w',encoding='utf8') as f:
            json.dump(a, f,ensure_ascii=False)

    # Danh sách stopword

    # Khai báo mảng để lưu kết quả
    array_ranking_supplier = []
    # Vòng lặp cho trang đầu tiên của tiki cho danh mục
    for item_link in Link_Link:
        urls=[item_link]
        allLinkID = []

        totalUrl=0

        for i in range(0,len(urls)):
            numLoop=0
            driver.get(urls[i])
    #         print("url: ",i)
            for numLoop in range(0,1):
                try:
                    driver.find_element_by_xpath('#/html/head/meta[21]')
                except:
                    pass
            page_source=(driver.page_source)
            soup = bs(page_source,"lxml")
            for link in soup.find_all('meta',{"name": "al:android:url"}):
                allLinkID.append(link.get('content'))
    #     print(allLinkID)
    #     print("**************")

        allID = [x[18:26] for x in allLinkID]
    #     print(allID)
    #lấy dữ liệu comment
        arrayjson=[]
        for i in allID:
            for number in range(1, 2):

                page_comment = 'https://tiki.vn/api/v2/reviews?product_id='+ str(i) +'&sort=score%7desc,id%7desc,stars%7all&page='+ str(number) +'&limit=10&include=comments'
                arrayjson.append(page_comment)
    #     print(arrayjson)

        #lấy dữ liệu mô tả:
        description=[]
        for i in allID:
            page_description='https://tiki.vn/api/v2/products/'+ str(i) +'?platform=web&include=tag,images,gallery,promotions,badges,stock_item,variants,product_links,discount_tag,ranks,breadcrumbs,top_features,cta_desktop'
            description.append(page_description)
    #     print(description)
        #lấy comment
        allComment=[]
        totalUrl=0
        comments=[]
        soup_comment=""
        for i in range(0,len(arrayjson)):
    #         print("url: ",i)
            driver.get(arrayjson[i])
            page_source=(driver.page_source)
            soup_comment = bs(page_source,"lxml")
    #         print(soup_comment)
        #lấy mô tả description
        soup_description=""
        for i in range(0,len(description)):
    #         print("url: ",i)
            driver.get(description[i])
            page_source=(driver.page_source)
            soup_description = bs(page_source,"lxml")
    #         print(soup_description)
        #lấy mô tả và số sao của sản phẩm và tên nhà supplier
        des=[]
        for i in description:
            json_url = urllib.request.urlopen(i)
            data = json.loads(json_url.read())
        if json_url is None:
            continue
        data = json.loads(json_url.read())
        if data['description'] is not None:
            targetContent = data['description']
        else:
            targetContent = None
        if data['rating_average'] is not None:
            rating_average = data['rating_average']
        else:
            rating_average = 0
        if data['current_seller'] is not None:
            name_supplier = data['current_seller']['name']
        else:
            name_supplier = 'None_supplier'
        if data['price'] is not None:
            price_of_product = data['price']
        else:
            price_of_product = 0
            des.append(targetContent)

        #tìm từ trong chuỗi
        #print(type(variable_name)) -> lấy loại của dữ liệu
        string_des = str(des)[1:-1]
        certificate=""
        if string_des.find('ISO 9001') > -1:
            certificate="ISO 9001"
        if string_des.find('ISO 14001') > -1:
            certificate="ISO 14001"
        if string_des.find('ISO') > -1:
            certificate="ISO"
        elif string_des.find('FDA') > -1:
            certificate="FDA"
        elif string_des.find('HCCP') > -1:
            certificate="HCCP"
        else:
            certificate="None"
    #     print(certificate)
    # lấy dữ liệu comment bỏ vào json
        comments=[]
        Allcomments=[]
        for i in arrayjson:
            #print("Url:",i)
            json_url = urllib.request.urlopen(i)
            data = json.loads(json_url.read())
            for dest in data['data']:
                targetContent = dest['content']
                targetRating = dest['rating']
                comment={
                    "star":targetRating,
                    "content": targetContent
                }
                comments.append(comment)
        Complaint = 0
        if Complaint == 0:
            point_complaint = 100
        elif Complaint > 0 and Complaint <= 0.5:
            point_complaint = 80
        elif Complaint > 0.5 and Complaint <= 1.25:
            point_complaint = 60
        elif Complaint > 1.25 and Complaint <= 3:
            point_complaint = 40
        elif Complaint > 3 and Complaint <= 5:
            point_complaint = 20
        else:
            point_complaint = 1
        #Kiểm tra hàng "lỗi or giao chậm"
        All_PPM_RATE =[]
        count_logistic=0
        count_error=0
        for item in comments:
            str_slowly= "chậm"
            str_error= "lỗi"
            if str_slowly  in item["content"]:
                item["logistis"] = str_slowly
                count_logistic += 1;
            else:
                item["logistis"] = ""
            if str_error in item["content"]:
                item["error"] = str_error
                count_error += 1;
            else:
                item["ppm"] = ""
            All_PPM_RATE.append(item)
    #     print("Count hàng giao chậm = " + str(count_logistic), "\nCount hàng lỗi = " + str(count_error))
        #print(All_PPM_RATE)
        #Kiểm tra có bao nhiêu đánh giá hàng giao chậm hoặc lỗi

        #Lấy average của giá all products

        #lấy giá ở của sản phẩm

        prices = []

        for id in content:
            prices.append(id['price'])

    #     print(prices)
        # Tính average của giá thành các sản phẩm
        average = sum(prices) / len(prices)

        #1.2 ppm rate (part per milion) 30% (số đơn hàng bị lỗi / tổng số đơn hàng) => mỗi trang là 5 bình luận
        #=> 10 trang là 50 comment (50SP)
        ppm_rate = (count_error/50) * 1000 # *1000 vì số lượng đơn hàng ít hơn 1/1000 so với tài liệu
    #     print(ppm_rate)
        if ppm_rate > 0 and ppm_rate <= 10:
            point_ppmrate = 100
        elif ppm_rate > 10 and ppm_rate <= 25:
            point_ppmrate = 80
        elif ppm_rate > 25 and ppm_rate <= 50:
            point_ppmrate = 60
        elif ppm_rate > 50 and ppm_rate <= 200:
            point_ppmrate = 40
        elif ppm_rate > 200 and ppm_rate <= 999:
            point_ppmrate = 20
        else:
            point_ppmrate = 1
    #     print(point_ppmrate)
    #1.3. Status of certifications 20%
        if certificate == 'IOS 9001':
            point_certificate = 50
        elif certificate == 'IOS 14001':
            point_certificate = 20
        elif certificate == 'None':
            point_certificate = 0
        else:
            point_certificate = 30
    #     print(point_certificate)
    #1.4. Audit results 20%
        if rating_average > 0 and rating_average < 4:
            point_audit = -10
        elif rating_average >= 4 and rating_average < 5:
            point_audit = 80
        else:
            point_audit = 95
    #     print(point_audit)
        # Total Quality 30%
        Quality = (point_complaint * 30/100) + (point_ppmrate * 30/100) +(point_ppmrate * 30/100) + (point_certificate * 20/100) + (point_audit * 20/100)
    #     print(Quality)
        # 2. Pricing 25%
        Pricing = ((price_of_product - average)/average)
    #     print(Pricing)
        if Pricing >= 10:
            point_price = 100
        elif Pricing >= 0 and Pricing < 10:
            point_price = 75 + abs(round(Pricing)*(25/10))
        elif Pricing > -5 and Pricing < 0:
            point_price = 1 + abs(round(Pricing)*(74/4))
        else:
            point_price = 1
    #     print(point_price)
        # 3. Logistic 25%
        if count_logistic == 0:
            point_logistic = 100
        elif count_logistic > 0 and count_logistic < 5:
            point_logistic = 70
        elif count_logistic >= 5 and count_logistic < 10:
            point_logistic = 30
        else:
            point_logistic = 0
    #     print(point_logistic)
    # 4. Relationship 20%
        point_relationship = 100
    # Kết luận:
        Total_of_product = (Quality*30/100)  + (point_price*25/100) + (point_logistic*25/100) + (point_relationship*20/100)
    #     print(Total_of_product)
        if Total_of_product >= 85 and Total_of_product <= 100:
            Supplier = 'A'
        elif Total_of_product >= 70 and Total_of_product < 84:
            Supplier = 'B'
        elif Total_of_product >= 50 and Total_of_product < 69:
            Supplier = 'C'
        else:
            Supplier = 'D'
    #     print(Supplier)
        information_ranking_supplier = name_supplier + ' - ' + Supplier
        array_ranking_supplier.append(information_ranking_supplier)

    mylist = list(dict.fromkeys(array_ranking_supplier))
    mylist.sort()
    number_i = 0
    number_j = 0
    while number_i < len(mylist):
        word_i = [mylist[number_i]]
        name_i = [x[0:5] for x in word_i]
        ranking_i = [x[-1] for x in word_i]

    #     supplier_rank_high = array[number_i]

        number_j = number_i + 1
        if number_j == len(mylist):
            break
        word_j = [mylist[number_j]]
        name_j = [x[0:5] for x in word_j]
        ranking_j = [x[-1] for x in word_j]
    #     print(name_i[0] + '  ' + name_j[0] + '    ' + ranking_i[0] + '    ' + ranking_j[0])
        if name_i[0] == name_j[0] :
            mylist.remove(mylist[number_j])
            number_i = number_i - 1
            continue
        number_j = number_j + 1
        number_i = number_i + 1
    # sau khi kết thúc vòng lặp con thì sẽ cho ra 1 tz cao nhất
    print(mylist)
    writeToJson(mylist)
except:
    print("An exception occurred")
