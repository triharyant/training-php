<form action="index.php" method="POST">

  <input name="username" value="john">
  <input name="password" value="john" type="password">

  <button>Login</button>

</form>

<?php
echo $_POST['username'];
echo $_POST['password'];

