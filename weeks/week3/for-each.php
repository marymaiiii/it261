<?php
//our wine list, would it not be an array of wines???

echo '<h2>This will be my wine list</h2>';

$wines = array(
'cabernet',
'Merlot',
'Syrah',
'Malbec',
'Red Blend'
);

//Since we cannot echo our wines array, we will be using a foreach loop!
echo '<ul>';
foreach($wines as $key){
    echo '<li>'.$key.'</li>';
}
echo '</ul>';
echo '<h2>Movies and Shows list which will have both a key and a value</h2>';

$shows = [
'Apple TV' => 'Severance',
'Apple TV' => 'For All Mankind',
'Showtime' => 'City on a Hill',
'Showtime' => 'Homeland',
'Movie' => 'Top Gun Maverick',
'HBO MAX' => 'Hacks'
];

echo '<ul>';
foreach($shows as $key => $value){
    echo '<li><b>'.$key.'</b>:'.$value.'</li>';
}
echo '<h2>Time for our navigation that will again have both a key and value</h2>';
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

echo '<ul>';
foreach($nav as $key => $value){
    echo '<li><a href="'.$key.'">'.$value.'</a></li>';
}
echo '</ul>';