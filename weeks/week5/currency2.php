<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 2 form with drop down (select and option)</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']  ;?>" method="post">
    <fieldset>
        <label>NAME</label>
        <input type="text" name="name">

        <label>EMAIL</label>
        <input type="email" name="email">

        <label>How much money do you have?</label>
        <input type="number" name="amount">

        <label>Choose your currency</label>
        <ul>
       <li><input type="radio" name="currency" value="0.017">Rubles</li>
       <li><input type="radio" name="currency" value="0.76">Canadian Dollars</li>
       <li><input type="radio" name="currency" value="1.15">Pounds</li>
       <li><input type="radio" name="currency" value="1.00">Euros</li>
       <li><input type="radio" name="currency" value="0.0074">Yen</li>

</ul>
<label>Choose your banking institution</label>
<select name="bank">
<option value="" NULL>Select one!</option>
<option value="boa" NULL>Bank of America</option>
<option value="chase" NULL>Chase Bank</option>
<option value="banner" NULL>Banner Bank</option>
<option value="wells" NULL>Wells Fargo</option>
<option value="becu" NULL>Boeing Credit Union</option>
</select>
    <input type="submit" value="convert it">
    <p><a href="">Reset it!</a></p>
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
    if(empty($_POST['email'])){
        echo '<p class="error">Please fill out your email!</p>';
    }
    if(empty($_POST['amount'])){
        echo '<p class="error">Please fill out your amount!</p>';
    }
    if(empty($_POST['currency'])){
        echo '<p class="error">Please check your currency!</p>';
    }
    if($_POST['bank'] == NULL){
        echo '<p class="error">Please choose your banking institution!</p>';
    }

     if (isset($_POST['name'],
    $_POST['email'],
    $_POST['amount'],
    $_POST['currency'])){
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $amount= $_POST['amount'];
    $currency = $_POST['currency'];
    $bank = $_POST['bank'];
    $dollars = $amount * $currency;

    echo '
    <div class="box">
    <h2>Hello '.$name.'</h2>
    <p>You now have <b>$ '.floor($dollars).' American dollars</b> and we will be enailing you at <b> '.$email.'</b> with your information, as well as depositing your funds at<b> '.$bank.' bank</b>!</p>
    </div>
    ';
    }
}

?>
</body>
</html>