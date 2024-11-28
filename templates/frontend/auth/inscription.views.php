
<?php  
include '../templates/layout/header.views.php';
?> 


<div class="container-md mt-5 w-50 h-60 shadow p-3 mb-5 bg-body-tertiary rounded "style="max-width: 400px";>
        <h2 class="text-center">Inscription</h2>
        <form>
            <div class="mb-3">
                <label for="firstName" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="firstName" placeholder="Entrez votre prénom">
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Nom</label>
                <input type="text" class="form-control" id="lastName" placeholder="Entrez votre nom">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Entrez votre email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
            </div>
            <div class="text-center">
  <button type="submit" class="btn btn-outline-secondary">S'inscrire</button>
</div>

        </form>
    </div>

    <?php  
include '../templates/layout/footer.views.php';
?>