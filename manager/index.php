<!DOCTYPE html>
<html lang="el">
<head>
  <meta charset="UTF-8">
  <title>Δημιουργία Συλλόγου</title>
</head>
<body>
  <h2>Φόρμα Δημιουργίας Νέου Συλλόγου</h2>
  <form method="POST" action="create-club.php">
    <label>Όνομα Συλλόγου: <input type="text" name="club_name" required></label><br><br>
    <label>Email: <input type="email" name="admin_email" required></label><br><br>
    <label>Τηλέφωνο: <input type="text" name="phone"></label><br><br>
    <label>Κωδικός: <input type="password" name="admin_password" required></label><br><br>
    <button type="submit">Δημιουργία Συλλόγου</button>
  </form>
</body>
</html>

