<?php

namespace L3l0\BeerArchiveBundle\Features\Context;

use Symfony\Component\HttpKernel\KernelInterface;
use Behat\Mink\Mink;
use Behat\MinkExtension\Context\MinkAwareInterface;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;
use Behat\Symfony2Extension\Context\KernelAwareInterface;
use Behat\MinkExtension\Context\MinkContext;

use Behat\Behat\Context\BehatContext,
Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Feature context.
 */
class UserContext extends BehatContext implements MinkAwareInterface,
                                                  KernelAwareInterface
{
    private $kernel;
    /**
     * @var Mink
     */
    private $mink;
    private $parameters;

    /**
     * Sets HttpKernel instance.
     * This method will be automatically called by Symfony2Extension ContextInitializer.
     *
     * @param KernelInterface $kernel
     */
    public function setKernel(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }

    public function setMink(Mink $mink)
    {
        $this->mink = $mink;
    }

    public function setMinkParameters(array $parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * @Given /^I am guest$/
     */
    public function iAmGuest()
    {
    }

    /**
     * @Given /^user with email "leszek.prabucki@gmail.com" exists$/
     */
    public function userWithEmailExists()
    {
    }

    /**
     * @Given /^I am at login page$/
     */
    public function iAmAtLoginPage()
    {
        $url = $this->kernel->getContainer()->get('router')->generate('login');

        $this->mink->getSession()->visit($url);
        $this->mink->assertSession()->statusCodeEquals(200);
    }
}