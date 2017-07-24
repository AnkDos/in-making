

<?php
$file = fopen("data.txt", "r");
$members = array();

while (!feof($file)) {
   $members[] = fgets($file);
}

fclose($file);


//var_dump($members);

//print_r($members);
//echo $members[2];
?>


<html>
<body>
  <h2>
  <center> Welcome to twe-per </center>
</h2>
<br>
<br><center>
<table border="5" cellpadding="35">
  <tr>
    <th>Basic Traits (%)   </th>
    <th>User 1</th>
    <th>User 2</th>
    <th>Differences</th>
  </tr>

  <?php
  $i=0;
  $j=5;
  $k=10;
  $l=15;
    while($i<5&&$j<10&&$k<15&&$l<20 ){
      ?>
      <tr>
        <td><?php echo $members[$i]; ?>   </td>
        <td><?php echo $members[$j]*100; ?>   </td>
        <td><?php echo $members[$k]*100; ?>   </td>
        <td><?php echo $members[$l]*100; ?>   </td>

        </tr>
<?php
$i++;
$j++;
$k++;
$l++;
}
?>
