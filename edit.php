<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Colleague</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  
  <div class="row">
          <div class="col-md-6">
            <h2>Edit Colleague</h2>
          </div>
          <div class="col-md-6 text-right">
            <img src="logo.png" alt="Logo" class="logo">
          </div>        
      </div>
    <hr>
    <div class="container" style="border: 2px solid rgb(214, 214, 214); padding: 3px;">
      <div class="container"  style="background-color:#e6e9eb;">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="#tab1">Personal</a>
          </li>
        </ul>
      </div>       
    
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eden";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    if (!$conn) {
      die("Connection failed: " . $conn->errorInfo());
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
      $id = $_GET['id'];

      // Fetch user data
      $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
      $stmt->bindParam(1, $id);

      if ($stmt->execute()) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
          // Display form to edit user data
          echo "<form action='update.php' method='post'>";
          echo "<input type='hidden' name='id' value='".$user['id']."'>";

          // Display all the fields
          echo "<div class='form-group'>";
          echo "<label for='title'>Title:</label>";
          echo "<select class='form-control' name='title' id='title' value=''>".$user['title']." required>";         
          echo "<option value='mr'>Mr</option>";
          echo "<option value='miss'>Miss</option>";
          echo "</select>";
          echo "</div>";

          echo "<div class='form-group'>";
          echo "<label for='firstname'>First Name:</label>";
          echo "<input type='text' class='form-control' name='firstname' value='".$user['firstname']."' required>";
          echo "</div>";

          echo "<div class='form-group'>";
          echo "<label for='surname'>Surname:</label>";
          echo "<input type='text' class='form-control' name='surname' value='".$user['surname']."' required>";
          echo "</div>";

          echo "<div class='form-group'>";
          echo "<label for='informal_name'>Informal Name:</label>";
          echo "<input type='text' class='form-control' name='informal_name' value='".$user['informal_name']."'>";
          echo "</div>";

          echo "<div class='form-group'>";
          echo "<label for='address'>Address:</label>";
          echo "<input type='text' class='form-control' name='address' value='".$user['address']."' required>";
          echo "</div>";

          echo "<div class='form-group'>";
          echo "<label for='town'>Town:</label>";
          echo "<input type='text' class='form-control' name='town' value='".$user['town']."'>";
          echo "</div>";

          echo "<div class='form-group'>";
          echo "<label for='postcode'>Postcode:</label>";
          echo "<input type='text' class='form-control' name='postcode' value='".$user['postcode']."' required>";
          echo "</div>";

          echo "<div class='form-group'>";
          echo "<label for='ni_number'>NI Number:</label>";
          echo "<input type='text' class='form-control' name='ni_number' value='".$user['ni_number']."'>";
          echo "</div>";

          echo "<div class='form-group'>";
          echo "<label for='dob'>Date of Birth:</label>";
          echo "<input type='text' class='form-control' name='dob' value='".$user['dob']."'>";
          echo "</div>";

          echo "<div class='form-group'>";
          echo "<label for='mobile_tel'>Mobile tel:</label>";
          echo "<input type='text' class='form-control' name='mobile_tel' value='".$user['mobile_tel']."'>";
          echo "</div>";

          echo "<div class='form-group'>";
          echo "<label for='home_tel'>Home tel:</label>";
          echo "<input type='text' class='form-control' name='home_tel' value='".$user['home_tel']."'>";
          echo "</div>";

          echo "<div class='form-group'>";
          echo "<label for='other_tel'>Other tel:</label>";
          echo "<input type='text' class='form-control' name='other_tel' value='".$user['other_tel']."'>";
          echo "</div>";

          echo "<div class='form-group'>";
          echo "<label for='email'>Personal Email:</label>";
          echo "<input type='text' class='form-control' name='email' value='".$user['email']."'>";
          echo "</div>";

          echo "<div class='form-group'>";
          echo "<label for='gender'>Gender:</label>";
          echo "<select class='form-control' name='gender' id='gender' value=''>".$user['gender']." required>";
          echo "<option value='mr'>Male</option>";
          echo "<option value='female'>Female</option>";
          echo "<option value='other'>Other</option>";
          echo "</select>";
          echo "</div>";

          echo "<div class='form-group'>";
          echo "<label for='initials'>Initials:</label>";
          echo "<input type='text' class='form-control' name='initials' value='".$user['initials']."'>";
          echo "</div>";

          echo "<div class='form-group'>";
          echo "<label for='emergency_name'>Emergency Name:</label>";
          echo "<input type='text' class='form-control' name='emergency_name' value='".$user['emergency_name']."'>";
          echo "</div>";

          echo "<button type='submit' class='btn btn-primary'>Update</button>";
          echo "</form>";
        } else {
          echo "User not found.";
        }
      } else {
        echo "Error fetching user data.";
      }
    }
    ?>
  </div>
  </div>
  <!-- Bootstrap Modal for Success Message -->
  <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Success</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        Colleague data updated successfully.
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('form').submit(function(e) {
        e.preventDefault(); // Prevent form submission
        var form = $(this);

        // Perform AJAX request
        $.ajax({
          url: form.attr('action'),
          method: form.attr('method'),
          data: form.serialize(),
          success: function(response) {
            $('#successModal').modal('show'); // Show success modal
          },
          error: function() {
            alert('An error occurred. Please try again.'); // Show error message
          }
        });
      });
    });
  </script>
</body>
</html>