<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;


/**
 * Defines application features from the specific context.
 */
class FeatureContext extends \Behat\MinkExtension\Context\MinkContext implements Context, SnippetAcceptingContext
{
    /**
     * @var \Zend\ServiceManager\ServiceManager
     */
    protected static $serviceManager;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        self::boostrapApplication();

    }

    public static function boostrapApplication()
    {
        if(is_null(static::$serviceManager)){
            \ApplicationTest\Bootstrap::init();
            static::$serviceManager = \ApplicationTest\Bootstrap::getServiceManager();
        }
    }

    protected function getEntityMaager(){
        return static::$serviceManager->get('entityManager');
    }

    /**
     * @Given I have a stored user with:
     */
    public function iHaveAStoredUserWith(TableNode $table)
    {
        /**
         * @var \Zend\Stdlib\Hydrator\ClassMethods $hydrator
         */
        $hydrator = static::$serviceManager->get('hydratorManager')->get('classMethods');


        $user = new Application\Entity\User();

        $hydrator->hydrate($table->getRowsHash(), $user);

        $this->getEntityMaager()->persist($user);
        $this->getEntityMaager()->flush();

        throw new PendingException();
    }

    /**
     * @Then I should be on the user edit page
     */
    public function iShouldBeOnTheUserEditPage()
    {



        throw new PendingException();
    }


}
