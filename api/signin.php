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
  //echo ("Bağlantı kurulamadı: " . $conn->connect_error);
 
  $data = array(
      "success" => false,
      "message" => "Bağlantı kurulamadı"
  );
}

//echo ("Bağlantı kuruldu: ");
//print_r($_POST);
// Get POST data from the frontend
$email = $_POST['email'];
$password = $_POST['password'];

//echo "Email: $email<br>";
//echo "Password: $password<br>";

// Perform SQL query 
$sql = "SELECT * FROM users where email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    //echo "email mevcut";
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  
    if($password == $row["password"]){
 
        //echo "password matched";
        //   $data = array(
    //     "success" => true,
    //     "message" => "Signin succeed"
    // );
 
    session_start();
    
    $name = $row['name'];
    $email = $row['email'];
    $userid = $row['userid'];

    $_SESSION['user_name'] = $name;
    $_SESSION['user_email'] = $email;
    $_SESSION['user_id'] = $userid;
    
	  //echo 'Şifre Doğru </br>';
         // Getting the 'name' value from the fetched row
    //  echo  "Hoşgeldin $name! </br>";
      // header("location: error.php?code=10");
      $data = array(
        "success" => true,
        "message" =>  "Hoşgeldin $name! </br>"
    );

    }else{

      $data = array(
        "success" => false,
        "message" => "Kullanıcı adı ya da şifre hatalı"
    );
    
    }
    // header("location: error.php?code=10");
    // die();
}
}else {
  $data = array(
    "success" => false,
    "message" => "Kullanıcı adı ya da şifre hatalı"
);
}

$conn->close();

echo json_encode($data);

?>
