<h1><?php echo $title;?></h1>
<br>
<?php 
echo 'this is Test view';
echo '<hr>';
echo 'number : '.$cat;
?>
<hr>
<h1>แสดงผลแบบ array </h1>
<?php

print_r($ar);
echo '<hr>';
print_r($person);
echo '<hr>';

foreach ($person as $item) {
    echo $item['fname'].'/'.$item['lname'].'/'.$item['email'].'<br>';
    
}

