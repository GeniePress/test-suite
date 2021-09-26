<?php

use GenieTest\PostTypes\Testimonial;

class CreateCest
{

    public function _before(AcceptanceTester $I)
    {
    }



    // tests
    public function testimonial(AcceptanceTester $I)
    {
        $I->dontHavePostInDatabase([
            'post_status' => 'publish',
            'post_type'   => Testimonial::$postType,
            'post_title'  => 'Great Service',
        ]);

        $I->loginAsAdmin();
        $I->amOnAdminPage('/post-new.php?post_type=testimonial');
        $I->see('Name *');
        $I->see('Location *');
        $I->click('Publish');
        $I->waitForElement('.acf-notice', 10);
        $I->see('Name value is required');
        $I->see('Location value is required');
        $I->fillField('post_title', 'Great Service');
        $I->fillField('acf[field_testimonial_name]', 'Sunil');
        $I->selectOption('acf[field_testimonial_location]', 'London');
        $I->click('#content-html');
        $I->fillField('#content', 'WOW Such Awesome');
        $I->click('Publish');
        $I->waitForElement('#message', 10);
        $I->see('Post published.');

        $I->seePostInDatabase([
            'post_status' => 'publish',
            'post_type'   => Testimonial::$postType,
            'post_title'  => 'Great Service',
        ]);

    }

}
