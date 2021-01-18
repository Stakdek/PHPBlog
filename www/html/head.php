<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>
      <?php
        $settings = file_get_contents("settings.json");
        $parsed_settings = json_decode($settings, true);
        echo $parsed_settings['page_name'];
      ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="http://stakdek.de/Web/bootstrap_css" rel="stylesheet">
    <!-- Favicons -->
    <link rel="icon" href="img/logo.png">
    <script src="http://stakdek.de/Web/bootstrap_js"></script>
    <meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">
  </head>
