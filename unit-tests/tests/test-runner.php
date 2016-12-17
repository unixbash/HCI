<?php
require_once('simpletest/autorun.php');
require_once('simpletest/web_tester.php');

class TestNavigation extends WebTestCase
{
    function checkSingleLink($startPageAddress, $linkText, $targetPageAddress){
        $this->get($startPageAddress);
        $this->clickLink($linkText);
        $this->assertEqual($this->getUrl(),$targetPageAddress);
        $this->assertResponse(200);
    }

    function checkAllNavbarLinksFromSinglePage($startPageAddress){
        #home link
        $this->checkSingleLink($startPageAddress, 'Shooting Style Cover Image', 'http://student.computing.dcu.ie/~oconnb47/index.php');

        #products link
        $this->checkSingleLink($startPageAddress, 'Products', 'http://student.computing.dcu.ie/~oconnb47/products.php');

        #account link
        $this->checkSingleLink($startPageAddress, 'Account', 'http://student.computing.dcu.ie/~oconnb47/account.php');

        #contact link
        $this->checkSingleLink($startPageAddress, 'Contact', 'http://student.computing.dcu.ie/~oconnb47/contact.php');

        #basket link
        $this->checkSingleLink($startPageAddress, 'Basket', 'http://student.computing.dcu.ie/~oconnb47/basket.php');

    }

    function testAllNavbarLinksFromAllPages(){
        #index page
        $this->checkAllNavbarLinksFromSinglePage('http://student.computing.dcu.ie/~oconnb47/index.php');

        #products page
        $this->checkAllNavbarLinksFromSinglePage('http://student.computing.dcu.ie/~oconnb47/products.php');

        #sample product page
        $this->checkAllNavbarLinksFromSinglePage('http://student.computing.dcu.ie/~oconnb47/sample-product.php');

        #account page
        $this->checkAllNavbarLinksFromSinglePage('http://student.computing.dcu.ie/~oconnb47/account.php');

        #contact page
        $this->checkAllNavbarLinksFromSinglePage('http://student.computing.dcu.ie/~oconnb47/contact.php');

        #basket page
        $this->checkAllNavbarLinksFromSinglePage('http://student.computing.dcu.ie/~oconnb47/basket.php');

        #404 page
        $this->checkAllNavbarLinksFromSinglePage('http://student.computing.dcu.ie/~oconnb47/404.php');

    }

    function testAllBreadCrumbLinks(){
        #products page
        $this->checkSingleLink('http://student.computing.dcu.ie/~oconnb47/products.php', 'Home', 'http://student.computing.dcu.ie/~oconnb47/index.php');

        #account page
        $this->checkSingleLink('http://student.computing.dcu.ie/~oconnb47/account.php', 'Home', 'http://student.computing.dcu.ie/~oconnb47/index.php');

        #contact page
        $this->checkSingleLink('http://student.computing.dcu.ie/~oconnb47/contact.php', 'Home', 'http://student.computing.dcu.ie/~oconnb47/index.php');

        #basket page
        $this->checkSingleLink('http://student.computing.dcu.ie/~oconnb47/basket.php', 'Home', 'http://student.computing.dcu.ie/~oconnb47/index.php');

        #404 page
        $this->checkSingleLink('http://student.computing.dcu.ie/~oconnb47/404.php', 'Home', 'http://student.computing.dcu.ie/~oconnb47/index.php');

        #Sample Product Page, has two breadcrumb links
        $this->checkSingleLink('http://student.computing.dcu.ie/~oconnb47/sample-product.php', 'Home', 'http://student.computing.dcu.ie/~oconnb47/index.php');
        $this->checkSingleLink('http://student.computing.dcu.ie/~oconnb47/sample-product.php', 'Products', 'http://student.computing.dcu.ie/~oconnb47/products.php');
    }

}

class TestIndexPage extends WebTestCase {
    function testIndexPageLoad() {
        $this->get('http://student.computing.dcu.ie/~oconnb47/index.php');
        $this->assertResponse(200);
    }


    function checkSingleProductLinks($startPageAddress, $altText, $descriptionText, $productPageAddress, $basketID, $basketPageAddress){
        $this->get($startPageAddress); #ensure we're starting on the index page
        $this->assertText($altText);  #test the alt text
        $this->assertText($descriptionText); #test the description
        $this->clickLink($altText); #click the image link to the sample product description page
        $this->assertEqual($this->getUrl(),$productPageAddress);
        $this->assertResponse(200);
        $this->get($startPageAddress); #go back to the index page
        $this->clickLinkById($basketID); #link for adding the product to a basket
        $this->assertEqual($this->getUrl(),$basketPageAddress);
        $this->assertResponse(200);
    }

    function testAllProductLinks(){
        #product 1
        $this->checkSingleProductLinks('http://student.computing.dcu.ie/~oconnb47/index.php', 'SAS Predator Compound Bow', 'A pretty sweet bow', 'http://student.computing.dcu.ie/~oconnb47/sample-product.php', '2800', 'http://student.computing.dcu.ie/~oconnb47/basket.php');

        #product 2
        $this->checkSingleProductLinks('http://student.computing.dcu.ie/~oconnb47/index.php','Bear Archery Legion Compound Bow','Sneaky Bow','http://student.computing.dcu.ie/~oconnb47/sample-product.php', '2801','http://student.computing.dcu.ie/~oconnb47/basket.php');

        #product 3
        $this->checkSingleProductLinks('http://student.computing.dcu.ie/~oconnb47/index.php','Quest Radical Realtree Purple Compound Bow','Purple Lightning' , 'http://student.computing.dcu.ie/~oconnb47/sample-product.php', '2802', 'http://student.computing.dcu.ie/~oconnb47/basket.php');

        #product 4
        $this->checkSingleProductLinks('http://student.computing.dcu.ie/~oconnb47/index.php', 'Super Kodiak Wooden Bow', 'Boring bow', 'http://student.computing.dcu.ie/~oconnb47/sample-product.php', '2803', 'http://student.computing.dcu.ie/~oconnb47/basket.php');

        #product 5
        $this->checkSingleProductLinks('http://student.computing.dcu.ie/~oconnb47/index.php', 'Bear Archery Wizard Bow', 'Stick & String', 'http://student.computing.dcu.ie/~oconnb47/sample-product.php', '2804', 'http://student.computing.dcu.ie/~oconnb47/basket.php');

        #product 6
        $this->checkSingleProductLinks('http://student.computing.dcu.ie/~oconnb47/index.php', 'FGM-148 Javelin automatic infrared guidance fire and forget anti-tank missile launcher', 'Boom Bow','http://student.computing.dcu.ie/~oconnb47/sample-product.php', '2805', 'http://student.computing.dcu.ie/~oconnb47/basket.php');
    }

}

class TestProductsPage extends WebTestCase {
    function checkSingleProductCategoryLinks($startPageAddress, $altText, $CategoryText, $productPageAddress){
        $this->get($startPageAddress); #ensure we're starting on the index page
        $this->assertText($altText);  #test the alt text
        $this->clickLink($altText); #click the image link to the sample product description page
        $this->assertEqual($this->getUrl(),$productPageAddress);
        $this->assertResponse(200);
        $this->get($startPageAddress); #go back to the index page
        $this->clickLink($CategoryText); #link for adding the product to a basket
        $this->assertEqual($this->getUrl(),$productPageAddress);
        $this->assertResponse(200);
    }

    function testAllProductCategoryLinks(){
        #Category 1
        $this->checkSingleProductCategoryLinks('http://student.computing.dcu.ie/~oconnb47/products.php', 'Recurve Bow', 'Recurve Bows', 'http://student.computing.dcu.ie/~oconnb47/sample-product.php');

        #Category 2
        $this->checkSingleProductCategoryLinks('http://student.computing.dcu.ie/~oconnb47/products.php', 'Arrow for archery', 'Arrows', 'http://student.computing.dcu.ie/~oconnb47/sample-product.php');

        #Category 3
        $this->checkSingleProductCategoryLinks('http://student.computing.dcu.ie/~oconnb47/products.php', 'Compound Bow', 'Compounds', 'http://student.computing.dcu.ie/~oconnb47/sample-product.php');

        #Category 4
        $this->checkSingleProductCategoryLinks('http://student.computing.dcu.ie/~oconnb47/products.php', 'Target Faces', 'Target Faces', 'http://student.computing.dcu.ie/~oconnb47/sample-product.php');

        #Category 5
        $this->checkSingleProductCategoryLinks('http://student.computing.dcu.ie/~oconnb47/products.php', 'Bow Accessories', 'Accessories', 'http://student.computing.dcu.ie/~oconnb47/sample-product.php');

        #Category 6
        $this->checkSingleProductCategoryLinks('http://student.computing.dcu.ie/~oconnb47/products.php', 'Recurve Limbs', 'Recurve Limbs', 'http://student.computing.dcu.ie/~oconnb47/sample-product.php');
    }
}

class TestSampleProductPage extends WebTestCase {
    function testIndexPageLoad() {
        $this->get('http://student.computing.dcu.ie/~oconnb47/sample-product.php');
        $this->assertResponse(200);
    }

    function testAddToCartButton(){
        $this->get('http://student.computing.dcu.ie/~oconnb47/sample-product.php');
        $this->clickLink('Add to Cart');
        $this->assertEqual($this->getUrl(),'http://student.computing.dcu.ie/~oconnb47/basket.php');
        $this->assertResponse(200);
    }
}

?>