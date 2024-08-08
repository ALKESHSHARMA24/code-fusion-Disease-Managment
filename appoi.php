<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
    background-color: #f0f0f0;
  }

  .doctor-profile {
    width: calc(50% - 10px);
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 20px;
    box-sizing: border-box;
  }

  .doctor-profile:nth-child(1),
  .doctor-profile:nth-child(2) {
    background-color: #f0f0f0;
  }

  .doctor-profile:nth-child(1) button,
  .doctor-profile:nth-child(4) button {
    background-color: gray;
  }

  .doctor-profile:nth-child(2) button,
  .doctor-profile:nth-child(3) button {
    background-color: blue;
  }

  .doctor-profile button {
    display: block;
    margin: 20px auto 0;
    padding: 10px 20px;
    border: none;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .doctor-profile button:hover {
    background-color: #555;
  }
</style>
<title>Doctor Profiles</title>
</head>
<body>
  <div class="doctor-profile">
    <h2>Dr. John Doe</h2>
    <p>Specialization: Cardiologist</p>
    <p>Gender: Male</p>
    <p>About: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <button class="button gray" onclick="showNotAvailable('Dr. John Doe')">Apply for Appointment</button>
  </div>

  <div class="doctor-profile">
    <h2>Dr. Jane Smith</h2>
    <p>Specialization: Dermatologist</p>
    <p>Gender: Female</p>
    <p>About: Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <button class="button blue" onclick="showApproval('Dr. Jane Smith')">Apply for Appointment</button>
  </div>

  <div class="doctor-profile">
    <h2>Dr. Robert Johnson</h2>
    <p>Specialization: Orthopedic Surgeon</p>
    <p>Gender: Male</p>
    <p>About: Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
    <button class="button blue" onclick="showApproval('Dr. Robert Johnson')">Apply for Appointment</button>
  </div>

  <div class="doctor-profile">
    <h2>Dr. Emily Davis</h2>
    <p>Specialization: Pediatrician</p>
    <p>Gender: Female</p>
    <p>About: Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <button class="button gray" onclick="showNotAvailable('Dr. Emily Davis')">Apply for Appointment</button>
  </div>

  <script>
    function showNotAvailable(doctorName) {
      alert(doctorName + " is not available for appointments.");
    }
  
    function showApproval(doctorName) {
      alert("Your appointment with " + doctorName + " has been approved!");
    }
  </script>
</body>
</html>