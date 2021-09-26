<?php

class ActivationCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function deactivation(AcceptanceTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnPluginsPage();
        $I->deactivatePlugin('genie-test-suite');
        $I->seePluginDeactivated('genie-test-suite');
        $I->haveOptionInDatabase('genie_installed', 'deactivated1');
    }

    // tests
    public function activation(AcceptanceTester $I)
    {
        $I->loginAsAdmin();
        $I->amOnPluginsPage();
        $I->deactivatePlugin('genie-test-suite');
        $I->seePluginDeactivated('genie-test-suite');
        $I->haveOptionInDatabase('genie_installed', 'deactivated1');
    }
}
