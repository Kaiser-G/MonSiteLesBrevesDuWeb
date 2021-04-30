<!DOCTYPE html>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Formulaire</title>
    <link rel="icon" type="image/png" href="./images/newspapers.png" />
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <link rel="stylesheet" href="assetspagesarticles/css2/main.css" />
    <link rel="stylesheet" href="formulaire.css" />
  </head>
  <body class="single is-preload">
    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Header -->
      <header id="header">
        <h1><a href="index.html">Les brèves du web</a></h1>
        <nav class="links">
          <ul>
            <li><a href="index.html">Actualités</a></li>
            <!-- <li><a href="articles.html">Articles</a></li> -->
            <!-- <li><a href="#">Feugiat</a></li>
            <li><a href="#">Tempus</a></li>
            <li><a href="#">Adipiscing</a></li> -->
          </ul>
        </nav>
      </header>

      <!-- Main -->
      <div id="main">
        <!-- Post -->
        <article class="post">
          <header>
            <div class="title">
              <h2>Questionnaire</h2>
              <p>
                Si tu as quelques minutes pour répondre a ses quelques questions
              </p>
            </div>
            <div class="meta">
              <time class="published" datetime="2015-11-01">23 AVRIL 2021</time>
            </div>
          </header>
          <span class="image featured"
            ><img
              src="./images/images divers/intelligence-artificielle.jpg"
              alt=""
          /></span>

          <h1>Apprendre a vous connaitre</h1>
          <br />

          <form method="post" action="traitement.php">
            <label for="pseudo">Votre pseudo (si vous en utilisez un)</label>
            <input
              type="text"
              name="pseudo"
              id="pseudo"
              maxlength="30"
              placeholder="The boss"
            />
            <br />

            <label for="nom">Votre nom</label>
            <input
              type="text"
              name="pnom"
              id="pnom"
              maxlength="30"
              placeholder="Dupont"
              required
            />
            <br />

            <label for="prenom">Votre prénom</label>
            <input
              type="text"
              name="pprenom"
              id="ppremon"
              maxlength="30"
              placeholder="Nicolas"
              required
            />
            <br />

            <label for="mail">Votre adresse email : </label>
            <input
              type="email"
              name="mail"
              id="mail"
              placeholder="dupontnico@gmail.com"
              required
            /><br />
            <br />

            <p>
              <strong>
                Veuillez indiquer la tranche d'âge dans laquelle vous vous
                situez :</strong
              >
              <br />
              <input type="radio" name="age" value="moins15" id="moins15" />
              <label for="moins15">Moins de 15 ans</label><br />
              <input
                type="radio"
                name="age"
                value="medium15-25"
                id="medium15-25"
              />
              <label for="medium15-25">15-25 ans</label><br />
              <input
                type="radio"
                name="age"
                value="medium25-40"
                id="medium25-40"
              />
              <label for="medium25-40">25-40 ans</label><br />
              <input type="radio" name="age" value="plus40" id="plus40" />
              <label for="plus40">Encore plus vieux que ça ?!</label>
            </p>
            <br />

            <p>
              <label for="pays">Dans quel pays habitez-vous ?</label>
              <select name="pays" id="pays">
                <option value="france">France</option>
                <option value="espagne">Espagne</option>
                <option value="italie">Italie</option>
                <option value="royaume-uni">Royaume-Uni</option>
                <option value="canada">Canada</option>
                <option value="etats-unis">États-Unis</option>
                <option value="chine">Chine</option>
                <option value="japon">Japon</option>
                <option value="japon">Autre</option>
              </select>
            </p>
            <br />

            <label for="note"
              >Quelle note sur 20 mettriez vous a mon site web ?</label
            >
            <input
              type="number"
              name="note"
              id="note"
              min="-10"
              max="20"
            /><br />
            <br />
            <br />

            <label for="date">Quand avez vous découvert mon site ?</label>
            <input type="date" name="date" id="date" /><br />
            <br />
            <br />

            <label for="frequantation"
              >Combien de fois vous connectez vous a mon site par mois ?
              Environs</label
            >
            <input
              type="number"
              name="frequantation"
              id="frequantation"
              min="0"
              max="60"
            /><br />
            <br />
            <br />
            <br />

            <p>Quel est votre marque préféré dans cette liste ?</p>

            <input type="checkbox" name="Lenovo" id="Lenovo" /><label
              for="Lenovo"
              >Lenovo</label
            ><br />
            <input type="checkbox" name="HP" id="HP" /><label for="HP">HP</label
            ><br />
            <input type="checkbox" name="Apple" id="Apple" /><label for="Apple"
              >Apple</label
            ><br />
            <input type="checkbox" name="Dell" id="Dell" /><label for="Dell"
              >Dell</label
            ><br />
            <input type="checkbox" name="Autre" id="Autre" /><label for="Autre"
              >Aucune de celles proposer</label
            ><br />
            <br />
            <br />
            <br />

            <label for="ameliorer"
              >Comment pourrais je améliorer mon site ?</label
            ><br />
            <textarea name="ameliorer" id="améliorer" rows="10" cols="50">
			Merci de m'aider a améliorer mon site

		</textarea
            >

            <br />
            <br />

            <input type="submit" name="envoyer" />
          </form>
          <br />
          <br />

          <p>
            Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl.
            Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna
            enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non
            congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed
            vitae justo condimentum, porta lectus vitae, ultricies congue
            gravida diam non fringilla.
          </p>
          <p>
            Nunc quis dui scelerisque, scelerisque urna ut, dapibus orci. Sed
            vitae condimentum lectus, ut imperdiet quam. Maecenas in justo ut
            nulla aliquam sodales vel at ligula. Sed blandit diam odio, sed
            fringilla lectus molestie sit amet. Praesent eu tortor viverra lorem
            mattis pulvinar feugiat in turpis. Class aptent taciti sociosqu ad
            litora torquent per conubia nostra, per inceptos himenaeos. Fusce
            ullamcorper tellus sit amet mattis dignissim. Phasellus ut metus
            ligula. Curabitur nec leo turpis. Ut gravida purus quis erat
            pretium, sed pellentesque massa elementum. Fusce vestibulum porta
            augue, at mattis justo. Integer sed sapien fringilla, dapibus risus
            id, faucibus ante. Pellentesque mattis nunc sit amet tortor
            pellentesque, non placerat neque viverra.
          </p>
          <footer></footer>
        </article>
      </div>

      <!-- Footer -->
      <section id="footer">
        <p class="copyright">
          &copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>.
          Images: <a href="http://unsplash.com">Unsplash</a>.
        </p>
      </section>
    </div>
  </body>
</html>
