<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrace - Nejlepší akce pro sředoškoláky</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PR9KJ7YX8W"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-PR9KJ7YX8W');
    </script>
</head>
<body>
    <header>
        <h1>Nejlepší akce pro středoškoláky</h1>
        <nav>
            <ul>
                <li><a href="index.html" class="nav-link">Úvod</a></li>
                <li><a href="program.html" class="nav-link">Program</a></li>
                <li><a href="misto.html" class="nav-link">Místo konání</a></li>
                <li><a href="registrace.php" class="nav-link">Registrace</a></li>
                <li><a href="kontakt.html" class="nav-link">Kontakt</a></li>
              </ul>
        </nav>
    </header>
    <main>
        <div class="content">
            <?php if (isset($_GET["registration"])): ?>
                <?php if ($_GET["registration"] == "success"): ?>
                    <p style="color: green;">Registrace proběhla úspěšně! Děkujeme.</p>
                <?php elseif ($_GET["registration"] == "failed"): ?>
                    <p style="color: red;">Registrace se nezdařila. Zkuste to prosím znovu.</p>
                <?php endif; ?>
            <?php endif; ?>
            <h2>Registrace</h2>
            <p>Zaregistrujte se nyní a získejte svou vstupenku na nejlepší středoškolskou akci v okolí, která vám zajistí nezapomenutelný zážitek se spoustou zábavy, nových přátel a neuvěřitelné atmosféry!</p>
            <form action="save_registration.php" method="post">
                <label for="fname">Jméno:</label><br>
                <input type="text" id="fname" name="fname" placeholder="Jan" required><br>

                <label for="lname">Příjmení:</label><br>
                <input type="text" id="lname" name="lname" placeholder="Novák" required><br>
            
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" placeholder="jan.novak@gmail.com" required><br>
            
                <input type="submit" value="Registrovat">
            </form>            
        </div>
    </main>
      <footer>
         <div class="footer-container">
            <div class="dalsi_akce">
               <p>Další skvělé akce:</p>
               <ul>
                  <li><a href="" target="_blank"></a></li>
                  <li><a href="" target="_blank"></a></li>
               </ul>
            </div>
            <div class="copyright_cookies_report">
               <p>&copy; 2023 | <a href="https://www.cookiepolicygenerator.com/live.php?token=qE2lOxguK0j4IlrGTNiwskQHpGgMDv9C" target="_blank">Cookies Policy</a> | <a href="https://github.com/tLaznicka/Nejlepsi_akce_pro_stredoskolaky/issues" target="_blank">Nahlásit problém nebo navrhnout vylepšení</a></p>
            </div>
         </div>
      </footer>
</body>
</html>
