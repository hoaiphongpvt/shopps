<div class="d-flex justify-content-around">
    <div class="col-3">
        <form action="http://localhost/phpmvc/Home/findById" method="POST">
            <div class="mb-3 mt-3">
                <label for="id" class="form-label">Nhập ID sinh viên cần sửa:</label>
                <input type="text" class="form-control" id="id" name="id" required>
            </div>
            <button type="submit" class="btn btn-primary" name="btnFind">Tìm kiếm</button>
        </form>
        <?php 
            if(isset($data["Result"])) {
                if ($data["Result"]) {

                    echo '<div class="alert alert-info mt-3">
                        <strong>Cập nhật thành công!</strong>.
                    </div>';

                } else {

                    echo '<div class="alert alert-danger mt-3">
                            <strong>Cập nhật thất bại!</strong>.
                        </div>';
                }
                
            }
        ?>
    </div>
    
    <?php 
        if (isset($data['Student'])) {
            if($data['Student']) {
                echo '
                <div class="col-5">
                    <form action="http://localhost/phpmvc/Home/XuLySua" method="POST">
                        <div class="mb-3 mt-3">
                            <label for="hoten" class="form-label">Họ tên:</label>
                            <input type="text" class="form-control" id="hoten" placeholder="Nhập họ tên" name="hoten" value="'.$data['Student'][0]['hoten'].'" required>
                        </div>
                        <div class="mb-3">
                            <label for="ngaysinh" class="form-label">Ngày sinh:</label>
                            <input type="date" class="form-control" id="namsinh" name="ngaysinh" value="'.$data['Student'][0]['ngaysinh'].'" required>
                        </div>
                        <div class="mb-3">
                            <label for="diachi" class="form-label">Địa chỉ:</label>
                            <input type="text" class="form-control" id="diachi" name="diachi" value="'.$data['Student'][0]['diachi'].'" required>
                        </div>
                        <div class="mb-3">
                            <label for="sdt" class="form-label">Số điện thoại:</label>
                            <input type="text" class="form-control" id="sdt" name="sdt" value="'.$data['Student'][0]['sdt'].'" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="text" class="form-control" id="email" name="email" value="'.$data['Student'][0]['email'].'" required>
                        </div>
                        <input type="hidden" name="id" value="'.$data['Student'][0]['id'].'"/>
                        <button type="submit" name="btnUpdate" class="btn btn-primary">Sửa</button>
                    </form>
                ';
            } else {
                echo '<div class="alert alert-danger mt-3">
                        <strong>Không tìm thấy sinh viên!</strong>.
                    </div>';
            } 
        }
    ?>
   
    
</div>
