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
        $this->checkSingleLink($startPageAddress, 'Shooting Style Cover Image', 'http://www.redbrick.dcu.ie/~minisham/HCI/index.php');

        #products link
        $this->checkSingleLink($startPageAddress, 'Products', 'http://www.redbrick.dcu.ie/~minisham/HCI/products.php');

        #account link
        $this->checkSingleLink($startPageAddress, 'Account', 'http://www.redbrick.dcu.ie/~minisham/HCI/account.php');

        #contact link
        $this->checkSingleLink($startPageAddress, 'Contact', 'http://www.redbrick.dcu.ie/~minisham/HCI/contact.php');

        #basket link
        $this->checkSingleLink($startPageAddress, 'Basket', 'http://www.redbrick.dcu.ie/~minisham/HCI/basket.php');

    }

    function testAllNavbarLinksFromAllPages(){
        #index page
        $this->checkAllNavbarLinksFromSinglePage('http://www.redbrick.dcu.ie/~minisham/HCI/index.php');

        #products page
        $this->checkAllNavbarLinksFromSinglePage('http://www.redbrick.dcu.ie/~minisham/HCI/products.php');

        #sample product page
        $this->checkAllNavbarLinksFromSinglePage('http://www.redbrick.dcu.ie/~minisham/HCI/sample-product.php');

        #account page
        $this->checkAllNavbarLinksFromSinglePage('http://www.redbrick.dcu.ie/~minisham/HCI/account.php');

        #contact page
        $this->checkAllNavbarLinksFromSinglePage('http://www.redbrick.dcu.ie/~minisham/HCI/contact.php');

        #basket page
        $this->checkAllNavbarLinksFromSinglePage('http://www.redbrick.dcu.ie/~minisham/HCI/basket.php');

        #404 page
        $this->checkAllNavbarLinksFromSinglePage('http://www.redbrick.dcu.ie/~minisham/HCI/404.php');

    }

    function testAllBreadCrumbLinks(){
        #products page
        $this->checkSingleLink('http://www.redbrick.dcu.ie/~minisham/HCI/products.php', 'Home', 'http://www.redbrick.dcu.ie/~minisham/HCI/index.php');

        #account page
        $this->checkSingleLink('http://www.redbrick.dcu.ie/~minisham/HCI/account.php', 'Home', 'http://www.redbrick.dcu.ie/~minisham/HCI/index.php');

        #contact page
        $this->checkSingleLink('http://www.redbrick.dcu.ie/~minisham/HCI/contact.php', 'Home', 'http://www.redbrick.dcu.ie/~minisham/HCI/index.php');

        #basket page
        $this->checkSingleLink('http://www.redbrick.dcu.ie/~minisham/HCI/basket.php', 'Home', 'http://www.redbrick.dcu.ie/~minisham/HCI/index.php');

        #404 page
        $this->checkSingleLink('http://www.redbrick.dcu.ie/~minisham/HCI/404.php', 'Home', 'http://www.redbrick.dcu.ie/~minisham/HCI/index.php');

        #Sample Product Page, has two breadcrumb links
        $this->checkSingleLink('http://www.redbrick.dcu.ie/~minisham/HCI/sample-product.php', 'Home', 'http://www.redbrick.dcu.ie/~minisham/HCI/index.php');
        $this->checkSingleLink('http://www.redbrick.dcu.ie/~minisham/HCI/sample-product.php', 'Products', 'http://www.redbrick.dcu.ie/~minisham/HCI/products.php');
    }

}

class TestIndexPage extends WebTestCase {
    function testIndexPageLoad() {
        $this->get('http://www.redbrick.dcu.ie/~minisham/HCI/index.php');
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
        $this->checkSingleProductLinks('http://www.redbrick.dcu.ie/~minisham/HCI/index.php', 'SAS Predator Compound Bow', 'A pretty sweet bow', 'http://www.redbrick.dcu.ie/~minisham/HCI/sample-product.php', '2800', 'http://www.redbrick.dcu.ie/~minisham/HCI/basket.php');

        #product 2
        $this->checkSingleProductLinks('http://www.redbrick.dcu.ie/~minisham/HCI/index.php','Bear Archery Legion Compound Bow','Sneaky Bow','http://www.redbrick.dcu.ie/~minisham/HCI/sample-product.php', '2801','http://www.redbrick.dcu.ie/~minisham/HCI/basket.php');

        #product 3
        $this->checkSingleProductLinks('http://www.redbrick.dcu.ie/~minisham/HCI/index.php','Quest Radical Realtree Purple Compound Bow','Purple Lightning' , 'http://www.redbrick.dcu.ie/~minisham/HCI/sample-product.php', '2802', 'http://www.redbrick.dcu.ie/~minisham/HCI/basket.php');

        #product 4
        $this->checkSingleProductLinks('http://www.redbrick.dcu.ie/~minisham/HCI/index.php', 'Super Kodiak Wooden Bow', 'Boring bow', 'http://www.redbrick.dcu.ie/~minisham/HCI/sample-product.php', '2803', 'http://www.redbrick.dcu.ie/~minisham/HCI/basket.php');

        #product 5
        $this->checkSingleProductLinks('http://www.redbrick.dcu.ie/~minisham/HCI/index.php', 'Bear Archery Wizard Bow', 'Stick & String', 'http://www.redbrick.dcu.ie/~minisham/HCI/sample-product.php', '2804', 'http://www.redbrick.dcu.ie/~minisham/HCI/basket.php');

        #product 6
        $this->checkSingleProductLinks('http://www.redbrick.dcu.ie/~minisham/HCI/index.php', 'FGM-148 Javelin automatic infrared guidance fire and forget anti-tank missile launcher', 'Boom Bow','http://www.redbrick.dcu.ie/~minisham/HCI/sample-product.php', '2805', 'http://www.redbrick.dcu.ie/~minisham/HCI/basket.php');
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
        $this->checkSingleProductCategoryLinks('http://www.redbrick.dcu.ie/~minisham/HCI/products.php', 'Recurve Bow', 'Recurve Bows', 'http://www.redbrick.dcu.ie/~minisham/HCI/sample-product.php');

        #Category 2
        $this->checkSingleProductCategoryLinks('http://www.redbrick.dcu.ie/~minisham/HCI/products.php', 'Arrow for archery', 'Arrows', 'http://www.redbrick.dcu.ie/~minisham/HCI/sample-product.php');

        #Category 3
        $this->checkSingleProductCategoryLinks('http://www.redbrick.dcu.ie/~minisham/HCI/products.php', 'Compound Bow', 'Compounds', 'http://www.redbrick.dcu.ie/~minisham/HCI/sample-product.php');

        #Category 4
        $this->checkSingleProductCategoryLinks('http://www.redbrick.dcu.ie/~minisham/HCI/products.php', 'Target Faces', 'Target Faces', 'http://www.redbrick.dcu.ie/~minisham/HCI/sample-product.php');

        #Category 5
        $this->checkSingleProductCategoryLinks('http://www.redbrick.dcu.ie/~minisham/HCI/products.php', 'Bow Accessories', 'Accessories', 'http://www.redbrick.dcu.ie/~minisham/HCI/sample-product.php');

        #Category 6
        $this->checkSingleProductCategoryLinks('http://www.redbrick.dcu.ie/~minisham/HCI/products.php', 'Recurve Limbs', 'Recurve Limbs', 'http://www.redbrick.dcu.ie/~minisham/HCI/sample-product.php');
    }
}

class TestSampleProductPage extends WebTestCase {
    function testIndexPageLoad() {
        $this->get('http://www.redbrick.dcu.ie/~minisham/HCI/sample-product.php');
        $this->assertResponse(200);
    }

    function testAddToCartButton(){
        $this->get('http://www.redbrick.dcu.ie/~minisham/HCI/sample-product.php');
        $this->clickLink('Add to Cart');
        $this->assertEqual($this->getUrl(),'http://www.redbrick.dcu.ie/~minisham/HCI/basket.php');
        $this->assertResponse(200);
    }
}

?>