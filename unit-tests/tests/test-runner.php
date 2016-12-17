<?php
require_once('simpletest/autorun.php');
require_once('simpletest/web_tester.php');

class TestNavigation extends WebTestCase
{
    function checkSingleNavbarLink($startPageAddress, $linkText, $targetPageAddress){
        $this->get($startPageAddress);
        $this->clickLink($linkText);
        $this->assertEqual($this->getUrl(),$targetPageAddress);
        $this->assertResponse(200);
    }

    function checkAllNavbarLinksFromSinglePage($startPageAddress){
        #home link
        $this->checkSingleNavbarLink($startPageAddress, 'Shooting Style Cover Image', 'http://student.computing.dcu.ie/~oconnb47/index.php');

        #products link
        $this->checkSingleNavbarLink($startPageAddress, 'Products', 'http://student.computing.dcu.ie/~oconnb47/products.php');

        #account link
        $this->checkSingleNavbarLink($startPageAddress, 'Account', 'http://student.computing.dcu.ie/~oconnb47/account.php');

        #contact link
        $this->checkSingleNavbarLink($startPageAddress, 'Contact', 'http://student.computing.dcu.ie/~oconnb47/contact.php');

        #basket link
        $this->checkSingleNavbarLink($startPageAddress, 'Basket', 'http://student.computing.dcu.ie/~oconnb47/basket.php');

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
}

class TestIndexPage extends WebTestCase {
    function testIndexPageLoad() {
        $this->get('http://student.computing.dcu.ie/~oconnb47/index.php');
        $this->assertResponse(200);
    }


    function checkSingleProductLinks($indexPageAddress, $altText, $descriptionText, $productPageAddress, $basketID, $basketPageAddress){
        $this->get($indexPageAddress); #ensure we're starting on the index page
        $this->assertText($altText);  #test the alt text
        $this->assertText($descriptionText); #test the description
        $this->clickLink($altText); #click the image link to the sample product description page
        $this->assertEqual($this->getUrl(),$productPageAddress);
        $this->assertResponse(200);
        $this->get($indexPageAddress); #go back to the index page
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



?>