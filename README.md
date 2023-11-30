# TEST WEBDEV #

----------------------------------------------------------------------------------------------------------------------
Webdev test 2023-11-30

Project was made to show developer basic skills and possibilities.

## Instructions ##

1. Required: Apache, Php 8.1, MySQL
1. Pull the project from Git repozitory
3. Configurate <i>.env</i> file according to your server setup
4. Run migrations script: <strong><em>php artisan migrate</em></strong>

## Project functionality

#### Project has 6 rachable endpoints:
1. **Home page** <br/>
   **Url:** {root url}/ <br/>
   **Method:** GET <br/>
   **Returns:** Full Html <br/>
   **Description:** All instructions explained <br/><br/>

2. **Users list** <br/> 
   **Url:** {root url}/users <br/>
   **Method:** GET <br/>
   **Returns:** JSON <br/>
   **Description:** Users list with IDs <br/><br/>
   
3. **User info** <br/>
	**Url:** {root url}/users/{user id} <br/>
	**Method:** GET <br/>
	**Returns:** JSON <br/>
	**Description:** Single user info <br/><br/>
	
4. **User create** <br/>
	**Url:** {root url}/users <br/>
	**Method:** POST <br/>
	**Returns:** JSON <br/>
	**Description:** Providing info to create user <br/>
	**Fields:** <i>first_name</i>, <i>last_name</i>, <i>email</i>, <i>password</i>, <i>address</i> <br/><br/>
	
5. **User update** <br/>
	**Url:** {root url}/users/{user id} <br/>
	**Method:** PUT <br/>
	**Returns:** JSON <br/>
	**Description:** Providing info for sser update <br/>
	**Fields:** <i>first_name</i>, <i>last_name</i>, <i>email</i>, <i>password</i>, <i>address</i> <br/><br/>
	
6. **User delete** <br/>
	**Url:** {root url}/users/{user id} <br/>
	**Method:** DELETE <br/>
	**Returns:** JSON <br/>
	**Description:** Deleting the user by provided id <br/>
----------------------------------------------------------------------------------------------------------------------