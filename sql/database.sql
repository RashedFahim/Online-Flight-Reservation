CREATE TABLE user (
    User_ID INT PRIMARY KEY AUTO_INCREMENT,
    Username VARCHAR(200),
    Email VARCHAR(200),
    First_name VARCHAR(100),
    Last_name VARCHAR(100),
    Address VARCHAR(255),
    Date_of_Birth DATE,
    Password VARCHAR(200)
);


INSERT INTO user values
(1,'user','user@gmail.com','user','user','mirpur','05-11-2001',1234);




CREATE TABLE Class (
    Flight_number INT PRIMARY KEY,
    Fare DECIMAL(10, 2),
    Class_type VARCHAR(50)
);



CREATE TABLE Flight(
   Flight_number INT PRIMARY KEY,
   Flight_name VARCHAR(200),
   Date DATE,
   Arrival_city VARCHAR(100),
   departure_city VARCHAR(200),
   Arrival_time TIME,
   Departure_time TIME,
   eco_seats int,
   eco_price int,
   business_seats int,
   business_price int
   
);



INSERT INTO Flight (Flight_number, Flight_name, Date, Arrival_city, departure_city, Arrival_time, Departure_time, eco_seats, eco_price, business_seats, business_price)
VALUES
    (1001, 'Flight to Paris', '2024-05-01', 'Paris', 'New York', '14:00:00', '08:00:00', 150, 300, 20, 600),
    (1002, 'Flight to London', '2024-05-02', 'London', 'Los Angeles', '15:00:00', '09:00:00', 160, 320, 22, 620),
    (1003, 'Flight to Tokyo', '2024-05-03', 'Tokyo', 'San Francisco', '16:00:00', '10:00:00', 170, 340, 24, 640),
    (1004, 'Flight to Dubai', '2024-05-04', 'Dubai', 'Chicago', '17:00:00', '11:00:00', 180, 360, 26, 660),
    (1005, 'Flight to Sydney', '2024-05-05', 'Sydney', 'Toronto', '18:00:00', '12:00:00', 190, 380, 28, 680),
    (1006, 'Flight to Rome', '2024-05-06', 'Rome', 'Houston', '19:00:00', '13:00:00', 200, 400, 30, 700),
    (1007, 'Flight to Singapore', '2024-05-07', 'Singapore', 'Miami', '20:00:00', '14:00:00', 210, 420, 32, 720),
    (1008, 'Flight to Istanbul', '2024-05-08', 'Istanbul', 'Seattle', '21:00:00', '15:00:00', 220, 440, 34, 740),
    (1009, 'Flight to Seoul', '2024-05-09', 'Seoul', 'Atlanta', '22:00:00', '16:00:00', 230, 460, 36, 760),
    (1010, 'Flight to Beijing', '2024-05-10', 'Beijing', 'Boston', '23:00:00', '17:00:00', 240, 480, 38, 780);

INSERT INTO Flight (Flight_number, Flight_name, Date, Arrival_city, Departure_city, Arrival_time, Departure_time, eco_seats, eco_price, business_seats, business_price)
VALUES
    (1011, 'Flight to Madrid', '2024-05-11', 'Madrid', 'Dallas', '14:30:00', '08:30:00', 250, 500, 40, 800),
    (1012, 'Flight to Amsterdam', '2024-05-12', 'Amsterdam', 'Denver', '15:30:00', '09:30:00', 260, 520, 42, 820),
    (1013, 'Flight to Berlin', '2024-05-13', 'Berlin', 'Detroit', '16:30:00', '10:30:00', 270, 540, 44, 840),
    (1014, 'Flight to Moscow', '2024-05-14', 'Moscow', 'Las Vegas', '17:30:00', '11:30:00', 280, 560, 46, 860),
    (1015, 'Flight to Bangkok', '2024-05-15', 'Bangkok', 'New Orleans', '18:30:00', '12:30:00', 290, 580, 48, 880),
    (1016, 'Flight to Buenos Aires', '2024-05-16', 'Buenos Aires', 'Phoenix', '19:30:00', '13:30:00', 300, 600, 50, 900),
    (1017, 'Flight to Cairo', '2024-05-17', 'Cairo', 'Portland', '20:30:00', '14:30:00', 310, 620, 52, 920),
    (1018, 'Flight to Vienna', '2024-05-18', 'Vienna', 'San Diego', '21:30:00', '15:30:00', 320, 640, 54, 940),
    (1019, 'Flight to Zurich', '2024-05-19', 'Zurich', 'Washington', '22:30:00', '16:30:00', 330, 660, 56, 960),
    (1020, 'Flight to Hong Kong', '2024-05-20', 'Hong Kong', 'Vancouver', '23:30:00', '17:30:00', 340, 680, 58, 980);

INSERT INTO Flight (Flight_number, Flight_name, Date, Arrival_city, Departure_city, Arrival_time, Departure_time, eco_seats, eco_price, business_seats, business_price)
VALUES
    (1021, 'Flight to Milan', '2024-05-21', 'Milan', 'New York', '14:00:00', '08:00:00', 150, 300, 20, 600),
    (1022, 'Flight to Frankfurt', '2024-05-22', 'Frankfurt', 'New York', '15:00:00', '09:00:00', 160, 320, 22, 620),
    (1023, 'Flight to Shanghai', '2024-05-23', 'Shanghai', 'New York', '16:00:00', '10:00:00', 170, 340, 24, 640),
    (1024, 'Flight to Mumbai', '2024-05-24', 'Mumbai', 'New York', '17:00:00', '11:00:00', 180, 360, 26, 660),
    (1025, 'Flight to Kuala Lumpur', '2024-05-25', 'Kuala Lumpur', 'New York', '18:00:00', '12:00:00', 190, 380, 28, 680),
    (1026, 'Flight to Madrid', '2024-05-26', 'Madrid', 'New York', '19:00:00', '13:00:00', 200, 400, 30, 700),
    (1027, 'Flight to Amsterdam', '2024-05-27', 'Amsterdam', 'New York', '20:00:00', '14:00:00', 210, 420, 32, 720),
    (1028, 'Flight to Berlin', '2024-05-28', 'Berlin', 'New York', '21:00:00', '15:00:00', 220, 440, 34, 740),
    (1029, 'Flight to Moscow', '2024-05-29', 'Moscow', 'New York', '22:00:00', '16:00:00', 230, 460, 36, 760),
    (1030, 'Flight to Bangkok', '2024-05-30', 'Bangkok', 'New York', '23:00:00', '17:00:00', 240, 480, 38, 780);


INSERT INTO Flight (Flight_number, Flight_name, Date, Arrival_city, Departure_city, Arrival_time, Departure_time, eco_seats, eco_price, business_seats, business_price)
VALUES
    (1031, 'Flight to Milan', '2024-05-21', 'Milan', 'Los Angeles', '14:00:00', '08:00:00', 150, 300, 20, 600),
    (1032, 'Flight to Frankfurt', '2024-05-22', 'Frankfurt', 'Los Angeles', '15:00:00', '09:00:00', 160, 320, 22, 620),
    (1033, 'Flight to Shanghai', '2024-05-23', 'Shanghai', 'Los Angeles', '16:00:00', '10:00:00', 170, 340, 24, 640),
    (1034, 'Flight to Mumbai', '2024-05-24', 'Mumbai', 'Los Angeles', '17:00:00', '11:00:00', 180, 360, 26, 660),
    (1035, 'Flight to Kuala Lumpur', '2024-05-25', 'Kuala Lumpur', 'Los Angeles', '18:00:00', '12:00:00', 190, 380, 28, 680),
    (1036, 'Flight to Madrid', '2024-05-26', 'Madrid', 'Los Angeles', '19:00:00', '13:00:00', 200, 400, 30, 700),
    (1037, 'Flight to Amsterdam', '2024-05-27', 'Amsterdam', 'Los Angeles', '20:00:00', '14:00:00', 210, 420, 32, 720),
    (1038, 'Flight to Berlin', '2024-05-28', 'Berlin', 'Los Angeles', '21:00:00', '15:00:00', 220, 440, 34, 740),
    (1039, 'Flight to Moscow', '2024-05-29', 'Moscow', 'Los Angeles', '22:00:00', '16:00:00', 230, 460, 36, 760),
    (1040, 'Flight to Bangkok', '2024-05-30', 'Bangkok', 'Los Angeles', '23:00:00', '17:00:00', 240, 480, 38, 780);


INSERT INTO Flight (Flight_number, Flight_name, Date, Arrival_city, Departure_city, Arrival_time, Departure_time, eco_seats, eco_price, business_seats, business_price)
VALUES
    (1041, 'Flight to Milan', '2024-05-21', 'Milan', 'San Francisco', '14:00:00', '08:00:00', 150, 300, 20, 600),
    (1042, 'Flight to Frankfurt', '2024-05-22', 'Frankfurt', 'San Francisco', '15:00:00', '09:00:00', 160, 320, 22, 620),
    (1043, 'Flight to Shanghai', '2024-05-23', 'Shanghai', 'San Francisco', '16:00:00', '10:00:00', 170, 340, 24, 640),
    (1044, 'Flight to Mumbai', '2024-05-24', 'Mumbai', 'San Francisco', '17:00:00', '11:00:00', 180, 360, 26, 660),
    (1045, 'Flight to Kuala Lumpur', '2024-05-25', 'Kuala Lumpur', 'San Francisco', '18:00:00', '12:00:00', 190, 380, 28, 680),
    (1046, 'Flight to Madrid', '2024-05-26', 'Madrid', 'San Francisco', '19:00:00', '13:00:00', 200, 400, 30, 700),
    (1047, 'Flight to Amsterdam', '2024-05-27', 'Amsterdam', 'San Francisco', '20:00:00', '14:00:00', 210, 420, 32, 720),
    (1048, 'Flight to Berlin', '2024-05-28', 'Berlin', 'San Francisco', '21:00:00', '15:00:00', 220, 440, 34, 740),
    (1049, 'Flight to Moscow', '2024-05-29', 'Moscow', 'San Francisco', '22:00:00', '16:00:00', 230, 460, 36, 760),
    (1050, 'Flight to Bangkok', '2024-05-30', 'Bangkok', 'San Francisco', '23:00:00', '17:00:00', 240, 480, 38, 780);


INSERT INTO Flight (Flight_number, Flight_name, Date, Arrival_city, Departure_city, Arrival_time, Departure_time, eco_seats, eco_price, business_seats, business_price)
VALUES
    (1051, 'Flight to Milan', '2024-05-21', 'Milan', 'Chicago', '14:00:00', '08:00:00', 150, 300, 20, 600),
    (1052, 'Flight to Frankfurt', '2024-05-22', 'Frankfurt', 'Chicago', '15:00:00', '09:00:00', 160, 320, 22, 620),
    (1053, 'Flight to Shanghai', '2024-05-23', 'Shanghai', 'Chicago', '16:00:00', '10:00:00', 170, 340, 24, 640),
    (1054, 'Flight to Mumbai', '2024-05-24', 'Mumbai', 'Chicago', '17:00:00', '11:00:00', 180, 360, 26, 660),
    (1055, 'Flight to Kuala Lumpur', '2024-05-25', 'Kuala Lumpur', 'Chicago', '18:00:00', '12:00:00', 190, 380, 28, 680),
    (1056, 'Flight to Madrid', '2024-05-26', 'Madrid', 'Chicago', '19:00:00', '13:00:00', 200, 400, 30, 700),
    (1057, 'Flight to Amsterdam', '2024-05-27', 'Amsterdam', 'Chicago', '20:00:00', '14:00:00', 210, 420, 32, 720),
    (1058, 'Flight to Berlin', '2024-05-28', 'Berlin', 'Chicago', '21:00:00', '15:00:00', 220, 440, 34, 740),
    (1059, 'Flight to Moscow', '2024-05-29', 'Moscow', 'Chicago', '22:00:00', '16:00:00', 230, 460, 36, 760),
    (1060, 'Flight to Bangkok', '2024-05-30', 'Bangkok', 'Chicago', '23:00:00', '17:00:00', 240, 480, 38, 780);


INSERT INTO Flight (Flight_number, Flight_name, Date, Arrival_city, Departure_city, Arrival_time, Departure_time, eco_seats, eco_price, business_seats, business_price)
VALUES
    (1061, 'Flight to Milan', '2024-05-21', 'Milan', 'Canada', '14:00:00', '08:00:00', 150, 300, 20, 600),
    (1062, 'Flight to Frankfurt', '2024-05-22', 'Frankfurt', 'Canada', '15:00:00', '09:00:00', 160, 320, 22, 620),
    (1063, 'Flight to Shanghai', '2024-05-23', 'Shanghai', 'Canada', '16:00:00', '10:00:00', 170, 340, 24, 640),
    (1064, 'Flight to Mumbai', '2024-05-24', 'Mumbai', 'Canada', '17:00:00', '11:00:00', 180, 360, 26, 660),
    (1065, 'Flight to Kuala Lumpur', '2024-05-25', 'Kuala Lumpur', 'Canada', '18:00:00', '12:00:00', 190, 380, 28, 680),
    (1066, 'Flight to Madrid', '2024-05-26', 'Madrid', 'Canada', '19:00:00', '13:00:00', 200, 400, 30, 700),
    (1067, 'Flight to Amsterdam', '2024-05-27', 'Amsterdam', 'Canada', '20:00:00', '14:00:00', 210, 420, 32, 720),
    (1068, 'Flight to Berlin', '2024-05-28', 'Berlin', 'Canada', '21:00:00', '15:00:00', 220, 440, 34, 740),
    (1069, 'Flight to Moscow', '2024-05-29', 'Moscow', 'Canada', '22:00:00', '16:00:00', 230, 460, 36, 760),
    (1070, 'Flight to Bangkok', '2024-05-30', 'Bangkok', 'Canada', '23:00:00', '17:00:00', 240, 480, 38, 780);


INSERT INTO Flight (Flight_number, Flight_name, Date, Arrival_city, Departure_city, Arrival_time, Departure_time, eco_seats, eco_price, business_seats, business_price)
VALUES
    (1071, 'Flight to Milan', '2024-05-21', 'Milan', 'Houston', '14:00:00', '08:00:00', 150, 300, 20, 600),
    (1072, 'Flight to Frankfurt', '2024-05-22', 'Frankfurt', 'Houston', '15:00:00', '09:00:00', 160, 320, 22, 620),
    (1073, 'Flight to Shanghai', '2024-05-23', 'Shanghai', 'Houston', '16:00:00', '10:00:00', 170, 340, 24, 640),
    (1074, 'Flight to Mumbai', '2024-05-24', 'Mumbai', 'Houston', '17:00:00', '11:00:00', 180, 360, 26, 660),
    (1075, 'Flight to Kuala Lumpur', '2024-05-25', 'Kuala Lumpur', 'Houston', '18:00:00', '12:00:00', 190, 380, 28, 680),
    (1076, 'Flight to Madrid', '2024-05-26', 'Madrid', 'Houston', '19:00:00', '13:00:00', 200, 400, 30, 700),
    (1077, 'Flight to Amsterdam', '2024-05-27', 'Amsterdam', 'Houston', '20:00:00', '14:00:00', 210, 420, 32, 720),
    (1078, 'Flight to Berlin', '2024-05-28', 'Berlin', 'Houston', '21:00:00', '15:00:00', 220, 440, 34, 740),
    (1079, 'Flight to Moscow', '2024-05-29', 'Moscow', 'Houston', '22:00:00', '16:00:00', 230, 460, 36, 760),
    (1080, 'Flight to Bangkok', '2024-05-30', 'Bangkok', 'Houston', '23:00:00', '17:00:00', 240, 480, 38, 780);


INSERT INTO Flight (Flight_number, Flight_name, Date, Arrival_city, Departure_city, Arrival_time, Departure_time, eco_seats, eco_price, business_seats, business_price)
VALUES
    (1091, 'Flight to Milan', '2024-05-21', 'Milan', 'Miami', '14:00:00', '08:00:00', 150, 300, 20, 600),
    (1092, 'Flight to Frankfurt', '2024-05-22', 'Frankfurt', 'Miami', '15:00:00', '09:00:00', 160, 320, 22, 620),
    (1093, 'Flight to Shanghai', '2024-05-23', 'Shanghai', 'Miami', '16:00:00', '10:00:00', 170, 340, 24, 640),
    (1094, 'Flight to Mumbai', '2024-05-24', 'Mumbai', 'Miami', '17:00:00', '11:00:00', 180, 360, 26, 660),
    (1095, 'Flight to Kuala Lumpur', '2024-05-25', 'Kuala Lumpur', 'Miami', '18:00:00', '12:00:00', 190, 380, 28, 680),
    (1096, 'Flight to Madrid', '2024-05-26', 'Madrid', 'Miami', '19:00:00', '13:00:00', 200, 400, 30, 700),
    (1097, 'Flight to Amsterdam', '2024-05-27', 'Amsterdam', 'Miami', '20:00:00', '14:00:00', 210, 420, 32, 720),
    (1098, 'Flight to Berlin', '2024-05-28', 'Berlin', 'Miami', '21:00:00', '15:00:00', 220, 440, 34, 740),
    (1099, 'Flight to Moscow', '2024-05-29', 'Moscow', 'Miami', '22:00:00', '16:00:00', 230, 460, 36, 760),
    (1100, 'Flight to Bangkok', '2024-05-30', 'Bangkok', 'Miami', '23:00:00', '17:00:00', 240, 480, 38, 780);

INSERT INTO Flight (Flight_number, Flight_name, Date, Arrival_city, Departure_city, Arrival_time, Departure_time, eco_seats, eco_price, business_seats, business_price)
VALUES
    (1101, 'Flight to Australia', '2024-05-21', 'Australia', 'Bangladesh', '14:00:00', '08:00:00', 150, 300, 20, 600),
    (1102, 'Flight to Singapore', '2024-05-22', 'Singapore', 'Bangladesh', '15:00:00', '09:00:00', 160, 320, 22, 620),
    (1103, 'Flight to Canada', '2024-05-23', 'Canada', 'Bangladesh', '16:00:00', '10:00:00', 170, 340, 24, 640),
    (1104, 'Flight to India', '2024-05-24', 'India', 'Bangladesh', '17:00:00', '11:00:00', 180, 360, 26, 660),
    (1105, 'Flight to Malaysia', '2024-05-25', 'Malaysia', 'Bangladesh', '18:00:00', '12:00:00', 190, 380, 28, 680),
    (1106, 'Flight to Spain', '2024-05-26', 'Spain', 'Bangladesh', '19:00:00', '13:00:00', 200, 400, 30, 700),
    (1107, 'Flight to Germany', '2024-05-27', 'Germany', 'Bangladesh', '20:00:00', '14:00:00', 210, 420, 32, 720),
    (1108, 'Flight to Brazil', '2024-05-28', 'Brazil', 'Bangladesh', '21:00:00', '15:00:00', 220, 440, 34, 740),
    (1109, 'Flight to Argentina', '2024-05-29', 'Argentina', 'Bangladesh', '22:00:00', '16:00:00', 230, 460, 36, 760),
    (1110, 'Flight to Italy', '2024-05-30', 'Italy', 'Bangladesh', '23:00:00', '17:00:00', 240, 480, 38, 780);


INSERT INTO Flight (Flight_number, Flight_name, Date, Arrival_city, Departure_city, Arrival_time, Departure_time, eco_seats, eco_price, business_seats, business_price)
VALUES
    (1111, 'Flight to Milan', '2024-05-21', 'Milan', 'Australia', '14:00:00', '08:00:00', 150, 300, 20, 600),
    (1112, 'Flight to Frankfurt', '2024-05-22', 'Frankfurt', 'Australia', '15:00:00', '09:00:00', 160, 320, 22, 620),
    (1113, 'Flight to Shanghai', '2024-05-23', 'Shanghai', 'Australia', '16:00:00', '10:00:00', 170, 340, 24, 640),
    (1114, 'Flight to Mumbai', '2024-05-24', 'Mumbai', 'Australia', '17:00:00', '11:00:00', 180, 360, 26, 660),
    (1115, 'Flight to Kuala Lumpur', '2024-05-25', 'Kuala Lumpur', 'Australia', '18:00:00', '12:00:00', 190, 380, 28, 680),
    (1116, 'Flight to Madrid', '2024-05-26', 'Madrid', 'Australia', '19:00:00', '13:00:00', 200, 400, 30, 700),
    (1117, 'Flight to Amsterdam', '2024-05-27', 'Amsterdam', 'Australia', '20:00:00', '14:00:00', 210, 420, 32, 720),
    (1118, 'Flight to Berlin', '2024-05-28', 'Berlin', 'Australia', '21:00:00', '15:00:00', 220, 440, 34, 740),
    (1119, 'Flight to Moscow', '2024-05-29', 'Moscow', 'Australia', '22:00:00', '16:00:00', 230, 460, 36, 760),
    (1120, 'Flight to Bangkok', '2024-05-30', 'Bangkok', 'Australia', '23:00:00', '17:00:00', 240, 480, 38, 780);

INSERT INTO Flight (Flight_number, Flight_name, Date, Arrival_city, Departure_city, Arrival_time, Departure_time, eco_seats, eco_price, business_seats, business_price)
VALUES
    (1121, 'Flight to Milan', '2024-05-21', 'Milan', 'Australia', '14:00:00', '08:00:00', 150, 300, 20, 600),
    (1122, 'Flight to Frankfurt', '2024-05-22', 'Frankfurt', 'Australia', '15:00:00', '09:00:00', 160, 320, 22, 620),
    (1123, 'Flight to Shanghai', '2024-05-23', 'Shanghai', 'Australia', '16:00:00', '10:00:00', 170, 340, 24, 640),
    (1124, 'Flight to Mumbai', '2024-05-24', 'Mumbai', 'Australia', '17:00:00', '11:00:00', 180, 360, 26, 660),
    (1125, 'Flight to Kuala Lumpur', '2024-05-25', 'Kuala Lumpur', 'Australia', '18:00:00', '12:00:00', 190, 380, 28, 680),
    (1126, 'Flight to Madrid', '2024-05-26', 'Madrid', 'Australia', '19:00:00', '13:00:00', 200, 400, 30, 700),
    (1127, 'Flight to Amsterdam', '2024-05-27', 'Amsterdam', 'Australia', '20:00:00', '14:00:00', 210, 420, 32, 720),
    (1128, 'Flight to Berlin', '2024-05-28', 'Berlin', 'Australia', '21:00:00', '15:00:00', 220, 440, 34, 740),
    (1129, 'Flight to Moscow', '2024-05-29', 'Moscow', 'Australia', '22:00:00', '16:00:00', 230, 460, 36, 760),
    (1130, 'Flight to Bangkok', '2024-05-30', 'Bangkok', 'Australia', '23:00:00', '17:00:00', 240, 480, 38, 780);

INSERT INTO Flight (Flight_number, Flight_name, Date, Arrival_city, Departure_city, Arrival_time, Departure_time, eco_seats, eco_price, business_seats, business_price)
VALUES
    (1131, 'Flight to Saudi Arabia', '2024-05-21', 'Saudia Arabia', 'Bangladesh', '14:00:00', '08:00:00', 150, 300, 20, 600),
    (1132, 'Flight to Indonesia', '2024-05-22', 'Indonesia', 'Bangladesh', '15:00:00', '09:00:00', 160, 320, 22, 620),
    (1133, 'Flight to Russia', '2024-05-23', 'Russia', 'Bangladesh', '16:00:00', '10:00:00', 170, 340, 24, 640),
    (1134, 'Flight to South Africa', '2024-05-24', 'South Africa', 'Bangladesh', '17:00:00', '11:00:00', 180, 360, 26, 660),
    (1135, 'Flight to Japan', '2024-05-25', 'Japan', 'Bangladesh', '18:00:00', '12:00:00', 190, 380, 28, 680),
    (1136, 'Flight to China', '2024-05-26', 'China', 'Bangladesh', '19:00:00', '13:00:00', 200, 400, 30, 700),
    (1137, 'Flight to France', '2024-05-27', 'France', 'Bangladesh', '20:00:00', '14:00:00', 210, 420, 32, 720),
    (1138, 'Flight to United Kingdom', '2024-05-28', 'United Kingdom', 'Bangladesh', '21:00:00', '15:00:00', 220, 440, 34, 740),
    (1139, 'Flight to Turkey', '2024-05-29', 'Turkey', 'Bangladesh', '22:00:00', '16:00:00', 230, 460, 36, 760),
    (1140, 'Flight to Egypt', '2024-05-30', 'Egypt', 'Bangladesh', '23:00:00', '17:00:00', 240, 480, 38, 780);


CREATE TABLE Booking (
    ticket_id INT AUTO_INCREMENT PRIMARY KEY,
    Flight_number INT,
    passport_number VARCHAR(100),
    name VARCHAR(200),
    email VARCHAR(200),
    phone VARCHAR(20),
    ticket_type VARCHAR(50),
    payment INT,
    username VARCHAR(100),
    FOREIGN KEY (Flight_number) REFERENCES Flight(Flight_number)
);

INSERT INTO Booking (Flight_number, passport_number, name, email, phone, ticket_type, payment, username) 
VALUES 
    (1007, 'AB123456', 'John Doe', 'johndoe@example.com', '123-456-7890', 'Economy', 300, 'johndoe'),
    (1007, 'CD789012', 'Jane Smith', 'janesmith@example.com', '987-654-3210', 'Business', 620, 'janesmith'),
    (1007, 'EF345678', 'Michael Johnson', 'michaeljohnson@example.com', '456-789-0123', 'Economy', 340, 'michaeljohnson'),
    (1007, 'GH901234', 'Emily Brown', 'emilybrown@example.com', '654-321-0987', 'Business', 660, 'emilybrown'),
    (1007, 'IJ567890', 'David Wilson', 'davidwilson@example.com', '789-012-3456', 'Economy', 380, 'davidwilson'),
    (1007, 'KL123456', 'Sarah Taylor', 'sarahtaylor@example.com', '012-345-6789', 'Business', 700, 'sarahtaylor'),
    (1007, 'MN789012', 'Chris Martinez', 'chrismartinez@example.com', '321-098-7654', 'Economy', 420, 'chrismartinez'),
    (1007, 'OP345678', 'Jessica Lee', 'jessicalee@example.com', '234-567-8901', 'Business', 740, 'jessicalee'),
    (1007, 'QR901234', 'Andrew Clark', 'andrewclark@example.com', '543-210-9876', 'Economy', 460, 'andrewclark'),
    (1007, 'ST567890', 'Olivia Garcia', 'oliviagarcia@example.com', '890-123-4567', 'Business', 780, 'oliviagarcia');


INSERT INTO Booking (Flight_number, passport_number, name, email, phone, ticket_type, payment, username) 
VALUES 
    (1007, 'UV123456', 'Matthew Anderson', 'matthewanderson@example.com', '234-567-8901', 'Economy', 500, 'matthewanderson'),
    (1008, 'WX789012', 'Amanda Wilson', 'amandawilson@example.com', '345-678-9012', 'Business', 820, 'amandawilson'),
    (1008, 'YZ345678', 'James Thompson', 'jamesthompson@example.com', '456-789-0123', 'Economy', 540, 'jamesthompson'),
    (1008, 'AB901234', 'Sophia Rodriguez', 'sophiarodriguez@example.com', '567-890-1234', 'Business', 860, 'sophiarodriguez'),
    (1008, 'CD567890', 'Daniel Garcia', 'danielgarcia@example.com', '678-901-2345', 'Economy', 580, 'danielgarcia'),
    (1016, 'EF123456', 'Isabella Martinez', 'isabellamartinez@example.com', '789-012-3456', 'Business', 900, 'isabellamartinez'),
    (1016, 'GH789012', 'William Brown', 'williambrown@example.com', '890-123-4567', 'Economy', 620, 'williambrown'),
    (1016, 'IJ345678', 'Emma Lee', 'emmalee@example.com', '901-234-5678', 'Business', 940, 'emmalee'),
    (1016, 'KL901234', 'Alexander Taylor', 'alexandertaylor@example.com', '012-345-6789', 'Economy', 660, 'alexandertaylor'),
    (1016, 'MN567890', 'Madison Clark', 'madisonclark@example.com', '123-456-7890', 'Business', 980, 'madisonclark');
INSERT INTO Booking (Flight_number, passport_number, name, email, phone, ticket_type, payment, username) 
VALUES 
    (1130, 'GH789012', 'user', 'user@gmail.com', '890-123-4567', 'Economy', 620, 'user'),
    (1138, 'IJ345678', 'user', 'user@gmail.com', '901-234-5678', 'Business', 940, 'user'),
    (1140, 'KL901234', 'user', 'user@gmail.com', '012-345-6789', 'Economy', 660, 'user'),
    (1124, 'MN567890', 'user', 'user@gmail.com', '123-456-7890', 'Business', 980, 'user');


CREATE TABLE Ticket(
    ID int Primary KEY,
    class varchar(50),
    price int,
    seat_no varchar(50),
    Passenger_name varchar(200),
    Flight_number varchar(50),
    Destination varchar(100),
    Booked_userid int,
    Canceled_userid int,
    FOREIGN KEY(Booked_userid) REFERENCES user(User_ID),
    FOREIGN KEY(Canceled_userid) REFERENCES user(User_ID)
);




CREATE TABLE Airline(
    Airline_ID int Primary key,
    Seat_number varchar(10),
    Name varchar(100)
);


CREATE TABLE Payment(
    Transaction_ID int Primary key,
    User_ID int,
    Flight_number varchar(50),
    Payment_number int,
    Card_number varchar(50),
    Amount decimal,
    Ticket_ID int,
    FOREIGN KEY (Ticket_ID) REFERENCES Ticket(ID)
);




CREATE TABLE Admin(
    ID int Primary key,
    Name varchar(200),
    Email varchar(200),
    Password varchar(128)
);



INSERT into Admin values
(007,'admin','admin@gmail.com','admin'); 





CREATE TABLE feedback(
    Feedback_ID int PRIMARY KEY AUTO_INCREMENT,
    Email varchar(200),
    Rating Decimal(10,2),
    Question_1 varchar(300),
    Question_2 varchar(300),
    Question_3 varchar(300),
    Question_4 varchar(300),
    Question_5 varchar(300)
);





CREATE TABLE user_phone (
    User_ID INT,
    Phone INT,
    PRIMARY KEY (User_ID,Phone),
    FOREIGN KEY (User_ID) REFERENCES user(User_ID)
);




CREATE TABLE Manages(
    Flight_number int,
    Admin_id int,
    PRIMARY KEY(Flight_number,Admin_ID),
    FOREIGN KEY (Flight_number) REFERENCES Flight(Flight_number),
    FOREIGN KEY (Admin_ID) REFERENCES Admin(ID)
);




CREATE TABLE Search_for(
    User_ID int,
    Flight_Number int,
    PRIMARY KEY(User_ID,Flight_number),
    FOREIGN KEY (User_ID) REFERENCES user(User_ID),
    FOREIGN KEY (Flight_number) REFERENCES Flight(Flight_number)

);
