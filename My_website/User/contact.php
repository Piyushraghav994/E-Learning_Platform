<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="../CSS/contact.css">
</head>
<body>
  <div class="container">
    <h2>Contact Us</h2>
    <form action="contactSetup.php" method="post"     id="contactForm" >
      <div class="form-group">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" required>
      </div>

      <div class="form-group">
        <label for="email">Your Email</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="email">Contact no</label>
        <input type="varchar" id="contact" name="contact" required>
      </div>

      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" required></textarea>
      </div>

      <button type="submit">Send</button>
    </form>
  </div>
</body>
</html>

