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
(1001,'user','user@gmail.com','user','user','mirpur','05-11-2001',1234);




CREATE TABLE Class (
    Flight_number INT PRIMARY KEY,
    Fare DECIMAL(10, 2),
    Class_type VARCHAR(50)
);



CREATE TABLE Flight(
   Flight_number INT PRIMARY KEY,
   Flight_name VARCHAR(200),
   Available_seat INT,
   Date DATE,
   Price INT,
   Destination VARCHAR(200),
   Arrival_time TIME,
   Departure_time TIME,
   Airline_ID INT
);



CREATE TABLE Booking(
    user_id int,
    Flight_number VARCHAR(200) 

);

DELIMITER $$

CREATE TRIGGER decrement_seat_after_booking
AFTER INSERT ON Booking
FOR EACH ROW
BEGIN
    UPDATE Flight
    SET Available_seat = Available_seat - 1
    WHERE Flight_number = NEW.Flight_number;
END$$

DELIMITER ;




INSERT INTO Flight (Flight_number, Flight_name, Available_seat, Date, Price, Destination, Arrival_time, Departure_time, Airline_ID)
VALUES
    (1001, 'Flight 1', 150, '2024-04-23', 500, 'New York', '08:00:00', '10:00:00', NULL),
    (1002, 'Flight 2', 200, '2024-04-24', 600, 'London', '09:00:00', '11:00:00', NULL),
    (1003, 'Flight 3', 180, '2024-04-25', 550, 'Tokyo', '10:00:00', '12:00:00', NULL),
    (1004, 'Flight 4', 220, '2024-04-26', 700, 'Paris', '11:00:00', '13:00:00', NULL),
    (1005, 'Flight 5', 190, '2024-04-27', 650, 'Dubai', '12:00:00', '14:00:00', NULL),
    (1006, 'Flight 6', 170, '2024-04-28', 600, 'Los Angeles', '13:00:00', '15:00:00', NULL),
    (1007, 'Flight 7', 210, '2024-04-29', 750, 'Sydney', '14:00:00', '16:00:00', NULL),
    (1008, 'Flight 8', 160, '2024-04-30', 700, 'Rome', '15:00:00', '17:00:00', NULL),
    (1009, 'Flight 9', 230, '2024-05-01', 800, 'Singapore', '16:00:00', '18:00:00', NULL),
    (1010, 'Flight 10', 200, '2024-05-02', 750, 'Istanbul', '17:00:00', '19:00:00', NULL),
    (1011, 'Flight 11', 175, '2024-05-03', 520, 'Berlin', '08:30:00', '10:30:00', NULL),
    (1012, 'Flight 12', 195, '2024-05-04', 620, 'Madrid', '09:30:00', '11:30:00', NULL),
    (1013, 'Flight 13', 185, '2024-05-05', 570, 'Moscow', '10:30:00', '12:30:00', NULL),
    (1014, 'Flight 14', 225, '2024-05-06', 720, 'Beijing', '11:30:00', '13:30:00', NULL),
    (1015, 'Flight 15', 205, '2024-05-07', 670, 'Seoul', '12:30:00', '14:30:00', NULL),
    (1016, 'Flight 16', 215, '2024-05-08', 770, 'Bangkok', '13:30:00', '15:30:00', NULL),
    (1017, 'Flight 17', 165, '2024-05-09', 720, 'Sydney', '14:30:00', '16:30:00', NULL),
    (1018, 'Flight 18', 240, '2024-05-10', 820, 'Amsterdam', '15:30:00', '17:30:00', NULL),
    (1019, 'Flight 19', 210, '2024-05-11', 770, 'Hong Kong', '16:30:00', '18:30:00', NULL),
    (1020, 'Flight 20', 195, '2024-05-12', 720, 'Dublin', '17:30:00', '19:30:00', NULL);






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





CREATE TABLE FAQ(
    Feedback_ID int PRIMARY KEY,
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



CREATE TABLE Provides_feedback(
    User_ID int,
    Feedback_ID int,
    PRIMARY KEY(User_ID,Feedback_ID),
    FOREIGN KEY (User_ID) REFERENCES user(User_ID),
    FOREIGN KEY (Feedback_ID) REFERENCES FAQ(Feedback_ID)
);
