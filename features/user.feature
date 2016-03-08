@user
Feature: User list feature

  Scenario: The user page should display a user list
	Given I am on "/user"
	Then I should see "Firstname"
	And I should see "Lastname"