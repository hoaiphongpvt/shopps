<div class="mt-5">
    <p class="h5 text-primary">Danh sách sinh viên</p>
    <table class="table table-hover">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Họ tên</th>
                <th>Ngày sinh</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($data['List'] as $key => $value) {
                    echo "
                        <tr>
                            <td>".$value['id']."</td>
                            <td>".$value['hoten']."</td>
                            <td>".$value['ngaysinh']."</td>
                            <td>".$value['diachi']."</td>
                            <td>".$value['sdt']."</td>
                            <td>".$value['email']."</td>
                        </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</div>
