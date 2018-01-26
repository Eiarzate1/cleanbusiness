<?php

    include('rest/menu-rest.php');

    register_nav_menus(array(
        'header' => __('Header Menu'),
        'footer' => __('Footer Menu')
    ));

    add_action('init','create_account');

    add_action( 'rest_api_init', function () {
            
        register_rest_route( 'rest-api/v1', 'get-menus',array(

            'methods'  => 'GET',
            'callback' => 'get_menu'

        ) );
    });

?>