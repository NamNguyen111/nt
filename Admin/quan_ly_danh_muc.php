<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý danh mục</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="./FrontEnd/style.css">
    <link rel="shortcut icon" type="image/png" href="img/logo.png" />
</head>

<body>
    <?php
    include './sidebar_quantri.php';
    include './connect.php';
    //Lấy toàn bộ data từ bảng danh_muc
    $sql = "select * from danh_muc";
    $categories = mysqli_query($connect, $sql);
    ?>
    <div class="content">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <div class="container-fluid bg-secondary">
                    <div class="hstack gap-2 ">
                        <div class="p-2">
                            <h5>Quản lý danh mục<h5>
                        </div>
                        <div class="p-2 ms-auto"><a href="themdanhmuc.php" class="btn btn-primary">Thêm</a></div>
                        <div class="p-2"><a href="xoadanhmuc.php" class="btn btn-danger">Xóa</a></div>

                    </div>
                </div>
                <div class="accordion-body">
                    <table class="table table-bordered table-hover vertical-center">
                        <thead>
                            <tr>
                                <th id="news-categories-grid_cnumber">&nbsp;</th>
                                <th class="checkbox-column" id="news-categories-grid_c0"><input type="checkbox" value="1" name="news-categories-grid_c0_all" id="news-categories-grid_c0_all" /></th>
                                <th id="news-categories-grid_ccat_name">Tên danh mục</th>
                                <th id="news-categories-grid_cshowinhome">Hiển thị ở trang chủ</th>
                                <th id="news-categories-grid_cstatus">Trạng thái</th>
                                <th id="news-categories-grid_ccat_order">Thứ tự</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php //Dùng for-each in từng record ra bảng 
                            ?>
                            <?php foreach ($categories as $categorie) {

                            ?>
                                <tr>
                                    <td style="width: 50px; text-align: center;"><?php echo ($categorie['id']) ?></td>
                                    <td width="5"><input value="53254" id="news-categories-grid_c0_0" type="checkbox" name="news-categories-grid_c0[]" /></td>
                                    <td><?php echo ($categorie['ten_danh_muc']) ?></td>

                                    <td style="width: 100px; text-align: center;"><?php
                                                                                    if ($categorie['hien_thi_trang_chu'] == "co") {
                                                                                        echo ("Có");
                                                                                    } else {
                                                                                        echo ("Không");
                                                                                    } ?>
                                    </td>

                                    <td style="width: 100px;text-align: center;"><?php
                                                                                    if ($categorie['hien_thi'] == "co") {
                                                                                        echo ("Hiển thị");
                                                                                    } else {
                                                                                        echo ("Không");
                                                                                    } ?>
                                    </td>

                                    <td style="width: 80px;"><input class="updateorder" style="width: 50px;" rel="/quantri/economy/productcategory/updateorder/id/53254" type="text" value="<?php echo ($categorie['thu_tu']) ?>" name="cat_order" id="cat_order" readonly/></td>
                                    <td style="width: 100px;" align="center"><a class="fa-solid fa-pen-to-square" href="suadanhmuc.php?ma=<?php echo($categorie['id']); ?>"></a>&emsp;<a class="fa-solid fa-trash" href="xoadanhmuc.php?ma=<?php echo($categorie['id']); ?>"></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>