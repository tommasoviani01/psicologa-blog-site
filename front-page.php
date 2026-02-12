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
          <img src="<?php echo bloginfo("template_url"); ?>/assets/img/hero.svg" alt="Spazio di ascolto"/></div>
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
      <div class="card"><div class="pad">
        <h3>Colloquio psicologico</h3><p class="muted">Primo spazio per inquadrare difficoltà, risorse e obiettivi.</p>
        <div class="meta-line"><span class="chip">🧭 orientamento</span><span class="chip">📝 obiettivi</span></div>
      </div></div>
      <div class="card"><div class="pad">
        <h3>Percorso su ansia e stress</h3><p class="muted">Strumenti per gestire l’attivazione e ridurre evitamenti.</p>
        <div class="meta-line"><span class="chip">🫁 respiro</span><span class="chip">🧠 pensieri</span></div>
      </div></div>
      <div class="card"><div class="pad">
        <h3>Online</h3><p class="muted">Videochiamata con continuità e setting definito (demo).</p>
        <div class="meta-line"><span class="chip">💻 online</span><span class="chip">⏱️ 50 min</span></div>
      </div></div>
    </div>

    <h2 class="section-title">Dal blog</h2>
    <p class="muted" style="margin-top:0">Articoli divulgativi (demo) su ansia, relazioni, burnout, sonno.</p>
    <div class="grid"><a class="card" href="<?php echo get_permalink(); ?>ansia-cosa-succede-nel-corpo-e-cosa-puo-aiutare">
  <div class="feature">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/posts/ansia.svg" alt="Ansia: cosa succede nel corpo e cosa può aiutare"/>
    <div class="tag">🏷️ Ansia</div>
    <div class="date">12/01/2026</div>
  </div>
  <div class="pad">
    <h3>Ansia: cosa succede nel corpo e cosa può aiutare</h3>
    <p>Riconoscere i segnali e imparare strategie semplici (non magiche) per gestire l’attivazione.</p>
    <div class="meta-line">
      <span class="chip">🕒 6 min</span>
      <span class="chip">🧠 psicologia</span>
    </div>
    <hr class="sep" />
    <span class="btn primary">Leggi →</span>
  </div>
</a>
<a class="card" href="<?php echo get_permalink(); ?>burnout-segnali-precoci-e-micro-cambiamenti-sostenibili">
  <div class="feature">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/posts/burnout.svg" alt="Burnout: segnali precoci e micro-cambiamenti sostenibili"/>
    <div class="tag">🏷️ Lavoro</div>
    <div class="date">06/01/2026</div>
  </div>
  <div class="pad">
    <h3>Burnout: segnali precoci e micro-cambiamenti sostenibili</h3>
    <p>Non è solo stanchezza: riconoscere i campanelli d’allarme e impostare confini realistici.</p>
    <div class="meta-line">
      <span class="chip">🕒 6 min</span>
      <span class="chip">🧠 psicologia</span>
    </div>
    <hr class="sep" />
    <span class="btn primary">Leggi →</span>
  </div>
</a>
<a class="card" href="<?php echo get_permalink(); ?>confini-nelle-relazioni-dire-no-senza-sentirsi-cattivi">
  <div class="feature">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/posts/relazioni.svg" alt="Confini nelle relazioni: dire no senza sentirsi cattivi"/>
    <div class="tag">🏷️ Relazioni</div>
    <div class="date">28/12/2025</div>
  </div>
  <div class="pad">
    <h3>Confini nelle relazioni: dire no senza sentirsi cattivi</h3>
    <p>Confini chiari = relazioni più serene. Una mini guida per iniziare con frasi semplici.</p>
    <div class="meta-line">
      <span class="chip">🕒 5 min</span>
      <span class="chip">🧠 psicologia</span>
    </div>
    <hr class="sep" />
    <span class="btn primary">Leggi →</span>
  </div>
</a></div>
    <div style="margin-top:16px"><a class="btn" href="<?php echo get_permalink(get_page_by_path('blog'))?>">Vai al blog →</a></div>

    <div class="callout" style="margin-top:18px">Nota: i contenuti del blog sono informativi (demo) e non sostituiscono una valutazione clinica.</div>
  </main>

  <?php get_footer(); ?>