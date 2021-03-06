Feature: Validate scenarios for women listing page

    As a user I should be able to see product details regarding womans products correctly
    
    @javascript
    Scenario: Check count of products on womans page
    Given  I am on "/products/cat/women-1"
    And I wait for the page to load
    Then I should see text matching "Displaying 1 - 9 of 9"
    And I wait for the page to load

    @javascript
    Scenario: get count from product images
    Given  I am on "/products/cat/women-1"
    And I wait for the page to load
    Then I search "roses"
    And I wait for the page to load
    Then I check search results contains result with string "Rose"
    And I wait for the page to load