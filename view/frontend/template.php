<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="public/css/style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <div id="bloc_page">
            <header id="header">
                <div id="logo_fat"><img src="public/css/media/images/logo_fat.png" alt="Logo Blog"></div>
                <div id="logo_slim"><img src="public/css/media/images/logo_skim.png" alt="Logo Blog"></div>
                <nav>
                    <ul class="menu_gobal">
                        <li><a href="index.php?action=userOverview">Blog</a></li>
                        <li><a href="index.php?action=about">A propos</a></li>
                        <li><a href="mailto:jeanforteroche@forteroche.fr">Contact</a></li>
                        <li><a href="index.php?action=secure">Connexion</a></li>
                    </ul>
                </nav>
            </header>
            
            <div id="content">
                <?= $content ?>
            </div>
            
        </div>
        
        <footer>
            <div>
                <p>Créé par Paul Ponnau pour OpenClassrooms dans le cadre du parcours Web Dev<br>Contact & Information: contact@paulponnau.fr.</p>
            </div>
        </footer>

        <button onclick="backToTop()" id="backToTopButton" title="Remonter la page">^</button>
        <script src="public/js/backToTop.js"></script>
    </body>
</html>
