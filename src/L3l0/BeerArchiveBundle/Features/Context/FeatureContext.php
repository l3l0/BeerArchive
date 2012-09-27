<?php

namespace L3l0\BeerArchiveBundle\Features\Context;

use Symfony\Component\HttpKernel\KernelInterface;
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
class FeatureContext extends MinkContext
                  implements KernelAwareInterface
{
    private $kernel;
    private $parameters;

    /**
     * Initializes context with parameters from behat.yml.
     *
     * @param array $parameters
     */
    public function __construct(array $parameters)
    {
        $this->parameters = $parameters;
        $this->useContext('user', new UserContext());
    }

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

//
// Place your definition and hook methods here:
//
//    /**
//     * @Given /^I have done something with "([^"]*)"$/
//     */
//    public function iHaveDoneSomethingWith($argument)
//    {
//        $container = $this->kernel->getContainer();
//        $container->get('some_service')->doSomethingWith($argument);
//    }
//


    /**
     * @Then /^I should be logged in$/
     */
    public function iShouldBeLoggedIn()
    {
        throw new PendingException();
    }

    /**
     * @Given /^I should be able to mark beer$/
     */
    public function iShouldBeAbleToMarkBeer()
    {
        throw new PendingException();
    }

    /**
     * @Given /^I should be able to add new beer$/
     */
    public function iShouldBeAbleToAddNewBeer()
    {
        throw new PendingException();
    }

    /**
     * @Then /^I should not be logged in$/
     */
    public function iShouldNotBeLoggedIn()
    {
        throw new PendingException();
    }

    /**
     * @Given /^I should not be able to mark beer$/
     */
    public function iShouldNotBeAbleToMarkBeer()
    {
        throw new PendingException();
    }

    /**
     * @Given /^there are beers such as:$/
     */
    public function thereAreBeersSuchAs(TableNode $table)
    {
        throw new PendingException();
    }

    /**
     * @Given /^I am on the beer list page$/
     */
    public function iAmOnTheBeerListPage()
    {
        throw new PendingException();
    }

    /**
     * @Given /^I should see "([^"]*)" at (\d+)nd position$/
     * @Given /^I should see "([^"]*)" at (\d+)rd position$/
     * @Then /^I should see "([^"]*)" at (\d+)st position$/
     */
    public function iShouldSeeAtNdPosition($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Given /^there is not any beer$/
     */
    public function thereIsNotAnyBeer()
    {
        throw new PendingException();
    }


    /**
     * @BeforeScenario
     */
    public function clearDatabase()
    {
        $purger = new ORMPurger($this->getEntityManager());
        $purger->purge();
    }

    protected function getEntityManager()
    {
        return $this->kernel->getContainer()->get('doctrine')->getManager();
    }
}
