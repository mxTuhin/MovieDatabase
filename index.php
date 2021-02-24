<html lang="en" class="no-js">
<head>
	
<?php
    include('config/designBlock.php')
    ?>
</head>
<body>
<!--preloading-->
<!--<div id="preloader">
    <img class="logo" src="images/logo1.png" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>-->
<!--end of preloading-->
<!--login form popup-->
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Login</h3>
        <form method="post" action="#">
        	<div class="row">
        		 <label for="username">
                    Username:
                    <input type="text" name="username" id="username" placeholder="Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                </label>
        	</div>
           
            <div class="row">
            	<label for="password">
                    Password:
                    <input type="password" name="password" id="password" placeholder="******" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
            <div class="row">
            	<div class="remember">
					<div>
						<input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
					</div>
            		<a href="#">Forget password ?</a>
            	</div>
            </div>
           <div class="row">
           	 <button type="submit">Login</button>
           </div>
        </form>
        <div class="row">
        	<p>Or via social</p>
            <div class="social-btn-2">
            	<a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
            	<a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
            </div>
        </div>
    </div>
</div>
<!--end of login form popup-->
    
    
<!--signup form popup-->
<div class="login-wrapper"  id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>sign up</h3>
        <form method="post" action="index.php">
            <div class="row">
                 <label for="nameSignUp">
                    Name:
                    <input type="text" name="name" id="nameSignUp" placeholder="Type your name"  required="required" />
                </label>
            </div>
           
            <div class="row">
                <label for="emailSignUp">
                    your email:
                    <input type="text" name="email" id="emailSignUp" placeholder="Type your email"  required="required" />
                </label>
            </div>
             <div class="row">
                <label for="passwordSignUp">
                    Password:
                    <input type="password" name="password" id="passwordSignUp" placeholder="Type your password" required="required" />
                </label>
            </div>
            
            <div class="row">
                <label for="birthdaySignUp">
                    Password:
                    <input type="date" name="birthday" id="birthdaySignUp" placeholder="" required="required" />
                </label>
            </div>
             
           <div class="row">
             <button id="signup_button" type="button">Sign up</button>
           </div>
        </form>
    </div>
</div>
<!--end of signup form popup-->
    
    
    

<!-- BEGIN | Header -->
<?php
    include('config/header.php');
    ?>
<!-- END | Header -->

<div class="slider movie-items">
	<div class="container">
		<div class="row">
			<div class="social-link">
				<p>Follow us: </p>
				<a href="#"><i class="ion-social-facebook"></i></a>
				<a href="#"><i class="ion-social-twitter"></i></a>
				<a href="#"><i class="ion-social-googleplus"></i></a>
				<a href="#"><i class="ion-social-youtube"></i></a>
			</div>
	    	<div  class="slick-multiItemSlider">
	    		<div class="movie-item">
	    			<div class="mv-img">
	    				<a href="#"><img src="images/uploads/slider1.jpg" alt="" width="285" height="437"></a>
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="blue"><a href="#">Sci-fi</a></span>
	    				</div>
	    				<h6><a href="#">Interstellar</a></h6>
	    				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
	    			</div>
	    		</div>
				<div class="movie-item">
	    			<div class="mv-img">
	    				<a href="#"><img src="images/uploads/slider2.jpg" alt="" width="285" height="437"></a>
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="yell"><a href="#">action</a></span>
	    				</div>
	    				<h6><a href="#">The revenant</a></h6>
	    				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
	    			</div>
	    		</div>
	    		<div class="movie-item">
	    			<div class="mv-img">
	    				<a href="#"><img src="images/uploads/slider3.jpg" alt="" width="285" height="437"></a>
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="green"><a href="#">comedy</a></span>
	    				</div>
	    				<h6><a href="#">Die hard</a></h6>
	    				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
	    			</div>
	    		</div>
	    		<div class="movie-item">
	    			<div class="mv-img">
	    				<a href="#"><img src="images/uploads/slider4.jpg" alt="" width="285" height="437"></a>
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="blue"><a href="#">Sci-fi</a></span> <span class="orange"><a href="#">advanture</a></span>
	    				</div>
	    				<h6><a href="#">The walk</a></h6>
	    				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
	    			</div>
	    		</div>
	    		<div class="movie-item">
	    			<div class="mv-img">
	    				<a href="#"><img src="images/uploads/slider1.jpg" alt="" width="285" height="437"></a>
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="blue"><a href="#">Sci-fi</a></span>
	    				</div>
	    				<h6><a href="#">Interstellar</a></h6>
	    				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
	    			</div>
	    		</div>
				<div class="movie-item">
	    			<div class="mv-img">
	    				<a href="#"><img src="images/uploads/slider2.jpg" alt="" width="285" height="437"></a>
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="yell"><a href="#">action</a></span>
	    				</div>
	    				<h6><a href="#">The revenant</a></h6>
	    				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
	    			</div>
	    		</div>
	    		<div class="movie-item">
	    			<div class="mv-img">
	    				<img src="images/uploads/slider3.jpg" alt="" width="285" height="437">
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="green"><a href="#">comedy</a></span>
	    				</div>
	    				<h6><a href="#">Die hard</a></h6>
	    				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
	    			</div>
	    		</div>
	    		<div class="movie-item">
	    			<div class="mv-img">
	    				<img src="images/uploads/slider4.jpg" alt="" width="285" height="437">
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="blue"><a href="#">Sci-fi</a></span> <span class="orange"><a href="#">advanture</a></span>
	    				</div>
	    				<h6><a href="#">The walk</a></h6>
	    				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
	    			</div>
	    		</div>
	    		<div class="movie-item">
	    			<div class="mv-img">
	    				<img src="images/uploads/slider3.jpg" alt="" width="285" height="437">
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="green"><a href="#">comedy</a></span>
	    				</div>
	    				<h6><a href="#">Die hard</a></h6>
	    				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	</div>
</div>
<div class="movie-items">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-8">
				<div class="title-hd">
					<h2>in theater</h2>
					<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="tabs">
					<ul class="tab-links">
						<li class="active"><a href="#tab1">#Popular</a></li>
						<li><a href="#tab2"> #Coming soon</a></li>
						<li><a href="#tab3">  #Top rated  </a></li>
						<li><a href="#tab4"> #Most reviewed</a></li>                        
					</ul>
				    <div class="tab-content">
				        <div id="tab1" class="tab active">
				            <div class="row">
				            	<div class="slick-multiItem">
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
					            			</div> 
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item2.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item4.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            	</div>
				            </div>
				        </div>
				        <div id="tab2" class="tab">
				           <div class="row">
				            	<div class="slick-multiItem">
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            	</div>
				            </div>
				        </div>
				        <div id="tab3" class="tab">
				        	<div class="row">
				            	<div class="slick-multiItem">
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item2.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item4.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            	</div>
				            </div>
			       	 	</div>
			       	 	<div id="tab4" class="tab">
				        	<div class="row">
				            	<div class="slick-multiItem">
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            	</div>
				            </div>
			       	 	</div>
				    </div>
				</div>
				<div class="title-hd">
					<h2>on tv</h2>
					<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="tabs">
					<ul class="tab-links-2">
						<li><a href="#tab21">#Popular</a></li>
						<li class="active"><a href="#tab22"> #Coming soon</a></li>
						<li><a href="#tab23">  #Top rated  </a></li>
						<li><a href="#tab24"> #Most reviewed</a></li>                        
					</ul>
				    <div class="tab-content">
				        <div id="tab21" class="tab">
				            <div class="row">
				            	<div class="slick-multiItem">
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item2.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item4.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            	</div>
				            </div>
				        </div>
				        <div id="tab22" class="tab active">
				           <div class="row">
				            	<div class="slick-multiItem">
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item2.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item4.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            	</div>
				            </div>
				        </div>
				        <div id="tab23" class="tab">
				        	<div class="row">
				            	<div class="slick-multiItem">
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item2.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item4.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            	</div>
				            </div>
			       	 	</div>
			       	 	 <div id="tab24" class="tab">
				        	<div class="row">
				            	<div class="slick-multiItem">
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            	</div>
				            </div>
			       	 	</div>
				    </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="ads">
						<img src="images/uploads/ads1.png" alt="" width="336" height="296">
					</div>
					<div class="celebrities">
						<h4 class="sb-title">Spotlight Celebrities</h4>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava1.jpg" alt="" width="70" height="70"></a>
							<div class="celeb-author">
								<h6><a href="#">Samuel N. Jack</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava2.jpg" alt="" width="70" height="70"></a>
							<div class="celeb-author">
								<h6><a href="#">Benjamin Carroll</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava3.jpg" alt="" width="70" height="70"></a>
							<div class="celeb-author">
								<h6><a href="#">Beverly Griffin</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava4.jpg" alt="" width="70" height="70"></a>
							<div class="celeb-author">
								<h6><a href="#">Justin Weaver</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<a href="#" class="btn">See all celebrities<i class="ion-ios-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="trailers">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-12">
				<div class="title-hd">
					<h2>in theater</h2>
					<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="videos">
				 	<div class="slider-for-2 video-ft">
				 		<div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/1Q8fG0TtVAY"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/w0qQkSuWOS8"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/44LdLqgOpjo"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/gbug3zTm3Ws"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/e3Nl_TCQXuw"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/NxhEZG0k9_w"></iframe>
					    </div>
						
						
					</div>
					<div class="slider-nav-2 thumb-ft">
						<div class="item">
							<div class="trailer-img">
								<img src="images/uploads/trailer7.jpg"  alt="photo by Barn Images" width="4096" height="2737">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Wonder Woman</h4>
	                        	<p>2:30</p>
	                        </div>
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="images/uploads/trailer2.jpg"  alt="photo by Barn Images" width="350" height="200">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Oblivion: Official Teaser Trailer</h4>
	                        	<p>2:37</p>
	                        </div>
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="images/uploads/trailer6.jpg" alt="photo by Joshua Earle">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Exclusive Interview:  Skull Island</h4>
	                        	<p>2:44</p>
	                        </div>
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="images/uploads/trailer3.png" alt="photo by Alexander Dimitrov" width="100" height="56">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Logan: Director James Mangold Interview</h4>	
	                        	<p>2:43</p>
	                        </div>
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="images/uploads/trailer4.png"  alt="photo by Wojciech Szaturski" width="100" height="56">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Beauty and the Beast: Official Teaser Trailer 2</h4>	
	                        	<p>2: 32</p>
	                        </div>	
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="images/uploads/trailer5.jpg"  alt="photo by Wojciech Szaturski" width="360" height="189">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Fast&Furious 8</h4>	
	                        	<p>3:11</p>
	                        </div>	
						</div>
                        
					
					</div>
				</div>   
			</div>
		</div>
	</div>
</div>
<!-- footer section-->
<?php
    include('config/footer.php');
    
    ?>
    <?php
    include('config/jsBlock.php');
    ?>
   <script>
			$("#signup_button").click(function () {
			
			       var Email = $("#emailSignUp").val();
			       var Password = $("#passwordSignUp").val();
                   var Name = $("#nameSignUp").val();
                   var Birthday = $("#birthday").val();
                
                
			
			       if (Email == "" || Password=="" || Name=="") {
			           Swal.fire({
			               type: 'error',
			               title: 'Oops...',
			               text: 'Empty Field Encountered.',
			               showConfirmButton: true,
			               confirmButtonColor: '#43A047',
			               confirmButtonText: 'Retry',
			               allowOutsideClick: false,
			               allowEscapeKey: false,
			           })
			       } else {
			           Swal.fire({
			               title: 'Sign Up Initiated...',
			               showConfirmButton: false,
			               allowOutsideClick: false,
			               allowEscapeKey: false,
			               onBeforeOpen: () => {
			                   Swal.showLoading()
			               }
			           });
			
			           $.ajax({
			               type: "POST",
			               url: 'php/signup.php',
			               data: {
			                   email: Email,
			                   password: Password,
                               name:Name,
                               birthday:Birthday
			               },
			               dataType: "JSON",
			               success: function (data) {
			                   if (data.error) {
			                       Swal.fire({
			                           type: 'error',
			                           title: 'Oops...',
			                           text: data.msg,
			                           showConfirmButton: true,
			                           confirmButtonColor: '#43A047',
			                           confirmButtonText: 'Retry',
			                           allowOutsideClick: false,
			                           allowEscapeKey: false,
			                       })
			                   } else {
			                       Swal.fire({
                                        type: 'success',
                                        title: data.msg,
                                        showConfirmButton: false,
                                        allowOutsideClick: false,
                                        allowEscapeKey: false,
                                        html: 'Redirecting in <strong>3</strong> seconds...',
                                        timer: 3000,
                                        onBeforeOpen: () => {
                                            timerInterval = setInterval(() => {
                                                Swal.getContent().querySelector(
                                                        'strong')
                                                    .textContent = (Swal
                                                    .getTimerLeft() / 1000)
                                                    .toFixed(0)
                                            }, 1000)
                                        },
                                        onClose: () => {

                                            clearInterval(timerInterval)
                                            window.location.replace("dashboard/");
                                        }
                                    });

			                   }
			               }
			           });
			       }
			});
		</script>
</body>


</html>
