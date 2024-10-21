# Budget Management System

**Authors: [@RubnK](https://github.com/RubnK)**

This Budget Management System is a web application designed to help users manage their finances by tracking their transactions and categorizing them. Users can add categories, log transactions, and update the status of transactions when they have been "pointed" or confirmed.

## Table of content

- [Features](#Features)
- [Requirements](#Prerequisites)
- [Setup](#Setup)
- [Database tables](#Database-tables)
- [Contributing](#Contributing)

## Features

- **Transaction Management**: Users can add financial transactions with descriptions, amounts, and categories.
- **Category Management**: Users can create custom categories for organizing transactions.
- **Balance Tracking**: The system calculates and displays both the actual and real balance (pending/unpointed transactions vs confirmed/pointed transactions).
- **Transaction Status**: Users can mark transactions as "pointed" (confirmed) to update the balance accordingly.

## Prerequisites

Ensure that you have PHP and a MySQL-compatible database (e.g., MySQL, MariaDB) installed on your server.

## Setup

1. Clone the repository:

   ```bash
   git clone https://github.com/RubnK/PHP-Budget-Manager.git
   ```

2. Set up a local development server (e.g., using XAMPP, MAMP, or built-in PHP server).
3. Import the database schema (*database.sql*) into your database to set up the required tables.
4. Update the model/connexion_bdd.php file with your database connection details:

    ```
    $dbhost = "your_host";
    $dbname = "budget_management";
    $dbuser = "your_username";
    $dbpassword = "your_password";
    ```

5. Start the local server and access the project through your browser.

## Database tables
- `categories`: Stores the categories for transactions.
- `transactions`: Stores all financial transactions, including amount, description, category, and status (pointed or not).

## Contributing
Feel free to contribute to the project by submitting issues or pull requests.
