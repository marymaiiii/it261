<?php 
include ('config.php');
include('./include/header.php'); ?>
<div id="wrapper">
<main>
<h1>10 Healthy Herbal Teas You Should Try!</h1>
<p>Herbal teas have been around for centuries.
Yet, despite their name, herbal teas are not true teas at all. True teas, including green tea, black tea and oolong tea, are brewed from the leaves of the Camellia sinensis plant.
On the other hand, herbal teas are made from dried fruits, flowers, spices or herbs.
This means herbal teas can come in a wide range of tastes and flavors and make a tempting alternative to sugary beverages or water.
In addition to being delicious, some herbal teas have health-promoting properties. In fact, herbal teas have been used as natural remedies for a variety of ailments for hundreds of years.
Interestingly, modern science has begun to find evidence supporting some of the traditional uses of herbal teas, as well as some new ones.</p>
<h2 class="<?php echo $teaDay ;?> "><?php echo $day; ?></h2>
<p><?php echo $content; ?></p>
<h2>Here is a list of 10 healthy herbal teas you’ll want to try.</h2>
<ul>
<li><a style="color:<?php 
    if($today = 'Sunday'){
        echo 'orange';
    } else{
        echo 'blue';
    } ; ?>" href="daily.php?today=Sunday">Sunday</a></li>
        <li><a style="color:<?php 
    if($today = 'Monday'){
        echo 'green';
    } else{
        echo 'blue';
    } ; ?>" href="daily.php?today=Monday">Monday</a></li>
      <li><a style="color:<?php 
    if($today = 'Tuesday'){
        echo 'black';
    } else{
        echo 'blue';
    } ; ?>" href="daily.php?today=Tuesday">Tuesday</a></li>
        <li><a style="color:<?php 
    if($today = 'Wednesday'){
        echo 'pink';
    } else{
        echo 'blue';
    } ; ?>" href="daily.php?today=Wednesday">Wednesday</a></li>
        <li><a style="color:<?php 
    if($today = 'Thursday'){
        echo 'orange';
    } else{
        echo 'blue';
    } ; ?>" href="daily.php?today=Thursday">Thursday</a></li>
        <li><a style="color:<?php 
    if($today = 'Friday'){
        echo 'orange';
    } else{
        echo 'blue';
    } ; ?>" href="daily.php?today=Friday">Friday</a></li>
        <li><a style="color:<?php 
    if($today = 'Saturday'){
        echo 'orange';
    } else{
        echo 'blue';
    } ; ?>" href="daily.php?today=Saturday">Saturday</a></li>
</ul>
</main>
<aside>
    <h3>Tea Day</h3>
    <figure>
<img src="./images1/tea.jpeg" alt="tea">
</figure>

</aside>


</div>
<!--end wrapper-->
<?php
include('./include/footer.php');
