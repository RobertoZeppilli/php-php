<!-- realizza uno script php che ricostruisca e stampi a video 
le prime parole del "Lorem Ipsum" contenute negli elementi del seguente array. -->

<?php
    $array = [
        "Lorem",
        "ipsum",
        [
            "dolor",
            [
                "sit",
                "amet",
            ],
            "consectetur",
        ],
        [
            "adipiscing",
        ],
        "elit"
    ];

    foreach ($array as $firstLevel) {
        if (!is_array($firstLevel)) {
            echo $firstLevel . '<br>';
        } else {
            foreach ($firstLevel as $secondLevel) {
                if (!is_array($secondLevel)) {
                    echo $secondLevel . '<br>';
                } else {
                    foreach ($secondLevel as $thirdLevel) {
                        echo $thirdLevel . '<br>';
                    }
                }
            }
        }
    }
?> 




