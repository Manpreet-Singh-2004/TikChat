# TikChat
 TicChat is a localhost-based Social Media, designed on PHP and backend with MySql on an Apache Server.

## Database Structure
To set up the database for this project, follow these guidelines:

### Database Name:
The database should be named `school`.

<img width="714" alt="image" src="https://github.com/user-attachments/assets/58d521ad-f703-4f92-9b9b-766160dce45b">

#### Tables and Schema:
The database consists of two main tables: users and status.

#### users Table:
This table stores user credentials with the following fields:

`user_email` (Primary Key): The email address of the user.

`password` : The password associated with the user account.

<img width="334" alt="image" src="https://github.com/user-attachments/assets/fa151cc8-3a4c-443d-8c1d-c33276fb4d3c">

#### status Table:
This table is used to manage posts created by users and contains the following fields:

`status_id` (Primary Key): Unique identifier for each post.

`status_text`: The content of the post.

`status_privacy`: Indicates the visibility settings of the post (e.g., public, private).

`user_email` (Foreign Key): Links the post to the user who created it.

`file_name`: Stores the name of any associated file uploaded with the post.

`community`: Represents the community or group associated with the post.

![image](https://github.com/user-attachments/assets/eda7df8d-f4c7-4e73-9b9b-3edebfe682b1)

#### Relationships: 
The `user_email` field in the status table acts as a foreign key, referencing the `user_email` field in the users table. This ensures that every post in the status table is associated with a valid user.


## Apache Server

For the server, we are using XAMPP control panel V3.3.0 which you can download from their [official website](https://www.apachefriends.org/download.html).

Once it is downloaded, we will run the Apache server and the Mysql server

<img width="497" alt="image" src="https://github.com/user-attachments/assets/60beef58-593b-4740-ab5b-e3e6e606fed3">

## Code and Execution

To run the code, it is recommended to extract the code zip file in the htdocs folder in XAMPP folder, for example -: `C:\xampp\htdocs`. Once extracted run the above-mentioned services in XAMPP (Apache and Mysql), to run the code in a browser go to the following link -: `http://localhost/Logical_Squad/mainpage.php`. From here, the user can see the home page and other details.

![image](https://github.com/user-attachments/assets/1c7ed9c3-78fc-435a-9586-e2f4c843bb1e)

