CREATE DATABASE fitness;
    use fitness;

CREATE TABLE users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50)
);

CREATE TABLE `Plans` (
                         `planName` VARCHAR(45),
                         `type` VARCHAR(45),
                         `description` VARCHAR(45),
                         `price` FLOAT
);


