<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
</head>
<body>
<?php
$conn = mysql_connect('localhost', 'root', 'root');
mysql_select_db('CRUD');
if (isset($_GET['id']) )  {
$id = (int) $_GET['id'];
if (isset($_POST['submitted']))
{
    foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); }
$sql = "UPDATE `People` SET  `name` =  '{$_POST['name']}' ,  `address` =  '{$_POST['address']}' ,  `age` =  '{$_POST['age']}' ,  `contact` =  '{$_POST['contact']}'   WHERE `id` = '$id' ";
mysql_query($sql) or die(mysql_error());
    echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />";
    echo ('<meta http-equiv="refresh" content="1;url=http:/phpcrud/list.php">');
}
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `People` WHERE `id` = '$id' "));
?>

<form action='' method='POST'>

    Name:<input type='text' name='name' value='<?= stripslashes($row['name']) ?>' />
    Address:<input type='text' name='address' value='<?= stripslashes($row['address']) ?>' />
    Age:<input type='number' name='age' value='<?= stripslashes($row['age']) ?>' />
    Contact#:<input type='number' name='contact' value='<?= stripslashes($row['contact']) ?>' />

<p><input type='submit' value='Update' <?php echo $row['id']; ?>" onclick="return confirm('Are you sure want to Update?'); "  /><input type='hidden' value='1' name='submitted'" />

</form>
<?php

}
?>

</body>
</html>
