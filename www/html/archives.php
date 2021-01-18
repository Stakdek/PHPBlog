<div class="p-4">
  <h4 class="font-italic">Archives</h4>
  <ol class="list-unstyled mb-0">
    <?php
    $blogs = file_get_contents("blogs.json");
    $parsed_blogs = json_decode($blogs, true);
    foreach ($parsed_blogs as $blog) {
        echo '<li><a href="article.php?id=' . $blog['id'] . '">';
        echo $blog['date'];
        echo '</a></li>';
    }
    ?>
  </ol>
</div>
