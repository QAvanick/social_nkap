
<?php  
include '../templates/layout/header.views.php';
?>

<div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                        Utilisateur 1
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Utilisateur 2</a>
                    <a href="#" class="list-group-item list-group-item-action">Utilisateur 3</a>
                    <a href="#" class="list-group-item list-group-item-action">Utilisateur 4</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Conversation avec Utilisateur 1
                    </div>
                    <div class="card-body">
                        <div class="message">
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="https://media.istockphoto.com/id/2075394474/photo/photo-of-a-woman-have-a-phone-call-with-friend-while-standing-in-livingroom.jpg?s=1024x1024&w=is&k=20&c=U8iGcaQIfZnEtn-g2VdFGi2CP4MAlWVzc46cQ21buYc=" class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                    Bonjour, comment ça va ?
                                    <span class="msg_time">8:40 AM, Aujourd'hui</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Ça va bien, merci ! Et toi ?
                                    <span class="msg_time_send">8:55 AM, Aujourd'hui</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="https://cdn.pixabay.com/photo/2021/09/08/18/33/phone-call-6607616_1280.png" class="rounded-circle user_img_msg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Écrire un message...">
                            <div class="input-group-append">
                                <button class="btn btn-primary ms-3" type="button">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php  
include '../templates/layout/footer.views.php';
?>