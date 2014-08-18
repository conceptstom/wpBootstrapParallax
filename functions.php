<?php

function menuRegistration() {
    register_nav_menus(
        array(
            'menuTop' => __( 'menuTop' ),
        )
    );
}
add_action( 'init', 'menuRegistration' );
