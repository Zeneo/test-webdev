<br/>

# TEST WEBDEV

----------------------------------------------------------------------------------------------------------------------
Webdev test 2023-11-30

Project was made to show developer basic skills and possibilities.

----------------------------------------------------------------------------------------------------------------------

## Installation instructions

1. Required: Apache, Php 8.1, MySQL
1. Pull the project from Git repozitory
3. Configurate <i>.env</i> file according to your server setup
4. Run migrations script: <strong><em>php artisan migrate</em></strong>

####For having example data:
5. Run seeder script: <strong><em>php artisan db:seed</em></strong>

----------------------------------------------------------------------------------------------------------------------

## Project functionality

#### Project has 6 rachable endpoints:
1. ####Home page
   **Url:** {root url}/ <br/>
   **Method:** GET <br/>
   **Returns:** Full Html <br/>
   **Description:** All instructions explained <br/><br/>

2. ####Users list 
   **Url:** {root url}/users <br/>
   **Method:** GET <br/>
   **Returns:** JSON <br/>
   **Description:** Users list with IDs <br/><br/>
   
3. ####User info
	**Url:** {root url}/users/{user id} <br/>
	**Method:** GET <br/>
	**Returns:** JSON <br/>
	**Description:** Single user info <br/><br/>
	
4. ####User create
	**Url:** {root url}/users <br/>
	**Method:** POST <br/>
	**Returns:** JSON <br/>
	**Description:** Providing info to create user <br/>
	**Fields:** <i>first_name</i>, <i>last_name</i>, <i>email</i>, <i>password</i>, <i>address</i> <br/><br/>
	
	**Example and requiraments:<br/>
		'first_name'=> Paulius, 								(required, letters only, min size: 3, max size: 20)<br/>
		'last_name' => Navickas,								(required, letters only, min size: 3, max size: 30)<br/>
		'email'     => paulius/zee@gmail.com   					(required, valid email addresses structure only, unique)<br/>
		'password'  => passwordas								(required, min size: 6, max size: 30)<br/>
		'address'   => Laisvės al. 37a-4, Kaunas 3000, Lietuva	(required, <br/>
			&nbsp;&nbsp;&nbsp;&nbsp;Regex checks for: <b>{street name with or without spaces and dots} {house number with or without alphabetical char}</b><br/>
			&nbsp;&nbsp;&nbsp;&nbsp;<b>{posible appartment number after '-'}, {post code 4 digits or it can be placed after city name} {city name} {post code 5 digits} , {possible,but not required country name} </b><br/>
	
5. ####User update
	**Url:** {root url}/users/{user id} <br/>
	**Method:** PUT <br/>
	**Returns:** JSON <br/>
	**Description:** Providing info for sser update <br/>
	**Fields:** <i>first_name</i>, <i>last_name</i>, <i>email</i>, <i>password</i>, <i>address</i> <br/><br/>
	
	**Example and requiraments:
		'first_name'=> Paulius, 								(required, letters only, min size: 3, max size: 20)
		'last_name' => Navickas,								(required, letters only, min size: 3, max size: 30)
		'email'     => paulius/zee@gmail.com   					(required, valid email addresses structure only, unique)
		'password'  => passwordas								(required, min size: 6, max size: 30)
		'address'   => Laisvės al. 37a-4, Kaunas 3000, Lietuva	(required, <br/>
			&nbsp;&nbsp;&nbsp;&nbsp;Regex checks for: <b>{street name with or without spaces and dots} {house number with or without alphabetical char}</b><br/>
			&nbsp;&nbsp;&nbsp;&nbsp;<b>{posible appartment number after '-'}, {post code 4 digits or it can be placed after city name} {city name} {post code 5 digits} , {possible,but not required country name} </b><br/>
        
	
6. ####User delete
	**Url:** {root url}/users/{user id} <br/>
	**Method:** DELETE <br/>
	**Returns:** JSON <br/>
	**Description:** Deleting the user by provided id <br/>
----------------------------------------------------------------------------------------------------------------------