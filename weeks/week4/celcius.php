<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Document</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Our Celcius Form Converter</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']    ;?>" method="post">
    <fieldset>
        <legend>Our Celcius Form</legend>
        <label>Enter your Celcius Value</label>
        <input type="number" name="cel">
        <input type="submit" value="Convert it">
       
</fieldset>
<p><a href="">RESET!</a></p>
</form>
<?php
if(isset($_POST['cel'])){
    $cel = $_POST['cel'];
//we will use a new function to make sure that our values are intergers intval()
$cel_int = intval($cel);
$far = ($cel_int * 9/5) + 32;
//if the end user does not enter a value, say something

if($cel == NULL){
    echo '<p class="error">Please fill out the Celcius Value!</p>';
} elseif ($far <= 32){
echo '<P> '.$cel_int.' degrees equals  '.$far.' degrees fahrenheit <br>
and it is pretty cold out there! </p>';
}elseif ($far <= 45){
    echo '<P>'.$cel_int.' degrees equals  '.$far.' degrees fahrenheit <br>
    and it is getting warmer! </p>';
}elseif ($far <= 60){
    echo '<P>'.$cel_int.' degrees equals  '.$far.' degrees fahrenheit <br>
    and it is sweater weather! </p>';
}elseif ($far <= 75){
    echo '<P>'.$cel_int.' degrees equals  '.$far.' degrees fahrenheit <br>
    and we\'re going to the park! </p>';
}elseif ($far <= 90){
    echo '<P>'.$cel_int.' degrees equals  '.$far.' degrees fahrenheit <br>
    and we maybe going to the beach! </p>';
}else {
    echo '<p> '.$cel_int.' degrees celcius equals  '.$far.' degrees fahrenheit <br> 
    and we are at the beach! </p>';
}


}


?>
    
</body>
</html>