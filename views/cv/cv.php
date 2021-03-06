<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <base href="<?= BASE ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/css/cv.css">
    <link rel="stylesheet" href="assets/css/cv.css">
    <link rel="stylesheet" href="asset//css/bootstrap.min.css">
    <title>Mouhamed Amine</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <button type="button" class="navbar-toggler mb-2" data-toggle="collapse" data-target="#mynav" aria-controls="mynav" aria-expand="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon btn-nav"> <img src="asset/img/menu.png" alt=""> </span>
        </button>
        <div class="collapse navbar-collapse" id="mynav">
            <ul class="navbar-nav m-auto">
                <h3><a href="accueil" style="color: #fff; margin-right: 10px" >Lybra</a></h3>
                <li class="nav-item"><a class="active nav-link" href="#moi">Moi</a></li>
                <li class="nav-item"><a class="nav-link" href="#competences">Compétences</a></li>
                <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link" href="#portefolio">Portefolio</a></li>
                <li class="nav-item"><a class="nav-link" href="#recomendation">Recomendation</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>            
        </div>       
    </nav>

    <div data-spy="scroll" data-target="mynav" data-offset="0">
       <div id="moi" class="container-fluid cv-header">
          <div class="img">
              <img src="asset/img/profil.jpg" alt="">
              <hr class="imgdis">
              <em>Hello ! moi c'est </em>
              <h4>Mouhamed Amine</h4>
              <span>Je suis </span><em>Développeur web junior</em>
         </div>
        </div>
        <div class="container">
            <div class="pres col-lg-7 col-md-8">
                <p>Passionné par le développement web dépuis plus de 3ans, tout a commencé avec une seule ligne de code quand mon prof d'informatique m'a donné un exercice sur les formulaires. C'est à ce instant que j'ai découvert ma passion pour le développement web et tout ce qui touche à l'informatique.</p>
            </div>
            <div id="competences" class="col-lg-7 col-md-8">
                <hr class="hr-sep-r">
                <h3 class="text-center red-t sec-t">COMPÉTENCES</h3>
                <div class="sec-comp row">
                    <div class="sec-comp-item col-lg-6 col-md-6">
                        <div class="progress" style="height: 30px">
                            <div class="progress-bar" style="width: 85%;background-color: #c2185b;">HTML 85%</div>
                        </div>
                    </div>
                    <div class="sec-comp-item col-lg-6 col-md-6">
                        <div class="progress" style="height: 30px">
                            <div class="progress-bar" style="width: 80%;background-color: #c2185b;">CSS 80%</div>
                        </div>
                    </div>
                    <div class="sec-comp-item col-lg-6 col-md-6">
                        <div class="progress" style="height: 30px">
                            <div class="progress-bar" role="progressbar" style="width: 50%;background-color: #c2185b;">Bootstrap 50%</div>
                        </div>
                    </div>
                    <div class="sec-comp-item col-lg-6 col-md-6">
                        <div class="progress" style="height: 30px">
                            <div class="progress-bar" role="progressbar" style="width: 50%;background-color: #c2185b;">PHP 50%</div>
                        </div>
                    </div>
                    <div class="sec-comp-item col-lg-6 col-md-6">
                        <div class="progress" style="height: 30px">
                            <div class="progress-bar" role="progressbar" style="width: 40%;background-color: #c2185b;">PHPOO 40%</div>
                        </div>
                    </div>
                    <div class="sec-comp-item col-lg-6 col-md-6">
                        <div class="progress" style="height: 30px">
                            <div class="progress-bar" role="progressbar" style="width: 50%;background-color: #c2185b;">MYSQL 50%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="experience" class=" pt-5 mt-5 mb-5">
             <hr class="hr-sep-w">
              <h3 class="text-center sec-t text-white">EXPÉRIENCES PROFESSIONELLE</h3>
              <div class="container pb-5">
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12 p-3">
                          <div class="card p-3">
                              <h4 class="text-center">LYBRA</h4>
                              <h5 class="red-t">Développeur web junior</h5>
                              <span class="text-muted">©2019</span>
                              <p>Sous la demande de mon professeur d'informatique nous avons immaginés ensemble Lybra qui est le site internet du lycée de Boubara et j'ai realisé </p>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 p-3">
                          <div class="card p-3">
                              <h4 class="text-center">GSCHOOL</h4>
                              <h5 class="red-t">Développeur web junior</h5>
                              <span class="text-muted">©2018-2019</span>
                              <p>Création et realisation du site internet du lycée de Garoua-Boulaui</p>
                          </div>
                      </div>
                  </div>
              </div>
        </div>
        <div id="education">
            <div class="container col-lg-6 col-md-6">
              <hr class="hr-sep-r">
                <h3 class="red-t text-center mb-5 text-center">EDUCATION</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="p-3 card mb-4">
                            <span class="text-muted text-center mb-2">2020-2021</span>
                            <div class="univer">
                              <img src="asset/img/university.svg" alt="">
                            </div>
                            <h5 class="red-t mt-2 text-center">INSTITUT UNIVERSITAIRE SIANTOU</h4>
                            <p class="text-center">Licence en genie Logiciel et Base de donnees</p>
                            <hr class="hr-educ m-auto">
                            <p class="text-center mt-2">Base de donnees, Programmation, Infographie</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="p-3 card mb-4">
                            <span class="text-muted text-center mb-2">2017-Aujord'hui</span>
                            <div class="univer">
                              <img src="asset/img/university.svg" alt="">
                            </div>
                            <h5 class="red-t text-center mt-2">Openclassrooms</h4>
                            <p class="text-center">Formation online "Développeur Full Stack"</p>
                            <hr class="hr-educ m-auto">
                            <p class="text-center mt-2">HTML, CSS, PHP, JavaScript, Bootstrap, Laravel, React Native, Angular</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="portefolio">
            <div class="container col-md-6 pt-5 mt-5 pb-5">
                <hr class="hr-sep-w">
                <h3 class="text-center sec-t">PORTEFOLIO</h3>
                <div class="row pr-sec">
                    <div class="sec-exp-p col-lg-6 col-md-6 pb-3">
                        <img src="asset/img/pr2.png" alt="">
                    </div>
                    <div class="sec-exp-p col-lg-6 col-md-6 pb-3">
                        <img src="asset/img/pr3.png" alt="">
                    </div>
                    <div class="sec-exp-p col-lg-6 col-md-6 pb-3">
                        <img src="asset/img/pr4.png" alt="">
                    </div>
                    <div class="sec-exp-p col-lg-6 col-md-6 pb-3">
                        <img src="asset/img/pr1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div id="recomendation">
              <div class="container mt-5 mb-5">
                  <hr class="hr-sep-r">
                  <h3 class="red-t text-center">RECOMANDATION</h3>
              </div>
        </div> 
        <div id="contact">
            <div class="container pt-5 pb-5">
                <hr class="hr-sep-w">
                <h3 class="text-center sec-t">ME CONTACTER</h3>
                <form action="" class="col-lg-8 col-md-8 col-sm-12 mt-5">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Prenom *">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nom *">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Adress email *">
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Message *" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div> 
    </div>
    <footer>
        <div class="copy-r">
            <p class="text-center">Copyright © Mouhamed Amine</p>
        </div>
    </footer>
    <script type="text/javascript" src="asset/js/jquery.min.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="asset/js/cv.js"></script>
</body>
</html>