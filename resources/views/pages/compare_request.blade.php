@extends('index')
@section('content')

<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Compare Request Based </h5>
            <div class="card-body">
            <form>
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Product Catalog</label>
                    <select name="catagory" id="catagory" title="OPTIONAL - Choose a Catagory to Limit File Types" class="custom-select mr-sm-2">
                        <option value="">All Product</option>
                        <option value="Product1">Điện Thoại - Máy Tính Bảng</option>
                        <option value="Product2">Điện Tử - Điện Lạnh</option>
                        <option value="Product3">Phụ Kiện - Thiết Bị Số</option>
                        <option value="Product4">Laptop - Thiết Bị IT</option>
                        <option value="Product5">Máy Ảnh - Máy Quay Phim</option>
                        <option value="Product6">Điện Gia Dụng</option>
                        <option value="Product7">Nhà Cửa Đời Sống</option>
                        <option value="Product8">Hàng Tiêu Dùng - Thực Phẩm</option>
                        <option value="Product9">Làm Đẹp - Sức Khỏe</option>
                        <option value="Product10">Thể Thao - Dã Ngoại</option>
                        <option value="Product11">Xe Máy - Oto - Xe Đạp</option>
                    </select>
                </div>

                <div class="form-row align-items-center">
                <div class="col-auto my-1">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">List of Sub-Products</label>
                    <select name="fileType" id="fileType" class="custom-select mr-sm-2">
                        <option value="https://tiki.vn/dien-thoai-smartphone/c1795?src=c.1795.hamburger_menu_fly_out_banner" class="sub-Product1">Smartphone Chính Hãng</option>
                        <option value="https://tiki.vn/may-tinh-bang/c1794?src=c.1794.hamburger_menu_fly_out_banner" class="sub-Product1">Máy tính bảng</option>
                        <option value="https://tiki.vn/phu-kien-dien-thoai-va-may-tinh-bang/c8214?src=c.8214.hamburger_menu_fly_out_banner" class="sub-Product1">Phụ Kiện Điện Thoại</option>
                        <option value="https://tiki.vn/search?q=m%C3%A1y+%C4%91%E1%BB%8Dc+s%C3%A1ch&src=mega-menu" class="sub-Product1">Máy đọc sách</option>
                        <!--Below shows when '2 column' is selected is hidden otherwise-->
                        <option value="https://tiki.vn/tivi/c5015?src=c.5015.hamburger_menu_fly_out_banner" class="sub-Product2">Tivi</option>
                        <option value="https://tiki.vn/may-giat/c3862?src=c.3862.hamburger_menu_fly_out_banner" class="sub-Product2">Máy giặt</option>
                        <option value="https://tiki.vn/may-lanh-may-dieu-hoa/c3865?src=c.3865.hamburger_menu_fly_out_banner" class="sub-Product2">Máy lạnh - Máy điều hòa</option>
                        <option value="chttps://tiki.vn/tu-lanh/c2328?src=c.2328.hamburger_menu_fly_out_banner" class="sub-Product2">Tủ lạnh</option>
                        <option value="https://tiki.vn/may-nuoc-nong/c3866?src=c.3866.hamburger_menu_fly_out_banner" class="sub-Product2">Máy nước nóng</option>
                        <option value="https://tiki.vn/may-rua-chen/c3864?src=c.3864.hamburger_menu_fly_out_banner" class="sub-Product2">Máy rửa chén</option>
                        <!--Below shows when '3 column' is selected is hidden otherwise-->
                        <option value="https://tiki.vn/tai-nghe-co-day/c1804?src=c.1804.hamburger_menu_fly_out_banner" class="sub-Product3">Tai nghe</option>
                        <option value="https://tiki.vn/loa-nghe-nhac/c1805?src=c.1805.hamburger_menu_fly_out_banner" class="sub-Product3">Loa Nghe Nhạc</option>
                        <option value="https://tiki.vn/phu-kien-dien-thoai-va-may-tinh-bang/c8214?src=c.8214.hamburger_menu_fly_out_banner" class="sub-Product3">Phụ Kiện Điện Thoại</option>
                        <option value="https://tiki.vn/thiet-bi-choi-game-va-phu-kien/c2667?src=c.2667.hamburger_menu_fly_out_banner" class="sub-Product3">Thiết Bị Chơi Game</option>
                        <option value="https://tiki.vn/thiet-bi-mang/c2663?src=c.2663.hamburger_menu_fly_out_banner" class="sub-Product3">Thiết Bị Mạng</option>
                        <!--Below shows when '4 column' is selected is hidden otherwise-->
                        <option value="https://tiki.vn/laptop/c8095?src=c.8095.hamburger_menu_fly_out_banner" class="sub-Product4">Laptop Chính Hãng</option>
                        <option value="https://tiki.vn/thiet-bi-van-phong-thiet-bi-ngoai-vi/c12884?src=c.12884.hamburger_menu_fly_out_banner" class="sub-Product4">Thiết Bị Văn Phòng</option>
                        <option value="https://tiki.vn/linh-kien-may-tinh-phu-kien-may-tinh/c8129?src=c.8129.hamburger_menu_fly_out_banner" class="sub-Product4">Phụ kiện, Linh kiện máy tính</option>
                        <option value="https://tiki.vn/laptop/c8095?src=c.8095.hamburger_menu_fly_out_banner" class="sub-Product4">Laptop theo giá</option>
                        <option value="https://tiki.vn/may-chieu-va-phu-kien-may-chieu/c2664?src=c.2664.hamburger_menu_fly_out_banner" class="sub-Product4">Máy Chiếu</option>
                        <!--Below shows when '5 column' is selected is hidden otherwise-->
                        <option value="https://tiki.vn/ong-kinh-lens/c2757?src=c.2757.hamburger_menu_fly_out_banner" class="sub-Product5">Ống Kính Lens</option>
                        <option value="Bread2" class="sub-Product5">Phụ Kiện Máy Ảnh</option>
                        <option value="Bread1" class="sub-Product5">White Bread</option>
                        <option value="Bread2" class="sub-Product5">Panini</option>
                        <!--Below shows when '6 column' is selected is hidden otherwise-->
                        <option value="Bread1" class="sub-Product6">White Bread</option>
                        <option value="Bread2" class="sub-Product6">Panini</option>
                        <option value="Bread1" class="sub-Product6">White Bread</option>
                        <option value="Bread2" class="sub-Product6">Panini</option>
                        <!--Below shows when '7 column' is selected is hidden otherwise-->
                        <option value="Bread1" class="sub-Product7">White Bread</option>
                        <option value="Bread2" class="sub-Product7">Panini</option>
                        <option value="Bread1" class="sub-Product7">White Bread</option>
                        <option value="Bread2" class="sub-Product7">Panini</option>
                        <!--Below shows when '8 column' is selected is hidden otherwise-->
                        <option value="Bread1" class="sub-Product8">White Bread</option>
                        <option value="Bread2" class="sub-Product8">Panini</option>
                        <option value="Bread1" class="sub-Product8">White Bread</option>
                        <option value="Bread2" class="sub-Product8">Panini</option>
                    </select>
                    <span id="optionstore" style="display:none;"></span>
                </div>
                <div class="form-row align-items-center">
                 <div class="col-auto my-1">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Price</label>
                    </div>
                 </div>
                </div>
                <div class="form-row align-items-center">
                 <div class="col-auto my-1">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Quality</label>
                    </div>
                 </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
            </div>
            <table class="table table-borderless">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Name Of Supplier</th>
                <th scope="col">Rank</th>
                <th scope="col">Link Of Product</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <!-- <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td> -->
            </tr>
            <tr>
            <!-- <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td> -->
            </tr>
            <tr>
            <!-- <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr> -->
        </tbody>
        </table>
        </div>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {

    $('#catagory').on("change", function() {
        var cattype = $(this).val();
        optionswitch(cattype);
    });

    });

    function optionswitch(myfilter) {
    //Populate the optionstore if the first time through
    if ($('#optionstore').text() == "") {
        $('option[class^="sub-"]').each(function() {
            var optvalue = $(this).val();
            var optclass = $(this).prop('class');
            var opttext = $(this).text();
            optionlist = $('#optionstore').text() + "@%" + optvalue + "@%" + optclass + "@%" + opttext;
            $('#optionstore').text(optionlist);
        });
    }
    //delete everything
    $('option[class^="sub-"]').remove();
    // put the filtered stuff back
    populateoption = rewriteoption(myfilter);
    $('#fileType').html(populateoption);
    }

    function rewriteoption(myfilter) {
    //rewrite only the filtered stuff back into the option
    var options = $('#optionstore').text().split('@%');
    var resultgood = false;
    var myfilterclass = "sub-" + myfilter;
    var optionlisting = "";

    myfilterclass = (myfilter != "")?myfilterclass:"all";
    //first variable is always the value, second is always the class, third is always the text
    for (var i = 3; i < options.length; i = i + 3) {
        if (options[i - 1] == myfilterclass || myfilterclass == "all") {
            optionlisting = optionlisting + '<option value="' + options[i - 2] + '" class="sub-' + options[i - 1] + '">' + options[i] + '</option>';
            resultgood = true;
        }
    }
    if (resultgood) {
        return optionlisting;
    }
    }
</script>

@endsection
