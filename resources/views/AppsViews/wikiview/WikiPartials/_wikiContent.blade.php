<div class="option-page-body">
    <h2>GENERAL</h2>
    <div id="customable-ccontent-page"></div>
</div>

<!-- Inclusion de la librairie de modification des contenus -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/link@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/image@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/checklist@latest"></script>

<script>
const editor = new EditorJS({
  /**
   * Id of Element that should contain Editor instance
   */
  holder: 'customable-ccontent-page',

  /** 
   * Available Tools list. 
   * Pass Tool's class or Settings object for each Tool you want to use 
   */ 
   tools: { 
    header: Header, 
    list: List,
    linkTool: LinkTool,
    image: SimpleImage,
    quote: {
      class: Quote,
      inlineToolbar: true,
      shortcut: 'CMD+SHIFT+O',
      config: {
        quotePlaceholder: 'Enter a quote',
        captionPlaceholder: 'Quote\'s author',
      },
    },
    checklist: {
      class: Checklist,
      inlineToolbar: true,
    }
  }, 
});
</script>