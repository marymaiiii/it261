<?php
//class coffee exercise
//if today is Griday, it will be pumpkin latte day
//INTRODUCING the isset() function
//then we will introduce our first GLOBAL variable
//our switch

//starting the switch
//if $GET['today'] is set, $today, then all is well, but it is not set therefore te else is the day!
//else, today is TODAY

//GLOBAL VARIABLES are capitalized and start with$_GET

//what is the isset function - is asking if something has been set?

//$variable = 'This is our variable';
//if(isset($variable)){
//    echo'Variable has been set';
//}else
//echo 'Variable has not been set!';

//echo '<br>';
 
//if(isset($_GET['today'])){
//  echo 'Today has been set';
//    }else{
//echo 'NOT!!!!!!';    
//}



if(isset($_GET['today'])){
    $today = $_GET['today'];
} else{
    $today = date('l');
}

switch($today){
case 'Friday':
    $coffee = '<h2>Friday is our Pumpkin Latte Day!</h2>';
    $pic = 'pumpkin.jpg';
    $alt = 'Pumpkin Latte';
    $content = '<p><b> Pumpkin Spice Latte</b>is made with milk, their pumpkin spice sauce, brewed espresso, whipped cream and a pumpkin spice topping that consists of cinnamon, ginger, nutmeg and cloves.</p>';
break;


case 'Saturday':
    $coffee = '<h2>Saturday is our Pumpkin Latte Day!</h2>';
    $pic = 'green-tea.jpg';
    $alt = 'Green Tea';
    $content = '<p><b> A green tea latte</b>is simply a latte made with green tea instead of espresso. Traditional lattes are a blend of steamed milk and espresso, but in a green tea latte, we remove the coffee and use tea in its place.</p>';
break;

case 'Sunday':
    $coffee = '<h2>Saturday is our Regular Joe Day!</h2>';
    $pic = 'coffee.jpg';
    $alt = 'Regular Coffee';
    $content = '<p><b> Regular coffee</b> (countable and uncountable, plural regular coffees) (dialectal, US, New England) Coffee with cream and sugar (in contrast to the expected meaning of "black coffee" in other regions of the USA).</p>';
break;

case 'Monday':
    $coffee = '<h2>Monday is our Latte Day!</h2>';
    $pic = 'latte.jpg';
    $alt = 'Latte';
    $content = '<p><b> A latte or caffè latte</b> is a milk coffee that is a made up of one or two shots of espresso, steamed milk and a final, thin layer of frothed milk on top.</p>';
break;

case 'Tuesday':
    $coffee = '<h2>Tuesday is our Americano Day!</h2>';
    $pic = 'americano.jpg';
    $alt = 'Americano';
    $content = '<p><b> Caffè Americano </b>(also known as Americano or American; Italian pronunciation; Spanish: café americano, American coffee is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. Its strength varies with the number of shots of espresso and amount of water added. </p>';
break;

case 'Wednesday':
    $coffee = '<h2>Wednesday is our Cappuccino Day!</h2>';
    $pic = 'cap.jpg';
    $alt = 'Cappuccino';
    $content = '<p><b> A cappuccino </b>is an espresso drink with steamed milk, milk foam and espresso. It\'s very similar to a latte (cafe latte), but the proportion of steamed milk is different.  </p>';
break;

case 'Thursday':
    $coffee = '<h2>Thursday is our Frappuccino Day!</h2>';
    $pic = 'frap.jpg';
    $alt = 'Frappuccino';
    $content = '<p><b> Frappuccino </b> is a line of blended iced coffee drinks sold by Starbucks. It consists of coffee or crème base, blended with ice and ingredients such as flavored syrups and usually topped with whipped cream and or spices. Frappuccinos are also sold as bottled coffee beverages in grocery stores, convenience stores and from vending machines. </p>';
break;
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <tittle>Switch Classwork Exercise</tittle>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
        #wrapper{
            width:940px;
            margin: 20px auto;
        }
        h1,h2,img{
            margin-bottom:10px;
        }
        p{
            margin-bottom:20px;
        }
        
        </style>
        </head>
        <body>
            <div id="wrapper">
                <h1>My Wonderful Switch Classwork Exercise (Not the daily homework)</h1>
<?php echo $coffee; ?>
<img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
<?php echo $content; ?>
<h2>Check out our Daily Specials</h2>
<ul>
    <li><a href="switch.php?today=Sunday">Sunday</a></li>
    <li><a href="switch.php?today=Monday">Monday</a></li>
    <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
    <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
    <li><a href="switch.php?today=Thursday">Thursday</a></li>
    <li><a href="switch.php?today=Friday">Friday</a></li>
    <li><a href="switch.php?today=Saturday">Saturday</a></li>

    </div>
    </body>
    </html>