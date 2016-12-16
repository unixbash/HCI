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
                <h1 class="page-header">Account
                    <small>Joe Bloggs</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Account</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <img src="./images/default-profile-img.png">
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Personal Details</h3>
                <p>
                    The Place, Down the road, Co Uknow, Ireland<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: (123) 4567890</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">joebloggs@email.ie</a>
                </p>
            </div>
        </div>
        <!-- /.row -->
        
        <div class="row">
            <div class="col-md-8">
                <h3>Previous Orders</h3>
                <table class="order-table">
                <tbody>
                      <tr>
                        <th>Date</th>
                        <th>Order No.</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Refund/Return/Cancel</th>
                      </tr>
                      <tr>
                        <td>10/5/14</td>
                        <td><a href="#">#8092</a></td>
                        <td>€410.12</td>
                        <td>Delivered</td>
                        <td><a href="#">here</a></td>
                      </tr>
                      <tr>
                        <td>10/5/14</td>
                        <td><a href="#">#8099</a></td>
                        <td>€231.54</td>
                        <td>Delivered</td>
                        <td><a href="#">here</a></td>
                      </tr>
                      <tr>
                        <td>10/5/14</td>
                        <td><a href="#">#9051</a></td>
                        <td>€157.87</td>
                        <td>Delivered</td>
                        <td><a href="#">here</a></td>
                      </tr>
                      <tr>
                        <td>10/5/14</td>
                        <td><a href="#">#10050</a></td>
                        <td>€472.17</td>
                        <td>Delivered</td>
                        <td><a href="#">here</a></td>
                      </tr>
                      <tr>
                        <td>10/5/14</td>
                        <td><a href="#">#10129</a></td>
                        <td>€876.39</td>
                        <td>Delivered</td>
                        <td><a href="#">here</a></td>
                      </tr>
                      <tr>
                        <td>10/5/14</td>
                        <td><a href="#">#10456</a></td>
                        <td>€34.62</td>
                        <td>Dispatched</td>
                        <td><a href="#">here</a></td>
                      </tr>
                      <tr>
                        <td>10/5/14</td>
                        <td><a href="#">#10457</a></td>
                        <td>642.49</td>
                        <td>Dispatched</td>
                        <td><a href="#">here</a></td>
                      </tr>
                      <tr>
                        <td>10/5/14</td>
                        <td><a href="#">#10458</a></td>
                        <td>284.52</td>
                        <td>Dispatched</td>
                        <td><a href="#">here</a></td>
                      </tr>
                      <tr>
                        <td>10/5/14</td>
                        <td><a href="#">#10679</a></td>
                        <td>194.36</td>
                        <td>Awaiting Dispatch</td>
                        <td><a href="#">here</a></td>
                      </tr>
                      <tr>
                        <td>10/5/14</td>
                        <td><a href="#">#10680</a></td>
                        <td>185.74</td>
                        <td>Awaiting Dispatch</td>
                        <td><a href="#">here</a></td>
                      </tr>
                  </tbody>
                </table>
            </div>

        </div>

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Problem?</h3>
                <p>Get in touch with us! Visit our <a href="./contact.php">contact</a> form and let us know how we can help!
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

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
