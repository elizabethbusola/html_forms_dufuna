create DATABASE dufuna_signup_quiz3;
USE dufuna_signup_quiz3;
CREATE TABLE users (
id INT NOT NULL AUTO_INCREMENT,
firstname VARCHAR(150) NOT NULL,
lastname VARCHAR(150) NOT NULL,
email VARCHAR(150) NOT NULL,
password VARCHAR(150) NOT NULL,
confirm_password VARCHAR(150) NOT NULL,
phonenumber VARCHAR(150) NOT NULL,
gender VARCHAR(150) NOT NULL,
country VARCHAR(150) NOT NULL,
PRIMARY KEY (id)
);