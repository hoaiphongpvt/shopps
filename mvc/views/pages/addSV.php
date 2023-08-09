
<div class="col-4">
    <form action="http://localhost/phpmvc/Home/XuLyThem" method="POST">
        <div class="mb-3 mt-3">
            <label for="hoten" class="form-label">Họ tên:</label>
            <input type="text" class="form-control" id="hoten" placeholder="Nhập họ tên" name="hoten" required>
        </div>
        <div class="mb-3">
            <label for="ngaysinh" class="form-label">Ngày sinh:</label>
            <input type="date" class="form-control" id="namsinh" name="ngaysinh" required>
        </div>
        <div class="mb-3">
            <label for="diachi" class="form-label">Địa chỉ:</label>
            <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Nhập địa chỉ" required>
        </div>
        <div class="mb-3">
            <label for="sdt" class="form-label">Số điện thoại:</label>
            <input type="text" class="form-control" id="sdt" name="sdt" placeholder="Nhập số điện thoại" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Nhập email" required>
        </div>
        <button type="submit" name="btnThem" class="btn btn-primary">Thêm</button>
    </form>
</div>

<?php 

    if (isset($data['Result'])) {
        if ($data['Result']) {
            echo '<div class="alert alert-success mt-3 col-4">
                    <strong>Thêm thành công!</strong>.
                </div>';
        } else {
            echo '<div class="alert alert-danger mt-3">
                    <strong>Thêm thất bại!</strong>.
                </div>';
        }
    }

?>
