<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MyELGA</title>
</head>
<body>
    <main class="container">
        <div class="header">
            <h1 class="title">🏥 MyELGA</h1>
            <p class="subtitle">Patientendaten verwalten</p>
        </div>
        <section class="form-container">
            <form class="patient-form" action="index.php" method="post">
                <div class="form-group">
                    <label for="svn">📋 SVN</label>
                    <input type="number" id="svn" name="svn" placeholder="z. B. 1234567890" required>
                </div>
                <div class="form-group">
                    <label for="vorname">👤 Vorname</label>
                    <input type="text" id="vorname" name="vorname" placeholder="Max" required>
                </div>
                <div class="form-group">
                    <label for="nachname">👤 Nachname</label>
                    <input type="text" id="nachname" name="nachname" placeholder="Mustermann" required>
                </div>
                <button type="submit" class="submit-btn">✓ Speichern</button>
            </form>
        </section>
        <?php
        include_once("functions.php");
        echo getHTMLTable("patient");

        if(!empty($_POST)) {
            $svn = $_POST['svn'];
        $vorname = $_POST['vorname'];
        $nachname = $_POST['nachname']; 
        $columns = ["svn", "vorname", "nachname"];
        $values = [$svn, $vorname, $nachname];
        insertValues("patient", $columns, $values);
        }
        
        ?>
    </main>
</body>
</html>

<?php // backend 2.4 ?>