  </main>
</div>

<!-- Font Awesome 6 Free einbinden -->
<link rel="stylesheet" href="/assets/fontawesome/css/all.min.css">

<!-- HightLight.js einbinden -->
<link rel="stylesheet" href="/assets/highlightjs/styles/default.min.css">
<script src="/assets/highlightjs/highlight.min.js"></script>
<script>hljs.highlightAll();</script>

<!-- TinyMCE-Editor einbinden -->
<script src="/assets/tinymce/tinymce.min.js"></script>
<script>
tinymce.init({
    selector: 'textarea',
    license_key: 'gpl',
    content_css:
    [
        '/assets/highlightjs/styles/default.min.css',
        '/stylesheet/tm-editor.css'
    ],
    menubar: false,
    language: 'de',
    language_url: '/assets/tinymce/langs/de.js',
    plugins: 'code table lists fullscreen wordcount link image autosave advlist codesample preview',
    toolbar: 'code undo redo | bold italic | blocks | link image codesample table blockquote | bullist numlist | alignleft aligncenter alignright removeformat preview',
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