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
                <div id="logo"><img src="public/css/media/images/logo_fat.png" alt="Logo Blog"></div>
                <div id="logo_slim"><img src="public/css/media/images/logo_skim.png" alt="Logo Blog"></div>
                <nav>
                    <ul class="menu_gobal">
                        <li><a href="index.php?action=admin">Blog</a></li>
                        <li><a href="index.php?action=about&amp;other=admin">A propos</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="index.php?action=disconnect">Déconnexion</a></li>
                    </ul>
                </nav>
                <nav>
                    <ul class="menu_admin">
                        <li><a href="index.php?action=admin_NewPost">Nouveau billet</a></li>
                        <li><a href="index.php?action=admin_CommentModerator">Commentaires</a></li>
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
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=kn0ulpi8u0bpnya81y4ca1vh9dzza82qdhb8e3ti1o4bcp9b"></script> 
        <script src="public/js/tinyMCE.js"></script>
        <script src="public/js/backToTop.js"></script>
    </body>
</html>
