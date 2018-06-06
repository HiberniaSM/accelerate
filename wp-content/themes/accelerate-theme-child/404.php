<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<body id="error">
                <header class="error_header">
                    <h1>404! Incoming!</h1>
                    <h4>You are in the wrong place my friend!</h4>
                </header>
                <div class="error_main">
                    <div class="error_text">
                        <p>Your sisters and brothers here at Accelerate regret to inform you that you are in the wrong place. This page either no longer exists, never existed, or has been moved.
                        </p>
                        <p>Maybe you'll feel better if you take a look at our <a href="/accelerate/blog/">blog</a> or some of our <a href="/accelerate/case-studies/">featured work!</a>
                        </p>
                    </div>
                    <div class=error_img>
                    <img src="/accelerate/wp-content/uploads/2018/04/wine_stain_404.png" alt="wine stain image" width="300px">
                    </div>
                </div>
            </body>
		</div><!-- .main-content -->

		

	</div><!-- #primary -->

<?php get_footer(); ?>