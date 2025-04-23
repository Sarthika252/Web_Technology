<html>
<body>
<?php
setcookie("a", "Sarthika", time() + 3600);

if (isset($_COOKIE['a'])) {
    echo "Hello, you are visiting again. " . $_COOKIE['a'];
} else {
    echo "Your first visit";
}
?>
</body>
</html>
