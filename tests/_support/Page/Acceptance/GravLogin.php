<?php
namespace Page\Acceptance;

/**
 * Provides functions for logging into a GravCMS site with a un:pw.
 */
class GravLogin
{
    // include url of admin page
    public static $adminURL = '/admin';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     */
    public $usernameField = 'input[name="data[username]"]';
    public $passwordField = 'input[name="data[password]"]';
    public $loginSubmitButton = '.primary';

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     *
     * @var $param Admin GUI URL.
     *
     * @return string
     */
    public static function route($param): string
    {
        return static::$adminURL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function login($name, $password)
    {
        $I = $this->tester;
        $I->amOnPage(self::$adminURL);
        $I->fillField($this->usernameField, $name);
        $I->fillField($this->passwordField, $password);
        $I->click($this->loginSubmitButton);
    }
}
