<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('perform form actions and see result');
$I->amOnPage('/');
// we are using label to match user_name field
$I->fillField('Name', 'Miles');
// we can use input name or id
$I->fillField('user[email]','miles@davis.com');
$I->selectOption('Gender','Male');
$I->click('Update');
