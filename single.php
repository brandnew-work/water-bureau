<?php
get_header();

$next_post = get_next_post();
$prev_post = get_previous_post();
$next_post_url = !empty( $next_post ) ? get_permalink( $next_post->ID ) : false;
$prev_post_url = !empty( $prev_post ) ? get_permalink( $prev_post->ID ) : false;

$title = get_the_title();
$date_format = get_option('date_format');
$time = get_the_date($date_format);
$datetime = get_the_date('Y-m-d');
?>

<div>
  <main>
    <div class="post-content">
      <div class="post-content__inner inner">
        <div class="post-content__header">
          <div class="post-content__time">
            <time date-time="<?= $datetime ?>"><?= $time ?></time>
          </div>
          <h1 class="post-content__title"><?= $title ?></h1>
        </div>
        <?php the_content() ?>
      </div>
      <?php get_template_part('components/pagination', '') ?>
    </div>
  </main>
</div>
<?php get_footer(); ?>
