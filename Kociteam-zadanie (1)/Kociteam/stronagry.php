<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styleindex.css" type="text/css">
    <title>STAR WARS Jedi: Upadły zakon™ na Kociteam Library</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@100;300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Reddit+Mono:wght@200..900&family=Roboto:wght@100;300&display=swap');

html,body{
    box-sizing: 0;
    margin: 0;
    padding: 0;
    scroll-behavior: smooth ;
}

body{
    background-color: #2A475E;
}

.boxnav{
    align-items: center;
    display: flex;
    text-align: center;
}

nav{
    font-size:x-large;
    color: whitesmoke;
    font-family: Bebas Neue ;
    background-color: #171d25;
    width:100%;
    height: 10%;
}

nav img{
    width: auto;
    height: 8rem;
}
.linksnav{
    width: 85%;
    justify-content: flex-end;
    display: flex;
}
.linksnav a{
    text-decoration: none;
    color: whitesmoke;
    padding: 1rem;
    float: right;
}
.linksnav a:hover{
    padding-bottom:1rem;
    text-decoration: underline;
}
.boxnav img:hover{
    text-decoration: none;
}
main{
    font-family: Reddit Mono;
    padding-left: 18%;
    padding-right: 18%;
}
.main{
background-image: linear-gradient(to bottom right,  #2A475E,  #182834);opacity: 0.9;
color: whitesmoke;
}
.maintitle{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.maintitle button{
    background-color: #1c5682;
    color: #00c8ff;
    border: 0;
    padding: 0.6%;
    font-size: medium;
    width: 15%;
    height: auto;
}
.maintitle a{
    color: #00c8ff;
    text-decoration: none;
    transition: 2s;
}
.main_main{
    display: flex;
}
.side_main{
    font-size:small;
    font-family: Roboto;
    padding-left: 2%;
}
.side_text{
    padding-top: 1%;
    padding-right: 5%;
}
.side_text1{
padding-top: 2%;
color: grey;
}
.side_text2{
    padding-top: 4%;
    color: grey;
    }
    hr{
        border:#00c8ff solid 1px;
    }
.maintitle1{
        display: flex;
        justify-content: flex-start;
        align-items: center;
       padding-left: 2%;
        color:white;
    }
    .opinia{
        width: 100%;
        height: 100%;
        color: whitesmoke;
        background-image: linear-gradient(to bottom right, #182834, #182834);
    }
    .opinia form{
        padding: 20px;
    }
    .write{
        font-weight: 550;
        font-size: 90%;
        padding-left: 2%;
        font-family: roboto;
        color: rgb(215, 215, 215);
    }
    textarea{
        margin: 2%;
        padding: 2%;
    }
.input_opinie{
    
    background-color: #c6d4df;
    color: #686c72;
        width: 15%;
        font-size: medium;
        padding: 1%;
        border: black solid 2px;
        border-radius: 5%;
    }
    .pozycja{
        padding-bottom: 2%;
        padding-right: 2%;
        display: flex;
        justify-content: flex-end;
    }
    .description_game{
        color: rgb(221, 221, 221);
    }
    .text_desc{
        font-size: 95%;
        font-family: roboto;
        font-weight: 600;
        letter-spacing: 1px;
    }
    .text_desc ul{
        list-style: square;
    }
 .img{
display: flex;
justify-content: center;
margin: 2%;
 }
.wymagania h3{
    width: 22%;
    border-bottom: #00c8ff solid 1px;
}
    .left{
        font-size: small;
    }
    .left ul{
        margin-left: -8%;
        list-style: none;
    }
    .right{
        font-size: small;
    }
    .right ul{
        margin-left: -8%;
        list-style: none;
    }
.wymag{
    display: flex;
}
.komentarze{
  padding: 20px;
  background-image: linear-gradient(to bottom right, #14212b, #182834);
}
.komentarze div{
  padding: 20px;
  background-color: #1e3041;
}
.komentarze img{
  width: 400px;
  height: 400px;
}
.komentarze h2{
    color: whitesmoke;
    font-size: 60px;
}
.komentarze strong{
    color: whitesmoke;
    font-size: 48px;
}
.komentarze p{
    color: whitesmoke;
    font-size: 20px;
}

footer{
    margin-top: 100px;
    height: 5vh;
    background-color: #171d25;
    color: whitesmoke;
    width: 100%;
    align-content: center;  
}
footer div ul{
    font-size: 34px;
    display: flex;
    justify-content: space-around;
    text-align: center;
    list-style-type: none;
}
  </style>
  </head>
  <body>
    <nav>
        <div class="boxnav"><div><a href="#"><img src="logo.png" alt="" srcset=""></a></div><div class="textnav"></i>KociTeam<br>Library</div>
        <div class="linksnav"><a href="stronaglowna.html">Strona Główna</a><a href="wesprzyjnas.html">Wesprzyj Nas!</a><a href="logowanie.php">Logowanie</a></div></div>
    </nav>
      <main>
        <section class="main">
          <div class="maintitle">
        <h2>
          STAR WARS Jedi: Upadły zakon™
        </h2>
        <button><a id="komentarze" href="#cos">Komentarze</a></button>
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
              Napisz komentarz o STAR WARS Jedi: Upadły zakon™
            </h2>
            </div>
            <div class="write">Opisz, co podobało ci się (lub nie) w tej grze i czy polecasz ją innym użytkownikom.</div>
            <div class="komentarz">
              <form action="" method="post" enctype="multipart/form-data">
                <label for="login">Nazwa:</label><br>
                <input type="text" id="login" name="login" class="inputname"><br><br>
                <label for="comment_text">Treść komentarza:</label><br>
                <textarea id="comment_text" name="comment_text" rows="4" cols="50"></textarea><br><br>
                <input type="file" name="userfile[]" value="" multiple="">
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
            echo "Komentarz musi coś zawierać.";
        } else {
            $sql_check_comment = "SELECT * FROM Komentarze WHERE login = '$login' AND tresc = '$comment_text'";
            $result_check_comment = $conn->query($sql_check_comment);
            if($result_check_comment->num_rows > 0) {
                echo "";
            } else {
                $sql_insert = "INSERT INTO Komentarze (login, tresc) VALUES ('$login', '$comment_text')";
                if ($conn->query($sql_insert) === TRUE) {
                    echo "Nowy komentarz został dodany.<br>";
                } else {
                    echo "Błąd podczas dodawania komentarza: " . $conn->error."<br>";
                }
            }
        }
    }
}

//Zdj
$mysqli = new mysqli('localhost', 'root', '', 'kociteam') or die($mysqli->connect_error);
$table = 'zdjecia';

function reArrayFiles(&$file_post) {

  $file_ary = array();
  $file_count = count($file_post['name']);
  $file_keys = array_keys($file_post);

  for ($i=0; $i<$file_count; $i++) {
      foreach ($file_keys as $key) {
          $file_ary[$i][$key] = $file_post[$key][$i];
      }
  }

  return $file_ary;
}
if (isset($_FILES['userfile'])) {
  $file_array = reArrayFiles($_FILES['userfile']);

  for ($i=0; $i < count($file_array); $i++) { 
      if ($file_array[$i]['error']) {
          echo("error2");
      }
      else {
          $extencions = array('jpg','png','gif','jpeg');
          $file_ext = explode('.',$file_array[$i]['name']);

          $name = $file_ext[0];
          $name = preg_replace("!-!"," ",$name);
          $name = ucwords($name);

          $file_ext = end($file_ext);

          if (!in_array($file_ext, $extencions)) {
              echo("error3");
          }
          else {
              $img_dir = 'web/'.$file_array[$i]['name'];

              move_uploaded_file($file_array[$i]['tmp_name'], $img_dir);

              $sql = "INSERT IGNORE INTO $table (name, img_dir) VALUES('$name','$img_dir')";
              $mysqli->query($sql) or die($mysqli->error);

              
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
          <div class="komentarze" id="cos">
        
<?php 
$sql_select = "SELECT * FROM Komentarze ORDER BY idk ASC";
$result = $conn->query($sql_select);
$table = 'zdjecia';
$sql_select = "SELECT * FROM Komentarze ORDER BY idk ASC";
$result = $conn->query($sql_select);
$resultzdj = $mysqli->query("SELECT * FROM $table") or die($mysqli->error);
if ($result->num_rows > 0) {
    echo "<h2>Dotychczasowe komentarze:</h2>";
    while($row = $result->fetch_assoc()) {
        echo "<div> <strong>" . $row["login"] . "</strong>". "<br> <p>" . $row["tresc"] . "</p> </div> <br>";
    }
    while ($data = $resultzdj->fetch_assoc()) {
      echo("<img src='{$data['img_dir']}' width='40%' height='40%'> ");
  }
} else {
    echo "Brak dotychczasowych komentarzy.";
}

// if(isset($_POST['submit_reply'])) {
//   $reply_text = $_POST['reply_text'];
//   $reply_login = $_POST['reply_login'];
//   $comment_id = $_POST['comment_id'];

//   if(empty($reply_login)) {
//       echo "Musisz podać swój nick, aby dodać odpowiedź.";
//   } else {
//       if(empty($reply_text)) {
//           echo "Odpowiedź musi coś zawierać.";
//       } else {
//           $sql_insert_reply = "INSERT INTO Odpowiedzi (id_komentarza, login, tresc) VALUES ('$comment_id', '$reply_login', '$reply_text')";
//           if ($conn->query($sql_insert_reply) === TRUE) {
//               echo "Nowa odpowiedź została dodana.";
//           } else {
//               echo "Błąd podczas dodawania odpowiedzi: " . $conn->error;
//           }
//       }
//   }
// }

// if ($result->num_rows > 0) {
//   while($row = $result->fetch_assoc()) {
//       echo "<strong>" . $row["login"] . "</strong>". "<br>" . $row["tresc"] . "</p>";

//       // Formularz dodawania odpowiedzi
//       echo "<form action='' method='post'>";
//       echo "<input type='hidden' name='comment_id' value='" . $row["idk"] . "'>";
//       echo "<input type='text' name='reply_login' placeholder='Nazwa'>";
//       echo "<textarea name='reply_text' placeholder='Odpowiedź'></textarea>";
//       echo "<input type='submit' name='submit_reply' value='Odpowiedz'>";
//       echo "</form>";
//   }
// } else {
//   echo "Brak dotychczasowych komentarzy.";
// }


$conn->close();
?>

      </div>
    </section>

        

  </main>
  
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