  </main>
</div>

<!--- Stimulus einbinden --->
<script type="module" src="../assets/stimulus-bootstrap.js"></script>

<!-- Font Awesome 6 Free einbinden -->
<link rel="stylesheet" href="/assets/fontawesome/css/all.min.css">

<!-- HightLight.js einbinden -->
<link rel="stylesheet" href="/assets/highlight/styles/default.min.css">
<script src="/assets/highlight/highlight.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    if (!window.hljs) return;

    // Highlight everything present at load
    hljs.highlightAll();

    // Observe dynamically inserted content (e.g., blog articles)
    const root = document.querySelector('[data-controller="blogPage"], [data-controller="knowHowPage"]') || document.body;
    const observer = new MutationObserver((mutationList) => {
      for (const mutation of mutationList) {
        mutation.addedNodes.forEach((node) => {
          if (!(node instanceof Element)) return;

          // If the added node itself is a code block
          if (node.matches('pre code') && !node.classList.contains('hljs')) {
            hljs.highlightElement(node);
          }

          // Or if it contains code blocks inside
          node.querySelectorAll('pre code:not(.hljs)').forEach((el) => {
            hljs.highlightElement(el);
          });
        });
      }
    });

    observer.observe(root, { childList: true, subtree: true });
  });
</script>

<!-- TinyMCE-Editor einbinden -->
<script src="/assets/tinymce/tinymce.min.js"></script>
<script>
tinymce.init({
    selector: 'textarea',
    license_key: 'gpl',
    content_css:
    [
        '/assets/highlight/styles/default.min.css',
        '/stylesheet/tm-editor.css'
    ],
    menubar: false,
    language: 'de',
    language_url: 'https://samwilliam.de/assets/tinymce/langs/de.js',
    formats: {
        labelspan: { inline: 'span', classes: 'label' }
    },
    extended_valid_elements: 'span[class]',
    plugins: 'anchor autolink charmap emoticons code table lists fullscreen wordcount link image autosave advlist codesample preview',
    setup: function (editor) {
        editor.ui.registry.addToggleButton('labelspan', {
            tooltip: 'Als Label markieren',
            text: 'Label',
            onAction: function () {
                editor.formatter.toggle('labelspan');
            },
            onSetup: function (api) {
                var handler = function () {
                    api.setActive(editor.formatter.match('labelspan'));
                };
                editor.on('NodeChange', handler);
                return function () {
                    editor.off('NodeChange', handler);
                };
            }
        });
    },
    toolbar: 'code undo redo | bold italic | blocks | labelspan | link image codesample table blockquote | bullist numlist | alignleft aligncenter alignright removeformat preview',
    fontsize_formats: "10pt 12pt 14pt 16pt 18pt 24pt 36pt"
});
document.querySelector("form")?.addEventListener("submit", function () {
  if (typeof tinymce !== "undefined") {
    tinymce.triggerSave();
  }
});
</script>
<style>
.tox .tox-statusbar {
    display: none;
}
</style>
</body>
</html>