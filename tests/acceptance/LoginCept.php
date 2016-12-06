<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('login and see the profile page');
$I->amOnPage('/');
$I->fillField('name', 'Max Mustermann');
$I->fillField('email', 'mustermann@andrelademann.de');
$I->fillField('password', '12345');
$I->click('Sign in');
$I->seeCurrentUrlEquals('/profile.php');
$I->see('Welcome Max Mustermann');
$I->seeLink('Sign out');
$I->click('Sign out');
$I->seeCurrentUrlEquals('/index.php');
