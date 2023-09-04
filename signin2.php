<?php
// Database Config
$servername = "185.241.138.92";
$username = "flipbookuser";
$password = "flipbookuser123";
$dbname = "flipbook";
$data = "";

// Bağlantı Oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
  // $data = $conn->connect_error;
  echo ("Bağlantı kurulamadı: " . $conn->connect_error);
 
  $data = array(
      "fail" => true,
      "message" => "Bağlantı kurulamadı"
  );
}

echo ("Bağlantı kuruldu: ");
print_r($_POST);
// Get POST data from the frontend
$email = $_POST['signin-email'];
$password = $_POST['signin-password'];

echo "Email: $email<br>";
echo "Password: $password<br>";

// Perform SQL query 
$sql = "SELECT * FROM users where email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "email mevcut";
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  
    if($password == $row["password"]){
 
        echo "password matched";
        //   $data = array(
    //     "success" => true,
    //     "message" => "Signin succeed"
    // );
 
    session_start();
    $_SESSION['user_email'] = $email;
    $_SESSION['user_password'] = $password;
	  echo 
        'Şifre Doğru </br>';
         // Getting the 'name' value from the fetched row
      $name = $row['name'];
      echo  "Hoşgeldin $name! </br>";
      // header("location: error.php?code=10");
    }
    // header("location: error.php?code=10");
    // die();
}
}else {
 echo "böyle bir kullanıcı yok";

}

$conn->close();

?>
