<?php
$servername = "localhost"; // Change if needed
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "blood_donation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $nid = $_POST['nid'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $blood_type = $_POST['blood_type'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $donated_before = $_POST['donated_before'];
    $allergy_details = $_POST['allergy_details'];
    $disease_history = $_POST['disease_history'];
    $anemia = $_POST['anemia'];
    $cardiac = $_POST['cardiac'];
    $medication = $_POST['medication'];
    $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO donors 
            (name, nid, dob, email, gender, contact, address, blood_type, height, weight, donated_before, allergy_details, disease_history, anemia, cardiac, medication, password_hash) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssssssss", $name, $nid, $dob, $email, $gender, $contact, $address, $blood_type, $height, $weight, $donated_before, $allergy_details, $disease_history, $anemia, $cardiac, $medication, $password_hash);

    
   if ($stmt->execute()) {
        // Redirect to the good news page after successful submission
        header("Location: goodNewsPage.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
