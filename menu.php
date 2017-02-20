<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 019 19.02.17
 * Time: 17:48
 */

/*
if (isset ($_GET['page'])) {
    switch (($_GET['page'])) {

        case 'home':
            header('Location: index.php');
            exit();
        case 'contact':
            header('Location: contact.php');
            exit();
        case 'article':
            header('Location: article.php');
            exit();
        case 'login':
            header('Location: login.php');
            exit();
    }
}
*/




echo <<<HTML
<div class="menu_contakt">
    <ul class="menu">
        <li>
            <a href="index.php?page=home">Главная</a>

        </li>
        <li>
            <a href="contact.php">Контакты</a>

        </li>
        <li>
            <a href="article.php">Статьи</a>

        </li>
        <li>
            <a href="login.php">Логин</a>
        </li>
    </ul>
 </div>
HTML;
?>
