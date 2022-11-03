<?php

    // リンクなしでカテゴリー名1つだけ取得
    $cat = get_the_category();
    $cat_name = $cat[0]->cat_name;
    echo $cat_name;

    // カテゴリーIDを取得
    $cat = get_the_category();
    $cat_id = $cat[0]->cat_ID;
    echo $cat_id;

    // カテゴリーのスラッグ取得
    $cat = get_the_category();
    $cat_slug = $cat[0]->category_nicename;
    echo $cat_slug;

?>

