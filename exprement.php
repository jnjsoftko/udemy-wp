This is Test Page
<h1>This is all about Moon</h1>
<?php echo 5 * 5 ?>
<h2>Moon</h2>

<?php
$names = array('Moon', 'Ko');
foreach($name as $names) {
  echo "Hi $name";
}

$count = 0;
while($count < count($names)) {
  echo "<li>My Name is $names[$count]</li>";
  $count++;
}

$count = 1;
while($count<10) {
  echo "<li>$count</li>";
  $count++;
}
?>