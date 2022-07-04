CREATE DATABASE IF NOT EXISTS quiz;
CREATE TABLE IF NOT EXISTS accounts(
    ID int auto_increment primary key,
    FirstName varchar(100) not null,
    LastName varchar(100) not null,
    Username varchar(100) not null,
    InputPassword varchar(100) not null,
    Age int not null,
    RetrievalQuestion varchar(100) not null,
    RetrievalAnswer varchar(100) not null,
    HighestScore int not null
);