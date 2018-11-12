<?php
$page = 'index';
if(isset($_GET['page'])){
  $page = $_GET['page'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Site sur le dev</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">Site sur le dev</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li<?php echo ($page == 'index' ? ' class="active"' : ''); ?>><a href="index.html">Accueil</a></li>
        <li<?php echo ($page == 'htmlcss' ? ' class="active"' : ''); ?>><a href="htmlcss.html">HTML/CSS</a></li>
        <li<?php echo ($page == 'java' ? ' class="active"' : ''); ?>><a href="java.html">Java</a></li>
        <li<?php echo ($page == 'swift' ? ' class="active"' : ''); ?>><a href="swift.html">Swift</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php
if($page == 'index'){
?>
<div class="container-fluid page">
  <div class="row">
    <div class="col-sm-2 sidebar"></div>
    <div class="col-sm-8 text-left content">
      <h1>Accueil</h1>
      <p>Bienvenue sur mon site ! Sur celui-ci, tu découvrira plein d'informations lié à la programmation informatique, et surout au niveau des différents languages de programmations existant.</p>
      <hr>
      <video width="100%" controls><source src="video.mp4" type="video/mp4">Si ce texte s'affiche, c'est que votre navigateur ne supporte pas la balise &lt;video&gt; ou le format MP4.</video>
      <hr>
      <div class="row">
        <div class="col-md-7">
          <p>Sur la première page, tu découvrira ce qu'est le language HTML et CSS, utilisé pour la création de site web principalement.</p>
          <p><a href="htmlcss.html" class="btn btn-primary">Découvrir le HTML/CSS</a></p>
        </div>
        <div class="col-md-5">
          <img src="img_htmlcss.jpg" alt="Illustration sur le HTML/CSS" width="100%">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-5">
          <img src="img_java.jpg" alt="Illustration sur le Java" width="100%">
        </div>
        <div class="col-md-7">
          <p>Sur la deuxième page, tu découvrira ce qu'est le language Java, utilisé pour la création de logiciel, de jeux, d'application, ...</p>
          <p><a href="java.html" class="btn btn-primary">Découvrir le Java</a></p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-7">
          <p>Sur la troisième page, tu découvrira ce qu'est le language Swift, utilisé pour la création d'application sur les appareils d'Apple.</p>
          <p><a href="swift.html" class="btn btn-primary">Découvrir le Swift</a></p>
        </div>
        <div class="col-md-5">
          <img src="img_swift.jpg" alt="Illustration sur le Swift" width="100%">
        </div>
      </div>
      <hr>
      <p>Bonne lecture !</p>
    </div>
    <div class="col-sm-2 sidebar">
    </div>
  </div>
</div>
<?php
}else if($page == 'htmlcss'){
?>
<div class="container-fluid page">
  <div class="row">
    <div class="col-sm-2 sidebar">
      <ul>
        <li><a href="#I">I. Qu'est ce que le HTML et le CSS ?</a></li>
        <li><a href="#II">II. Le HTML</a>
          <ul>
            <li><a href="#II-1">1. Utilisation</a></li>
            <li><a href="#II-2">2. Syntaxe</a></li>
          </ul>
        </li>
        <li><a href="#III">III. Le CSS</a>
          <ul>
            <li><a href="#III-1">1. Utilisation</a></li>
            <li><a href="#III-2">2. Syntaxe</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="col-sm-8 text-left content">
      <h1>HTML/CSS</h1>
      <p>Sur cette page, tu vas découvrir qu'est-ce que le language HTML et CSS.</p>
      <h2 id="I">I. Qu'est ce que le HTML et le CSS ?</h2>
      <div class="row">
        <div class="col-md-7">
          <p>Il s'agit de langages informatiques qui permettent de créer des sites web. Tous les sites web sont basés sur ces langages, ils sont incontournables et universels aujourd'hui. Ils sont à la base même du Web. Le langage HTML a été inventé par un certain Tim Berners-Lee en 1991.</p>
          <p>Par exemple, ce site a été écrit en HTML et CSS (voir image).</p>
        </div>
        <div class="col-md-5">
          <figure>
            <a href="img_htmlcss.jpg" title="Cliquez pour agrandir l'image"><img src="img_htmlcss.jpg" alt="Code du site en HTML/CSS" width="100%"></a>
            <figcaption>Le code de ce site en HTML/CSS</figcaption>
          </figure>
        </div>
      </div>
      <h2 id="II">II. Le HTML</h2>
      <h3 id="II-1">1. Utilisation</h3>
      <p>Le HTML est utilisé pour structurer un site internet.</p>
      <h3 id="II-2">2. Syntaxe</h3>
      <p>Dans le HTML, la syntaxe est sous forme de balises. Les balises sont formés de chevrons <code>&lt;</code> et <code>&gt;</code>, entre lesquels se trouve le nom de la balise.</p>
      <p><u>Exemple :</u></p>
      <pre>&lt;h1&gt;Un titre&lt;/h1&gt;
&lt;p&gt;Avec un paragraphe en dessous&lt;/p&gt;</pre>
      <h2 id="III">III. Le CSS</h2>
      <h3 id="III-1">1. Utilisation</h3>
      <p>Le CSS est utilisé pour styliser un site internet.</p>
      <h3 id="III-2">2. Syntaxe</h3>
      <p>Dans le CSS, on trouve le nom de la balise à styliser, suivit des propriétés qu'on veut lui appliquer.</p>
      <p><u>Exemple :</u></p>
      <pre>h1 {
  color: blue;
}</pre>
    </div>
    <div class="col-sm-2 sidebar"></div>
  </div>
</div>
<?php
}else if($page == 'java'){
?>
<div class="container-fluid page">
  <div class="row">
    <div class="col-sm-2 sidebar">
      <ul>
        <li><a href="#I">I. Qu'est ce que le Java ?</a></li>
        <li><a href="#II">II. Syntaxe</a>
          <ul>
            <li><a href="#II-1">1. Les conditions</a></li>
            <li><a href="#II-2">2. Les boucles</a></li>
            <li><a href="#II-3">3. Les fonctions</a></li>
            <li><a href="#II-4">4. Et bien plus encore !</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="col-sm-8 text-left content">
      <h1>Java</h1>
      <p>Sur cette page, tu vas découvrir qu'est-ce que le language Java.</p>
      <h2 id="I">I. Qu'est ce que le Java ?</h2>
      <div class="row">
        <div class="col-md-7">
          <p>Le Java est un langage de programmation orienté objet, c'est à dire que tout est objet dans celui-ci. Il est utilisé pour différentes productions, comme des logiciel, des jeux, des applications mobiles Android, ...</p>
        </div>
        <div class="col-md-5">
          <figure>
            <a href="img_java.jpg" title="Cliquez pour agrandir l'image"><img src="img_java.jpg" alt="Exemple de code Java" width="100%"></a>
            <figcaption>Exemple de code Java</figcaption>
          </figure>
        </div>
      </div>
      <h2 id="II">II. Syntaxe</h2>
      <p>En Java, la syntaxe est complexe car elle contient beaucoup de fonctionnalités différentes. Sur cette page, je vous montrerai seulement quelques exemples sur cette page.</p>
      <h3 id="II-1">1. Les conditions</h3>
      <p>Les conditions sont des structures qui permettent d'éffectuer un test et de varier le comportement du programme en fonctionne de celui-ci.</p>
      <p><u>Exemple :</u></p>
      <pre>if(condition) {
  System.out.println("Condition ok");
} else {
  System.out.println("Condition fausse");
}</pre>
      <h3 id="II-2">2. Les boucles</h3>
      <p>Les boucles permettent d'éxécuter une instruction ou un bloc d'instruction tant qu'une condition est vrai.</p>
      <p><u>Exemple :</u></p>
      <pre>while(condition) {
  System.out.println("Bonjour !");
}</pre>
      <h3 id="II-3">3. Les fonctions</h3>
      <p>Les fonctions sont des blocs d'instruction qui s'éxécute lorsque l'on appel celle-ci.</p>
      <p><u>Exemple :</u></p>
      <pre>public int double(int x) {
  return 2*x;
}

...

int y = double(3); // y aura pour valeur 6</pre>
      <h3 id="II-4">4. Et bien plus encore !</h3>
      <p>Il en existe encore des dizaines que je ne vais pas vous énumérer ici, vous les trouverez sur internet en faisant quelques recherches.</p>
    </div>
    <div class="col-sm-2 sidebar">
    </div>
  </div>
</div>
<?php
}else if($page == 'swift'){
?>
<div class="container-fluid page">
  <div class="row">
    <div class="col-sm-2 sidebar">
      <ul>
        <li><a href="#I">I. Qu'est ce que le Swift ?</a></li>
      </ul>
    </div>
    <div class="col-sm-8 text-left content">
      <h1>Swift</h1>
      <p>Sur cette page, tu vas découvrir qu'est-ce que le language Swift.</p>
      <h2 id="I">I. Qu'est ce que le Swift ?</h2>
      <div class="row">
        <div class="col-md-7">
          <p>Le Swift est un langage de programmation inventé par Apple. Il est utilisé pour faire des applications sous macOS, iOS, tvOS et watchOS.</p>
        </div>
        <div class="col-md-5">
          <figure>
            <a href="img_swift.jpg" title="Cliquez pour agrandir l'image"><img src="img_swift.jpg" alt="Exemple de code Swift" width="100%"></a>
            <figcaption>Exemple de code Swift</figcaption>
          </figure>
        </div>
      </div>
    </div>
    <div class="col-sm-2 sidebar">
    </div>
  </div>
</div>
<?php
}
?>
<footer class="container-fluid text-center">
  <p>Site développé par Nathan FALLET dans le cadre du cours d'ICN</p>
</footer>

</body>
</html>
