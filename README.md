# XLR8 Hub
File Storage and Sharing Website

## Technologies Used"
- Semantic UI
- jQuery
- PHP Core
- MySQL

## Features of this website:
- Account Creation and Management
- Signup and Login
- File Uploads and Downloads
- Private and Public File Systems

## MySQL Queries
To use this website, you'll need to create two tables in MySQL\

CREATE TABLE users\
(\
    user_id int(5) AUTO_INCREMENT PRIMARY KEY,\
    user_firstname varchar(64) NOT NULL,\
    user_lastname varchar(64) NOT NULL,\
    user_phone varchar(15) NOT NULL UNIQUE,\
    user_email varchar(64) NOT NULL UNIQUE,\
    user_pwd varchar(256) NOT NULL,\
    user_gender varchar(1),\
    user_address varchar(256),\
    user_bio varchar(1024)\
);

## Important
This project was developed when I was learning how to develop full-stack applications. I no longer upgrade it and this can be unstable. You are free to use any and all component(s) of this project for personal and/or commercial purposes.
