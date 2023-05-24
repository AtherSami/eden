<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eden";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
if (!$conn) {
  die("Connection failed: " . $conn->errorInfo());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

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

  $stmt = $conn->prepare("INSERT INTO users (title, firstname, surname, informal_name, address, town, postcode, ni_number, dob, mobile_tel, home_tel, other_tel, email, gender, initials, emergency_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

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

  if ($stmt->execute()) {
    // echo "Form submitted successfully";
  } else {
    echo "Error storing data in the database.";
  }
}

// Fetch and display data
$stmt = $conn->query("SELECT * FROM users ");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
if ($users) {
  echo"<br>";
  echo "<h2 class='text-center'>Modify Details</h2>";
  echo"<br>";
  echo"<div class='container'>";
  echo "<table class='table table-hover table-bordered'>";
  echo "<thead class='thead-dark'><tr><th>First Name</th><th>Surname</th><th>Action</th></tr></thead>";
  echo "<tbody class='tbody-light'>";
  foreach ($users as $user) {
    echo "<tr>";
    echo "<td>".$user['firstname']."</td>";
    echo "<td>".$user['surname']."</td>";
    echo "<td><a href='edit.php?id=".$user['id']."' class='btn btn-primary'>Edit</a></td>";
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
  echo"</div>";
} else {
  echo "<p class='alert alert-info'>No users found.</p>";
}
?>
