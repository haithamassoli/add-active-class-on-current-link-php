

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title><?php if (isset($pagename)){echo $pagename;}else echo 'home'; ?></title>
</head>
<body>
  <ul>
    <li><a class="<?php if ($pagename == ""){echo "active";} ?>" href="./index.php">home</a></li>
    <li><a class="<?php if ($pagename == "about"){echo "active";} ?>" href="./one.php">about</a></li>
    <li><a class="<?php if ($pagename == "contact"){echo "active";} ?>" href="./two.php">contact</a></li>
    <li><a class="<?php if ($pagename == "services"){echo "active";} ?>" href="./three.php">services</a></li>
  </ul>
</body>
</html>

