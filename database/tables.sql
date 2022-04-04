CREATE DATABASE Critical_Fitness;
use Critical_Fitness;

CREATE TABLE `Plans` (
                         `planName` VARCHAR(45),
                         `type` VARCHAR(45),
                         `description` VARCHAR(120),
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
                           `amount` FLOAT,
                           `cardNumber` INT,
                           PRIMARY KEY (`amount`),
                           FOREIGN KEY (`cardNumber`) REFERENCES `Card`(`cardNumber`)
);

CREATE TABLE `Promo` (
                         `promoCode` VARCHAR(45),
                         `amount` FLOAT,
                         PRIMARY KEY (`promoCode`)
);

CREATE TABLE `Order` (
                         `orderID` INT,
                         `date` DATETIME,
                         `shipEmail` VARCHAR(45),
                         `promoCode` VARCHAR(45),
                         `amount` FLOAT,
                         `planName` VARCHAR(45),
                         PRIMARY KEY (`orderID`),
                         FOREIGN KEY (`amount`) REFERENCES `Payment`(`amount`),
                         FOREIGN KEY (`planName`) REFERENCES `Basket`(`planName`),
                         FOREIGN KEY (`promoCode`) REFERENCES `Promo`(`promoCode`),
                         FOREIGN KEY (`amount`) REFERENCES `Basket`(`amount`)
);

CREATE TABLE `Transactions` (
                                `transactionID` INT  UNSIGNED AUTO_INCREMENT ,
                                `orderID` INT,
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

