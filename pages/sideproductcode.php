<!-- Categories big-->
<section class="products">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="pb-5">Home cleaners - Quick View 2</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English..
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $qry = mysqli_query($conn,"select * from product");

            if($qry)
            {
                if(mysqli_num_rows($qry) != 0)
                {
                    $count=1;
                    while($rw = mysqli_fetch_array($qry))
                    {   
                        ?>
                        <div class="col-xl-3 col-lg-6 col-md-6"> 
                        <div class="product product-type-0" data-aos="zoom-in" data-aos-delay="0">
                        <div class="product-image mb-md-3">
                            <a href="#">
                            <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="assets/img/product/Final-Product-Out.png" alt="product"/><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="product"/></div>
                            </a>
                            <div class="product-hover-overlay">
                            <a class="text-dark text-sm" href="#!">
                                <span class="d-none d-sm-inline btn border border-primary" href="#!" data-bs-toggle="modal" data-bs-target="#quickView<?php echo $rw['id'] ?>">Quick View</span>
                            </a>
                            </div>
                        </div>
                        <div class="productName">
                            <h6 class="text-base mb-1"><a class="text-dark" href="#"><?php echo $rw['name'] ?></a></h6>
                        </div>
                        <div class="pt-3 productName">
                            <a href="shop.php" class="btn">View Product</a>
                        </div>
                        </div>
                    </div>        
                        <?php       
                        // echo $rw['name'];
                        // $CodeWallTutorialArray = json_decode($rw['images']);

                        // for ($i = 0; $i < count($CodeWallTutorialArray); $i++)  {
                        //     echo $CodeWallTutorialArray[$i] ."<br />";
                        // }
                    }
                }
            }
            ?>

            <!-- product-->
            <!-- <div class="col-xl-3 col-lg-6 col-md-6"> 
                <div class="product product-type-0" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                    <a href="#">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="assets/img/product/Final-Product-Out.png" alt="product"/><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="product"/></div>
                    </a>
                    <div class="product-hover-overlay">
                    <a class="text-dark text-sm" href="#!">
                        <span class="d-none d-sm-inline btn border border-primary" href="#!" data-bs-toggle="modal" data-bs-target="#quickView2">Quick View</span>
                    </a>
                    </div>
                </div>
                <div class="productName">
                    <h6 class="text-base mb-1"><a class="text-dark" href="#">NATURAL LAVENDER HAND WASH - 500 ML</a></h6>
                </div>
                <div class="pt-3 productName">
                    <a href="shop.php" class="btn">View Product</a>
                </div>
                </div>
            </div> -->
            <!-- /product   -->

        </div>
        
        <!-- Quickview Modal    -->
        <?php
        $qry = mysqli_query($conn,"select * from product");

        if($qry)
        {
            if(mysqli_num_rows($qry) != 0)
            {
                $count=1;
                while($rw = mysqli_fetch_array($qry))
                {   
                    ?>
            <div class="modal fade quickview" id="quickView<?php echo $rw['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                    <button class="btn-close btn-close-absolute btn-close-lg btn-close-rotate" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body quickview-body">
                        <div class="row">
                        <div class="col-lg-6">
                            <div class="detail-carousel">
                            <div class="product-badge badge bg-primary">Freshs</div>
                            <div class="product-badge badge bg-dark">Sale</div>
                            <div class="swiper swiper-container quickview-slider" id="quickViewSlider">
                                <!-- Additional required wrapper-->
                                <div class="swiper-wrapper">
                                <!-- Slides-->
                                <?php
                                    // $CodeWallTutorialArray = json_decode($rw['images']);

                                    // for ($i = 0; $i < count($CodeWallTutorialArray); $i++)  { ?>
                                        <!-- <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/<?php //echo $CodeWallTutorialArray[$i] ?>" alt="Modern Jacket 1"></div> -->
                                    <?php //}
                                ?>
                                <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 1"></div>
                                <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/Final-Product-Out.png" alt="Modern Jacket 2"></div>
                                <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 3"></div>
                                <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/Final-Product-Out.png" alt="Modern Jacket 4"></div>
                                <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 5"></div>
                                </div>
                            </div>
                            <div class="swiper-thumbs" data-swiper="#quickViewSlider">
                                <?php
                                    // $CodeWallTutorialArray = json_decode($rw['images']);

                                    // for ($i = 0; $i < count($CodeWallTutorialArray); $i++)  { ?>
                                        <!-- <button class="swiper-thumb-item detail-thumb-item mb-3 active"><img class="img-fluid" src="assets/img/product/<?php //echo $CodeWallTutorialArray[$i] ?>" alt="Modern Jacket 0"></button> -->
                                    <?php //}
                                ?>
                                <button class="swiper-thumb-item detail-thumb-item mb-3 active"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 0"></button>
                                <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="assets/img/product/Final-Product-Out.png" alt="Modern Jacket 1"></button>
                                <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 2"></button>
                                <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="assets/img/product/Final-Product-Out.png" alt="Modern Jacket 3"></button>
                                <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 4"></button>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-6 p-lg-5">
                            <h2 class="mb-4 mt-4 mt-lg-1"><?php echo $rw['name'] ?></h2>
                            <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                            <ul class="list-inline mb-2 mb-sm-0">
                                <li class="list-inline-item h4 fw-light mb-0">RS. <?php echo $rw['price'] ?></li>
                                <li class="list-inline-item text-muted fw-light"> 
                                <del>$90.00</del>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center text-sm">
                                <ul class="list-inline me-2 mb-0">
                                <li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
                                <li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
                                <li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
                                <li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
                                <li class="list-inline-item me-0"><i class="fa fa-star text-gray-300"></i></li>
                                </ul><span class="text-muted text-uppercase">25 reviews</span>
                            </div>
                            </div>
                            <p class="mb-4 text-muted"><?php echo $rw['description'] ?></p>
                            <form id="buyForm_modal" action="#">
                            <div class="row">
                                <div class="col-sm-6 col-lg-12 detail-option mb-5">
                                <h6 class="detail-option-heading">Type <span>(required)</span></h6>
                                <label class="btn btn-sm btn-outline-primary detail-option-btn-label" for="material_0_modal"> Hoodie
                                    <input class="input-invisible" type="radio" name="material" value="value_0" id="material_0_modal" required>
                                </label>
                                <label class="btn btn-sm btn-outline-primary detail-option-btn-label" for="material_1_modal"> College
                                    <input class="input-invisible" type="radio" name="material" value="value_1" id="material_1_modal" required>
                                </label>
                                </div>
                            </div>
                            <div class="input-group w-100 mb-4">
                                <input class="form-control form-control-lg detail-quantity" name="items" type="number" value="1">
                                <div class="flex-grow-1">
                                <div class="d-grid h-100">
                                    <button class="btn btn-dark" type="submit"> <i class="fa fa-shopping-cart me-2"></i>Quick View</button>
                                </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-6"><a href="#"> <i class="far fa-heart me-2"></i>Add to wishlist </a></div>
                                <div class="col-6 text-end">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item me-2"><a class="text-dark text-primary-hover" href="#"><i class="fab fa-facebook-f"> </i></a></li>
                                    <li class="list-inline-item"><a class="text-dark text-primary-hover" href="#"><i class="fab fa-twitter"> </i></a></li>
                                </ul>
                                </div>
                            </div>
                            <ul class="list-unstyled">
                                <li><strong>Category:</strong> <a class="text-muted" href="#">Jeans</a></li>
                                <li><strong>Tags:</strong> <a class="text-muted" href="#">Leisure</a>, <a class="text-muted" href="#">Elegant</a></li>
                            </ul>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        <?php       
                    // echo $rw['name'];
                    // $CodeWallTutorialArray = json_decode($rw['images']);

                    // for ($i = 0; $i < count($CodeWallTutorialArray); $i++)  {
                    //     echo $CodeWallTutorialArray[$i] ."<br />";
                    // }
                }
            }
        }
        ?>
    </div>
</section>
<!-- End Categories big-->

<!-- Categories big-->
<section class="products">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="pb-5">Home cleaners - Quick View</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English..
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- product-->
            <div class="col-xl-3 col-lg-6 col-md-6"> 
                <div class="product product-type-0" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                    <a href="#">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="assets/img/product/Final-Product-Out.png" alt="product"/><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="product"/></div>
                    </a>
                    <div class="product-hover-overlay">
                    <a class="text-dark text-sm" href="#!">
                        <span class="d-none d-sm-inline btn border border-primary quickviewbutton" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">Quick View</span>
                    </a>
                    </div>
                </div>
                <div class="productName">
                    <h6 class="text-base mb-1"><a class="text-dark" href="#">NATURAL LAVENDER HAND WASH - 500 ML</a></h6>
                </div>
                <div class="pt-3 productName">
                    <a href="shop.php" class="btn">View Product</a>
                </div>
                </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="product product-type-0" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1.html">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="assets/img/product/Final-Product-Out.png" alt="product"/><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="product"/></div>
                    </a>
                    <div class="product-hover-overlay">
                    <a class="text-dark text-sm" href="#!">
                        <span class="d-none d-sm-inline btn border border-primary" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">Quick View</span>
                    </a>
                    </div>
                </div>
                <div class="productName">
                    <h6 class="text-base mb-1"><a class="text-dark" href="#">NATURAL LAVENDER HAND WASH - 500 ML</a></h6>
                </div>
                <div class="pt-3 productName">
                    <a href="shop.php" class="btn">View Product</a>
                </div>
                </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="product product-type-0" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                    <a href="detail-1.html">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="assets/img/product/Final-Product-Out.png" alt="product"/><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="product"/></div>
                    </a>
                    <div class="product-hover-overlay">
                    <a class="text-dark text-sm" href="#!">
                        <span class="d-none d-sm-inline btn border border-primary" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">Quick View</span>
                    </a>
                    </div>
                </div>
                <div class="productName">
                    <h6 class="text-base mb-1"><a class="text-dark" href="#">NATURAL LAVENDER HAND WASH - 500 ML</a></h6>
                </div>
                <div class="pt-3 productName">
                    <a href="shop.php" class="btn">View Product</a>
                </div>
                </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="product product-type-0" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                    <a href="detail-1.html">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="assets/img/product/Final-Product-Out.png" alt="product"/><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="product"/></div>
                    </a>
                    <div class="product-hover-overlay">
                    <a class="text-dark text-sm" href="#!">
                        <span class="d-none d-sm-inline btn border border-primary" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">Quick View</span>
                    </a>
                    </div>
                </div>
                <div class="productName">
                    <h6 class="text-base mb-1"><a class="text-dark" href="#">NATURAL LAVENDER HAND WASH - 500 ML</a></h6>
                </div>
                <div class="pt-3 productName">
                    <a href="shop.php" class="btn">View Product</a>
                </div>
                </div>
            </div>
            <!-- /product   -->
        

        </div>
        
        <!-- Quickview Modal    -->
        <div class="modal fade quickview" id="quickView" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                <button class="btn-close btn-close-absolute btn-close-lg btn-close-rotate" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body quickview-body">
                    <div class="row">
                    <div class="col-lg-6">
                        <div class="detail-carousel">
                        <div class="product-badge badge bg-primary">Fresh</div>
                        <div class="product-badge badge bg-dark">Sale</div>
                        <div class="swiper swiper-container quickview-slider" id="quickViewSlider">
                            <!-- Additional required wrapper-->
                            <div class="swiper-wrapper">
                            <!-- Slides-->
                            <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 1"></div>
                            <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/Final-Product-Out.png" alt="Modern Jacket 2"></div>
                            <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 3"></div>
                            <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/Final-Product-Out.png" alt="Modern Jacket 4"></div>
                            <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 5"></div>
                            </div>
                        </div>
                        <div class="swiper-thumbs" data-swiper="#quickViewSlider">
                            <button class="swiper-thumb-item detail-thumb-item mb-3 active"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 0"></button>
                            <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="assets/img/product/Final-Product-Out.png" alt="Modern Jacket 1"></button>
                            <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 2"></button>
                            <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="assets/img/product/Final-Product-Out.png" alt="Modern Jacket 3"></button>
                            <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 4"></button>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-lg-5">
                        <h2 class="mb-4 mt-4 mt-lg-1">NATURAL LAVENDER HAND WASH - 500 ML</h2>
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                        <ul class="list-inline mb-2 mb-sm-0">
                            <li class="list-inline-item h4 fw-light mb-0">RS. 65.00</li>
                            <li class="list-inline-item text-muted fw-light"> 
                            <del>$90.00</del>
                            </li>
                        </ul>
                        <div class="d-flex align-items-center text-sm">
                            <ul class="list-inline me-2 mb-0">
                            <li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
                            <li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
                            <li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
                            <li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
                            <li class="list-inline-item me-0"><i class="fa fa-star text-gray-300"></i></li>
                            </ul><span class="text-muted text-uppercase">25 reviews</span>
                        </div>
                        </div>
                        <p class="mb-4 text-muted">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                        <form id="buyForm_modal" action="#">
                        <div class="row">
                            <div class="col-sm-6 col-lg-12 detail-option mb-5">
                            <h6 class="detail-option-heading">Type <span>(required)</span></h6>
                            <label class="btn btn-sm btn-outline-primary detail-option-btn-label" for="material_0_modal"> Hoodie
                                <input class="input-invisible" type="radio" name="material" value="value_0" id="material_0_modal" required>
                            </label>
                            <label class="btn btn-sm btn-outline-primary detail-option-btn-label" for="material_1_modal"> College
                                <input class="input-invisible" type="radio" name="material" value="value_1" id="material_1_modal" required>
                            </label>
                            </div>
                        </div>
                        <div class="input-group w-100 mb-4">
                            <input class="form-control form-control-lg detail-quantity" name="items" type="number" value="1">
                            <div class="flex-grow-1">
                            <div class="d-grid h-100">
                                <button class="btn btn-dark" type="submit"> <i class="fa fa-shopping-cart me-2"></i>Quick View</button>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-6"><a href="#"> <i class="far fa-heart me-2"></i>Add to wishlist </a></div>
                            <div class="col-6 text-end">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-2"><a class="text-dark text-primary-hover" href="#"><i class="fab fa-facebook-f"> </i></a></li>
                                <li class="list-inline-item"><a class="text-dark text-primary-hover" href="#"><i class="fab fa-twitter"> </i></a></li>
                            </ul>
                            </div>
                        </div>
                        <ul class="list-unstyled">
                            <li><strong>Category:</strong> <a class="text-muted" href="#">Jeans</a></li>
                            <li><strong>Tags:</strong> <a class="text-muted" href="#">Leisure</a>, <a class="text-muted" href="#">Elegant</a></li>
                        </ul>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Categories big-->


<!-- Categories big-->
<section class="products">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="pb-5">Home cleaners - Quick View</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English..
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- product-->
            <div class="col-xl-3 col-lg-6 col-md-6"> 
                <div class="product product-type-0" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                    <a href="#">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="assets/img/product/Final-Product-Out.png" alt="product"/><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="product"/></div>
                    </a>
                    <div class="product-hover-overlay">
                    <a class="text-dark text-sm" href="#!">
                        <span class="d-none d-sm-inline btn border border-primary" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">Quick View</span>
                    </a>
                    </div>
                </div>
                <div class="productName">
                    <h6 class="text-base mb-1"><a class="text-dark" href="#">NATURAL LAVENDER HAND WASH - 500 ML</a></h6>
                </div>
                <div class="pt-3 productName">
                    <a href="shop.php" class="btn">View Product</a>
                </div>
                </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="product product-type-0" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1.html">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="assets/img/product/Final-Product-Out.png" alt="product"/><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="product"/></div>
                    </a>
                    <div class="product-hover-overlay">
                    <a class="text-dark text-sm" href="#!">
                        <span class="d-none d-sm-inline btn border border-primary" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">Quick View</span>
                    </a>
                    </div>
                </div>
                <div class="productName">
                    <h6 class="text-base mb-1"><a class="text-dark" href="#">NATURAL LAVENDER HAND WASH - 500 ML</a></h6>
                </div>
                <div class="pt-3 productName">
                    <a href="shop.php" class="btn">View Product</a>
                </div>
                </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="product product-type-0" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                    <a href="detail-1.html">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="assets/img/product/Final-Product-Out.png" alt="product"/><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="product"/></div>
                    </a>
                    <div class="product-hover-overlay">
                    <a class="text-dark text-sm" href="#!">
                        <span class="d-none d-sm-inline btn border border-primary" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">Quick View</span>
                    </a>
                    </div>
                </div>
                <div class="productName">
                    <h6 class="text-base mb-1"><a class="text-dark" href="#">NATURAL LAVENDER HAND WASH - 500 ML</a></h6>
                </div>
                <div class="pt-3 productName">
                    <a href="shop.php" class="btn">View Product</a>
                </div>
                </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="product product-type-0" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                    <a href="detail-1.html">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="assets/img/product/Final-Product-Out.png" alt="product"/><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="product"/></div>
                    </a>
                    <div class="product-hover-overlay">
                    <a class="text-dark text-sm" href="#!">
                        <span class="d-none d-sm-inline btn border border-primary" href="#!" data-bs-toggle="modal" data-bs-target="#quickView">Quick View</span>
                    </a>
                    </div>
                </div>
                <div class="productName">
                    <h6 class="text-base mb-1"><a class="text-dark" href="#">NATURAL LAVENDER HAND WASH - 500 ML</a></h6>
                </div>
                <div class="pt-3 productName">
                    <a href="shop.php" class="btn">View Product</a>
                </div>
                </div>
            </div>
            <!-- /product   -->
        

        </div>
        
        <!-- Quickview Modal    -->
        <div class="modal fade quickview" id="quickView" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                <button class="btn-close btn-close-absolute btn-close-lg btn-close-rotate" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body quickview-body">
                    <div class="row">
                    <div class="col-lg-6">
                        <div class="detail-carousel">
                        <div class="product-badge badge bg-primary">Fresh</div>
                        <div class="product-badge badge bg-dark">Sale</div>
                        <div class="swiper swiper-container quickview-slider" id="quickViewSlider">
                            <!-- Additional required wrapper-->
                            <div class="swiper-wrapper">
                            <!-- Slides-->
                            <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 1"></div>
                            <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/Final-Product-Out.png" alt="Modern Jacket 2"></div>
                            <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 3"></div>
                            <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/Final-Product-Out.png" alt="Modern Jacket 4"></div>
                            <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 5"></div>
                            </div>
                        </div>
                        <div class="swiper-thumbs" data-swiper="#quickViewSlider">
                            <button class="swiper-thumb-item detail-thumb-item mb-3 active"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 0"></button>
                            <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="assets/img/product/Final-Product-Out.png" alt="Modern Jacket 1"></button>
                            <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 2"></button>
                            <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="assets/img/product/Final-Product-Out.png" alt="Modern Jacket 3"></button>
                            <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 4"></button>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-lg-5">
                        <h2 class="mb-4 mt-4 mt-lg-1">NATURAL LAVENDER HAND WASH - 500 ML</h2>
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                        <ul class="list-inline mb-2 mb-sm-0">
                            <li class="list-inline-item h4 fw-light mb-0">RS. 65.00</li>
                            <li class="list-inline-item text-muted fw-light"> 
                            <del>$90.00</del>
                            </li>
                        </ul>
                        <div class="d-flex align-items-center text-sm">
                            <ul class="list-inline me-2 mb-0">
                            <li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
                            <li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
                            <li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
                            <li class="list-inline-item me-0"><i class="fa fa-star text-primary"></i></li>
                            <li class="list-inline-item me-0"><i class="fa fa-star text-gray-300"></i></li>
                            </ul><span class="text-muted text-uppercase">25 reviews</span>
                        </div>
                        </div>
                        <p class="mb-4 text-muted">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                        <form id="buyForm_modal" action="#">
                        <div class="row">
                            <div class="col-sm-6 col-lg-12 detail-option mb-5">
                            <h6 class="detail-option-heading">Type <span>(required)</span></h6>
                            <label class="btn btn-sm btn-outline-primary detail-option-btn-label" for="material_0_modal"> Hoodie
                                <input class="input-invisible" type="radio" name="material" value="value_0" id="material_0_modal" required>
                            </label>
                            <label class="btn btn-sm btn-outline-primary detail-option-btn-label" for="material_1_modal"> College
                                <input class="input-invisible" type="radio" name="material" value="value_1" id="material_1_modal" required>
                            </label>
                            </div>
                        </div>
                        <div class="input-group w-100 mb-4">
                            <input class="form-control form-control-lg detail-quantity" name="items" type="number" value="1">
                            <div class="flex-grow-1">
                            <div class="d-grid h-100">
                                <button class="btn btn-dark" type="submit"> <i class="fa fa-shopping-cart me-2"></i>Quick View</button>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-6"><a href="#"> <i class="far fa-heart me-2"></i>Add to wishlist </a></div>
                            <div class="col-6 text-end">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-2"><a class="text-dark text-primary-hover" href="#"><i class="fab fa-facebook-f"> </i></a></li>
                                <li class="list-inline-item"><a class="text-dark text-primary-hover" href="#"><i class="fab fa-twitter"> </i></a></li>
                            </ul>
                            </div>
                        </div>
                        <ul class="list-unstyled">
                            <li><strong>Category:</strong> <a class="text-muted" href="#">Jeans</a></li>
                            <li><strong>Tags:</strong> <a class="text-muted" href="#">Leisure</a>, <a class="text-muted" href="#">Elegant</a></li>
                        </ul>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Categories big-->


<div class="col-lg-6">
                            <div class="detail-carousel">
                            <div class="product-badge badge bg-primary">Freshs</div>
                            <div class="product-badge badge bg-dark">Sale</div>
                            <div class="swiper swiper-container quickview-slider" id="quickViewSlider">
                                <!-- Additional required wrapper-->
                                <div class="swiper-wrapper">
                                <!-- Slides-->
                                <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 1"></div>
                                <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/Final-Product-Out.png" alt="Modern Jacket 2"></div>
                                <?php
                                    // $CodeWallTutorialArray = json_decode($rw['images']);

                                    // for ($i = 0; $i < count($CodeWallTutorialArray); $i++)  { ?>
                                        <!-- <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/<?php //echo $CodeWallTutorialArray[$i] ?>" alt="Modern Jacket 1"></div> -->
                                    <?php //}
                                ?>
                                <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 3"></div>
                                <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/Final-Product-Out.png" alt="Modern Jacket 4"></div>
                                <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 5"></div>
                                </div>
                            </div>
                            <div class="swiper-thumbs" data-swiper="#quickViewSlider">
                                <button class="swiper-thumb-item detail-thumb-item mb-3 active"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 0"></button>
                                <?php
                                    // $CodeWallTutorialArray = json_decode($rw['images']);

                                    // for ($i = 0; $i < count($CodeWallTutorialArray); $i++)  { ?>
                                        <!-- <button class="swiper-thumb-item detail-thumb-item mb-3 "><img class="img-fluid" src="assets/img/product/<?php //echo $CodeWallTutorialArray[$i] ?>" alt="Modern Jacket 0"></button> -->
                                    <?php //}
                                ?>
                                <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="assets/img/product/Final-Product-Out.png" alt="Modern Jacket 1"></button>
                                <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 2"></button>
                                <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="assets/img/product/Final-Product-Out.png" alt="Modern Jacket 3"></button>
                                <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="assets/img/product/Final-Product-Main.png" alt="Modern Jacket 4"></button>
                            </div>
                            </div>
                        </div>