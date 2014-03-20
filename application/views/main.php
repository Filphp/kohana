<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php foreach($styles as $style): ?>
        <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css"
              rel="stylesheet" type="text/css" />
    <?php endforeach; ?>

</head>

<body>

    <div class="container">
        <a style="position:relative; top:15px; right:20px; float:right; color:#0066CC;" href="login"> <ins>Войти</ins></a>
        <div class="header"> <a href="http://kohana.local/"><img border="0" src="/public/images/logo.jpg" width="760" height="150"> </a></div>


        <div class="left">
            <br><a style="position:relative; top:-18px; right:-220px; float:left; color:#0066CC;" href="/"><ins>Главная</ins></a>
            <p><a style="position:relative; top:-18px; right:-240px; float:left; color:#0066CC; " href="/estate"><ins>Недвижимость</ins></a>
            <p><a style="position:relative; top:-18px; right:-260px; float:left; color:#0066CC; " href="/company"><ins>О компании</ins></a>
            <p><a style="position:relative; top:-18px; right:-280px; float:left; color:#0066CC; " href="/services"><ins>Услуги</ins></a>
            <p><a style="position:relative; top:-18px; right:-300px; float:left; color:#0066CC; " href="/contacts"><ins>Контакты</ins></a>
            </div>

            <div id='content'> <br><br><br><br><br><br>
            <?php echo $content ?></div>
</body>
</html>