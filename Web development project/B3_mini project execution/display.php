<?php
include_once("config.php");//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY name DESC"); 
?>

<html>
<body>
<a href="index.html">Add New Data</a><br/><br/>

<table width='80%' border=0>

<tr bgcolor='#CCCCCC'>
<td>Name</td>
<td>Age</td>
<td>CIty</td>

</tr>
<?php

while($res = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>".$res['name']."</td>";
echo "<td>".$res['age']."</td>";
echo "<td>".$res['city']."</td>";
echo "</tr>";

}
?>
</table></body>
</html>