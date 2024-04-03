<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styleindex.css">
    <title>STAR WARS Jedi: Upadły zakon™ na Kociteam Library</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <nav>
        <div class="boxnav"><div><a href="#"><img src="logo.png" alt="" srcset=""></a></div><div class="textnav"></i>KociTeam<br>Library</div>
        <div class="linksnav"><a href="#">Strona Główna</a><a href="#">Wesprzyj Nas!</a><a href="#">Logowanie</a></div></div>
    </nav>
      <main>
        <section class="main">
          <div class="maintitle">
        <h2>
          STAR WARS Jedi: Upadły zakon™
        </h2>
        <button>Komentarze</button>
      </div>
      <div class="main_main">
        <img src="mainpic.jpg" alt="" srcset="" width="65%" height="auto">
      
      <div class="side_main"><img src="baner.jpg" alt="" srcset="" width="100%" height="auto">
      <div class="side_text">
        Przeżyj przygodę obejmującą swoim rozmachem całą galaktykę w STAR WARS Jedi: Upadły zakon – trzecioosobowej grze akcji studia Respawn Entertainment. Osamotniony padawan musi ukończyć swoje szkolenie, rozwinąć nowe, potężne zdolności Mocy i opanować sztukę władania...
        <div class="side_text1">
          DATA WYDANIA: 15 listopada 2019
        </div>
        <div class="side_text2">
          PRODUCENT: Respawn Entertainment<br>
          WYDAWCA: Electronic Arts<br><br>
          KATEGORIE: Akcja, Przygoda
        </div>
      </div>
      </div>
    </div>
        </section>

      <hr>

        <section class="description">
          <div class="opinia">
            
          <div class="maintitle1">
            <h2>
              Napisz recenzję dla STAR WARS Jedi: Upadły zakon™
            </h2>
            </div>
            <div class="write">Opisz, co podobało ci się (lub nie) w tej grze i czy polecasz ją innym użytkownikom.</div>
            <div class="komentarz">
<form action="" method="post">
    <label for="login">Nazwa:</label><br>
    <input type="text" id="login" name="login" class="inputname"><br><br>
    <label for="comment_text">Treść komentarza:</label><br>
    <textarea id="comment_text" name="comment_text" rows="10" cols="100"></textarea><br><br>
    <input type="submit" name="submit_comment" value="Dodaj komentarz" class="inputsend">
</form>
</div>
</div>
          
          <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kociteam";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit_comment'])) {
    $comment_text = $_POST['comment_text'];
    $login = $_POST['login'];

    if(empty($login)) {
        echo "Musisz podać swój nick, aby dodać komentarz.";
    } else {
        if(empty($comment_text)) {
            echo "Komentarz nusi coś zawierać.";
        } else {
            $sql_check_comment = "SELECT * FROM Komentarze WHERE login = '$login' AND tresc = '$comment_text'";
            $result_check_comment = $conn->query($sql_check_comment);
            if($result_check_comment->num_rows > 0) {
                echo "";
            } else {
                $sql_insert = "INSERT INTO Komentarze (login, tresc) VALUES ('$login', '$comment_text')";
                if ($conn->query($sql_insert) === TRUE) {
                    echo "Nowy komentarz został dodany.";
                } else {
                    echo "Błąd podczas dodawania komentarza: " . $conn->error;
                }
            }
        }
    }
}
?>
          
    <hr>
    <div class="description_game">
      <h3>O TEJ GRZE</h3>
      <div class="text_desc">
       
        Przeżyj przygodę obejmującą swoim rozmachem całą galaktykę ze Star Wars Jedi: Upadły zakon – nową, trzecioosobową grą akcji studia Respawn Entertainment. W tej grze fabularnej dla jednego gracza wcielasz się w Padawana Jedi, który cudem uchronił się przed czystką zapoczątkowaną Rozkazem 66 bezpośrednio po wydarzeniach z kinowej Części III: Zemsta Sithów. Na drodze ku odbudowie Zakonu Jedi przyjdzie ci poskładać kawałki swojej obróconej wniwecz przeszłości, ukończyć szkolenie, rozwinąć nowe, potężne zdolności Mocy i opanować sztukę władania mieczem świetlnym. Wszystko to pozostając o krok przed Imperium i jego zabójczymi inkwizytorami.
        <br><div class="img"><img src="pic2.jpg" alt="" srcset="" width="100%"></div><br><br> 
        W trakcie doskonalenia swoich zdolności gracze stoczą porywające pojedynki z użyciem miecza świetlnego i Mocy, znane z filmowej sagi Gwiezdnych Wojen. Gracze będą musieli podejść do walki w metodyczny sposób, analizując atuty i słabości oraz polegając na sprytnym użyciu treningu Jedi, aby pokonać przeciwników i rozwiązać stojące im na drodze zagadki.<br><br><br>
        W trakcie doskonalenia swoich zdolności gracze stoczą porywające pojedynki z użyciem miecza świetlnego i Mocy, znane z filmowej sagi Gwiezdnych Wojen. Gracze będą musieli podejść do walki w metodyczny sposób, analizując atuty i słabości oraz polegając na sprytnym użyciu treningu Jedi, aby pokonać przeciwników i rozwiązać stojące im na drodze zagadki.<br><div class="img"><img src="pic3.jpg" alt="" srcset="" width="100%"></div><br><br> 
      </div>
        <h3>GŁÓWNE CECHY</h3>
        <div class="text_desc">
          <ul><li>Porywające, filmowe pojedynki – Jedi: Upadły zakon pozwala poczuć się jak Jedi za sprawą innowacyjnego systemu walki mieczem świetlnym: ciosów, parad i uników uzupełnionych o wachlarz potężnych zdolności Mocy, które okażą się niezbędne, aby pokonać przeszkody stojące na drodze gracza. Opracowany system jest intuicyjny, ale wymaga treningu i praktyki, aby móc go opanować na przestrzeni przygody wraz z nowymi technikami i zdolnościami.</li><br><br>
          <li>Początek nowej opowieści o Jedi – Jako niedoszły Padawan, który ucieka przed Imperium, musisz ukończyć swoje szkolenie Jedi, zanim imperialni inkwizytorzy odkryją twój plan wskrzeszenia Zakonu Jedi. U boku byłego Rycerza Jedi, zrzędliwego pilota i nieustraszonego droida spróbujesz uciec przed podstępnymi machinacjami Imperium w trakcie tej fabularnej przygody. Odkrywaj i pokonuj rozliczne wyzwania związane z walką, eksploracją i rozwiązywaniem zagadek.</li><br><br>
        <li>Galaktyka czeka – Prastare puszcze, omiatane wiatrem urwiska i złowieszcze dżungle składają się na unikalne środowiska, które będziesz odkrywać w Jedi: Upadły zakon, mając pełną wolność wyboru, gdzie skierujesz swoje kroki. Wraz z odblokowaniem nowych technik i zdolności otworzą się przed tobą możliwości powtórnego przemierzenia map w zupełnie nowy sposób, polegając przy tym na Mocy. Nie zwlekaj jednak, bowiem po piętach depcze ci Imperium, chcące unicestwić wszelkie pozostałości po Zakonie Jedi.</li></ul>
        </div>
      <br>
      <div class="wymagania">
        <h3>WYMAGANIA SYSTEMOWE</h3>
      </div>
      <div class="wymag">
      <div class="left">
        KONFIGURACJA MINIMALNA:
        <ul><li>Wymaga 64-bitowego procesora i systemu operacyjnego
        </li>
        <li>System operacyjny: 64-bit Windows 7/8.1/10</li>
        <li>Procesor: AMD FX-6100/Intel i3-3220 or Equivalent</li>
        <li>Pamięć: 8 GB RAM</li>
        <li>Karta graficzna: AMD Radeon HD 7750, NVIDIA GeForce GTX 650 or Equivalent</li>
        <li>DirectX: Wersja 11</li>
        <li>Miejsce na dysku: 55 GB dostępnej przestrzeni</li></ul>
      </div>
      <div class="right">KONFIGURACJA ZALECANA:
        <ul><li>Wymaga 64-bitowego procesora i systemu operacyjnego
        </li>
        <li>System operacyjny: 64-bit Windows 7/8.1/10</li>
        <li>Procesor: AMD Ryzen 7 1700/Intel i7-6700K or Equivalent</li>
        <li>Pamięć: 16 GB RAM</li>
        <li>Karta graficzna: AMD RX Vega 56, Nvidia GTX 1070/GTX1660Ti or Equivalent</li>
        <li>DirectX: Wersja 11</li>
        <li>Miejsce na dysku: 55 GB dostępnej przestrzeni</li></ul></div>
    </div>
    </div>
        </section>

      <hr>

        <section class="comments">
          <div class="komentarze">
          <?php $sql_select = "SELECT * FROM Komentarze ORDER BY id ASC";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
    echo "<h2>Dotychczasowe komentarze:</h2>";
    while($row = $result->fetch_assoc()) {
        echo "<strong>" . $row["login"] . "</strong>". "<br>" . $row["tresc"] . "</p>";
    }
} else {
    echo "Brak dotychczasowych komentarzy.";
}

$conn->close();
?>
          </div>
        </section>

        

      </main>
          <footer>

          </footer>

  </body>
</html>