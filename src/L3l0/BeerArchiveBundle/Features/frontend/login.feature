Feature: As a guest
  I want use my beer archive
  so I need to log in

  Background:
    Given I am guest
    And "leszek" user exists

  Scenario: Successful form login
    Given I am at login page
    When I fill in "Email" with "leszek@example.com"
    And I fill in "Password" with "password"
    Then I should be logged in
    And I should be able to mark beer
    And I should be able to add new beer

  Scenario: Form login with invalid password
    Given I am at login page
    When I fill in "Email" with "leszek@example.com"
    And I fill in "Password" with "invalidPassword"
    Then I should not be logged in
    And I should not be able to mark beer