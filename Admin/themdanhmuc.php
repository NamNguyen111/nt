<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="./FrontEnd/style.css">
    <link rel="shortcut icon" type="image/png" href="img/logo.png" />
</head>

<body>
    <?php
    include './sidebar_quantri.php';
    include './connect.php';
    ?>
    <div class="content">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <div class="container-fluid bg-secondary">
                    <div class="hstack gap-2 ">
                        <div class="p-2">
                            <h5>Thêm danh mục<h5>
                        </div>
                    </div>
                </div>
                <div class="accordion-body">








                    <form class="form-horizontal" id="category-form" action="them_danh_muc_process.php" method="post" enctype="multipart/form-data">


                        <!-- Tên danh mục -->
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Tên danh mục</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="ten_danh_muc">
                            </div>
                        </div>





                        <!-- Thứ tự hiển thị -->
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Thứ tự</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" value="0" name="thu_tu_hien_thi">
                            </div>
                        </div>



                        <!-- Ảnh đại diện -->
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Ảnh đại diện</label>
                            <div class="col-sm-10">
                                <input class="btn bg-secondary text-white" type="file" name="anh_dai_dien"/>
                            </div>
                        </div>



                        <!-- Hiển thị ở trang chủ -->
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Hiển thị ở trang chủ</label>
                            <div class="col-sm-10">
                                <input name="hien_thi_trang_chu" id="ProductCategories_showinhome" value="1" type="checkbox"/>
                            </div>
                        </div>





                        <!-- Trạng thái -->
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Trạng thái</label>
                            <div class="col-sm-10">
                                <select class="span10 col-sm-12" style="width: 100px;" name="trang_thai" id="ProductCategories_status">
                                    <option value="1" selected="selected">Hiển thị</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                        </div>



                        <!-- Nút submit -->
                        <div class="control-group form-group buttons">
                            <input class="btn btn-primary" href="quan_ly_danh_muc.php" id="btnAddCate" type="submit" value="Tạo danh mục" />
                        </div>
                    </form>







                </div>
            </div>
        </div>
    </div>
</body>

</html>