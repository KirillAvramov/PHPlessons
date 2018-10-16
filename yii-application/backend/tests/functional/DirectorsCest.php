<?php namespace backend\tests\functional;
use backend\tests\FunctionalTester;

class DirectorsCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        //нужно боооольше режиссеров (но мне лень)
        $I->amOnPage('/directors/index');
        $I->see('Directors', 'h1');
        $I->click('Create Directors');
        $I->fillField('First Name', 'Andrei');
        $I->fillField('Last Name', 'Tarkovsky');
        $I->click('Save');
        $I->amOnPage('/directors/index');
        $I->see('Tarkovsky');
        $I->click('//td[text() = \'Tarkovsky\']/..//a[@title="Update"]');
        $I->fillField('First Name', 'Federico');
        $I->fillField('Last Name', 'Fellini');
        $I->click('Save');
        $I->amOnPage('/directors/index');
        $I->see('Fellini');
        /* как нажать на кнопку, которая возникает при подтверждении удаления????
        $I->click('//td[text() = \'Fellini\']/..//a[@title="Delete"]');
        $I->click('');
        $I->amOnPage('/directors/index');
        $I->see('Fellini');
        */
    }
}
