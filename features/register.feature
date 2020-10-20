Feature: Register feature for commerce site

    As a new user I should be able to register on the Drupal commerce site

    @javascript
    Scenario: Register as new user
    Given I am on "/user/register" 
    When I wait for the page to load
    Then I fill in "mail" with "samireshi002+2@gmail.com"
    And I wait for the page to load
    Then I fill in "name" with "Sami Ullah+1"
    And I wait for the page to load
    When I check "contact"
    And I wait for the page to load
    When I select "Accra" from "timezone"
    And I wait for the page to load
    When I press "op"
    And I wait for the page to load
    Then I should see text matching "A welcome message with further instructions has been sent to your email address."
    And I wait for the page to load

