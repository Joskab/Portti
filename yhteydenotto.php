<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'joska.riittinen00@gmail.com';
    $subject = 'Uusi yhteydenotto!';
    $body = "Nimi: $name\nSähköposti: $email\nViesti: $message";
    $headers = "From: $email\r\nReply-To: $email\r\n";
    if (mail($to, $subject, $body, $headers)) {
        // Set a message to display to the user
        $message = 'Viesti lähetettiin onnistuneesti!';
    } else {
        $error = 'Viestiä lähettäessä tapahtui odottamaton virhe.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ota yhteyttä</title>
    <link rel="stylesheet" href="yhteydenotto.css" />
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="index.html">Koti</a></li>
          <li><a href="minusta.html">Minusta</a></li>
          <li><a href="projektit.html">Projektini</a></li>
          <li><a href="yhteydenotto.html">Ota yhteyttä</a></li>
        </ul>
      </nav>
    </header>
    <?php if (isset($message)) { ?>
        <p><?php echo $message; ?></p>
    <?php } ?>
    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <section class="contact">
      <h2>Ota yhteyttä</h2>
      <p>Mikäli sinulla on kysyttävää tai muita ideoita, ota yhteyttä!</p>
      <form class="contact-form" action="yhteydenotto.php" method="POST">
        <label for="name">Nimi</label>
        <input type="text" id="name" name="name" required />

        <label for="email">Sähköposti</label>
        <input type="email" id="email" name="email" required />

        <label for="message">Viesti</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit" name="submit" class="btn-primary">
          Lähetä viesti
        </button>
      </form>
    </section>
    <footer>
      <p>Copyright &copy; 2023 Joska Riittinen All rights reserved.</p>
    </footer>
  </body>
</html>
