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
                <nav>
                    <ul class="menu_gobal">
                        <li><a href="index.php?action=userOverview">Blog</a></li>
                        <li><a href="#about">A propos</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="index.php?action=secure">Connexion</a></li>
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
        
    </body>
</html>