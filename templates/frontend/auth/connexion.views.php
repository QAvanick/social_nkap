<?php  
include '../templates/layout/header.views.php';
?> 

<div class="container mt-5 w-50 h-60 shadow p-3 mb-5 bg-body-tertiary rounded" style="max-width: 400px"; >
<h2 class="text-center">Connexion</h2>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control " id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
<label for="inputPassword5" class="form-label">Password</label>
<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="password">
<div id="passwordHelpBlock" class="form-text">
Votre mot de passe doit comporter de 8 à 20 caractères, des lettres et des chiffres, et ne doit pas contenir d'espaces, de caractères spéciaux ou d'emoji.
</div>
</div>

<div class=" mb-3 d-flex justify-content-center align-items-center">
<a class="btn btn-outline-secondary" href="#">Connexion</a>
</div>
<div class="mt-4"><a href="#">mot de passe oublié ?</a></div>
</div>


<?php  
include '../templates/layout/footer.views.php';
?>

 