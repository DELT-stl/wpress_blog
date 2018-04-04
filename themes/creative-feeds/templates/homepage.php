<?php
/**
*Template Name: Home Page 
*/

get_header();
?>
<div class="greybox"></div>
	<div class="menuclear"></div>
	
	<div class="hpintro">
		<div class="row row-no-padding">
			<div class="col-sm-2">
				<div class="cat">
					<li><a href="#">web design</a></li>
					<li><a href="#">dev & code</a></li>
					<li><a href="#">graphics & design</a></li>
					<li><a href="#">branding</a></li>
					<li><a href="#">marketing</a></li>
					<li><a href="#">entertainment</a></li>
					<li><a href="#">photography</a></li>
					<li><a href="#">print</a></li>
					<li><a href="#">lifestyle</a></li>
					
				</div>
			</div>
			
			<?php
		      $related = get_posts( array( 'category__not_in' => array(316, 314) , 'posts_per_page' => 1 ) );
		      if( $related ) foreach( $related as $post ) {
			  setup_postdata($post); 

			  $do_not_duplicate[] = $post->ID;
		    ?>
			
			<div class="col-sm-10">
				<div class="hphero bgFromSrcSet">
                    <img class="srcSet" src="<?php the_post_thumbnail_url(); ?>"
                                 srcset="<?php the_post_thumbnail_url( 'xs' ); ?> 400w, 
                                <?php the_post_thumbnail_url( 's' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'm' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'l' );?> 1500w, 
                                <?php the_post_thumbnail_url( 'xl' ); ?> 1900w,
                                <?php the_post_thumbnail_url( 'fs' ); ?> 1920w" 
                                sizes="(min-width:1363px) 83vw, (max-width: 1362px) 62vw, (max-width: 909px) 67vw, (max-width: 709px) 85vw,   840px, (max-width:400px) 85vw"
                                 />
                         
                    
					<div class="lay"></div>
					<div class="hpcallout">
						<h2><?php the_title(); ?></h2>
						<h4 class="info" style="text-align:left"><?php the_time( get_option( 'date_format' ) ); ?></h4>
						<div class="divide10"></div>
						<a class="more" href="<?php the_permalink(); ?>"><span>read article</span></a>
					</div>
				</div>
			</div>
					<?php }
		wp_reset_postdata(); ?>
		</div>
	</div>
	
	
	<div class="container">
		<div class="row">
		<?php

		$related = get_posts( array( 'category__not_in' => array(316, 314), 'posts_per_page' => 2, 'post__not_in' => $do_not_duplicate ) );
		if( $related ) foreach( $related as $post ) {
			setup_postdata($post); 

			$do_not_duplicate[] = $post->ID;
		?>
			<div class="col-sm-4">
				<a href="<?php the_permalink(); ?>">
					<div class="post_card">
<!--
                            XL - 1900 x 800
                            Large - 1500 x 700
                            Medium - 650 x 800
                            Small - 650 x 500
-->

                            <img src="<?php the_post_thumbnail_url(); ?>"
                                 srcset="<?php the_post_thumbnail_url( 'xs' ); ?> 400w, 
                                <?php the_post_thumbnail_url( 's' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'm' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'l' );?> 1500w, 
                                <?php the_post_thumbnail_url( 'xl' ); ?> 1900w" 
                                sizes="(min-width:1363px) 20vw, (max-width: 1362px) 62vw, (max-width: 909px) 67vw, (max-width: 709px) 85vw,   840px, (max-width:400px) 85vw"
                                 />
						<div class="overlay"></div>
						<div class="third">
							<div class="info"><a href="#">branding</a></div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<h4><?php the_time( get_option( 'date_format' ) ); ?></h4>
						</div>
					</div>
				</a>
			</div>
					<?php }
		wp_reset_postdata(); ?>
			<div class="col-sm-4">
				<div class="divide50"></div>
				<h4></h4>
			</div>
		</div>
		
		
		<div class="row">
        <?php

		$related = get_posts( array( 'category__not_in' => array(316, 314), 'posts_per_page' => 1, 'post__not_in' => $do_not_duplicate ) );
		if( $related ) foreach( $related as $post ) {
			setup_postdata($post); 

			$do_not_duplicate[] = $post->ID;
		?>
			<div class="col-sm-8">
				<a href="<?php the_permalink(); ?>">
					<div class="post_card pc_large">
						<img src="<?php the_post_thumbnail_url(); ?>"
                                 srcset="<?php the_post_thumbnail_url( 's' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'm' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'l' );?> 1500w, 
                                <?php the_post_thumbnail_url( 'xl' ); ?> 1900w" 
                                sizes="(min-width:1363px) 50vw, (max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px"
                                 />
						<div class="overlay"></div>
						<div class="third">
							<div class="info"><a href="#">entertainment</a></div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<h4><?php the_time( get_option( 'date_format' ) ); ?></h4>
						</div>
					</div>
				</a>
			</div>
											<?php }
		wp_reset_postdata(); ?>
			
			        <?php

		$related = get_posts( array( 'category__not_in' => array(316, 314), 'posts_per_page' => 1, 'post__not_in' => $do_not_duplicate ) );
		if( $related ) foreach( $related as $post ) {
			setup_postdata($post); 

			$do_not_duplicate[] = $post->ID;
		?>
			<div class="col-sm-4">
				<a href="<?php the_permalink(); ?>">
					<div class="post_card">
                        
						<img src="<?php the_post_thumbnail_url(); ?>"
                                 srcset="<?php the_post_thumbnail_url( 's' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'm' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'l' );?> 1500w, 
                                <?php the_post_thumbnail_url( 'xl' ); ?> 1900w" 
                                sizes="(min-width:1363px) 25vw, (max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px"
                                 />
						<div class="overlay"></div>
						<div class="third">
							<div class="info"><a href="#">branding</a></div>
							
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<h4><?php the_time( get_option( 'date_format' ) ); ?></h4>
						</div>
					</div>
				</a>
			</div>
								<?php }
		wp_reset_postdata(); ?>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="row">
						<?php

		$related = get_posts( array( 'category__not_in' => array(316, 314), 'posts_per_page' => 2, 'post__not_in' => $do_not_duplicate ) );
		if( $related ) foreach( $related as $post ) {
			setup_postdata($post); 

			$do_not_duplicate[] = $post->ID;
		?>
					<div class="col-sm-6">
						<a href="<?php the_permalink(); ?>">
							<div class="post_card">
								<img src="<?php the_post_thumbnail_url(); ?>"
                                 srcset="<?php the_post_thumbnail_url( 's' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'm' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'l' );?> 1500w, 
                                <?php the_post_thumbnail_url( 'xl' ); ?> 1900w" 
                                sizes="(min-width:1363px) 25vw, (max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px"
                                 />
								<div class="overlay"></div>
								<div class="third">
									<div class="info"><a href="#">branding</a></div>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<h4><?php the_time( get_option( 'date_format' ) ); ?></h4>
								</div>
							</div>
						</a>
					</div>
													<?php }
		wp_reset_postdata(); ?>
                       
                        <?php
							$related = get_posts( array( 'category__not_in' => array(316, 314), 'posts_per_page' => 1, 'post__not_in' => $do_not_duplicate ) );
		if( $related ) foreach( $related as $post ) {
			setup_postdata($post); 

			$do_not_duplicate[] = $post->ID;
		?>
					<div class="col-sm-12">
						<a href="<?php the_permalink(); ?>">
							<div class="post_card pc_large">
								<img src="<?php the_post_thumbnail_url(); ?>"
                                 srcset="<?php the_post_thumbnail_url( 's' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'm' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'l' );?> 1500w, 
                                <?php the_post_thumbnail_url( 'xl' ); ?> 1900w" 
                                sizes="(min-width:1363px) 50vw, (max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px"
                                 />
								<div class="overlay"></div>
								<div class="third">
									<div class="info"><a href="#">entertainment</a></div>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<h4><?php the_time( get_option( 'date_format' ) ); ?></h4>
								</div>
							</div>
						</a>
					</div>
					<?php }
		wp_reset_postdata(); ?>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="relly ">
					<div class="spirearrow">
						<svg data-name="Layer 1" viewBox="0 0 279.3 418.9" xmlns="http://www.w3.org/2000/svg">
							<path transform="translate(-3 -4.3)" d="m132.5 27.6l9.8-23.3 139.6 283.3-18.4 8.9z" data-name="Shape 4 copy 6"/>
							<path transform="translate(-3 -4.3)" d="m133.1 43.5h20.2v379.7h-20.2z" data-name="Shape 5 copy 5"/>
							<path transform="translate(-3 -4.3)" d="m69.1 171.8l11-17.1 195.7 125.6-11 17.1z" data-name="Shape 6 copy 5"/>
							<path transform="translate(-3 -4.3)" d="m26.9 297.7-10.1-17.8 134.4-75.9l10.1 17.8z" data-name="Shape 7 copy 5"/>
							<path transform="translate(-3 -4.3)" d="M10.3,294.9l5.5-20.2,254.5-.3v20.2H10.3v.3Z" data-name="Shape 8 copy 5"/>
							<path transform="translate(-3 -4.3)" d="M147.5,362.3l-11.3,16.8L3,291.5l11.3-16.8Z" data-name="Shape 9 copy 6"/>
							<path transform="translate(-3 -4.3)" d="m282.3 288.5-11.3-17.1-134.8 91.2l11.3 17.1z" data-name="Shape 9 copy 6-2"/>
							<path transform="translate(-3 -4.3)" d="M4.5,288.8l18.1,8.9L153.4,29.1,141.8,8.6Z" data-name="Shape 4 copy 6-2"/>
						</svg>
					</div>
                <div class="spirebar ">
                    <h3><span>Weekly inspiration</span></h3>
                    <?php
                        $do_not_duplicate = array(); // set befor loop variable as array
                    
                        // 1. Loop
                        query_posts('cat=2&showposts=1'); //Change cat id number to what inspiration id number is. 
                        while ( have_posts() ) : the_post();
                            $do_not_duplicate[] = $post->ID; // remember ID's in loop
                    ?>
                            <div class="inspire">
							 <a href="<?php the_permalink(); ?>">
                                 <img src="<?php the_post_thumbnail_url('full'); ?>" 
                                      srcset="<?php the_post_thumbnail_url('xs'); ?>
                                <?php the_post_thumbnail_url( 's' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'm' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'l' );?> 1500w, 
                                <?php the_post_thumbnail_url( 'xl' ); ?> 1900w" 
                                sizes="(min-width:1363px) 25vw, (max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px"
                                      class="width100">
                                </a>
						    </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    ?> 
                    
                    <?php
                        // 2. Loop
                        query_posts( 'cat=2&showposts=9' ); //Change cat id number to what inspiration id number is. 
                        while (have_posts()) : the_post();
                            if ( !in_array( $post->ID, $do_not_duplicate ) ) { // check IDs  
                    ?>
                        <div class="inspire">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_post_thumbnail_url('full'); ?>" 
                                      srcset="<?php the_post_thumbnail_url('xs'); ?> 400w,
                                <?php the_post_thumbnail_url( 's' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'm' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'l' );?> 1500w, 
                                <?php the_post_thumbnail_url( 'xl' ); ?> 1900w" 
                                sizes="(min-width:1363px) 14vw, (max-width: 709px) 45vw, (max-width: 909px) 40vw, (max-width: 1362px) 62vw, 840px"
                                    >
                            </a>
						</div>
                    <?php
                            }
                        endwhile;
                        wp_reset_postdata();
                    ?>
                        <a class="more" href="#"><span>read article</span></a>
					</div>																	
				</div>
			</div>
		</div>
	</div>
	
	<div class="container mt80">
		<div class="grey inner"></div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="row">                       
                        <?php
							$related = get_posts( array( 'category__not_in' => array(316, 314), 'posts_per_page' => 4, 'post__not_in' => $do_not_duplicate ) );
		if( $related ) foreach( $related as $post ) {
			setup_postdata($post); 

			$do_not_duplicate[] = $post->ID;
		?>
					<div class="col-sm-6">
						<a href="<?php the_permalink(); ?>">
							<div class="post_card">
								<img src="<?php the_post_thumbnail_url('full'); ?>" 
                                      srcset="<?php the_post_thumbnail_url('xs'); ?> 400w,
                                <?php the_post_thumbnail_url( 's' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'm' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'l' );?> 1500w, 
                                <?php the_post_thumbnail_url( 'xl' ); ?> 1900w" 
                                sizes="(min-width:1363px) 25vw, (max-width: 709px) 45vw, (max-width: 909px) 40vw, (max-width: 1362px) 62vw, 840px"
                                    >
								<div class="overlay"></div>
								<div class="third">
									<div class="info"><a href="#">branding</a></div>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<h4><?php the_time( get_option( 'date_format' ) ); ?></h4>
								</div>
							</div>
						</a>
					</div>
									<?php }
		wp_reset_postdata(); ?>

				</div>
			</div>
			<div class="col-sm-4">
				<div class="news_bar">
					<div class="followus">
						<h3><span>The Newsletter</span></h3>
						<a href="#"><img src="http://www.rockcityeats.com/wp-content/uploads/2017/06/DSC_4909.jpg" class="width100"></a>
					</div>

					<div class="followus abso">
						<h3><span>Follow CreativesFeed</span></h3>
						<li class="socialsvg"><a href="https://www.facebook.com/CreativesFeed/" itemprop="sameAs" target="_blank" class="allmid"><svg viewBox="0 0 512 512"><path d="M211.9 197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0 0 0-22.1 0-33.7 0-13.9 2.8-19.5 16.3-19.5 10.9 0 38.2 0 38.2 0V82.9c0 0-40.2 0-48.8 0 -52.5 0-76.1 23.1-76.1 67.3C211.9 188.8 211.9 197.4 211.9 197.4z"></path></svg><!--[if lt IE 9]><em>Facebook</em><![endif]--></a></li>
						<li class="socialsvg"><a href="https://twitter.com/creativesfeed" target="_blank" itemprop="sameAs" class="allmid"><svg viewBox="0 0 512 512"><path d="M419.6 168.6c-11.7 5.2-24.2 8.7-37.4 10.2 13.4-8.1 23.8-20.8 28.6-36 -12.6 7.5-26.5 12.9-41.3 15.8 -11.9-12.6-28.8-20.6-47.5-20.6 -42 0-72.9 39.2-63.4 79.9 -54.1-2.7-102.1-28.6-134.2-68 -17 29.2-8.8 67.5 20.1 86.9 -10.7-0.3-20.7-3.3-29.5-8.1 -0.7 30.2 20.9 58.4 52.2 64.6 -9.2 2.5-19.2 3.1-29.4 1.1 8.3 25.9 32.3 44.7 60.8 45.2 -27.4 21.4-61.8 31-96.4 27 28.8 18.5 63 29.2 99.8 29.2 120.8 0 189.1-102.1 185-193.6C399.9 193.1 410.9 181.7 419.6 168.6z"></path></svg><!--[if lt IE 9]><em>Twitter</em><![endif]--></a></li>
						<li class="socialsvg"><a href="https://www.instagram.com/creativesfeed/" itemprop="sameAs" target="_blank" class="allmid"><svg viewBox="0 0 512 512"><g><path d="M256 109.3c47.8 0 53.4 0.2 72.3 1 17.4 0.8 26.9 3.7 33.2 6.2 8.4 3.2 14.3 7.1 20.6 13.4 6.3 6.3 10.1 12.2 13.4 20.6 2.5 6.3 5.4 15.8 6.2 33.2 0.9 18.9 1 24.5 1 72.3s-0.2 53.4-1 72.3c-0.8 17.4-3.7 26.9-6.2 33.2 -3.2 8.4-7.1 14.3-13.4 20.6 -6.3 6.3-12.2 10.1-20.6 13.4 -6.3 2.5-15.8 5.4-33.2 6.2 -18.9 0.9-24.5 1-72.3 1s-53.4-0.2-72.3-1c-17.4-0.8-26.9-3.7-33.2-6.2 -8.4-3.2-14.3-7.1-20.6-13.4 -6.3-6.3-10.1-12.2-13.4-20.6 -2.5-6.3-5.4-15.8-6.2-33.2 -0.9-18.9-1-24.5-1-72.3s0.2-53.4 1-72.3c0.8-17.4 3.7-26.9 6.2-33.2 3.2-8.4 7.1-14.3 13.4-20.6 6.3-6.3 12.2-10.1 20.6-13.4 6.3-2.5 15.8-5.4 33.2-6.2C202.6 109.5 208.2 109.3 256 109.3M256 77.1c-48.6 0-54.7 0.2-73.8 1.1 -19 0.9-32.1 3.9-43.4 8.3 -11.8 4.6-21.7 10.7-31.7 20.6 -9.9 9.9-16.1 19.9-20.6 31.7 -4.4 11.4-7.4 24.4-8.3 43.4 -0.9 19.1-1.1 25.2-1.1 73.8 0 48.6 0.2 54.7 1.1 73.8 0.9 19 3.9 32.1 8.3 43.4 4.6 11.8 10.7 21.7 20.6 31.7 9.9 9.9 19.9 16.1 31.7 20.6 11.4 4.4 24.4 7.4 43.4 8.3 19.1 0.9 25.2 1.1 73.8 1.1s54.7-0.2 73.8-1.1c19-0.9 32.1-3.9 43.4-8.3 11.8-4.6 21.7-10.7 31.7-20.6 9.9-9.9 16.1-19.9 20.6-31.7 4.4-11.4 7.4-24.4 8.3-43.4 0.9-19.1 1.1-25.2 1.1-73.8s-0.2-54.7-1.1-73.8c-0.9-19-3.9-32.1-8.3-43.4 -4.6-11.8-10.7-21.7-20.6-31.7 -9.9-9.9-19.9-16.1-31.7-20.6 -11.4-4.4-24.4-7.4-43.4-8.3C310.7 77.3 304.6 77.1 256 77.1L256 77.1z"></path><path d="M256 164.1c-50.7 0-91.9 41.1-91.9 91.9s41.1 91.9 91.9 91.9 91.9-41.1 91.9-91.9S306.7 164.1 256 164.1zM256 315.6c-32.9 0-59.6-26.7-59.6-59.6s26.7-59.6 59.6-59.6 59.6 26.7 59.6 59.6S288.9 315.6 256 315.6z"></path><circle cx="351.5" cy="160.5" r="21.5"></circle></g></svg><!--[if lt IE 9]><em>Instagram</em><![endif]--></a></li>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
		                        <?php
							$related = get_posts( array( 'category__not_in' => array(316, 314), 'posts_per_page' => 3, 'post__not_in' => $do_not_duplicate ) );
		if( $related ) foreach( $related as $post ) {
			setup_postdata($post); 

			$do_not_duplicate[] = $post->ID;
		?>
			<div class="col-sm-4">
				<a href="<?php the_permalink(); ?>">
					<div class="post_card">
						<img src="<?php the_post_thumbnail_url(); ?>"
                                 srcset="<?php the_post_thumbnail_url( 'xs' ); ?> 400w, 
                                <?php the_post_thumbnail_url( 's' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'm' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'l' );?> 1500w, 
                                <?php the_post_thumbnail_url( 'xl' ); ?> 1900w,
                                <?php the_post_thumbnail_url( 'fs' ); ?> 1920w" 
                                sizes="(min-width:1363px) 25vw, (max-width: 1362px) 62vw, (max-width: 909px) 67vw, (max-width: 709px) 85vw,   840px, (max-width:400px) 85vw"
                                 />
						<div class="overlay"></div>
						<div class="third">
							<div class="info"><a href="#">branding</a></div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</div>
					</div>
				</a>
			</div>
												<?php }
		wp_reset_postdata(); ?>

        <?php
            $related = get_posts( array( 'category__not_in' => array(316, 314), 'posts_per_page' => 1, 'post__not_in' => $do_not_duplicate ) );
            if( $related ) foreach( $related as $post ) {
			setup_postdata($post); 
        ?>
			<div class="col-sm-8">
				<a href="<?php the_permalink(); ?>">
					<div class="post_card">
						<img src="<?php the_post_thumbnail_url(); ?>"
                                 srcset="<?php the_post_thumbnail_url( 'xs' ); ?> 400w, 
                                <?php the_post_thumbnail_url( 's' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'm' ); ?> 650w, 
                                <?php the_post_thumbnail_url( 'l' );?> 1500w, 
                                <?php the_post_thumbnail_url( 'xl' ); ?> 1900w" 
                                sizes="(min-width:1363px) 50vw, (max-width: 1362px) 62vw, (max-width: 909px) 67vw, (max-width: 709px) 85vw,   840px, (max-width:400px) 85vw"
                                 />
						<div class="overlay"></div>
						<div class="third">
							<div class="info"><a href="#">design</a></div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</div>
					</div>
				</a>
			</div>
        <?php }
		wp_reset_postdata(); ?>
		</div>
	</div>
	
	<div class="mt80"></div>
	
	<div class="blue inner">
		<div class="contain">
			<h3>Time's up, let's do this</h3>
			<div class="newsletter">
				<input type="text" placeholder="Your email" class="newsletter-input" /><input class="newsletter-send" type="submit" value="Send">
			</div>
		</div>
	</div>
	

<?php
get_footer();
?>
