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

    // Lấy id từ GET array
    $id = $_GET['ma'];
    // Lấy những danh mục có id trùng với id trong GET 
    $sql = "select*from danh_muc where id = $id";
    // Lấy ra danh mục cần in thông tin vào các input
    $categories = mysqli_query($connect, $sql);
    $categorie = mysqli_fetch_array($categories);

    ?>
    <div class="content">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <div class="container-fluid bg-secondary">
                    <div class="hstack gap-2 ">
                        <div class="p-2">
                            <h5>Sửa danh mục<h5>
                        </div>
                    </div>
                </div>
                <div class="accordion-body">
                    <form class="form-horizontal" id="category-form" action="sua_danh_muc_process.php" method="post" enctype="multipart/form-data">

                        <input type="hidden" name = "ma_danh_muc" value = "<?php echo($id) ?>">



                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Tên danh mục</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo($categorie['ten_danh_muc']) ?>" name="ten_danh_muc">
                            </div>
                        </div>





                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Thứ tự</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" value="<?php echo($categorie['thu_tu']) ?>" name="thu_tu_hien_thi">
                            </div>
                        </div>





                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Ảnh đại diện hiện tại</label>
                            <div class="col-sm-10">
                                <img src="<?php echo($categorie['anh_danh_muc'])?>" style="height: 100px"> <br>
                            </div>
                            <div>
                                <label>Chọn ảnh đại diện khác</label>
                                <input class="btn bg-secondary text-white" type="file" name="anh_dai_dien_moi"/>
                            </div>
                        </div>

                        <input type="hidden" name="anh_dai_dien_cu" value="<?php echo($categorie['anh_danh_muc'])?>"/>


                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Hiện thị ở trang chủ</label>
                            <div class="col-sm-10">
                                <input name="hien_thi_trang_chu" id="ProductCategories_showinhome" value="1" type="checkbox" 
                                    <?php
                                        // Kiểm tra nếu thuộc tính hien_thi_trang_chu có value là "co" thì set checked cho checkbox
                                        if($categorie['hien_thi_trang_chu']=="co"){
                                            echo("checked");
                                        }
                                    ?>
                                
                                />
                            </div>
                        </div>




                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Trạng thái</label>
                            <div class="col-sm-10">
                                <select class="span10 col-sm-12" style="width: 100px;" name="trang_thai" id="ProductCategories_status">
                                    <option value="1"
                                        <?php 
                                            if($categorie['hien_thi']=="co"){
                                                echo('selected="selected"');
                                            }
                                        ?>
                                    >Hiển thị</option>



                                    <option value="0"
                                        <?php 
                                            if($categorie['hien_thi']=="khong"){
                                                echo('selected="selected"');
                                            }
                                        ?>
                                    >Ẩn</option>
                                </select>
                            </div>
                        </div>



                        
                        <div class="control-group form-group buttons">
                            <input class="btn btn-primary" href="quan_ly_danh_muc.php" id="btnAddCate" type="submit" value="Lưu thông tin" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>