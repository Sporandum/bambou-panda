<?php
//les array simule la persistance des données
//Ces constances vont servire pour la génération des catalogues
const COL_ENFANT = array(
        array('ref' => 'e01', 'designation' => 'Pyjama enfant', 'prix' => 30.00, 'image' => 'pyjama_enfant.jpg', 'description' => 'Perseus hanc Aethiopia abstractum Danaes vatis Mopsuestia tecti medentur vocabulum.'),
        array('ref' => 'e02', 'designation' => 'T-shirt enfant', 'prix' => 20.00, 'image' => 'tshirt_enfant.jpg', 'description' => 'Perseus hanc Aethiopia abstractum Danaes vatis Mopsuestia tecti medentur vocabulum.'),
        array('ref' => 'e03', 'designation' => 'Peignoire enfant', 'prix' => 40.00, 'image' => 'peignoir_enfant.jpg', 'description' => 'Perseus hanc Aethiopia abstractum Danaes vatis Mopsuestia tecti medentur vocabulum.')
);

const COL_FEMME = array(
        array('ref' => 'f01', 'designation' => 'Robe femme', 'prix' => 26.00, 'image' => 'robe_femme.jpg', 'description' => 'Perseus hanc Aethiopia abstractum Danaes vatis Mopsuestia tecti medentur vocabulum.'),
        array('ref' => 'f02', 'designation' => 'T-shirt femme', 'prix' => 12.00, 'image' => 'tshirt_femme.jpg', 'description' => 'Perseus hanc Aethiopia abstractum Danaes vatis Mopsuestia tecti medentur vocabulum.'),
        array('ref' => 'f03', 'designation' => 'Chaussettes femme', 'prix' => 13.00, 'image' => 'chaussettes_femme.jpg', 'description' => 'Perseus hanc Aethiopia abstractum Danaes vatis Mopsuestia tecti medentur vocabulum.')
);

const COL_HOMME = array(
        array('ref' => 'h01', 'designation' => 'Pantalon homme', 'prix' => 30.00, 'image' => 'pantalon_homme.jpg', 'description' => 'Perseus hanc Aethiopia abstractum Danaes vatis Mopsuestia tecti medentur vocabulum.'),
        array('ref' => 'h02', 'designation' => 'T-shirt homme', 'prix' => 20.00, 'image' => 'tshirt_homme.jpg', 'description' => 'Perseus hanc Aethiopia abstractum Danaes vatis Mopsuestia tecti medentur vocabulum.'),
        array('ref' => 'h03', 'designation' => 'Slip homme', 'prix' => 40.00, 'image' => 'slip_homme.jpg', 'description' => 'Perseus hanc Aethiopia abstractum Danaes vatis Mopsuestia tecti medentur vocabulum.')
);

const COL_LIST = [
        'enfant' => COL_ENFANT,
        'femme' => COL_FEMME,
        'homme' => COL_HOMME
];