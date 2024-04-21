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

CREATE TABLE Class (
    Flight_number INT PRIMARY KEY,
    Fare DECIMAL(10, 2),
    Class_type VARCHAR(50)
);



CREATE TABLE Flight(
   Flight_number int PRIMARY KEY,
   Flight_name varchar(200),
   Seat_number int,
   Available_seat int,
   Date date,
   Price int,
   Destination varchar(200),
   Arrival_time time,
   Departure_time time,
   Airline_ID int
);


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

CREATE TABLE Search_For(
    User_ID int,
    Flight_Number int,
    PRIMARY KEY(User_ID,Flight_number),
    FOREIGN KEY (User_ID) REFERENCES user(User_ID),
    FOREIGN KEY (Flight_number) REFERENCES Flight(Flight_number)

);

CREATE TABLE Provides_Feedback(
    User_ID int,
    Feedback_ID int,
    PRIMARY KEY(User_ID,Feedback_ID),
    FOREIGN KEY (User_ID) REFERENCES user(User_ID),
    FOREIGN KEY (Feedback_ID) REFERENCES FAQ(Feedback_ID)
);
