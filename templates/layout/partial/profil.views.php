
<?php  
include '../templates/layout/header.views.php';
?> 

<div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://th.bing.com/th/id/R.57acfafb50b93380b094b530bf833cfd?rik=f7UNB2Dn0Gdofw&riu=http%3a%2f%2fphoto-portrait.com%2fwp-content%2fuploads%2f2019%2f04%2fAHM_9667_W-1.jpg&ehk=K8mj2wYS%2ftYvBXhFjJbwoCpWW9%2fwDlYwRlWJfeKAyv4%3d&risl=&pid=ImgRaw&r=0" class="card-img-top rounded-circle mx-auto mt-3" alt="Photo de profil">
                    <div class="card-body text-center">
                        <h5 class="card-title">Nom d'utilisateur</h5>
                        <p class="card-text">Statut de l'utilisateur</p>
                        <a href="./modifie.php" class="btn btn-primary">Modifier le profil</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Informations Personnelles</h5>
                        <p class="card-text"><strong>Email :</strong> vanicknjoum@gmail.com</p>
                        <p class="card-text"><strong>Téléphone :</strong> +123 456 7890</p>
                        <p class="card-text"><strong>Adresse :</strong> 123 Rue Exemple, Ville, Pays</p>
                        <h5 class="card-title mt-4">À Propos</h5>
                        <p class="card-text">Ceci est une brève description de l'utilisateur. Vous pouvez ajouter plus d'informations ici.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php  
include '../templates/layout/footer.views.php';
?>