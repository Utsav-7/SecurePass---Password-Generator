# Random-Password-Generator
## Description: 
- Random password generator is a web-based application that generates strong and unique passwords for users to ensure the security of their online accounts. The application offers various customization options such as password length, inclusion of special characters, capitalization, and numbers. Users can easily generate a password by clicking on the "Generate Password" button, and copy it to their clipboard for later use. With an easy-to-use interface and high level of personalization, the random password generator offers users a convenient way to secure their online presence.

## Workflow:
- Step-1: user register
- Step-2: after register they will continue for login
- Step-3: Generate passwords as per your wish 
- (Note: Generated password will be saved in database with username) 

## Key Features
- Customizable password generation (length, special characters, capitalization, numbers).
- Easy-to-use interface for generating and copying passwords.
- Secure storage of generated passwords associated with usernames.

## Technologies Used
- **HTML & CSS:** Front-end technologies for creating a responsive and user-friendly interface.
- **JavaScript:** Enhances interactivity and user experience with dynamic content updates.
- **MySQL:** Database management system for storing and retrieving data efficiently.
- **PHP:** Server-side scripting language for handling the application logic.


## Installation and Execution Steps
### Clone the Repository
First, clone the repository to your local machine using the following command:
```sh
git clone https://github.com/your-username/random-password-generator.git
```
### Set Up the Database
- Start your XAMPP or WAMP server.
- Open phpMyAdmin in your web browser (usually http://localhost/phpmyadmin).
- Create a new database named password_generator.
- Import the SQL file located in the database folder of the cloned repository:
  - Click on the Import tab.
  - Choose the file password_generator.sql from the database folder.
  - Click Go to import the database

### Configure the Project
1. Navigate to the project directory:
``` 
cd random-password-generator
```
2. Open the **config.php** file located in the root directory.
3. Update the database configuration details:
```
<?php
  $servername = "localhost";
  $username = "root";
  $password = "your_password";
  $dbname = "password_generator";
  
  // Create a connections
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
?>
```
### Start the Server
- Move the project directory to the htdocs folder of your XAMPP installation (usually C:\xampp\htdocs).
- Open your web browser and go to **http://localhost/random-password-generator**.

### Access the Application
- Registration: Users can register for an account.
- Login: After registering, users can log in to generate passwords.
- Generate Password: Users can customize and generate passwords, which are then saved in the database with their username.

<br>

- Notes: If you want to setup this project, then you will create a database name with the user and save_password tables. Make sure the database credentials are write or wrong in php code.
