<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD</title>

</head>
<body>

<!-- <a href=new.php>Add</a> -->
<table cellpadding="4" cellspacing="3" border=1>
<?php include 'new.php';

$conn = mysql_connect('localhost', 'root', 'root');
mysql_select_db('CRUD');
    echo "<tr>";
        echo "<td><b>Id</b></td>";
        echo "<td><b>Name</b></td>";
        echo "<td><b>Address</b></td>";
        echo "<td><b>Age</b></td>";
        echo "<td><b>Contact#</b></td>";
    echo "</tr>";

$result = mysql_query("SELECT * FROM `People`") or trigger_error(mysql_error());
while($row = mysql_fetch_array($result)){
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); }

    echo "<tr>";
    echo "<td valign='top'>" . ( $row['id']) . "</td>";
    echo "<td valign='top'>" . ( $row['name']) . "</td>";
    echo "<td valign='top'>" . ( $row['address']) . "</td>";
    echo "<td valign='top'>" . ( $row['age']) . "</td>";
    echo "<td valign='top'>" . ( $row['contact']) . "</td>";

    echo "<td valign='top'><a href=edit.php?id={$row['id']}  >Edit</a>
     </td><td><a href=\"delete.php?id=".$row['id']."\"onclick=
      \"return confirm('Are you sure, you want to delete?')\">Delete</a></td> ";



echo "</tr>";

}
?>
</table>
</body>
</html>
