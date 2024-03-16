<?php include_once("header.php"); ?>

<div class="container-fluid py-4">
  <div class="row min-vh-80 h-100">
    <div class="col-12">
      <div class="row">
        <div class="col-lg-7 position-relative z-index-2">
          <div class="card card-plain mb-4">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex flex-column h-100">
                    <h2 class="font-weight-bolder mb-0">General Statistics</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-5 col-sm-5">
              <div class="card  mb-2">
                <div class="card">
                  <img src="chemin/vers/image-animal.jpg" class="card-img-top" alt="Image de l'animal">
                  <div class="card-body">
                    <h5 class="card-title">Nom de l'animal</h5>
                    <p class="card-text">Race : Race de l'animal</p>
                    <p class="card-text">Âge : Âge de l'animal</p>
                    <a href="lien-vers-page-adoption.php" class="btn btn-primary">En savoir plus</a>
                  </div>
                </div>

              </div>

              <div class="card  mb-2">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Titre de l'article</h5>
                    <p class="card-text">Description brève de l'article</p>
                    <p class="card-text">Date de publication : 01 janvier 2024</p>
                    <a href="lien-vers-article-complet.php" class="btn btn-primary">Lire l'article</a>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-lg-5 col-sm-5 mt-sm-0 mt-4">
              <div class="card  mb-2">
                <div class="card">
                  <img src="chemin/vers/photo-utilisateur.jpg" class="card-img-top" alt="Photo de l'utilisateur">
                  <div class="card-body">
                    <h5 class="card-title">Nom de l'utilisateur</h5>
                    <p class="card-text">Brève biographie de l'utilisateur</p>
                    <a href="lien-vers-profil-utilisateur.php" class="btn btn-primary">Voir le profil</a>
                  </div>
                </div>

              </div>

              <div class="card ">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Titre de l'événement</h5>
                    <p class="card-text">Date : 01 janvier 2024</p>
                    <p class="card-text">Lieu : Lieu de l'événement</p>
                    <p class="card-text">Description brève de l'événement</p>
                    <a href="lien-vers-page-evenement.php" class="btn btn-primary">En savoir plus</a>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-10">
              <div class="card mb-4 ">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Statistiques du site</h5>
                    <p class="card-text">Nombre d'adoptions : 100</p>
                    <p class="card-text">Nombre d'articles : 50</p>
                    <p class="card-text">Nombre de bénévoles inscrits : 200</p>
                    <a href="lien-vers-page-statistiques.php" class="btn btn-primary">Voir plus de statistiques</a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once("footer.php"); ?>