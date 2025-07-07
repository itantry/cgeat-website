# CGEAT Website

This project is a simple PHP-based website for the Center for Government Efficiency, Accountability, and Transparency (CGEAT). The main feature of the website is a login form that allows users to enter their credentials and receive feedback based on their input.

## Project Structure

The project consists of the following files and directories:

- **public/**
  - **index.php**: The main entry point of the website, containing the HTML structure for the login form and PHP logic for handling form submissions and validations.
  - **css/**
    - **style.css**: Contains the CSS styles for the website, ensuring a professional appearance for the login form and overall layout.
  - **images/**: Directory for storing images used in the website, such as logos or background images.

- **src/**
  - **validate.php**: Contains the PHP logic for validating user input from the login form. It checks if the user ID is provided, if the password is entered, and whether the email format is correct. It simulates the response for non-existent users.

## Setup Instructions

1. Clone the repository to your local machine.
2. Navigate to the `cgeat-website` directory.
3. Ensure you have a local server environment set up (e.g., XAMPP, WAMP, or MAMP).
4. Place the `cgeat-website` folder in the server's root directory (e.g., `htdocs` for XAMPP).
5. Access the website by navigating to `http://localhost/cgeat-website/public/index.php` in your web browser.

## Usage

- Users can enter their user ID and password in the login form.
- If the user ID is not provided, an error message will prompt them to enter it.
- If the password is not entered, the user will be prompted to type it.
- If both fields are filled incorrectly, the user will receive a message stating that the user does not exist and to contact admin@cgeat.org.

## Contributing

Contributions to improve the website are welcome. Please fork the repository and submit a pull request with your changes.