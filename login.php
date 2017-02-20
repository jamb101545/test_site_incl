<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 17.02.2017
 * Time: 20:30
 */


session_start();

if ($_POST) {
    if (
        ($_POST['uname'] == 'toster')
        && ($_POST['upass'] == '123')
    ) {
        $_SERVER['PHP_AUTH_USER'] = $_POST['uname'];
        $_SERVER['PHP_AUTH_PW'] = $_POST['upass'];
    }
}


include "header.php";
include "menu.php";

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    if (!headers_sent()) {
        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');
    }
    echo 'Please, input correct username and password!';
    echo '<form action="" method="post">
<div><label>Username: </label><input type="text" name="uname"></div>
<div><label>Password: </label><input type="text" name="upass"></div>
<input type="submit" value="Log in">
</form>
';
} else {
    if (
        ($_SERVER['PHP_AUTH_USER'] == 'toster')
        && ($_SERVER['PHP_AUTH_PW'] == '123')
    ) {
        $_SESSION['adminToster'] = 1;
        echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
        echo "<p>Вы ввели пароль {$_SERVER['PHP_AUTH_PW']}.</p>";
    } else {
        echo '<form action="" method="post">
<div><label>Username: </label><input type="text" name="uname"></div>
<div><label>Password: </label><input type="text" name="upass"></div>
<input type="submit" value="Log in">
</form>
';
    }

}

include "footer.php";
