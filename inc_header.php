<?php
$filename = substr(strrchr($_SERVER['SCRIPT_NAME'], "/"), 1); // missing '' around index - notice error
$name = substr($filename, 0, strrpos($filename, ".")); ?>
<header id="pageHeader">
    <aside id="login"><form action="login.php?page=<?php echo $name; ?>" method="post"><input name="username" id="username" type="text" placeholder="Username"><input name="password" id="password" type="password" placeholder="Password"><input name="submit" type="submit" value="Login"></form></aside>
    <?php echo "<h1>Users (password is same as username): admin, Zac, Lindsay</h1>"; ?>
<a href="index.php"><h1><span class="glyphicon glyphicon-ok"></span> The Advice Shop</h1></a>
</header>
