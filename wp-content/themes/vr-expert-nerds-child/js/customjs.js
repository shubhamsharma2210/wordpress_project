/*
jQuery(document).ready(function () {
  jQuery.getScript("../js/owl.carousel.min.js", function (data) {
  });
});
*/



jQuery(window).load(function() {

  // jQuery(".tax-databasexr_category .home-icon ul li:nth-child(2) a[href]").attr("href", "https://vrx.vr-expert.com/xr-database/");

 jQuery("button[role=presentation]").each(function(){
   jQuery("button[role=presentation]").attr("aria-label","cst-owl-button");
 });
});


jQuery(document).ready(function(){



 jQuery(".header-btn a").on("click", function () {
   jQuery(".right-search").toggleClass("show");
   jQuery("body").addClass("overflow-active");
   return false;
 });
 jQuery(".srv-close svg").on("click", function () {
   jQuery(".right-search").toggleClass("show");
   jQuery("body").removeClass("overflow-active");
   return false;
 });

 jQuery(document).on('click', function(event) {
 if (! jQuery(event.target).closest('.right-search').length) {
   jQuery('.right-search ').removeClass('show');
   jQuery('body ').removeClass('overflow-active');
 }
});



//  jQuery(".ProductsFaq .ProductsQ.active").next().slideDown();
//  jQuery(".ProductsFaq .ProductsQ").on("click", function() {
//      if (jQuery(this).hasClass('active')) {
//          jQuery(this).removeClass("active").next().slideUp();
//      } else {
//          jQuery(".ProductsFaq .ProductsQ.active").removeClass("active").next(".ProductsAns").slideUp();
//          jQuery(this).addClass('active').next('.ProductsAns').slideDown();
//      };

//  });

var fullText = jQuery(".showmoreTxt").text();
var showChar = 200;
//var ellipsesText = "...";
if (fullText.length > showChar) {
 var showText = fullText.substr(0, showChar);
 var hideText = fullText.substr(showChar);
 var html = showText + '<span class="moreText">' + hideText + '</span>';
 jQuery(".showmoreTxt").html(html);
 jQuery(".show-more").on("click", function(e) {
   e.preventDefault();
   jQuery(".moreText").toggle();
   
   // if (jQuery(".UsesBox").text() === "Show More") {
   //   jQuery(".UsesBox").text("Show Less");
   // } else {
   //   jQuery(".UsesBox").text("Show More");
   // }
 });
// jQuery(".moreText").hide();
}else{
 jQuery(".show-more").hide();
}


//  jQuery('.showmoreTxt').each(function() {
//   var paraText = jQuery(this).html();
//   if (paraText.length > 150) {
//     jQuery('.UsesBox').addClass('more150');
//   }else if(paraText.length < 150){
//     jQuery('.UsesBox').removeClass('more150');
//   }
// });


jQuery(document).click(function() {
 var obj = jQuery("#Inputarticle");
 if (!obj.is(event.target) && !obj.has(event.target).length) {
    jQuery(".e-search").hide();
    jQuery('#Inputarticle').val('');
 }
 else {
 }
});



jQuery(".PodcastsUl .morelast").on("click", function() {
 jQuery(this).toggleClass('backG');
 jQuery(".PodcastsUl .morelast .sub-menu").toggleClass( 'moreChild');
});

 // jQuery(".searchButton").on("click", function() {
 //   var value = jQuery(this).val().toLowerCase();
 //   jQuery(".usSearch .flex-w").filter(function() {
 //     jQuery(this).toggle(jQuery(this).text().toLowerCase().indexOf(value) > -1)
 //   });
 // });
 
 jQuery(".comment-list ul.children").each(function(){
   jQuery(".comment-list ul.children").prev().addClass('haveReplay');
 });

 jQuery("button[role=presentation]").each(function(){
   jQuery("button[role=presentation]").attr("aria-label","cst-owl-button");
 });
 
 // jQuery(document).ajaxStart(function () {	
 // 	jQuery("#wait").css("display", "block");	
 // 	});	
 // jQuery(document).ajaxComplete(function () {	
 // 	jQuery("#wait").css("display", "none");	
 // });
 jQuery('#signup-form').submit(function (e) {
   e.preventDefault();
   jQuery('.error').text('');
   var email = jQuery('#email_add').val();
   var count = 0;
   var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
   remove_tooltip();
   if (!filter.test(email) && email != '') {
     var valid_email_message = wordpressErrorMessage.valid_email_message;
     jQuery('#email_add').siblings('span.tooltip').show();
     jQuery('#email_add').siblings('span.tooltip').find('span').text(valid_email_message);    
     jQuery('#email_add').css('border-color','red');    
     jQuery('#email_add').focus();
     return false;
   }
   jQuery('#signup-form .field-group input').each(function(){
     var required = wordpressErrorMessage.required_msg; 
     if(jQuery(this).val() == ''){
       jQuery(this).siblings('span.tooltip').show();  
       jQuery(this).css('border-color','red'); 
       jQuery(this).siblings('span.tooltip').find('span').text(required); 
       jQuery(this).focus();
       count++;
     }
     if(count > 0){
       return false;
     }
   });
   
   if(count == 0){
     var datastr = 'action=email_signup_verify&email=' + email;	
     var ajax_url = jQuery('#url').val();
     var ajaxscript = {ajax_url:ajax_url};
     
     jQuery.ajax({         
       url: ajaxscript.ajax_url,   
       method: 'POST',          
       data: encodeURI(datastr),    
       success: function (result) { 
       var result = JSON.parse(result);
                 
         if (result.status == 'success') {
           jQuery('#success_msg').html(result.message);
           jQuery("#signup-form").trigger("reset");
           jQuery("#signup-form").hide();
           jQuery('#success_msg').show();
         } else {   
      
           jQuery('#email_add').siblings('span.tooltip').show(); 
           jQuery('#email_add').css('border-color','red');  
           jQuery('#email_add').siblings('span.tooltip').find('span').html(result.message);
           jQuery('#email_add').focus();
         }          
         
       },      
     });
   }
 });
 function remove_tooltip(){
   jQuery('#signup-form .field-group input').keyup(function(){
     jQuery(this).parent('.field-group').find('span.tooltip').hide();
     jQuery(this).css('border-color','');
   });
   jQuery('#signup-form .field-group select').on('change',function(){
     jQuery(this).parent('.custom-select').find('span.tooltip').hide();
     jQuery(this).css('border-color','');
   });
 }


 jQuery('.forgot-link').on('click', function(){	
   jQuery('.cmn_errr.tooltip').hide();
   jQuery('input').css('border-color','');
   jQuery('#login-form').hide();	
   jQuery('#forgot-password-form').show();	
 });	
 jQuery('.sign-up-link').on('click', function(){	
   jQuery('.cmn_errr.tooltip').hide();
   jQuery('input').css('border-color','');
   jQuery('#login-form').show();	
jQuery('.regLogin-link').show();
   jQuery('#forgot-password-form').hide();	
 });

 jQuery('#login-form').submit(function(e){	
     e.preventDefault();   
     var email = jQuery('#username').val();  
     var password = jQuery('#password').val();	
      
     var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;   
     jQuery('.error').text('');    
     jQuery('.cmn_errr.tooltip').hide();
     jQuery('input').css('border-color','');
     remove_tooltip();
     if (email == '') { 
       var required = wordpressErrorMessage.required_msg; 
       jQuery('.email.tooltip').show();
       jQuery('.email.tooltip > span').text(required);    
       jQuery('#username').css('border-color','red');    
       jQuery('#username').focus();         
       return false;    
     }      
     if (!filter.test(email)) {
       var valid_email_message = wordpressErrorMessage.valid_email_message;
       jQuery('.email.tooltip').show();
       jQuery('.email.tooltip > span').text(valid_email_message);    
       jQuery('#username').css('border-color','red');    
       jQuery('#username').focus();      
       jQuery('#username').val('');        
       return false;       
     }      
     if (password == '') { 
       var required = wordpressErrorMessage.required_msg;    
       jQuery('.pass.tooltip').show();
       jQuery('.pass.tooltip > span').text(required);    
       jQuery('#password').css('border-color','red');    
       jQuery('#password').focus();
         
       return false;       
     }   
     
     /* if (email == '' && password == '') {    
       jQuery('#email_id').text('this is required field');         
       jQuery('#password_error').text('this is required field'); 
       jQuery('#email').focus();  
       return false; 
     } */
     
     var datastr = 'action=user_login&email=' + email + '&password=' + password;	
     
      var ajaxscript = jQuery('#url').val();  
     jQuery.ajax({         
       url: ajaxscript,   
       method: 'POST',          
       data: encodeURI(datastr),    
       success: function (result) { 
     
      
         var result = JSON.parse(result);		
         console.log(result);           
     if (result.status == 'error_email') { 
       var details_not_match = wordpressErrorMessage.details_not_match;    
           jQuery('.email.tooltip').show();
           jQuery('#username,#password').css('border-color','red');
           jQuery('.email.tooltip > span').text(details_not_match);  
           jQuery('#username').focus();					
           jQuery('#username,#password').val('');	
           remove_tooltip();
           /* jQuery('#email_id').text(result.message);     
           jQuery('#email').focus();                
           jQuery('#email').val('');  */         
         } else if (result.status == 'error') {
           var details_not_match = wordpressErrorMessage.details_not_match;  
           jQuery('.email.tooltip').show();
           jQuery('#username,#password').css('border-color','red');
           jQuery('.email.tooltip > span').text(details_not_match);  
           jQuery('#username').focus(); 
           jQuery('#username,#password').val('');
           remove_tooltip();
           /* jQuery('#password_error').text("this password doesn't match"); 
           jQuery('#password').focus();          
           jQuery('#password').val('');  */
         } else{   
           if(window.location.href == 'https://vrx.vr-expert.com/fr/'){
             window.location.href = document.location.origin+'fr';
           }else if(window.location.href == 'https://vrx.vr-expert.com/de/'){
             window.location.href = document.location.origin+'de';
           }
          window.location.href = document.location.origin;     
         }          
       },      
     });
   });
   jQuery('#forgot-password-form').submit(function(e){	
     e.preventDefault();
     var email = jQuery('#email_pass').val();
     var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;    
     jQuery('.error').text('');  
     remove_tooltip();
     if (email == '') {     
       var required = wordpressErrorMessage.required_msg;
       jQuery('.frgt-eml.tooltip').show();
       jQuery('.frgt-eml.tooltip > span').text(required);    
       jQuery('#email_pass').css('border-color','red');    
       jQuery('#email_pass').focus();
       return false; 
     }   
     if (!filter.test(email)) {   
       var valid_email_message = wordpressErrorMessage.valid_email_message;   			
       jQuery('.frgt-eml.tooltip').show();
       jQuery('.frgt-eml.tooltip > span').text(valid_email_message);    
       jQuery('#email_pass').css('border-color','red');    
       jQuery('#email_pass').focus();
       jQuery('#email_pass').val(''); 
       return false;    
     }       
     var datastr = 'action=user_forgotpass&email=' + email;	
     var ajaxscript = jQuery('#url').val();
     jQuery.ajax({      
     url: ajaxscript, 
     method: 'POST',   
     data: encodeURI(datastr),  
     success: function (result) {       
       var result = JSON.parse(result);		
       console.log(result);      
       if (result.status == 'error_email') {  
         jQuery('.frgt-eml.tooltip').show();
         jQuery('.frgt-eml.tooltip > span').text(result.message);    
         jQuery('#email_pass').css('border-color','red');    
         jQuery('#email_pass').focus();
         remove_tooltip();
       } else {     
         jQuery('#email_id_pass').text(''); 
         jQuery('#email_pass').val('');  
         jQuery('#mail_sent_reset').text(result.message); 
         jQuery('form#forgot-password-form').hide();
         jQuery('#mail_sent_reset').removeClass('hidden');
         }        
       }   
     });
   });
});


jQuery(document).ready(function() {
jQuery(".loginActive").on('click', function(){	
jQuery(".registerActive").removeClass('LogActive');
jQuery(".Login-V2").hide();
jQuery(".Login-V1").show();
if (jQuery(this).hasClass('LogActive')) {
// jQuery(this).removeClass("active").next().slideUp();
} else { 
 jQuery(this).addClass('LogActive');
}
});
jQuery(".registerActive").on('click', function(){	
jQuery(".loginActive").removeClass('LogActive');
jQuery(".Login-V1").hide();
jQuery(".Login-V2").show();
if (jQuery(this).hasClass('LogActive')) {
 // jQuery(this).removeClass("active").next().slideUp();
} else {
  
  jQuery(this).addClass('LogActive');
}
});

jQuery('.forgot-link').on('click', function(){	
jQuery('.regLogin-link').hide();
});
});




jQuery(document).ready(function() {
 var url_ajax = jQuery("#url").val();
 /* custom select */ 
 jQuery('.select-dropdown__button').on('click', function(){
   jQuery('.select-dropdown__list').toggleClass('active');
 });
 jQuery('.select-dropdown__list-item').on('click', function(){
   jQuery('.select-dropdown__list-item').removeClass('active');
   jQuery(this).addClass('active');
   var itemValue = jQuery(this).data('value');
   jQuery('#sortBy').val(itemValue);
   
   jQuery('.select-dropdown__button span').text( jQuery(this).text()).parent().attr('data-value', itemValue);
   jQuery('.select-dropdown__list').toggleClass('active');

   if(jQuery('.select-dropdown__list').hasClass('cat_sortby')){
     var sortcatbybest = jQuery('#sortBy').val();
     var termsid = jQuery('#sortBy').attr('data-id');
     var paged = jQuery("#paged").val();
     
     jQuery.ajax({
      url:url_ajax,
      type: 'post',
      data: { 
          action: 'filter_catsort',
          sortcatbybest: sortcatbybest,
          termsid: termsid,
          paged: 1,
      },
      beforeSend: function () {
      jQuery(".one-loder").show();
      },
          success: function(data) {
           
              jQuery(".one-loder").hide();
              
              jQuery('#sortbycategory').html( data );
              jQuery("#paged").val('1');
              var yourheight = 0;
             jQuery('.page-template-template-xr-database .review-alltext .All-data').each(function() {
               yourheight < jQuery(this).outerHeight() && (yourheight = jQuery(this).outerHeight())
             }),
             jQuery('.page-template-template-xr-database .review-alltext .All-data').css('min-height', yourheight);

             
          }
      });

   }else if(jQuery('.select-dropdown__list').hasClass('search_class')){
     var sortbybest = jQuery('#sortBy').val();
     var termsid = jQuery('#sortBy').attr('data-id');
     var paged = jQuery("#paged").val();
     var search_value = jQuery("#search_query").val();
  
     
     jQuery.ajax({
      url:url_ajax,
      type: 'post',
      data: { 
          action: 'search_fetch',
          sortbybest: sortbybest,
          search_value: search_value,
          paged: 1,
      },
      beforeSend: function () {
      jQuery(".one-loder").show();
      },
          success: function(data) {
           
              jQuery(".one-loder").hide();
              
              jQuery('#sortbyfilter').html( data );
              jQuery("#paged").val('1');
             
          }
      });
 
   }else if(jQuery('.select-dropdown__list').hasClass('comment_sort')){
     var sortbybest = jQuery('#sortBy').val();
     var pageid = jQuery('#sortBy').attr('data-id');
     var paged = jQuery("#paged").val();
     
    
     
     
     jQuery.ajax({
      url:url_ajax,
      type: 'post',
      data: { 
          action: 'comment_filter',
          sortbybest: sortbybest,
          pageid : pageid,
          paged: 1,
      },
      beforeSend: function () {
      jQuery(".one-loder").show();
      },
          success: function(data) {
           //  var filterddata = jQuery('#filter_comment').html( data );
              jQuery(".one-loder").hide();
            jQuery('.commentList').html( data );
              jQuery("#paged").val('1');
             
          }
      });
 
   }else{
     var sortbybest = jQuery('#sortBy').val();
     var termid = jQuery('#sortBy').attr('data-id');
     var paged = jQuery("#paged").val();
     
     jQuery.ajax({
      url:url_ajax,
      type: 'post',
      data: { 
          action: 'filter_sortby',
          sortbybest: sortbybest,
          termid: termid,
          paged: 1,
      },
      beforeSend: function () {
      jQuery(".one-loder").show();
      },
          success: function(data) {
           
              jQuery(".one-loder").hide();
              
              jQuery('#sortbyfilter').html( data );
              jQuery("#paged").val('1');
             
          }
      });
   }
   
   
 
   
 });


 
 // search text 
 jQuery("#search_field").on("keyup", function() {
   var value = jQuery(this).val().toLowerCase();
 
    
   jQuery(".vrx-data-group").filter(function() {
     jQuery(this).toggle(jQuery(this).text().toLowerCase().indexOf(value) > -1)
      // jQuery('.ProductsFaq').addClass("active");
      jQuery('.vrx-data-item-label').css("display" , " block");
     });
     if(value == ''){
       // jQuery('.ProductsFaq').addClass("active");
       // jQuery('.ProductsAns').css("display" , " none");

   }
   jQuery(".ProductsFaq").filter(function() {
     jQuery(this).toggle(jQuery(this).text().toLowerCase().indexOf(value) > -1)
      // jQuery('.ProductsFaq').addClass("active");
      jQuery('.ProductsAns').css("display" , " block");
    
   });
   if(value == ''){
     // jQuery('.ProductsFaq').addClass("active");
     // jQuery('.ProductsAns').css("display" , " none");

 }

 });
 
 jQuery(".searchButton").click(function(){
   jQuery.each(jQuery(".vrx-data-group"), function() {

       if(jQuery(this).text().toLowerCase().indexOf(jQuery('#search_field').val().toLowerCase()) === -1){
        // return false; 
        jQuery(this).hide();
       // jQuery('.ProductsFaq').hide();
       }
         //  
       else{
         jQuery(this).show();   

       }
                        
   });
});
jQuery("#search_field").keyup(function () {

 if(jQuery('#search_field').val() !=''){
 }
 else{
   jQuery('.searchButton').click(); 
 
 }
});
 
 
 
 if (jQuery(window).width() < 767) {


   jQuery('.mbArView .HeadingH3-25-bold').on('click', function(){
     jQuery(this).toggleClass('active');
     //jQuery('.mbActive').toggleClass('active');
     jQuery('.mbActive').slideToggle();
     
   });


jQuery(".cstm-mb-more a[href$='#']").attr("href", "javascript:void(0)");
jQuery(".cstm-mb-more").on('click', function(){
 jQuery(this).toggleClass('morecl');
 jQuery(".cstm-mb-more .sub-menu").toggleClass('active');

});


 }
 
 
 
 // show more 
 jQuery(".show-more").click(function () {
   if(jQuery(".Ktext").hasClass("show-more-height")) {
     jQuery(".Ktext").toggleClass("show-more-height", 500, "easeOutSine");
     var showless = wordpressErrorMessage.show_less;
     jQuery(this).text(showless);
     jQuery(this).parent(".UsesBox").toggleClass('UsesBox-active');
   } else {
     jQuery(".Ktext").toggleClass("show-more-height", 500, "easeOutSine");
     var showmore = wordpressErrorMessage.show_more_btn;
     jQuery(this).text(showmore);
     jQuery(this).parent(".UsesBox").toggleClass('UsesBox-active');
   }
 });
 // show menu 
   jQuery('.users-hamburger').on('click', function() { 
     jQuery(this).toggleClass("trueclose");
     jQuery('.mb-container-menu ').toggleClass('menu-active');
     jQuery("html, body").toggleClass('overflow-active');
 
 });
 /* js XR Index slider */
            jQuery("#Xr-carousel, #Index-Review-carousel, #Index-guide-carousel").owlCarousel({
             autoplay: false,
             loop: false,
             margin: 45,
             items: 3,
             dots: false,
             responsiveClass: true,
            navText: ['<svg xmlns="http://www.w3.org/2000/svg" width="13.503" height="23.619" viewBox="0 0 13.503 23.619"> <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z" transform="translate(-11.251 -6.194)" fill="#000"/> </svg>','<svg xmlns="http://www.w3.org/2000/svg" width="13.503" height="23.619" viewBox="0 0 13.503 23.619"> <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z" transform="translate(24.754 29.813) rotate(180)" fill="#000"/> </svg>'],
             nav: true,
             responsive: {
                 0: {
                     items: 1.51,
                     loop: true
                   
                 },
         
                 767: {
                   items: 3,
                   margin: 30,
                   loop: false  
                     
                 },
                 1024: {
                   items: 3
                 }
             }
         });
 
  /* js XR  4 Index slider */
          jQuery("#listencards").owlCarousel({
           autoplay: false,
           loop: true, 
           margin: 61,
           items: 4,
           dots: false,
           responsiveClass: true,
          navText: ['<svg xmlns="http://www.w3.org/2000/svg" width="13.503" height="23.619" viewBox="0 0 13.503 23.619"> <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z" transform="translate(-11.251 -6.194)" fill="#000"/> </svg>','<svg xmlns="http://www.w3.org/2000/svg" width="13.503" height="23.619" viewBox="0 0 13.503 23.619"> <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z" transform="translate(24.754 29.813) rotate(180)" fill="#000"/> </svg>'],
           nav: true,
           responsive: {
               0: {
                 items: 1.28,
                 margin: 62
              
                 
               },
       
               767: {
                 items: 3,
                 margin: 30,
                 nav: false,
                 loop: false 
                   
               },
               1024: {
                 items: 4
               }
           }
       });
 // products
       jQuery(".moreTarget").owlCarousel({
         autoplay: false,
         loop: false, 
         margin: 61,
         items: 4,
         dots: false,
         responsiveClass: true,
        navText: ['<svg xmlns="http://www.w3.org/2000/svg" width="13.503" height="23.619" viewBox="0 0 13.503 23.619"> <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z" transform="translate(-11.251 -6.194)" fill="#000" /> </svg>','<svg xmlns="http://www.w3.org/2000/svg" width="13.503" height="23.619" viewBox="0 0 13.503 23.619"> <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z" transform="translate(24.754 29.813) rotate(180)" fill="#000"/> </svg>'],
         nav: true,
         responsive: {
             0: {
               items: 1.28,
               dots: true,
               nav: false,
               margin: 62
             },
     
             767: {
               items: 2,
               margin: 30,
               loop: false 
                 
             },
             1024: {
               items: 4
             }
         }
     });
 
  /* js XR  4 Index slider */
        jQuery(".twohalf").owlCarousel({
         autoplay: false,
         loop: true, 
         margin: 84,
         items: 2.71,
         dots: false,
         responsiveClass: true,
        navText: ['<svg xmlns="http://www.w3.org/2000/svg" width="13.503" height="23.619" viewBox="0 0 13.503 23.619"> <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z" transform="translate(-11.251 -6.194)"fill="#000" /> </svg>','<svg xmlns="http://www.w3.org/2000/svg" width="13.503" height="23.619" viewBox="0 0 13.503 23.619"> <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z" transform="translate(24.754 29.813) rotate(180)" fill="#000"/> </svg>'],
         nav: true,
         responsive: {
             0: {
               items: 1.28,
               dots: true,
               nav: false,
               margin: 52,
             },
     
             767: {
               items: 2,
               margin: 30,
               loop: false 
                 
             },
             1024: {
               items: 2.71
             }
         }
     });
         
     
 
     /* js Most popular videos  */
     jQuery(".m-most-Vid").owlCarousel({
       autoplay: false,
       loop: true, 
       margin: 84,
       items: 2.71,
       dots: true,
       responsiveClass: true,
      navText: ['<svg xmlns="http://www.w3.org/2000/svg" width="13.503" height="23.619" viewBox="0 0 13.503 23.619"> <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z" transform="translate(-11.251 -6.194)"  fill="#fff"/> </svg>','<svg xmlns="http://www.w3.org/2000/svg" width="13.503" height="23.619" viewBox="0 0 13.503 23.619"> <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z" transform="translate(24.754 29.813) rotate(180)" fill="#fff"/> </svg>'],
       nav: true,
       responsive: {
           0: {
             items: 1.28,
             nav: false,
             margin: 52,
           },
   
           767: {
             items: 2,
             margin: 30,
             loop: false 
               
           },
           1024: {
             items: 2.71
           }
       }
   });
 
 
 
  // EQUAL HEIGHT 


  var yourheight = 0;
  jQuery('.page-template-template-xr-database .review-alltext .All-data').each(function() {
    yourheight < jQuery(this).outerHeight() && (yourheight = jQuery(this).outerHeight())
  }),
  jQuery('.page-template-template-xr-database .review-alltext .All-data').css('min-height', yourheight);





  var yourheight = 0;
  jQuery('.buyers-guidesec p').each(function() {
    yourheight < jQuery(this).outerHeight() && (yourheight = jQuery(this).outerHeight())
  }),
  jQuery('.buyers-guidesec p').css('min-height', yourheight);

            var yourheight = 0;
            jQuery('.Blog-desc h3').each(function() {
              yourheight < jQuery(this).outerHeight() && (yourheight = jQuery(this).outerHeight())
            }),
            jQuery('.Blog-desc h3').css('min-height', yourheight);
 
            var yourheight = 0;
            jQuery('.topmost-card .listen-ul h3').each(function() {
              yourheight < jQuery(this).outerHeight() && (yourheight = jQuery(this).outerHeight())
            }),
            jQuery('.topmost-card .listen-ul h3').css('min-height', yourheight);
 
           var yourheight = 0;
            jQuery('.listencard-w').each(function() {
              yourheight < jQuery(this).outerHeight() && (yourheight = jQuery(this).outerHeight())
            }),
            jQuery('.listencard-w').css('min-height', yourheight);
 
         /*  var yourheight = 0;
            jQuery('.with-videos .listencard-w').each(function() {
              yourheight < jQuery(this).outerHeight() && (yourheight = jQuery(this).outerHeight())
            }),
            jQuery('.with-videos .listencard-w').css('min-height', yourheight);
         */
 //* mobile load 
            if (jQuery(window).width() < 767) {
             jQuery("#KnowlegeBase").owlCarousel({
               autoplay: true,
               loop: true,
               items: 1.28,
               margin: 62,
               dots: false,
               nav: true,
               responsiveClass: true,
               navText: ['<svg xmlns="http://www.w3.org/2000/svg" width="13.503" height="23.619" viewBox="0 0 13.503 23.619"> <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z" transform="translate(-11.251 -6.194)" fill="#fff"/> </svg>','<svg xmlns="http://www.w3.org/2000/svg" width="13.503" height="23.619" viewBox="0 0 13.503 23.619"> <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z" transform="translate(24.754 29.813) rotate(180)" fill="#fff"/> </svg>'],
             })
           } else {
             jQuery("#KnowlegeBase").owlCarousel("destroy");
           };
 // youtube
           if (jQuery(window).width() < 992) {
             jQuery("#v-youtube").owlCarousel({
               autoplay: true,
               loop: true,
               items: 1.28,
               margin: 37,
               dots: false,
               nav: true,
               responsiveClass: true,
               navText: ['<svg xmlns="http://www.w3.org/2000/svg" width="13.503" height="23.619" viewBox="0 0 13.503 23.619"> <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z" transform="translate(-11.251 -6.194)" fill="#fff" /> </svg>','<svg xmlns="http://www.w3.org/2000/svg" width="13.503" height="23.619" viewBox="0 0 13.503 23.619"> <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z" transform="translate(24.754 29.813) rotate(180)" fill="#fff"/> </svg>'],
               nav: true,
               responsive: {
                   0: {
                     items: 1.28,
                     dots: true,
                     nav: false,
                     margin: 37,
                   },
           
                   767: {
                     items: 2,
                     margin: 30,
                       
                   }
               }
             })
           } else {
             jQuery("#v-youtube").owlCarousel("destroy");
           };
          
           
 });


 // comment like functionality
 jQuery('#comment').keypress(function (e) {
   var key = e.which;
   if(key == 13)  // the enter key code
    {
      jQuery('.submit').click();
      return false;  
    }
  });

function commentlike_fetch( comment_id){
 var user_id = jQuery("#cst_userid").val();
 
 var url_ajax = jQuery("#url").val();
 jQuery.ajax({
     url:url_ajax,
     type: 'post',
     datatype:'json',
     data: { action: 'comment_fetch_like' , comment_id:comment_id , user_id:user_id },
     beforeSend: function () {
     jQuery(".one-loder").show();
 },
     success: function(data) {
       console.log(data);
       data = JSON.parse(data);
        jQuery(".one-loder").hide();
        jQuery('.like'+comment_id).text(data.liked);
        jQuery('.dislike'+comment_id).text(data.dislike);
       // jQuery(".cst-likereply").html(data);
       // window.location.reload(true);
     }
 });

}
function commentdislike_fetch( comment_id){
 var user_id = jQuery("#cst_userid").val();
 
 var url_ajax = jQuery("#url").val();
 jQuery.ajax({
     url:url_ajax,
     type: 'post',
     datatype:'json',
     data: { action: 'comment_fetch_dislike' , comment_id:comment_id , user_id:user_id },
     beforeSend: function () {
     jQuery(".one-loder").show();
 },
     success: function(data) {
         data = JSON.parse(data);
         jQuery(".one-loder").hide();
         jQuery('.like'+comment_id).text(data.liked);
         jQuery('.dislike'+comment_id).text(data.dislike);
         // window.location.reload(true);
     }
 });

}
function postlike_fetch( post_id){
 
var curnt_userid = jQuery("#curnt_userid").val();
 
 var url_ajax = jQuery("#url").val();
 jQuery.ajax({
     url:url_ajax,
     type: 'post',
     data: { action: 'post_like_dislike' , post_id:post_id , 
     curnt_userid:curnt_userid 
   },
     beforeSend: function () {
    // jQuery(".one-loder").show();
 },
     success: function(data) {
         data = JSON.parse(data);
       //  jQuery(".one-loder").hide();
         jQuery('.likes'+post_id).text(data.liked);
         console.log(jQuery('.likes'+post_id).text(data.liked));
         jQuery('.dislikes'+post_id).text(data.dislike);
         // window.location.reload(true);
     }
 });

}
function postdislike_fetch(post_id){
 var curnt_userid = jQuery("#curnt_userid").val();

 var url_ajax = jQuery("#url").val();
 jQuery.ajax({
     url:url_ajax,
     type: 'post',
     data: {
             action: 'post_dislike' ,
             post_id :post_id , 
             curnt_userid:curnt_userid 
     },
     beforeSend: function () {
   //  jQuery(".one-loder").show();
 },
     success: function(data) {
         data = JSON.parse(data);
      //   jQuery(".one-loder").hide();
         jQuery('.likes'+post_id).text(data.liked);
         jQuery('.dislikes'+post_id).text(data.dislike);
       //  window.location.reload(true);
     }
 });
}

//Load More Function.........
var paged = 1;
function loadmore_func(){
 paged++;
 var url_ajax = jQuery("#url").val();
 var maxPage = jQuery("#more_posts").data('max-page');
 

 var sortbybest = jQuery('#sortBy').val();

 // var paged = jQuery("#paged").val();


   var termid = jQuery('#sortBy').attr('data-id');

   jQuery.ajax({

     type: 'POST',

     url: url_ajax,

     data: {

       action: 'filter_sortby',

       paged: paged,

       termid: termid,

       sortbybest : sortbybest,
       
     },
     // beforeSend: function () {
     //   jQuery(".one-loder").show();
     // },
     success: function(data) {
      // jQuery(".one-loader").hide();
       jQuery("#paged").val(parseInt(paged) + 1);

       jQuery("#paged").val(parseInt(paged) + 1);
       jQuery('#sortbyfilter').append( data );
     // if (data.trim() == '') {
     //   jQuery('#more_posts').css("display", "none");
     //   } else {

     //   }
         
     if(paged >= maxPage) {
       jQuery('#more_posts').css("display", "none");
     }

     }

   });

 }

 function show_more_commnets(){
   var url_ajax = jQuery("#url").val();
 
   var sortbybest = jQuery('#sortBy').val();
 
   var paged = jQuery("#paged").val();
 
     var pageid = jQuery('#sortBy').attr('data-id');
 
     jQuery.ajax({
 
       type: 'POST',
 
       url: url_ajax,
 
       data: {
 
         action: 'comment_filter',
 
         paged: parseInt(paged) + 1,
 
         pageid: pageid,
 
         sortbybest : sortbybest,
         
       },
       // beforeSend: function () {
       //   jQuery(".one-loder").show();
       // },
       success: function(data) {
        // jQuery(".one-loader").hide();
         jQuery("#paged").val(parseInt(paged) + 1);
 
        if(data.length){
        jQuery('.comment-list').append( data );

       //  if(jQuery('li .comment.byuser').hasClass('haveReplay')){
         
       //   jQuery('.comment').next().append('');
       //  }

             
 
        } else{
 
          // jQuery(".one-loader").hide();
 
        }
 
           
 
       }
 
     });
 
   }
var   paged = 1;
function searchmore_func(){
   paged++;
   var url_ajax = jQuery("#url").val();
   var maxPage = jQuery("#more_posts").data('max-page');
   var sortbybest = jQuery('#sortBy').val();
   var paged = jQuery("#paged").val();
   var search_value = jQuery("#search_query").val();
     jQuery.ajax({
       type: 'POST',
       url: url_ajax,
       data: {
         action: 'search_fetch',
         paged: paged,
         search_value : search_value,
         sortbybest : sortbybest,
         
       },
       // beforeSend: function () {
       //   jQuery(".one-loder").show();
       // },
       success: function(data) {
         jQuery(".one-loader").hide();
         jQuery("#paged").val(parseInt(paged) + 1);
         
         jQuery('#sortbyfilter').append( data );
         
         if(paged >= maxPage) {
           jQuery('#more_posts').css("display", "none");
         }
       }

     });

}    
function fetchResults(){
   
 var article_value =  jQuery("#Inputarticle").val();
 var url_ajax = jQuery("#url").val();
 jQuery.ajax({
     url:url_ajax,
     type: 'post',
     data: { action: 'article_fetch' , article_value:article_value },
     beforeSend: function () {
     //jQuery(".one-loder").show();
 },
     success: function(data) {
         jQuery('.e-search').show()
         jQuery('#article-fetchresult').html( data );
         if(article_value == ''){
             jQuery('.e-search').hide();
         }
         //jQuery(".one-loder").hide();
        // window.location.reload(true);
     }
 });
 
 
} 

jQuery(".cstm-mb-more:first-child").attr("href", "javascript:void(0)");
jQuery(".cstm-mb-more").on("click", function() {
 jQuery(this).toggleClass('morecl');
 jQuery(".cstm-mb-more .sub-menu").toggleClass( 'active');
});