Feature: As a guest
  I want to see public beer list

  Background:
    Given I am guest
    And there are beers such as:
      | beer name    | average rate |
      | Tyskie       |            3 |
      | Lech Premium |            4 |
      | Tatra        |            5 |

  Scenario: View list of beers sorted by rate
    Given I am on the beer list page
    Then I should see "Tatra" at 1st position
    And I should see "Lech Premium" at 2nd position
    And I should see "Tyskie" at 3rd position

  Scenario: Empty list view
    Given I am on the beer list page
    And there is not any beer
    Then I should see "Sorry, bar is closed"