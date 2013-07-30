<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css"> -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/main_smartphone.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/main_tablet.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/videojs/video-js.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/videojs/video-bca-skin.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/fancybox2/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

        <!-- This a css for popup window. You can merge this to main.css in final production -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/popup.css">

        <script src="<?php echo base_url(); ?>js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
    	
    	<!-- Add your site or application content here -->
       <div id="fb-root"></div>
		<script type="text/javascript">
		  // You probably don't want to use globals, but this is just example code
		  var fbAppId = '307826036019777';

		  // This is boilerplate code that is used to initialize the Facebook
		  // JS SDK.  You would normally set your App ID in this code.
		
		  // Additional JS functions here
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : fbAppId,        // App ID
		      status     : true,           // check login status
		      cookie     : true,           // enable cookies to allow the server to access the session
		      xfbml      : true            // parse page for xfbml or html5 social plugins like login button below
		    });
		    
		    checkLoginStatus();
		
		    // Put additional init code here
		  };
		
		  // Load the SDK Asynchronously
		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/en_US/all.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>
    	
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
        
        

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div id="top_nav" class="container">
                	
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
                        <ul id='top_main_nav' class="nav">
                            <li><a href="#conversation" class='all_cap'>Conversation</a></li>
                            <li><a href="#video" class='all_cap'>video</a></li>
                            <li><a href="#donate" class='all_cap'>donate</a></li>
                            <li><a href="#about" class='all_cap'>about</a></li>
                        </ul>
                        <div id='top_sub_nav' class='pull-right'>
                            <div class='top_sub_nav_item'>
                            	<div id='top_user_name' class='user_name_display' class='all_cap'></div>
								<div id='sign_in_btn' class='all_cap pink_text'>SIGN IN</div>
								<div><img src='<?php echo base_url(); ?>img/icons/facebook.png'/></div>
							</div>
							<div><img src='<?php echo base_url(); ?>img/assets/btn-divider.png' /></div>
							<div class='top_sub_nav_item'>
	                            <div class="dropdown">
	                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">ENG</a>
	                                <ul class="dropdown-menu">
	                                    <li><a href="#"><img src='<?php echo base_url(); ?>img/flags/english.png' />&nbsp;&nbsp;German</a></li>
	                                    <li><a href="#"><img src='<?php echo base_url(); ?>img/flags/english.png' />&nbsp;&nbsp;Portuguese</a></li>
	                                    <li><a href="#"><img src='<?php echo base_url(); ?>img/flags/english.png' />&nbsp;&nbsp;Traditional Chinese</a></li>
	                                    <li><a href="#"><img src='<?php echo base_url(); ?>img/flags/english.png' />&nbsp;&nbsp;French</a></li>
	                                    <li><a href="#"><img src='<?php echo base_url(); ?>img/flags/english.png' />&nbsp;&nbsp;Greek</a></li>
	                                    <li><a href="#"><img src='<?php echo base_url(); ?>img/flags/english.png' />&nbsp;&nbsp;Hungarian</a></li>
	                                    <li><a href="#"><img src='<?php echo base_url(); ?>img/flags/english.png' />&nbsp;&nbsp;Italian</a></li>
	                                    <li><a href="#"><img src='<?php echo base_url(); ?>img/flags/english.png' />&nbsp;&nbsp;Korean</a></li>
	                                    <li><a href="#"><img src='<?php echo base_url(); ?>img/flags/english.png' />&nbsp;&nbsp;Spanish</a></li>
	                                    <li><a href="#"><img src='<?php echo base_url(); ?>img/flags/english.png' />&nbsp;&nbsp;Arabic (read right to left)</a></li>
	                                    <li><a href="#"><img src='<?php echo base_url(); ?>img/flags/english.png' />&nbsp;&nbsp;Hebrew (read right to left)</a></li>
	                                    <li><a href="#"><img src='<?php echo base_url(); ?>img/flags/english.png' />&nbsp;&nbsp;Russian</a></li>
	                                    <li><a href="#"><img src='<?php echo base_url(); ?>img/flags/english.png' />&nbsp;&nbsp;Spanish</a></li>
	                                    <li><a href="#"><img src='<?php echo base_url(); ?>img/flags/english.png' />&nbsp;&nbsp;Turkish</a></li>
	                                    <li><a href="#"><img src='<?php echo base_url(); ?>img/flags/english.png' />&nbsp;&nbsp;Non-US English</a></li>
	                                    <li><a href="#"><img src='<?php echo base_url(); ?>img/flags/english.png' />&nbsp;&nbsp;Vietnamese</a></li>
	                                    <li><a href="#"><img src='<?php echo base_url(); ?>img/flags/english.png' />&nbsp;&nbsp;Czech</a></li>
	                                </ul>
	                            </div>
	                            <div id='flag'><img src='<?php echo base_url(); ?>img/flags/english.png' /></div>
	                            <div id='language_arrow'><img src='<?php echo base_url(); ?>img/icons/language-arrow.png'/></div>
                            </div>
                            <div><img src='<?php echo base_url(); ?>img/assets/btn-divider.png' /></div>
                            <div class='top_sub_nav_item'>
                            	<div class='all_cap'>share</div>
                            	<div id='facebook_share_btn'><img src='<?php echo base_url(); ?>img/icons/facebook.png'/></div>
								<div id='twitter_share_btn'><img src='<?php echo base_url(); ?>img/icons/twitter.png'/></div>
							</div>
                        </div>
                        
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div id="content_wrap" class="container">
        	
            <!-- Main hero unit for a primary marketing message or call to action -->
              <div id='top_content'>
	             <div class="row">
	                <div class="top_content_span span6">
	                    <div><img src='<?php echo base_url(); ?>img/pics/stronger-together.png'/></div>
	                </div>
	                <div class="top_content_span span6">
	                	<div class="row">
	                		<div id='featured_header' class="span6">
	                			<img class='pull_left' src='<?php echo base_url(); ?>img/headers/featured-header.png'/>
	                			<div class='pull_left'>
									<div class='featured_dot'></div>
									<div class='featured_dot'></div>
									<div class='featured_dot'></div>
								</div>
	                		</div> 
	                    </div>
	                    <div class="row">
	                		<div class="top_content_sub_span4 span4">
	                			<div id="featured_circle"><img src='<?php echo base_url(); ?>img/pics/circle.png'/></div>
	                		</div>
	                		<div class="top_content_sub_span2 span2">
	                			<div id="featured_instagram" class="social_item "><img src='<?php echo base_url(); ?>img/pics/instagram.png'/></div>
	                			<div id="featured_twitter" class="social_item "></div>
	                		</div>
	                	</div>
	                	</div>
	                </div>
	              </div>
	            </div>

	            <div id='bottom_content'>
	            	<div class='log_out_status'>
	            		<div class="row">
							<div id='join_conversation' class="span7">
								<div id='join_header'><img class='auto_resize' src='<?php echo base_url(); ?>img/headers/join-the-conversation.png'/></div>
								<div width=200>
									<div id='join_text' class='light_font'>Show how you're fighting breast cancer by creating a circle, uploading a photo, or tagging posts on Instagram and Twitter with <b>#BCAstrength</b>.</div>
									<div id='join_btns'>
										<div style='width:50%; float:left;'><div class='create_circle_btn pink_btn float_right all_cap'>CREATE A CIRCLE</div></div>
										<div style='width:50%; float:right;'><div id='upload_photo_btn' class='pink_btn float_left all_cap'>UPLOAD A PHOTO</div></div>
									</div>
								</div>
							</div>
							<div id='community' class='v_divider span5'>
								<h2>Community</h2>
								<div class='community_item'>
									<div class='action_icon'><img src='<?php echo base_url(); ?>img/icons/walking.png'/></div>
									<div>
										<div class='community_line_1 light_font'>219 People are</div>
										<div class='community_line_2'>Walking Everyday In October</div>
									</div>
								</div>
								<div class='community_item'>
									<div class='action_icon'><img src='<?php echo base_url(); ?>img/icons/walking.png'/></div>
									<div>
										<div class='community_line_1 light_font'>219 People are</div>
										<div class='community_line_2'>Walking Everyday In October</div>
									</div>
								</div>
								<div class='community_item'>
									<div class='action_icon'><img src='<?php echo base_url(); ?>img/icons/walking.png'/></div>
									<div>
										<div class='community_line_1 light_font'>219 People are</div>
										<div class='community_line_2'>Walking Everyday In October</div>
									</div>
								</div>
								<div class='community_item'>
									<div class='action_icon'><img src='<?php echo base_url(); ?>img/icons/walking.png'/></div>
									<div>
										<div class='community_line_1 light_font'>219 People are</div>
										<div class='community_line_2'>Walking Everyday In October</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class='log_in_status'>
						<div class="row">
							<div id='user_profile' class="span4">
								<!-- <div id='user_profile_pic' class='float_left'></div> -->
								<div class='float_left'>
									<div id='bottom_user_name' class='user_name_display'></div>
									<div class='user_location_display'></div>
									<div id='user_circle_num'>Belongs to <span id='circle_num'>0 Circle</span></div>
									<div id='create_another_circle' class='create_circle_btn pink_btn all_cap light_font'>Create Another Circle</div>
								</div>
							</div>
							<div id='my_circles' class='v_divider span4'>
								<h2>My Circles</h2>
								<div class='community_item'>
									<div class='action_icon'><img src='<?php echo base_url(); ?>img/icons/walking.png'/></div>
									<div>
										<div class='circle_line_1 light_font pink_text'>Estee Walk for Breast Cancer</div>
										<div class='circle_line_2'>5 Friends Talking Action</div>
									</div>
								</div>
								<div class='community_item'>
									<div class='action_icon'><img src='<?php echo base_url(); ?>img/icons/walking.png'/></div>
									<div>
										<div class='circle_line_1 light_font pink_text'>Volunteer at my Local Hospital</div>
										<div class='circle_line_2'>7 Friends Talking Action</div>
									</div>
								</div>
								<div class='community_item'>
									<div class='action_icon'><img src='<?php echo base_url(); ?>img/icons/walking.png'/></div>
									<div>
										<div class='circle_line_1 light_font pink_text'>Raise 1,000 dollars for BCRF</div>
										<div class='circle_line_2'>4 Friends Talking Action</div>
									</div>
								</div>
							</div>
							<div id='trending_actions' class='v_divider span4'>
								<h2>Trending Actions</h2>
								<div class='community_item'>
									<div class='action_icon'><img src='<?php echo base_url(); ?>img/icons/walking.png'/></div>
									<div>
										<div class='community_line_1 light_font'>219 People are</div>
										<div class='community_line_2'>Walking Everyday In October</div>
									</div>
								</div>
								<div class='community_item'>
									<div class='action_icon'><img src='<?php echo base_url(); ?>img/icons/walking.png'/></div>
									<div>
										<div class='community_line_1 light_font'>219 People are</div>
										<div class='community_line_2'>Walking Everyday In October</div>
									</div>
								</div>
								<div class='community_item'>
									<div class='action_icon'><img src='<?php echo base_url(); ?>img/icons/walking.png'/></div>
									<div>
										<div class='community_line_1 light_font'>219 People are</div>
										<div class='community_line_2'>Walking Everyday In October</div>
									</div>
								</div>
							</div>
						</div>
					</div>  
	            </div> 
            </div>

            <hr>
            
            <button onclick="doWallPost();">Do wall post</button>

            <h4>Popup test links</h4>
            <ul>
            	<li>
            		<a onclick="$popup.open({type:'about'});">about </a>
            	</li>
            	<li>
            		<a onclick="$popup.open({type:'video'});">video </a>
            	</li>
				<li>
		 			<a onclick="$popup.open({type:'photo', 
			            data:{
			            	source: 'local',
			            	photo_url: '/img/popups/test_photo_001.jpg'
			        	} 
		        	});">photo w/o desc</a>
            	</li>
				<li>
		            <a onclick="$popup.open({type:'photo', 
			            data:{
			            	source: 'local',
			            	author: 'John Doe',
			            	content: 'Sed ac convallis ante. Nam feugiat mattis ligula, ac adipiscing purus dictum vel. Duis auctor lacus ipsum #BCAstrength',
			            	photo_url: '/img/popups/test_photo_001.jpg'
			        	} 
		        	});">photo/w desc</a>
            	</li>
				<li>
		            <a onclick="$popup.open({type:'photo', 
			            data:{
			            	source: 'instagram',
			            	author: 'MICHAEL BROWN',
			            	content: 'Monday morning hair routine! @aveda #invati & #volumising tonic keeps the hair I have looking thicker.. What would I do without you! #aveda',
			            	photo_url: 'http://distilleryimage4.s3.amazonaws.com/ffcaeb30f25b11e2919022000a1f8daa_7.jpg'
			        	} 
		        	});">photo (instagram)</a>
            	</li>
				<li>
		            <a onclick="$popup.open({type:'twitter', 
			            data:{
			            	author: '@aitebha92',
			            	content: '@aveda\'s #Invati line smells so good. Hoping it works just as well! #CrossingFingers',
			            	datetime: 'July 4th, 2013, 3:24pm',
			            	avatar: 'http://a0.twimg.com/profile_images/3654654271/be74feaf9db3c15aeaada42eb3a3d115_normal.jpeg'
			        	} 
		        	});">Twitter</a>
            	</li>

       

            <footer>
                <p>&copy; Company 2012</p>
            </footer>

        </div> <!-- /container -->



        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="<?php echo base_url(); ?>js/vendor/bootstrap.min.js"></script>

        

        <script src="<?php echo base_url(); ?>js/plugins.js"></script>
        <script src="<?php echo base_url(); ?>js/util/facebook.js"></script>
        <script src="<?php echo base_url(); ?>js/main.js"></script>

        <script type="text/javascript" src="js/vendor/fancybox2/jquery.fancybox.pack.js?v=2.1.5"></script>

        <script>
            var _gaq=[['_setAccount','<?php echo GA_ACCOUNT; ?>'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

    </body>
</html>
