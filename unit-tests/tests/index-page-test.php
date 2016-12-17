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
        $this->assertTitle(new PatternExpectation('/Modern Business/')); #CHANGE THE TITLE
    }

# Abandon testing the carousel for the time being
#    function testCarousel()
    #   {
    #      $this->get('http://student.computing.dcu.ie/~oconnb47/index.php');
    #     $this->assertImage("Chania");
    #}

    function testProductLinks(){
        $this->get('http://student.computing.dcu.ie/~oconnb47/index.php');

        #product 1
        $this->assertText('A pretty sweet bow'); #the text for product 1
        $this->assertText('Compound Bow 1');  #the alt text for product 1
        #$this->assertImage('Compound Bow 1'); #image for product 1, doesn't seem to work
          #the link for product 1, what are we linking to?

    }

}



?>