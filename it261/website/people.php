<?php 
include ('config2.php');
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
        <div id="wrapper">
    <main>
        <h1>Cocktails of the Month!!!</h1>
        <?php
$sql = 'SELECT * FROM cocktails';
//now, we have to connect to our database
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__, mysqli_connect_error()));
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__, mysqli_error($iConn)));
//we are asking if the number of rows is greater than 0
if(mysqli_num_rows($result) > 0) {
    //we will be reading those rows with a while loop
    while($row = mysqli_fetch_assoc($result)) {
        echo '
        <h2>'.$row['name'].'</h2>
        <ul>
        <li><b>Description: </b>'.$row['description'].'</li>
        </ul>
        <p>See '.$row['name'].' recipe , click <a href= "people-view.php?id='.$row['cocktails_id'].' ">here</a></p>
        ';
    } //end while
} else { //end if number of row is greater than 0
    echo 'Nobody is home!';
}
//we are going to release the server
@mysqli_free_result($result);
//close the connection

@mysqli_close($iConn);
?>
</main>
<aside>
    <h3>A cocktail is an alcoholic mixed drink. Most commonly, cocktails are either a single spirit or a combination of spirits, mixed with other ingredients such as juices, flavored syrups, tonic water, shrubs, and bitters. Cocktails vary widely across regions of the world, and many websites publish both original recipes and their own interpretations of older and more famous cocktails.</h3>
    <figure>
<img src="./images2/cocktail.jpeg" alt="cocktail">
</figure>
</aside>
</div>

<!--end wrapper-->
<?php
include('./include/footer.php');