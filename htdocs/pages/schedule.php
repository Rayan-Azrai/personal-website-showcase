<?php
include("../includes/header.php");
include("../includes/nav.php");
?>

<main>
  <section class="section-wrapper">
    <h2 class="page-title">Weekly Meal Plan</h2>
    <p class="intro-text">Check out the planned meals for this week!</p>
    <table id="meal-table" class="styled-table">
      <caption>Weekly Meal Schedule</caption>
      <thead>
        <tr>
          <th>Day</th>
          <th>Appetiser</th>
          <th>Main dish</th>
          <th>Dessert</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td rowspan="2">Sunday</td>
          <td>Fruit salad</td>
          <td>Grilled Chicken with rice</td>
          <td>Brownies</td>
        </tr>
        <tr>
          <td>Dynamite shrimp</td>
          <td>Butter Chicken with tandoori</td>
          <td>Chocolate smoothie</td>
        </tr>
        <tr>
          <td>Monday</td>
          <td>Quinoa salad</td>
          <td>Lasagna</td>
          <td>Mint Chocolate</td>
        </tr>
        <tr>
          <td>Tuesday</td>
          <td>Bruschetta</td>
          <td>Spaghetti with meatballs</td>
          <td>Cheesecake</td>
        </tr>
        <tr>
          <td colspan="4" style="text-align:center; font-weight:bold;">
            Don't forget to stay hydrated throughout the week!
          </td>
        </tr>
      </tbody>
    </table>
  </section>
</main>

<?php include("../includes/footer.php"); ?>
