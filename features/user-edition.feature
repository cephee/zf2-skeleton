Feature: User edition

  @cleanup
  Scenario: Display an existing user
	Given I have a stored user with:
	| Firstname | Joffrey |
	| Lastname | Body |
	When I go to:
	  | /user/ | %temporaryUser% |
	Then the "Firstname" field should contain "Joffrey"
	And the "Lastname" field should contain "Body"


  Scenario Outline: Display an error message when on non exist users
	Given I am on "<url>"
	Then the response status code should be 404
	And I should see " The user has not been found"

	Examples:
	| url 			|
	| /user/0 		|
	| /user/987481 	|




