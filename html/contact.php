<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>
    <link rel="stylesheet" href="../css/style-contact.css">
</head>
<body>

    <?php include("headers.php"); ?>
    <section class="main-content">

        <section class="contact">
            <h2 id="">LES CONTACT</h2>

            <div class="contact-grid">
                <div>
                    <img src="../image/corporate-headshot.jpg" class="img-contact">
                    <p>Responsable du département Informatique</p>
                    <p>E-mail: <a href="mailto:responsable.info@efrei-demo.fr" class="email">responsable.info@efrei-demo.fr</a></p>
                    <p>Call: +33 1 42 68 10 21</p>

                </div>

                <div>
                    <img src="../image/headshotwomaninblackblazer.jpg" class="img-contact">
                    <p>Responsable des projets étudiants</p>
                    <p>E-mail: <a href="mailto:projets.etudiants@efrei-demo.fr" class="email">projets.etudiants@efrei-demo.fr</a></p>
                    <p>Call: +33 1 42 68 10 34</p>
                </div>

                <div>
                    <img src="../image/Gallery-image-5-1080x1080-1.jpg" class="img-contact">
                    <p>Responsable des stages et relations entreprises</p>
                    <p>E-mail: <a href="mailto:stages.entreprises@efrei-demo.fr" class="email">stages.entreprises@efrei-demo.fr</a></p>
                    <p>Call: +33 1 42 68 10 56</p>
                </div>

                <div>
                    <img src="../image/images.jpg" class="img-contact">
                    <p>Support informatique</p>
                    <p>E-mail: <a href="mailto:support.tech@efrei-demo.fr" class="email">support.tech@efrei-demo.fr</a></p>
                    <p>Call: +33 1 42 68 10 78</p>
                </div>
            </div>
        </section>
        <section class="apropos">
            <p class="txt">Campus principal :  <br>Villejuif (94), France</p>
            <p class="txt">Adresse :  <br>30-32 Avenue de la République <br> 94800 Villejuif</p>
            <p class="txt">Téléphone :  <br>+33 (0)1 46 77 47 47</p>
            <p class="txt">Email général admissions :  <br>admissions@efrei.fr</p>
                <!-- <img src="../image/logo-1.png" alt="logo pathaleon efrei" class="logo-1"> -->
            <div class="contact-section ">
                <form action="" class="contact-form" >
                    <h3>FAQ</h3>
                    <label for="">nom et prenom:</label>
                    <input type="text" required><br>
                    <label for="">Email:</label>
                    <input type="email" placeholder="example@gmail.com" required><br>
                    <label for="">Question</label>
                    <input type="text" placeholder="entre message" required>
                    <button>envoyer</button>
                </form>
                
            </div>
        </section>
        
    </section>
    <section class="admissions">
        <h2>Procédure d'Admission</h2>

        <div class="admission-container">

            <div class="admission-card">
                <h3>Admission Post-Bac</h3>
                <div class="admission-content">
                    <p>Inscription via Parcoursup.</p>
                    <p>Concours Puissance Alpha.</p>
                    <p>Étude de dossier + épreuves écrites (maths, sciences, anglais).</p>
                </div>
            </div>

            <div class="admission-card">
                <h3>Admissions Parallèles</h3>
                <div class="admission-content">
                    <p>Pour étudiants Bac+1, Bac+2, Licence, BTS, BUT.</p>
                    <p>Candidature via Puissance Alpha Admissions Rebond.</p>
                    <p>Étude de dossier + entretien de motivation.</p>
                </div>
            </div>

            <div class="admission-card">
                <h3>Admission Post-Prépa</h3>
                <div class="admission-content">
                    <p>Via Concours Puissance Alpha CPGE.</p>
                    <p>Inscription sur le portail SCEI.</p>
                    <p>Épreuves écrites + entretien oral.</p>
                </div>
            </div>

            <div class="admission-card">
                <h3>Rentrée Décalée</h3>
                <div class="admission-content">
                    <p>Rentrée en février pour réorientation.</p>
                    <p>Candidature via Puissance Alpha Admissions Rebond.</p>
                    <p>Dossier + entretien ou épreuves écrites selon profil.</p>
                </div>
            </div>

        </div>
    </section>
    
    <section class="access">
        <h2>Plan d'accès</h2>

        <div class="access-container">

            <div class="access-info">
                <h3>Campus de Villejuif</h3>
                <p>📍 30–32 Avenue de la République<br>94800 Villejuif</p>
                <p>🚇 Métro Ligne 7 – Villejuif Louis Aragon</p>
                <p>🚇 Ligne 15 – Grand Paris Express (à venir)</p>
            </div>

            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps?q=EFREI+Paris+Villejuif&output=embed"
                    loading="lazy">
                </iframe>
            </div>

        </div>
    </section>
    
    <?php include("footer.php"); ?>

</body>
</html>