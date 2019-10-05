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

					<div id="pagi">
						<?php
							the_posts_pagination(array(
								'show_all' => TRUE,
								'prev_text' => 'PREVIOUS',
								'next_text' => 'NEXT',
								'screen_reader_text' => ' '
							));
						?>
					</div>

				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>