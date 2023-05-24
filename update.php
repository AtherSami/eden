<?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eden";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Check if the connection was successful
if (!$conn) {
  die("Connection failed: " . $conn->errorInfo());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $id = $_POST["id"];
  $title = $_POST["title"];
  $fname = $_POST["firstname"];
  $sname = $_POST["surname"];
  $iname = $_POST["informal_name"];
  $address = $_POST["address"];
  $town = $_POST["town"];
  $postcode = $_POST["postcode"];
  $ninumber = $_POST["ni_number"];
  $dob = $_POST["dob"];
  $mobile = $_POST["mobile_tel"];
  $home = $_POST["home_tel"];
  $other_tel = $_POST["other_tel"];
  $email = $_POST["email"];
  $gender = $_POST["gender"];
  $initials = $_POST["initials"];
  $emergency_name = $_POST["emergency_name"];



  $stmt = $conn->prepare("UPDATE users SET title = ?, firstname = ?, surname = ?, informal_name = ?, address = ?, town = ?, postcode = ?, ni_number = ?, dob = ?, mobile_tel = ?, home_tel = ?, other_tel = ?, email = ?, gender = ?, initials = ?, emergency_name = ? WHERE id = ?");
  $stmt->bindParam(1, $title);
  $stmt->bindParam(2, $fname);
  $stmt->bindParam(3, $sname);
  $stmt->bindParam(4, $iname);
  $stmt->bindParam(5, $address);
  $stmt->bindParam(6, $town);
  $stmt->bindParam(7, $postcode);
  $stmt->bindParam(8, $ninumber);
  $stmt->bindParam(9, $dob);
  $stmt->bindParam(10, $mobile);
  $stmt->bindParam(11, $home);
  $stmt->bindParam(12, $other_tel);
  $stmt->bindParam(13, $email);
  $stmt->bindParam(14, $gender);
  $stmt->bindParam(15, $initials);
  $stmt->bindParam(16, $emergency_name);
  $stmt->bindParam(17, $id);


  if ($stmt->execute()) {
      echo "Data updated successfully!";
  } else {
    echo "Error updating data.";
  }
}
?>
