CREATE DATABASE birthdaymail;
USE birthdaymail;
CREATE TABLE subscribers (
    subscriber_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(100),
    birthday DATE
);