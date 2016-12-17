<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>  
    <?php include 'navigation.php'; ?>

    <div class="container">

        <!-- Portfolio Section -->
        <div class="row ">
            <div class="row padded10">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="./images/archery1.jpg" width="100%" alt="Chania">
                                <div class="carousel-caption">
                                    <h2>New Competition Dates</h2>
                                </div>
                            </div>
                            <div class="item">
                                <img src="./images/archery2.jpg" width="100%" alt="Chania">
                                <div class="carousel-caption">
                                    <h2>All arrows 30% off</h2>
                                </div>
                            </div>
                            <div class="item">
                                <img src="./images/archery3.jpg" width="100%" alt="Chania">
                                <div class="carousel-caption">
                                    <h2>All targets half price</h2>
                                </div>
                            </div>

                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="icon-prev"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="icon-next"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-0 col-sm-0">
                    <iframe frameborder="0" width="100%" style="height: 31vh;"  src="https://www.youtube.com/embed/LezpWyMPs0U"></iframe>
                    <iframe frameborder="0" width="100%" style="height: 31vh;"  src="https://www.youtube.com/embed/rzj4FFi7wt8"></iframe>
                </div>
            </div>
            <div class="row padded15 padded10">
                <div class="col-lg-12">
                    <h2 class="page-header">Featured Products</h2>
                </div>
                
                <div class="col-md-4 col-sm-6 product">
                    <div class="item">
                        <div class="item-inner-product">
                            <div class="product-image">
                                <a class="product_img_link" href="./sample-product.php" itemprop="url"> 
                                <img class="product_img" src="https://southlandarchery.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/s/a/sas-762bs.jpg" alt="Compound Bow" width="250" height="250" itemprop="image" /> 
                                </a>                                          
                            </div>
                            <h2 itemprop="name" class="product-name"> <a class="product-name" href="./sample-product.php" itemprop="url" > A pretty sweet bow </a></h2>
                            <div class="content_price left" itemprop="offers" itemscope itemtype="http://schema.org/Offer"> <span itemprop="price" class="price product-price" > € 419.99 </span>
                                <meta itemprop="priceCurrency" content="0" />
                            </div>
                            <p class="product-desc" itemprop="description"> What an amazing bow for an amazing price!</p>
                            <div class="actions">
                                <div class="button-container">
                                    <a class="button ajax_add_to_cart_button btn btn-default" href="./basket.php" rel="nofollow" title="Add to cart" data-id-product="2841"> <span>Add to cart</span> </a>
                                </div>                                           
                            </div>
                        </div>
                        <div class="icon"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 product">
                    <div class="item">
                        <div class="item-inner-product">
                            <div class="product-image">
                                <a class="product_img_link" href="./sample-product.php" itemprop="url"> 
                                <img class="product_img" src="http://bestcompoundbowsource.com/wp-content/uploads/2013/08/Bear-Archery-Legion.jpg" alt="Compound Bow" width="250" height="250" itemprop="image" /> 
                                </a>                                          
                            </div>
                            <h2 itemprop="name" class="product-name"> <a class="product-name" href="./sample-product.php" itemprop="url" > Sneaky Bow </a></h2>
                            <div class="content_price left" itemprop="offers" itemscope itemtype="http://schema.org/Offer"> <span itemprop="price" class="price product-price" > € 639.99 </span>
                                <meta itemprop="priceCurrency" content="0" />
                            </div>
                            <p class="product-desc" itemprop="description"> What an amazing bow for an amazing price!</p>
                            <div class="actions">
                                <div class="button-container">
                                    <a class="button ajax_add_to_cart_button btn btn-default" href="./basket.php" rel="nofollow" title="Add to cart" data-id-product="2841"> <span>Add to cart</span> </a>
                                </div>                                           
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 product">
                    <div class="item">
                        <div class="item-inner-product">
                            <div class="product-image">
                                <a class="product_img_link" href="./sample-product.php" itemprop="url"> 
                                <img class="product_img" src="https://s-media-cache-ak0.pinimg.com/originals/e7/e4/f9/e7e4f93ac0467fdfccd83860fc5b5956.jpg" alt="Compound Bow" width="250" height="250" itemprop="image" /> 
                                </a>                                          
                            </div>
                            <h2 itemprop="name" class="product-name"> <a class="product-name" href="./sample-product.php" itemprop="url" > Purple Lightning </a></h2>
                            <div class="content_price left" itemprop="offers" itemscope itemtype="http://schema.org/Offer"> <span itemprop="price" class="price product-price" > € 519.99 </span>
                                <meta itemprop="priceCurrency" content="0" />
                            </div>
                            <p class="product-desc" itemprop="description"> What an amazing bow for an amazing price!</p>
                            <div class="actions">
                                <div class="button-container">
                                    <a class="button ajax_add_to_cart_button btn btn-default" href="./basket.php" rel="nofollow" title="Add to cart" data-id-product="2841"> <span>Add to cart</span> </a>
                                </div>                                           
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 product">
                    <div class="item">
                        <div class="item-inner-product">
                            <div class="product-image">
                                <a class="product_img_link" href="./sample-product.php" itemprop="url"> 
                                <img class="product_img" src="http://www.bestrecurvebowguide.com/wp-content/uploads/2013/08/super-kodiak.jpg" alt="Compound Bow" width="250" height="250" itemprop="image" /> 
                                </a>                                          
                            </div>
                            <h2 itemprop="name" class="product-name"> <a class="product-name" href="./sample-product.php" itemprop="url" > Boring bow </a></h2>
                            <div class="content_price left" itemprop="offers" itemscope itemtype="http://schema.org/Offer"> <span itemprop="price" class="price product-price" > € 199.99 </span>
                                <meta itemprop="priceCurrency" content="0" />
                            </div>
                            <p class="product-desc" itemprop="description"> What an amazing bow for an amazing price!</p>
                            <div class="actions">
                                <div class="button-container">
                                    <a class="button ajax_add_to_cart_button btn btn-default" href="./basket.php" rel="nofollow" title="Add to cart" data-id-product="2841"> <span>Add to cart</span> </a>
                                </div>                                           
                            </div>
                        </div>
                        <div class="icon"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 product">
                    <div class="item">
                        <div class="item-inner-product">
                            <div class="product-image">
                                <a class="product_img_link" href="./sample-product.php" itemprop="url"> 
                                <img class="product_img" src="https://images-na.ssl-images-amazon.com/images/I/31660vV4llL._SY300_.jpg" alt="Compound Bow" width="250" height="250" itemprop="image" /> 
                                </a>                                          
                            </div>
                            <h2 itemprop="name" class="product-name"> <a class="product-name" href="./sample-product.php" itemprop="url" > Stick & String </a></h2>
                            <div class="content_price left" itemprop="offers" itemscope itemtype="http://schema.org/Offer"> <span itemprop="price" class="price product-price" > € 49.99 </span>
                                <meta itemprop="priceCurrency" content="0" />
                            </div>
                            <p class="product-desc" itemprop="description"> What an amazing bow for an amazing price!</p>
                            <div class="actions">
                                <div class="button-container">
                                    <a class="button ajax_add_to_cart_button btn btn-default" href="./basket.php" rel="nofollow" title="Add to cart" data-id-product="2841"> <span>Add to cart</span> </a>
                                </div>                                           
                            </div>
                        </div>
                        <div class="icon"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 product">
                    <div class="item">
                        <div class="item-inner-product">
                            <div class="product-image">
                                <a class="product_img_link" href="./sample-product.php" itemprop="url"> 
                                <img class="product_img" src="https://xboxliveexperts.files.wordpress.com/2010/07/javelin1.jpg" alt="Compound Bow" width="250" height="250" itemprop="image" /> 
                                </a>                                          
                            </div>
                            <h2 itemprop="name" class="product-name"> <a class="product-name" href="./sample-product.php" itemprop="url" > Boom Bow </a></h2>
                            <div class="content_price left" itemprop="offers" itemscope itemtype="http://schema.org/Offer"> <span itemprop="price" class="price product-price" > € 125,999.99 </span>
                                <meta itemprop="priceCurrency" content="0" />
                            </div>
                            <p class="product-desc" itemprop="description"> What an amazing bow for an amazing price!</p>
                            <div class="actions">
                                <div class="button-container">
                                    <a class="button ajax_add_to_cart_button btn btn-default" href="./basket.php" rel="nofollow" title="Add to cart" data-id-product="2841"> <span>Add to cart</span> </a>
                                </div>                                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <!-- /.row -->       

        <hr>

        

    </div>
    <!-- /.container -->
    
    <?php include 'footer.php'; ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
