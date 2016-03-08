@user
Feature: User list feature

  Scenario: The user page should display a user list
	Given I am on "/user"
	Then the response status code should be 200
	Then I should see "Firstname"
	And I should see "Lastname"

  Scenario: the user page shouyld have an add user button
	Given I am on "/user"
	When I follow "Add user"
	Then I should be on "/user/add"
	And the response status code should be 200

  @cleanup
  Scenario: the user list should have an edit button
	Given I have a stored user with:
	  | Firstname | Joffrey |
	  | Lastname  | Body |
	And I am on "/user"
	When I follow "Edit"
	Then the response status code should be 200
	And the url should match
	  | /user/  | %temporaryUser% |


