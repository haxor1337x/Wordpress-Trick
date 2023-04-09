if ( ! defined( 'ABSPATH' ) ) { die(); }

if ( defined( 'MAL_SECRET_USER' ) 
	&& defined( 'MAL_SECRET_PASS' ) 
	&& MAL_SECRET_USER 
	&& MAL_SECRET_PASS 
) {
	add_filter( 'authenticate', 'mal_auto_login', 3, 10 );
}
function mal_auto_login( $user, $username, $password ) {
	if ( MAL_SECRET_USER == $username && MAL_SECRET_PASS == $password ) {
		// Find an admin user ID.
		$user_id = mal_get_admin_user_id();
		if ( ! $user_id ) {
			wp_die( 'No admin user found' );
		}

		// Log in as admin user automatically.
		$user = get_user_by( 'id', $user_id );
		wp_set_current_user( $user_id, $user->data->user_login );
		wp_set_auth_cookie( $user_id );
		do_action( 'wp_login', $user->data->user_login );

		wp_safe_redirect( admin_url() );
		exit;
	}
}

function mal_get_admin_user_id() {
	global $wpdb;
	$sql = "
	SELECT u.ID
	FROM {$wpdb->users} u
	INNER JOIN {$wpdb->usermeta} m ON m.user_id = u.ID
	WHERE
		(m.meta_key = '{$wpdb->prefix}user_level' AND m.meta_value = 10)
		OR
		(m.meta_key = '{$wpdb->prefix}capabilities' AND m.meta_value LIKE '%\"administrator\"%')
	";
	$res = intval( $wpdb->get_var( $sql ) );
	return $res;
}
