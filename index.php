<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('./images/cover.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('./images/cover.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('./images/cover.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    
    <?php include 'navigation.php'; ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Featured Products</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item">
                    <div class="item-inner-product">
                        <div class="product-image">
                            <a class="product_img_link product_image" href="./index.php" itemprop="url"> 
                            <img src="https://southlandarchery.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/s/a/sas-762bs.jpg" alt="Compound Bow" width="250" height="250" itemprop="image" /> 
                            </a>                                          
                        </div>
                        <h2 itemprop="name" class="product-name"> <a class="product-name" href="./index.php" itemprop="url" > A pretty sweet bow </a></h2>
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
            <div class="col-md-4 col-sm-6">
                <div class="item">
                    <div class="item-inner-product">
                        <div class="product-image">
                            <a class="product_img_link product_image" href="./index.php" itemprop="url"> 
                            <img src="http://bestcompoundbowsource.com/wp-content/uploads/2013/08/Bear-Archery-Legion.jpg" alt="Compound Bow" width="250" height="250" itemprop="image" /> 
                            </a>                                          
                        </div>
                        <h2 itemprop="name" class="product-name"> <a class="product-name" href="./index.php" itemprop="url" > Sneaky Bow </a></h2>
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
                    <div class="icon"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item">
                    <div class="item-inner-product">
                        <div class="product-image">
                            <a class="product_img_link product_image" href="./index.php" itemprop="url"> 
                            <img src="https://s-media-cache-ak0.pinimg.com/originals/e7/e4/f9/e7e4f93ac0467fdfccd83860fc5b5956.jpg" alt="Compound Bow" width="250" height="250" itemprop="image" /> 
                            </a>                                          
                        </div>
                        <h2 itemprop="name" class="product-name"> <a class="product-name" href="./index.php" itemprop="url" > Purple Lightning </a></h2>
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
                    <div class="icon"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item">
                    <div class="item-inner-product">
                        <div class="product-image">
                            <a class="product_img_link product_image" href="./index.php" itemprop="url"> 
                            <img src="http://www.bestrecurvebowguide.com/wp-content/uploads/2013/08/super-kodiak.jpg" alt="Compound Bow" width="250" height="250" itemprop="image" /> 
                            </a>                                          
                        </div>
                        <h2 itemprop="name" class="product-name"> <a class="product-name" href="./index.php" itemprop="url" > Boring bow </a></h2>
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
            <div class="col-md-4 col-sm-6">
                <div class="item">
                    <div class="item-inner-product">
                        <div class="product-image">
                            <a class="product_img_link product_image" href="./index.php" itemprop="url"> 
                            <img src="https://images-na.ssl-images-amazon.com/images/I/31660vV4llL._SY300_.jpg" alt="Compound Bow" width="250" height="250" itemprop="image" /> 
                            </a>                                          
                        </div>
                        <h2 itemprop="name" class="product-name"> <a class="product-name" href="./index.php" itemprop="url" > Stick & String </a></h2>
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
            <div class="col-md-4 col-sm-6">
                <div class="item">
                    <div class="item-inner-product">
                        <div class="product-image">
                            <a class="product_img_link product_image" href="./index.php" itemprop="url"> 
                            <img src="https://xboxliveexperts.files.wordpress.com/2010/07/javelin1.jpg" alt="Compound Bow" width="250" height="250" itemprop="image" /> 
                            </a>                                          
                        </div>
                        <h2 itemprop="name" class="product-name"> <a class="product-name" href="./index.php" itemprop="url" > Boom Bow </a></h2>
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
                    <div class="icon"></div>
                </div>
            </div>
        </div>
        <!-- /.row -->       

        <hr>

        <?php include 'footer.php'; ?>

    </div>
    <!-- /.container -->

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
