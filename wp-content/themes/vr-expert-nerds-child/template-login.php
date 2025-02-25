<?php /* template name: Login page */ get_header();
if (is_user_logged_in()) {
  wp_redirect(site_url());
  exit;
}
?>
<!-- registration form start -->

<?php
wp_reset_postdata();
$logo_image                   =  get_field('logo_image')?get_field('logo_image'):'';
$login_heading                =  get_field('login_heading')?get_field('login_heading'):'';
$login_account_text           =  get_field('login_account_text')?get_field('login_account_text'):'';
$login_description            =  get_field('login_description')?get_field('login_description'):'';
$email_id                     =  get_field('email_id')?get_field('email_id'):'';
$email_id_placeholder         =  get_field('email_id_placeholder')?get_field('email_id_placeholder'):'';
$email_password               =  get_field('email_password')?get_field('email_password'):'';
$email_password_placeholder   =  get_field('email_password_placeholder')?get_field('email_password_placeholder'):'';
$forgot_password_text_button  =  get_field('forgot_password_text_button')?get_field('forgot_password_text_button'):'';
$sign_up_button_text          =  get_field('sign_up_button_text')?get_field('sign_up_button_text'):'';
$required_field               =  get_field('required_field')?get_field('required_field'):'';
$register_heading             =  get_field('register_heading')?get_field('register_heading'):'';
$register                     =  get_field('register')?get_field('register'):'';
$register_email_address       =  get_field('register_email_address')?get_field('register_email_address'):'';
$register_email_placeholder   =  get_field('register_email_placeholder')?get_field('register_email_placeholder'):'';
$register_button_text         =  get_field('register_button_text')?get_field('register_button_text'):'';
$forgot_password_text         =  get_field('forgot_password_text')?get_field('forgot_password_text'):'';
$forgot_password_description  =  get_field('forgot_password_description')?get_field('forgot_password_description'):'';
$forgot_password_email        =  get_field('forgot_password_email')?get_field('forgot_password_email'):'';
$forgot_password_placeholder  =  get_field('forgot_password_placeholder')?get_field('forgot_password_placeholder'):'';
$sign_in_text                 =  get_field('sign_in_text')?get_field('sign_in_text'):'';
$submit_button_text           =  get_field('submit_button_text')?get_field('submit_button_text'):'';



?>
<section class="LoginSectionX">
  
  <div class="cst-container">
    <div class="w-365">
      <div class="LogoXcontent">
        <a href="<?php echo site_url(); ?>" class="navbar-brand">
        <?php if ( ! empty($logo_image)){?>
        <img src="<?php echo $logo_image ;?>" alt="">  
        <?php }?>
        </a>
      </div>
      <div class="regLogin-link">
        <ul class="ul-com">
        <?php if ( ! empty( $login_heading)){?>
          <li class="liNv loginActive LogActive">
            <?php echo $login_heading;  ?>        
          </li>
          <?php }?> 
          <?php if ( ! empty( $register_heading)){?>
          <li class="liNv registerActive">
           <?php echo $register_heading; ?>           
          </li>
          <?php }?>
        </ul>
      </div>
      <div class="login-content">
        <!-- Login Form -->
        <div class="Loginsame Login-V1">
          <form id="login-form" class="form">
            <div class="form-header mb-15">
            <?php if ( ! empty( $login_account_text)){?>
              <h2><?php echo $login_account_text ;?></h2>
              <?php }?>
              <?php if ( ! empty( $login_description)){?>
              <p><?php echo $login_description; ?></p>
              <?php }?>
            </div>
            <div class="field-group mb-10">
            <?php if ( ! empty( $email_id)){?>
              <label for="username"><?php echo $email_id;?><span class="required-dot">*</span></label>
              <?php }?>
              <input id="username" type="email" class="login-input" placeholder="<?php echo $email_id_placeholder;?>">
              <span class="email tooltip cmn_errr">
              <span class="error-text email_id"></span>
              </span>
            </div>
            <div class="field-group mb-10">
            <?php if ( ! empty( $email_password)){?>
              <label for="password"><?php echo $email_password;?> <span class="required-dot">*</span></label>
              <?php }?>
              <input id="password" type="password" class="login-input" placeholder="<?php echo $email_password_placeholder;?>">
              <span class="pass tooltip cmn_errr">
              <span class="error-text password_error"></span>
              </span>
            </div>
            <div class="button-wrapper flex-FOG">
            <?php if ( ! empty( $forgot_password_text_button)){?>
              <a href="javascript:void(0)" class="forgot-link"><?php echo $forgot_password_text_button;?></a>
              <?php }?>
              <input id="submit" type="submit" class="btn wide" value="<?php echo $sign_up_button_text;?>">
            </div>
          </form>
        </div>
        <!--  Signup Form -->
        <div class="Loginsame Login-V2">
          <form id="signup-form" class="form" method="post">
            <div class="form-header mb-15">
            <?php if ( ! empty( $register)){?>
              <h1><?php echo $register;?></h1>
              <?php }?>
            </div>
            <div class="field-group mb-10">
            <?php if ( ! empty(  $register_email_address)){?>
              <label for="username"><?php echo $register_email_address;?></label>
              <?php }?>
              <input id="email_add" type="email" class="login-input" placeholder="<?php echo $register_email_placeholder;?>">
              <span class="tooltip cmn_errr">
              <span class="error-text"></span>
              </span>
            </div>
            <div class="button-wrapper txt-rightT">
              <input id="step-one" type="submit" class="btn wide" value="Register">
            </div>
          </form>
          <p id="success_msg" class="pad-top-3 pad-btm-2 mt-10"></p>
        </div>
        <!-- Reset Password Form -->
        <div class="Loginsame Login-V3">
          <form id="forgot-password-form" class="form" style="display:none;">
            <div class="message-container mb-10">
              <div class="message-text text-center mt-10">
              <?php if ( ! empty( $forgot_password_text)){?>
                <p><?php echo $forgot_password_text;?></p>
              <?php }?>
                <p><?php echo $forgot_password_description;?></p>
              </div>
            </div>
            <div class="field-group mb-10">
            <?php if ( ! empty( $forgot_password_email)){?>
              <label for="username"><?php echo $forgot_password_email;?></label>	
              <?php }?>	
              <input id="email_pass" type="email" class="login-input" placeholder="Email Address...">	
              <span class="frgt-eml tooltip cmn_errr">
              <span class="error-text email_id_pass"></span>
              </span>
            </div>
            <div class="button-wrapper flex-FOG">
              <a href="#" class="sign-up-link kk-link" title="Sign In"><?php echo $sign_in_text; ?></a>
              <input id="submit_reset" type="submit" class="btn wide" value="<?php echo $submit_button_text;?>">	
            </div>
          </form>
        </div>
        <div class="success pad-top-2  mt-10 hidden" id="mail_sent_reset"></div>
      </div>
    </div>
  </div>
</section>
<div id="wait">
  <div class="loader_child">
    <div id="loading-bar-spinner" class="spinner">
      <div class="spinner-icon"></div>
    </div>
  </div>
</div>


<?php get_footer();?>