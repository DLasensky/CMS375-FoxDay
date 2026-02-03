<?php
$events = [
  [
    "title" => "Bus ride to the Beach",
    "datetime" => "March 12, 2026 - 10:00 AM",
    "location" => "Pickup at Gale Hall",
    "description" => "Get on the bus. Don’t ask questions. Trust the fox."
  ],
  [
    "title" => "Picnic on Mills Lawn",
    "datetime" => "March 12, 2026 - 12:00 PM",
    "location" => "Mills Lawn",
    "description" => "Snacks, lemonade, and more provided."
  ],
  [
    "title" => "Pool Activities",
    "datetime" => "March 12, 2026 - 2:00 PM",
    "location" => "Lakeside Pool",
    "description" => "Swimming, tanning, music, snacks, and more."
  ],
  [
    "title" => "Games and Prizes",
    "datetime" => "March 12, 2026 - 4:00 PM",
    "location" => "Sports Field",
    "description" => "Cornhole, Football, Volleyball, Soccer, and more."
  ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Fox Day Events</title>
</head>
<body>
  <header>
    <h1>Fox Day Events</h1>
    <nav>
      <a href="index.html">Home</a> |
      <a href="events.php">View Events</a> |
      <a href="register.html">Register</a>
    </nav>
  </header>

  <main>
    <h2>Event List</h2>

    <ul>
      <?php foreach ($events as $e): ?>
        <li>
          <h3><?php echo htmlspecialchars($e["title"]); ?></h3>
          <p><strong>Date/Time:</strong> <?php echo htmlspecialchars($e["datetime"]); ?></p>
          <p><strong>Location:</strong> <?php echo htmlspecialchars($e["location"]); ?></p>
          <p><?php echo htmlspecialchars($e["description"]); ?></p>
        </li>
        <hr>
      <?php endforeach; ?>
    </ul>
  </main>
</body>
</html>
