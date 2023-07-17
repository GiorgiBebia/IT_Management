<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
</body>
</html>

<?php



$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=test_database", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


$email = $_POST["email"];

if(strlen($_POST["psw"]) >= 8 && $_POST["psw"] == $_POST["psw-repeat"]){
    $sql = "INSERT INTO users (email)
    VALUES ('$email')";
    $conn->exec($sql);
    return header("Location: newpage.php?success= თქვენ წარმატებით გაიარეთ რეგისტრაცია!");
}else if($_POST["psw"] != $_POST["psw-repeat"]){
    return header("Location: newpage.php?pswfail= პაროლები არ ემთხვევა ერთმანეთს!");
}else if($_POST["psw"] == $_POST["psw-repeat"] && strlen($_POST["psw"]) < 8){
    return header("Location: newpage.php?pswsymbolfail= პაროლში სიმბოლოების რაოდენობა 8-ზე ნაკლებია!");
}

// $conn->exec($sql);

?>