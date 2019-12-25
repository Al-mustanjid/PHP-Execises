<?php
/* Write a e PHP script to display string, values within a table.
Note : Use HTML table elements into echo.
*/
?>
<?php
$desc = "Salary of Mr. A is";
$salary1= 1000;
$desc2 = "Salary of Mr. B is";
$salary2= 1200;
$desc3 = "Salary of Mr. A is";
$salary3= 1400;
?>
<table border = "1">
<tr>
    <td><?php echo $desc ?></td>
    <td><?php echo $salary1 ?></td>
</tr>

<tr>
<td><?php echo $desc2 ?></td>
    <td><?php echo $salary2 ?></td>
</tr>

<tr>
<td><?php echo $desc3 ?></td>
    <td><?php echo $salary3 ?></td>
</tr>
<table>