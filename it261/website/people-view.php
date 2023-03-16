<?php
// this will be our people-view page, which of course starts with our include, pointing to our config, BUT NOT our header include!
include('config2.php');
//is our get set - is is isset?
if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:people.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocktails!!!</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
//we will now select from the table where people id = id

$sql = 'SELECT * FROM cocktails WHERE cocktails_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__, mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__, mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
$name = stripcslashes($row['name']);
$descriptions = stripcslashes($row['descriptions']);
    } //close while

} else {//end if statement
    $feedback = 'There is a problem!!!';
}  //end else 
include('./inlcude/header.php');
?>

<div id="wrapper">
    <main>
        <h1>Cocktails of the month!</h1>
<ul>
<?php 
echo '
<li><b>Name: </b>'.$name.'</li>
<li><b>Descriptions: </b>'.$descriptions.'</li>
';
?>
</ul>
<p><a href="people.php">Return to people page!</a></p>
</ul>
</main>
<aside>
<figure>
<img src="./images2/cocktail<?php echo $id;?>.jpeg" alt="<?php echo $name ;?>">
</figure>
<p><?php 
echo $blurb;
?></p>
</aside>

<?php
//we are going to release the server
@mysqli_free_result($result);
//close the connection

@mysqli_close($iConn);
?>


</div>
<!--end wrapper-->
<?php
include('./include/footer.php');