<section class="hero">
  <form class="" action = '/pages/addtodb.php' method="post">
    <div class="hero-body">
      <p class="title">
        Inline editor
      </p>
      <p class="subtitle">
        <textarea id="editor" name="body">
            This is some sample content.
        </textarea>
      </p>
    </div>

    <input type="submit" class=""/>

  </form>
</section>


		<script>
            ClassicEditor
                    .create(document.querySelector('#editor'))
                    .catch(error => {
                        console.error(error);
                    });
        </script>
