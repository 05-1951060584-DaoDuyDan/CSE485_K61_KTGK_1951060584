<?php
require 'views/template/header.php'
?>
<head>
    <title>Thêm nhân viên</title>
</head>
<main>
    <div class="container">
        <div class="row">
            <div style="color: red">
                <?php echo $error; ?>
            </div>
            <div class="col-md-2">
                <a href="index.php?controller=docgia&action=admin" class="text-decoration-none btn btn-primary"><i class="bi bi-arrow-left"></i>  Quay Lại</a>
            </div>
            <div class="col-md-8 ms-auto me-auto">
                <h4>Nhập thông tin người hiến máu</h4>
                <form class="row g-3 needs-validation" method="post" action="" novalidate>
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Mã độc giả</label>
                        <input type="text" class="form-control" readonly name="maDG" id="validationCustom01" value="<?php echo isset($_GET['madg']) ? $_GET['madg'] : $dg['maDG']?>" required>
                    </div>

                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Tên độc giả</label>
                        <input type="text" class="form-control" name="hoVaTen" id="validationCustom01" value="<?php echo isset($_POST['hoVaTen']) ? $_POST['hoVaTen'] : $dg['hovaten']?>" required>
                    </div>
                    <?php
                        $gt = isset($_POST['gioiTinh']) ? $_POST['gioiTinh'] : $dg['gioitinh'];
                        if($gt=='Nam'){
                    ?>
                    <div>
                        <span class="me-3">Giới tính</span>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gioiTinh" id="inlineRadio1" value="Nam" checked>
                            <label class="form-check-label" for="inlineRadio1">Nam</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gioiTinh" id="inlineRadio2" value="Nữ">
                            <label class="form-check-label" for="inlineRadio2">Nữ</label>
                        </div>
                    </div>
                    <?php
                        }else{
                    ?>
                    <div>
                        <span class="me-3">Giới tính</span>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gioiTinh" id="inlineRadio1" value="Nam">
                            <label class="form-check-label" for="inlineRadio1">Nam</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gioiTinh" id="inlineRadio2" value="Nữ" checked>
                            <label class="form-check-label" for="inlineRadio2">Nữ</label>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Năm sinh</label>
                        <input type="text" class="form-control" name="namSinh" id="validationCustom02" value="<?php echo isset($_POST['namSinh']) ? $_POST['namSinh'] : $dg['namsinh']?>" required>
                    </div>

                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Nghề nghiệp</label>
                        <input type="text" class="form-control" name="ngheNghiep" id="validationCustom02" value="<?php echo isset($_POST['ngheNghiep']) ? $_POST['ngheNghiep'] : $dg['nghenghiep'] ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Ngày cấp thẻ</label>
                        <input type="date" class="form-control" name="ngayCapThe" id="validationCustom02" value="<?php echo isset($_POST['ngayCapThe']) ? $_POST['ngayCapThe'] : $dg['ngaycapthe']?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Ngày hết hạn</label>
                        <input type="date" class="form-control" name="ngayHetHan" id="validationCustom02" value="<?php echo isset($_POST['ngayHetHan']) ? $_POST['ngayHetHan'] : $dg['ngayhethan']?>" required>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" name="diaChi" id="validationCustom02" value="<?php echo isset($_POST['diaChi']) ? $_POST['diaChi'] : $dg['diachi']?>" required>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" name="submit" type="submit">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php
require 'views/template/footer.php';
//file hiển thị thông báo lỗi
?>