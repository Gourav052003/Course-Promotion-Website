<!--http://fantacydesigns.com/-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="otp.css" />
    <title>Verify Account| Fantacy Design</title>
  </head>
  <body>
    <div class="container">
      <h2>Verify Your Account</h2>
      <p>We emailed you the six digit code to fantacydesignss@gmail.com <br/> Enter the code below to confirm your email address.</p>
      
      
      <form action="index.php" method="post">
        <div class="code-container">
          <input type="number" class="code" name = "a" placeholder="0" min="0" max="9" required>
          <input type="number" class="code" name = "b" placeholder="0" min="0" max="9" required>
          <input type="number" class="code" name = "c" placeholder="0" min="0" max="9" required>
          <input type="number" class="code" name = "d" placeholder="0" min="0" max="9" required>
          <input type="number" class="code" name = "e" placeholder="0" min="0" max="9" required>
          <input type="number" class="code" name = "f" placeholder="0" min="0" max="9" required>
          <input type="submit" class="submit" name = "verify">
        </div>
      </form>
      
      
      <small class="info">
        This is design only. We didn't actually send you an email as we don't have your email, right?
      </small>
    </div>
    <script src="otp.js"></script>
  </body>
</html>