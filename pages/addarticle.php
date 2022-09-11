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
        <!-- CKEditor  -->
		<script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>


    </head>

    <!-- Тело страницы  сайта -->
    <body>

        <?php include $_SERVER["DOCUMENT_ROOT"] . '/src/header.php';?>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/pages/addarticlebody.php';?>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/src/footer.php';?>
      </body>
</html>
