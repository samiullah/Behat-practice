Feature: Verify if header content is correct

    Check all details of header are as expected or not

@javascript
Scenario: Check header logo
 Given I am on "/"
 Then I should see a "body > div.dialog-off-canvas-main-canvas > header > div.site-header__top.container > div > div.col-xs-8.col-sm-5.col-md-5 > div" element
 And I wait for the page to load

@javascript
Scenario: Check Contact Us link is present
 Given I am on "/"
 Then I should see "Contact Us" in the "#block-headerfootercontactinformation > div.field.field--name-field-link.field--type-link.field--label-hidden.field__items > div:nth-child(1) > a" element
 And I wait for the page to load

@javascript
Scenario: Check Log in link is present 
 Given I am on "/"
 Then I should see "Log in" in the "#block-useraccountmenu > ul > li.menu__item.menu__item--log-in > a" element
 And I wait for the page to load



