
<?php  
include '../templates/layout/header.views.php';
?> 



<div class="container mt-5 w-50 mb-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h4>Modifier le Profil</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="username">Nom d'utilisateur</label>
                                <input type="text" class="form-control" id="username" placeholder="Entrez votre nom d'utilisateur">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Entrez votre email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Téléphone</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Entrez votre numéro de téléphone">
                            </div>
                            <div class="form-group">
                                <label for="address">Adresse</label>
                                <input type="text" class="form-control" id="address" placeholder="Entrez votre adresse">
                            </div>
                            <div class="form-group">
                                <label for="about">À Propos</label>
                                <textarea class="form-control" id="about" rows="3" placeholder="Parlez-nous de vous"></textarea>
                            </div>
                            <button type="submit" class="btn btn-info mt-4 ">Enregistrer les modifications</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php  
include '../templates/layout/footer.views.php';
?>