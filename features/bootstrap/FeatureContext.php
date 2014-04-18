<?php

use Drupal\DrupalExtension\Context\DrupalContext;
use Behat\Behat\Context\Step\Given;
use Symfony\Component\Process\Process;

require 'vendor/autoload.php';

class FeatureContext extends DrupalContext
{
    /**
     * Wait for the given number of seconds. ONLY USE FOR DEBUGGING!
     *
     * @Given /^I wait for "([^"]*)" seconds$/
     */
    public function iWaitForSeconds($arg1) {
      sleep($arg1);
    }

}
