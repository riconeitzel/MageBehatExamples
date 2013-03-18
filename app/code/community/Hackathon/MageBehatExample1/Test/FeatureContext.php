<?php

class Hackathon_MageBehatExample1_Test_FeatureContext extends \Behat\MinkExtension\Context\RawMinkContext
{
    /**
     * @Then /^I should be able to click a poll$/
     */
    public function iShouldBeAbleToClickAPoll()
    {
        $this->getMainContext()->selectOption('vote', 6); //'Price Rules'
        $this->getSession()->getPage()->pressButton('Vote');

    }
}