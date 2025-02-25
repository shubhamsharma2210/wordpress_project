<?php /**
 * Template Name: Create Password
 *
 */
 if (is_user_logged_in() || ($_GET['data'] == '') && ($_GET['key'] == '')) {
	//wp_redirect(site_url());
	//exit;
	
}
 get_header(); 
 wp_reset_postdata();
   $logoc_image = get_field('logoc_image')?get_field('logoc_image'):'';
   $create_pass_text = get_field('create_pass_text');
   $placeholder_pass = get_field('placeholder_pass');
   $confirm_pass = get_field('confirm_pass');
   $confirm_pass_placeholder = get_field('confirm_pass_placeholder');
   $continue_button_text = get_field('continue_button_text');
   $req_error_text= get_field('req_error_text');
   $pass_not_match = get_field('pass_not_match');
   $tryagain_message = get_field('tryagain_message');
	$user_id_s = explode('_', $_GET['data']);
	$user_id = $user_id_s[2];
	 $key = get_user_meta($user_id, 'activation_pass_key', true); 
if ($_GET['key'] == $key || 1==1) {  
		
		
		?>
<section class="LoginSectionX">
<div class="cst-container">
    
 <div class="w-365">
 <div class="LogoXcontent">
        <a href="<?php echo site_url(); ?>" class="navbar-brand">
        <img src="<?php echo $logoc_image; ?>" alt="<?php echo get_the_title(); ?>">  
        </a>
      </div>
	
	<form id="create-pass" class="form login-content">
		<?php if(get_the_title()){ ?>
		<div class="form-header mb-15 mt-10">
			<h1><?php echo get_the_title(); ?></h1>    
		</div>
		<?php } ?>
		<div class="field-group mb-10">
			<?php if($create_pass_text){ 
				?>
			<label for="password"><?php echo $create_pass_text; ?><span class="required-dot">*</span></label>
			<input id="new-password" type="password" class="login-input" placeholder="<?php echo $placeholder_pass; ?>">
			<?php } ?>
			<!--div class="error" id=""></div-->
			<span class="res_err tooltip cmn_errr">
				<span class="error-text"></span>
			</span>
		</div>
		<?php if($confirm_pass){ ?>
		<div class="field-group mb-10">
			<label for="confirmPassword"><?php echo $confirm_pass; ?><span class="required-dot">*</span></label>
			<input id="confirm-password" type="password" class="login-input" placeholder="<?php echo $confirm_pass_placeholder; ?>">
			<!--div class="error" id=""></div-->
			<span class="cnf_err tooltip cmn_errr">
				<span class="error-text"></span>
			</span>
		</div>
		<?php } if($continue_button_text){ ?>
		<div class="button-wrapper txt-rightT">
			<input id="create-submit" type="submit" class="btn wide" value="<?php echo $continue_button_text; ?>">
		</div>
		<?php } ?>
		
	</form>
	<p id="success_msg" class="pad-top-3 pad-btm-2 hidden"></p>	
 <?php //mobile_menu_content(); ?> <!--mobile menu -->
</div>
</div>
</section>
<?php } else {
	wp_redirect(site_url());
	exit;
	}  ?>
<!-- on Ajax work -->
<div id="wait">    
	<div class="loader_child">
		<div id="loading-bar-spinner" class="spinner">
			<div class="spinner-icon"></div>
		</div>  
	</div>
</div>
<script>
jQuery(document).ready(function(){
	
jQuery(document).ajaxStart(function () {	
	jQuery("#wait").css("display", "block");	
});	
jQuery(document).ajaxComplete(function () {	
	jQuery("#wait").css("display", "none");	
});
jQuery('#create-pass').submit(function(e){	
	e.preventDefault();
    var newpass = jQuery('#new-password').val();
    var confirpass = jQuery('#confirm-password').val();
    var user_id = '<?php echo $user_id; ?>';
    jQuery('.error').text('');
	remove_tooltip();
     if (newpass == '') {
			jQuery('.res_err.tooltip').show();  
			jQuery('#new-password').css('border-color','red');  
			jQuery('#new-password').siblings('span.tooltip').find('span').text('<?php echo  $req_error_text; ?>');
			jQuery('#new-password').focus(); 
			return false;
		} else if (confirpass == '') {
			jQuery('.cnf_err.tooltip').show();  
			jQuery('#confirm-password').css('border-color','red');  
			jQuery('#confirm-password').siblings('span.tooltip').find('span').text('<?php echo  $req_error_text; ?>');
			jQuery('#confirm-password').focus();
			return false;
		} else if (confirpass != newpass) {
			jQuery('.cnf_err.tooltip').show();  
			jQuery('#confirm-password').css('border-color','red');
			jQuery('#confirm-password').siblings('span.tooltip').find('span').text("<?php echo  $pass_not_match; ?>");
			jQuery('#confirm-password').val('');
			return false;
		}
   
    var datastr = 'action=createPassword&pass=' + newpass + '&userid=' + user_id;
	var ajaxscript = {ajax_url: '<?php bloginfo('url'); ?>/wp-admin/admin-ajax.php'}; 
    jQuery.ajax({
        url: ajaxscript.ajax_url,
        method: 'POST',
        data: encodeURI(datastr),
        success: function (result) {
            var result = JSON.parse(result);
            console.log(result);
            if (result.status == 'updated') {
                window.location.href = '<?php bloginfo('url'); ?>';  
                jQuery('#confirm-password').val('');
				jQuery('#new-password').val('');
            } else {
                
				jQuery('#confirm-password').val('');
					jQuery('#new-password').val('');
					jQuery('.res_err.tooltip').show();  
					jQuery('#new-password').css('border-color','red');  
					jQuery('#new-password').siblings('span.tooltip').find('span').text('<?php echo  $tryagain_message ; ?>');
					jQuery('#new-password').focus();
            }
        },
        error: function (error) {
            
            jQuery('.res_err.tooltip').show();  
			jQuery('#new-password').css('border-color','red');  
			jQuery('#new-password').siblings('span.tooltip').find('span').text('<?php echo  $tryagain_message ; ?>');
			jQuery('#new-password').focus();
        }
    });
});
function remove_tooltip(){
		jQuery('#create-pass .field-group input').keyup(function(){
			jQuery(this).parent('.field-group').find('span.tooltip').hide();
			jQuery(this).css('border-color','');
		});
	}
});

</script>
 <?php get_footer(); ?>