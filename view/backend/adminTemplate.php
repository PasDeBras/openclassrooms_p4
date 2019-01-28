<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="public/css/style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <header id="top">
			<p><img src="css/media/images/logo.png" alt="Logo Blog" id="logo"></p>
			<nav>
				<ul class="menu_gobal">
					<li><a href="#blog">Blog</a></li>
					<li><a href="#about">A propos</a></li>
					<li><a href="#contact">Contact</a></li>
                    <li><a href="#disconnect">Déconnexion</a></li>
				</ul>
			</nav>
            <nav>
				<ul class="menu_admin">
                    <li><a href="#admin_overview">Overview</a></li>
					<li><a href="index.php?action=adminEdit">Nouveau billet</a></li>
					<li><a href="#post_edit">Modifier un billet</a></li>
					<li><a href="#comment_manage">Commentaires</a></li>
				</ul>
			</nav>
		</header>

        <?= $content ?>

    </body>

    <footer>
        <p>placeholder footer</p>
    </footer>
</html>