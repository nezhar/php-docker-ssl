<?php
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
    echo "<h1>Yuhu, https is working!!!</h1>";
} else {
	echo "<h1>Nice, the server is running. Try <a href='https://{$_SERVER['HTTP_HOST']}'>https</a></h1>";
}
