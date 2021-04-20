<nav>
  <ul>
    <li <?php if ($name == "index") echo 'class="current"'; ?>><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
    <li <?php if ($name == "advisors") echo 'class="current"'; ?>><a href="advisors.php"><span class="glyphicon glyphicon-star"></span> Advisors</a></li>
    <li <?php if ($name == "samples") echo 'class="current"'; ?>><a href="samples.php"><span class="glyphicon glyphicon-comment"></span> Sample Advice</a></li>
    <li <?php if ($name == "subscribe") echo 'class="current"'; ?>><a href="subscribe.php"><span class="glyphicon glyphicon-shopping-cart"></span> Subscribe Now</a></li>
    <li <?php if ($name == "dice") echo 'class="current"'; ?>><a href="dicepage.php"><span class="glyphicon glyphicon-shopping-cart"></span>Roll the dice</a></li>
    <li <?php if ($name == "cool") echo 'class="current"'; ?>><a href="coolpage.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cool page</a></li>
  </ul>
</nav>
