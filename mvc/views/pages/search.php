<!-- Section-->
<section class="py-3">
    <div class="container px-4 px-lg-5 mt-3">
        <?php 
            if ($data['Total'] > 0) {
                echo '<h2 class="h4 mb-5">Tìm thấy <span class="text-danger">'.$data['Total'].'</span> kết quả phù hợp.</h2>';
            } else {
                echo '<h2 class="h4 mb-5">Không tìm thấy kết quả phù hợp.</h2>';
            }
        ?>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php 
                foreach($data['ResultSearch'] as $key => $value) {
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
                                        echo '<span class="h6">'.currency_format($value['GIAGOC']).'</span>';
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