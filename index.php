<?php
global $kaziportfolio;

/*
Template Name: Myhome Page
 */
 get_header(  ); 


 ?>


<!-- Home start -->
	<div id="colorlib-main">
			<section id="colorlib-hero" class="js-fullheight" data-section="home">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url('<?php echo $kaziportfolio['h_s_1']['url'] ?>'); background-position: center; background-size: cover; height: 800px; ">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner js-fullheight">
					   					<div class="desc">
						   					<h1>
										<?php 
									if(function_exists('the_field')){
									echo the_field('hero_title_one'); 
								}
									?>
										
									</h1>
						   					<h2>100% html5 bootstrap templates Made by <a href="http://abdulquaiyum.com" target="_blank">abdulquaiyum.com</a></h2>
												<p><a href="http://abdulquaiyum.com/Engr.Abdul Quaiyum.pdf" class="btn btn-primary btn-learn"><?php 
																if(function_exists('the_field')){
																echo the_field('hero_button_text_1'); 
															}?> 
													<i class="icon-download4"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url('<?php echo $kaziportfolio['h_s_2']['url'] ?>');background-position: -500px; background-size: cover; height: 800px;">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>
						   						<?php 
									if(function_exists('the_field')){
									echo the_field('hero_title_two'); 
								}
									?>
										
									</h1>
												<h2>100% html5 bootstrap templates Made by <a href="https://colorlib.com/" target="_blank">abdulquaiyum.com</a></h2>
												<p><a class="btn btn-primary btn-learn"><?php 
																					if(function_exists('the_field')){
																					echo the_field('hero_button_text_2'); 
																				}
																					?>  <i class="icon-briefcase3"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</section>
<!-- Home End -->

<!-- About Start -->

<section id="about" class="colorlib-about" data-section="about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">
							<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="col-md-12">
									<div class="about-desc" id="about">
										<span class="heading-meta">About Us</span>
										<h2 class="colorlib-heading"><?php 
																	if(function_exists('the_field')){
																	echo the_field('about_title'); 
																	}
																	?> </h2>
										<p> <?php 
												if(function_exists('the_field')){
												echo the_field('about_description'); 
											}
										?> </p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div id="about_service" class="services color-1">
										<span class="icon2"><i class="icon-bulb"></i></span>
										<h3><?php 
												if(function_exists('the_field')){
												echo the_field('wordpress_course');}
												?> 
										</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
									<div id="about_service" class="services color-2">
										<span class="icon2"><i class="icon-globe-outline"></i></span>
										<h3><?php 
												if(function_exists('the_field')){
												echo
												 the_field('seo_course');}
												?>
											</h3>
									</div>
								</div>
								<div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
									<div id="about_service" class="services color-3">
										<span class="icon2"><i class="icon-data"></i></span>
										<h3><?php 
												if(function_exists('the_field')){
												echo the_field('diploma_course');}
												?>
													
												</h3>
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
									<div class="hire">
										<h2><?php 
												if(function_exists('the_field')){
												echo the_field('hire_title');}
												?></h2>
										<a href="#" class="btn-hire"><?php 
												if(function_exists('the_field')){
												echo the_field('hire_button');}
												?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
<!-- About End -->

<!-- Service Start -->
<section class="colorlib-services" data-section="services">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">What I do?</span>
							<h2 class="colorlib-heading"><?php 
												if(function_exists('the_field')){
												echo the_field('service_title');}
												?></h2>
						</div>
					</div>
					<div class="row row-pt-md">
						<div class="col-md-4 text-center animate-box">
							<div class="services color-1">
								<span class="icon">
									<i class="icon-bulb"></i>
								</span>
								<div class="desc">
									<h3><?php 
												if(function_exists('the_field')){
												echo the_field('service_name1');}
												?></h3>
									<p><?php 
												if(function_exists('the_field')){
												echo the_field('service_description_1');}
												?></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-2">
								<span class="icon">
									<i class="icon-data"></i>
								</span>
								<div class="desc">
									<h3><?php 
												if(function_exists('the_field')){
												echo the_field('service_name_2');}
												?></h3>
									<p><?php 
												if(function_exists('the_field')){
												echo the_field('service_description_2');}
												?></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-3">
								<span class="icon">
									<i class="icon-phone3"></i>
								</span>
								<div class="desc">
									<h3><?php 
												if(function_exists('the_field')){
												echo the_field('service_name_3');}
												?></h3>
									<p><?php 
												if(function_exists('the_field')){
												echo the_field('service_description_3');}
												?></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="services color-4">
								<span class="icon">
									<i class="icon-layers2"></i>
								</span>
								<div class="desc">
									<h3>Graphic Design</h3>
									<p>I am Just learning</p>
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
			</section>
			

			
			
			<div id="colorlib-counter" class="colorlib-counters" style="background-image: url('<?php if(function_exists('get_field')){
					$service_bg_img = get_field('service_background_image');
					echo $service_bg_img['url'];
				} ?>') !important; background-position: left;" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="colorlib-narrow-content">
					<div class="row">
					</div>
					<div class="row">
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="149" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Cups of coffee</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="17" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Projects</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="2" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Clients</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="colorlib-counter js-counter" data-from="0" data-to="4" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Partners</span>
						</div>
					</div>
				</div>
			</div>
<!-- Service End -->			
<!-- Skills Section Start -->
			<section class="colorlib-skills" data-section="skills">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">My Specialty</span>
							<h2 class="colorlib-heading animate-box"><?php 
												if(function_exists('the_field')){
												echo the_field('skill_title');}
												?></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<p><?php 
												if(function_exists('the_field')){
												echo the_field('skill_description');}
												?></p>
						</div>
						
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>HTML5</h3>
								<div class="progress">
								 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="95"
								  	aria-valuemin="0" aria-valuemax="100" style="width:95%">
								    <span>95%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>CSS3</h3>
								<div class="progress">
								 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
								  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
								    <span>90%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>Bootstrap</h3>
								<div class="progress">
								 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="85"
								  	aria-valuemin="0" aria-valuemax="100" style="width:85%">
								    <span>85%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>Tailwind CSS</h3>
								<div class="progress">
								 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="75"
								  	aria-valuemin="0" aria-valuemax="100" style="width:75%">
								    <span>75%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>jQuery</h3>
								<div class="progress">
								 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="75"
								  	aria-valuemin="0" aria-valuemax="100" style="width:75%">
								    <span>75%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>javascript</h3>
								<div class="progress">
								 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="60"
								  	aria-valuemin="0" aria-valuemax="100" style="width:60%">
								    <span>60%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>WordPress</h3>
								<div class="progress">
								 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
								  	aria-valuemin="0" aria-valuemax="100" style="width:94%">
								    <span>94%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>Vue Js</h3>
								<div class="progress">
								 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="60"
								  	aria-valuemin="0" aria-valuemax="100" style="width:60%">
								    <span>60%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="progress-wrap">
								<h3>SEO</h3>
								<div class="progress">
								 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
								  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
								    <span>80%</span>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="progress-wrap">
								<h3>Photoshop</h3>
								<div class="progress">
								 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="45"
								  	aria-valuemin="0" aria-valuemax="100" style="width:45%">
								    <span>45%</span>
								  	</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
<!-- Skills Section End -->

<!-- Education Section Start -->
			<section class="colorlib-education" data-section="education">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Education</span>
							<h2 class="colorlib-heading animate-box"><?php 
												if(function_exists('the_field')){
												echo the_field('education_title');}
												?></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?php 
												if(function_exists('the_field')){
												echo the_field('it_courses');}
												?>
									            </a>
									        </h4>
									    </div>
									    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									         <div class="panel-body">
									            <div class="row">
										      		<div class="col-md-6">
										      			<p><b><?php 
												if(function_exists('the_field')){
												echo the_field('wordpress_developer');}
												?> </b> </p>
										      		</div>
										      		<div class="col-md-6">
										      			<p> <b> <?php 
												if(function_exists('the_field')){
												echo the_field('seo_expert');}
												?> </b></p>
										      		</div>
										      	</div>
									         </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingTwo">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><?php 
												if(function_exists('the_field')){
												echo the_field('diploma_course');}
												?>
									            </a>
									        </h4>
									    </div>
									    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									        <div class="panel-body">
									        	<div class="col-md-6">
									            <p> <strong><?php 
												if(function_exists('the_field')){
												echo the_field('institute_name');}
												?></strong></p>
										</div>
										<div class="col-md-6">
											<p>
											<b><?php 
												if(function_exists('the_field')){
												echo the_field('course_result');}
												?></b>
											</p>
										</div>
									        </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingThree">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><?php 
												if(function_exists('the_field')){
												echo the_field('school_name');}
												?>
									            </a>
									        </h4>
									    </div>
									    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									        <div class="panel-body">
									              	<div class="col-md-6">
									            <p> <strong><?php 
												if(function_exists('the_field')){
												echo the_field('school_course');}
												?></strong></p>
										</div>
										<div class="col-md-6">
											<p>
											<b><?php 
												if(function_exists('the_field')){
												echo the_field('school_result');}
												?></b>
											</p>
										</div>
									        </div>
									    </div>
									</div>

									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingFour">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><?php 
												if(function_exists('the_field')){
												echo the_field('course_name');}
												?>
									            </a>
									        </h4>
									    </div>
									    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									        <div class="panel-body">
									            <p><?php 
												if(function_exists('the_field')){
												echo the_field('course_description');}
												?></p>	
									        </div>
									    </div>
									</div>

								
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
<!-- Education Section End -->
<!-- Experience Section Start -->

			<section class="colorlib-experience" data-section="experience">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Experience</span>
							<h2 class="colorlib-heading animate-box"><?php 
												if(function_exists('the_field')){
												echo the_field('experience_title');}
												?></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
				         <div class="timeline-centered">
					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">

					               <div class="timeline-icon color-1">
					                  <i class="icon-pen2"></i>
					               </div>

					               <div class="timeline-label">
					                  <h2><a href="#"><?php 
												if(function_exists('the_field')){
												echo the_field('it_experience_1');}
												?></a> </h2>
					                  <p><?php 
												if(function_exists('the_field')){
												echo the_field('it_description_1');}
												?></p>
					               </div>
					            </div>
					         </article>


					         <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-2">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#"><?php 
												if(function_exists('the_field')){
												echo the_field('it_experience_2');}
												?></a> </h2>
					                  <p><?php 
												if(function_exists('the_field')){
												echo the_field('it_description_2');}
												?></p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-3">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#"><?php 
												if(function_exists('the_field')){
												echo the_field('it_experience_3');}
												?></a> </h2>
					                  <p><?php 
												if(function_exists('the_field')){
												echo the_field('it_description_3');}
												?></p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-4">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#"><?php 
												if(function_exists('the_field')){
												echo the_field('mechanical_experience_2');}
												?></a> </h2>
					                  <p><?php 
												if(function_exists('the_field')){
												echo the_field('mechanical_experience_description_2');}
												?></p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-5">
					                  <i class="icon-pen2"></i>
					               </div>
					               <div class="timeline-label">
					               	<h2><a href="#"><?php 
												if(function_exists('the_field')){
												echo the_field('mechanical_experience_1');}
												?></a></h2>
					                  <p><?php 
												if(function_exists('the_field')){
												echo the_field('mechanical_experience_description_1');}
												?></p>
					               </div>
					            </div>
					         </article>

					         <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-none">
					               </div>
					            </div>
					         </article>
					      </div>
					   </div>
				   </div>
				</div>
			</section>
<!-- Experience Section End -->
<!-- Recent Work Section Start -->			

			<section class="colorlib-work" data-section="work">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">My Work</span>
							<h2 class="colorlib-heading animate-box"><?php 
												if(function_exists('the_field')){
												echo the_field('recent_work');}
												?></h2>
						</div>
					</div>
					<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
						<div class="col-md-12">
							<p class="work-menu"><span><a href="http://abdulquaiyum.com" class="active">Theme customization</a></span> <span><a href="#">Theme Development</a></span> <span><a href="#">PSD To Html</a></span> <span><a href="#">Water Purifier</a></span></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url('<?php if(function_exists('get_field')){
					$theme_customization_img = get_field('theme_customization_img');
					echo $theme_customization_img['url'];
				} ?>') !important; background-position: top;">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">Work 01</a></h3>
										<span>Theme Customization</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="project" style="background-image: url('<?php if(function_exists('get_field')){
					$psd_to_html_img = get_field('psd_to_html_img');
					echo $psd_to_html_img['url'];
				} ?>') !important;background-position: top;">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">Work 02</a></h3>
										<span>PSD TO HTML</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInTop">
							<div class="project" style="background-image: url('<?php if(function_exists('get_field')){
					$photoshop_img = get_field('photoshop_img');
					echo $photoshop_img['url'];
				} ?>') !important;background-position: top;">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">Work 03</a></h3>
										<span>PhotoShop</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInBottom">
							<div class="project" style="background-image: url('<?php if(function_exists('get_field')){
					$theme_development_img = get_field('theme_development_img');
					echo $theme_development_img['url'];
				} ?>') !important;background-position: top;">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">Work 04</a></h3>
										<span>Theme Development</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 130</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url('<?php if(function_exists('get_field')){
					$backgroung_change_img = get_field('backgroung_change_img');
					echo $backgroung_change_img['url'];
				} ?>') !important;">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">Work 05</a></h3>
										<span>Graphic, Backgroung Change</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 85</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
							<div class="project" style="background-image: url('<?php if(function_exists('get_field')){
					$water_purifier_img = get_field('water_purifier_img');
					echo $water_purifier_img['url'];
				} ?>') !important; background-size: cover; background-position: top;">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">Work 06</a></h3>
										<span>Water Purifier</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
						</div>
					</div>
				</div>
			</section>
<!-- Recent Work Section End -->			
<!-- Recent Blog Section Start -->			
<section class="colorlib-blog" data-section="blog">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Read</span>
							<h2 class="colorlib-heading"><?php 
												if(function_exists('the_field')){
												echo the_field('blog_title');}
												?></h2>
						</div>
					</div>
					<div class="row">

						<?php
							$recent_blog = new WP_Query(array(
						'post_type'			=> 'recent_blog',
						
					));

						 while($recent_blog->have_posts()):$recent_blog->the_post(); ?>
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<a href="blog.html" class="blog-img"><?php the_post_thumbnail(); ?></a>
								<div class="desc">
									<span><small><?php the_time( 'dM Y'  ) ?> </small> | <small> WordPress Theme Development </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
									<h3><a href="blog.html"><?php the_title( ); ?></a></h3>
									<p><?php the_content( ); ?></p>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
					
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
						</div>
					</div>
				</div>
			</section>
<!-- Recent Blog Section End -->	
<!-- Contact section start -->
<section class="colorlib-contact" data-section="contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Get in Touch</span>
							<h2 class="colorlib-heading">Contact</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-globe-outline"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="#">http://abdulquaiyum.com</p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-map"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="#">108/2 South Basaboo <br>Sobujbag <br>Dhaka-1214 </a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="#">+88001747594188 <br>+88001840744919</a></p>
								</div>
							</div>

							
						</div>
						<div class="col-md-7 col-md-push-1">
							<div class="row">
								<?php
							$contact_post = new WP_Query(array(
						'post_type'			=> 'contact_post',
						
					));

						 while($contact_post->have_posts()):$contact_post->the_post(); ?>
								<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
									<?php
									the_content(); 	
									 ?>
								</div>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
<!-- Contact section End -->
		</div><!-- end:colorlib-main -->
	</div><!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->



	
<?php wp_footer(); ?>
	</body>
</html>

