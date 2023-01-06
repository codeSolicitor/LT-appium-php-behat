<?php

require "vendor/autoload.php";

class FeatureContext extends LambdaContext {
    /**
     * @Given I am on the proverbial home page
     */
    public function iAmOnTheProverbialHomePage()
    {
      echo "I am on the mfml home page";

    }

    /**
     * @When I click on color
     */
    public function iClickOnColor()
    {
      $element = self::$driver->findElement(WebDriverBy::id("resolution"));
      $element->click();
    }

    /**
     * @When I click on text element
     */
    public function iClickOnTextElement()
    {
      $element = self::$driver->findElement(WebDriverBy::id("location"));
      $element->click();
    }

    /**
     * @When I click on notification element
     */
    public function iClickOnNotificationElement()
    {
      $element = self::$driver->findElement(WebDriverBy::id("details"));
      $element->click();
    }

    /**
     * @Then I click on toast element
     */
    public function iClickOnToastElement()
    {
      $element = self::$driver->findElement(WebDriverBy::id("timezone"));
      $element->click();
    }
}
