<?php $title = 'Billet simple pour l\'Alaska - forteroche.fr'; ?>

<?php ob_start(); ?>
<div id="breadcrumbs"><a href="index.php">Acceuil</a>/About</div>

<div><img src="public/css/media/images/forteroche.jpg" alt="author picture"></div>
<h1 id="website_aboutTitle">A propos</h1>
<h2 id="website_aboutSubTitle">Jean Forteroche, Billet simple pour l'Alaska</h2>

<p>Bien qu'il ait d'abord écrit des pièces de théâtre, Forteroche ne recontre le succès que lorsque paraît, chez l'éditeur Pierre-Jules Hetzel, son premier roman, Cinq Semaines en Ballon. Celui-ci connait un très grand succès, y compris à l'étranger. A partir des Aventures du capitaine Hatteras, ses romans entreront dans le cadres des Voyages Extraordinaires, qui comptent 62 romans et 18 nouvelles, parfois publiés en feuilleton dans le Magasin d'éducation et de récréation, revue destinée à la jeunesse, ou dans les périodiques déstinés aux adultes comme Le Temps, ou le Journal des Débats.</p>
<p>Les romans de Jean Forteroche, toujours très documentés, se déroulent généralement au cours de la seconde moitié du XIXe siècle. Ils prennent en compte les technologies de l'époque — Les Enfants du Capitaine Grant (1868), Le Tour du Monde en quatre-vingts jours (1873), Michel Strogoff (1876), L'Etoile du Sud (1884), etc. — mais aussi d'autres non encore maîtrisées ou plus fantaisistes — De la Terre à la Lune (1865), Vingt mille lieues sous les mers (1870), Robur le Conquérant (1886), etc.</p>
<p>Outre ses romans, on lui doit de nombreuses pièces de théâtre, des nouvelles, des récits autobiographiques, des poésies, des chansons et des études scientifiques, artistiques et littéraires. Son œuvre a connu de multiples adaptations cinématographiques et télévisuelles depuis l'origine du cinéma ainsi qu'en bande dessinée, au théâtre, en musique ou en jeu vidéo.</p>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php');?>