# wanted_home
CREATE TABLE accommodators (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    contact_number VARCHAR(20) NOT NULL,
    name VARCHAR(255) NOT NULL,
    business_name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL
);

CREATE TABLE students (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  full_name VARCHAR(255) NOT NULL,
  birthday DATE NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
);
