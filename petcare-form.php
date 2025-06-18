<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pet Care Appointment Form</title>
  <link rel="stylesheet" href="petcare-form.css">
  <script src="petcare-form.js" defer></script>
</head>
<body>

  <div class="form-container">
    <h2>Pet Care Appointment Form</h2>
    
    <form id="petForm" action="submit.php" method="POST" onsubmit="return validateForm();">
      <!-- Owner Information -->
      <fieldset>
        <legend>Owner Information</legend>
        <label for="owner_name">Owner Name:</label>
        <input type="text" id="owner_name" name="owner_name" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}">

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="2" required></textarea>
      </fieldset>

      <!-- Pet Details -->
      <fieldset>
        <legend>Pet Details</legend>
        <label for="pet_name">Pet Name:</label>
        <input type="text" id="pet_name" name="pet_name" required>

        <label for="pet_type">Pet Type:</label>
        <select id="pet_type" name="pet_type" required>
          <option value="">Select Type</option>
          <option value="Dog">Dog</option>
          <option value="Cat">Cat</option>
          <option value="Bird">Bird</option>
          <option value="Other">Other</option>
        </select>

        <label for="breed">Breed:</label>
        <input type="text" id="breed" name="breed">

        <label for="age">Age (in years):</label>
        <input type="number" id="age" name="age" min="0" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
          <option value="">Select</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>

        <label for="vaccination_status">Vaccination Status:</label>
        <select id="vaccination_status" name="vaccination_status" required>
          <option value="">Select</option>
          <option value="Up to date">Up to date</option>
          <option value="Not up to date">Not up to date</option>
        </select>

        <label for="medical_conditions">Medical Conditions:</label>
        <textarea id="medical_conditions" name="medical_conditions" rows="2"></textarea>
      </fieldset>

      <!-- Service Request -->
      <fieldset>
        <legend>Service Request</legend>
        <label><input type="checkbox" name="service[]" value="General Checkup"> General Checkup</label>
        <label><input type="checkbox" name="service[]" value="Vaccination"> Vaccination</label>
        <label><input type="checkbox" name="service[]" value="Grooming"> Grooming</label>
        <label><input type="checkbox" name="service[]" value="Emergency"> Emergency</label>

        <label for="other_service">Other Services:</label>
        <input type="text" id="other_service" name="other_service">
      </fieldset>

      <!-- Appointment Schedule -->
      <fieldset>
        <legend>Appointment Schedule</legend>
        <label for="appointment_date">Date:</label>
        <input type="date" id="appointment_date" name="appointment_date" required>

        <label for="appointment_time">Time:</label>
        <input type="time" id="appointment_time" name="appointment_time" required>
      </fieldset>

      <!-- Additional Notes -->
      <label for="additional_notes">Additional Notes:</label>
      <textarea id="additional_notes" name="additional_notes" rows="2"></textarea>

      <!-- Buttons -->
      <div class="form-actions">
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
      </div>
    </form>
  </div>

</body>
</html>
