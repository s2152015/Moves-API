<?php echo $html->script('/socialprivacy/js/jquery.socialshareprivacy.min.js', false); ?>
<?php
	echo $html->scriptBlock("
		jQuery(document).ready(function($){
		  if($('#socialshareprivacy').length > 0){
			$('#socialshareprivacy').socialSharePrivacy({
			services : {
				facebook : {
					'dummy_img': '/yallaseha_new/socialprivacy/img/dummy_facebook_en.png',
					'language' : 'ar',
					'action' : 'like',
					'txt_info' : '','perma_option': 'off',txt_fb_off:'',txt_fb_on:''
				}, 
				twitter : {
					 'dummy_img': '/yallaseha_new/socialprivacy/img/dummy_twitter.png',
					 'txt_info' : '','perma_option': 'off',txt_twitter_off:'',txt_twitter_on:''
				},
				gplus : {
					'dummy_img': '/yallaseha_new/socialprivacy/img/dummy_gplus.png',
					'language' : 'ar',
					'txt_info' : '','perma_option': 'off',txt_gplus_off:'',txt_gplus_on:''
				}
			  },
			  'css_path' : '/socialprivacy/css/socialshareprivacy.css',
			  'txt_help' : '',
			  'settings_perma' : 'Enable permanently',
			
			}); 
		  }
		});", array('inline' => false));
?>
<div id="socialshareprivacy"></div>
