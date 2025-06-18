

USE petcare_db;

CREATE TABLE appointments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  owner_name VARCHAR(100),
  phone VARCHAR(15),
  email VARCHAR(100),
  address TEXT,
  pet_name VARCHAR(100),
  pet_type VARCHAR(50),
  breed VARCHAR(100),
  age INT,
  gender VARCHAR(10),
  vaccination_status VARCHAR(50),
  medical_conditions TEXT,
  services TEXT,
  other_service VARCHAR(100),
  appointment_date DATE,
  appointment_time TIME,
  additional_notes TEXT,
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);