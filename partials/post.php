<a class="card" href="<?php the_permalink(); ?>">
  <div class="feature">
    <?php the_post_thumbnail(); ?>
    <div class="tag"><?php $cats = get_the_category();
          if ( $cats ) : ?> 🏷️ <?php echo esc_html( $cats[0]->name ); endif; ?></div>
    <div class="date"><?php the_date(); ?></div>
  </div>
  <div class="pad">
    <h3><?php the_title(); ?></h3>
    <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 25 ) ); ?></p>
    <div class="meta-line">
      <span class="chip">🕒 6 min</span>
      <span class="chip">🧠 psicologia</span>
    </div>
    <hr class="sep" />
    <span class="btn primary">Leggi →</span>
  </div>
</a>