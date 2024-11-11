-- Database name  `pets`

CREATE DATABASE pets;

USE pets;

-- Create the `roles` table

CREATE TABLE roles (
    role_id INT AUTO_INCREMENT PRIMARY KEY,
    role VARCHAR(255) NOT NULL UNIQUE,
    status VARCHAR(255) NOT NULL DEFAULT 'active',
);

INSERT INTO roles (role) VALUES
('admin'),
('user');

-- Create the `users` table

CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL UNIQUE,
    address VARCHAR(255) NOT NULL,
    gender VARCHAR(15) NOT NULL,
    dob DATE NOT NULL,
    role_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    status VARCHAR(255) NOT NULL DEFAULT 'active',
    FOREIGN KEY (role_id) REFERENCES roles(role_id)
);


-- Insert admin in users 

INSERT INTO users (username, email, password, phone, address, gender, dob, role_id) VALUES
('Safalya Kumbhare','safalyakumbhare@gmail.com','123456','9874563215','Trimurti Nagar, Nagpur','male','1999-10-02',1);


-- create pets table 

    CREATE TABLE pets (
        pet_id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        type VARCHAR(255) NOT NULL,
        breed VARCHAR(255) NOT NULL,
        dob DATE NOT NULL,
        gender VARCHAR(15) NOT NULL,
        color VARCHAR(255) NOT NULL,
        weight VARCHAR(10) NOT NULL,
        image VARCHAR(100) NOT NULL,
        medical TEXT NOT NULL,
        note TEXT,
        user_id INT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        status VARCHAR(255) NOT NULL DEFAULT 'active',
        FOREIGN KEY (user_id) REFERENCES users(id)
    );

    CREATE TABLE doctor (
        doctor_id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        phone VARCHAR(10) NOT NULL UNIQUE,
        dob VARCHAR(10) NOT NULL,
        address VARCHAR(255) NOT NULL,
        gender NOT NULL,
        password VARCHAR(255) NOT NULL,
        profile TEXT,
        license_no VARCHAR(10) NOT NULL,
        specilization TEXT,
        experience TEXT,
        certification TEXT,
        role_id INT DEFAULT 3,
        FOREIGN KEY (role_id) REFERENCES roles(role_id),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        status VARCHAR(10) DEFAULT 'Inactive',
        approval VARCHAR(10) DEFAULT 'Pending', 
    );

    CREATE TABLE appointment (
        appointment_id INT PRIMARY KEY AUTO_INCREMENT,
        user_id INT,
        doctor_id INT,
        pet_id INT,
        appointment_date DATE NOT NULL,
        appointment_time TIME NOT NULL,
        status VARCHAR(255) NOT NULL DEFAULT 'active',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(user_id),
        FOREIGN KEY (doctor_id) REFERENCES doctor(doctor_id),
        FOREIGN KEY (pet_id) REFERENCES pets(pet_id)
    );

    CREATE TABLE clinic (
        clinic_id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        address VARCHAR(255) NOT NULL,
        phone VARCHAR(10) NOT NULL UNIQUE,
        doctor_id INT NOT NULL,
        FOREIGN KEY (doctor_id) REFERENCES doctor(doctor_id),
        open_time TIME NOT NULL,
        close_time TIME NOT NULL,
        open_days VARCHAR(100) NOT NULL,
        close_days VARCHAR(100) NOT NULL,
        fees TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        status VARCHAR(10) NOT NULL DEFAULT 'Inactive',
        approval VARCHAR(10) DEFAULT 'Pending',
    );

        CREATE TABLE appointment(
            appointment_id INT PRIMARY KEY AUTO_INCREMENT,
            appointment_date DATE NOT NULL,
            appointment_time TIME NOT NULL,
            appointment_description TEXT NOT NULL,
            doctor_id INT,
            user_id INT,
            clinic_id INT,
            FOREIGN KEY (user_id) REFERENCES users (user_id)
            FOREIGN KEY (doctor_id) REFERENCES doctor (doctor_id),
            FOREIGN KEY (clinic_id) REFERENCES clinic (clinic_id),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            status VARCHAR(255) NOT NULL DEFAULT 'active',
        );