<section class="hero">
  <div class="hero-body">
    <p class="title">
      Inline editor
    </p>
    <p class="subtitle">
      <div id="editor">
          <p>This is some sample content.</p>
      </div>
    </p>
  </div>
</section>


<script>
    BalloonEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
