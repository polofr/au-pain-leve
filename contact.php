<?php include("includes/header.shtml"); ?>

<?php include("includes/navigation.shtml"); ?>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                    <h2 class="intro-text text-center">Nous Contacter</h2>
                <hr>          
                <p>
                Professionel ou particulier, vous recherchez des prestations régulières d'une boulangerie pâtisserie artisanale
                , nous mettons notre savoir-faire à votre service : nous livrons quotidiennement dans la metropole lilloise, avec une équipe et des installations en conséquence. 
                </p>
                <p>Mariages, conférences, occasions particulières, vous voulez agrémenter vos évènements: nous sommes là pour vos petit-déjeuners, brunchs, buffets et autres cocktails. 
                </p>
                <form role="form">
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label>Nom</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Télephone</label>
                            <input type="tel" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-lg-12">
                            <label>Message</label>
                            <textarea class="form-control" rows="6"></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="hidden" name="save" value="contact">
                            <button type="submit" class="btn btn-default">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
<?php include("includes/footer.shtml"); ?>