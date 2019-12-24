<?php
//Create a simple HTML form and accept the user name and display the name through PHP echo statement
?>

<form method="POST">
  <input type="text" name="txt"/>
  <input type="submit" name="submit" value="submit" />
</form>
<br/>

<?php
if(isset($_POST["submit"])){
    echo $_POST["txt"];
}

?>