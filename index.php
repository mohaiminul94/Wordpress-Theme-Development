﻿<?php get_header(); ?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">

					<?php while(have_posts()):the_post(); ?>

					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_time('F d, Y'); ?> with <?php comments_popup_link('No comments', '1 comment', '% comments'); ?>]</div>
						<h1><?php the_time('d F, Y | g:i a'); ?></h1>
						<p><?php read_more(30); ?>...<a href="<?php the_permalink(); ?>">read more</a></p>
					</article>

					<?php endwhile; ?>

					<ul id="pagi">
						<li><a class="current" href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">next</a></li>
					</ul>
				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>