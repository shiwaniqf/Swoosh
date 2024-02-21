<!-- Categories big-->
<section class="products">
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
            $qry = mysqli_query($conn,"select * from product ORDER BY position ASC LIMIT 8");

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
                            <a href="shop.php">
                            <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="assets/img/product/new_products/<?php echo $rw['change_image'] ?>" alt="product"/><img class="img-fluid" src="assets/img/product/new_products/<?php echo $rw['main_image'] ?>" alt="product"/></div>
                            </a>
                            <!-- <div class="product-hover-overlay">
                            <a class="text-dark text-sm" href="#!">
                                <span class="d-none d-sm-inline btn border border-primary quickviewbutton" href="#!" data-bs-toggle="modal" data-bs-target="#quickView<?php echo $rw['id'] ?>" >Quick View</span>
                            </a>
                            </div> -->
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
                    }
                }
            }
            ?>
        </div>
        
    </div>
</section>
<!-- End Categories big-->
