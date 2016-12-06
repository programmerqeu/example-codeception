<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('the title one the homepage');
$I->amOnPage('/');
$I->seeInTitle('Welcome Codeception');
$I->dontSeeInTitle('Register');
