<?php

class UserCest
{
    /** @var Grav $grav */
    protected $grav;
    // Demo accounts and group membership.
    protected $accounts = [
        "demo" => "admin",
        "user1" => ["group1"],
        "user2" => ["group2"],
        "user3" => ["group1", "group2"]
    ];

    public function _before(AcceptanceTester $I)
    {
        //$I->setupGroups();
        $I->setupAccounts();
    }

    public function showUserProfile(AcceptanceTester $I, \Page\Acceptance\GravLogin $loginPage)
    {
        //TEST HERE.
    }

    public function _after(AcceptanceTester $I)
    {
        //$I->deleteGroups();
        $I->deleteAccounts();
    }
}
