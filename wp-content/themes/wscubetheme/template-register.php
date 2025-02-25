<?php 
// Template Name: register
ob_start(); // Output buffering start karein
get_header();
?>

<?php
if (isset($_POST['register']) && wp_verify_nonce($_POST['custom_register_nonce'], 'custom_register_action')) {
    $firstName = sanitize_text_field($_POST['firstname']);
    $lastName = sanitize_text_field($_POST['lastname']);
    $email = sanitize_email($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // Password match validation
    if ($password !== $confirm_password) {
        echo "<p style='color: red;'>Error: Passwords do not match!</p>";
    } else {
        if (!email_exists($email)) {
            $username = strtolower($firstName . $lastName); // Unique username generate karein
            $user_id = wp_create_user($username, $password, $email);

            if (!is_wp_error($user_id)) {
                wp_safe_redirect(home_url('/login')); // Redirect hone ke baad script execution stop karein
                exit;
            } else {
                echo "<p style='color: red;'>Error: " . $user_id->get_error_message() . "</p>";
            }
        } else {
            echo "<p style='color: red;'>Error: Email already exists!</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css"/>
</head>
<body>
<div class="form-body">
    <div class="form-container">
        <form class="registration-form" action="" method="post">
        <?php wp_nonce_field('custom_register_action', 'custom_register_nonce'); ?>
            <h2>Register</h2>
            <div class="form-group">
                <input type="text" id="firstname" name="firstname" required>
                <label for="firstname">First Name</label>
            </div>
            <div class="form-group">
                <input type="text" id="lastname" name="lastname" required>
                <label for="lastname">Last Name</label>
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" required>
                <label for="email">Email</label>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" required>
                <label for="password">Password</label>
            </div>
            <div class="form-group">
                <input type="password" id="confirm-password" name="confirm-password" required>
                <label for="confirm-password">Confirm Password</label>
            </div>
            <button type="submit" name="register" class="submit-btn">Register</button>
        </form>
    </div>
</div>
</body>
</html>

<?php get_footer(); ?>
