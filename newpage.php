<?php

if(isset($_GET["success"])){
    echo $_GET["success"];
}else if(isset($_GET["pswfail"])){
    echo $_GET["pswfail"];
}else if(isset($_GET["pswsymbolfail"])){
    echo $_GET["pswsymbolfail"];
}

echo "<br>";
echo "<br>";

echo "Go back to <a href='signup.php'>Sign-up Page</a>";
?>