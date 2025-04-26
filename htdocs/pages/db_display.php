<?php
// pages/db_display.php
include("../includes/header.php");
include("../includes/nav.php");
?>

<main>
  <h2>Recipe Database</h2>
  <p class ="db_caption">All recipes fetched from the database are listed below.</p>

  <?php
  // Connect to DB
  include("../includes/db_connect.php"); // ensures $pdo is available

  //  query to join recipes with their categories
  $sql = "SELECT r.recipe_id, r.recipe_title, r.ingredients, r.instructions, c.category_name
          FROM recipes r
          JOIN categories c ON r.category_id = c.category_id";
  
  $stmt = $pdo->query($sql);

  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<div class='recipe_card'>";
    echo "<h3>" . htmlspecialchars($row['recipe_title']) . "</h3>";
    echo "<p><strong>Category:</strong> " . htmlspecialchars($row['category_name']) . "</p>";
    echo "<p><strong>Ingredients:</strong><br>" . nl2br(htmlspecialchars($row['ingredients'])) . "</p>";
    echo "<p><strong>Instructions:</strong><br>" . nl2br(htmlspecialchars($row['instructions'])) . "</p>";
    echo "</div>";
  }
  ?>
</main>

<?php
include("../includes/footer.php");
?>
