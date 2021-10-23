<?php
session_start();

$db=mysqli_connect("localhost","root","","php_and_sql") or die(" could not connect");

$username = filter_input(INPUT_POST, 'name');
$password =filter_input(INPUT_POST,"password");
$regno= filter_input(INPUT_POST,"regno");
$mobile=filter_input(INPUT_POST,"mobile");
$email=filter_input(INPUT_POST,"email");
$userpattern="/^[a-zA-Z]+$/i";
$mobilepattern = "/^[0-9]{10}$/i";
$regnopattern = "/^[0-9]{7}$/i";

if(preg_match($userpattern,$username)==0){
    echo "\n Name is not valid";
}
elseif (preg_match($mobilepattern,$mobile)==0) {
    echo "\n Mobile is invalid";
}
elseif (preg_match($regnopattern,$regno)==0) {
    echo "\n Regno is invalid";
}
elseif (preg_match($mobilepattern,$mobile)==0) {
    echo "\n Mobile is invalid";
}

else{
    $query="INSERT INTO user Values('$username','$mobile','$email','$password','$regno')";
    mysqli_query($db,$query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php echo "You have successfully registered"; ?>
</body>
</html>