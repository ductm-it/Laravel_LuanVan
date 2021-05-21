@extends('index')
@section('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="jquery-3.5.1.min.js"></script>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Compare Request Based </h5>
            <div class="card-body">
            <form>
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Product Catalog</label>
                    <select class="custom-select mr-sm-2" name="column_select" id="column_select">
                        <option selected>Choose...</option>
                        <option value="col1">Điện Thoại - Máy Tính Bảng</option>
                        <option value="col2">Điện Tử - Điện Lạnh</option>
                        <option value="col4">Phụ Kiện - Thiết Bị Số</option>
                        <option value="col5">Laptop - Thiết Bị IT</option>
                        <option value="col6">Máy Ảnh - Máy Quay Phim</option>
                        <option value="col7">Điện Gia Dụng</option>
                        <option value="col8">Nhà Cửa Đời Sống</option>
                        <option value="col9">Hàng Tiêu Dùng - Thực Phẩm</option>
                        <option value="col10">Làm Đẹp - Sức Khỏe</option>
                        <option value="col11">Thể Thao - Dã Ngoại</option>
                        <option value="col12">Xe Máy - Oto - Xe Đạp</option>
                    </select>
                </div>

                <div class="form-row align-items-center">
                <div class="col-auto my-1">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">List of Sub-Products</label>
                        <select class="custom-select mr-sm-2" name="layout_select" id="layout_select">
                        <option value="col1_pr1" >Samsung Galaxy A31</option>
                        <option value="col1_pr2" >Samsung Galaxy M11</option>
                        <option value="col1_pr3" >Iphone 12</option>
                        <option value="col1_pr4" >Xiaomi</option>
                        <option value="col1_pr5" >Vivo</option>
                        <!--Below shows when '2 column' is selected is hidden otherwise-->
                        <option value="col2_pr1">Tivi OLED</option>
                        <option value="col2_pr2">Loa Karaoke</option>
                        <option value="col2_pr3">Máy lạnh Inverter</option>
                        <option value="col2_pr4">Máy giặt Inverter</option>
                        <option value="col2_pr5">Tủ lạnh Inverter</option>

                        <!--Below shows when '3 column' is selected is hidden otherwise-->
                        <option value="col3_pr1">Tai nghe nhạc Bluetooth</option>
                        <option value="col3_pr2">Phụ Kiện Âm Thanh</option>
                        <option value="col3_pr3">Kính Thực Tế Ảo</option>
                        <option value="col3_pr4">Pin Sạc Dự Phòng</option>
                        <option value="col3_pr5">Thiết Bị 3G/4G</option>
                            <!--Below shows when '4 column' is selected is hidden otherwise-->
                        <option value="col4_pr1">Macbook</option>
                        <option value="col4_pr2">Intel Core i7</option>
                        <option value="col4_pr3">Phụ kiện, Linh kiện máy tính</option>
                        <option value="col4_pr4">Màn hình máy tính</option>
                        <option value="col4_pr5">Phần mềm máy tính</option>
                            <!--Below shows when '5 column' is selected is hidden otherwise-->
                        <option value="col5_pr1">Máy Ảnh Canon M10 KIT 15-45mm</option>
                        <option value="col5_pr2">Máy Quay Phim Canon</option>
                        <option value="col5_pr3">Dây Đeo Máy Ảnh, Máy Quay</option>
                        <option value="col5_pr4">Camera Quan Sát</option>
                        <option value="col5_pr5">Lens Nikon</option>
                        <!--Below shows when '6 column' is selected is hidden otherwise-->
                        <option value="col6_pr1">Máy xay-máy ép</option>
                        <option value="col6_pr2">Lò nướng điện</option>
                        <option value="col6_pr3">Nồi cơm điện</option>
                        <option value="col6_pr4">Máy lọc nước</option>
                        <option value="col6_pr5">Máy lọc không khí</option>
                            <!--Below shows when '7 column' is selected is hidden otherwise-->
                        <option value="col7_pr1">Dao và phụ kiện</option>
                        <option value="col7_pr2">Đèn & thiết bị chiếu sáng</option>
                        <option value="col7_pr3">Thiết bị điều khiển thông minh</option>
                        <option value="col7_pr4">Đồ dùng phòng ngủ</option>
                        <option value="col7_pr5">Dao và phụ kiện</option>
                        </select>
                </div>
            </div>
            </form>
            <button type="submit" class="btn btn-primary">Submit</button>

            </div>
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Name Of Supplier</th>
                        <th scope="col">Classification</th>
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

<script>
            $(document).ready(function() {
    var optarray = $("#layout_select").children('option').map(function() {
        return {
            "value": this.value,
            "option": "<option value='" + this.value + "'>" + this.text + "</option>"
        }
    })

    $("#column_select").change(function() {
        $("#layout_select").children('option').remove();
        var addoptarr = [];
        for (i = 0; i < optarray.length; i++) {
            if (optarray[i].value.indexOf($(this).val()) > -1) {
                addoptarr.push(optarray[i].option);
            }
        }
        $("#layout_select").html(addoptarr.join(''))
    }).change();
})
</script>
@endsection

