// Copy-email button
(function () {
  var btn = document.getElementById('copy-email');
  var text = document.getElementById('email-text');
  if (!btn || !text) return;

  function selectText() {
    try {
      var r = document.createRange();
      r.selectNodeContents(text);
      var s = window.getSelection();
      s.removeAllRanges();
      s.addRange(r);
    } catch (e) {}
  }

  function flash(msg) {
    btn.textContent = msg;
    setTimeout(function () { btn.textContent = 'Copy email'; }, 2000);
  }

  btn.addEventListener('click', function () {
    try {
      navigator.clipboard.writeText(text.textContent.trim()).then(
        function () { flash('Copied'); },
        function () { selectText(); flash('Press Ctrl+C'); }
      );
    } catch (e) {
      selectText();
      flash('Press Ctrl+C');
    }
  });
})();
