<!-- Product section-->
 <section class="py-3">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-5"><img class="card-img-top mb-5 mb-md-0" src="<?php echo $data['Product'][0]['HINHANH'] ?>" alt="..." /></div>
            <div class="col-md-7">
                <h1 class="display-5 fw-bolder"> <?php echo $data['Product'][0]['TEN'] ?></h1>
                <div class="fs-5 mb-5">
                    <?php 
                        if ($data['Product'][0]['GIAGIAM']) {
                            echo '<span class="text-decoration-line-through h6">'.currency_format($data['Product'][0]['GIAGOC']).'</span>
                                <span class="text-danger">'.currency_format($data['Product'][0]['GIAGIAM']).'</span>
                            ';
                        } else {
                            echo '<span>'.currency_format($data['Product'][0]['GIAGOC']).'</span>';
                        }
                    ?> 
                </div>
                <p class="lead"> <?php echo $data['Product'][0]['MOTA'] ?></p>
                <div class="d-flex">
                    <button class="form-control text-center me-2" id="decrease" style="max-width: 2.5rem">-</button>
                    <input class="form-control text-center me-2" id="quantity" type="num" value="1" style="max-width: 3rem"/>
                    <button class="form-control text-center me-4" id="increase" style="max-width: 2.5rem">+</button>
                    
                    <button class="btn btn-outline-dark flex-shrink-0" type="button">
                        <i class="bi-cart-fill me-1"></i>
                        Thêm vào giỏ hàng
                    </button>
                </div>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 align-items-center specifications">
            <h3 class="fw-bolder mb-4">Thông số chi tiết</h3>
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item d-flex"><p class="text-spec">Màn hình:</p> <span class="ms-5"><?php echo $data['ProductDetails'][0]['TS_MANHINH'] ?></span></li>
                    <li class="list-group-item d-flex"><p class="text-spec">Bộ nhớ:</p> <span class="ms-5"><?php echo $data['ProductDetails'][0]['TS_BONHO'] ?></span></li>
                    <li class="list-group-item d-flex"><p class="text-spec">Camera:</p> <span class="ms-5"><?php echo $data['ProductDetails'][0]['TS_CAMERA'] ?></span></li>
                    <li class="list-group-item d-flex"><p class="text-spec">Pin:</p> <span class="ms-5"><?php echo $data['ProductDetails'][0]['TS_PIN'] ?></span></li>
                    <li class="list-group-item d-flex"><p class="text-spec">Hệ điều hành:</p> <span class="ms-5"><?php echo $data['ProductDetails'][0]['HDH'] ?></span></li>
                    <li class="list-group-item d-flex"><p class="text-spec">Chipset:</p> <span class="ms-5"><?php echo $data['ProductDetails'][0]['CHIP'] ?></span></li>
                    <li class="list-group-item d-flex"><p class="text-spec">Sim</p> <span class="ms-5"><?php echo $data['ProductDetails'][0]['SIM'] ?></span></li>
                </ul>
            </div>
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0 spe-photo" src="<?php echo $data['ProductDetails'][0]['ANHTHONGSO'] ?>" alt="..." /></div>
        </div>
    </div>
</section>
<!-- Related items section-->
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 mt-5">
        <h3 class="fw-bolder mb-4">Sản phẩm liên quan</h3>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php 
                foreach($data['ListRelated'] as $key => $value) {
                    echo '<div class="col mb-5">
                            <div class="card h-100">';
                            if ($value['GIAGIAM']) {
                                echo '<div class="badge bg-dark text-white position-absolute" style="top: 0.2rem; right: 0.2rem">Sale</div>';
                            }
                    echo '<img class="card-img-top" src="' . $value['HINHANH'] . '" alt="..." />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">' . $value['TEN'] . '</h5>';
                                    if ($value['GIAGIAM']) {
                                        echo '<span class="text-muted text-decoration-line-through h6">' . currency_format($value['GIAGOC']) . '</span>
                                                <span class="text-danger">'.currency_format($value['GIAGIAM']).'</span>
                                                ';
                                    } else {
                                        echo currency_format($value['GIAGOC']);
                                    }
                    echo '      </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <form action="http://localhost/shopps/Product" method="post" class="text-center">
                                    <input type="hidden" name="ID" value="' . $value['ID'] . '"/>
                                    <input type="hidden" name="ID_NSX" value="' . $value['ID_NSX'] . '"/>
                                    <button type="submit" class="btn btn-outline-dark mt-auto" >Xem chi tiết</button>
                                </form>
                            </div>
                        </div>
                    </div>';
                }
            ?>
        </div>
    </div>
</section>

