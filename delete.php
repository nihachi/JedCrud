<!DOCTYPE html>
<html>
<head>
    <title>Delete</title>

</head>
<body>
<?php
$conn = mysql_connect('localhost', 'root', 'root');
mysql_select_db('CRUD');
if(isset($_POST['deleted'])){
$id = (int) $_GET['id'];
mysql_query("DELETE FROM `People` WHERE `id` = '$id' ") ;
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> ";
echo ('<meta http-equiv="refresh" content="0;url=http:/phpcrud/list.php">');

}

?>
<form action="" method="post">
    <dialog open><b>Are you sure want to delete?</b>
    <p><input type='submit' value='Yes'  /><input type='hidden' value='1' name='deleted' />
        <a href='list.php'>Back</a></p></form></dialog>

</body>
</html>
