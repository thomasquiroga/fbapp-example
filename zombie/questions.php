<?php

/*
 * Zombie Quizz
 * @author Bobby & Thomas
 * @date 10/03/2012
 * 
 */

$config = array(
   'title' => "Combien de temps survivrez-vous aux zombies ?",
    'description' => "Suite à des expérimentations douteuses sur des cobayes humains, menées par des laboratoires clandestins, un mysterieux virus se répand a travers le monde. Il réveille les morts et transforme tout humain mordu en créatures sans cervelles et assoiffées de sang.",
    'fontstyle' => 'zombiefont' //(zombiefont, normalfont, funfont)
);


$questions = array(
    array(
        'question' => "Les zombies commencent a envahir le monde quel est le votre premier reflexe ?",
        'choix' => array(
            "Vous mettez des musiques de combat sur votre ipod et preparez des defenses",
            "Vous finissez \"Left for dead\" pour acquerir les differentes strategies possible",
            "Vous faites des avions en papier sans aucune raison apparente",
            "Vous pleurez"
        ),
        'points' => array(3,4,2,1)
    ),
    array(
        'question' => " Un zombie parvient a rentrer chez vous. Vous prenez le premier objet a coté de vous pour vous défendre. Lequel :",
        'choix' => array(
            "Une hache",
            "Votre plante verte",
            "Un canard (non, pas en plastique)",
            "Le journal d'hier"
        ),
        'points' => array(2,4,3,1)
    ),
    array(
        'question' => "La ville est infesté de zombies et vous avez besoin d'une coupe de cheveux, vous :",
        'choix' => array(
            "Prenez le risque de sortir pour aller chez le coiffeur",
            "Le faites vous meme",
            "Decidez d'adopter la mode \"Jesus\"",
            "Utilisez \"Appel a un ami\" et lui demandez ce qu'il en pense"
        ),
        'points' => array(2,1,3,4)
    ),
    array(
        'question' => "Les habitants restant du quartier vous demandent de l'aide pour repousser les zombies:",
        'choix' => array(
            "Vous adoptez la technique du \"chacun pour soi\"",
            "Vous leur faites une improvisation de la danse des canards",
            "Vous prenez la tete de la résistance",
            "Vous les rejoignez mais vous prenez grand soin de rester en arriere"
        ),
        'points' => array(1,2,4,3)
    ),
    array(
        'question' => "Si vous pouviez choisir un partenaire pour se battre a vos cotés :",
        'choix' => array(
            "Mario, un petit bonhomme qui saute partout et grandit en prenant des champignons (o_O)",
            "Chuck norris, pas besoin d'en dire plus",
            "Les \"Angry Birds &trade\", facile a balancer",
            "Votre colocataire"
        ),
        'points' => array(3,2,4,1)
    ),
    array(
        'question' => "Vous descendez dans la rue, et decidez d'aller en centre ville. Vous avez le choix comme moyen de locomotion entre :",
        'choix' => array(
            "Une autruche",
            "Un cheval ;)",
            "Vous attendez le bus",
            "Des avions en papier"
        ),
        'points' => array(4,3,2,1)
    ),
    array(
        'question' => "Vous arrivez devant un batiment qui pourrai bien vous sauver la vie.",
        'choix' => array(
            "Vous ne voyez que le marchand de hot dog et decidez d'en prendre un.",
            "Vous ne voyez que l'affiche: \"les pingouins sont nos amis, aidez les à s'envoler\"",
            "\"Pourquoi je suis la déjà\"",
            "..., Vous continuez votre route"
        ),
        'points' => array(2,1,3,4)
    ),
    array(
        'question' => "Un habitant est poursuivi par des zombies :",
        'choix' => array(
            "Vous sifflotez en faisant semblant de n'avoir rien vu",
            "Vous vous précipitez à son secours mais trébuchez sur un bras qui trainait par terre",
            "Vous appelez Pikachu à la rescousse",
            "Vous regardez la scène en vous faisant du popcorn"
        ),
        'points' => array(3,2,1,4)
    ),
    array(
        'question' => "Vous arrivez a une intersection, vous avez le choix entre :",
        'choix' => array(
            "A gauche, des zombies",
            "A droite, des zombies",
            "Au milieu des zombies",
            "La réponse D"
        ),
        'points' => array(2,2,2,3)
    ),
    array(
        'question' => "Que feriez vous si vous êtiez mordu par un zombie :",
        'choix' => array(
            "Regarder l'intégrale des feux de l'amour",
            "Chanter frénétiquement \"Zombie - The Cranberries\"",
            "Vous remontez la rue en vous prenant pour un pingouin",
            "Vous vous en foutez, ça fera toujours plus long à \"vivre\""
        ),
        'points' => array(3,4,2,1)
    ) 
);
?>
