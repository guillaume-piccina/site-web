<?php require 'head/entete.html'; ?>
    <main>
      <h1 id="titre-contact">Pour me contacter</h1>
      <section id="block-contact">
        <div id="info-perso">
          <div><img id="icon-address" src="image/address.png"></img><p> Aix-en-Provence / Guillestre</p></div>
          <div><img id="icon-email" src="image/email.png"></img><p> guillaume.piccina@outlook.com</p></div>
          <div><img id="icon-phone" src="image/phone.png"></img><p> 06 52 62 71 25</p></div>
        </div>
        <div id="formulaire">
          <form action="" method="post">
            <div>
              <label for="email">Adresse E-mail</label>
              <input type="email" name="email" id="email" required/>
            </div>
            <div class="nom_prenom">
              <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" />
              </div>
              <div>
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" />
              </div>
            </div>
            <div>
              <label for="message">Message</label>
              <textarea name="message" id="message" rows="5" cols="50" required></textarea>
            </div>
            <div>
              <button type="submit">Envoyer</button>
            </div>
            <?php

            if (isset($_POST['email']) && isset($_POST['message']))
            {
              $prenom = htmlspecialchars($_POST['prenom']);
              $nom = htmlspecialchars($_POST['nom']);
              $email = htmlspecialchars($_POST['email']);
              $message = htmlspecialchars($_POST['message']);
              $to = 'guillaume.piccina@outlook.com';
              $subject = 'Site web, message de : ' . $prenom . ' ' . $nom;
              $header = 'From : ' . $email;
              mail($to, $subject, $message, $header);
            }
            ?>
          </form>
        </div>
        <div id="linkedin">
        </div>
      </section>
      <footer>
        Guillaume Piccina © 2019
      </footer>
    </main>
  </body>
</html>
     
