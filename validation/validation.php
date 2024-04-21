<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php




 setcookie("Email", "yabkal@gmail.com", time()+100, "/", "", 
false); 
// setcookie("Email", "", time()-360, "/", "", true); 
?>
<?php
if(isset($_COOKIE['Email'])){
echo "Welcome ".$_COOKIE['Email'];
}
else{
echo "Sorry...Not recognized"."<br/>";
}
?>
<?php
$name_error = $email_error = $suggestion_error = $gender_error = "";
$name = $email = $suggestion = $gender = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (empty($_POST['username'])) {
$name_error = "Name field is required";
} else {
$name = validateInput($_POST['username']);
}
if (empty($_POST['email'])) {
$email_error = "Email field is required";
} else {
$email = validateInput($_POST['email']);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$email_error = "Invalid email format";
}
}
$suggestion = validateInput($_POST['suggestion']);
if (empty($_POST['gender'])) {
$gender_error = "Gender field is required";
} else {
$gender = validateInput($_POST['gender']);
}
}
function validateInput($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
method="post">
<label for="Name">Fullname<r>*</r></label>
<input type="text" name="username" id="username"><br/>
<span style="color: red;"><?php echo $name_error; ?></span><br/>
<label for="Name">Email<r>*</r></label>
<input type="text" name="email" id="email"><br/>
<span style="color: red;"><?php echo $email_error; ?></span><br/>
<label for="Name">Suggestion<r>*</r></label>
<textarea name="suggestion" id="" cols="40" rows="5"></textarea><br/>
<span style="color: red;"><?php echo $suggestion_error; 
?></span><br/>
<label for="Name">Gender<r>*</r></label>
<input type="radio" name="gender" id="gender" value="female">Female:
<input type="radio" name="gender" id="gender" value="male">Male:<br/>
<span style="color: red;"><?php echo $gender_error; ?></span><br/>
<input type="submit" value="Add Suggestion">
</form>
</body>
</html