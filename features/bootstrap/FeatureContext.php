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
}
