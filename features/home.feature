Feature: Homepage
  In order to know the website is running
  As a website user
  I need to be able to view the site title and login

  Scenario: Viewing the site title
    Given I am on the homepage
    Then I should see "Welcome"

  @api @javascript
  Scenario: See "Add Content"
    Given I am logged in as a user with the "administrator" role
      And I am on the homepage
    Then I should see "Add content"
    When I click "Add content"
    And I wait for "3" seconds
    Then I should see "Use basic pages for your static content"
