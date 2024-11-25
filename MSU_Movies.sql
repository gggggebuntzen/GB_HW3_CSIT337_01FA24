-- Drop the database if it already exists
DROP DATABASE IF EXISTS `MSU_Movies`;

-- Create the database
CREATE DATABASE `MSU_Movies` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `MSU_Movies`;

-- Create the Movie table
CREATE TABLE `Movie` (
    `MovieID` INT(11) NOT NULL AUTO_INCREMENT,
    `MovieTitle` VARCHAR(255) NOT NULL,
    `ReleaseDate` DATE NOT NULL,
    `Genre` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`MovieID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert sample data into the Movie table
INSERT INTO `Movie` (`MovieID`, `MovieTitle`, `ReleaseDate`, `Genre`) VALUES
(1, 'Superman vs Batman', '2016-03-25', 'Action'),
(2, 'Deadpool', '2016-02-12', 'Comedy'),
(3, 'Furious 7', '2015-04-03', 'Thriller'),
(4, 'PK', '2014-12-19', 'Drama'),
(5, 'The Hangover', '2009-06-05', 'Comedy'),
(6, '3 Idiots', '2009-12-25', 'Drama'),
(7, 'Spectre', '2015-11-06', 'Thriller'),
(8, 'Batman Begins', '2005-06-15', 'Action'),
(9, 'The Dark Knight', '2008-07-18', 'Crime');

-- Create a user for general access
CREATE USER 'mgs_user'@'localhost' IDENTIFIED BY 'pa55word';
GRANT SELECT, INSERT, DELETE, UPDATE ON `MSU_Movies`.* TO 'mgs_user'@'localhost';

-- Create a user for read-only access
CREATE USER 'mgs_tester'@'localhost' IDENTIFIED BY 'pa55word';
GRANT SELECT ON `MSU_Movies`.`Movie` TO 'mgs_tester'@'localhost';

-- Apply privileges and flush
FLUSH PRIVILEGES;