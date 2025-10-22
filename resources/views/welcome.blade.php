<!DOCTYPE html>
<html lang="fr">
  
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="css/style.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>


<style>
@import url('https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap');
/* contact us  */

body{
  color:#fff
}
.right_conatct_social_icon{
     background: linear-gradient(to top right, #005f16 5%, #009624 100%);
}
.contact_us{
    background-color: #f1f1f1;
    padding: 120px 0px;
}

.contact_inner{
    background-color: #fff;
    position: relative;
    box-shadow: 20px 22px 44px #cccc;
    border-radius: 25px;
}
.contact_field{
    padding: 60px 340px 90px 100px;
}
.right_conatct_social_icon{
    height: 100%;
}

.contact_field h3{
   color: #333333;
    font-size: 40px;
    letter-spacing: 1px;
    font-weight: 600;
    margin-bottom: 10px
}
.contact_field p{
    color: #333333;
    font-size: 13px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 35px;
}
.contact_field .form-control{
    border-radius: 0px;
    border: none;
    border-bottom: 1px solid #ccc;
}
.contact_field .form-control:focus{
    box-shadow: none;
    outline: none;
    border-bottom: 2px solid #009624;
}
.contact_field .form-control::placeholder{
    font-size: 13px;
    letter-spacing: 1px;
}

.contact_info_sec {
    position: absolute;
    background-color: #333333;
    right: 1px;
    top: 18%;
    height: 340px;
    width: 340px;
    padding: 40px;
    border-radius: 25px 0 0 25px;
}
.contact_info_sec h4{
    color: #fff;
    letter-spacing: 1px;
    padding-bottom: 15px;
}

.info_single{
    margin: 30px 0px;
}
.info_single i{
    margin-right: 15px;
}
.info_single span{
    font-size: 14px;
    letter-spacing: 1px;
}

button.contact_form_submit {
    background: linear-gradient(to top right, #05af2d -5%, #009624 100%);
    border: none;
    color: #fff;
    padding: 10px 15px;
    width: 100%;
    margin-top: 25px;
    border-radius: 35px;
    cursor: pointer;
    font-size: 14px;
    letter-spacing: 2px;
}
.socil_item_inner li{
    list-style: none;
}
.socil_item_inner li a{
    color: #fff;
    margin: 0px 15px;
    font-size: 14px;
}
.socil_item_inner{
    padding-bottom: 10px;
}

.map_sec{
    padding: 50px 0px;
}
.map_inner h4, .map_inner p{
    color: #333333;
    text-align: center
}
.map_inner p{
    font-size: 13px;
}
.map_bind{
   margin-top: 50px;
    border-radius: 30px;
    overflow: hidden;
}

/* Actualités */
.news-item h5 {
  font-size: 16px;
  font-weight: 700;
  margin-bottom: 5px;
  padding: 5px 0;
  transition: 0.3s;
  color: #009624;
}
.container {
  max-width: 1200px;
  margin: 0 auto;
}

.news-grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.news-item {
  background-color:#e6faee;
  width: 31%;
}

.news-item img {
  width: 100%;
  margin-bottom: 10px;
}

.news-excerpt {
  font-size: 16px;
  line-height: 1.5;
}

/* projects section */
.project-item h5 {
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 5px;
  padding: 5px 0;
  transition: 0.3s;
  color: #009624;
}

.project-item img {
  width: 500px;
  margin-bottom: 10px;
}
.projects-list {
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  justify-content:  space-around;
}

.project-item {
  flex-basis: 32%;
  margin-bottom: 50px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease-in-out;

  text-align: center;
  overflow: hidden;
  border-radius: 10px;
  background-color:#e6faee;
}

.project-item:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.project-title {
  font-size: 24px;
  margin-top: 20px;
  margin-bottom: 10px;
}

.project-description {
  font-size: 18px;
  line-height: 1.5;
  margin-bottom: 20px;
}

/* Services section */
.service {
  background-color: #fff;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  text-align: center;
  max-height: 800px;

  height: 335px; /* Adjust the height as needed */
  overflow: hidden;
  margin-bottom: 20px;
    border-radius: 10px;
    cursor: pointer;
    transition: 0.3s;
}
.service img {
  width: 75px;
  margin-bottom: 10px;
}
.service h5 {
  font-size: 15px;
  font-weight: 700;
  margin-bottom: 5px;
  padding: 5px 0;
  transition: 0.3s;
  color: #009624;
}
.service p {
  font-size: 13px;
  line-height: 1.5;
  margin-bottom: 0;
  max-height: 800px;
  overflow: hidden;
}
.service:hover.service h5{
  color:  var(--dark);
}
.service:hover {
  transform: translateY(-5px);
  background:#00c853;
}
.service:hover img {
  transition: all 0.3s ease;
  transform: scale(1.1);
}
.section-intro {
   text-align: center;
   margin-bottom: 30px;
}

.section-intro .hline {
   width: 120px;
   height: 2px;
   background-color: #00c853;
   margin: 16px auto 0 auto;
}
h1,h2,h3,h4,h5,h6,
.display-1,.display-2,.display-3,.display-4 {
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
  color: var(--dark);
}

.info-box {
    align-items: center;
    display: flex;
}

.info-box img {
    width: 90px;
}

.overlay-image{
  position:absolute;
  bottom:0;
  left:0;
  right:0;
  top:0;
  background-position:center;
  background-size:cover;
  opacity:0.5;
}
.carousel-item{
  height: 47.3rem;
  background:black;
  color: white;
  position: relative;
}
/* Header styles */
header {
display: flex;
justify-content: space-between;
align-items: center;
padding: 10px 20px;
background-color: #ffffff;
position: fixed;
width: 100%;
top: 0;
left: 0;
z-index: 100;
box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
font-family: 'Montserrat', sans-serif;
}

.logo img {
height: 50px;
}

nav {
margin-right: 50px;
}

nav ul {
list-style: none;
margin: 0;
padding: 0;
display: flex;
}

nav li {
margin-left: 20px;
}

nav a {
text-decoration: none;
color: #333333;
font-size: 16px;
font-weight: 500;
transition: all 0.3s ease;
font-family: 'Roboto', sans-serif;
}

nav a:hover {
color: #00c853;
}

nav a.active {
color: #00c853;
}

nav .dropdown {
position: relative;
}

nav .dropdown:hover .dropdown-menu {
display: block;
}

nav .dropdown-menu {
position: absolute;
top: 100%;
left: 0;
display: none;
z-index: 1000;
min-width: 200px;
padding: 10px;
background-color: #ffffff;
box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
font-family: 'Roboto', sans-serif;
}

nav .dropdown-menu a {
color: #333333;
font-size: 16px;
font-weight: 400;
padding: 10px;
display: block;
white-space: nowrap;
}

nav .dropdown-menu a:hover {
background-color: #f2f2f2;
}

nav .dropdown-menu a.active {
background-color: #f2f2f2;
color: #00c853;
}

.navbar-search-form {
display: flex;
align-items: center;
border-radius: 20px;
border: none;
overflow: hidden;
}

.navbar-search-form input[type="text"] {
border: none;
padding: 8px 12px;
font-size: 14px;
font-family: 'Roboto', sans-serif;
background-color: #f2f2f2;
color: #333333;
}

.navbar-search-form button {
border: none;
background-color: #f2f

.2f2;
padding: 8px 15px;
color: #333333;
font-size: 14px;
font-weight: 500;
transition: all 0.3s ease;
cursor: pointer;
}

.navbar-search-form button:hover {
background-color: #00c853;
color: #ffffff;
}

/* Body styles */
body {
font-family: 'Roboto', sans-serif;
background-color: #f2f2f2;
color: #333333;
line-height: 1.3;
}

.container {
max-width: 1200px;
margin: 0 auto;
padding: 50px 20px;
}

.section-title {
font-size: 28px;
font-weight: 500;
margin-bottom: 20px;
text-align: center;
}

/* Button styles */
.btn {
border: none;
background-color: #00c853;
color: #ffffff;
padding: 10px 15px;
border-radius: 5px;
font-size: 14px;
font-weight: 500;
text-decoration: none;
cursor: pointer;
transition: all 0.3s ease;
}

.btn:hover {
background-color: #009624;
}

.btn-secondary {
background-color: transparent;
border: 1px solid #00c853;
color: #00c853;
}

.btn-secondary:hover {
background-color: #00c853;
color: #ffffff;
}

/* Footer styles */
footer {
background-color: #333333;
color: #ffffff;
padding: 50px 20px;
}

.footer-widget {
margin-bottom: 50px;
}

.footer-widget h3 {
font-size: 18px;
font-weight: 500;
margin-bottom: 20px;
}

.footer-widget ul {
list-style: none;
margin: 0;
padding: 0;
}

.footer-widget li {
margin-bottom: 10px;
}

.footer-widget a {
text-decoration: none;
color: #ffffff;
font-size: 14px;
transition: all 0.3s ease;
}

.footer-widget a:hover {
color: #00c853;
}

.social-icons {
display: flex;
}

.social-icons li {
margin-right: 10px;
}

.social-icons a {
color: #ffffff;
font-size: 20px;
display: flex;
align-items: center;
justify-content: center;
width: 40px;
height: 40px;
border-radius: 50%;
background-color: #00c853;
transition: all 0.3s ease;
}

.social-icons a:hover {
background-color: #009624;
}
.info-box {
    align-items: center;
    display: flex;
}

.info-box img {
    width: 90px;
}
@media only screen and (max-width: 768px) {
nav {
margin-right: 20px;
}

nav ul {
display: none;
}

nav li {
margin: 0;
}

nav .dropdown-menu {
position: static;
display: none;
box-shadow: none;
}

nav .dropdown:hover .dropdown-menu {
display: block;
}

.navbar-search-form {
margin-left: auto;
}

.navbar-search-form input[type="text"] {
font-size: 12px;
}

.btn {
font-size: 12px;
}

.container {
padding: 30px 20px;
}

}
</style>


<head>
    <meta charset="UTF-8">
    <title>ORMVA Melouya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
          <div class="logo">
          <img src="images/ORMVAM-removebg.png" alt="Logo ORMVAM">
          </div>
          <nav>
              <ul>
                  <li><a href="#" class="active">Accueil</a></li>
                  <li><a href="#propos" class="">À propos</a></li>
                  <li><a href="#services" class="">Services</a></li>    
                  <li><a href="#projet" class="projects-section">Projets</a></li>

                  <li><a href="#Actualités" class="">Actualités</a></li>
                  <li><a href="#Contact" class="">Contact</a></li>

              </ul>
          </nav>
          <div class="navbar-search-form">
              <nav>
                  <ul>
                  <li><a href="{{ route('login') }}"  style="color:#00c853">Log in</a></li>
                  </ul>
              </nav>

              <input type="text" placeholder="Recherche...">
              <button>Recherche</button>
          </div>
  </header>
<main>
      {{-- intro --}}
    <section class="intro">
      <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
          <div class="overlay-image" style="background-image: url(images/organisation_ormvam.jpg);"></div>
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Bienvenue à l'O.R.M.V.A.M</h1>
                <p>L'Office régional de mise en valeur agricole de la Moulouya (O.R.M.V.A.M) est un établissement public sous tutelle du ministère de l'Agriculture, de la pêche maritime, du développement rural et des eaux et forêts. Depuis sa création en 1966, l'O.R.M.V.A.M s'engage à améliorer la productivité agricole, à développer l'économie locale et à promouvoir la gestion durable des ressources en eau dans sa zone d'action.</p>
                <p><a class="btn btn-lg btn-primary" href="#">En savoir plus</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="overlay-image" style="background-image: url(images/55.jpg);"></div>
            <div class="container">
              <div class="carousel-caption">
                <h1>Nos missions principales</h1>
                <p>Gérer les équipements hydro-agricoles et les ressources en eau à usage agricole dans notre zone d'action, encadrer et organiser les agriculteurs en zone irriguée et en zone bour, intensifier la mise en valeur agricole, promouvoir le développement rural et aménager les terres irrigables et les terres bour.</p>
                <p><a class="btn btn-lg btn-primary" href="#">En savoir plus</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="overlay-image" style="background-image: url(images/6.jpg);"></div>
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>Nos services pour répondre à vos besoins</h1>
                <p>Nous offrons différents services pour répondre aux besoins de nos partenaires et de nos bénéficiaires.</p>
                <p><a class="btn btn-lg btn-primary" href="#">En savoir plus</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>


    <section id="propos">
          <div class="container">
          <div class="row">
              <div class="col-12 section-intro">
                <h1>À propos</h1>
                <div class="hline"></div>
              </div>
          </div>
              <div class="row align-items-center justify-content-center">
                  <div class="col-lg-7 py-5">
                      <div class="row">
                          <div class="col-12">
                              <div class="info-box">
                                  <img src="images/1.png" alt="">
                                  <div class="ms-2">
                                      <h5>Le rôle de L'O.R.M.V.A.M dans le développement agricole du Maroc</h5>
                                      <p>L'O.R.M.V.A.M est une institution publique marocaine créée en 1963. Son rôle est de promouvoir le développement agricole dans la région de la Moulouya, qui couvre les provinces de Berkane, Nador, Taourirt, Jerada, Figuig et Bouarfa. </p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12 mt-4">
                              <div class="info-box">
                                  <img src="images/advice.png" alt="">
                                  <div class="ms-2">
                                      <h5>Renforcer les compétences agricoles et l'innovation avec l'O.R.M.V.A.M</h5>
                                      <p>L'Office travaille en étroite collaboration avec les agriculteurs locaux pour améliorer la productivité et la qualité de leurs cultures, et pour développer de nouvelles pratiques agricoles durables. Pour cela, l'Office propose des conseils et des formations, ainsi que des projets de recherche et de développement.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12 mt-4">
                              <div class="info-box">
                                  <img src="images/team.png" alt="">
                                  <div class="ms-2">
                                      <h5>Financement et gouvernance collaborative de l'O.R.M.V.A.M</h5>
                                      <p>L'Office est financé par le gouvernement marocain, ainsi que par des partenaires internationaux tels que la Banque mondiale et l'Union européenne. Son conseil d'administration est composé de représentants du gouvernement, des agriculteurs locaux, des chambres d'agriculture et d'autres partenaires locaux.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-5">
                      <img src="images/teamwork.png" alt="">
                  </div>
              </div>
          </div>
      </section>

  <!-- Services -->

  <section id="services" class="text-center">
    <div class="col-12 section-intro" >
      <h1>Nos Services</h1>
      <div class="hline"></div>
    </div>
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-3 col-md-6">
          <div class="service">
            <img src="images/content.png" alt="">
            <h5>la Planification et de la Programmation (S.P.P)</h5>
            <p>Ce service est chargé de l'élaboration des stratégies financières, de la participation à la création de contrats et conventions, de l'établissement des programmes et budgets de réalisation, de l'exécution de ceux-ci, et enfin, de la tenue de la comptabilité de l'office.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="service">
            <img src="images/budget.png" alt="">
            <h5>Administratif et Financier (S.A.F)</h5>
            <p>Il est chargé des taches administratives de gestion du personnel et du patrimoine immobilier de l’office. Il traite les affaires à caractère juridique ou contentieux.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="service">
            <img src="images/digital-services.png" alt="">
            <h5>Service du Matériel (S.M)</h5>
            <p>Ce service joue le rôle d’intermédiaire entre tous les services de l’O.R.M.V.A.M en matière d’approvisionnement des services en matériel et fournitures de bureau,il s’occupe en outre ,de l’entretien des bâtiments et du matériel en liaison avec les autres services.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="service">
            <img src="images/livestock.png" alt="">
            <h5>Service de l’Elevage (S.E)</h5>
            <p>Ce service est chargé de l’encadrement des ressources animales au niveau de la zone d’action de l’office afin d’améliorer la productivité des produits d’élevage en assurant leur commercialisation dans les meilleurs conditions.</p>
          </div>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-lg-3 col-md-6">
          <div class="service">
            <img src="images/planting.png" alt="">
            <h5>l’Equipement Rural (S.E.R)</h5>
            <p>Il est chargé de réaliser les travaux d’équipement Hydro-Agricole, d’aménager les zones et canaux pour l’amélioration des propriétés foncièresrurales, le suivi de l’entretien et la construction des bâtiments.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="service">
            <img src="images/multitask.png" alt="">
            <h5>la Vulgarisation et de l’Organisation Professionnelle (S.V.O.P)</h5>
            <p>Ce service assure l'encadrement des agriculteurs en les assistant dans la mise en œuvre de techniques culturelles et en organisant leur professionnalisation. Il a également pour mission la vulgarisation de ces techniques.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="service">
            <img src="images/irrigation.png" alt="">
            <h5>la Gestion des Réseaux d’Irrigation et de Drainage (S.G.R.I.D)</h5>
            <p>Son objectif est d’assurer la distribution de l’eau dans les meilleures conditions techniques et économiques. Il veille à la maintenance des réseaux et à leur utilisation optimale, du pompage de l’exploitation de la nappe et gère les problèmes liés au droit de l’eau.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="service">
            <img src="images/smart-factory.png" alt="">
            <h5>la Production Agricole (S.P.A)</h5>
            <p>Ce Service suivre les marchés agricoles,faciliter la commercialisation des produits végétaux et animaux, d'assurer l'occupation des sols et de mettre en place des projets de mise en valeur. Il procède également à des essais de cultures rentables et peu exigeantes en eau d'irrigation.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Nos projets  -->

  <section class="projects-section" id="projet">
    
    <div class="col-12 section-intro">
      <h1>Nos projets</h1>
      <div class="hline"></div>
    </div>  
    <ul class="projects-list">
        <li class="project-item">
          <img src="images/11.jpg" alt="Projet 1">
          <h5>Aménagement hydraulique</h5>
          <p class="project-description">Nous avons récemment lancé un projet d'aménagement hydraulique visant à améliorer l'irrigation des terres agricoles dans la région de la Melouya.</p>
        </li>
        <li class="project-item">
          <img src="images/22.jpg" alt="Projet 2">
          <h5>Promotion de l'agriculture biologique</h5>
          <p class="project-description">Nous encourageons les agriculteurs de la région à adopter des pratiques agricoles biologiques pour réduire l'utilisation de produits chimiques et préserver la santé des sols et de l'environnement.</p>
        </li>
        <li class="project-item">
          <img src="images/33.jpg" alt="Projet 3">
          <h5>Formation et accompagnement des agriculteurs</h5>
          <p class="project-description">Nous proposons des formations et un accompagnement personnalisé aux agriculteurs pour les aider à améliorer leurs pratiques agricoles et à optimiser leur rendement.</p>
        </li>
    </ul>
  </section>

  {{-- Actualités --}}

    
  <section class="news-section" id="Actualités">
    <div class="col-12 section-intro">
      <h1>Actualités</h1>
      <div class="hline"></div>
    </div>  
    <div class="container">
      <div class="news-grid">
        <div class="card" style="width: 31%;">
          <img class="card-img-top" src="images/vv.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title" style="color: #009624">Nouvelle campagne agricole</h5>
            <p class="card-text">Le lancement de la nouvelle campagne agricole a été annoncé par l'ORMVAM, avec des prévisions prometteuses pour la région de Melouya.</p>
            <a href="" class="btn btn-primary">Lire la suite</a>
          </div>
        </div>

        <div class="card" style="width: 31%;">
          <img class="card-img-top" src="images/formation.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title" style="color: #009624">Formation sur les pratiques agricoles</h5>
            <p class="card-text">L'ORMVAM a organisé une formation sur les pratiques agricoles durables pour les agriculteurs de la région, avec des experts du domaine.</p>
            <a href="" class="btn btn-primary">Lire la suite</a>
          </div>
        </div>

        <div class="card" style="width: 31%;">
          <img class="card-img-top" src="images/recherche_eau.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title" style="color: #009624">Lancement d'un nouveau projet de recherche</h5>
            <p class="card-text" style="font-size: 17px;">L'ORMVAM a lancé un nouveau projet de recherche sur l'amélioration de la gestion des ressources en eau dans la région de Melouya.</p>
            <a href="" class="btn btn-primary">Lire la suite</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Contact --}}
  <section  id="Contact">
    <div class="col-12 section-intro" id="Actualités">
      <h1>Contatc Us</h1>
      <div class="hline"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="contact_inner">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="contact_form_inner">
                                <div class="contact_field">
                                    <p>Feel Free to contact us any time. We will get back to you as soon as we can!.</p>
                                    <input type="text" class="form-control form-group" placeholder="Name" />
                                    <input type="text" class="form-control form-group" placeholder="Email" />
                                    <textarea class="form-control form-group" placeholder="Message"></textarea>
                                    <button class="contact_form_submit">Send</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="right_conatct_social_icon d-flex align-items-end">
                              <div class="socil_item_inner d-flex">
                                  <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact_info_sec">
                        <h4>Contact Info</h4>
                        <div class="d-flex info_single align-items-center" style="color: #fff">
                            <i class="fas fa-headset"></i>
                            <span>N° Téléphone : +212536612828</span>
                        </div>
                        <div class="d-flex info_single align-items-center" style="color: #fff">
                            <i class="fas fa-envelope-open-text"></i>
                            <span>E-mail : ormvam@gmail.com</span>
                        </div>
                        <div class="d-flex info_single align-items-center" style="color: #fff">
                            <i class="fas fa-map-marked-alt"></i>
                            <span>Adresse : WMHF+G65, Berkane</span>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  {{-- Map --}}
  <section>

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="map_inner">
                    <h4>TROUVEZ-NOUS SUR GOOGLE MAP</h4>
                    <div class="map_bind">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13084.44057525353!2d-2.3269!3d34.9287745!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd78249e00d0140d%3A0xa0c2ce90fdf6a4cd!2sORMVA%20Berkane!5e0!3m2!1sfr!2sma!4v1683136125111!5m2!1sfr!2sma" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                </div>
            </div>
        </div>
    </div>
  </section>
</main>
  <footer>
          <div class="footer-widget">
              <h3>Footer Widget Title</h3>
              <ul>
                  <li><a href="#">Link</a></li>
                  <li><a href="#">Link</a></li>
                  <li><a href="#">Link</a></li>
              </ul>
          </div>
          <div class="footer-widget">
              <h3>Social Media</h3>
              <ul class="social-icons">
                  <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-youtube"></i></a></li>
              </ul>
          </div>
  </footer>
</body>
</html>