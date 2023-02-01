
<!doctype html>
<html lang="en"> 
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Adder Assignment</title>
<style>
    p {
        color: red;
        text-align: center;
    }
    
    h1 {
        color:green;
    }
    
    h2 {
        font-size:1.5em;
        text-align: center;
    }
    
    form {
        width:350px;
        margin:0 auto;
        border:1px solid red;
        padding:10px;
    }
    
    h1 {
        text-align: center;
    }
    .box{
    width: 400px;
    border:1px solid green;
    margin:20px auto;
    padding:10px;
    }
    p{
    text-align: center;
    margin-top:10px;
    }
</style>
</head>
<body>  
<h1>Adder.php</h1>   
<form action="" method="post">
    <label> Enter the first number:</label>
    <input type="number" name="num1"><br>  <!--wrong type-->
    <label>Enter the second number:</label>
    <input type="number" name="num2"><br> <!--wrong type-->
  <input type="submit" value="Add Em!!">   
</form> 
<p><a href="">RESET PAGE!</a></p>       
<?php
if(isset($_POST['num1'],
$_POST['num2'])){

if(empty($_POST['num1'] &&
$_POST['num2'])) {
echo '<p>Please fill out all of the number!</p>';
} else {
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$total = $num1 + $num2;
echo '
<div class="box">
<h2>You added '.$num1.' and '.$num2.'</h2>
<p> And the answer is '.$total.'</p>
</div>
';
}
}
?>
</body>  
</html>