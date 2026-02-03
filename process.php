<?php
function clean($v) {
  return htmlspecialchars(trim($v ?? ""), ENT_QUOTES, "UTF-8");
}

$name = clean($_POST["name"] ?? "");
$email = clean($_POST["email"] ?? "");
$event = clean($_POST["event"] ?? "");
$year = clean($_POST["year"] ?? "");
$message = clean($_POST["message"] ?? "");
$secret = isset($_POST["secret"]) ? "Yes" : "No";

$errors = [];
if ($name === "")  { $errors[] = "Please enter your name."; }
if ($email === "") { $errors[] = "Please enter your email."; }
if ($event === "") { $errors[] = "Please select an event."; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Fox Day Confirmation</title>
</head>
<body>
  <header>
    <h1>Fox Day Registration</h1>
    <nav>
      <a href="index.html">Home</a> |
      <a href="events.php">View Events</a> |
      <a href="register.html">Register</a>
    </nav>
  </header>

  <main>
    <?php if (!empty($errors)): ?>
      <h2>Oops!</h2>
      <p>Something is missing:</p>
      <ul>
        <?php foreach ($errors as $e): ?>
          <li><?php echo $e; ?></li>
        <?php endforeach; ?>
      </ul>
      <p><a href="register.html">Go back to the registration form</a></p>
    <?php else: ?>
      <h2>Welcome to Fox Day! Your day of fun is booked!</h2>

      <p><strong>Name:</strong> <?php echo $name; ?></p>
      <p><strong>Email:</strong> <?php echo $email; ?></p>
      <p><strong>Event:</strong> <?php echo $event; ?></p>
      <p><strong>Year:</strong> <?php echo ($year === "" ? "Not selected" : $year); ?></p>
      <p><strong>Message:</strong> <?php echo ($message === "" ? "No message provided" : $message); ?></p>

    <?php endif; ?>
  </main>
</body>
</html>
