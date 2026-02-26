<?php get_header(); ?>

  <section class="hero">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container hero-grid">
      <div class="hero-copy">
        <div class="kicker"><span class="dot"></span> uno spazio di ascolto e consapevolezza</div>
        <h1>Prendersi cura di sé, un passo alla volta.</h1>
        <p class="lead">Dott.ssa Giulia Serra (demo) — supporto psicologico, gestione dell’ansia e percorsi sul benessere. Nel blog trovi articoli divulgativi e pratici.</p>
        <div class="actions">
          <a class="btn primary" href="<?php echo get_permalink(get_page_by_path('contatti'))?>">Richiedi un colloquio</a>
          <a class="btn" href="<?php echo get_permalink(get_page_by_path('servizi'))?>">Servizi</a>
          <a class="btn" href="<?php echo get_permalink(get_page_by_path('blog'))?>">Leggi il blog</a>
        </div>
      </div>
      <aside class="hero-media">
        <div class="img">
          <?php the_post_thumbnail(); ?></div>
        <div class="meta">
          <div class="pill">Approccio</div>
          <div>✓ ascolto e strumenti pratici</div>
          <div>✓ obiettivi realistici</div>
          <div>✓ percorso personalizzato</div>
        </div>
      </aside>
    </div>
    <?php endwhile; endif; ?>
  </section>


  <main class="container">
    <h2 class="section-title">Servizi</h2>
    <div class="grid">
  <?php
      $query = new WP_Query(['posts_per_page' => 3]);
      ?>

      <?php if ($query->have_posts()) : ?>
        <?php  while ($query->have_posts()): $query->the_post();
          get_template_part('partials/post');
        endwhile; ?>
      <?php else: ?>
        <p>Nessun articolo pubblicato.</p>
      <?php endif; ?>    
  </div>
    <div style="margin-top:16px"><a class="btn" href="<?php echo get_permalink(get_page_by_path('blog'))?>">Vai al blog →</a></div>

    <div class="callout" style="margin-top:18px">Nota: i contenuti del blog sono informativi (demo) e non sostituiscono una valutazione clinica.</div>
  </main>

  <?php get_footer(); ?>