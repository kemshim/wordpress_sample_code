<?php

    /* 
    * - WordPressプラグイン：Advanced Custom Fields（以下、ACF）の使用が前提
    *   - プラグインページ　→　https://ja.wordpress.org/plugins/advanced-custom-fields/
    * - ACFでField Type True / Falseを作成
    *   - 参考　→　https://www.advancedcustomfields.com/resources/true-false/
    */

?>

<section>
    <?php
        $args_top_info = array(
            'posts_per_page' => 1,
            'post_type'      => 'post',
            'post_status'    => 'publish',

            // ACFの真偽で真だけ取得
            'meta_query' => array( 
                array(
                    'key' => 'top_info_display', 
                    'compare' => '==', 
                    'value' => 1
                ),
            ), 
        );
        $top_info_query = new WP_Query( $args_top_info );
        $top_info = get_posts($args_top_info);
        if($top_info):
            if ( $top_info_query -> have_posts() ) :
                while ( $top_info_query -> have_posts() ) : $top_info_query -> the_post();
    ?>
    <div>
        <time><?php the_date('Y.m.d'); ?></time>
        <h5><?php the_title(); ?></h5>
    </div>
    <?php
                endwhile;
            endif;
            wp_reset_postdata();
        endif;
    ?>
</section>