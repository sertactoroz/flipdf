<?php
// Database Config
header('Access-Control-Allow-Origin: http://localhost', true);
$servername = "185.241.138.92";
$username = "flipbookuser";
$password = "flipbookuser123";
$dbname = "flipbook";
$data = "";



//Bağlantı Oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    // $data = $conn->connect_error;
    // echo ("Bağlantı kurulamadı: " . $conn->connect_error);
    $data = array(
        "success" => false,
        "message" => "Bağlantı kurulamadı"
    );
}
// Get POST data from the frontend
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];

// Check Password Complexity 
$number = preg_match('@[0-9]@', $password);
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);


if (strlen($password) < 8 || !$number || !$uppercase || !$lowercase ) {
    //  echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
    $data = array(
        "success" => false,
        "message" => "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character."
    );
} else {
    //  echo "Your password is strong </br>";

    // Perform SQL query to check if the email already exists
    $checkEmailQuery = "SELECT * FROM users WHERE email='$email'";
    $checkEmailResult = $conn->query($checkEmailQuery);

    if ($checkEmailResult->num_rows > 0) {
        $data = array(
            "success" => false,
            "message" => "email kullanımda"
        );
    } else {
        // Perform SQL query to insert data into the database for registration
        $insertQuery = "INSERT INTO users (email, password, name,surname) VALUES ('$email', '$password', '$name', '$surname')";
        if ($conn->query($insertQuery) === TRUE) {
            $data = array(
                "success" => true,
                "message" => "Sign up succeed"
            );
            
            session_start();
            $_SESSION['user_name'] = $name;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_id'] = $row['userid'];

          
        } else {
            $data = array(
                "success" => false,
                "message" => "Error: " . $insertQuery . "<br>" . $conn->error
            );
        }
    }
}

$conn->close();

// Send a JSON response back to the frontend
// $response = array("message" => $data);
// echo json_encode($response);

echo json_encode($data);

?>