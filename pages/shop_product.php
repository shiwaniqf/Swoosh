<!-- Categories big-->
<section class="products mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="pb-5">Our Products</h2>
                        <!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English..
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $qry = mysqli_query($conn,"select * from product ORDER BY position ASC");

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
                            <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="assets/img/product/new_products/<?php echo $rw['change_image'] ?>" alt="product"/><img class="img-fluid" src="assets/img/product/new_products/<?php echo $rw['main_image'] ?>" alt="product"/></div>
                            </a>
                            <div class="product-hover-overlay d-flex justify-content-center">
                            <a class="text-dark text-sm" href="#!">
                                <span class="d-none d-sm-inline btn btn-light quickviewbutton" href="#!" data-bs-toggle="modal" data-bs-target="#quickView<?php echo $rw['id'] ?>" >Quick View</span>
                            </a>
                            </div>
                        </div>
                        <div class="productName">
                            <h6 class="text-base mb-1"><a class="text-dark" href="#"><?php echo $rw['name'] ?></a></h6>
                        </div>
                        <div class="pt-3 productName">
                        <?php
                        $inquiremsg = "I want to do inquiry for ".$rw['name'];
                        ?>
                            <a href="contactus.php?inquiremsg=<?php echo $inquiremsg; ?>" class="btn">Inquire Now</a>
                        </div>
                        </div>
                    </div>        
                        <?php       
                    }
                }
            }
            ?>
        </div>
        
        <!-- Quickview Modal    -->
        <?php

        $qry = mysqli_query($conn,"select p.*, c.name as category_name from product p join category c on c.id = p.category ORDER BY p.position ASC");

        if($qry)
        {
            if(mysqli_num_rows($qry) != 0)
            {
                $count=1;
                while($rw = mysqli_fetch_array($qry))
                {   
                    ?>
            <div class="modal fade" id="quickView<?php echo $rw['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                    <button class="btn-close btn-close-absolute btn-close-lg btn-close-rotate" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body quickview-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="detail-carousel">
                                <div class="product-badge badge bg-primary">Fresh</div>
                                <div class="product-badge badge bg-dark">Sale</div>
                                <div class="swiper swiper-container quickview-slider" id="SliderquickView<?php echo $rw['id'] ?>">
                                    <!-- Additional required wrapper-->
                                    <div class="swiper-wrapper">
                                    <!-- Slides-->
                                    <?php 
                                    $images = json_decode($rw['images']);

                                    for ($i = 0; $i < count($images); $i++)  { ?>
                                        <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/new_products/<?php echo $images[$i] ?>" alt="<?php echo $images[$i] ?>"></div>
                                    <?php } ?>
                                    </div>
                                </div>
                                <div class="swiper-thumbs" data-swiper="#SliderquickView<?php echo $rw['id'] ?>" >
                                    <?php
                                        $images = json_decode($rw['images']);

                                        for ($i = 0; $i < count($images); $i++)  { ?>
                                            <button class="swiper-thumb-item detail-thumb-item mb-3 "><img class="img-fluid" src="assets/img/product/new_products/<?php echo $images[$i] ?>" alt="<?php echo $images[$i] ?>"></button>
                                        <?php }
                                    ?>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-6 p-lg-5">
                                <h3 class="mb-4 mt-4 mt-lg-1"><?php echo $rw['name'] ?></h3>
                                <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                                <ul class="list-inline mb-2 mb-sm-0">
                                    <?php
                                    $inquiremsg = "I want to do inquiry for ".$rw['name'];
                                    ?>
                                    <li class="list-inline-item h4 mb-0"><a href="contactus.php?inquiremsg=<?php echo $inquiremsg; ?>">Inquire Here</a></li>
                                    <!-- <li class="list-inline-item text-muted fw-light"> 
                                    <del>RS. <?php //echo $rw['price']+20; ?></del>
                                    </li> -->
                                </ul>
                                <div class="d-flex align-items-center text-sm">
                                    <ul class="list-inline me-2 mb-0">
                                    <li class="list-inline-item me-0"><i class="fa fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0"><i class="fa fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0"><i class="fa fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0"><i class="fa fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0"><i class="fa fa-star text-warning"></i></li>
                                    </ul><span class="text-muted text-uppercase"><?php echo $rw['reviews'] ?> reviews</span>
                                </div>
                                </div>
                                <p class="mb-4"><?php echo $rw['description'] ?></p>
                                
                                <div class="row">
                                    <div class="col-sm-6 col-lg-12 detail-option mb-5">
                                    <h6 class="detail-option-heading"><strong>Category:</strong></h6>
                                    <label class="btn btn-sm btn-outline-primary detail-option-btn-label" for="material_0_modal"> <?php echo $rw['category_name'] ?></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-group w-50 mb-4">
                                        <div class="flex-grow-1">
                                        <div class="d-grid h-100">
                                            <a href="<?php echo $rw['amazon_link'] ?>" class="btn btn-dark" target="_blank"> <img class="img-fluid img" width="30" src="assets/img/social/amazon_favicon.png" alt="amazon_favicon"> Shop On Amazon</a>
                                            <!-- <button class="btn btn-dark" type="submit"> <img class="img-fluid img w-100" src="assets/img/social/amazon_icon.svg" alt="Modern Jacket 1"></button> -->
                                        </div>
                                        </div>
                                    </div>
                                    <div class="input-group w-50 mb-4">
                                        <div class="flex-grow-1">
                                        <div class="d-grid h-100">
                                            <a href="<?php echo $rw['flipkart_link'] ?>" class="btn btn-dark" target="_blank"> <img class="img-fluid img" width="25" src="assets/img/social/flipkart_favicon.png" alt="flipkart_favicon"> Shop On Flipkart</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <!-- <div class="col-6"><a href="#"> <i class="fa fa-heart me-2"></i>Share on </a></div> -->
                                    <div class="col-4"></div>
                                    <div class="col-8 text-end">
                                    <ul class="list-inline mb-0">
                                    <a> Share Your Thoughts on : </a>
                                        <li class="list-inline-item me-2"><a class="text-dark text-primary-hover" href=""><i class="fa fa-facebook-f"> </i></a></li>
                                        <li class="list-inline-item"><a class="text-dark text-primary-hover" href=""><i class="fa fa-twitter"> </i></a></li>
                                        <li class="list-inline-item"><a class="text-dark text-primary-hover" href=""><i class="fa fa-whatsapp"> </i></a></li>
                                    </ul>
                                    </div>
                                </div>
                                <ul class="list-unstyled">
                                    <!-- <li><strong>Category:</strong> <a class="text-muted"><?php echo $rw['category_name'] ?></a></li> -->
                                    <li><strong>Tags:</strong>
                                    <?php 
                                    $tags = json_decode($rw['tags']);

                                    for ($i = 0; $i < count($tags); $i++)  { ?>
                                        <a class="text-muted"><?php echo $tags[$i] ?>, </a>
                                        <!-- <div class="swiper-slide"><img class="img-fluid" src="assets/img/product/<?php //echo $tags[$i] ?>" alt="Modern Jacket 1"></div> -->
                                    <?php } ?>
                                     </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        <?php       
                }
            }
        }
        ?>
    </div>
</section>
<!-- End Categories big-->

