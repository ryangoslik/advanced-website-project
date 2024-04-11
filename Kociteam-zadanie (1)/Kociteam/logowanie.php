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
    <title>Document</title>
  <link rel="stylesheet" href="stylezal.css">
</head>
<body>
<nav>
        <div class="boxnav"><div><a href="stronaglowna.html"><img src="logo.png" alt="" srcset=""></a></div><div class="textnav"></i>KociTeam<br>Library</div>
        <div class="linksnav"><a href="stronaglowna.html">Strona Główna</a><a href="wesprzyjnas.html">Wesprzyj Nas!</a><a href="logowanie.php">Logowanie</a></div></div>
    </nav>
    <div class="position">
    <div class="main_conatiner">
        <h1>Zaloguj się</h1>
        <hr>
        <div class="login">
        <h2>Logowanie</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Nazwa użytkownika" required><br>
        <input type="password" name="password" placeholder="Hasło" required><br>

        <span style="color: red;">
        <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            try {
                $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
                $stmt->execute([$username]);
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($password, $user['password'])) {
                    echo "Logowanie udane.";
        
                    header("location: stronagry.php");
                    exit();
                } else {
                    echo "Nieprawidłowy login lub hasło.";
                }
            } catch (PDOException $e) {
                echo "Błąd logowania: " . $e->getMessage();
            }
        }

        ?>
    </span><br>

        <button type="submit" name="login" class="log">Zaloguj się</button><br>

        

        <a href="rejestracja.php" class="quest">Nie masz konta? Zarejestruj się tutaj.</a><br>
        <a href="stronaglowna.html" class="powrot">Powrót</a><br>


    </form>
    </div>
    </div>
    </div>

    <footer>
        <div>
            <ul>
                <li>KociTeam Library</li>
                <li>KociTeamLibrary@gmail.com</li>
                <li>Kryształowa 3/7</li>
            </ul>
        </div>
    </footer>

</body>
</html>