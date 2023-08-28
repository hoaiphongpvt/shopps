 <!-- Navigation-->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="./">SHOP PS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="./">Trang chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="./AboutUs">Giới thiệu</a></li>
            </ul>
            <form action="./Search" method="post" class="d-flex flex-grow-1 justify-content-center">
                <input type="text" id="keyword" name="keyword" class="form-control w-75 " placeholder="Nhập sản phẩm cần tìm...">
                <button type="submit" class="btn btn-search" id="btnSearch">
                        <i class="bi bi-search"></i>
                </button>
            </form>
            <div class="d-flex">
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
                <a href="./Login" id="login" class="btn btn-outline-dark ms-2">
                        Đăng nhập
                </a>
            </div>
        </div>
    </div>
</nav>