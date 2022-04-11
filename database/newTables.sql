CREATE DATABASE Critical_Fitness2;
use Critical_Fitness2;

CREATE TABLE `Plans` (
                         `planName` VARCHAR(45),
                         `type` VARCHAR(45),
                         `description` VARCHAR(120),
                         `image` VARCHAR(45),
                         `price` FLOAT,
                         PRIMARY KEY (`planName`)
);

CREATE TABLE `Card` (
                        `cardNumber` INT,
                        `type` VARCHAR(45),
                        `cvv` INT,
                        PRIMARY KEY (`cardNumber`)
);

CREATE TABLE `Basket` (
                          `amount` FLOAT,
                          `planName` VARCHAR(45),
                          PRIMARY KEY (`amount`),
                          FOREIGN KEY (`planName`) REFERENCES `Plans`(`planName`)
);

CREATE TABLE `Payment` (
                           `paymentID` INT,
                           `cardNumber` INT,
                           PRIMARY KEY (`paymentID`),
                           FOREIGN KEY (`cardNumber`) REFERENCES `Card`(`cardNumber`)
);

CREATE TABLE `Promo` (
                         `promoCode` VARCHAR(45),
                         `amount` FLOAT,
                         PRIMARY KEY (`promoCode`)
);

CREATE TABLE `Order` (
                         `orderID` INT UNSIGNED AUTO_INCREMENT,
                         `shipEmail` VARCHAR(45),
                         `promoCode` VARCHAR(45),
                         `amount` FLOAT,
                         `planName` VARCHAR(45),
                         PRIMARY KEY (`orderID`),
                         FOREIGN KEY (`amount`) REFERENCES `Basket`(`amount`),
                         FOREIGN KEY (`promoCode`) REFERENCES `Promo`(`promoCode`),
                         FOREIGN KEY (`planName`) REFERENCES `Basket`(`planName`)
);

CREATE TABLE `Transactions` (
                                `transactionID` INT,
                                `orderID` INT UNSIGNED AUTO_INCREMENT,
                                `amount` FLOAT,
                                PRIMARY KEY (`transactionID`),
                                FOREIGN KEY (`orderID`) REFERENCES `Order`(`orderID`),
                                FOREIGN KEY (`amount`) REFERENCES `Order`(`amount`)
);

CREATE TABLE `PersonalTrainer` (
                                   `trainerName` VARCHAR(45),
                                   PRIMARY KEY (`trainerName`)
);

CREATE TABLE `Customer` (
                            `name` VARCHAR(45),
                            `surname` VARCHAR(45),
                            PRIMARY KEY (`name`)
);

CREATE TABLE `User` (
                        `userID` INT  UNSIGNED AUTO_INCREMENT ,
                        `email` VARCHAR(45),
                        `password` VARCHAR(45),
                        PRIMARY KEY (`userID`)
);

