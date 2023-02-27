<?php
ob_start();
$first_name = '';
$gender = '';
$wines = '';
$regions = '';
$last_name = '';
$email = '';
$phone = '';
$comments = '';
$privacy = '';
$first_name_err = '';
$gender_err = '';
$wines_err = '';
$regions_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$comments_err = '';
$privacy_err = '';



if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(empty($_POST['first_name'])){
    $first_name_err = 'Please fill out your first name';
} else {
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])){
    $last_name_err = 'Please fill out your last name';
} else {
    $last_name = $_POST['last_name'];
}

if(empty($_POST['email'])){
    $email_err = 'Please fill out your email';
} else {
    $email = $_POST['email'];
}

if(empty($_POST['gender'])){
    $gender_err = 'Please choose your gender';
} else {
    $gender = $_POST['gender'];
}

//if(empty($_POST['phone'])){
//$gender_err = 'Please choose your phone number';
//} else {
// $gender = $_POST['phone'];
//}

if(empty($_POST['phone'])) { // if empty, type in your number
    $phone_err = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $phone_err = 'Invalid format!';
    } else{
    $phone = $_POST['phone'];
    } // end else
    } // end main if

if(empty($_POST['wines'])){
    $wines_err = 'What, no wines?';
} else {
    $wines = $_POST['wines'];
}

if(empty($_POST['comments'])){
    $comments_err = 'Please share your thoughts with us';
} else {
    $comments = $_POST['comments'];
}

if(empty($_POST['privacy'])){
    $privacy_err = 'Please agree to our privacy policy';
} else {
    $privacy = $_POST['privacy'];
}

if($_POST['regions'] == NULL){
    $regions_err = 'Please select your region!';
} else {
    $regions = $_POST['regions'];
}

function my_wines($wines){
$my_return = '';

if(!empty($_POST['wines'])){
$my_return = implode(',', $_POST['wines']);

} else {
    $wines_err = 'Please fill out your wines!';
}

return $my_return;



} //end function
if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['phone'],
$_POST['gender'],
$_POST['wines'],
$_POST['regions'],
$_POST['comments'],
$_POST['privacy'])){
    $to = 'xuanmai932904@gmail.com';
    $subject = 'Test Email on' .date('m/d/y, h i A');
    $body = '
    First Name : '.$first_name.' '.PHP_EOL.'
    Last Name : '.$last_name.' '.PHP_EOL.'
    Email : '.$email.' '.PHP_EOL.'
    Gender : '.$gender.' '.PHP_EOL.'
    Phone : '.$phone.' '.PHP_EOL.'
    Regions : '.$regions.' '.PHP_EOL.'
    Wines: '.my_wines($wines).' '.PHP_EOL.'
    Comments: '.$comments.' '.PHP_EOL.'
    ';

    $headers = array(
'From' => 'noreply@mystudentswa.com');

    if(!empty($first_name &&
     $last_name  && 
     $email && 
     $gender && 
     $phone && 
     $regions && 
     $wines && 
     $comments) && 
     preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {

    
mail($to, $subject, $body, $headers);
header('Location:thx.php');

    }
} //end isset

} //end server request method
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3 in Week 7 - Phone Validation!</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])   ;?>" method="post">
    <fieldset>
        <legend>Contact Mai</legend>
 <label>First Name</label>
 <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])   ;?>">
 <span class="error"><?php echo $first_name_err ;?></span>
 <label>Last name</label>
 <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])   ;?>">
 <span class="error"><?php echo $last_name_err ;?></span>
 <label>Email</label>
 <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])   ;?>">
 <span class="error"><?php echo $email_err ;?></span>
<label>Gender</label>
<ul>
    <!-- will come back to gender once we will be adding the sticky part of the form-->
<li>
<input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked = "checked" '  ;?>>Female
</li>
<li>
<input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked = "checked" '  ;?>>Male
</li>
<li>
<input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked = "checked" '  ;?>>Neither
</li>
</ul>
<span class="error"><?php echo $gender_err ;?></span>
<label>Phone</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone'])   ;?>">
<span class="error"><?php echo $phone_err ;?></span>
<label>Favorite Wines</label>
<ul>
    <!-- we will return to the wine portion to add additional wines when we are adding the sticky part of our form-->
<li>
<input type="checkbox" name="wines[]" value="cab" <?php if(isset($_POST['wines']) && in_array('cab', $wines))  echo 'checked = "checked"' ;?>>Cabernet
</li>
<li>
<input type="checkbox" name="wines[]" value="merlot" <?php if(isset($_POST['wines']) && in_array('merlot', $wines)) echo 'checked = "checked"'  ;?>>Merlot
</li>
<li>
<input type="checkbox" name="wines[]" value="syrah" <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) echo 'checked = "checked"'  ;?>>Syrah
</li>
<li>
<input type="checkbox" name="wines[]" value="red" <?php if(isset($_POST['wines']) && in_array('red', $wines)) echo 'checked = "checked"'  ;?>>Red Blend
</li>
<li>
<input type="checkbox" name="wines[]" value="malbec" <?php if(isset($_POST['wines']) && in_array('malbec', $wines)) echo 'checked = "checked"'  ;?>>Malbec
</li>
</ul>
<span class="error"><?php echo $wines_err ;?></span>
<label>Regions</label>
<select name="regions">
    <!-- we will return to options to add addional option when we make our form sticky!-->
    <option value="" NULL <?php if(isset($_POST['regions']) && $_POST['regions'] == NULL) echo ' selected = "unselected"'  ;?>>Select One!</option>
    <option value="nw"  <?php if(isset($_POST['regions']) && $_POST['regions'] == 'nw') echo ' selected = "selected"'  ;?>>Northwest</option>
    <option value="sw"  <?php if(isset($_POST['regions']) && $_POST['regions'] == 'sw') echo ' selected = "selected"'  ;?>>Southwest</option>
    <option value="mw"  <?php if(isset($_POST['regions']) && $_POST['regions'] == 'mw') echo ' selected = "selected"'  ;?>>Midwest</option>
    <option value="ec"  <?php if(isset($_POST['regions']) && $_POST['regions'] == 'ec') echo ' selected = "selected"'  ;?>>Eastcoast</option>
    <option value="ne"  <?php if(isset($_POST['regions']) && $_POST['regions'] == 'ne') echo ' selected = "selected"'  ;?>>Northeast</option>
</select>
<span class="error"><?php echo $regions_err ;?></span>
<label>Comments</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments'])    ;?></textarea>
<span class="error"><?php echo $comments_err ;?></span>
<label>Privacy</label>
<ul>
    <!-- will come back to gender once we will be adding the sticky part of the form-->
<li>
<input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'privacy') echo 'checked = "checked" '  ;?>>Privacy
</li>
</ul>
<span class="error"><?php echo $privacy_err ;?></span>
<input type="submit" value="Send it!">
<input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'];    ?>'" value="Reset">
</fieldset>
</form>

</body>
</html>