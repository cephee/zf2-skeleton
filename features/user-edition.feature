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

#  Scenario Outline -> permet de faire un scénario réutilisable

  Scenario Outline: Display an error message on non exist users
	Given I am on "<url>"
	Then the response status code should be 404

	Examples:
	| url 			|
	| /user/0 		|
	| /user/987481 	|




