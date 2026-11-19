PORTFOLIO - Nurfarah Adibah
===========================

FOLDER
  index.php        page structure (usually no need to edit)
  content.php      ALL your words: about, experience, projects, skills, contact
  css/style.css    colours and fonts (see the :root block at the top)
  js/main.js       copy-email button
  assets/          your photo and project screenshots
  index.html       ready-made static copy of the page (see "Publish" below)

EDIT
  1. Words:   open content.php, change the text inside the quotes, save.
  2. Colours: open css/style.css, change the colour values at the top (:root).
              Fonts are in the same block (names must match Google Fonts).
  3. Photos:  put your picture in assets/ and set 'photo' in content.php
              (or just replace assets/photo.svg with your own file and
              update the path, e.g. "assets/photo.jpg").
              Do the same for each project's 'image'.
  4. Links:   paste your GitHub / LinkedIn / project links in content.php.
              A link left as "" is hidden automatically.

RUN ON YOUR COMPUTER
  Install XAMPP (or any PHP 7.4+). Copy this folder into htdocs, start Apache,
  open http://localhost/portfolio/
  Or, with PHP installed, run inside this folder:  php -S localhost:8000
  then open http://localhost:8000

PUBLISH (so examiners and recruiters can open it)
  Option A - static hosting (easiest, free): GitHub Pages, Netlify, Cloudflare Pages.
     These do not run PHP, so upload index.html + css/ + js/ + assets/.
     After every edit in content.php, regenerate index.html first:
        php index.php > index.html
  Option B - PHP hosting (for example InfinityFree or any shared hosting):
     upload the whole folder. Edits to content.php show immediately.
  Tip: name the repository yourname.github.io for a clean GitHub Pages address.

PRIVACY
  The page is public. Phone numbers and referee contacts are left out on purpose.
  Add them only if you are comfortable with anyone seeing them.
