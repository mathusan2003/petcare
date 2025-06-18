<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petcare_db";

// Create DB connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check DB connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect and sanitize POST data
$owner_name = $_POST['owner_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$pet_name = $_POST['pet_name'];
$pet_type = $_POST['pet_type'];
$breed = $_POST['breed'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$vaccination_status = $_POST['vaccination_status'];
$medical_conditions = $_POST['medical_conditions'];
$services = isset($_POST['service']) ? implode(", ", $_POST['service']) : ''; // ✅ fixed name
$other_service = $_POST['other_service'];
$appointment_date = $_POST['appointment_date'];
$appointment_time = $_POST['appointment_time'];
$additional_notes = $_POST['additional_notes'];
$submitted_at = date("Y-m-d H:i:s");

// Prepare SQL insert
$sql = "INSERT INTO appointments (
    owner_name, phone, email, address, pet_name,
    pet_type, breed, age, gender, vaccination_status,
    medical_conditions, services, other_service,
    appointment_date, appointment_time, additional_notes, submitted_at
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error in preparing statement: " . $conn->error);
}

// Bind parameters
$stmt->bind_param("sssssssssssssssss",
    $owner_name, $phone, $email, $address, $pet_name,
    $pet_type, $breed, $age, $gender, $vaccination_status,
    $medical_conditions, $services, $other_service,
    $appointment_date, $appointment_time, $additional_notes, $submitted_at
);

// Execute statement
if ($stmt->execute()) {
    echo "<h2>✅ Appointment successfully recorded.</h2>";
    echo "<p>Thank you, <strong>" . htmlspecialchars($owner_name) . "</strong>. We’ve scheduled your appointment for <strong>" . $appointment_date . "</strong> at <strong>" . $appointment_time . "</strong>.</p>";
} else {
    echo "<h2>❌ Error:</h2> <p>" . $stmt->error . "</p>";
}

$stmt->close();
$conn->close();
?>
