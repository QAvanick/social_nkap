
<?php  
include '../templates/layout/header.views.php';
?>

<div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Groupes et Communautés</h2>
                <button class="btn btn-primary my-3" data-toggle="modal" data-target="#createGroupModal">Créer un Nouveau Groupe</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Groupe 1</h5>
                        <p class="card-text">Description du groupe 1...</p>
                        <a href="#" class="btn btn-primary">Rejoindre</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Groupe 2</h5>
                        <p class="card-text">Description du groupe 2...</p>
                        <a href="#" class="btn btn-primary">Rejoindre</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Groupe 3</h5>
                        <p class="card-text">Description du groupe 3...</p>
                        <a href="#" class="btn btn-primary">Rejoindre</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal pour créer un nouveau groupe -->
    <div class="modal fade" id="createGroupModal" tabindex="-1" aria-labelledby="createGroupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createGroupModalLabel">Créer un Nouveau Groupe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="groupName">Nom du Groupe</label>
                            <input type="text" class="form-control" id="groupName" placeholder="Entrez le nom du groupe">
                        </div>
                        <div class="form-group">
                            <label for="groupDescription">Description</label>
                            <textarea class="form-control" id="groupDescription" rows="3" placeholder="Entrez la description du groupe"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Créer le Groupe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php  
include '../templates/layout/footer.views.php';
?>