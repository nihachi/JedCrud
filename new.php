<!DOCTYPE html>
<html>
<head>
    <title>New</title>
</head>
<body>
<?php
$conn = mysql_connect('localhost', 'root', 'root');
mysql_select_db('CRUD');
if (isset($_POST['submitted'])) {
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); }
$sql = "INSERT INTO `People` ( `name` ,  `address` ,  `age` ,  `contact`  ) VALUES(  '{$_POST['name']}' ,  '{$_POST['address']}' ,  '{$_POST['age']}' ,  '{$_POST['contact']}'  ) ";
mysql_query($sql) or die(mysql_error());
// echo "Added row.<br />";
// echo "<a href='list.php'>Back</a>";
}

?>

<form action='' method='POST'>
Name:<input type='text' name='name' required/>
Address:<input type='text' name='address'/>
Age:<input type='number' name='age'/>
Contact#:<input type='number' name='contact'/>

<p><input type='submit' value='Add Row'  /><input type='hidden' value='1' name='submitted' />
</form>
</body>
</html>

