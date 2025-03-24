<?php
$Text = '<p><a href="#"></a></p>';
$Pattern = "/<[^>]+>/"; 
$htmlTags = [];
preg_match_all($Pattern, $Text, $htmlTags);
print('Найдены теги: ' . implode(', ', $htmlTags[0]) . '<br>');
?>

