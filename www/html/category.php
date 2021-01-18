<!DOCTYPE html>
<html lang="en" data-lt-installed="true">
<?php include 'head.php' ?>
  <body>
    <div class="container">

  <?php include 'header.php' ?>

  <?php include 'nav.php' ?>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">
        <?php echo $parsed_settings['page_slider_title']; ?>
      </h1>
      <p class="lead my-3"><?php echo $parsed_settings['page_slider_subtitle']; ?></p>
      <p class="lead mb-0"><a href="<?php echo $parsed_settings['page_slider_link']; ?>" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <?php
    $blogs = file_get_contents("blogs.json");
    $parsed_blogs = json_decode($blogs, true);
    $category = htmlspecialchars($_GET["c"]);
    foreach ($parsed_blogs as $blog) {
        if ($blog['category'] == $category) {
          echo '<div class="col-md-6"><div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">';
          echo '<div class="col p-4 d-flex flex-column position-static">  <strong class="d-inline-block mb-2 text-';
          echo $blog['bs-color-class'];
          echo '">';
          echo $blog['category'];
          echo '</strong><h3 class="mb-0">';
          echo $blog['title'];
          echo '</h3><div class="mb-1 text-muted">';
          echo $blog['date'];
          echo '</div><p class="card-text mb-auto">';
          echo $blog['desc'];
          echo '</p><a href="article.php?id=' . $blog['id'] . '" class="stretched-link">Continue reading</a></div>';
          echo '<div class="col-auto d-none d-lg-block">';
          echo '<svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>';
          echo '</div></div></div>';
      }

    }
    ?>
  </div>
</div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        <?php echo htmlspecialchars($_GET["c"]); ?>
      </h3>
      <?php
      $blogs = file_get_contents("blogs.json");
      $parsed_blogs = json_decode($blogs, true);
      foreach ($parsed_blogs as $blog) {
        if ($blog['category'] == $category) {
            echo '<div class="mb-3 blog-post">';
            echo '<h2 class="blog-post-title">';
            echo $blog['title'];
            echo '</h2>';

            echo '<p class="blog-post-meta">';
            echo $blog['date'];
            echo ', by ';
            echo $blog['author'];
            echo '</p>';
            echo $blog['content'];
            echo '</div>';
        }

      }
      ?>

    </div>

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
          <?php
          $blogs = file_get_contents("blogs.json");
          $parsed_blogs = json_decode($blogs, true);
          foreach ($parsed_blogs as $blog) {
              echo '<li><a href="#">';
              echo $blog['date'];
              echo '</a></li>';
          }
          ?>
        </ol>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="https://github.com/Stakdek">GitHub</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

<footer class="my-3 blog-footer container">
  <p>PHP Blog built by <a href="https://github.com/Stakdek">stakdek</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>


</body></html>
