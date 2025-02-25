<?php 
/* 
Template Name: Login
*/
ob_start(); // Output buffering enable karein
get_header();
?>

<?php
if (isset($_POST['login']) && wp_verify_nonce($_POST['custom_login_nonce'], 'custom_login_action')) {
    $email = sanitize_email($_POST['email']);
    $password = $_POST['password'];

    $user = get_user_by('email', $email);

    if ($user) {
        $creds = array(
            'user_login'    => $user->user_login,
            'user_password' => $password,
            'remember'      => true,
        );

        $user_signon = wp_signon($creds, false);

        if (!is_wp_error($user_signon)) {
            wp_safe_redirect(home_url()); // Redirect hone ke baad script execution rokein
            exit;
        } else {
            echo "<p style='color: red;'>Error: Invalid email or password!</p>";
        }
    } else {
        echo "<p style='color: red;'>Error: User does not exist!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css"/>
</head>
<body>
<div class="form-body" style="margin-left:400px; margin-top:30px; margin-bottom:30px;">
    <div class="form-container">
        <form class="login-form" action="" method="post">
            <?php wp_nonce_field('custom_login_action', 'custom_login_nonce'); ?>
            <h2>Login</h2>

            <div class="form-group">
                <input type="email" id="email" name="email" required>
                <label for="email">Email</label>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" required>
                <label for="password">Password</label>
            </div>

            <button type="submit" name="login" class="submit-btn">Login</button>
        </form>
    </div>
</div>
</body>
</html>

<?php 
get_footer(); 
ob_end_flush(); // Output buffering close karein
?>
