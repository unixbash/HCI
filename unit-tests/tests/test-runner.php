<?php
require_once('simpletest/autorun.php');
require_once('simpletest/web_tester.php');
# require_once('../../index.php');

class TestIndexPage extends WebTestCase { #to run this go to: http://student.computing.dcu.ie/~oconnb47/unit-tests/tests/index-page-test.php
    function testIndexPageLoad() {
        $this->get('http://student.computing.dcu.ie/~oconnb47/index.php');
        $this->assertResponse(200);
    }

    function testNavigateToContact(){
        $this->get('http://student.computing.dcu.ie/~oconnb47/index.php');
        $this->clickLink('Contact');
        $this->assertEqual($this->getUrl(),'http://student.computing.dcu.ie/~oconnb47/contact.php');
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


    /*
# Abandon testing the carousel for the time being.
    function testCarousel()
    {
          $this->get('http://student.computing.dcu.ie/~oconnb47/index.php');
         $this->assertImage("Chania");
    }
*/



}



?>