CREATE DATABASE db_sterk;

use db_sterk;

CREATE TABLE name(id int AUTO_INCREMENT PRIMARY KEY,
name varchar(60) NOT NULL,
createdAt TIMESTAMP DEFAULT NOW(),
updatedAt TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP

);

CREATE TABLE services(
    service_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    service_name varchar(200) NOT NULL,
    createdAt TIMESTAMP DEFAULT NOW(),
    updatedAt TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP


);

-- test data

-- INSERT INTO services(service_name) values("Graphic Design"); -- passed


CREATE TABLE details(
    details_id int PRIMARY KEY AUTO_INCREMENT,
    details_name varchar(255),
    ser_id int,
    createdAt TIMESTAMP DEFAULT NOW(),
    FOREIGN KEY(ser_id) REFERENCES services(service_id),
    updatedAt TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP
    

);
-- INSERT INTO details(details_name,ser_id) values("Banner, Logos, badges",1); -- passed

-- -- joining two tables

-- SELECT service_name,details_name FROM services JOIN details ON services.service_id = details.ser_id; --paassed
 
CREATE TABLE members(
    members_id int AUTO_INCREMENT PRIMARY KEY,
    member_name varchar(128),
    service_id int,
    createdAt TIMESTAMP DEFAULT NOW(),
    FOREIGN KEY(service_id) REFERENCES services(service_id),
    updatedAt TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP
 

);
-- INSERT INTO members(member_name,service_id) values("MUGIRANEZA Jean Daniel",1); -- passed

-- SELECT member_name,service_name FROM members JOIN services ON services.service_id = members.service_id; --paassed

CREATE TABLE packages(
    package_id int PRIMARY KEY AUTO_INCREMENT,
    package_name varchar(100) NOT NULl,
    price varchar(100),
    album varchar(100),
    photos varchar(100),
    cadre varchar(100),
    video varchar(100),
    usbflash_disk varchar(100),
    production_crew varchar(100),
    duration varchar(100),
    bonus varchar(100) DEFAULT 0,

    createdAt TIMESTAMP DEFAULT NOW(),
    updatedAt TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP

);
-- INSERT INTO packages(package_name,price,album,photos,cadre,video,usbflash_disk,production_crew,duration) values("silver","$700","VIP","320","A1","Full video + 1 minute highlight","16GB","2 videographers and photographers","2 days(including civil marriage)"); -- passed
-- INSERT INTO packages(package_name,price,album,photos,cadre,video,usbflash_disk,production_crew,duration) values("gold","$1000","Photobook","240","A0","Full video + 1 minute highlight","16GB","2 videographers and photographers","3 days(including civil marriage+ dote + wedding + bridal shower)");
-- INSERT INTO packages(package_name,price,album,photos,cadre,video,usbflash_disk,production_crew,duration,bonus) values("gold","$1500","Photobook","240","A0","Full video + 1 minute highlight","16GB","2 videographers and photographers","3 days(including civil marriage+ dote + wedding + bridal shower)","wedding advisor, selections at home,home delivery")
CREATE TABLE testimonials(
    testimonials_id int AUTO_INCREMENT PRIMARY KEY,
    testimonial_names varchar(100),
    testimony varchar(100),
    createdAt TIMESTAMP DEFAULT NOW(),
    updatedAt TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP

);

CREATE TABLE bookings(
    booking_id INT PRIMARY KEY AUTO_INCREMENT,
    customer varchar(100) NOT NULL,
    mobile varchar(15),
    service_id int,
    details TINYTEXT,
    createdAt TIMESTAMP DEFAULT NOW(),
    FOREIGN KEY(service_id) REFERENCES services(service_id),
    updatedAt TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP

);
-- INSERT INTO bookings(customer,package_id) values("IRADUKUNDA Christian",2); -- passed
-- SELECT customer,package_name,package_data FROM bookings JOIN packages ON packages.package_id = bookings.package_id; -- passed


