<!-- Modal -->
<div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="padding: 10px;">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Thông báo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-danger">
        Vui lòng chọn điều kiện cần lọc!
      </div>
    </div>
  </div>
</div>
<nav class="container navbar navbar-light mt-2 d-flex justify-content-between align-items-center flex-wrap px-4 px-lg-5">

    <div class="d-flex">
        <a class="navbar-brand border rounded d-flex align-items-center" href="?companyID=1">
            <img src="./public/assets/img/logo-banner/logo-iphone-220x48.png" width="92" height="20" alt="iPhone">
        </a>

        <a class="navbar-brand border rounded d-flex align-items-center" href="?companyID=2">
            <img src="./public/assets/img/logo-banner/samsungnew-220x48-1.png" width="92" height="20" alt="Samsung">
        </a>

        <a class="navbar-brand border rounded d-flex align-items-center" href="?companyID=3">
            <img src="./public/assets/img/logo-banner/logo-xiaomi-220x48-5.png" width="92" height="20" alt="Xiaomi">
        </a>

        <a class="navbar-brand border rounded d-flex align-items-center" href="?companyID=4">
            <img src="./public/assets/img/logo-banner/OPPO42-b_5.jpg" width="92" height="20" alt="OPPO">
        </a>

        <a class="navbar-brand border rounded d-flex align-items-center" href="?companyID=5">
            <img src="./public/assets/img/logo-banner/vivo-logo-220-220x48-3.png" width="92" height="20" alt="Vivo">
        </a>
    </div>

    <form action="./Search" method="post" id="formFilter" class="d-flex justify-content-between align-items-center">
        <select class="form-select ms-2" name="price">
            <option value="" selected>Giá</option>
            <option value="<4">Dưới 4 triệu</option>
            <option value="4-8">Từ 4 đến 8 triệu</option>
            <option value="8-20">Từ 8 đến 20 triệu</option>
            <option value=">20">Trên 20 triệu</option>
        </select>

        <select class="form-select ms-2" name="ram">
            <option value="" selected>RAM</option>
            <option value="3">3 GB</option>
            <option value="4">4 GB</option>
            <option value="6">6 GB</option>
            <option value="8">8 GB</option>
            <option value="12">12 GB</option>
        </select> 

        <select class="form-select ms-2" name="storage">
            <option value="" selected>Dung lượng</option>
            <option value="64">64GB</option>
            <option value="128">128 GB</option>
            <option value="256">256 GB</option>
            <option value="512">512 GB</option>
            <option value="1TB">1 TB</option>
        </select> 

        <button id="btnFilter" type="submit" class="btn bg-danger text-white ms-3">LỌC</button>

    </form>
</nav>