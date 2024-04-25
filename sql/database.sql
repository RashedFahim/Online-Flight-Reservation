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

CREATE TABLE Booking(
    Flight_number int, 
    passport_number varchar(100) PRIMARY KEY,
    name varchar(200),
    email varchar(200),
    phone varchar(20),
    ticket_type varchar(50),
    payment int,
    username varchar(100),
    FOREIGN KEY (Flight_number) REFERENCES Flight(Flight_number)
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