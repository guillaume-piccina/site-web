<?php require 'head/entete.html'; ?>
    <main>
      <section class="block">
        <h1> Qui suis-je ? </h1>
        <div>
            Je m'appelle Guillaume Piccina, j'ai 19 ans et je suis né à Briançon dans les Hautes-Alpes. Je suis actuellement en deuxième année de DUT informatique à Aix-en-Provence à l'université d'Aix-Marseille (AMU).
            <br/><br/>
            Je suis passionné par l'informatique depuis plusieurs années et je souhaite continuer sur cette voie après mon DUT en essayant d'intégrer une école d'ingénieurs.
            <br/><br/>
            Mes centres d'intérêt sont divers : j'aime regarder des séries, écouter de la musique, je fais du sport occasionnellement.
            <br/><br/>
        </div>
        <figure id="photo"></figure>
      </section>
      <section class="block">
        <h1> Mon parcours </h1>
        <div id="ligne"></div>
        <div class="conteneur-année">
          <div class="année" onclick="document.getElementById('boite').innerHTML='<h2>2011-2015</h2></br><h3>Collège des Hautes-Vallées (Guillestre)</h3></br></br>○ Stage de 3ème dans un cabinet d\'architecte'">2011</div>
          <div class="année" onclick="document.getElementById('boite').innerHTML='<h2>2015-2018</h2></br><h3>Lycée Honoré Romane (Embrun)</h3></br></br>○ Bac Scientifique option mathématiques mention AB </br>○ Stage dans une entreprise d\'informatique (CIS)'">2015</div>
          <div class="année" onclick="document.getElementById('boite').innerHTML='<h2>2018-2020</h2></br><h3>IUT d\'Aix-Marseille (Aix-en-Provence)</h3></br></br>○ Obtention DUT Informatique</br>○ Stage de 3 mois à Dassault Systèmes (Aix-en-Provence)'">2018</div>
          <div class="année" onclick="document.getElementById('boite').innerHTML='<h2>2020-2023</h2></br><h3>Ambition : Intégrer une école d\'ingénieur'">2020</div>
        </div>
        <div id="ligne"></div>
        <div id="boite"><h2>Choisissez une date<h2></div>
      </section>
      <section class="block">
        <h1> Mes compétences </h1>
        <div class="type-compétence">Langages informatiques</div>
        <div class="compétences">C++</div>
        <div class="compétences">HTML/CSS</div>
        <div class="compétences">PHP</div>
        <div class="compétences">Javascript</div>
        <div class="compétences">Java</div>
        <div class="type-compétence">Autres</div>
        <div class="compétences">Base de données</div>
        <div class="compétences">Réseaux</div>
        <div class="compétences">Bash</div>
        <div class="type-compétence">Langues</div>
        <div class="compétences">Anglais</div>
        <div class="compétences">Italien</div></br>
      </section>
      <footer>
        Guillaume Piccina © 2019
      </footer>
    </main>
  </body>
</html>
