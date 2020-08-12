<!DOCTYPE html>
<html lang="de">
  <head>
    <link rel="stylesheet" type="text/css" href="../meta/stylesheet.css">
    <script src="../meta/scripts.js"></script>
    <?php
    include_once('../meta/databaseconnection.php');
    if(isset($_GET["doinsert"])){
        if($_GET["doinsert"] == "1"){
            if(isset($_POST["username"]) && !empty($_POST["username"])){
                if(isset($_POST["title"]) && !empty($_POST["title"])){
                    if(isset($_POST["message"]) && !empty($_POST["message"])){
                        $datetime = date("Y-m-d H:i:s");
                        $statement = $pdo->prepare("INSERT INTO eintraege (titel, nachricht, date, user) VALUES (:titel, :nachricht, :date, :user)");
                        $statement->execute(array('titel' => $_POST["title"], 'nachricht' => $_POST["message"], 'date' => $datetime, 'user' => $_POST["username"]));
                        echo '<meta http-equiv="refresh" content="0; URL=../send">';
                    }  
                }
            }
        }
    }
    ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Speichern :: Gästebuch</title> 
  </head>
  <body id="body">
    <a href="../index" style="">
        <div class="writebtn">
            <span class="material-icons">home</span>
        </div>
    </a>
    <div class="mainheader">
        <center>
            <div class="header1">
                <span>Gästebuch</span>
            </div>
            <div class="header2">
                <span>Speichern</span>
            </div>
        </center>
    </div>
    <div class="starttext">
            <span><span>Dein Beitrag wurde gespeichert!</span></span>
    </div>
    <div class="savedone">
        <span class="material-icons" style="font-size: 7.5vh;">check_circle_outline</span>
    </div>
    <footer>
        <p>Impressum</p>
    </footer>
  </body>
</html>