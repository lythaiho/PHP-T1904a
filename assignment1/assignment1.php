<!doctype html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assignment1.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Assignment 1 by ThaiCode</title>
</head>
<body>
<?php
function checkString($str, $numberOfLetter){
    if(strlen($str) > $numberOfLetter){
        return str_replace(substr($str, $numberOfLetter, strlen($str)-$numberOfLetter),'...', $str);
    } else{
        return $str;
    }
}
$title = "product";
$product = [
    [
        "image" => "images/vsmart-active-3.jpg",
        "promotion"=>"Lì xì 400.000đ",
        "info" =>
            [
                "name" => "Vsmart Active 3 6GB-64GB",
                "price" => 4990000,
                "vote" => "5",
                "rate" => "51"
            ],

        "details" =>
            [
                "screen" => "1080 x 2340 Pixels 6.39 inchs",
                "camera" => "48 MP f/1.7 + 8MP f/2.2 + 2MP 16.0 MP",
                "battery" => "4.020 mAh",
                "ram" => "6 GB",
                "cpu" => "MediaTek Helio P60 8 nhân",
                "hdh" => "Android 9"
            ]
    ],
    [
        "image" => "images/vsmart-active-3-4GB.jpg",
        "promotion"=>"Lì xì 300.000đ",
        "info" =>
            [
                "name" => "Vsmart Active 3 4GB-64GB",
                "price" => 4490000,
                "vote" => "3",
                "rate" => "33"
            ],

        "details" =>
            [
                "screen" => "1080 x 2340 Pixels 6.39 inchs",
                "camera" => "48 MP f/1.7 + 8MP f/2.2 + 2MP 16.0 MP",
                "battery" => "4.020 mAh",
                "ram" => "4 GB",
                "cpu" => "MediaTek Helio P60 8 nhân",
                "hdh" => "Android 9"
            ]
    ],
    [
        "image" => "images/vsmart-active1-plus.jpg",
        "promotion"=>"Trả góp 0%",
        "info" =>
            [
                "name" => "Vsmart Live 6GB-64GB",
                "price" => 3790000,
                "vote" => "3",
                "rate" => "157"
            ],

        "details" =>
            [
                "screen" => "1080 x 2232 pixel 6.2 inchs",
                "camera" => "48MP f/1.7 + 5MP f/1.9+8 MP f/22 20.0 MP",
                "battery" => "4000mAh",
                "ram" => "6 GB",
                "cpu" => "Qualcomm®  Snapdragon™  675",
                "hdh" => "Android 9"
            ]

    ],
    [
        "image" => "images/vsmart-live-6g.jpg",
        "promotion"=>"Lì xì 1.000.000đ",
        "info" =>
            [
                "name" => "Vsmart Active 1+",
                "price" => 3590000,
                "vote" => "3",
                "rate" => "216"
            ],

        "details" =>
            [
                "screen" => "1080 x 2280 Pixels 6.18 inches",
                "camera" => "24.0 MP + 12.0 MP 20.0 MP",
                "battery" => "3650 mAh",
                "ram" => "6 GB",
                "cpu" => "Qualcomm Snapdragon 660",
                "hdh" => "VOS (Based on Android 8.1)"
            ]
    ],
    [
        "image" => "images/vsmart-active-3.jpg",
        "promotion"=>"Lì xì 400.000đ",
        "info" =>
            [
                "name" => "Vsmart Active 3 6GB-64GB",
                "price" => 4990000,
                "vote" => "5",
                "rate" => "51"
            ],

        "details" =>
            [
                "screen" => "1080 x 2340 Pixels 6.39 inchs",
                "camera" => "48 MP f/1.7 + 8MP f/2.2 + 2MP 16.0 MP",
                "battery" => "4.020 mAh",
                "ram" => "6 GB",
                "cpu" => "MediaTek Helio P60 8 nhân",
                "hdh" => "Android 9"
            ]
    ],
    [
        "image" => "images/vsmart-active-3-4GB.jpg",
        "promotion"=>"Lì xì 300.000đ",
        "info" =>
            [
                "name" => "Vsmart Active 3 4GB-64GB",
                "price" => 4490000,
                "vote" => "3",
                "rate" => "33"
            ],

        "details" =>
            [
                "screen" => "1080 x 2340 Pixels 6.39 inchs",
                "camera" => "48 MP f/1.7 + 8MP f/2.2 + 2MP 16.0 MP",
                "battery" => "4.020 mAh",
                "ram" => "4 GB",
                "cpu" => "MediaTek Helio P60 8 nhân",
                "hdh" => "Android 9"
            ]
    ],
    [
        "image" => "images/vsmart-active1-plus.jpg",
        "promotion"=>"Trả góp 0%",
        "info" =>
            [
                "name" => "Vsmart Live 6GB-64GB",
                "price" => 3790000,
                "vote" => "3",
                "rate" => "157"
            ],

        "details" =>
            [
                "screen" => "1080 x 2232 pixel 6.2 inchs",
                "camera" => "48MP f/1.7 + 5MP f/1.9+8 MP f/22 20.0 MP",
                "battery" => "4000mAh",
                "ram" => "6 GB",
                "cpu" => "Qualcomm®  Snapdragon™  675",
                "hdh" => "Android 9"
            ]

    ],
    [
        "image" => "images/vsmart-live-6g.jpg",
        "promotion"=>"Lì xì 1.000.000đ",
        "info" =>
            [
                "name" => "Vsmart Active 1+",
                "price" => 3590000,
                "vote" => "3",
                "rate" => "216"
            ],

        "details" =>
            [
                "screen" => "1080 x 2280 Pixels 6.18 inches",
                "camera" => "24.0 MP + 12.0 MP 20.0 MP",
                "battery" => "3650 mAh",
                "ram" => "6 GB",
                "cpu" => "Qualcomm Snapdragon 660",
                "hdh" => "VOS (Based on Android 8.1)"
            ]
    ]
];

?>
<div class="container">
    <div class="row">
        <?php foreach ($product as $p): ?>
        <div class="col-3 product">
            <div class="images-product">
                <img src="<?php echo $p['image'];?>">
                <label class="sale"><?php echo $p['promotion'];?></label>
            </div>
            <div class="info-product">
                <div class="name-product"><?php echo $p['info']['name'];?></div>
                <div class="price-product"><?php echo $p['info']['price'];?>đ</div>
                <div class="vote-rate-product">
                    <div class="vote-product">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="rate-product">(<?php echo $p['info']['rate'];?>đánh giá)</div>
                </div>
            </div>
            <div class="details-product">
                <div class="screen-product">
                    <span>Màn hình :</span><?php echo checkString($p['details']['screen'],25);?></div>
                <div class="camera-product">
                    <span>Camera :</span><?php echo checkString($p['details']['camera'],25);?></div>
                <div class="battery-product">
                    <span>Pin:</span><?php echo $p['details']['battery'];?></div>
                <div class="ram-product">
                    <span>Ram:</span>6 GB</div>
                <div class="cpu-product">
                    <span>CPU:</span><?php echo checkString( $p['details']['cpu'],26);?></div>
                <div class="hdh-product">
                    <span>HDH:</span><?php echo $p['details']['hdh'];?></div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>