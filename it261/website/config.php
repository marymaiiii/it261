<?php
ob_start();
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
include('credentials.php');
switch(THIS_PAGE){
    case 'index.php':
        $tittle = "Home page of our Website Project";
        $body = 'Home';
        break;
        case 'about.php':
            $tittle = "About page of our Website Project";
            $body = 'about inner';
            break;
            case 'daily.php':
                $tittle = "Daily page of our Website Project";
                $body = 'daily inner';
                break;
                case 'people.php':
                    $tittle = "People page of our Website Project";
                    $body = 'project inner';
                    break;
                    case 'contact.php':
                        $tittle = "Contact page of our Website Project";
                        $body = 'contact inner';
                        break;
                        case 'gallery.php':
                            $tittle = "Gallery page of our Website Project";
                            $body = 'gallery inner';
                            break;
}
//our navigational array!
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'people.php' => 'People',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);
function make_links($nav){
    $myreturn = '';
    foreach($nav as $key => $value){
        if(THIS_PAGE == $key){
            $my_return .= '<li><a class="current" href="'.$key.'">'.$value.'</a></li>';
        } else{
$my_return .= '<li><a href="'.$key.'">'.$value.'</a></li>';
        }
}
return $my_return;
}
if(isset($_GET['today'])){
    $today = $_GET['today'];
} else{
    $today = date('l');
}

switch($today){
case 'Sunday':
    $teaDay = 'orange';
    $day = 'Sunday is Chamomile Tea Day';
    $content = 'Chamomile tea is most commonly known for its calming effects and is frequently used as a sleep aid.  Two studies have examined the effects of chamomile tea or extract on sleep problems in humans. In one study of 80 postpartum women experiencing sleep issues, drinking chamomile tea for two weeks led to improved sleep quality and fewer symptoms of depression.';
    $pic = 'chamomile.jpeg';
    $alt = 'Chamomile';
break;


case 'Monday':
    $teaDay = 'green';
    $day = 'Monday is Peppermint Tea Day';
    $content = 'Peppermint is a minty herb native to Europe and Asia. For hundreds of years, people have used peppermint both as a flavoring and for its medicinal properties.';
    $pic = 'peppermint.jpeg';
    $alt = 'Peppermint';
break;

case 'Tuesday':
    $teaDay = 'black';
    $day = 'Tuesday is Ginger Tea Day';
    $content = 'Ginger tea is a lovely, lightly spicy drink for warming up on cold days. It’s a light, alcohol-free alternative to a night cap. It soothes upset stomachs and eases indigestion if you over-indulge this holiday season.';
    $pic = 'ginger.jpeg';
    $alt = 'Ginger';
    break;
break;

case 'Wednesday':
    $teaDay = 'pink';
    $day = 'Wednesday is Hibiscus Tea Day';
    $content = 'Hibiscus tea is made from the colorful flowers of the hibiscus plant. It has a pink-red color and refreshing, tart flavor. It can be enjoyed hot or iced. In addition to its bold color and unique flavor, hibiscus tea offers healthful properties. For example, hibiscus tea has antiviral properties, and test-tube studies have shown its extract to be highly effective against strains of the bird flu. However, no evidence has shown that drinking hibiscus tea could help you fight off viruses like the flu.';
    $pic = 'hibiscus.jpeg';
    $alt = 'Hibiscusr';
break;

case 'Thursday':
    $teaDay = 'orange';
    $day = 'Thursday is Echinacea Tea Day';
    $content = 'Echinacea tea is an extremely popular remedy that’s said to prevent and shorten the common cold. Evidence has shown that echinacea may help boost the immune system, which could help the body fight off viruses or infections. Many studies have found that echinacea can shorten the duration of the common cold, lessen the severity of its symptoms or even prevent it.';
    $pic = '1.jpg';
    $alt = 'Echinacea';
break;

case 'Friday':
    $teaDay = 'orange';
    $day = 'Friday is Rooibos Tea Day';
    $content = 'Echinacea tea is an extremely popular remedy that’s said to prevent and shorten the common cold. Evidence has shown that echinacea may help boost the immune system, which could help the body fight off viruses or infections. Many studies have found that echinacea can shorten the duration of the common cold, lessen the severity of its symptoms or even prevent it.';
    $pic = 'rooibos.jpg';
    $alt = 'Rooibos';
break;

case 'Saturday':
    $teaDay = 'white';
    $day = 'Friday is Rooibos Tea Day';
    $content = 'Rooibos is an herbal tea that comes from South Africa. It is made from the leaves of the rooibos or red bush plant. South Africans have historically used it for medicinal purposes, but there is very little scientific research on the topic.';
    $pic = 'rooibos.jpg';
    $alt = 'Rooibos';
break;
}
//my form's php


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

if(empty($_POST['phone'])){
    $phone_err = 'Please fill out your phone number';
} else {
    $phone = $_POST['phone'];
}

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
     $comments)) {

    
mail($to, $subject, $body, $headers);
header('Location:thx.php');

    }
} //end isset

} //end server request method


