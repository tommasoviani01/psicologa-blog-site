<?php get_header(); ?>

  <main class="container">
    <div class="breadcrumb"><a href="<?php echo home_url(); ?>">Home</a> <span>›</span> <span>Chi sono</span></div>
    <h2 class="section-title">Chi sono</h2>
    <div class="split">
      <section class="panel">
        <div class="kicker"><span class="dot"></span> (Sito demo per esercitazione)</div>
        <h1 style="margin-top:14px">Dott.ssa Giulia Serra</h1>
        <p class="muted">Psicologa con interesse per benessere, gestione dell’ansia e relazioni. Percorsi costruiti insieme, rispettando tempi e contesto.</p>
        <p class="muted">Il primo incontro serve a capire cosa stai vivendo e cosa desideri ottenere dal percorso.</p>
        <div class="actions" style="margin-top:12px">
          <a class="btn primary" href="<?php echo get_permalink(get_page_by_path('contatti'))?>">Contattami</a>
          <a class="btn" href="<?php echo get_permalink(get_page_by_path('blog'))?>">Blog</a>
        </div>
      </section>
      <aside class="panel">
        <h3 style="margin:0 0 10px">A cosa può servire</h3>
        <ul class="muted" style="margin:0; padding-left:18px; display:grid; gap:8px">
          <li>Gestire ansia, stress e rimuginio</li>
          <li>Rafforzare confini e comunicazione</li>
          <li>Affrontare momenti di cambiamento</li>
          <li>Migliorare sonno e recupero</li>
        </ul>
        <hr class="sep" />
        <p class="muted">Nota WP: pagina perfetta per <em>page.php</em> con blocchi riutilizzabili.</p>
      </aside>
    </div>
  </main>

<?php get_footer(); ?>