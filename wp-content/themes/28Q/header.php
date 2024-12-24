<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>28q</title>
    <?php wp_head();?>
</head>
<body>
<header>
    <nav>
        <input type="checkbox" id="nav-toggle" class="nav-toggle" hidden>
        <label for="nav-toggle" class="nav-toggle-label">
            <span class="hamburger"></span>
        </label>
        <a href="general" class="logo-link">
            <img src="<?php bloginfo('template_url');?>/assets/image/svg/Logo.svg" alt="Логотип" class="logo">
        </a>
        <ul id="nav-menu">
            <li>
                <a href="general" class="page-link">Главная</a>
            </li>
            <li>
                <a href="cases" class="page-link">Кейсы</a>
            </li>
            <li>
                <a href="services" class="page-link">Услуги</a>
            </li>
            <li>
                <a href="about" class="page-link">О нас</a>
            </li>
            <li>
                <a href="contacts" class="page-link">Контакты</a>
            </li>
        </ul>
    </nav>
</header>