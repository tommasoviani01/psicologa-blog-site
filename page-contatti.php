<?php get_header(); ?>

  <main class="container">
    <div class="breadcrumb"><a href="index.html">Home</a> <span>›</span> <span>Contatti</span></div>
    <h2 class="section-title">Contatti</h2>
    <p class="muted" style="margin-top:0">Sito statico: il form usa <em>mailto</em>.</p>
    <div class="split">
      <section class="panel">
        <h3 style="margin:0 0 8px">Richiedi un colloquio</h3>
        <div class="meta-line" style="margin-top:12px">
          <span class="chip">☎️ +39 06 0000 0000</span>
          <a class="chip" href="mailto:studio@giuliaserra.test?subject=Richiesta%20colloquio">✉️ studio@giuliaserra.test</a>
          <span class="chip">📍 Roma / Online</span>
        </div>
        <hr class="sep" />
        <form class="form" action="mailto:studio@giuliaserra.test" method="post" enctype="text/plain">
          <div><label for="nome">Nome</label><input id="nome" name="Nome" placeholder="Es. Laura"/></div>
          <div><label for="tema">Tema</label><input id="tema" name="Tema" placeholder="Es. ansia / stress / relazioni"/></div>
          <div><label for="messaggio">Messaggio</label><textarea id="messaggio" name="Messaggio" placeholder="Scrivi qui..."></textarea></div>
          <button class="btn primary" type="submit">Apri email →</button>
        </form>
      </section>
      <aside class="panel">
        <h3 style="margin:0 0 8px">Nota</h3>
        <p class="muted" style="margin-top:0">Le informazioni sul sito sono divulgative (demo) e non sostituiscono una valutazione clinica. In caso di emergenza, contatta i servizi di emergenza del tuo territorio.</p>
        <hr class="sep" />
        <div class="pill">Setting</div>
        <p class="muted" style="margin-top:10px">In presenza (su appuntamento) o online. Durata tipica incontro: 50 min (demo).</p>
      </aside>
    </div>
  </main>

<?php get_footer(); ?>