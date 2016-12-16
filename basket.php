<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>

    <?php include 'banner.php'; ?>
    <?php include 'navigation.php'; ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Basket
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Basket</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="row padded15">
                <table class="basket-table">
                <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Remove</th>
                  </tr>
                <tbody>
                    <tr>
                        <td>Bow</td>
                        <td><input type="number" name="quantity" min="1" max="99"></td>
                        <td>€399.99</td>
                        <td><a href="#"><img src="./images/garbage-bin.png" width="25" height="25"> </a></td>
                    </tr>
                    <tr>
                        <td>Arrow</td>
                        <td><input type="number" name="quantity" min="1" max="99"></td>
                        <td>€12.99</td>
                        <td><a href="#"><img src="./images/garbage-bin.png" width="25" height="25"> </a></td>
                    </tr>
                    <tr>
                        <td>Beginner Accessory Kit</td>
                        <td><input type="number" name="quantity" min="1" max="99"></td>
                        <td>€49.99</td>
                        <td><a href="#"><img src="./images/garbage-bin.png" width="25" height="25"> </a></td>
                    </tr>
                    <tr>
                        <td>Archery Kit Bag</td>
                        <td><input type="number" name="quantity" min="1" max="99"></td>
                        <td>€59.99</td>
                        <td><a href="#"><img src="./images/garbage-bin.png" width="25" height="25"> </a></td>
                    </tr>
                    
                </tbody>                   
                </table>  
            <div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Address <small><a href="#">autofill</a></small></h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Address:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your address.">
                            <p class="help-block"></p>
                            </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->

        <hr>
        
        <div class="row">
            <table class="total-table">
                    <tr>
                        <td><strong>Shipping</strong></td>
                        <td>€19.99</td>
                    </tr>
                    <tr>
                        <td><strong>Tax</strong></td>
                        <td>€12.63</td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td>€562.90</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <div class="button-container">
                                <a class="button ajax_add_to_cart_button btn btn-default" href="./basket.php" rel="nofollow" title="Add to cart" data-id-product="2841"> <span>Pay Now</span> </a>
                            </div>
                        </td>
                    </tr>
            </table>
        </div>

        

    </div>
    <!-- /.container -->
    
    <?php include 'footer.php'; ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
