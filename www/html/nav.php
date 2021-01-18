  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <?php
      $categories = file_get_contents("categories.json");
      $parsed_categories = json_decode($categories, true);
      foreach ($parsed_categories as $category) {
        echo '<a class="p-2 text-muted" href="category.php?c=' . $category . '">';
        echo $category;
        echo '</a>';
      }

      ?>
    </nav>
  </div>
