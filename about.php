<?php header('Content-Type: text/html; charset=utf-8'); 
function isMobile() { 

    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }
    
    
function getMassive($array){
    $string = "";
    for ($n = 0; $n < count($array); $n++) {
	$string = $string.'"'.$array[$n].'"';
    if($n+1>=count($array)){

    }else{
        $string=$string.",";
    }
    }
    return $string;
}
$lang = $_GET['locale'];
if($lang==null || empty($lang) || ($lang!=null && ($lang!="ru" && $lang!="en"&& $lang!="es"&& $lang!="ja" && $lang!="zh" ))){
?>
<html>

<head>
    <title>Blade Slayer Online</title>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="public" />
    <meta http-equiv="Cache-Control" content="max-age=360000, public" />
    <META NAME="AUTHOR" CONTENT="Anton Sibgatulin +7 (987) 920-30-04 whatsapp\telegram">
    <META NAME="ROBOTS" CONTENT="ALL">


</head>



<body>
    <script>
    var lang = navigator.language || navigator.userLanguage;

    switch (lang) {
        case "ru":
            break;

        case "en":
            break;

        case "es":
            break;

        case "ja":
            break;
        case "zh":
            break;


        default:
            lang = "en"
            break;
    }
    window.location.href = "?locale=" + lang;
    </script>

</body>

</html>
<?php
    exit();
}
$locale = json_decode(file_get_contents("res/locale_".$lang.".json"), true);
$lan = $lang;
$lan_ = $lang;
if($lan == "ru"){
    $lan="";
}
else{
    $lan = "_".$lan;
}


?>




<html>

<head>
    <title><?php echo $locale['NAME_OF_GAME'];?></title>

    <style>
    html {
        font-style: italic;
        font-size: x-large;
    }

    .before {
        background: url(img/background.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-position-y: 75%;
        width: 100%;
        height: 100%;
        position: fixed;
    }

    .container {
        width: 100%;
        background-color: rgb(1 1 1 / 75%);
        text-align: center;
        padding-bottom: 0px;
        height: 100%;
        position: fixed;
    }

    .panel {
        min-width: 780px;
        position: absolute;
        width: 80%;
        height: 507%;
        background-color: white;
        top: 0px;
        left: 10%;
        border-radius: 10px;
        margin-top: 10px;
        min-height: 5320px;
        ;

        <?php if(isMobile()) {
            ?>width: 100%;
            left: 0px;
            top: 0px;
            margin-top: 0px;
            <?php
        }

        ?>
    }

    body {
        margin: 0px;
    }

    .end {}

    #first_image {
        background: url(img/about/first.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position-y: 75%;
        width: 100%;

        border-radius: 10px;
        min-height: 300px;
    }

    .rumka {
        min-width: 750px;
        width: 96%;
        min-height: 300px;
        border: 3px solid;
        border-radius: 10px;
        max-height: 400px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-block-start: 0.67em;
        margin-block-end: 0.67em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        margin-left: 2%;
    }

    .children {
        width: 45%;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .rumka .children img {
        min-height: 300px;
        max-height: 400px;
        border-radius: 7px;
        max-width: 100%;
    }

    .button {
        width: 15%;
        color: white;
        background-color: #545f94;
        padding: 15px;
        border: 1px solid black;
        border-radius: 10px;
        position: absolute;
        top: 10px;
        left: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .button:hover {
        background-color: #bbc7ff;
        ;
    }
    </style>


</head>

<body>
    <div class="before">

    </div>
    <div class="container">
    </div>

    <div class="panel">

        <div id="first_image">

        </div>
        <a class="button" href="?locale=ru">Русский</a>

        <a class="button" href="?locale=es" style="margin-left: 20%;">Español</a>

        <a class="button" href="?locale=en" style="margin-left: 40%;">English</a>

        <a class="button" href="?locale=ja" style="margin-left: 60%;">日本</a>

        <a class="button" href="?locale=zh" style="margin-left: 80%;">中国人</a>
        <center>
            <h1><?php echo $locale['DESCRIPTION_GAME'];?></h1>
        </center>

        <div class="rumka">
            <div class="children">
                <img src="img/about/key.png">
            </div>

            <div class="children">
                <?php echo $locale['DESCRIPTION_GAME_1_TITLE'];?>
            </div>
        </div>

        <div class="rumka">
            <div class="children">
                <img src="img/about/players.png">
            </div>

            <div class="children">
                <?php echo $locale['DESCRIPTION_GAME_2_TITLE'];?>
            </div>
        </div>


        <div class="rumka" style="height: 450px;font-size: large;">
            <div class="children">
                <img src="img/about/lobby.png" style="width: 100%;">
            </div>

            <div class="children">
                <?php echo $locale['DESCRIPTION_GAME_3_TITLE'];?>
            </div>
        </div>

        <div class="rumka">
            <div class="children">
                <img src="img/about/upgrade.png" style="width: 100%;">
            </div>

            <div class="children">
                <?php echo $locale['DESCRIPTION_GAME_4_TITLE'];?>
            </div>
        </div>


        <div class="rumka">
            <div class="children">
                <img src="img/about/play.png">
            </div>

            <div class="children">
                <?php echo $locale['DESCRIPTION_GAME_5_TITLE'];?>
            </div>
        </div>
        <div class="rumka">
            <div class="children">
                <img src="img/about/location.png">
            </div>

            <div class="children">
                <?php echo $locale['DESCRIPTION_GAME_6_TITLE'];?>
            </div>
        </div>

        <div class="rumka">
            <div class="children">
                <img src="img/about/playin.png">
            </div>

            <div class="children">
                <?php echo $locale['DESCRIPTION_GAME_7_TITLE'];?>
            </div>
        </div>

        <div class="rumka">
            <div class="children">
                <img src="img/about/check_player.png">
            </div>

            <div class="children">
                <?php echo $locale['DESCRIPTION_GAME_8_TITLE'];?>
            </div>
        </div>

        <div class="rumka">
            <div class="children">
                <img src="img/about/power.png">
            </div>

            <div class="children">
                <?php echo $locale['DESCRIPTION_GAME_9_TITLE'];?>
            </div>
        </div>

        <div class="rumka">
            <div class="children">
                <img src="img/about/nitro.png">
            </div>

            <div class="children">
                <?php echo $locale['DESCRIPTION_GAME_10_TITLE'];?>
            </div>
        </div>


        <div class="rumka">
            <div class="children">
                <img src="img/about/antipower.png">
            </div>

            <div class="children">
                <?php echo $locale['DESCRIPTION_GAME_11_TITLE'];?>
            </div>
        </div>


        <div class="rumka">
            <div class="children">
                <img src="img/about/npc_enemy.png">
            </div>

            <div class="children">
                <?php echo $locale['DESCRIPTION_GAME_12_TITLE'];?>
            </div>
        </div>

        <div class="rumka">
            <div class="children">
                <img src="img/about/block_of_fire.png">
            </div>

            <div class="children">
                <?php echo $locale['DESCRIPTION_GAME_13_TITLE'];?>
            </div>
        </div>


    </div>

    <div class="end">


    </div>

</body>

</html>