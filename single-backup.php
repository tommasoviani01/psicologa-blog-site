<?php get_header(); ?>

<main class="site-main container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php
    // Calcolo tempo di lettura
    $content = get_the_content();
    $word_count = str_word_count( strip_tags( $content ) );
    $reading_time = max( 1, round( $word_count / 200 ) );

    // Categoria
    $cats = get_the_category();
    $cat_name = $cats ? esc_html( $cats[0]->name ) : '';
  ?>

  <nav class="breadcrumb">
    <a href="<?php echo home_url(); ?>">Home</a> ›
    <a href="<?php echo get_permalink( get_option('page_for_posts') ); ?>">Blog</a> ›
    <span>Articolo</span>
  </nav>

  <article class="single-post-card">

    <header class="single-post-header">
      <?php if ( $cat_name ) : ?>
        <span class="badge badge-category">🧠 <?php echo $cat_name; ?></span>
      <?php endif; ?>
      <span class="badge badge-date">📅 <?php echo get_the_date('l j F Y'); ?></span>
      <span class="badge badge-read">🕐 <?php echo $reading_time; ?> min</span>

      <h1 class="single-post-title"><?php the_title(); ?></h1>

      <?php if ( has_excerpt() ) : ?>
        <p class="single-post-excerpt"><?php the_excerpt(); ?></p>
      <?php endif; ?>
    </header>

    <div class="single-post-content">
      <?php the_content(); ?>
    </div>

    <div class="single-post-highlight">
      <?php /* Puoi mettere qui un campo ACF tipo 'strategia' se ce l'hai, oppure lasci vuoto */ ?>
    </div>

    <footer class="single-post-footer">
      <a href="<?php echo get_permalink( get_option('page_for_posts') ); ?>" class="btn btn-outline">← Torna al blog</a>
      <a href="<?php echo home_url('/contatti'); ?>" class="btn btn-primary">Contattami →</a>
    </footer>

  </article>

  <?php
    // Altri articoli correlati
    $altri = new WP_Query([
      'posts_per_page' => 3,
      'post__not_in'   => [ get_the_ID() ],
      'orderby'        => 'date',
      'order'          => 'DESC',
    ]);
  ?>

  <?php if ( $altri->have_posts() ) : ?>
    <section class="altri-articoli">
      <h2>Altri articoli</h2>
      <div class="altri-articoli-grid">
        <?php while ( $altri->have_posts() ) : $altri->the_post();
          $c = get_the_category();
        ?>
        <a href="<?php the_permalink(); ?>" class="card-articolo">
          <?php if ( $c ) : ?>
            <span class="badge badge-category">🧠 <?php echo esc_html( $c[0]->name ); ?></span>
          <?php endif; ?>
          <span class="badge badge-date"><?php echo get_the_date('d/m/Y'); ?></span>
          <?php the_post_thumbnail('medium'); ?>
          <h3><?php the_title(); ?></h3>
        </a>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </section>
  <?php endif; ?>

  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>