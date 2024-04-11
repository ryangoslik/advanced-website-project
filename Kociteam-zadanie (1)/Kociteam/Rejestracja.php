<?php
$db_host = 'localhost';
$db_name = 'kociteam';
$db_user = 'root';
$db_pass = '';

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Błąd połączenia z bazą danych: " . $e->getMessage());
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="StyleRejestracja.css">
</head>
<body style="color: whitesmoke;">
    <div class="all">
        <div class="left">
            <div class="grey"></div>
        </div>
        <div class="srodek">
            <div class="rej">
                <h2>Rejestracja</h2>
                <form method="post">
                    <input type="text" name="first_name" placeholder="Imię" required>
                    <input type="text" name="last_name" placeholder="Nazwisko" required>
                    <input type="text" name="username" placeholder="Nazwa użytkownika" required>
                    <input type="password" name="password" placeholder="Hasło" required>
                    <input type="password" name="password_confirm" placeholder="Potwierdź hasło" required>
                    <a href="logowanie.php">Masz konto? Zaloguj się.</a>
                    <button type="submit" name="register">Zarejestruj się</button>
                    <span style="color: red; font-size: 14px;">

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password !== $password_confirm) {
        echo "hasła nie są zgodne.";
    } else {
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        try {
            $stmt = $pdo->prepare("INSERT INTO users (first_name, last_name, username, password) VALUES (?, ?, ?, ?)");
            $stmt->execute([$first_name, $last_name, $username, $password_hashed]);
            echo "Użytkownik zarejestrowany pomyślnie.";
        } catch (PDOException $e) {
            echo "Błąd rejestracji użytkownika: " . $e->getMessage();
        }
    }
}

?>

</span>
                </form>

                
            </div>

            
        </div>

        

    </div>
    
</body>
</html>