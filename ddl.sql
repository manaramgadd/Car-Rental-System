create DATABASE car_rental_system;

use car_rental_system;
CREATE TABLE `admin` (
  `admin_id` int(11),
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `gender` char(1) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY(`admin_id`)
);

use car_rental_system;
CREATE TABLE `office` (
  `office_id` int(11) AUTO_INCREMENT,
  `Country` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL,
  PRIMARY KEY(`office_id`),
  FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`)
);

use car_rental_system;
CREATE TABLE `car` (
  `plate_number` varchar(255),
  `model` varchar(25) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `year` smallint(6) NOT NULL,
  `status` varchar(25) NOT NULL,
  `color` varchar(25) NOT NULL,
  `price_per_day` float NOT NULL,
  `office_id` int(11),
  `picture` varchar(255) NOT NULL,
  `is_reserved` char(1) NOT NULL,
  PRIMARY KEY(`plate_number`),
  FOREIGN KEY (`office_id`) REFERENCES `office` (`office_id`) ON DELETE SET NULL ON UPDATE CASCADE
);

use car_rental_system;
CREATE TABLE `customer` (
  `SSN` varchar(9),
  `email` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `gender` char(1) NOT NULL,
  `date_of_birth` date NOT NULL,
  `Reg_date` date NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  PRIMARY KEY(`SSN`)
);

use car_rental_system;
CREATE TABLE `reservation` (
  `Order_id` int(11) unique NOT NULL AUTO_INCREMENT,
  `plate_number` varchar(255) ,
  `SSN` varchar(9),
  `reserve_date` date NOT NULL,
  `start_date` date NOT NULL,
  `return_date` date NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `total_amount` double NOT NULL,
  PRIMARY KEY(`SSN`,`plate_number`,`reserve_date`),
  FOREIGN KEY (`SSN`) REFERENCES `customer` (`SSN`),
  FOREIGN KEY (`plate_number`) REFERENCES `car` (`plate_number`) ON DELETE CASCADE ON UPDATE CASCADE
);

use car_rental_system;
CREATE TABLE `car_status` (
  `plate_number` varchar(255),
  `OFS_start` DATE NOT NULL,
  `OFS_end` DATE, 
  PRIMARY KEY(`plate_number`,`OFS_start`),
  FOREIGN KEY (`plate_number`) REFERENCES `car` (`plate_number`) ON DELETE CASCADE ON UPDATE CASCADE 
);
