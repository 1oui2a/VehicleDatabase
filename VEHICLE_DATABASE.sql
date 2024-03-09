-- DROP DATABASE IF EXISTS VEHICLE_DB;
-- CREATE DATABASE VEHICLE_DB;

-- Set storage engine to InnoDB
SET default_storage_engine=InnoDB;
-- Delete database if it currently exists
DROP DATABASE IF EXISTS VEHICLE_DATABASE;
-- Create database with utf8mb4 character set and utf8mb4_unicode_ci collation
CREATE DATABASE VEHICLE_DATABASE CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
-- Use the newly created database
USE VEHICLE_DATABASE;

CREATE TABLE VEHICLES (
 reg_number           CHAR(15) NOT NULL,
 current_mileage      INT(12),
 date_made            VARCHAR(8),
 date_nct_due		  VARCHAR(8),
 vehicle_model		  VARCHAR(32),
 PRIMARY KEY (reg_number)
);
 
INSERT INTO VEHICLES VALUES ("12-D-2949", 72374,"12-11-2012", "18-12-2023", "Nissan Leaf");
INSERT INTO VEHICLES VALUES ("162-MO-84837", 45743, "23-07-2016", "08-01-2024", "Opel Insignia");
INSERT INTO VEHICLES VALUES ("191-G-127", 21903, "28-03-2019", "04-05-2024", "Hyundai Tucson");
INSERT INTO VEHICLES VALUES ("22-G-4783", 19532, "16-09-2022", "24-08-2024", "Skoda Octavia"); 


CREATE TABLE CUSTOMERS (	
reg_number              VARCHAR(15) NOT NULL, 
customer_id				SMALLINT(12) NOT NULL,
customer_name			CHAR(30),
customer_email			VARCHAR(30),
PRIMARY KEY (customer_id),
FOREIGN KEY (reg_number) REFERENCES VEHICLES(reg_number)
);
INSERT INTO CUSTOMERS VALUES ("12-D-2949", 1, "Rosalia Rose", "RosaliaR20@gmail.com");
INSERT INTO CUSTOMERS VALUES ("22-G-4783", 2, "Mark Lee", "Mlee99@yahoo.com");
INSERT INTO CUSTOMERS VALUES ("191-G-127", 3, "Iarla Sparrow Burke", "ISB123@outlook.ie");
INSERT INTO CUSTOMERS VALUES ("162-MO-84837", 4, "Jane Ryder", "janemerexo@gmail.com");



CREATE TABLE VEHICLE_BOOKINGS (
customer_bookingid  VARCHAR(15) NOT NULL,
customer_id			SMALLINT(12) NOT NULL,
vehicle_rental_id   INT(30),
date_from			MEDIUMINT(8),
date_to				MEDIUMINT(8),
PRIMARY KEY(customer_bookingid),
FOREIGN KEY (customer_id) REFERENCES CUSTOMERS(customer_id)
);
INSERT INTO VEHICLE_BOOKINGS VALUES ("IE12120239856", 1, "0576843", "02-02-2024", "13-02-2024");
INSERT INTO VEHICLE_BOOKINGS VALUES ("IE12220238439", 2, "0482384", "03-01-2024", "11-01-2024");
INSERT INTO VEHICLE_BOOKINGS VALUES ("IE12320237548", 3, "0583848", "11-01-2024", "28-01-2024");
INSERT INTO VEHICLE_BOOKINGS VALUES ("IE12420239503", 4, "0483949", "05-03-2024", "12-03-2024");



CREATE TABLE VEHICLE_RENTAL_STATUS (
rental_status_code			VARCHAR(30),
rental_status_description   VARCHAR(30) NOT NULL,
customer_bookingid			VARCHAR(15) NOT NULL,
PRIMARY KEY(rental_status_code),
FOREIGN KEY(customer_bookingid) REFERENCES VEHICLE_BOOKINGS(customer_bookingid)
);
INSERT INTO VEHICLE_RENTAL_STATUS VALUES ("12D2949Rental1", "Available", "IE12120239856");
INSERT INTO VEHICLE_RENTAL_STATUS VALUES ("162MO84837Rental2", "Unavailable", "IE12220238439");

