<?php

    function get_menu ( $params ){
        $args = array(
            'theme_location' => 'header'
        );
        $menu = wp_nav_menu($args);
        for($i = 0; $i < $menu.length; $i++){
            echo $menu[i];
        }
        echo wp_nav_menu($args);
    }

?>