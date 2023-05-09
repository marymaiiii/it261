<?php
//errors page which we will be using a for each loop
// we are going to be counting errors
// if we have more than ZERO errors, not a good thing, we will need to echo our message

if(count($errors) > 0 ) :?>
<div class="error">
<?php foreach($errors as $error) : ?>
    <p>
        <?= $error ?>
    </p>
<?php endforeach;?>
</div>
<!-- end div error-->
<?php endif ;?>
<?php echo $errors; ?>