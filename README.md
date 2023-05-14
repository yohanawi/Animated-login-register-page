## Animated Login/Register Page

This repository contains a simple animated login/register page with functional user account creation. The login and registration forms pull their data from a MySQL database, which stores the information provided during account creation.

### Features

- Login Form: Allows users to log in to their existing accounts.
- Registration Form: Enables users to create new accounts with email and password validation.
- Email and Password Validation: Ensures that the provided email is valid and that the password meets certain criteria.
- MySQL Database: Stores user account information, including email and password.

### Requirements

- PHP [Version: 8.0.7]
- MySQL [version 5.1.1]

### Installation

1. Clone the repository: `git clone https://github.com/yohanawi/Animated-login-register-page.git`
2. Create a new MySQL database.
3. Import the SQL file provided in the `register_login` directory to set up the necessary tables.
4. Update the database connection settings in the `config.php` file.
5. Start your local server or web server.
6. Open the application in your web browser.

### Demo

Login Page:
![Login](https://user-images.githubusercontent.com/86613961/197321919-970ccc72-3ed7-49bf-84ce-a6f5370279f4.png)


Register Page:
![Register](https://user-images.githubusercontent.com/86613961/197321928-8a7d61a5-b519-40cd-a435-08fa13a52c19.png)

### Usage

1. Launch the application in your web browser.
2. Access the registration form to create a new account.
3. Fill in the required fields, including a valid email address and a password that meets the specified criteria.
4. Submit the registration form.
5. Use the provided credentials to log in to the application.
6. If the login is successful, you will be redirected to the main page or a dashboard.

### Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request.

### License

This project is licensed under the [MIT License](LICENSE).


