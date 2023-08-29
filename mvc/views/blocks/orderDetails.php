<?php 
    if(isset($data['OrderDetails'])) {
      $str = '<div class="modal" id="modalDetailOrder" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header d-flex justify-content-center">
                      <h5 class="modal-title">Chi tiết đơn hàng</h5>
                </div>';

                for ($i = 0; $i < sizeof($data['OrderDetails']); $i++) {
                  $str .= '<div class="modal-body">
                              <div class="card-body">
                                  <div class="row d-flex align-items-center">
                                      <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                          <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                              <img src="' . $data['OrderDetails'][$i]['HINHANH'] . '" class="w-100" />
                                              <a href="#!">
                                                  <div class="hover-overlay">
                                                      <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                  </div>
                                              </a>
                                          </div>
                                      </div>
                                      <div class="col-md-5 col-lg-5 col-xl-5">
                                          <p>' . $data['OrderDetails'][$i]['TEN'] . '</p>
                                          <p class="text-truncate mb-4 mb-md-0">
                                              SL: <span>' . $data['OrderDetails'][$i]['SOLUONG'] . '</span>
                                          </p>
                                      </div>
                                      <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">';
                  
                                      if ($data['OrderDetails'][$i]['GIAGIAM']) {
                                          $str .= '<span class="text-danger"><s>' . currency_format($data['OrderDetails'][$i]['GIAGOC']) . '</s></span>
                                                  <h5 class="mb-1 me-1">' . currency_format($data['OrderDetails'][$i]['GIAGIAM']) . '</h5>';
                                      } else {
                                          $str .= '<h5 class="text">' . currency_format($data['OrderDetails'][$i]['GIAGOC']) . '</h5>';
                                      }
                                      
                                      $str .= '</div>
                                                  </div>
                                              </div>
                                          </div>';
                  }
              $str .= '<div class="modal-footer">
              <button type="button" class="btn btn-danger" id="btnClose" data-dismiss="modal">Đóng</button>
            </div>
          </div>
        </div>
      </div>';

      echo $str;
    }
?>