<?php get_header(); ?>

 <main class="container">
    <div class="breadcrumb"><a href="<?php echo home_url(); ?>">Home</a> <span>›</span> <a href="<?php echo get_permalink(get_page_by_path('blog')); ?>">Blog</a> <span>›</span> <span>Articolo</span></div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="article">
      <div class="content">
        <div class="meta-line">
          <span class="chip">🏷️ <?php the_category(', '); ?></span>
          <span class="chip">📅 <?php echo get_the_date(); ?></span>
          <span class="chip">🕒 5 min</span>
        </div>
        <h1 style="margin-top:12px"><?php the_title(); ?></h1>
            <p class="single-post-meta">
        </p>
      </header>

      <div class="single-post-content">
        <?php the_content(); ?>
      </div>
      <div style="display:flex; gap:10px; flex-wrap:wrap">
          <a class="btn" href="<?php echo get_permalink(get_page_by_path('blog'))?>">← Torna al blog</a>
          <a class="btn primary" href="<?php echo get_permalink(get_page_by_path('contatti'))?>">Contattami →</a>
        </div>
    </article>

    <?php endwhile; endif; ?>

    <?php get_sidebar(); ?>
  </main>
<?php
  $altri = new WP_Query([
    'posts_per_page' => 3,
    'post__not_in'   => [ get_the_ID() ],
    'orderby'        => 'date',
    'order'          => 'DESC',
  ]);
?>

<?php if ( $altri->have_posts() ) : ?>
  <section class="container" style="margin-top: 32px;">
    <h2 class="section-title">Altri articoli</h2>
    <div class="grid">
      <?php while ( $altri->have_posts() ) : $altri->the_post();
        $c = get_the_category();
        $word_count = str_word_count( strip_tags( get_the_content() ) );
        $reading_time = max( 1, round( $word_count / 200 ) );
      ?>
      <a href="<?php the_permalink(); ?>" class="card">
        <div class="feature">
          <?php if ( $c ) : ?>
            <span class="tag">🧠 <?php echo esc_html( $c[0]->name ); ?></span>
          <?php endif; ?>
          <span class="date"><?php echo get_the_date('d/m/Y'); ?></span>
          <?php the_post_thumbnail('medium'); ?>
        </div>
        <div class="pad">
          <h3><?php the_title(); ?></h3>
          <p><?php echo wp_trim_words( get_the_excerpt(), 12 ); ?></p>
          <div class="meta-line">
            <span class="chip">🕐 <?php echo $reading_time; ?> min</span>
            <?php if ( $c ) : ?>
              <span class="chip">🧠 <?php echo esc_html( $c[0]->name ); ?></span>
            <?php endif; ?>
          </div>
        </div>
      </a>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </section>
<?php endif; ?>


<?php get_footer(); ?>