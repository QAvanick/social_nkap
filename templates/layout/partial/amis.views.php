

<?php  
include '../templates/layout/header.views.php';
?>

<div class="container mt-5">
        <h1>Mes Amis</h1>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="invitation-tab" data-bs-toggle="tab" data-bs-target="#invitation" type="button" role="tab" aria-controls="invitation" aria-selected="true">Invitation</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="suggestion-tab" data-bs-toggle="tab" data-bs-target="#suggestion" type="button" role="tab" aria-controls="suggestion" aria-selected="false">Suggestion</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="toutes-tab" data-bs-toggle="tab" data-bs-target="#toutes" type="button" role="tab" aria-controls="toutes" aria-selected="false">Toutes les amies</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="invitation" role="tabpanel" aria-labelledby="invitation-tab">
                <h2>Invitations</h2>
                <p>Liste des invitations en attente...</p>
            </div>
            <div class="tab-pane fade" id="suggestion" role="tabpanel" aria-labelledby="suggestion-tab">
                <h2>Suggestions</h2>
                <p>Liste des suggestions d'amis...</p>
            </div>
            <div class="tab-pane fade" id="toutes" role="tabpanel" aria-labelledby="toutes-tab">
                <h2>Toutes les amies</h2>
                <p>Liste de tous vos amis...</p>
            </div>
        </div>
    </div>

    <?php  
include '../templates/layout/footer.views.php';
?>