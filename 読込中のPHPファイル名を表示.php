<?php

    // footer.phpとかに追記して、表示中のページがPHPのどのファイルを読み込んでいるか確認

    global $template;
    $template_name = basename($template, '.php');
    echo $template_name;
?>