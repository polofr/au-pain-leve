<?php include("includes/header_begin.shtml"); ?>
    <meta name="description" content="boulangerie pâtisserie pour professionels, Lille">
    <meta name="keywords" content="boulangerie, pâtisserie, artisanale, livraison pour entreprises, professionels, circuit court, Lille">
    <title>Boulangerie pâtisserie artisanale et livraison pour professionels à Lille</title>
<?php include("includes/header_end.shtml"); ?>

<?php include("includes/navigation.shtml"); ?>

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>Notre métier</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-6 text-justify">
                <p>Si vous passez par la rue de Roubaix, à Lille, par l'odeur alléchée, vous serez tentés de vous arrêter dans la Boulangerie pâtisserie l'Art du Pain. Elle a fait sa réputation sur ses tartes au sucre, si bien qu'aujourd'hui, les quatre patissiers en fabriquent 1000 par semaine, et les revendent en BtoB en plus de l'activité boutique qui attire chaque jour 200 gourmands!
                </p>
                <p>En BtoB, l'Art du Pain joue la carte du circuit court : nous fournissons les enseignes de la région qui recherchent des produits frais et locaux. C'est la marque de fabrique de l'Art du Pain : nos pâtisseries sont produites sur place, nos recettes sont régionales.
                </p>
                <p>Si c'est ce que vous recherchez, venez donc goûter nos produits!</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive img-border-left img-rounded" src="img/equipe_au_complet_scaled.jpg" alt="L'équipe de l'Art du Pain au complet">
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>L'atelier</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-4">
                <img class="img-responsive img-border-left img-rounded" src="img/devant_la_machine_a_petrir_scaled.jpg" alt="Le pâtissier devant la machine à pétrir.">
            </div>
            <div class="col-md-4 text-justify">
                <p>Notre équipe, ce sont avant tout des passionnés. Leur plus grand plaisir, vous surprendre avec une de leurs nouvelles créations.</p>
                <p>Le secret de l'Art du Pain, un esprit d'équipe, une grande dose de bonne humeur et une envie de partager avec vous notre métier!</p>
                <p>Résultat : nous sommes réactifs à vos demandes et notre ambition est de satisfaire vos attentes au plus vite. Tous les jours, nous sommes fiers de vous régaler!</p>
                <p> D'ailleurs, pour accompagner nos clients, nous projettons très bientôt de lancer notre gamme de pâtisseries à partir d'ingrédients issus de l'agriculture biologique.</p>
            </div>
            <div class="col-md-4">
                <img class="img-responsive img-border-right img-rounded" src="img/fabrication_tarte_citron_meringue_scaled.jpg" alt="La fabrication de la tarte citron meringuée.">
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    
    <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">
                <hr>
                    <h2 class="intro-text text-center">
                        <strong>Le saviez-vous ?</strong>
                    </h2>
                <hr>
                <div id="carousel-pain" class="carousel slide" data-interval="10000">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php $timestamp = time() % 58; ?>
                        <div class="item <?php echo $timestamp == 0 ? 'active' : '' ?> lateral-padding">
                            <p>
                        La tarte Tatin serait originaire de Lamotte-­Beuvron, en Sologne. Les sœurs Stéphanie et Caroline y tenaient un restaurant, qui existe toujours sous le nom d'Hôtel Tatin, face à la gare. Un dimanche d'ouverture de la chasse, alors qu'elle préparait une tarte aux pommes, Stéphanie, étourdie, oublia dans le feu de l'action de mettre une pâte dans le moule et l'enfourna simplement avec des pommes. S'apercevant de son oubli, elle décida de rajouter simplement la pâte par-dessus les pommes! Les chasseurs ont apprécié, la tarte Tatin était née.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 1 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Débarqué en Provence au début des années 1950, Alexandre Micka, pâtissier d'origine polonaise, décida d'ouvrir une boulangerie pâtisserie à Saint-Tropez. Il apporta de Pologne la recette d'un gâteau brioché à la crème de sa grand-mère. En 1955, le film de Roger Vadim, « Et Dieu... créa la femme » est tourné à Saint-Tropez. Chargé de réaliser les repas pour toute l'équipe, Alexandre présente sa tarte. Brigitte Bardot lui suggère de la nommer « tarte de Saint-Tropez ». Le pâtissier, lui, opte pour « tarte tropézienne ».
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 2 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Saint­Honoré est le patron de la boulangerie, il a donné son nom à la pâtisserie du même nom faite d'un fond de pâte garni de choux.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 3 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Le canelé est lié à l'histoire de Bordeaux et du vin. En effet, dans la vinification, le collage consiste à filtrer le vin en cuve avec traditionnellement du blanc d'œuf. Ce procédé coûteux, encore utilisé par certains châteaux, voyait tout le personnel des châteaux casser des œufs et séparer les blancs des jaunes qui étaient donnés aux Petites sœurs des pauvres lesquelles auraient confectionné le gâteau.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 4 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Pour chaque situation, il existe un proverbe, ou une expression, qui fait allusion au pain : "Désirable comme un pain frais". "Bon comme du bon pain". "Être à l'eau et au pain sec". "Pas de pain sans sueur". Une source de revenu est considérée comme un "gagne-pain". "Avoir du pain sur la planche". "Long comme un jour sans pain". Les ennuis sont le "pain quotidien". Un produit qui se vend bien "part comme des petits pains".
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 5 ? 'active' : '' ?> lateral-padding">
                            <p>
                        La madeleine de Commercy porterait le prénom d'une jeune cuisinière de Commercy, Madeleine Paulmier. En 1755, elle aurait fabriqué ces gâteaux pour le duc Stanislas Leszczyński. Ce dernier organisa une réception dans son château mais n'avait pas de gâteaux pour ses invités car l'intendant et le cuisinier s'étaient disputés et ce dernier avait emporté les gâteaux avec lui. C'est alors que Madeleine Paulmier décida de proposer la recette d'un gâteau qu'elle tenait de sa grand-mère. Les invités apprécièrent beaucoup ces gâteaux et soulagé, le duc Stanislas fit venir celle qui avait accompli cette "merveille" et donna le nom au petit gâteau moulé dans une coquille Saint-Jacques le nom de la jeune héroïne, Madeleine.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 6 ? 'active' : '' ?> lateral-padding">
                            <p>
                        La plus ancienne forme de pain daterait de 3000 avant JC, il s'agissait alors d'une bouillie de céréales.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 7 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Pendant très longtemps, les différentes étapes de la vie privée étaient célébrées par des pains qui devaient marquer l'importance de l'étape franchie.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 8 ? 'active' : '' ?> lateral-padding">
                            <p>
                        A chaque contrée, sa farine! Traditionnellement, on utilisait du millet en Chine, de l'orge chez les Indo-Européens, de l'avoine chez les Anciens Germains, et du seigle en Europe Centrale. Trop accoutumés aujourd'hui au pain blanc, nous avons tendance à ne plus associer le pain qu'au blé ou au seigle. 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 9 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Ce n'est que 1300 ans avant notre ère que le pain fut introduit dans les villes d'Europe Centrale et Occidentale, alors que les paysans notamment dans les pays nordiques, restèrent beaucoup plus longtemps fidèles à la bouillie. 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 10 ? 'active' : '' ?> lateral-padding">
                            <p>
                        L'origine des premiers pains au levain reste floue. Certains l'attribuent aux Egyptiens dont des peintures tombales révèlent un savoir-faire non négligeable dans la panification dès 2500 ans avant notre ère.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 11 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Le plus vieux pain entièrement conservé d'Europe, et vraisemblablement du monde, a été découvert en 1983, lors de fouilles minutieuses près de Twann en Suisse. Ce pain, fait à partir de farine bise et de levain, fut, d'un point de vue technique, parfaitement cuit dans un four. Il daterait de 5500 ans. Si cette découverte s'avère scientifiquement exacte, cela signifie que des peuples ont mangé du pain à l'époque Néolithique, 1000 ans avant les Sumériens et les Egyptiens, à propos desquels il existe des preuves écrites certaines. Quoi qu'il en soit, la fabrication du pain au levain s'est répandue dans le monde entier. Cet art nous fut transmis au cours de l'occupation de la Gaule par Jules César et ses légions, 50 ans avant notre ère.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 12 ? 'active' : '' ?> lateral-padding">
                            <p>
                        L'usage de levures fut tout d'abord associé au levain. Ainsi, les Grecs ne préparaient pas seulement le levain avec des restes de la pâte de la veille. Ils perfectionnaient des levures préparées au moment de la vendange avec un mélange de houblons et de moût de raisins. Certaines levures étaient gardées au frais pendant plusieurs mois dans de petites amphores.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 13 ? 'active' : '' ?> lateral-padding">
                            <p>
                        En France, c'est en 1665 que la levure fait son apparition. En 1600, Marie de Médicis devient reine de France par son mariage avec Henri IV, et les boulangers italiens qu'elle a fait venir lancent la mode du pain à la reine, un pain de luxe en fine fleur de farine, qui devient pain mollet en 1665 lorsqu'un boulanger le prépare à la levure de bière. Ce pain très léger connaît tout de suite un succès foudroyant, qui provoque une grande controverse sur les dangers de cette nouvelle préparation. Louis XIV fait convoquer 75 professeurs de la Faculté sur l'éventuelle nocivité de cette levure. Une nouvelle commission est réunie et finalement, le Parlement dans un arrêt de mars 1670 autorise la levure de bière, à condition qu'elle soit toujours employée fraîche, et en association avec le levain sur pâte.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 14 ? 'active' : '' ?> lateral-padding">
                            <p>
                        A l'origine, la boulangerie était familiale. Chacun payait pour faire moudre son grain puis pour se servir du four communal. 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 15 ? 'active' : '' ?> lateral-padding">
                            <p>
                        La France compte aujourd'hui 35000 boulangeries, soit environ une boulangerie pour environ 1600 habitants.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 16 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Du VIe au VIIIe siècle, les boulangers s'installent progressivement dans les grandes villes, se chargeant de pétrir et préparer le pain pour la communauté. Nos anciens boulangers s'appelaient alors "tamisiers" (du nom de tamis dont ils se servaient pour débarrasser la farine du moulin de ses impuretés), avant de devenir des "panetiers" et des "boulengers" (pains en boule). 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 17 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Autrefois, au temps où l'expression "gagner son pain à la sueur de son front" prenait toute sa signification, toute l'année était vécue dans l'attente anxieuse du jour des moissons, jour béni ou maudit selon l'importance de la récolte, qui allait faire vivre les cultivateurs dans la joie et l'abondance une année durant, ou les replonger dans la misère, la faim, le désespoir et la servitude.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 18 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Après la récolte, le pain mobilisait pour sa préparation les énergies de toute la famille. Le pétrissage était presque toujours un travail de femme car la tâche était pénible. Ce travail demandait une certaine habileté et c'est pourquoi cette aptitude chez une jeune fille à bien faire le pain a permis souvent de conclure des mariages qui, dans d'autres circonstances, n'auraient pas eu lieu. 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 19 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Les pains préparés se présentaient généralement sous la forme de grosses tourtes circulaires pesant entre 5 et 8 kg, à la croûte épaisse noirâtre et tellement dure qu'il fallait au chef un couteau bien aiguisé pour couper les parts de chacun. Lui seul avait ce droit et nul ne se serait avisé de l'enfreindre.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 20 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Le vol de pain était sévèrement réprimé : les condamnés devaient ramer dans les galères à vie, y compris pour les enfants. 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 21 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Le XVIIe siècle fut marqué d'un grand nombre de révoltes paysannes locales liées aux disettes. Plus tard, les premiers troubles du 28 avril 1789 qui déclenchèrent la Révolution française, trouvèrent leur origine dans le manque de pain. Aujourd'hui encore, les pénuries ou les hausses du prix du pain sont sources de révoltes dans des pays comme le Soudan, la Jordanie, la Moldavie.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 22 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Jusqu'au XVIIIe siècle, le pain "blanc" était réservé aux seigneurs, puis aux citadins, les paysans se contentant de pain noir, de seigle, d'orge ou de méteil.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 23 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Pendant très longtemps, chacun n'a eu accès qu'au pain de sa propre condition. Au Moyen-Age les seigneurs mangeaient des viandes découpées en lamelles posées sur des tranches plates de pain bis et à la fin des repas, ces pains imbibés de jus et de graisses étaient distribués aux paysans qui se pressaient à la porte du château. 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 24 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Dès le Moyen Age, à Paris, le boulanger pouvait livrer son pain chez ses clients. Dans les campagnes, il est d'abord passé avec son âne ou sa charrette avant de venir à heure fixe en camionnette. Autrefois le passage de ce boulanger était l'occasion pour les femmes de s'assembler et d'échanger les nouvelles. 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 25 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Aujourd'hui, la boulangerie est un des éléments essentiels de l'aménagement des lieux de vie des Français, originalité de leur civilisation. En campagne la disparition d'un boulanger peut faire disparaître l'âme d'un bourg. Le boulanger donne de la satisfaction, du plaisir et une occasion de relations sociales autant qu'il nous vend du pain. Les municipalités viennent d'ailleurs à subventionner certains boulangers afin qu'ils ne quittent pas le village et que celui-ci continue à vivre. Certains déclareraient même les boulangeries d'utilité publique !
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 26 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Superstitions : le pain ne doit jamais être coupé des deux côtés à la fois, ou ne jamais être laissé à l'envers sur une table, cela porterait malheur!
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 27 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Pour chaque situation, il existe un proverbe, ou une expression, qui fait allusion au pain : "Il faut travailler pour gagner du blé", "Apporter de l'eau à son moulin", "Être dans le pétrin", "Chacun doit mettre la main à la pâte", "Être comme un coq en pâte"... 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 28 ? 'active' : '' ?> lateral-padding">
                            <p>
                        En 1936, la devise du Front Populaire était "le pain, la paix, la liberté"
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 29 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Avec l'abondance, le pain a fini par être dévalorisé : "Se vendre pour une bouchée de pain", acheter quelque chose pour "un morceau de pain". "Ne pas manger de ce pain-là". De quelque chose qui n'a pas d'inconvénient on dit facilement, "ça ne mange pas de pain". 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 30 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Le pain ne contient que 4 ingrédients : de la farine, de l'eau, du levain et du sel.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 31 ? 'active' : '' ?> lateral-padding">
                            <p>
                        La mouture a pour but de séparer l'amande du grain de blé de ses enveloppes pour la transformer en farine. Elle est constituée de deux étapes : la rupture du grain (broyage) et le système de réduction en farine (claquage et convertissage). Plusieurs types de farine sont mélangés par le meunier pour obtenir la qualité de farine souhaitée par le boulanger.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 32 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Le pain boulot ou pain à tartine est typique du Nord-Pas-de-Calais. Ce pain de 4 livres, lourd et long a une forme qui se situe entre le gros bâtard et la miche du début de siècle. Il est fabriqué avec une farine blanche et poussé à l'aide d'un levain. La qualité de ce pain dépend vraiment du travail du boulanger et des matières premières utilisées. Il doit recevoir en principe 4 coups de lame avant l'enfournement.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 33 ? 'active' : '' ?> lateral-padding">
                            <p>
                        La production céréalière est pratiquement partout le fait d'agriculteurs indépendants. Ils sont aujourd'hui 45000 qui cultivent du blé en France. Le blé tendre a toujours représenté une part importante de leurs surfaces cultivées. Au début du siècle, elles étaient de 7 millions d'hectares, contre 3,5 à 4,7 millions d'hectares aujourd'hui. Cette baisse a été compensée par une forte augmentation des rendements. Ceci permet donc de produire 30 millions de tonnes. Les agriculteurs, après la moisson, en prélèvent une partie, estimée à 4 millions de tonnes, pour les prochaines semailles et l'alimentation du bétail.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 34 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Du choix du blé dépend la qualité de la farine et donc du bon pain. Il existe, de nos jours, de nombreuses variétés de blé obtenues par croisement des variétés. 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 35 ? 'active' : '' ?> lateral-padding">
                            <p>
                        La récolte mondiale de blé s'élève à 600 millions de tonnes. En comparaison, la récolte mondiale de l'ensemble des céréales dépasse les 2 milliards de tonnes.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 36 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Le blé est la céréale la plus produite au monde. La Chine et l'Union Européenne sont toujours les deux producteurs principaux de blé dans le monde avec respectivement 109 millions de tonnes et 99 millions de tonnes.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 37 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Pour fabriquer les pains dits aux céréales, l'épeautre, l'avoine, le millet ou le sarrasin peuvent être utilisés. 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 38 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Le moulin à eau est apparu au VIème siècle à l'époque Carolingienne dans les régions montagneuses du Proche-Orient. Les ingénieurs romains imaginent alors d'utiliser la force de l'eau des rivières en y plongeant des grosses roues qui entraînent les meules. Le moulin à vent est utilisé depuis le VIIe Siècle en Orient où l'eau est rare. Il faudra attendre que les Chevaliers nous en rapportent l'idée au retour de croisades. 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 39 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Le meunier est un personnage essentiel de l'histoire du pain. Dans la France du Moyen-Age, il est le maître du moulin, propriété du Roi, du Seigneur ou de l'abbaye. On faisait couramment appel à lui en qualité de guérisseur. II était un peu à l'image du prêtre ou du tavernier, l'agent social, économique, politique de toutes sortes d'échanges. Il a été très longtemps le notable du village.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 40 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Le travail du meunier consistait simplement à écraser le blé sous la meule et à livrer telle quelle la boulange. Le boulanger se chargeait ensuite de tamiser pour séparer la farine et le son. Pour 120 kg de blé, on obtenait environ 40 à 45 kg de farine. A partir du milieu du XIIIe siècle, les meuniers améliorent la qualité de leur travail : ils nettoient le grain avant la mouture et par la suite les meuniers bluteront eux-mêmes leur farine. En 1740, ils obtiennent l'autorisation de remoudre les sons pour en extraire le reste de farine. Ainsi leur productivité atteint 93 kg de farine pour 120 kg de blé.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 41 ? 'active' : '' ?> lateral-padding">
                            <p>
                        La poussière de farine en suspension dans l'air est explosive, car c'est un mélange d'une fine poudre inflammable avec de l'air. Dans les usines du Moyen Âge, les bougies, les lampes, et les autres sources de feu étaient interdites. Certaines explosions dévastatrices se sont produites dans les moulins à farine, comme l'explosion de Washburn "A" Mill, à Minneapolis, en 1878. Cet accident avait fait 18 morts.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 42 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Le processus de fabrication se résume à une succession d'étapes "actives" (pétrissage, mise en forme) entrecoupées de phases « passives" (fermentation, cuisson, ressuage). La première étape, le pétrissage, conditionne en grande partie la qualité du produit fini. Plusieurs modes de pétrissage existent. Ils déterminent chacun, comme le type de fermentation choisi, une méthode de panification spécifique. Les étapes intermédiaires avant la dernière étape, la cuisson, permettent le développement de la pâte et sa mise en forme, allongée ou boulée selon le pain à obtenir. La cuisson quant à elle assure la transformation de la pâte fermentée en pain. Celle-ci est le résultat de toute une série de réactions physiques, chimiques et biologiques. Elles se déroulent simultanément ou non et permettent la formation de la croûte et de la mie. Leurs caractéristiques dépendent non seulement de la méthode de panification mise en œuvre mais aussi du type de four utilisé. 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 43 ? 'active' : '' ?> lateral-padding">
                            <p>
                        La fabrication du pain demande de nos jours en moyenne 4 à 5 heures, alors qu'au début du XXe siècle, elle nécessitait 15 à 16 heures.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 44 ? 'active' : '' ?> lateral-padding">
                            <p>
                        10 milliards de baguettes sont vendues chaque année en France.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 45 ? 'active' : '' ?> lateral-padding">
                            <p>
                        La récolte du blé s'appelle la moisson. Elle a lieu en juillet.
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 46 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Le façonnage est l’étape pendant laquelle le boulanger donne aux pâtons la forme du pain : baguette, ficelle, pain de campagne…
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 47 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Juste avant d'être enfournés, les pâtons sont incisés en surface à l'aide d'une lame pour donner par exemple aux baguettes en épis leur forme caractéristique. Les incisions à la lame doivent être précises, nettes, ni trop profondes ni trop légères, biens orientées et régulières. Elles donneront naissance sur la croûte aux arrêtes du pain cuit, les grignes, caractéristiques du pain français. 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 48 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Il ne suffit pas de préchauffer le four avant d'y introduire les pâtons, il faut également saturer la chambre de cuisson en vapeur d'eau. C'est ce que l'on appelle le coup de buée. En effet, pendant la cuisson, aucun apport supplémentaire de vapeur d'eau n'est effectué. Le pain français est pratiquement toujours cuit dans une telle atmosphère depuis plus d'un siècle. A l'origine, des bouchons de paille bien mouillés étaient introduits dans le four quelques minutes avant l'enfournement. Puis, on y a placé des coupelles remplies d'eau. Actuellement les fours sont tous équipés d'appareils à buée ou de chaudières permettant d'envoyer de l'eau vaporisée dans la chambre de cuisson. 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 50 ? 'active' : '' ?> lateral-padding">
                            <p>
                         Le pain à la bière est typique du Nord-Pas-de-Calais. Sa pâte est préparée avec de la farine de blé, de seigle ou de la purée de pomme de terre. Son façonnage lui donne une forme de tricorne. Il est enduit au pinceau avant la cuisson, d'un mélange de farine de seigle et de bière ce qui lui permet d'avoir une croûte brillante et dorée. On le consomme avec de la choucroute ou du munster.
                            </p>
                        </div>

                        <div class="item <?php echo $timestamp == 51 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Si une personne souffre de troubles colitiques ou de fermentations intestinales, on conseille de consommer du pain rassis, grillé ou des biscottes à la place du pain. 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 52 ? 'active' : '' ?> lateral-padding">
                            <p>
                        L'eau est indispensable pour préparer la pâte. Il faut environ 60g d'eau pour 100g de farine. 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 53 ? 'active' : '' ?> lateral-padding">
                            <p>
                        En cas de constipation, il est préférable de consommer du pain bis sans aller jusqu'au pain complet dont la grande richesse en cellulose n'est pas toujours un avantage sur le plan nutritionnel. 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 54 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Le pain est un subtil mélange de quatre saveurs : sucré, salé, acide et amer. 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 55 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Contrairement à ce que beaucoup de personnes ont pu croire ou croient encore, le pain ne fait pas grossir. En effet, un morceau de pain de 20g n'apporte que 50 calories. Par contre, ce même morceau tartiné avec du beurre en apportera le double. 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 56 ? 'active' : '' ?> lateral-padding">
                            <p>
                        Depuis 1996, une fête du pain a été instaurée également, par la Confédération Nationale des Boulangers Pâtissiers. Cette fête se tient le 16 mai, à la Saint-Honoré, patron des boulangers. Même si la France est connue et reconnue pour son bon pain, les Français sont devancés par leurs voisins allemands quant à la consommation de pain (25 kilos de plus par an) . Avec 250 variétés de pains, l'Allemagne est le pays qui offre le plus large choix. 
                            </p>
                        </div>
                        <div class="item <?php echo $timestamp == 57 ? 'active' : '' ?> lateral-padding">
                            <p>
                        La faluche est typique du Nord-Pas-de-Calais. Ce petit pain rond se compose de farine de blé et est fermenté au levain. Il est façonné en boule, dans un premier temps, puis écrasé au rouleau. Il est cuit à très forte chaleur, il gonfle et le dessus éclate créant ainsi un orifice que l'on peut garnir de confiture, de beurre, de rillettes, de chocolat fondu. Dès que le pain sort du four, il est enfermé dans un sac en toile de jute fin. La concentration de vapeur le ramollit. On le consomme comme gourmandise... 
                            </p>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control no-background-image" href="#carousel-pain" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control no-background-image" href="#carousel-pain" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>                    
            </div>
        </div>
    </div>    
</div>

<?php include("includes/footer.shtml"); ?>
