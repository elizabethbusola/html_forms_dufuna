create DATABASE signup_quiz3;
USE signup_quiz3;
CREATE TABLE form (
id INT NOT NULL AUTO_INCREMENT,
firstname VARCHAR(150) NOT NULL,
lastname VARCHAR(150) NOT NULL,
email VARCHAR(150) NOT NULL,
pwd VARCHAR(150) NOT NULL,
confirm_pwd VARCHAR(150) NOT NULL,
phonenumber VARCHAR(150) NOT NULL,
gender VARCHAR(150) NOT NULL,
country VARCHAR(150) NOT NULL,
PRIMARY KEY (id)
);