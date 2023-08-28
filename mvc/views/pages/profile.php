<?php 
    $user = $_SESSION['user']
?>
<section style="background-color: #eee;">
  <div class="container py-3">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src=<?php echo $user['HINHANH']?>  class="rounded-circle img-fluid" style="width: 150px;" />
            <h5 class="my-3"><?php echo $user['HOTEN']?></h5>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-outline-primary ms-1">Cập nhật</button>
              <a href="./Login/logout" class="btn btn-outline-danger ms-1">Đăng xuất</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Họ và tên</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $user['HOTEN']?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $user['EMAIL']?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Số điện thoại</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $user['DIENTHOAI']?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Địa chỉ</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $user['DIACHI']?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Ngày sinh</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo date('d/m/Y', strtotime($user['NGAYSINH']))?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-12 mb-3 mb-lg-5">
            <div class="overflow-hidden card table-nowrap table-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Đơn hàng đã mua</h5>
                </div>
                <div class="table-responsive px-sm-2">
                    <table class="table mb-0">
                        <thead class="small text-uppercase bg-body text-muted">
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Ngày đặt</th>
                                <th>Ngày giao</th>
                                <th>Nơi nhận hàng</th>
                                <th>Phương thức thanh toán</th>
                                <th>Tổng tiền</th>
                                <th>Trạng thái</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                for($i = 0; $i < sizeof($data['List']); $i++) {
                                    echo '<tr class="align-middle">
                                            <td class="text-center">'.$data['List'][$i]['ID_HOADON'].'</td>
                                            <td>'.date('d/m/Y', strtotime($data['List'][$i]['NGAYLAP'])).'</td>
                                            <td>'.date('d/m/Y', strtotime($data['List'][$i]['NGAYGIAO'])).'</td>
                                            <td>'.$data['List'][$i]['DIACHI'].'</td>
                                            <td class="text-center">'.$data['List'][$i]['PHUONGTHUCTT'].'</td>
                                            <td>'.currency_format($data['List'][$i]['TONGTIEN']).'</td>
                                            <td>'.$data['List'][$i]['TRANGTHAI'].'</td>
                                            <td class="text-center"><a class="text-decoration-none" href="?idHD='.$data['List'][$i]['ID_HOADON'].'">Xem</a></td>
                                        </tr>
                                    ';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>