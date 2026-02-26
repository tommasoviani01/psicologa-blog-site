<?php get_header(); ?>

  <main class="container">
    <div class="breadcrumb"><a href="<?php echo home_url(); ?>">Home</a> <span>›</span> <span>Servizi</span></div>
    <h2 class="section-title">Servizi</h2>
    <p class="muted" style="margin-top:0">Esempi (demo). In WordPress puoi gestire questi contenuti come pagine o CPT.</p>
    <div class="grid">
      <div class="card"><div class="pad">
        <h3>Primo colloquio</h3><p class="muted">Raccolta informazioni, obiettivi, come lavoreremo insieme.</p>
        <div class="meta-line"><span class="chip">🧭 orientamento</span><span class="chip">📝 obiettivi</span></div>
      </div></div>
      <div class="card"><div class="pad">
        <h3>Percorso individuale</h3><p class="muted">Incontri periodici per costruire strumenti e consapevolezza.</p>
        <div class="meta-line"><span class="chip">🧠 strumenti</span><span class="chip">⏱️ costanza</span></div>
      </div></div>
      <div class="card"><div class="pad">
        <h3>Online</h3><p class="muted">Videochiamata in setting definito. Continuità e privacy.</p>
        <div class="meta-line"><span class="chip">💻 online</span><span class="chip">🔒 privacy</span></div>
      </div></div>
    </div>
    <div class="callout" style="margin-top:16px">Suggerimento: in WP puoi integrare un sistema di prenotazione o un modulo contatti dedicato.</div>
    <div style="margin-top:16px"><a class="btn primary" href="<?php echo get_permalink(get_page_by_path('contatti'))?>">Richiedi informazioni →</a></div>
  </main>

<?php get_footer(); ?>