<!DOCTYPE html>
<html>
    <!-- Голова страницы сайта -->
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Добавить статью</title>
        <!-- JQ cdn -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <!-- Bulma CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <!-- Tinymce  -->
        <script src="https://cdn.tiny.cloud/1/p8x1148v418wuet2yzhah430evhi8eke0xmsg0xmv2itxdyy/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
            <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/super-build/ckeditor.js"></script>

    </head>

    <!-- Тело страницы  сайта -->
    <body>

        <?php include __DIR__ .  '/../src/header.php';?>
        <?php include __DIR__ .  '/addarticlebody.php';?>
        <?php include __DIR__ .  '/../src/footer.php';?>
      </body>
</html>
