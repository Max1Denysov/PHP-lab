<html>
<form action="action.php" method="post">
 <p>Familiya(Denysov): <input type="text" name="name" /></p>
  
 <p><input type="submit" /></p>
</form>
</html>

//action.php
<?php  
  echo substr($_POST['name'], -3) 
 ?>
