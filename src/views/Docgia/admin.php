<?php
require 'views/template/header.php'
?>
<head>
    <title>Chi tiết độc giả</title>
</head>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="index.php?controller=docgia&action=index" class="text-decoration-none btn btn-primary"><i class="bi bi-arrow-left"></i>  Quay Lại</a>
            </div>
            <div class="col-md-12 d-flex justify-content-center mb-3">
                <h3>Quản Lý Thông Tin Chi Tiết Độc Giả Của Thư Viện</h3>
            </div>
            <?php
                require_once 'views/commons/message.php';
            ?>
            <div class="col-md-12 mb-3">
                <a href="index.php?controller=docgia&action=add"><button class="btn btn-primary">Thêm độc giả</button></a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mã độc giả</th>
                            <th scope="col">Tên độc giả</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Năm sinh</th>
                            <th scope="col">Nghề Nghiệp</th>
                            <th scope="col">Ngày cấp thẻ</th>
                            <th scope="col">Ngày hết hạn</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($docgia as $dg) {
                            $urlEdit =
                            "index.php?controller=docgia&action=edit&madg=" . $dg['madg'];
                            $urlDelete =
                            "index.php?controller=docgia&action=delete&madg=" . $dg['madg'];
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $dg['madg'] ?></th>
                                    <td><?php echo $dg['hovaten'] ?></td>
                                    <td><?php echo $dg['gioitinh'] ?></td>
                                    <td><?php echo $dg['namsinh'] ?></td>
                                    <td><?php echo $dg['nghenghiep'] ?></td>
                                    <td><?php echo $dg['ngaycapthe'] ?></td>
                                    <td><?php echo $dg['ngayhethan'] ?></td>
                                    <td><?php echo $dg['diachi'] ?></td>
                                    <td><a href="<?php echo $urlEdit ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a onclick="return confirm('Bạn chắc chắn muốn xóa độc giả này?')" href="<?php echo $urlDelete ?>"><i class="bi bi-trash"></i></a></td>
                                </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>