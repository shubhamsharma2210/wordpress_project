<?php function my_acf_add_local_field_groups() {
    
    acf_add_local_field_group(
        array(
        'key' => 'group_1',
        'title' => 'Login Page',
        'fields' => array (
            array(
                'key' => 'field_1',
                'label' => 'Login Page',
                'type' => 'tab',   
            ),
           array(                
                'key' => 'field_2',
                'label' => 'Logo Image',
                'name' => 'logo_image',
                'type' => 'image',
                'return_format' => 'url',
                'preview_size' => 'thumbnail',                
                'library' => 'all',
                'min_width' => 0,
                'min_height' => 0,
                'min_size' => 0,
                'max_width' => 0,
                'max_height' => 0,
                'max_size' => 0,
                'mime_types' => '',
                
           ),
            array(
                'key' => 'field_3',
                'label' => 'Login Heading',
                'type' => 'tab',   
            ),
            array(

                'key' => 'field_4',
                'label' => 'Login Heading',
                'name' => 'login_heading',
                'type' => 'text',
                array(

                    'key' => 'field_4',
                    'label' => 'Login Heading',
                    'name' => 'login_heading',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),
            array(

                'key' => 'field_5',
                'label' => 'Login Account Text',
                'name' => 'login_account_text',
                'type' => 'text',
                array(

                    'key' => 'field_5',
                    'label' => 'Login Account Text',
                    'name' => 'login_account_text',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),

            array(

                'key' => 'field_6',
                'label' => 'Login Description',
                'name' => 'login_description',
                'type' => 'text',
                array(

                    'key' => 'field_6',
                    'label' => 'Login Description',
                    'name' => 'login_description',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),
            
            array(

                'key' => 'field_7',
                'label' => 'Email Id',
                'name' => 'email_id',
                'type' => 'text',
                array(

                    'key' => 'field_7',
                    'label' => 'Email Id',
                    'name' => 'email_id',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),
            array(

                'key' => 'field_171',
                'label' => 'Email ID Placeholder',
                'name' => 'email_id_placeholder',
                'type' => 'text',
                array(

                    'key' => 'field_171',
                    'label' => 'Email ID Placeholder',
                    'name' => 'email_id_placeholder',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),

            array(

                'key' => 'field_8',
                'label' => 'Email Password',
                'name' => 'email_password',
                'type' => 'text',
                array(

                    'key' => 'field_8',
                    'label' => 'Email Password',
                    'name' => 'email_password',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),
            array(

                'key' => 'field_181',
                'label' => 'Email Password Placeholder',
                'name' => 'email_password_placeholder',
                'type' => 'text',
                array(

                    'key' => 'field_181',
                    'label' => 'Email Password Placeholder',
                    'name' => 'email_password_placeholder',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),
            array(

                'key' => 'field_9',
                'label' => 'Forgot Password Text Button',
                'name' => 'forgot_password_text_button',
                'type' => 'text',
                array(

                    'key' => 'field_9',
                    'label' => 'Forgot Password Text Button',
                    'name' => 'forgot_password_text_button',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),

            array(

                'key' => 'field_10',
                'label' => 'Sign Up Button Text',
                'name' => 'sign_up_button_text',
                'type' => 'text',
                array(

                    'key' => 'field_10',
                    'label' => 'Sign Up Button Text',
                    'name' => 'sign_up_button_text',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),

            array(

                'key' => 'field_11',
                'label' => 'Required Field',
                'name' => 'required_field',
                'type' => 'text',
                array(

                    'key' => 'field_11',
                    'label' => 'Required Field',
                    'name' => 'required_field',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),

            array(
                'key' => 'field_12',
                'label' => 'Register Heading',
                'type' => 'tab',   
            ),
            array(

                'key' => 'field_13',
                'label' => 'Register Heading',
                'name' => 'register_heading',
                'type' => 'text',
                array(

                    'key' => 'field_13',
                    'label' => 'Register Heading',
                    'name' => 'register_heading',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),
            array(

                'key' => 'field_14',
                'label' => 'Register ',
                'name' => 'register',
                'type' => 'text',
                array(

                    'key' => 'field_14',
                    'label' => 'Register',
                    'name' => 'register',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),
            array(

                'key' => 'field_15',
                'label' => 'Register Email Address',
                'name' => 'register_email_address',
                'type' => 'text',
                array(

                    'key' => 'field_15',
                    'label' => 'Register Email Address',
                    'name' => 'register_email_address',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),
            array(

                'key' => 'field_151',
                'label' => 'Register Email Placeholder',
                'name' => 'register_email_placeholder',
                'type' => 'text',
                array(

                    'key' => 'field_151',
                    'label' => 'Register Email Placeholder',
                    'name' => 'register_email_placeholder',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),
            
            array(

                'key' => 'field_161',
                'label' => 'Register Button Text',
                'name' => 'register_button_text',
                'type' => 'text',
                array(

                    'key' => 'field_161',
                    'label' => 'Register Button Text',
                    'name' => 'register_button_text',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),
            array(
                'key' => 'field_16',
                'label' => 'Forgot Password',
                'type' => 'tab',   
            ),
            array(

                'key' => 'field_17',
                'label' => 'Forgot Password Text',
                'name' => 'forgot_password_text',
                'type' => 'text',
                array(

                    'key' => 'field_17',
                    'label' => 'Forgot Password Text',
                    'name' => 'forgot_password_text',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),
            array(

                'key' => 'field_18',
                'label' => 'Forgot Password Description',
                'name' => 'forgot_password_description',
                'type' => 'text',
                array(

                    'key' => 'field_18',
                    'label' => 'Forgot Password Description',
                    'name' => 'forgot_password_description',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),
            array(

                'key' => 'field_19',
                'label' => 'Forgot Password Email',
                'name' => 'forgot_password_email',
                'type' => 'text',
                array(

                    'key' => 'field_19',
                    'label' => 'Forgot Password Email',
                    'name' => 'forgot_password_email',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),
            array(

                'key' => 'field_191',
                'label' => 'Forgot Email Placeholder',
                'name' => 'forgot_password_placeholder',
                'type' => 'text',
                array(

                    'key' => 'field_191',
                    'label' => 'Forgot Email Placeholder',
                    'name' => 'forgot_password_placeholder',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),
            
            array(

                'key' => 'field_20',
                'label' => 'Sign In Text',
                'name' => 'sign_in_text',
                'type' => 'text',
                array(

                    'key' => 'field_20',
                    'label' => 'Sign In Text',
                    'name' => 'sign_in_text',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),
            array(

                'key' => 'field_21',
                'label' => 'Submit Button Text',
                'name' => 'submit_button_text',
                'type' => 'text',
                array(

                    'key' => 'field_21',
                    'label' => 'Submit Button Text',
                    'name' => 'submit_button_text',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),

            array(
                'key' => 'field_e1',
                'label' => 'Error Message',
                'type' => 'tab',   
            ),
            array(

                'key' => 'field_e2',
                'label' => 'Password Not Match',
                'name' => 'password_not_match',
                'type' => 'text',
                array(

                    'key' => 'field_e2',
                    'label' => 'Password Not Match',
                    'name' => 'password_not_match',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),

            array(

                'key' => 'field_e3',
                'label' => 'Email Not Match',
                'name' => 'email_not_match',
                'type' => 'text',
                array(

                    'key' => 'field_e3',
                    'label' => 'Email Not Match',
                    'name' => 'email_not_match',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),

            array(
                'key' => 'field_s1',
                'label' => 'Success Message',
                'type' => 'tab',   
            ),
            array(

                'key' => 'field_s2',
                'label' => 'Logged In',
                'name' => 'logged_in',
                'type' => 'text',
                array(

                    'key' => 'field_s2',
                    'label' => 'Logged In',
                    'name' => 'logged_in',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                
            ),
            
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-login.php',
                ),
                
            ),
        ),
    ),
    
 );
 acf_add_local_field_group(
 array(
    'key' => 'group_2',
    'title' => 'Create Password Page',
    'fields' => array (
        array(
            'key' => 'field_c1',
            'label' => 'Create Password Page',
            'type' => 'tab',   
        ),
       array(                
            'key' => 'field_c2',
            'label' => 'Logoc Image',
            'name' => 'logoc_image',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'thumbnail',                
            'library' => 'all',
            'min_width' => 0,
            'min_height' => 0,
            'min_size' => 0,
            'max_width' => 0,
            'max_height' => 0,
            'max_size' => 0,
            'mime_types' => '',
            
       ),
       array(

        'key' => 'field_c3',
        'label' => 'Create Pass text',
        'name' => 'create_pass_text',
        'type' => 'text',
        array(

            'key' => 'field_c4',
            'label' => 'Create Pass text',
            'name' => 'create_pass_text',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        
    ),
    array(

        'key' => 'field_c5',
        'label' => 'Placeholder Password text',
        'name' => 'placeholder_pass',
        'type' => 'text',
        array(

            'key' => 'field_c5',
            'label' => 'Placeholder Password text',
            'name' => 'placeholder_pass',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        
    ),
    array(

        'key' => 'field_c6',
        'label' => 'Confirm Password text',
        'name' => 'confirm_pass',
        'type' => 'text',
        array(

            'key' => 'field_c6',
            'label' => 'Confirm Password text',
            'name' => 'confirm_pass',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        
    ),
    array(

        'key' => 'field_c7',
        'label' => 'Confirm Password Placeholder',
        'name' => 'confirm_pass_placeholder',
        'type' => 'text',
        array(

            'key' => 'field_c7',
            'label' => 'Confirm Password Placeholder',
            'name' => 'confirm_pass_placeholder',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        
    ),
    array(

        'key' => 'field_c8',
        'label' => 'Continue Button text',
        'name' => 'continue_button_text',
        'type' => 'text',
        array(

            'key' => 'field_c8',
            'label' => 'Continue Button text',
            'name' => 'continue_button_text',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        
    ),
    array(

        'key' => 'field_c9',
        'label' => 'Required Err Text',
        'name' => 'req_error_text',
        'type' => 'text',
        array(

            'key' => 'field_c9',
            'label' => 'Required Err Text',
            'name' => 'req_error_text',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        
    ),
    array(

        'key' => 'field_c10',
        'label' => 'Password doesnt match',
        'name' => 'pass_not_match',
        'type' => 'text',
        array(

            'key' => 'field_c10',
            'label' => 'Password doesnt match',
            'name' => 'pass_not_match',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        
    ),
    array(

        'key' => 'field_c11',
        'label' => 'Tryagain Message',
        'name' => 'tryagain_message',
        'type' => 'text',
        array(

            'key' => 'field_c11',
            'label' => 'Tryagain Message',
            'name' => 'tryagain_message',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        
    ),
       

    ),
    
    
   
    'location' => array (
        array (
            array (
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'template-creat-pass.php',
            ),
            
        ),
    ),
),

); 
acf_add_local_field_group(
    array(
       'key' => 'group_3',
       'title' => 'Sngle Page Fields',
       'fields' => array (
           array(
               'key' => 'field_ss1',
               'label' => 'PostBy And Published Text',
               'type' => 'tab',   
           ),
           array(
            'key' => 'field_ss2',
            'label' => 'Post By Text',
            'name' => 'post_bytext',
            'type' => 'text',
            array(
                 'key' => 'field_ss2',
                 'label' => 'Post By Text',
                 'name' => 'post_bytext',
                 'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
        ),
        array(
            'key' => 'field_s3',
            'label' => 'Published text',
            'name' => 'published_text',
            'type' => 'text',
            array(
                 'key' => 'field_s3',
                 'label' => 'Published text',
                 'name' => 'published_text',
                 'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
        ),
        array(
            'key' => 'field_s4',
            'label' => 'Updated Text',
            'name' => 'updated_text',
            'type' => 'text',
            array(
                 'key' => 'field_s4',
                 'label' => 'Updated Text',
                 'name' => 'updated_text',
                 'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
        ),
        array(
            'key' => 'field_s5',
            'label' => 'Did You Like This Article',
            'name' => 'did_you_like_article',
            'type' => 'text',
            array(
                 'key' => 'field_s5',
                 'label' => 'Did You Like This Article',
                 'name' => 'did_you_like_article',
                 'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
        ), 
        array(
            'key' => 'field_raf1',
            'label' => 'Related Article',
            'type' => 'tab',   
        ),  
        array(
            'key' => 'field_post1',
            'label' => 'Related Article',
            'name' => 'related_article',
            'type' => 'text',
            array(
                 'key' => 'field_post1',
                 'label' => 'Related Article',
                 'name' => 'related_article',
                 'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
         ),

         array(
            'key' => 'field_w1',
            'label' => 'Written By',
            'name' => 'written_by',
            'type' => 'text',
            array(
                 'key' => 'field_w1',
                 'label' => 'Written By',
                 'name' => 'written_by',
                 'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
         ),

         array(
            'key' => 'field_laf1',
            'label' => 'The latest articles from',
            'name' => 'the_latest_articles_from',
            'type' => 'text',
            array(
                 'key' => 'field_laf1',
                 'label' => 'The latest articles from',
                 'name' => 'the_latest_articles_from',
                 'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
         ),

         array(
            'key' => 'field_lc1',
            'label' => 'Leave a comment',
            'name' => 'leave_comment',
            'type' => 'text',
            array(
                 'key' => 'field_lc1',
                 'label' => 'Leave a comment',
                 'name' => 'leave_comment',
                 'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
         ),

         array(
            'key' => 'field_rc1',
            'label' => 'Reply',
            'name' => 'reply',
            'type' => 'text',
            array(
                 'key' => 'field_rc1',
                 'label' => 'Reply',
                 'name' => 'reply',
                 'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
         ),

         
         array(
            'key' => 'field_sc1',
            'label' => 'Share',
            'name' => 'share',
            'type' => 'text',
            array(
                 'key' => 'field_sc1',
                 'label' => 'Share',
                 'name' => 'share',
                 'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
         ),
    
         array(
            'key' => 'field_ppp1',
            'label' => 'Posts Per Page',
            'name' => 'posts_per_page',
            'type' => 'text',
            array(
                 'key' => 'field_ppp1',
                 'label' => 'Posts Per Page',
                 'name' => 'posts_per_page',
                 'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
         ),
         
           
        
         array(
            'key' => 'field_login1',
            'label' => 'Login Sin in',
            'type' => 'tab',   
        ),  
        array(
            'key' => 'field_lsf1',
            'label' => 'Log in',
            'name' => 'login',
            'type' => 'text',
            array(
                 'key' => 'field_lsf1',
                 'label' => 'Log in',
                 'name' => 'login',
                 'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
         ),

   
         array(
            'key' => 'field_lsf2',
            'label' => 'Sign up',
            'name' => 'sign_up',
            'type' => 'text',
            array(
                 'key' => 'field_lsf2',
                 'label' => 'Sign up',
                 'name' => 'sign_up',
                 'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
         ),

               
         array(
            'key' => 'field_replyf1',
            'label' => 'Reply',
            'type' => 'tab',   
        ),  
        array(
            'key' => 'field_replyf12',
            'label' => 'Reply',
            'name' => 'reply',
            'type' => 'text',
            array(
                 'key' => 'field_replyf12',
                 'label' => 'Reply',
                 'name' => 'reply',
                 'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
         ),

         array(
            'key' => 'field_commentmoderation2',
            'label' => 'Comment Moderation',
            'name' => 'comment_moderation',
            'type' => 'text',
            array(
                 'key' => 'field_commentmoderation2',
                 'label' => 'Comment Moderation',
                 'name' => 'comment_moderation',
                 'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
         ),
                array(
                    'key' => 'field_rft1',
                    'label' => 'Social Media Tab',
                    'type' => 'tab',   
                ),
                array(
    
                    'key' => 'facebook_url',
                    'label' => 'Facebook Url',
                    'name' => 'facebook_url',
                    'type' => 'url',
                    'placeholder' => '',
                    
                ),
                array(                
                    'key' => 'field_facebok',
                    'label' => 'Facebook Image',
                    'name' => 'facebook_image',
                    'type' => 'image',
                    'return_format' => 'url',
                    'preview_size' => 'thumbnail',                
                    'library' => 'all',
                    'min_width' => 0,
                    'min_height' => 0,
                    'min_size' => 0,
                    'max_width' => 0,
                    'max_height' => 0,
                    'max_size' => 0,
                    'mime_types' => '',
                    
               ),
                
                array(
    
                    'key' => 'twitter_url',
                    'label' => 'twitter Url',
                    'name' => 'twitter_url',
                    'type' => 'url',
                    'placeholder' => '',
                    
                ),
                array(                
                    'key' => 'field_twit',
                    'label' => 'Twitter Image',
                    'name' => 'twitter_image',
                    'type' => 'image',
                    'return_format' => 'url',
                    'preview_size' => 'thumbnail',                
                    'library' => 'all',
                    'min_width' => 0,
                    'min_height' => 0,
                    'min_size' => 0,
                    'max_width' => 0,
                    'max_height' => 0,
                    'max_size' => 0,
                    'mime_types' => '',
                    
               ),
               array(
        
                'key' => 'field_email_url',
                'label' => 'Email Url',
                'name' => 'email_url',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
        
        ),
                array(
                
                    'key' => 'Copied_tooltip',
                    'label' => 'Copied Tooltip',
                    'name' => 'copied_tooltip',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
            
                ),
                array(                
                    'key' => 'field_email',
                    'label' => 'Email Image',
                    'name' => 'email_image',
                    'type' => 'image',
                    'return_format' => 'url',
                    'preview_size' => 'thumbnail',                
                    'library' => 'all',
                    'min_width' => 0,
                    'min_height' => 0,
                    'min_size' => 0,
                    'max_width' => 0,
                    'max_height' => 0,
                    'max_size' => 0,
                    'mime_types' => '',
                    
                ),

                array(                
                    'key' => 'field_rss',
                    'label' => 'RSS Image',
                    'name' => 'rss_image',
                    'type' => 'image',
                    'return_format' => 'url',
                    'preview_size' => 'thumbnail',                
                    'library' => 'all',
                    'min_width' => 0,
                    'min_height' => 0,
                    'min_size' => 0,
                    'max_width' => 0,
                    'max_height' => 0,
                    'max_size' => 0,
                    'mime_types' => '',
                    
                ),
                // array(
    
                //     'key' => 'copy_url',
                //     'label' => 'email Url',
                //     'name' => 'email_url',
                //     'type' => 'url',
                //     'placeholder' => '',
                    
                // ),
                
                array(
                    'key' => 'field_show1',
                    'label' => 'Show More Comments',
                    'type' => 'tab',   
                ),
                
                array(
        
                        'key' => 'field_show',
                        'label' => 'Show More Comments',
                        'name' => 'show_more_field',
                        'type' => 'text',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                        'readonly' => 0,
                        'disabled' => 0,
                            
                
                ),
                array(
        
                    'key' => 'User_loggedin_message',
                    'label' => 'User Must be logged in',
                    'name' => 'user_must_be_login',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
            
                ),
                array(
                    'key' => 'field_review',
                    'label' => 'Review Comment',
                    'type' => 'tab',   
                ),
                array(
        
                    'key' => 'field_ago',
                    'label' => 'Ago Text',
                    'name' => 'ago_text',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
            
            ),
            array(
        
                'key' => 'comment_texts',
                'label' => 'Comment Text',
                'name' => 'comment_text',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
        
            ),
            array(
        
                'key' => 'comments_sec_texts',
                'label' => 'Comments Text',
                'name' => 'comments_sec_text',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
        
            ),
            array(
        
                'key' => 'more_button_texts',
                'label' => 'More Button Text',
                'name' => 'more_button_text',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
        
            ),
            array(
        
                'key' => 'view_texts',
                'label' => 'View Text',
                'name' => 'view_text',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
        
            ),
            array(
        
                'key' => 'table_of_content',
                'label' => 'Table of Content',
                'name' => 'table_of_content_heading',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
        
            ),
          
            

            
            ),


            
        

       
      
       'location' => array (
           array (
               array (
                   'param' => 'options_page',
                   'operator' => '==',
                   'value' => 'acf-options-single-page',
               ),
               
           ),
       ),
   ),
);

acf_add_local_field_group(
    array(
       'key' => 'group_4',
       'title' => 'Single Page',
       'fields' => array (

        
         array(
            'key' => 'field_post',
            'label' => 'Related Article',
            'type' => 'tab',   
        ),
       
 
      array(
         
         'key' => 'field_post2',
         'label' => 'Assign Article',
         'name' => 'assign_article',
         'type' => 'relationship',
         
         'post_type' => 'post',
         
        
         'taxonomy' => '',
         
         
         'filters' => array('search', 'post', ''),
         
        
         'elements' => array(),
         
         'min' => 0,
     
         'max' => 0,
     
         'return_format' => 'object',
         
        ),

        array(
            'key' => 'field_videos',
            'label' => 'Videos Url',
            'type' => 'tab',   
        ),
        array(
    
            'key' => 'field_urlvideos',
            'label' => 'Videos Url',
            'name' => 'videos_url',
            'type' => 'url',
            'placeholder' => '',
            
        ),

        array(
            'key' => 'field_block',
            'label' => 'Custom Block Tab',
            'type' => 'tab',   
        ),
        array(

            'key' => 'custombannerimg',
            'label' => 'Custom Banner Img',
            'name' => 'custom_banner_img',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'thumbnail',                
            'library' => 'all',
            'min_width' => 0,
            'min_height' => 0,
            'min_size' => 0,
            'max_width' => 0,
            'max_height' => 0,
            'max_size' => 0,
            'mime_types' => '',
                
        ),array(

            'key' => 'custombannereditor',
            'label' => 'Custom Banner Editor',
            'name' => 'custom_banner_editor',
            'type' => 'wysiwyg',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        array(

            'key' => 'field_btncta',
            'label' => 'Banner Button Text',
            'name' => 'banner_button_text',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        
        array(
    
            'key' => 'field_bannerctu',
            'label' => 'Banner Button Url',
            'name' => 'banner_button_url',
            'type' => 'url',
            'placeholder' => '',
            
        ),

         
       
        ),
       
       
      
       'location' => array (
           array (
               array (
                   'param' => 'post_type',
                   'operator' => '==',
                   'value' => 'post',
               ),
               
           ),
       ),
   ),
);

acf_add_local_field_group(
    array(
       'key' => 'group_6',
       'title' => 'Login Error Page',
       'fields' => array (
        array(
            'key' => 'field_loginerr1',
            'label' => 'Login Error Page Tab',
            'type' => 'tab',   
        ),
        array(

            'key' => 'field_loginerr1',
            'label' => 'Required',
            'name' => 'required',
            'type' => 'text',
            array(

                'key' => 'field_loginerr1',
                'label' => 'Required',
                'name' => 'required',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
            
        ),

        array(

            'key' => 'field_loginerr1',
            'label' => 'Required',
            'name' => 'required',
            'type' => 'text',
            array(

                'key' => 'field_loginerr1',
                'label' => 'Required',
                'name' => 'required',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
            
        ),

        array(

            'key' => 'field_loginerr2',
            'label' => 'Valid Email Message',
            'name' => 'valid_email_message',
            'type' => 'text',
            array(

                'key' => 'field_loginerr2',
                'label' => 'Valid Email Message',
                'name' => 'valid_email_message',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
            
        ),

        array(

            'key' => 'field_loginerr3',
            'label' => 'Details Not Match',
            'name' => 'details_not_match',
            'type' => 'text',
            array(

                'key' => 'field_loginerr3',
                'label' => 'Details Not Match',
                'name' => 'details_not_match',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
            
        ),

        array(

            'key' => 'field_loginerr4',
            'label' => 'Email already exists',
            'name' => 'email_already_exists',
            'type' => 'text',
            array(

                'key' => 'field_loginerr4',
                'label' => 'Email already exists',
                'name' => 'email_already_exists',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
            
        ),
        array(
            'key' => 'field_loginerr5',
            'label' => 'username already exists',
            'name' => 'username_already_exists',
            'type' => 'text',
            array(

                'key' => 'field_loginerr5',
                'label' => 'username already exists',
                'name' => 'username_already_exists',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
            
        ),
        array(

            'key' => 'field_loginerr6',
            'label' => 'Email-id  does not exist',
            'name' => 'email_not_exist',
            'type' => 'text',
            array(

                'key' => 'field_loginerr6',
                'label' => 'Email-id  does not exist',
                'name' => 'email_not_exist',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
            
        ),
        array(
            'key' => 'field_success',
            'label' => 'Success',
            'type' => 'tab',   
        ),       
        array(

            'key' => 'field_success1',
            'label' => 'Success Message',
            'name' => 'success_message',
            'type' => 'text',
            array(

                'key' => 'field_success1',
                'label' => 'Success Message',
                'name' => 'success_message',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
            
        ),

        array(
            'key' => 'field_thanku1',
            'label' => 'Thank You Message',
            'type' => 'tab',   
        ),       
        array(

            'key' => 'field_thanku2',
            'label' => 'Thank You Message',
            'name' => 'thank_you_message',
            'type' => 'text',
            array(

                'key' => 'field_thanku2',
                'label' => 'Thank You Message',
                'name' => 'thank_you_message',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
            
        ),

        array(

            'key' => 'field_thanku3',
            'label' => 'Thank You Fields',
            'name' => 'thank_you_fields',
            'type' => 'text',
            array(

                'key' => 'field_thanku3',
                'label' => 'Thank You Fields',
                'name' => 'thank_you_fields',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
            
        ),

        array(
            'key' => 'field_subject',
            'label' => 'Subject Tab',
            'type' => 'tab',   
        ),       
        array(

            'key' => 'field_subject1',
            'label' => 'Activate Password Message',
            'name' => 'activate_password_message',
            'type' => 'text',
            array(

                'key' => 'field_subject1',
                'label' => 'Activate Password Message',
                'name' => 'activate_password_message',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
            
        ),
        array(

            'key' => 'field_subject2',
            'label' => 'Reset Password Message',
            'name' => 'reset_password_message',
            'type' => 'text',
            array(

                'key' => 'field_subject2',
                'label' => 'Reset Password Message',
                'name' => 'reset_password_message',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
            
        ),

        array(
            'key' => 'field_yesno1',
            'label' => 'Yes Or No',
            'type' => 'tab',   
        ),       
        array(

            'key' => 'field_yesno2',
            'label' => 'Yes Field',
            'name' => 'yes_field',
            'type' => 'text',
            array(

                'key' => 'field_yesno2',
                'label' => 'Yes Field',
                'name' => 'yes_field',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
            
        ),

        array(

            'key' => 'field_yesno3',
            'label' => 'No Field',
            'name' => 'no_field',
            'type' => 'text',
            array(

                'key' => 'field_yesno3',
                'label' => 'No Field',
                'name' => 'no_field',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
            
        ),
        array(
            'key' => 'field_emailtemp1',
            'label' => 'Email Template',
            'type' => 'tab',   
        ),           
            array(
    
                
                'key' => 'field_emailtemp2',
                'label' => 'Email Template Section',
                'name' => 'email_template_section',
                'type' => 'wysiwyg',
                
                'tabs' => 'all',
                
             
                'toolbar' => 'full',
                
        
                'media_upload' => 1,
                
            ),

            array(
                'key' => 'field_emailtemp22',
                'label' => 'Email Template for Reset Password',
                'type' => 'tab',   
            ),           
                array(
        
                    
                    'key' => 'field_emailtemprp21',
                    'label' => 'Email Template Reset Password',
                    'name' => 'email_template_reset_password',
                    'type' => 'wysiwyg',
                    
                    'tabs' => 'all',
                    
                 
                    'toolbar' => 'full',
                    
            
                    'media_upload' => 1,
                    
                ),

    ),
        
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-login-error-page',
                ),
                
            ),
        ),
   ),
);

acf_add_local_field_group(
    array(
       'key' => 'group_xr',
       'title' => 'XR Page',
       'fields' => array (

        array(
            'key' => 'field_xrmain',
            'label' => 'XR Dtabase Sortby',
            'type' => 'tab',   
        ),
        
        
        array(

            'key' => 'field_sortby',
            'label' => 'Sort By Heading',
            'name' => 'sort_by_heading',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        array(

            'key' => 'field_mp',
            'label' => 'Most Popular Heading',
            'name' => 'most_popular_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        array(

            'key' => 'field_newest',
            'label' => 'Newest Heading',
            'name' => 'newest_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        array(

            'key' => 'field_oldest',
            'label' => 'Oldest Heading',
            'name' => 'oldest_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),

        array(

            'key' => 'all_brands_heading',
            'label' => 'All VR and AR brands',
            'name' => 'all_brands_heading',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),

            
        array(
            'key' => 'field_xr',
            'label' => 'XR Brand',
            'type' => 'tab',   
        ),
  

        array(

            'key' => 'field_xr1',
            'label' => 'Founding year',
            'name' => 'founding_year',
            'type' => 'text',
            array(

                'key' => 'field_xr1',
                'label' => 'Founding year',
                'name' => 'founding_year',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
            
        ),
        array(

            'key' => 'field_xr2',
            'label' => 'Employees Count',
            'name' => 'employees_count',
            'type' => 'text',
            array(

                'key' => 'field_xr2',
                'label' => 'Employees Count',
                'name' => 'employees_count',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
            
        ),
        array(

            'key' => 'field_xr3',
            'label' => 'URL sec',
            'name' => 'url_sec',
            'type' => 'text',
            array(

                'key' => 'field_xr3',
                'label' => 'URL sec',
                'name' => 'url_sec',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
            
        ),
        array(

            'key' => 'field_xr4',
            'label' => 'Locations sec',
            'name' => 'locations_sec',
            'type' => 'text',
            array(

                'key' => 'field_xr4',
                'label' => 'Locations sec',
                'name' => 'locations_sec',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
            
        ),

        array(

            'key' => 'field_xr5',
            'label' => 'Devices Sec For Brand',
            'name' => 'devices_sec_for_brand',
            'type' => 'text',
            array(

                'key' => 'field_xr5',
                'label' => 'Devices Sec For Brand',
                'name' => 'devices_sec_for_brand',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
            
        ),

        array(

            'key' => 'field_xr6',
            'label' => 'Brand Heading Section',
            'name' => 'brand_heading_section',
            'type' => 'text',
            array(

                'key' => 'field_xr6',
                'label' => 'Brand Heading Section',
                'name' => 'brand_heading_section',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
            
        ),
        array(
            'key' => 'field_relxr',
            'label' => 'Comman Headings',
            'type' => 'tab',   
        ),
        
        
        array(

            'key' => 'field_relxrhead',
            'label' => 'Related Article Heading',
            'name' => 'related_article_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        
        array(

            'key' => 'field_relxrprod',
            'label' => 'Related Product Heading',
            'name' => 'related_prod_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        array(

            'key' => 'field_prod_placeholder',
            'label' => 'Search Placeholder Text',
            'name' => 'search_placeholder',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        array(

            'key' => 'field_prod_spec',
            'label' => 'Product Specification Heading',
            'name' => 'specfic_prod_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        array(

            'key' => 'tracking',
            'label' => 'Tracking Heading',
            'name' => 'tracking_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),array(

            'key' => 'software',
            'label' => 'Software Heading',
            'name' => 'Software_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),array(

            'key' => 'Fov_Image',
            'label' => 'Fov Image Heading',
            'name' => 'Fov_Image_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),array(

            'key' => 'general_head',
            'label' => 'General Heading',
            'name' => 'general_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        array(
            
            'key' => 'display_optics',
            'label' => 'Display & Optics',
            'name' => 'display_optics_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        array(

            'key' => 'sound_audio',
            'label' => 'Sound Audio',
            'name' => 'sound_audio_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        array(

            'key' => 'connectivity',
            'label' => 'Connectivity',
            'name' => 'connectivity_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        array(

            'key' => 'system',
            'label' => 'System',
            'name' => 'system_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        array(

            'key' => 'storage',
            'label' => 'Storage',
            'name' => 'storage_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        array(

            'key' => 'battery',
            'label' => 'Battery',
            'name' => 'battery_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        array(
            
            'key' => 'field_show_more',
            'label' => 'Show More Button',
            'name' => 'show_more',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        array(

            'key' => 'field_about_the',
            'label' => 'About The',
            'name' => 'field_about_the',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        array(

            'key' => 'show_more',
            'label' => 'Show More',
            'name' => 'show_more_btn',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        array(

            'key' => 'show_less',
            'label' => 'Show Less',
            'name' => 'show_less',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),

        
    ),
        
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-xr-database-page',
                ),
               
                
            ),
        ),
   ),
);

acf_add_local_field_group(
    array(
       'key' => 'group_xrbrand',
       'title' => 'XR Brand Page',
       'fields' => array (

        array(
            'key' => 'brand_cat',
            'label' => 'Assign Brand Template',
            'type' => 'tab',   
        ),
        array(
            'key' => 'assign_brand_temp',
            'label' => 'Assing For Brand',
            'name' => 'assign_xrbrand',
            'type' => 'checkbox',
            
            'choices' => array(
                'yes'   => 'XR Brand'
            ),
            
            'layout' => 'vertical',
            'allow_custom' => false,
            'save_custom' => false,
            'toggle' => false,
            'return_format' => 'value',
                    
        ),
          
    ),
        
        'location' => array (
            array (
                array (
                    'param' => 'taxonomy',
                    'operator' => '==',
                    'value' => 'databasexr_category',
                ),
               
                
            ),
        ),
   ),
);


acf_add_local_field_group(
    array(
       'key' => 'group_xrsingle',
       'title' => 'XR Single Post',
       'fields' => array (

        array(
            'key' => 'field_xrpost',
            'label' => 'Related Article',
            'type' => 'tab',   
        ),
       
 
      array(
         
         'key' => 'field_postxr',
         'label' => 'Assign Article',
         'name' => 'assignxr_article',
         'type' => 'relationship',
         
         'post_type' => 'post',
         
        
         'taxonomy' => '',
         
         
         'filters' => array('search', 'post', ''),
         
        
         'elements' => array(),
         
         'min' => 0,
     
         'max' => 0,
     
         'return_format' => 'object',
         
        ),
        array(
            'key' => 'field_xrproduct',
            'label' => 'Related Product',
            'type' => 'tab',   
        ),
       
 
      array(
         
         'key' => 'field_productxr',
         'label' => 'Assign Product',
         'name' => 'assignxr_product',
         'type' => 'relationship',
         
         'post_type' => 'database-xr',
         
        
         'taxonomy' => '',
         
         
         'filters' => array(' ', 'post', ''),
         
        
         'elements' => array(),
         
         'min' => 0,
     
         'max' => 0,
     
         'return_format' => 'object',
         
        ),
          
    ),
        
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'database-xr',
                ),
               
                
            ),
        ),
   ),
);

acf_add_local_field_group(
    array(
       'key' => 'group_widgets',
       'title' => 'Widgets Options',
       'fields' => array (

        array(
            'key' => 'widgets_trend_prod',
            'label' => 'Trending Headsets',
            'type' => 'tab',   
        ),

        array(

            'key' => 'trending_headsets_head',
            'label' => 'Trending Headsets',
            'name' => 'trending_headsets_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        array(
         
            'key' => 'field_assign_headsets',
            'label' => 'Assign Trending Headsets',
            'name' => 'field_assign_headsets',
            'type' => 'relationship',
            
            'post_type' => 'database-xr',
            
           
            'taxonomy' => '',
            
            
            'filters' => array(' ', 'post', ''),
            
           
            'elements' => array(),
            
            'min' => 0,
        
            'max' => 0,
        
            'return_format' => 'object',
            
           ),
           array(

            'key' => 'all_headsets_head',
            'label' => 'View All Headsets',
            'name' => 'all_headsets_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
         ),
         array(
    
            'key' => 'field_headset_url',
            'label' => 'All Headset Url',
            'name' => 'headset_url',
            'type' => 'url',
            'placeholder' => '',
            
        ),

           array(
            'key' => 'widgets_new_prod',
            'label' => 'New Products Tab',
            'type' => 'tab',   
          ),

        array(

            'key' => 'new_prod_head',
            'label' => 'New Product Heading',
            'name' => 'new_prod_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        
          array(
            'key' => 'widgets_pop_comparison',
            'label' => 'Popular Comparison Tab',
            'type' => 'tab',   
        ),
        array(

            'key' => 'comparison_head',
            'label' => 'Popular Comparison Heading',
            'name' => 'comarison_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),

          array(
         
            'key' => 'field_popular_comparison',
            'label' => 'Assign Comparisons',
            'name' => 'field_popular_comparison',
            'type' => 'relationship',
            
            'post_type' => 'post',
            
           
            'taxonomy' => array('category:comparisons'),
            
            
            'filters' => array('', 'post', ''),
            
           
            'elements' => array(),
            
            'min' => 0,
        
            'max' => 0,
        
            'return_format' => 'object',
            
           ),
           array(

            'key' => 'all_comparison_text',
            'label' => 'All Comparison Text',
            'name' => 'all_comparison_text',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
         ),
        array(
    
            'key' => 'all_comparison_url',
            'label' => 'All Comparison Url',
            'name' => 'all_comparison_url',
            'type' => 'url',
            'placeholder' => '',
            
        ),
        array(
            'key' => 'widgets_top_sellers',
            'label' => 'Top 10 Sellers Tab',
            'type' => 'tab',   
        ),
        array(

            'key' => 'top_sellers_tab',
            'label' => 'Top 10 Sellers Tab',
            'name' => 'top_sellers_text',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
         ),
         array(
         
            'key' => 'top_sellers',
            'label' => 'Assign Top Sellers',
            'name' => 'assign_sellers',
            'type' => 'relationship',
            
            'post_type' => 'database-xr',
            
           
            'taxonomy' => '',
            
            
            'filters' => array('', 'database-xr', ''),
            
           
            'elements' => array(),
            
            'min' => 0,
        
            'max' => 0,
        
            'return_format' => 'object',
            
           ),

           array(
            'key' => 'widgets_xr_databse',
            'label' => 'XR Database Tab',
            'type' => 'tab',   
        ),
        array(

            'key' => 'xr_database_tab',
            'label' => 'XR Database Tab',
            'name' => 'xr_database_text',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
         ),
         array(
         
            'key' => 'xr_database_assign',
            'label' => 'Assign XR Database',
            'name' => 'assign_xr_db',
            'type' => 'relationship',
            
            'post_type' => 'database-xr',
            
           
            'taxonomy' => '',
            
            
            'filters' => array('', 'database-xr', ''),
            
           
            'elements' => array(),
            
            'min' => 0,
        
            'max' => 0,
        
            'return_format' => 'object',
            
           ),
           array(

            'key' => 'visit_xr_text',
            'label' => 'Visit XR Database',
            'name' => 'vist_xr_button',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
         ),
         array(
    
            'key' => 'visit_xr_url',
            'label' => 'Visit XR Database Url',
            'name' => 'visit_xr_button_url',
            'type' => 'url',
            'placeholder' => '',
            
        ),
           array(
            'key' => 'widgets_reviews',
            'label' => 'Latest Reviews Tab',
            'type' => 'tab',   
        ),
        array(

            'key' => 'reviews_head',
            'label' => 'Latest Reviews Heading',
            'name' => 'latest_reviews_head',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
         ),
         array(
         
            'key' => 'reviews_assign',
            'label' => 'Assign Latest Reviews',
            'name' => 'assign_latest_reviews',
            'type' => 'relationship',
            
           'post_type' => 'post',
            
           
            'taxonomy' => array('category:reviews'),
            
            
            'filters' => array('', 'post', ''),
            
           
            'elements' => array(),
            
            'min' => 0,
        
            'max' => 0,
        
            'return_format' => 'object',
            
           ),
           array(

            'key' => 'visit_reviews_text',
            'label' => 'View All Reviews Text',
            'name' => 'vist_reviews_text',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
         ),
         array(
    
            'key' => 'visit_reviews_url',
            'label' => 'View All Reviews Url',
            'name' => 'vist_reviews_url',
            'type' => 'url',
            'placeholder' => '',
            
        ),
        array(
            'key' => 'discord_widgets',
            'label' => 'Discord Communtiy Tab',
            'type' => 'tab',   
        ),
        array(

            'key' => 'discord_svg',
            'label' => 'Discord Icon Svg',
            'name' => 'discord_icon_svg',
            'type' => 'textarea',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
         ),
         array(

            'key' => 'discord_text',
            'label' => 'Discord Text',
            'name' => 'discord_text',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
         ),
         array(

            'key' => 'join_our_community',
            'label' => 'Join Our Community',
            'name' => 'join_our_community',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
         ),
         array(
    
            'key' => 'join_our_community_url',
            'label' => 'Join Our Community Url',
            'name' => 'join_our_community_button_url',
            'type' => 'url',
            'placeholder' => '',
            
        ),
        
          
    ),
        
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-widgets-option',
                ),
               
                
            ),
        ),
   ),
);

//About Us Page
acf_add_local_field_group(
    array(
       'key' => 'group_aboutus',
       'title' => 'AboutUs Page',
       'fields' => array (

        array(
            'key' => 'contact_btn',
            'label' => 'Contact Button',
            'type' => 'tab',   
        ),

        array(

            'key' => 'contact_btn_txt',
            'label' => 'Contact Button Txt',
            'name' => 'contact_btn_txt',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        array(
    
            'key' => 'contact_btn_url',
            'label' => 'Contact Button Url',
            'name' => 'contact_btn_url',
            'type' => 'url',
            'placeholder' => '',
            
        ),
       

           array(
            'key' => 'keys_repeater_tab',
            'label' => 'Keys Repeater',
            'type' => 'tab',   
          ),

          array(
            'key' => 'keys_repeater',
            'label' => 'Keys Repeater',
            'name' => 'keys_repeater',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
            ),
            'collapsed' => '',
            'min' => 0,
            'max' => 0,
            'layout' => 'table',
            'button_label' => '',
            'sub_fields' => array(                                           
                array(

                    'key' => 'keys_head_txt',
                    'label' => 'Keys Value',
                    'name' => 'keys_head_txt',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                array(

                    'key' => 'keys_val_txt',
                    'label' => 'Keys text',
                    'name' => 'keys_val_txt',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
               ),
            ),
            array(
                'key' => 'keys_story_tab',
                'label' => 'Founding Story tab',
                'type' => 'tab',   
              ),
            array(                
                'key' => 'founding_image',
                'label' => 'Founding Story Image',
                'name' => 'founding_image',
                'type' => 'image',
                'return_format' => 'url',
                'preview_size' => 'thumbnail',                
                'library' => 'all',
                'min_width' => 0,
                'min_height' => 0,
                'min_size' => 0,
                'max_width' => 0,
                'max_height' => 0,
                'max_size' => 0,
                'mime_types' => '',
                
           ),
           array(

            'key' => 'founding_txt',
            'label' => 'Founding Heading',
            'name' => 'founding_txt',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
         ),
         array(

            'key' => 'foundingeditor',
            'label' => 'Founding Content',
            'name' => 'foundingeditor',
            'type' => 'wysiwyg',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
        array(
            'key' => 'dynamic_platform_tab',
            'label' => 'Dynamic Platform',
            'type' => 'tab',   
          ),
          array(

            'key' => 'section_head_txt',
            'label' => 'Section heading',
            'name' => 'section_head_txt',
            'type' => 'text',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
        ),
          array(

            'key' => 'section_textarea',
            'label' => 'Section Textarea',
            'name' => 'section_textarea',
            'type' => 'textarea',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
            'disabled' => 0,
                
         ),
         array(                
            'key' => 'section_image',
            'label' => 'Section Image',
            'name' => 'section_image',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'thumbnail',                
            'library' => 'all',
            'min_width' => 0,
            'min_height' => 0,
            'min_size' => 0,
            'max_width' => 0,
            'max_height' => 0,
            'max_size' => 0,
            'mime_types' => '',
            
       ),
          array(
            'key' => 'platform_contents_repeater',
            'label' => 'Platform Content Repeater',
            'name' => 'platform_content_repeater',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
            ),
            'collapsed' => '',
            'min' => 0,
            'max' => 0,
            'layout' => 'table',
            'button_label' => '',
            'sub_fields' => array(                                           
                array(

                    'key' => 'content_head_txt',
                    'label' => 'Content heading',
                    'name' => 'content_head_txt',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                array(                
                    'key' => 'content_image',
                    'label' => 'Content Image',
                    'name' => 'content_image',
                    'type' => 'image',
                    'return_format' => 'url',
                    'preview_size' => 'thumbnail',                
                    'library' => 'all',
                    'min_width' => 0,
                    'min_height' => 0,
                    'min_size' => 0,
                    'max_width' => 0,
                    'max_height' => 0,
                    'max_size' => 0,
                    'mime_types' => '',
                    
               ),
               array(

                'key' => 'content_textarea',
                'label' => 'Content Textarea',
                'name' => 'content_textarea',
                'type' => 'textarea',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
             ),
               ),
            ),
            array(
                'key' => 'ourteam_tab',
                'label' => 'Our Team tab',
                'type' => 'tab',   
              ),
              array(

                'key' => 'ourteam_head_txt',
                'label' => 'Our Team heading',
                'name' => 'ourteam_head_txt',
                'type' => 'text',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
            ),
              array(
    
                'key' => 'ourteam_textarea',
                'label' => 'Our Team Textarea',
                'name' => 'ourteam_textarea',
                'type' => 'textarea',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
                    
             ),
             array(
                'key' => 'ourteam_repeater',
                'label' => 'Our Team Repeater',
                'name' => 'ourteam_repeater',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                      'width' => '',
                      'class' => '',
                      'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => '',
                'sub_fields' => array(                                           
                    array(
    
                        'key' => 'team_name',
                        'label' => 'Team Name',
                        'name' => 'team_name',
                        'type' => 'text',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                        'readonly' => 0,
                        'disabled' => 0,
                            
                    ),
                    array(
    
                        'key' => 'team_position',
                        'label' => 'Team Position',
                        'name' => 'team_position',
                        'type' => 'text',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                        'readonly' => 0,
                        'disabled' => 0,
                            
                    ),
                    array(                
                        'key' => 'team_image',
                        'label' => 'Team Image',
                        'name' => 'team_image',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'thumbnail',                
                        'library' => 'all',
                        'min_width' => 0,
                        'min_height' => 0,
                        'min_size' => 0,
                        'max_width' => 0,
                        'max_height' => 0,
                        'max_size' => 0,
                        'mime_types' => '',
                        
                   ),
                   array(
    
                    'key' => 'team_linkedin',
                    'label' => 'Team Linkedin',
                    'name' => 'team_linkedin',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                array(
    
                    'key' => 'team_linkedin_url',
                    'label' => 'Team Linkedin Url',
                    'name' => 'team_linkedin_url',
                    'type' => 'url',
                    'placeholder' => '',
                    
                ),   
                   ),
                ),
                array(
                    'key' => 'contact_tab',
                    'label' => 'Lets Contact tab',
                    'type' => 'tab',   
                  ),
                  array(
    
                    'key' => 'lets_connect_head',
                    'label' => 'Lets Connect Head',
                    'name' => 'lets_connect_head',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                array(
    
                    'key' => 'lets_connect_textarea',
                    'label' => 'Lets Connect Textarea',
                    'name' => 'lets_connect_textarea',
                    'type' => 'textarea',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                 ),
                 array(
    
                    'key' => 'privacy_text',
                    'label' => 'Privacy Text',
                    'name' => 'privacy_text',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                array(
    
                    'key' => 'privacy_policy',
                    'label' => 'Privacy Policy Text',
                    'name' => 'privacy_policy',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
                array(
    
                    'key' => 'privacy_policy_url',
                    'label' => 'Privacy Policy Url',
                    'name' => 'privacy_policy_url',
                    'type' => 'text',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                        
                ),
      
          
    ),
        
        'location' => array (
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-about-us.php',
                ),
               
                
            ),
        ),
   ),
);

}


add_action('acf/init', 'my_acf_add_local_field_groups');
