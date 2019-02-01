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
        
        
        <footer>
            <p>placeholder footer</p>
        </footer>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=kn0ulpi8u0bpnya81y4ca1vh9dzza82qdhb8e3ti1o4bcp9b"></script> 
        <script> tinymce.init({ selector:'textarea', forced_root_block : '', force_br_newlines : true, force_p_newlines : false, }); </script>
    </body>

    
</html>
