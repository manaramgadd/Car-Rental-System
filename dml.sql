
INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `gender`, `date_of_birth`, `email`, `password`) VALUES
(1, 'Nouran', 'Tamer', 'F', '2000-10-04', 'admin1@gmail.com', 'admin@0410'),
(2, 'Manar', 'Amgad', 'F', '2000-03-30', 'admin2@gmail.com', 'admin@3003'),
(3, 'Thomas', 'Hilbert', 'M', '1997-05-23', 'admin3@gmail.com', 'admin@2305'),
(4, 'Olga', 'Boris', 'F', '1992-12-20', 'admin4@gmail.com', 'admin@2012'),
(5, 'Theo', 'Gabriel', 'M', '1998-07-08', 'admin5@gmail.com', 'admin@0807'),
(6, 'Kim', 'Lee', 'M', '1997-11-09', 'admin6@gmail.com', 'admin@0911'),
(7, 'Emiko', 'Hiroshi', 'M', '1993-04-16', 'admin7@gmail.com', 'admin@1604');


INSERT INTO `office` (`office_id`, `Country`, `City`, `admin_id`) VALUES
(12, 'Russia', 'Moscow', 4),
(13, 'United States Of America', 'Newyork', 3),
(14, 'France', 'Paris', 5),
(15, 'Germany', 'Frankfurt', 1),
(16, 'Egypt', 'Cairo', 2),
(17, 'South Korea', 'Seoul', 6),
(18, 'Japan', 'Osaka', 7);

INSERT INTO `car` (`plate_number`, `model`, `brand`, `year`, `status`, `color`, `price_per_day`, `office_id`, `picture`, `is_reserved`) VALUES
('2333378', 'Spider', 'Ferrari', 2020, 'active', 'Red', 12500, 15, './FerrariSpider.png', 'Y'),
('2345678', 'Roma', 'Ferrari', 2021, 'active', 'Red', 13500, 15, './FerrariRoma.png', 'N'),
('3468762', 'Panda', 'Fiat', 2018, 'active', 'Silver', 1050, 18, './FiatPanda.png', 'N'),
('3468764', 'Swift', 'Suzuki', 2019, 'active', 'Blue', 1250, 17, './SuzukiSwift.png', 'N'),
('3477344', 'Sportage', 'Kia', 2016, 'active', 'Copper', 4350, 17, './KiaSportage.png', 'Y'),
('5326742', 'Z4', 'BMW', 2020, 'active', 'Silver', 7050, 12, './BMWZ4.png', 'N'),
('6284327', 'Azera', 'Hyundai', 2018, 'active', 'White', 2850, 16, './HyundaiAzera.png', 'N'),
('6342876', 'Sonata', 'Hyundai', 2016, 'active', 'Copper', 2200, 16, './HyundaiSonata.png', 'N'),
('6587933', 'XV', 'Subaru', 2020, 'active', 'Blue', 7800, 18, './SubaruXV.png', 'N'),
('4432876', 'Aventador', 'Lamborghini', 2021, 'active', 'Red', 25000, 13, './Lamborghini.png', 'N'),
('3478650', 'Phantom', 'Rolls Royce', 2022, 'active', 'Blue', 12500, 13, './RollsRoyce.png', 'N'),
('8765392', 'Skyline', 'Nissan', 2019, 'active', 'Blue', 11900, 14, './NissanSkyline.png', 'N'),
('8765934', 'Picanto', 'Kia', 2022, 'active', 'White', 6030, 16, './KiaPicanto.png', 'N'),
('1128657', 'Chiron', 'Buggati', 2019, 'active', 'Blue', 15000, 14, './BuggatiChiron.png', 'N'),
('7734598', 'Hellcat', 'Dodge', 2018, 'active', 'Black', 8700, 13, './DodgeHellcat.png', 'N'),
('5564387', 'Civic', 'Honda', 2015, 'active', 'White', 2300, 16, './HondaCivic.png', 'N'),
('5543876', 'Skoda', 'Octavia', 2011, 'active', 'Blue', 3300, 14, './OctaviaSkoda.png', 'N'),
('3457651', 'Camry', 'Toyota', 2021, 'out of service', 'White', 7600, 12, './ToyotaCamry.png', 'N'),
('8823465', 'Yaris', 'Toyota', 2021, 'active', 'Bronze', 4320, 18, './ToyotaYaris.png', 'N'),
('3451229', 'Land Cruiser', 'Toyota', 2022, 'active', 'Black', 17600, 12, './ToyotaLandCruiser.png', 'N');


INSERT INTO `customer` (`SSN`, `email`, `password`, `first_name`, `last_name`, `gender`, `date_of_birth`, `Reg_date`, `phone_no`) VALUES
('313559478', 'salem87@gmail.com', 'trilean@1234', 'Salem', 'Mostafa', 'M', '1997-03-21', '2021-12-22', '01197232381'),
('743259976', 'gunner2001@gmail.com', 'yurii@1234', 'Omar', 'Sherif', 'M', '2001-05-10', '2020-12-23', '01234213253'),
('835553179', 'sherri667@gmail.com', 'sherii213@1234', 'Shereen', 'Mohamed', 'F', '1999-12-20', '2022-10-10', '01144256746');



INSERT INTO `reservation` (`Order_id`, `plate_number`, `SSN`, `reserve_date`, `start_date`, `return_date`, `payment_type`, `total_amount`) VALUES
(1, '3477344', '313559478', '2021-12-14', '2021-12-15', '2022-01-15', 'credit',134850),
(2, '2333378', '743259976', '2021-12-24', '2021-12-25', '2022-02-01', 'cash', 450000);

INSERT INTO `car_status` (`plate_number`,`OFS_start`,`OFS_end`) VALUES 
('6284327','2019-01-22', '2019-05-21'),
('5543876','2022-05-02','2022-10-12'),
('8823465','2021-12-12','2022-05-13'),
('3457651', '2022-08-01', NULL);