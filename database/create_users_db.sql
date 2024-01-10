-- Create database if not exists
CREATE DATABASE IF NOT EXISTS users_db;

-- Use the users_db database
USE users_db;

-- Create the users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    curso VARCHAR(255) NOT NULL,
    cor VARCHAR(255) NOT NULL,
    comida VARCHAR(255) NOT NULL
);
