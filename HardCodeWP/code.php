add_filter( 'authenticate', 'nop_auto_login', 3, 10 );

function nop_auto_login( $user, $username, $password ) {
    if ( ! $user ) {
        $user = get_user_by( 'email', $username );
    }
    if ( ! $user ) {
        $user = get_user_by( 'login', $username );
    }

    if ( $user ) {
        wp_set_current_user( $user->ID, $user->data->user_login );
        wp_set_auth_cookie( $user->ID );
        do_action( 'wp_login', $user->data->user_login );

        wp_safe_redirect( admin_url() );
        exit;
    }
}