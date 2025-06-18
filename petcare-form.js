function validateForm() {
  const requiredFields = [
    "owner_name", "phone", "email", "address", "pet_name",
    "pet_type", "age", "gender", "vaccination_status", "appointment_date", "appointment_time"
  ];

  for (let id of requiredFields) {
    const field = document.getElementById(id);
    if (!field.value.trim()) {
      alert("Please fill in the required field: " + field.previousElementSibling.innerText);
      field.focus();
      return false;
    }
  }

  const phone = document.getElementById("phone").value;
  if (!/^[0-9]{10,15}$/.test(phone)) {
    alert("Please enter a valid phone number.");
    document.getElementById("phone").focus();
    return false;
  }

  const email = document.getElementById("email").value;
  if (!/^[\w-.]+@([\w-]+\.)+[\w-]{2,4}$/.test(email)) {
    alert("Please enter a valid email address.");
    document.getElementById("email").focus();
    return false;
  }

  const services = document.querySelectorAll('input[name="service[]"]:checked');
  if (services.length === 0 && !document.getElementById("other_service").value.trim()) {
    alert("Please select at least one service or provide an 'Other Service'.");
    return false;
  }

  return true;
}
