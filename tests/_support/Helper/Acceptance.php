<?php

namespace Helper;

use Codeception\Util\Fixtures;
use Grav\Common\Grav;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Acceptance extends \Codeception\Module
{
    /** @var Grav $grav */
    protected $grav;

    /**
     * Generates temporary testing accounts for Grav.
     */
    public function setupAccounts()
    {
        // Assign the instance
        $this->grav = Grav::instance();
        // Bootstrap the stream-wrappers
        $this->grav['streams'];
        // Ensure current configuration is applied
        $this->grav['config']->init();
        // Assign the accounts
        $users = $this->grav['accounts'];

        $user = $users->find('demo', ['username', 'email', 'fullname', 'storage_key', 'flex_key']);
        codecept_debug($users);
        codecept_debug($user);
    }

    /**
     * Generates temporary testing groups for Grav.
     */
    public function setupGroups()
    {
        // Load existing groups.yaml
        // Generate new groups
        // Add groups to groups.yaml
    }

    /**
     * Removes temporary testing accounts.
     */
    public function deleteAccounts()
    {
        // Find testing accounts.
        // Delete testing accounts.
    }

    /**
     * Removes temporary testing accounts.
     */
    public function deleteGroups()
    {
        // Find testing group.
        // Remove testing group.
    }
}
