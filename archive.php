<?php
get_header();
?>

  <main>
    <article>
      <section class="inner">
        <div class="post-list">
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('components/post-item', '') ?>
          <?php endwhile; ?>
        </div>

        <?php get_template_part('components/pagination', '') ?>

      </section>
    </article>
  </main>

<?php get_footer(); ?>
