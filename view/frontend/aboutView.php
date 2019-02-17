<?php $title = 'Billet simple pour l\'Alaska - forteroche.fr'; ?>

<?php ob_start(); ?>
<div id="breadcrumbs"><a href="index.php">Acceuil</a>/About</div>

<div><img src="public/css/media/images/forteroche.jpg" alt="author picture"></div>
<h1 id="website_aboutTitle">A propos</h1>
<h2 id="website_aboutSubTitle">Jean Forteroche, Billet simple pour l'Alaska</h2>

<p>Aliquam mauris metus, interdum at dignissim eget, tempus vitae sapien. Aenean vel porttitor tortor. Pellentesque tristique mauris id lectus posuere, ac lobortis neque suscipit. Ut sit amet odio sit amet nisl fermentum gravida vitae ac lacus. Mauris convallis augue nec mauris tempor, vitae convallis urna consectetur. In facilisis purus in aliquam iaculis. Donec sed augue ac orci interdum auctor. Quisque ullamcorper rhoncus tincidunt. Aliquam neque tellus, consequat sagittis dapibus quis, venenatis quis ipsum. Maecenas placerat egestas ex sit amet scelerisque. Vestibulum rhoncus, libero id dictum molestie, dui turpis vulputate est, eu tempus lectus elit ornare lorem. Ut aliquam metus mi, et sollicitudin est finibus sit amet.</p>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php');?>