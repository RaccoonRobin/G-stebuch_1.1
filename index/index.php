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
    <title>Startseite :: Gästebuch</title>
  </head>
  <body id="body">
      <a href="../write" style>
        <div class="writebtn">
            <span class="material-icons">edit</span>
      </div>
    </a>
    <div class="mainheader">
    <center>
        <div class="header1">
            <span>Gästebuch</span>
        </div>
        <div class="header2">
            <span>Startseite</span>
        </div>
    </center>
    </div>   
    <div class="starttext">
    <span>
        <span>Die letzten Einträge:</span>
    </span>
            </div> 
    <div class="entrys">
        <?php
        $sql = "SELECT user, date, nachricht, titel FROM eintraege ORDER BY date desc";
        foreach ($pdo->query($sql) as $row){
            $datum = date("d.m.Y H:i", strtotime($row["date"]));
            ?>
        <div class="entry">
         <span class="title"><?php echo $row["titel"]; ?></span>
         <div class="desc">
            <?php echo $row["user"]; ?> :: <?php echo $datum; ?>
            </div>
            <span class= "msg"><?php echo $row["nachricht"];?></span>
            </div>
            <?php
        }
        ?>
    </div>
    <footer>
        <p>Impressum</p>
    </footer>   
  </body>
</html>