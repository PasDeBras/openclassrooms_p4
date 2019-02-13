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
                <p><img src="css/media/images/logo.png" alt="Logo Blog" id="logo"></p>
                <nav>
                    <ul class="menu_gobal">
                        <li><a href="index.php?action=admin">Blog</a></li>
                        <li><a href="#about">A propos</a></li>
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
            <p>placeholder footer</p>
        </footer>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=kn0ulpi8u0bpnya81y4ca1vh9dzza82qdhb8e3ti1o4bcp9b"></script> 
        <script src="public/js/tinyMCE.js"></script>
    
    </body>
</html>
