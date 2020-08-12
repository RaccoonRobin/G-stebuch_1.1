<!DOCTYPE html>
<html lang="de">
  <head>
    <link rel="stylesheet" type="text/css" href="../meta/stylesheet.css">
    <script src="../meta/scripts.js"></script>
    <?php
    include_once('../meta/databaseconnection.php');
    ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Schreiben :: Gästebuch</title> 
  </head>
  <body id="body">
    <a href="../index" style="">
        <div class="writebtn">
            <span class="material-icons">undo</span>
        </div>
    </a>
    <div class="mainheader">
        <center>
            <div class="header1">
                <span>Gästebuch</span>
            </div>
            <div class="header2">
                <span>Schreiben</span>
            </div>
        </center>
    </div>
    <div class="starttext">
            <span><span>Schreibe gerne einen Beitrag!</span></span>
        </div>
    <form class="writeform" method="POST" action="../send/index.php?doinsert=1">
        <input class="writeinput" name="username" maxlenght="255" required placeholder="Benutzername" type="text">
        <input class="writeinput" name="title" maxlenght="255" required placeholder="Titel" type="text">
        <label for="message" class="writelabel">Nachricht</label>
        <textarea class="writeta" name="message" required type="text"></textarea>
        <div class="writeformbtnbar">
            <center>
                <button type="reset" class="writeformbtn writedel">Eingaben löschen</button>
                <button type="submit" class="writeformbtn writesub">Bestätigen</button>
            </center>
        </div>
    </form>
    <footer>
        <p>Impressum</p>
    </footer>
  </body>
</html>