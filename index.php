<?php include("includes/header.shtml"); ?>

<?php include("includes/navigation.shtml"); ?>

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">About
                    <strong>business casual</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-6">
                <img class="img-responsive img-border-left" src="img/slide-2.jpg" alt="">
            </div>
            <div class="col-md-6">
                <p>This is a great place to introduce your company or project and describe what you do.</p>
                <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
			
			
			<div class="col-md-6">
                
<?php
$link = mysqli_connect("localhost", "root", "", "artdupain");

if (mysqli_connect_errno()) {
    printf("Échec de la connexion : %s\n", mysqli_connect_error());
    exit();
}
			
// it begins with 0, the database begins with 1 (+1)
// we want to get tomorrow (+1)			
$day_number = date("z") + 2;

// if it is not bissectile and we are already in March (+1)		
if( $day_number > 59 && date("L") == 0 ){
	
	$day_number = $day_number + 1;
}

// if too big, tomorrow is 1st January
if( $day_number > 366 ){
	
	$day_number = 1;
}

$query = sprintf("SELECT first_name FROM prenoms WHERE id='%d'", $day_number );

if ($result = mysqli_query($link, $query) ) {
	
	if( mysqli_num_rows($result) != 1 ) {
    
		printf("Select a retourné %d lignes.\n", mysqli_num_rows($result));
		exit();
	}    

    while ($row = $result->fetch_row()) {
		echo "<p>Aujourd'hui c'est le ". date("d M Y") . ". Demain c'est la fête des ". $row[0] ."</p>";
    }
    
    mysqli_free_result($result);
}

mysqli_close($link);

?>				
			</div>
			<div class="clearfix"></div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>Nos spécialités pâtisseries</strong>
                </h2>
                <hr>
                <p class="text-center">
                    Notre équipe de pâtissiers est à la baguette pour vous offrir ces classiques de notre région!
                </p>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src="./img/tarte_au_sucre_vergeoise_6_personnes.jpg" alt="">
                <h3>La tarte au sucre                     
                </h3>
                <p>Typique du nord de la France, nos amis Québecois remplacent la vergeoise par du sirop d'érable. 
                </p>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src="./img/merveilleux_chocolat_noir_individuel.jpg" alt="">
                <h3>Le merveilleux
                </h3>
                <p>Ce petit gateau mi-belge mi-nordiste prend diverses appellations selon les regions: tête de nègre, boule choco voire même arlequin! 
                </p>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src="./img/merveilleux_chocolat_noir_individuel.jpg" alt="">
                <h3>Le moelleux au chocolat
                </h3>
                <p>Du bon chocolat mais surtout un temps de cuisson parfait, c'est là que réside son secret.
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    
    <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active lateral-padding">
                            <p>Le moulin à eau est apparu apparu au VIème siècle à l'époque Carolingienne dans les régions
                                montagneuses du Proche-Orient. Les ingénieurs romains imaginent alors d'utiliser la force de
                                l'eau des rivières en y plongeant des grosses roues qui entraînent les meules
                            </p>
                            <!--  <img class="img-responsive img-full" src="img/slide-1.jpg" alt=""> -->
                        </div>
                        <div class="item lateral-padding">
                            <p>Le moulin à eau est apparu apparu au VIème siècle à l'époque Carolingienne dans les régions
                                l'eau des rivières en y plongeant des grosses roues qui entraînent les meules
                            </p>
                            <!--   <img class="img-responsive img-full" src="img/slide-2.jpg" alt=""> -->
                        </div>
                        <div class="item lateral-padding">
                            <p>Le moulin à eau est apparu apparu au VIème siècle à l'époque Carolingienne dan
                            </p>
                            <!--  <img class="img-responsive img-full" src="img/slide-3.jpg" alt=""> -->
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control no-background-image" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control no-background-image" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>                    
            </div>
        </div>
    </div>    
    
</div>

<?php include("includes/footer.shtml"); ?>
