<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Snippet\Snippet;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

        /**
    * @Given /^wait for the page to load$/
    */
    public function waitForThePageToLoad()
    {
        $this->getSession()->wait('5000');
    }



    /**
     * @When I wait for the page to load
     */
    public function iWaitForThePageToLoad()
    {
        $this->getSession()->wait('5000');
    }



    /**
     * @Then I search :arg1
     */
    public function iSearch2($arg1)
    {   
        $this->getSession()->getPage()->find('xpath','(//*[@id="edit-filter"])[2]')->setValue($arg1);
        $element=$this->getSession()->getPage()->find('xpath','(//input[@class="button js-form-submit form-submit btn btn-primary"])[2]');
        $element->click();
        $this->iWaitForThePageToLoad();

    }

    /**
     * @Then I check search results contains result with string :arg1
     */
    public function iCheckSearchResultsContainsResultWithString($arg1)
    {    
        $i=$this->getSession()->getPage();
        $tes=$i->find('xpath','//div[contains(text(),$arg1)]');
        
        // print($tes);
        // if($tes!=null){
        //     print_r("testpass");
        // }
        // else{
        //     print_r("test fail");
        // }
    }
}
