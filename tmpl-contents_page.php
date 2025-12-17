<?php
get_header();

/* Template Name: コンテンツのみのページ */

?>

<main>
  <div class="inner py-high">
    <h1 class="pt-high"><?= get_the_title() ?></h1>
    <div class="contents mt-high">
      <?php the_content() ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>