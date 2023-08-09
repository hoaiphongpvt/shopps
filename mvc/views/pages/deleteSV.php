<div class="col-3">
    <form action="http://localhost/phpmvc/Home/XuLyXoa" method="POST">
        <div class="mb-3 mt-3">
            <label for="id" class="form-label">Nhập ID sinh viên cần xóa:</label>
            <input type="text" class="form-control" id="id" name="id" required>
        </div>
        <button type="submit" class="btn btn-danger" name="btnDelete">Xóa</button>
    </form>
    <?php 
        if(isset($data["Result"])) {
            if ($data["Result"]) {

                echo '<div class="alert alert-info mt-3">
                    <strong>Xóa thành công!</strong>.
                </div>';

            } else {

                echo '<div class="alert alert-danger mt-3">
                        <strong>Xóa thất bại!</strong>.
                    </div>';
            }
            
        }
    ?>
</div>