<section class="vh-100">
  <div class="container py-5 h-100">
    <a class="navbar-brand fs-3" href="./">SHOP PS</a>
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="./public/assets/img/logo-banner/img-login.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form id="formLogin" action="Login/login" method="post">
          <h1 class="h2 mb-sm-5 text-center">ĐĂNG NHẬP</h1>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input name="username" type="text" id="username" class="form-control form-control-lg" placeholder="Tên đăng nhập" require/>
            <p id="msg-username" class="form-label ps-sm-3 h6 text-danger" for="username"></p>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input name="password" type="password" id="password" class="form-control form-control-lg" placeholder="Mật khẩu" require/>
            <p id="msg-password" class="form-label ps-sm-3 h6 text-danger"></p>
          </div>
          <div>
            <p>Bạn chưa có tài khoản? <a href="./SignUp">Đăng kí</a></p>
          </div>
          <p id="msg" class="mb-4 h6 text-danger"></p>
          <!-- Submit button -->
          <button id="btnLogin" type="submit" class="btn btn-primary w-100">ĐĂNG NHẬP</button>
        </form>
      </div>
    </div>
  </div>
</section>