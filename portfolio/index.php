<?php
/*
 * PAGE STRUCTURE. You normally do not need to edit this file.
 * Words are in content.php, colours and fonts are in css/style.css.
 */
$s = require __DIR__ . '/content.php';

function e($v) { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }
function tags(array $items) {
    $out = '';
    foreach ($items as $t) { $out .= '<span class="tag">' . e($t) . '</span>'; }
    return $out;
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($s['name']) ?> | Portfolio</title>
  <meta name="description" content="<?= e($s['meta_description']) ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500;12..96,700&family=DM+Sans:wght@400;500;700&family=JetBrains+Mono:wght@400;500&display=swap">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="nav">
  <div class="wrap">
    <a class="brand" href="#top"><?= e($s['brand']) ?><span>.dev</span></a>
    <nav aria-label="Sections">
      <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>

<main class="wrap" id="top">

  <!-- HERO -->
  <div class="hero">
    <div>
      <p class="hello"><?= e($s['hero']['greeting']) ?></p>
      <h1><?= e($s['hero']['headline']) ?> <em><?= e($s['hero']['nickname']) ?></em>.</h1>
      <p class="role"><?= e($s['hero']['role']) ?></p>
      <p class="pitch"><?= e($s['hero']['pitch']) ?></p>
      <div class="cta">
        <a class="btn btn-solid" href="#projects">See my work</a>
        <a class="btn btn-ghost" href="#contact">Get in touch</a>
      </div>
    </div>
    <div class="photo-wrap">
      <span class="spark a" aria-hidden="true"></span>
      <span class="spark b" aria-hidden="true"></span>
      <img class="photo" src="<?= e($s['hero']['photo']) ?>" alt="<?= e($s['hero']['photo_alt']) ?>" width="400" height="400">
    </div>
  </div>

  <!-- ABOUT -->
  <section id="about">
    <p class="label">// about</p>
    <h2><?= e($s['about']['title']) ?></h2>
    <div class="about">
      <div>
        <?php foreach ($s['about']['paragraphs'] as $p): ?>
          <p><?= e($p) ?></p>
        <?php endforeach; ?>
        <div class="facts">
          <?php foreach ($s['about']['facts'] as $f): ?>
            <div class="fact"><b><?= e($f['value']) ?></b><span><?= e($f['label']) ?></span></div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php $c = $s['about']['code']; ?>
      <div class="code" aria-label="Quick profile">
        <div class="code-top" aria-hidden="true"><i></i><i></i><i></i></div>
<pre><span class="k">const</span> farah = {
  role:       <span class="k">"<?= e($c['role']) ?>"</span>,
  stack:      [<?= implode(', ', array_map(function ($x) { return '<span class="k">"' . e($x) . '"</span>'; }, $c['stack'])) ?>],
  graduates:  <span class="k">"<?= e($c['graduates']) ?>"</span>,
  lookingFor: <span class="k">"<?= e($c['lookingFor']) ?>"</span>,
  learning:   <span class="k">"<?= e($c['learning']) ?>"</span>
};<span class="cursor" aria-hidden="true"></span></pre>
      </div>
    </div>
  </section>

  <!-- EXPERIENCE -->
  <section id="experience">
    <p class="label">// experience</p>
    <h2>Where I've worked and built</h2>
    <ol class="timeline">
      <?php foreach ($s['experience'] as $x): ?>
      <li class="tl">
        <div class="card">
          <p class="when"><?= e($x['when']) ?></p>
          <h3><?= e($x['title']) ?></h3>
          <p class="org"><?= e($x['org']) ?></p>
          <ul>
            <?php foreach ($x['bullets'] as $b): ?><li><?= e($b) ?></li><?php endforeach; ?>
          </ul>
        </div>
      </li>
      <?php endforeach; ?>
    </ol>
  </section>

  <!-- PROJECTS -->
  <section id="projects">
    <p class="label">// projects</p>
    <h2>Things I've made</h2>
    <div class="projects">
      <?php foreach ($s['projects'] as $p): ?>
      <article class="card proj">
        <img src="<?= e($p['image']) ?>" alt="<?= e($p['alt']) ?>" width="640" height="400">
        <div class="body">
          <h3><?= e($p['title']) ?></h3>
          <p><?= e($p['text']) ?></p>
          <div class="tags"><?= tags($p['tags']) ?></div>
          <?php if (!empty($p['link'])): ?>
            <p><a class="btn btn-ghost btn-sm" href="<?= e($p['link']) ?>" target="_blank" rel="noopener"><?= e($p['link_label']) ?></a></p>
          <?php endif; ?>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- SKILLS -->
  <section id="skills">
    <p class="label">// skills</p>
    <h2>What I work with</h2>
    <div class="skills">
      <?php foreach ($s['skills'] as $g): ?>
      <div class="card">
        <h3><?= e($g['title']) ?></h3>
        <p class="hint"><?= e($g['hint']) ?></p>
        <div class="tags"><?= tags($g['items']) ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- EDUCATION, LANGUAGES, ACHIEVEMENTS -->
  <section id="education">
    <p class="label">// education &amp; more</p>
    <h2>Learning beyond the classroom</h2>
    <div class="two">
      <div class="card">
        <h3>Education</h3>
        <ul class="list">
          <li><b><?= e($s['education']['degree']) ?></b><br><?= e($s['education']['school']) ?><br><span class="muted"><?= e($s['education']['note']) ?></span></li>
        </ul>
        <h3 class="gap-top">Languages</h3>
        <div class="langs">
          <?php foreach ($s['languages'] as $l): ?>
            <div class="lang"><span><?= e($l['name']) ?></span><span><?= e($l['level']) ?></span></div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="card">
        <h3>Achievements and activities</h3>
        <ul class="list">
          <?php foreach ($s['achievements'] as $a): ?><li><?= e($a) ?></li><?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact">
    <?php $k = $s['contact']; ?>
    <?php var_dump($k['whatsapp']); ?>
    <div class="contact">
      <p class="label">// contact</p>
      <h2><?= e($k['title']) ?></h2>
      <p><?= e($k['text']) ?></p>
      <div class="email-row">
        <a class="email" id="email-text" href="mailto:<?= e($k['email']) ?>"><?= e($k['email']) ?></a>
        <a class="btn" href="mailto:<?= e($k['email']) ?>">Email me</a>
        <?php if (!empty($k['whatsapp'])): ?>
          <a class="btn btn-ghost" href="https://wa.me/<?= e($k['whatsapp']) ?>" target="_blank" rel="noopener noreferrer">WhatsApp me</a>
        <?php endif; ?>
        <button class="btn" id="copy-email" type="button">Copy email</button>
      </div>
      <?php if (!empty($k['github']) || !empty($k['linkedin'])): ?>
      <div class="links">
        <?php if (!empty($k['github'])): ?><a class="btn btn-ghost" href="<?= e($k['github']) ?>" target="_blank" rel="noopener">GitHub</a><?php endif; ?>
        <?php if (!empty($k['linkedin'])): ?><a class="btn btn-ghost" href="<?= e($k['linkedin']) ?>" target="_blank" rel="noopener">LinkedIn</a><?php endif; ?>
      </div>
      <?php endif; ?>
      <p class="small"><?= e($k['note']) ?></p>
    </div>
  </section>

  <footer>&copy; <?= date('Y') ?> <?= e($s['full_name']) ?></footer>
</main>

<script src="js/main.js"></script>
</body>
</html>
