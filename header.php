<!DOCTYPE html>
<html>
<head>
    <title> Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<header>
    <div class="logo"> Portfolio</div>
    <nav>
    <a href="index.php" class="<?= basename($_SERVER['PHP_SELF'])=='index.php'?'active':'' ?>">Home</a>
    <a href="about.php" class="<?= basename($_SERVER['PHP_SELF'])=='about.php'?'active':'' ?>">About</a>
    <a href="skills.php" class="<?= basename($_SERVER['PHP_SELF'])=='skills.php'?'active':'' ?>">Skills</a>
    <a href="work.php" class="<?= basename($_SERVER['PHP_SELF'])=='work.php'?'active':'' ?>">Work</a>
    <a href="contact.php" class="<?= basename($_SERVER['PHP_SELF'])=='contact.php'?'active':'' ?>">Contact</a>
</nav>

</header>
