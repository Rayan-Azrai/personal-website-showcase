<?php
include("../includes/header.php");
include("../includes/nav.php");

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include("../includes/db_connect.php");

    $email = $_POST['email'] ?? '';

    $stmt = $pdo->prepare("SELECT COUNT(*) FROM feedback WHERE email = ?");
    $stmt->execute([$email]);
    $count = $stmt->fetchColumn();

    if ($count > 0) {
        $error = "Feedback has already been submitted with this email.";
    } else {
        $stmt = $pdo->prepare("INSERT INTO feedback (
            first_name, last_name, email, phone, address, age, occupation,
            gender, chef_type, city, message
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $chefType = isset($_POST['chef_type']) ? implode(", ", $_POST['chef_type']) : '';

        $stmt->execute([
            $_POST['first_name'],
            $_POST['last_name'],
            $_POST['email'],
            $_POST['phone'],
            $_POST['address'],
            $_POST['age'],
            $_POST['occupation'],
            $_POST['gender'],
            $chefType,            
            $_POST['city'],
            $_POST['message']
        ]);

        $success = "Thank you! Your feedback has been submitted.";
    }
}
?>

<main class="feedback-form">
  <h2>Feedback Form</h2>
  <?php if ($error): ?><p class="error"><?= $error ?></p><?php endif; ?>
  <?php if ($success): ?><p class="success"><?= $success ?></p><?php endif; ?>

  <form id="feedbackForm" method="post" action="feedback.php" novalidate>
    <div id="formErrors"></div>

    <fieldset>
      <legend>Personal Information</legend>
      <label>First Name: <input type="text" name="first_name"></label>
      <label>Last Name: <input type="text" name="last_name"></label>
      <label>Email: <input type="email" name="email"></label>
      <label>Phone Number: <input type="text" name="phone"></label>
      <label>Address: <input type="text" name="address"></label>
      <label>Age: <input type="number" name="age"></label>
      <label>Occupation: <input type="text" name="occupation"></label>

      <label>Gender:</label>
      <div class="radio-group">
        <label><input type="radio" name="gender" value="Male"> Male</label>
        <label><input type="radio" name="gender" value="Female"> Female</label>
      </div>

      <label>Chef Type:</label>
      <div class="checkbox-group">
        <label><input type="checkbox" name="chef_type[]" value="Home Chef"> Home Chef</label>
        <label><input type="checkbox" name="chef_type[]" value="Culinary Chef"> Culinary Chef</label>
      </div>
    </fieldset>

    <fieldset>
      <legend>Location & Feedback</legend>
      <label>City:
        <select name="city">
          <option value="">--Select a city--</option>
          <option value="Jeddah">Jeddah</option>
          <option value="Riyadh">Riyadh</option>
          <option value="Makkah">Makkah</option>
        </select>
      </label>

      <label>Feedback / Comments:
        <textarea name="message" rows="4"></textarea>
      </label>
    </fieldset>

    <button type="submit">Submit</button>
  </form>
</main>

<script src="../scripts/validation.js"></script>
<?php include("../includes/footer.php"); ?>
