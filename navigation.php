<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right nav-font">
                    <li>
                        <a href="products.php">Products</a>
                    </li>
                    <li>
                        <a href="account.php">Account </a>
                    </li>
                    <li>
                            <a  href="contact.php">Contact</a>
                    </li>
                    <li>
                            <a  href="basket.php">Basket</a>
                    </li>
                    <li>
                        <div id="search_block_top">
                            <div id="search_block_top_inner">
                                <form id="searchbox" method="get" action="./results.php">
                                    <div class="form-search">
                                        <input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
                                        <button type="submit" name="submit_search" class="btn btn-default button-search"> <i class="fa fa-search "></i><span>Search</span> </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
       
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>