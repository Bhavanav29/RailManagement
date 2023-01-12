create database if not exists hosp;
use hosp;
create table if not exists user (email varchar(100) primary key, name varchar(100) not null, type varchar(100), age int, pass varchar(100), phno bigint, address varchar(100));
insert into user values("abc@gmail.com","abc","admin",10,"abc@gmail.com",9876543210,"sdjfbv jkasdjhbf jasbdjh fjhasdb");

