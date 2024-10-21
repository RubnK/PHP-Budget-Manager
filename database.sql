CREATE DATABASE budget_management;
USE budget_management;

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    amount DECIMAL(10, 2) NOT NULL,
    category_id INT NOT NULL,
    description TEXT NOT NULL,
    pointed SMALLINT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);