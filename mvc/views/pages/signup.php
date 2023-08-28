<!-- Modal -->
<div class="modal" id="modalRegister" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="padding: 10px;">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Thông báo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-success">
        Đăng kí thành công!
      </div>
    </div>
  </div>
</div>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-3">
            <div class="row justify-content-center align-items-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng kí</p>

                <div class="mx-1 mx-md-4">

                    <div class="form-outline flex-fill mb-3">
                      <input name="fullname" type="text" id="fullname" class="form-control" placeholder="Họ và tên"/>
                      <p id="msg-fullname" class="form-label ps-sm-2 h6 text-danger"></p>
                    </div>

                    <div class="form-outline flex-fill mb-3">
                      <input name="email" type="email" id="email" class="form-control" placeholder="Email" />
                      <p id="msg-email" class="form-label ps-sm-2 h6 text-danger"></p>
                    </div>

                    <div class="form-outline flex-fill mb-3">
                      <input name="phoneNumber" type="text" id="phoneNumber" class="form-control" placeholder="Số điện thoại" />
                      <p id="msg-phoneNumber" class="form-label ps-sm-2 h6 text-danger"></p>
                    </div>

                    <div class="form-outline flex-fill mb-3">
                      <input name="address" type="text" id="address" class="form-control" placeholder="Địa chỉ" />
                      <p id="msg-address" class="form-label ps-sm-2 h6 text-danger"></p>
                    </div>

                    <div class="form-outline flex-fill mb-3">
                      <input name="dayOfBirth" type="date" id="dayOfBirth" class="form-control" placeholder="Ngày sinh" />
                      <p id="msg-dayOfBirth" class="form-label ps-sm-2 h6 text-danger"></p>
                    </div>

                    <div class="form-outline flex-fill mb-3">
                      <input name="username" type="text" id="username" class="form-control" placeholder="Tên đăng nhâp" />
                      <p id="msg-username" class="form-label ps-sm-2 h6 text-danger"></p>
                    </div>

                    <div class="form-outline flex-fill mb-3">
                      <input name="password" type="password" id="password" class="form-control" placeholder="Mật khẩu" />
                      <p id="msg-password" class="form-label ps-sm-2 h6 text-danger"></p>
                    </div>

                    <div class="form-outline flex-fill mb-3">
                      <input type="password" id="repassword" class="form-control" placeholder="Nhập lại mật khẩu" />
                      <p id="msg-repassword" class="form-label ps-sm-2 h6 text-danger"></p>
                    </div>

                  <div class="form-check mb-3">
                    <input class="form-check-input me-2" type="checkbox" value="" id="Terms" />
                    <label class="form-check-label" for="form2Example3">
                      Tôi đồng ý với các điều khoản và dịch vụ
                    </label>
                    <p id="msg-Terms" class="form-label ps-sm-2 h6 text-danger"></p>
                  </div>

                  <div>
                    <p>Bạn đã có tài khoản? <a href="./Login">Đăng nhập</a></p>
                  </div>

                  <div class="mb-3 mb-lg-4 ">
                    <button id="btnRegister" type="button" class="btn btn-danger w-100">ĐĂNG KÍ</button>
                  </div>

                </div>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                <img src="./public/assets/img/logo-banner/signup.webp"
                  class="img-fluid" alt="Sample image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>