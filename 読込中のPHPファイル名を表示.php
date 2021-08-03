<?php
    global $template;
    $template_name = basename($template, '.php');
    echo $template_name;
?>