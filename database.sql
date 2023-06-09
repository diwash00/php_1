

-- Create the database
CREATE DATABASE Diwash200542953;

-- Use the database
USE Diwash200542953;

-- Create the table for pizza orders
CREATE TABLE orders (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    contact VARCHAR(15) NOT NULL,
    pizza VARCHAR(255) NOT NULL,
    size VARCHAR(10) NOT NULL,
    toppings VARCHAR(255) NOT NULL
);


