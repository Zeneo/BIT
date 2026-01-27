<?php
// TASK ARRAY
$baseUrl = 'http://localhost/BIT/lab6';
$data = [
    'page_title' => "testinė užduotis nr. 6",    // Turi būti atvaizduota visada pirma didžioji raidė
    'menu' => [
        [
            'title' => 'Namai',
            'url' => $baseUrl,
        ],
        [
            'title' => 'Rytas',
            'url' => 'https://rytasvilnius.lt/',
        ],
        [
            'title' => 'Žalgiris',
            'url' => 'https://zalgiris.lt/',
        ],
    ],
    'content' => [
        [
            'title' => 'Bilietai',
            'short_content' => 'į Lietuvos Ryto rungtynes',
            'img_url' => $baseUrl.'/uploads/rytas.jpeg',
            'url' => 'https://rytasvilnius.lt/bilietai/',
        ],
        [
            'title' => 'Suduvos pergalė prieš Lietkabelį, ar tikėtina?',
            'short_content' => '???',
            'img_url' => $baseUrl.'/uploads/zalg_sirg1.jpg',
            'url' => 'https://kaunas.kasvyksta.lt/2020/08/26/sportas/patvirtinta-kauno-zalgirio-rungtynes-eurolygoje-rodys-ir-nemokamas-televizijos-kanalas/',
        ],
//        [
//            'title' => 'A.Sabonio krikštas',
//            'short_content' => '???',
//            'img_url' => '???',
//            'url' => '???',
//        ],
//        [
//            'title' => '???',
//            'short_content' => '???',
//            'img_url' => '???',
//            'url' => '???',
//        ],
    ],
    'ads' => [
        [
            'buyerId' => 259,
            'title' => 'Pirma reklama',
            'desc' => 'Pirmos reklamos turinys',
            'img_alt' => 'Pirma reklama',
            'img_url' => $baseUrl.'/uploads/ads/ad1.jpg',
            'url' => 'http://www.google.lt',
            'time_length' => 5,
        ],
        [
            'buyerId' => 259,
            'title' => 'Antra reklama',
            'desc' => 'Antros reklamos turinys',
            'img_alt' => 'Antra reklama',
            'img_url' => $baseUrl.'/uploads/ads/ad1.jpg',
            'url' => 'http://www.google.lt',
            'time_length' => 3,
        ],
        [
            'buyerId' => 259,
            'title' => 'Tričia reklama',
            'desc' => 'Tričios reklamos turinys',
            'img_alt' => 'Tričios reklamos turinys',
            'img_url' => $baseUrl.'/uploads/ads/ad1.jpg',
            'url' => 'http://www.google.lt',
            'time_length' => 3,
        ],
        [
            'buyerId' => 259,
            'title' => 'Ketvirta reklama',
            'desc' => 'Ketvirtos reklamos turinys',
            'img_alt' => 'Ketvirtos reklamos turinys',
            'img_url' => $baseUrl.'/uploads/ads/ad1.jpg',
            'url' => 'http://www.google.lt',
            'time_length' => 3,
        ],
        [
            'buyerId' => 259,
            'title' => 'Penkta reklama',
            'desc' => 'Penktos reklamos turinys',
            'img_alt' => 'Penktos reklamos turinys',
            'img_url' => $baseUrl.'/uploads/ads/ad1.jpg',
            'url' => 'http://www.google.lt',
            'time_length' => 3,
        ]
    ]
];

?>