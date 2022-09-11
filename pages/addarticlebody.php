<section class="hero">
  <form class="" action = '/test/pages/addtodb.php' method="post">
    <div class="hero-body">
      <p class="title">
        Inline editor
      </p>
      <p class="subtitle">
        <div id="editor" >
            <p name="body">This is some sample content.</p>
        </div>
      </p>
    </div>

    <button type="submit" class="w-50 btn btn-primary btn-lg">добавить статью</button>

  </form>
</section>


<script>
    BalloonEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
