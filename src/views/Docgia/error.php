<?php
require 'views/template/header.php';
//file hiển thị thông báo lỗi
?>
<head>
    <title>Lỗi</title>
</head>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="index.php?controller=docgia&action=admin" class="text-decoration-none btn btn-primary"><i class="bi bi-arrow-left"></i>  Quay Lại</a>
            </div>
            <div class="col-md-12 ms-auto me-auto">
                <?php
                    require_once 'views/commons/message.php';
                ?>
            </div>
        </div>
    </div>
</main>
<?php
require 'views/template/footer.php';
//file hiển thị thông báo lỗi
?>