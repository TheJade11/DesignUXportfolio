

    <?php include'header.php'?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-12-lg all">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row contact">
            <h2>CONTACT</h2>
            <div class="col-6 col-lg-6">
                <img src="./assets/images/arbre.jpg" alt="arbre"/>
            </div>
            <div class="col-6 col-lg-6">
                    <p class="mt-1 "><a href="#">LEE, Jong Hyeok, Ac.</a></p>
                    <p>6360 Jean-Talon Est, suite 216
                    Montréal, QC, H1S 1M8 (Coin de Langelier)
                    </p>
                    <p><a href="tel:+15149035512">(514) 903-5512</a></p>
                    <p><a href="tel:+15149035512">(514) 903-5512</a></p>
                    <p><a href="tel:+15145571012">(514) 557-1012</a></p>
                    <p>Fax. (514) 903-5512</p>
                    <p>Autoroute : 40 (sortie 78 Langelier)
                    Bus : 141 est, 33 nord
                    Métros: St-Michel (ligne bleue),
                    Langelier (ligne verte)</p>

                <p><a class="text-justify" href="mailto:info@cliniqueacupuncturelee.com">info@cliniqueacupuncturelee.com</a></p>
                <p><a class="text-center" href="index.php"> www.cliniqueacupuncturelee.com</a></p>

            </div>
        </div>
        
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d281367.3648226483!2d-73.76220376470975!3d45.63866122727405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d46.7650077!2d-71.31994089999999!4m5!1s0x4cc91e8bc6aed65f%3A0xd70d37f33d62092e!2sacupuncture%20LEE!3m2!1d45.5907815!2d-73.5752964!5e0!3m2!1sfr!2sca!4v1648772374714!5m2!1sfr!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
	
        <div class="row">
            <div class="col-12 col-lg-12"></div>
            <div class="col-12 col-12-lg">
                <a class="btn btn-lg btn-md btndroite" href="index.php" role="button">Retour à l'Accueil
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        
    </div>    
</div>
<section id="appointment">
        <div class="container">
            <div class="col-12 col-6-lg formulaire">
                <h2>Prendre un rendez vous</h2>
                    <form action="https://formsubmit.co/tlatoani.moctezuma11@gmail.com" method="POST">
                        <input placeholder="Nom de famille" name="name" type="text" required="" class="nom-famille">
                        <input placeholder="Adresse email" name="email" type="email" required="" class="email">
                        <input placeholder="Numéro de contact 000-000-0000" name="number" type="text" required="" class="numero-telephone">
                        <input  name="name" type="date" required="" class="date">
                        <input placeholder="Entrez l'horaire souhaité  00:00" name="time" type="text" class="horaire">
                        <textarea placeholder=" Laissez un commentaire" name="message" class="commentaire"></textarea>
                        <input type="hidden" name="_next" value="http://localhost:82/acunpuntureLee.php/thankyou.php" method="POST">
                        <button class="submit-btn">Soumettre</button>
                    </form>
            </div>
            
        </div>
            <br>
            <br>
            <br>
            <br>
           
</section>


    <?php include'footer.php'?>





