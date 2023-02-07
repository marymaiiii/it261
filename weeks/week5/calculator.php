<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculating Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>My Travel Calculator</h1>
    <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF'])  ;?>" method="post">
    <fieldset>
        <label>Name</label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name'])    ;?>">
    
        <label>Total miles driving?</label>
        <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles'])  ;?>">

        <label>How fast do you typically drive?</label>
        <input type="number" name="fast" value="<?php if(isset($_POST['fast'])) echo htmlspecialchars($_POST['fast'])    ;?>">

        <label>How many hours per day do you plan on driving?</label>
        <input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours'])    ;?>">

        <label>Price of gas</label>
        <ul>
       <li><input type="radio" name="price" value="3.00"<?php  if(isset($_POST['price']) && $_POST['price'] == 3.00) echo 'checked="checked"'  ;?>>$3.00</li>
       <li><input type="radio" name="price" value="3.50"<?php  if(isset($_POST['price']) && $_POST['price'] == 3.50) echo 'checked="checked"'  ;?>>$3.50</li>
       <li><input type="radio" name="price" value="4.00"<?php  if(isset($_POST['price']) && $_POST['price'] == 4.00) echo 'checked="checked"'  ;?>>$4.00</li>

</ul>
<label>Fuel efficiency</label>
<select name="fuel">
<option value="" NULL <?php if(isset($_POST['fuel']) && $_POST['fuel'] == NULL) echo 'selected = "unselected"'  ;?>>Select one!</option>
<option value="40" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == 'great') echo 'selected = "selected"'  ;?>>Great @ 40mpg</option>
<option value="30" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == 'good') echo 'selected = "selected"'  ;?>>Good @ 30mpg</option>
<option value="10" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == 'terrible') echo 'selected = "selected"'  ;?>>Terrible @ 10mpg</option>
</select>
    <input type="submit" value="Calculate">
    <p><a href="">Reset!</a></p>
</fieldset>
</form>
<?php
//we will start with the server request method
//then, we will ask ourselves if any fields are empty
//if the fields are not empty, we will elseif they are set

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['name'])){
        echo '<p class="error">Please fill out your name!</p>';
    }
    if(empty($_POST['miles'])){
        echo '<p class="error">Please fill out your total driving miles!</p>';
    }
    if(empty($_POST['fast'])){
        echo '<p class="error">Please fill out how fast will you be driving!</p>';
    }
    if(empty($_POST['hours'])){
        echo '<p class="error">Please fill out how many hours per day would you like to drive?</p>';
    }
    if($_POST['fuel'] == NULL){
        echo '<p class="error">Please select your car\'s efficiency</p>';
    }

     if (isset($_POST['name'],
    $_POST['miles'],
    $_POST['fast'],
    $_POST['hours'])){
    $name  = $_POST['name'];
    $miles = $_POST['miles'];
    $fast= $_POST['fast'];
    $hours = $_POST['hours'];
    $fuel = $_POST['fuel'];
    $hour = $miles / $fast;
    $day =  $hour / $hours;
    $gallons = $miles / $fuel;
    $dollars = $gallons * $price;


    if(!empty($name && $miles && $fast && $hours && $fuel)) {
    echo '
    <div class="box">
    <h2>Hello '.$name.',</h2>
    <p>You will be travelling a total of '.$hour.' hours, taking '.$day.' days. And, you will be using '.$gallons.' gallons of gas, costing you '.$dollars.' dollars.</p>
    </div>
    ';
    }    
}
}

?>
</body>
</html>