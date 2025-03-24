<?php
$Pattern = "/\d{2}.\d{2].\d{4}$/";
$date = "23.01.2021";
if (preg_match($Pattern, $date)) {
    print('Дата ' . $date . ' корректна<br>');
} else {
    print('Дата ' . $date . ' некорректна<br>');
}
?>

