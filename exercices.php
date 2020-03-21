<!----------------------------------------------------------------------------------------------- 
Pour te repérer dans cette page de code, tu peux faire une recherche des mots clés 
ETAPE_1, ETAPE_2, ETAPE_3, ETAPE_4, ETAPE_5, _SUPERBONUS, _PUSH, _EXEMPLE, _ICI TON CODE
afin de te deplacer plus facilement sans te perdre 
------------------------------------------------------------------------------------------------->

<?php include('head.php'); ?>

<div class="dropdown" id="menu">
    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-chevron-circle-down"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-custom" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#ETAPE_1"><span class='red'>~</span> Nommer les variables</a>
        <a class="dropdown-item" href="#ETAPE_2"><span class='red'>~</span> Assigner les valeurs / Afficher le résultat des variables</a>
        <a class="dropdown-item" href="#ETAPE_3"><span class='red'>~</span> Vérifier le type des variables</a>
        <a class="dropdown-item" href="#ETAPE_4"><span class='red'>~</span> Concaténer les variables</a>
        <a class="dropdown-item" href="#ETAPE_5"><span class='red'>~</span> Faire des opérations</a>
        <a class="dropdown-item" href="#_SUPERBONUS"><span class='red'>~</span> SUPERBONUS</a>
        <a class="dropdown-item" href="#_PUSH"><span class='red'>~</span> Pusher mon code</a>
    </div>
</div>
<div class="container my-container">
    <div class="jumbotron">
        <div class="text-right">
            <button type="button" class="btn btn-sm btn-danger" data-toggle="popover" title="</> Comments in code" data-content="Tous les exercices sont commentés, tu peux d'ors et déjà lire les premiers commentaires à la ligne 1 de exercices.php. Tu as tout ce qu'il faut dans le contenu de ce projet pour réaliser et réussir les exercies. Si tu es bloqué.e, inspire toi du code déjà présent et réadapte le à ton besoin." ><i class="fas fa-comment"></i> Comments in code</button>
        </div>
        <h2 class="display-4">💻 Exercices :</h2>
        <hr class="my-4">
        <div class="row">
            <div class="col-lg-4 col-sm-12 my-5 text-center">
                <img src="assets/images/larbin.gif" alt="larbin" class="avatar">
            </div>
            <div class="col-lg-8 col-sm-12 my-5">
                <p class="lead">
                    <strong>Mr Meeseeks ou M. Larbin en français, est un personnage particulier. </strong><br>
                    Il va falloir stocker un certain nombre d'info à son sujet : <br>
                    - Son identifiant unique -> 3,14 <br>
                    - Couleurs disponibles -> Bleu, Rouge, Vert, Jaune, Violet - (série limitée) <br>
                    - Son temps de vie -> 48 heures <br>
                    - Profession -> Larbin <br>
                    - Souhait(s) disponible(s) -> 1 <br>
                    - Invention de Rick -> Oui <br>
                    - Signe particulier -> S'évapore une fois qu'il a réalisé ton souhait
                </p>
            </div>
        </div>
        <hr class="my-4">
        <!-- ------------------------------------------------------------------------------------------------------ -->
        <!-- 1ere ETAPE -->
        <!-- ------------------------------------------------------------------------------------------------------ -->
        <div class="col-12" id="ETAPE_1">
        <h4 class="display-5">Nommer les variables :</h4>
            <p>
                Première étape, nomme les variables dont on a besoin pour stocker toutes les informations de Monsieur Larbin : <br>
                <small>
                    <div class="alert alert-primary" role="alert">
                        Exemple : <br>
                        <code>$name</code>
                    </div>
                </small>
                <ol>
                    <li>
                        <code>$id</code>
                    </li>
                    <li>
                        <code>$color</code>
                    </li>
                    <li>
                        <code>$lifeTime</code>
                    </li>
                    <li>
                        <code>$job</code>
                    </li>
                    <li>
                        <code>$wishAvailable</code>
                    </li>
                    <li>
                        <code>$rickInvention</code>
                    </li>
                    <li>
                        <code>$specialSign</code>
                    </li>
                </ol>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </p>
        </div>
        <hr class="my-4">
        <!-- ------------------------------------------------------------------------------------------------------ -->
        <!-- 2eme ETAPE -->
        <!-- ------------------------------------------------------------------------------------------------------ -->
        <div class="col-12" id="ETAPE_2">
        <h4 class="display-5">Assigner des valeurs :</h4>
            <p>
                Deuxième étape, assigne les valeurs aux variables puis affiche les : <br>
                <small>
                    <div class="alert alert-primary" role="alert">
                        <strong>Tips :</strong><br>
                        - Il y a 2 string, 2 integer, 1 array, 1 float, 1 boolean. <br>
                        - Fais attention à la synthaxe afin que le typage dynamique soit correct. <br>
                        - Pour afficher les valeurs d'un ARRAY tu peux utiliser <code>&lt;pre&gt;&lt;?php Print_r($array); ?&gt;&lt;\pre&gt;</code> afin d'avoir un affichage plus friendly. <br>
                        - N'oublie pas les points virgules ; 🤙 <br>
                        - Il se peut que tu aies besoin d'échapper des caractères spéciaux tel que l'aposthrophe ', oui bien de faire un retour à la ligne, en PHP c'est très simple : <br> 
                        Pour la chaîne de caractères suivante : 
                        <code>
                            "J'aime coder des mystères &lt;retour à la ligne&gt; parfois même des choses impossibles"
                        </code>
                        <br>
                        Suivant que j'initialise ma variable avec des "" ou bien des '', PHP ne va pas interpréter les choses de la même manière : <br>
                        Je peux écrire : <code>$string = "J'aime coder des choses mystères &lt;br&gt; parfois même des choses impossibles";</code> <br>
                        ou <code>$string = 'j\'aime coder des choses mystères &lt;br&gt; parfois même des choses impossibles';</code> <br>
                        Le \ me permet d'échapper le caractère ' et le &lt;br&gt; de faire le retour à la ligne.
                        <hr class="my-2">
                        <strong>Exemple :</strong><br>
                        <code>$name = "Rick";</code> <br>
                        <code>echo "=> " .$name .'&lt;br&gt;';</code> <br>
                        <!-- _EXEMPLE -->
                        <div class="alert alert-my-dark" role="alert">
                            <?php
                                $name = "Rick";
                                echo "<span class='red'>~</span> " .$name . '<br>';
                            ?>
                        </div>
                        <!-- / -->
                    </div>
                </small>
                <br>
                <h5 class="display-6">Solution :</h5>
                <div class="alert alert-my-dark" role="alert">
                    <?php
                        echo "<span class='red'>~</span> _ICI TON CODE PHP. <br>";
                    ?>      
                        <!-- _ICI TON CODE  -->
                        <!-- REPRENDS LE NOM DE TES VARIABLES ET ASSIGNE LEUR LES VALEURS DE MONSIEUR LARBIN :-->
                        <!--------------  Aide toi de l'exemple juste au dessus 🤙 ------------>
                        <!--------------  N'oublie pas le point virgule ; 🤙 ------------> 
                    <?php    
                        $id= 3.14;
                        echo "<span class='red'>~</span> " .$id .'<br>';
                        ?>
                    <pre class="alert alert-my-dark"><?php
                        $color=["Bleu","Rouge","Vert","Jaune","Violet-serie limitee"];
                        Print_r($color) .'<br>';
                        ?></pre>    
                    <?php
                        $lifeTime= 48;
                        echo "<span class='red'>~</span> " .$lifeTime ."heures".'<br>';
                        ?>    
                    <?php
                        $job="Larbin";
                        echo "<span class='red'>~</span> " .$job .'<br>';
                        ?>
                    <?php
                        $wishAvailable= true ;
                        echo "<span class='red'>~</span> " .$wishAvailable .'<br>';
                        ?>
                    <?php
                        $rickInvention= "oui";
                        echo "<span class='red'>~</span> " .$rickInvention .'<br>';
                        ?>
                    <?php
                        $specialSign= "S'évapore une fois qu'il a réalisé ton souhait";
                        echo "<span class='red'>~</span> " .$specialSign.'<br>';
                    ?>
                </div><progress-bar progress-bar-striped" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </p>
        </div>
        <hr class="my-4">
        <!-- ------------------------------------------------------------------------------------------------------ -->
        <!-- 3ème ETAPE -->
        <!-- ------------------------------------------------------------------------------------------------------ -->
        <div class="col-12" id="ETAPE_3">
        <h4 class="display-5">Vérifier le type des variables :</h4>
            <p>
                Troisième étape, utilise la méthode <code>gettype($maVariable);</code> pour vérifier le typage de tes variables :<br>
                <small>
                    <div class="alert alert-primary" role="alert">
                        <strong>Exemple :</strong><br>
                        <code>echo gettype($name);</code> <br> => <br>
                        <!-- _EXEMPLE -->
                        <div class="alert alert-my-dark" role="alert">
                            <?php echo "<span class='red'>~</span> " .gettype($name); ?><br>
                        </div>
                        <!-- / -->
                    </div>
                </small>
                <hr class="my-3">
                <h5 class="display-6">Solution :</h5>
                <hr class="my-3">
                <p>
                    <code>echo gettype(<-- $variable -->);</code> <br> => <br>
                    <div class="alert alert-my-dark" role="alert">
                    <?php
                            echo "<span class='red'>~</span>".gettype($id)?><br>
                            <!-- _ICI TON CODE POUR VERIFIER LE TYPAGE DE VARIABLE SUIVANTE -->
                    </div>
                </p>
                <hr class="my-3">
                <p>
                    <code>echo gettype(<-- $variable -->);</code> <br> => <br>
                    <div class="alert alert-my-dark" role="alert">
                        <?php
                            echo "<span class='red'>~</span>".gettype($color)?><br>
                            <!-- _ICI TON CODE POUR VERIFIER LE TYPAGE DE VARIABLE SUIVANTE -->
                    </div>
                </p>
                <hr class="my-3">
                <p>
                    <code>echo gettype(<-- $variable -->);</code> <br> => <br>
                    <div class="alert alert-my-dark" role="alert">
                    <?php
                            echo "<span class='red'>~</span>".gettype($lifeTime)?><br>
                            <!-- _ICI TON CODE POUR VERIFIER LE TYPAGE DE VARIABLE SUIVANTE -->
                    </div>
                </p>
                <hr class="my-3">
                <p>
                    <code>echo gettype(<-- $variable -->);</code> <br> => <br>
                    <div class="alert alert-my-dark" role="alert">
                    <?php
                            echo "<span class='red'>~</span>".gettype($job)?><br>
                            <!-- _ICI TON CODE POUR VERIFIER LE TYPAGE DE VARIABLE SUIVANTE -->
                    </div>
                </p>
                <hr class="my-3">
                <p>
                    <code>echo gettype(<-- $variable -->);</code> <br> => <br>
                    <div class="alert alert-my-dark" role="alert">
                    <?php
                            echo "<span class='red'>~</span>".gettype($wishAvailable)?><br>
                            <!-- _ICI TON CODE POUR VERIFIER LE TYPAGE DE VARIABLE SUIVANTE -->
                    </div>
                </p>
                <hr class="my-3">
                <p>
                    <code>echo gettype(<-- $variable -->);</code> <br> => <br>
                    <div class="alert alert-my-dark" role="alert">
                    <?php
                            echo "<span class='red'>~</span>".gettype($rickInvention)?><br>
                            <!-- _ICI TON CODE POUR VERIFIER LE TYPAGE DE VARIABLE SUIVANTE -->
                    </div>
                </p>
                <hr class="my-3">
                <p>
                    <code>echo gettype(<-- $variable -->);</code> <br> => <br>
                    <div class="alert alert-my-dark" role="alert">
                    <?php
                            echo "<span class='red'>~</span>".gettype($specialSign)?><br>
                            <!-- _ICI TON CODE POUR VERIFIER LE TYPAGE DE VARIABLE SUIVANTE -->
                    </div>
                </p>
                <hr class="my-3">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </p>
        </div>
        <hr class="my-4">
        <!-- ------------------------------------------------------------------------------------------------------ -->
        <!-- 4ème ETAPE -->
        <!-- ------------------------------------------------------------------------------------------------------ -->
        <div class="col-12" id="ETAPE_4">
        <h4 class="display-5">Concaténer les variables :</h4>
            Quatrième étape, concatène les variables entre elles afin d'afficher le texte suivant : <br>
            <div class="font-italic my-3">
                Le <strong><u>larbin*</u></strong> est une invention de Rick. <br>
                Les couleurs disponibles sont : <strong><u>Bleu*, Rouge*, Vert*, Jaune*, Violet - (série limitée)* </u></strong>. <br>
                Vit environ <strong><u>48*</u></strong> heures. <br>
                <strong><u>S'évapore une fois qu'il a réalisé ton souhait*</u></strong>. <br>
                <strong><u>1*</u></strong> souhait par larbin.
                Photo non contractuelle.
            </div>
            <small>
                <div class="alert alert-primary" role="alert">
                <strong>Tips :</strong><br>
                    Le terme concaténer veut dire que l'on associe les variables entre elles. Par exemple : <br>
                    J'ai 2 varibales : $sayHello = "Hello" et $destination = "World". <br>
                    Je souhaite associer les 2 variables pour afficher "Hello World", pour cela je vais utilser la concaténation. <br>
                    En PHP, il suffit de placer un point '.' devant la variable à associer : <br>
                    <code>echo .$sayHello .$destination;</code> <br> => <br> 
                    <div class="alert alert-my-dark" role="alert">
                        <?php echo "<span class='red'>~</span> " .$sayHello = "Hello" .$destination = "World"; ?> <br>
                    </div>
                    <hr>
                    Sauf que mes mots sont collés alors je concatène un espace entre les 2 comme ceci : <br> <code>echo .$sayHello ." " .$destination;</code> <br> => <br>
                    <div class="alert alert-my-dark" role="alert">
                        <?php echo "<span class='red'>~</span> " .$sayHello = "Hello" ." " .$destination = "World"; ?>  <br>
                    </div>
                    <hr class="my-2">
                    <strong>Exemple :</strong><br>
                    <code>
                        $name = "Rick";<br>
                        $job = "scientifique";
                    </code>
                    <br>
                    <code>echo "Hello je suis ".$name." et je suis ".$job.".";</code> <br> => <br>
                    <!-- _EXEMPLE -->
                    <div class="alert alert-my-dark" role="alert">
                         <?php
                            //$name = "Rick";
                            //$job = "scientifique";
                            // echo "<span class='red'>~</span> Salut je suis ".$name." et je suis ".$job .".";
                        ?> 
                    </div>
                    
                    <br>
                </div>
            </small>
            <hr class="my-3">
            <h5 class="display-6">Solution :</h5>
            <p>
                <p>
                    <div class="alert alert-my-dark" role="alert" id="4_Etape">
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="popover" title="</> Comments in code" data-content="Explications et astuces en commenteraire dans exercices.php mot clé : 4_Etape"><i class="fas fa-comment"></i> Comments in code</button><br>
                        <!-- _ICI TON CODE POUR AFFICHER LE TEXTE : 
                            "   Le larbin est une invention de Rick.
                                Les couleurs disponibles sont : Bleu, Rouge, Vert, Jaune, Violet - (série limitée).
                                Vit environ 48 heures.
                                S'évapore une fois qu'il a réalisé ton souhait.
                                1 souhait par larbin.
                                Photo non contractuelle**. "

                            ** N'oublie pas de mettre ton code dans des balises PHP 🤙
                            ** N'oublie pas les points virgules ; 🤙           
                        --> 
                        <span class='red'>~</span>  <?php
                            echo "Le " . $job ." est une invention de " .$name . "." . "<br>"  ?>
                        <span class='red'>~</span>  <?php
                            echo "Les couleurs disponibles sont: ". $color[0] .", ".$color[1] .", ".$color[2] .", ".$color[3] .", ".$color[4] .". "."<br>"?>    
                        <span class='red'>~</span>  <?php
                            echo "vit environ " . $lifeTime ." heures ". "<br>"  ?> 
                        <span class='red'>~</span>  <?php
                            echo $specialSign. "<br>"  ?>  
                        <span class='red'>~</span>  <?php
                            echo $wishAvailable. " souhait par ". $job . "<br>"  ?>
                        <span class='red'>~</span>  <?php
                            echo " Photo non contractuelle**. ". "<br>"  ?>  
 
                    </div>
                </p>
            </p>
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <hr class="my-4">
        <!-- ------------------------------------------------------------------------------------------------------ -->
        <!-- 5ème ETAPE -->
        <!-- ------------------------------------------------------------------------------------------------------ -->
        <div class="col-12" id="ETAPE_5">
        <h4 class="display-5">Faire des opérations :</h4>
            Cinquième étape, on va aider Rick à chiffrer sa production de larbins : <br>
            <small>
                <div class="alert alert-primary" role="alert">
                <strong>Tips :</strong><br>
                    Liste des opérateurs disponibles => <br>
                    <code>
                        * => multiplier <br>
                        + => additionner <br> 
                        - => soustraire <br>
                        / => diviser <br>   
                        % => modulo : $a % $b = reste de $a divisé par $b <br>  
                        ** => exponentielle : $a ** $b = puissance de $a par $b <br>
                    </code>
                    <hr class="my-2">
                    <strong>Exemple :</strong><br>
                    Si Rick vend 24 larbins identiques à 60 000$, quel est le prix d'un larbin ? <br>
                    <code>
                        $total = 60000; <br>
                        $larbins = 24 <br>
                        echo $total / $larbins ." $"; <br> => <br>
                        <!-- _EXEMPLE -->
                        <div class="alert alert-my-dark" role="alert">
                        <span class='red'>~</span>
                            <?php 
                                $total = 60000;
                                $larbins = 24;
                                echo $total / $larbins ." $";
                            ?>
                        </div>
                        <!-- / -->
                    </code>
                    <br>
                </div>
            </small>
            <hr class="my-3">
            <h5 class="display-6">Solution :</h5>
            <hr class="my-3">
            <p>
                <p>
                    <p>- Si Rick dispose de 1545 larbins violets, de 1988 larbins bleu et de 1423 larbins verts, combien a-t-il de larbins en stock ? </p>
                    <div class="alert alert-my-dark" role="alert">
                        <span class='red'>~</span> 
                            <?php 
                                $larbinsViolets = 1545;
                                $larbinsBleus = 1988;
                                $larbinsVerts = 1423;
                                echo $larbinsViolets + $larbinsBleus + $larbinsVerts ." larbins";
                            ?>
                        <!-- _ICI TON CODE --> 
                        <!-- ** N'oublie pas de mettre ton code dans des balises PHP 🤙  -->
                    </div>
                    <hr class="my-3">
                    <br>
                    <p>- Si Rick avait 78 459 larbins en stock mais que Condorman lui en commande 57 621, combien va-t-il lui en rester ? </p>
                    <div class="alert alert-my-dark" role="alert">
                        <span class='red'>~</span>
                            <?php 
                                $stock = 78459;
                                $condorman = 57621;
                                echo $stock - $condorman ." larbins";
                            ?>
                        <!-- _ICI TON CODE --> 
                        <!-- ** N'oublie pas de mettre ton code dans des balises PHP 🤙  -->
                    </div>
                    <hr class="my-3">
                    <br>
                    <p>- Si Rick a 100 larbins jaunes qui coutent 2 fois moins cher que 100 larbins bleus à 5480$, combien coûte un larbin jaune ? </p>
                    <div class="alert alert-my-dark" role="alert">
                        <span class='red'>~</span> 
                            <?php 
                                $larbinsBleus = 5480;
                                $larbinJaunes = 100;
                                $deuxMoinsCher = 2; 
                                echo $larbinsBleus / $deuxMoinsCher / $larbinJaunes ."  prix d'un larbin jaune";
                            ?>
                        <!-- _ICI TON CODE --> 
                        <!-- ** N'oublie pas de mettre ton code dans des balises PHP 🤙  -->
                    </div>
                    <hr class="my-3">
                    <br>
                    <p>- Rick dispose de 17 larbins violets, s'il veut en donner 5 à Morty, 5 à Summer, 5 à sa fille et le reste à Jerry, combien de larbins va avoir Jerry ? (tips : utilise le modulo)</p>
                    <div class="alert alert-my-dark" role="alert">
                        <span class='red'>~</span>
                            <?php 
                                $larbinsViolet = 17;
                                $marty= 5;
                                $summer= 5;
                                $fille= 5;

                                echo "Jerry aura ". $larbinsViolet % ($marty+ $summer + $fille) ." larbins";
                            ?>
                        <!-- _ICI TON CODE --> 
                        <!-- ** N'oublie pas de mettre ton code dans des balises PHP 🤙  -->
                    </div>
                    <hr class="my-3">
                    <br>
                    <p>- Bonus : Rick voudrait écrire une fonction qui lui permette d'être alerté lorsque le nombre de ses larbins en stock est inférieur ou égale à 15, tente d'écrire cette fonction :</p>
                    <div class="alert alert-my-dark" role="alert" id="5_Etape">
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="popover" title="</> Comments in code" data-content="Explications et astuces en commenteraire dans exercices.php mot clé : 5_Etape"><i class="fas fa-comment"></i> Comments in code</button>
                        <span class='red'>~</span> 
                            <?php 
                            // Il va falloir écrire une méthode CONDITIONNELLE, il faut donc utiliser if/else
                            // 1 - On initialise une variable $number avec une valeur inférieur ou égale à 15, par exemple on peut tester avec 12.
                                $number = 12;
                             
                                
                            // 2 - On ecrit la fonction à laquelle on donne un nom intelligible sur ce qu'elle fait, 
                            // cette méthode prend comme paramètre un nombre qui sera tester : $number
                                function getAlertStock($number){
                                $stock = 15;
                                if($number <= $stock) {
                                    echo "Actuellement " .$number ." larbins en stock";
                                    } else { 
                                    echo " "; 
                                    } 
                                // <!-- _ICI TON CODE --> 
                                // Tu peux décommenter la ligne du dessous pour actionner la méthode 
                                // echo "Actuellement " .$number ." de larbins en stock"; 
                             }
                            // 3 - On appelle la méthode pour voir ce qu'elle renvoit comme résultat
                            getAlertStock($number);
                            ?>  
                    </div>
                    <hr class="my-3">
                    <br>
                </p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </p>
        </div>
    </div>
    <!-- ------------------------------------------------------------------------------------------------------ -->
    <!-- SUPER BONUS -->
    <!-- ------------------------------------------------------------------------------------------------------ -->
    <div class="jumbotron bg-dark text-light" id="SUPERBONUS">
        <h2 class="display-4">😎 Bonus :</h2>
        <hr class="my-4">
        <div class="row">
            <div class="col-lg-4 col-sm-12 my-5 text-center">
                <img src="assets/images/bonus.gif" alt="bonus 8 bit" class="avatar">
            </div>
            <div class="col-lg-8 col-sm-12 my-5">
                <p class="lead">
                    J'ai caché un personnage dans le code, à toi de jouer pour trouver comment l'afficher :
                </p>
                <small>
                    <div class="alert alert-primary" role="alert">
                        <strong>Tips :</strong><br>
                        - Le personnage caché ne s'affichera que si la variable <code>$secretIsVisible</code> est réiniatlisée à <code>true</code> <br>
                        - Observe comment j'ai découpé mon code, notamment avec les fichiers <code>head.php</code> et <code>footer.php</code> et comment je les utilise dans <code>homepage.php</code> et <code>exercices.php</code> <br>
                        - Il y a plusieurs manières d'arriver à afficher le personnage caché. <br>
                    </div>
                </small>
            </div>
            <div class="col-12">
                <div class="alert alert-my-dark" role="alert" id="_SUPERBONUS">
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="popover" title="</> Comments in code" data-content="Code commenter dans exercices.php mot clé : SUPERBONUS"><i class="fas fa-comment"></i> Comments in code</button>
                    <?php
                        // _SUPERBONUS
                        // Dans un premier temps, testons si la variable $secretIsVisible existe :
                        // Lorsque je met un ! avant la variable je demande l'inverse de l'état de ma variable 🤯 
                        // 😬 JE M'EXPLIQUE 
                        // => Si j'écris if($secretVisible) je demande si secretVisible existe, ou bien qu'elle est égale à true
                        // => En revanche, si je demande l'inverse de true, c'est à dire false, alors je demande si secretVisible
                        // n'existe pas, ou qu'elle est égale à false. Pour cela j'ajoute un ! devant ma variable.
                        // Entraine toi à comprendre cette logique avec l'exemple juste en dessous qui demande :
                        // "Si (secretVisible n'existe pas et/ou qu'elle est égale à false){
                        //    affiche 👻      
                        //  } Sinon {
                        //    affiche la valeur de secretVisible
                        //  }"
                        if (!$secretIsVisible) {
                            echo "<span class='red'>~</span> 👻";
                        } else {
                            echo $secretIsVisible;
                        }
                        // Dans un second temps regarde ce qu'il se passe dans le code et les fichiers.
                        // Certains fichiers tels que head.php et footer.php sont appart mais apparaissent correctement sur toutes
                        // les pages readme / home / exercies
                        // Essaye de comprendre comment ça fonctionne tout en observant les fichiers contenu à la racine du projet
                        // qui pourraient te permettre de retrouver où se trouve le personnage caché et comment l'afficher
                        // Tips => Rappelle toi du sens de lecture du code : toujours de haut en bas 

                        // _ICI TON CODE
                        if ($secretIsVisible) {
                            echo "<span class='red'>~</span> 👻";
                        } else {
                            echo $secretIsVisible;
                        }
                         include('bonus.php');
                    ?>
                    
                </div>
            </div>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
    <!-- ------------------------------------------------------------------------------------------------------ -->
    <!-- _PUSH -->
    <!-- ------------------------------------------------------------------------------------------------------ -->
    <div class="jumbotron" id="_PUSH">
        <h2 class="display-4"><span class='red'>~</span> git push</h2>
        <hr class="my-4">
        <div class="row">
            <div class="col-12 my-5">
                <h4> Dans ton terminal : <h4>
                <div class="alert alert-my-dark" role="alert">
                    <span class="red">~ </span><span class="purple">git:(</span><span class="red">nom_de_ta_branche</span><span class="purple">)</span> <span class="yellow">✗</span> git add &lt;les fichiers modifiés&gt; <br>
                    <span class="red">~ </span><span class="purple">git:(</span><span class="red">nom_de_ta_branche</span><span class="purple">)</span> <span class="yellow">✗</span> git commit -m "ton message de commit" <br>
                    <span class="red">~ </span><span class="purple">git:(</span><span class="red">nom_de_ta_branche</span><span class="purple">)</span> git push --set-upstream origin nom_de_ta_branche <br>
                </div>
            </div>
            <div class="col-12">
                <div class="text-center my-4">
                    <img src="assets/images/noob.gif" alt="thanks noob noob" class="noob">
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>