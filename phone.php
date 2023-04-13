<?php header('Content-Type: text/html; charset=utf-8'); 
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
if($lang==null || empty($lang) || ($lang!=null && ($lang!="ru" && $lang!="en"&& $lang!="es"&& $lang!="ja" ))){
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
}else if($lan == "ja"){
    $lan = "_jp";
  //  $lan_="jp";
}
else{
    $lan = "_".$lan;
}


?>






<html>

<head>
    <title>Blade Slayer Online</title>

    <meta http-equiv="Cache-Control" content="public" />
    <meta http-equiv="Cache-Control" content="max-age=360000, public" />
    <META NAME="AUTHOR" CONTENT="Anton Sibgatulin +7 (987) 920-30-04 whatsapp/telegram">

    <META NAME="GOOGLEBOT" CONTENT="NOARCHIVE">
    <META NAME="ROBOTS" CONTENT="ALL">

    <link rel="stylesheet" href="css/main.css">

</head>



<body>







    <!--  <script src="http://code.jquery.com/jquery-1.4.4.min.js"></script>-->
    <!-- <script src="http://code.jquery.com/mobile/1.0a2/jquery.mobile-1.0a2.min.js"></script> -->
    <!-- <script src="http://code.jquery.com/jquery-1.12.4.js"></script>-->
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="js/joy.js"></script>
    <script>

    </script>

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
    }

    function getNameOfTask(id) {
        if (id == "running") {
            return "<?php echo $locale["TEXT_TASK_ON_DISTANCE"];?>"
        }
        return "<?php echo $locale["TEXT_TASK"];?>";
    }


    class ShopModel {
        constructor(json) {
            this.json = json;
            var element = "shop";
            var doc = document.getElementById(element)
            var ele = document.getElementById("shop_piece");

            ele.innerHTML = "";
            var players = json.players;
            var magicKeys = json.magicKey;
            var money = json.money;

            this.html =
                '  <div class="shop_element_of_info"><div class="shop_element_of_text"><img src="http://localhost/chesse/img/breath/INSECT/2.png" class="shop_element_of_info_img"><div> Танец жалящей осы: Истинный взмах</div></div><div class="shop_element_of_text"></div></div>'
            var html = this.html;
            if (players != null) {
                for (var i = 0; i < players.length; i++) {
                    var jsonObject = players[i];

                    var price = jsonObject.price;
                    var id = jsonObject.id;
                    var price_magicCard = jsonObject.magicKey;
                    if (player != null && this.isHas(id)) continue;

                    var score = jsonObject.score;
                    var count_of_cards = jsonObject.count_of_cards;
                    var magicKey = jsonObject.magicKey;
                    var src = playerPreviewController.hash.get(id).image_sources.src;
                    var name = playerPreviewController.hash.get(id).name


                    var jsonPlayer = playerPreviewController.hash.get(id).json
                    var type = jsonObject.type;

                    var html_el = '<div class="shop_element_of_info"><div class="shop_element_of_text"><img src="' +
                        src + '" class="shop_element_of_info_img"><div style="font-size: 3vw;"> ' + name +
                        '</div></div><div class="shop_element_of_text"></div></div>'
                    if (type >= 0 && jsonPlayer.levels.length >= type && jsonPlayer.levels[type] != null) {
                        var html = '';
                        var playerConfig = jsonPlayer.levels[type];
                        var heart = playerConfig.health;
                        var speed = playerConfig.speed;
                        var jump = playerConfig.jump;
                        var energy = playerConfig.energy;
                        var power = playerConfig.power;
                        var run = playerConfig.run;
                        var energy_recovery = playerConfig.energy_recovery;


                        console.log(speed + " - speed")
                        html += '<div class="base_element_information">' +
                            '<div class="base_element_information_left"><img src="img/heart.png" width="12px"> <?php echo $locale["TEXT_HEALTH"];?>: </div>' +
                            '<div id="base_heart" class="base_element_information_right">' + heart + '</div></div>';



                        html += '  <div class="base_element_information">' +
                            '<div class="base_element_information_left"><img src="img/thunder.png" width="12px"> <?php echo $locale["TEXT_SPEED"];?>:' +
                            '</div>' +
                            '<div id="base_speed" class="base_element_information_right">' + speed + '</div></div>'


                        html += ' <div class="base_element_information">' +
                            '<div class="base_element_information_left"><img src="img/star.png" width="12px"> <?php echo $locale["TEXT_JUMP"];?>: </div>' +
                            '<div id="base_score_player" class="base_element_information_right">' + jump +
                            '</div>' +
                            '</div>'


                        html += '<div class="base_element_information">' +
                            '<div class="base_element_information_left"><img src="img/bomb.png" width="12px"> <?php echo $locale["TEXT_ENERGY"];?>:' +
                            '</div>' +
                            '<div id="base_energy" class="base_element_information_right">' + energy + '</div>' +
                            '</div>'

                        html += '<div class="base_element_information">' +
                            '<div class="base_element_information_left"><img src="img/knight.png" width="12px"> <?php echo $locale["TEXT_POWER"];?>: </div>' +
                            '<div id="base_power" class="base_element_information_right">' + power + '</div>' +
                            '</div>'


                        html += '<div class="base_element_information">' +
                            '<div class="base_element_information_left"><img src="img/kill.png" width="12px">  <?php echo $locale["TEXT_RUNDIST"];?>: </div>' +
                            '<div id="base_running_distance" class="base_element_information_right">' + run +
                            '</div>' +
                            '</div>'


                        html += '<div class="base_element_information">' +
                            '<div class="base_element_information_left"><img src="img/garbish.png" width="12px">  <?php echo $locale["TEXT_VELOCITY_OF_RECOVERY"];?>: </div>' +
                            '<div id="base_velocity_of_recovery" class="base_element_information_right">' +
                            energy_recovery + '</div>' +
                            '</div>'


                        html +=
                            '<div class="base_element_information"><a id="base_level_info_level" style="font-size: 2vw;    height: calc(100% - 2vw);    margin: 0px 0px;    margin-left: 10px;    width: calc(50% - 30px);"  class="dws-submit"><?php echo $locale["BUTTON_BUY_FOR"];?> ' +
                            price_magicCard +
                            '<img src="img/magicCard.png" width="12px"></a>   <a id="base_level_info_level" style=" font-size: 2vw;   height: calc(100% - 2vw);    margin: 0px 0px;    margin-right: 10px;    width: calc(50% - 30px);"  class="dws-submit" onClick="buyformoney(\'players_' +
                            i + '\')"><?php echo $locale["BUTTON_BUY_FOR"];?> ' + price +
                            '<img src="img/coin.png" width="15px"></a></div>'


                        html_el = '<div  id="players_' + i +
                            '" class="shop_element_of_info"><div class="shop_element_of_text"><img src="' + src +
                            '" class="shop_element_of_info_img"><div style="font-size: 3vw;"> ' + name +
                            '</div></div><div class="shop_element_of_text">' + html + '</div></div>'



                    }
                    $("#shop_piece").append(html_el)
                }
            }

            if (magicKeys != null) {
                console.log(magicKeys.length)
                for (var i = 0; i < magicKeys.length; i++) {

                    var count = magicKeys[i].count;
                    var price = magicKeys[i].price;
                    var src = "img/magicCard.png";
                    var name = "Магическая карта"
                    var html = '';
                    var html_el = null;

                    html += '  <div class="base_element_information">' +
                        '<div class="base_element_information_left"><img src="img/thunder.png" width="12px"> <?php echo $locale["TEXT_COUNT"];?>:' +
                        '</div>' +
                        '<div id="base_speed" class="base_element_information_right">' + count + '</div></div>'

                    html += '<div class="base_element_information">' +
                        '<div class="base_element_information_left"><img src="img/coin.png" width="12px"> <?php echo $locale["TEXT_PRICE"];?>: </div>' +
                        '<div id="base_heart" class="base_element_information_right">' + price +
                        ' <img src="img/money/big_money.png" width="14px"></div></div>';



                    html +=
                        '<div class="base_element_information" style="height:25%">   <a id="base_level_info_level" style=" font-size: 2vw;   height: calc(100% - 2vw);    margin: 0px 0px;     width: 100%;"  class="dws-submit" onClick="buyformoney(\'magicKey_' +
                        i + '\')"><?php echo $locale["BUTTON_BUY_FOR"];?> ' + price +
                        ' <img src="img/money/big_money.png" width="15px"></a></div>'




                    html_el = '<div style="height:50%;"  id="magicKey_' + i +
                        '" class="shop_element_of_info"><div class="shop_element_of_text"><img src="' + src +
                        '" class="shop_element_of_info_img"><div style="font-size: 3vw;"> ' + name +
                        '</div></div><div class="shop_element_of_text">' + html + '</div></div>'


                    $("#shop_piece").append(html_el)
                }
            }
            if (money != null) {
                for (var i = 0; i < money.length; i++) {
                    console.log(money)
                    var price = money[i].price;
                    var count = money[i].count;
                    var magicKey = money[i].magicKey;
                    var src = "img/money/big_money.png"
                    var html = '';
                    var html_el = null;
                    var name = "Деньги"
                    html += '  <div class="base_element_information">' +
                        '<div class="base_element_information_left"><img src="img/thunder.png" width="12px"> <?php echo $locale["TEXT_COUNT"];?>:' +
                        '</div>' +
                        '<div id="base_speed" class="base_element_information_right">' + count + '</div></div>'

                    html += '<div class="base_element_information">' +
                        '<div class="base_element_information_left"><img src="img/coin.png" width="12px"> <?php echo $locale["TEXT_PRICE"];?>: </div>' +
                        '<div id="base_heart" class="base_element_information_right">' + price +
                        ' <img src="img/money/big_money.png" width="14px"></div></div>';



                    html +=
                        '<div class="base_element_information" style="height:25%">  <a id="base_level_info_level" style="font-size: 2vw;    height: calc(100% - 2vw);    margin: 0px 0px;    margin-left: 10px;    width: calc(50% - 30px);"  class="dws-submit"><?php echo $locale["BUTTON_BUY_FOR"];?> ' +
                        magicKey +
                        '<img src="img/magicCard.png" width="12px"></a>   <a id="base_level_info_level" style=" font-size: 2vw;   height: calc(100% - 2vw);    margin: 0px 0px;     margin-right:10px;   width: calc(50% - 20px);"  class="dws-submit" onClick="buyformoney(\'money_' +
                        i + '\')"><?php echo $locale["BUTTON_BUY_FOR"];?> ' + price +
                        ' <img src="img/money/big_money.png" width="15px"></a></div>'




                    html_el = '<div style="height:50%;"  id="magicKey_' + i +
                        '" class="shop_element_of_info"><div class="shop_element_of_text"><img src="' + src +
                        '" class="shop_element_of_info_img"><div style="font-size: 3vw;"> ' + name +
                        '</div></div><div class="shop_element_of_text">' + html + '</div></div>'

                    console.log(html_el)

                    $("#shop_piece").append(html_el)
                }
            }


        }
        isHas(id) {
            for (var a = 0; a < player.json.players.length; a++) {
                var plr = player.json.players[a]
                if (plr.id == id) return true;
            }
            return false;
        }


    }
        

    function buyformoney(datas) {
        connection.send("lobby;shop_buy;" + datas + ";money")
    }

    class WindowNotification {


        constructor(name, text, json, func) {
            this.id = index_notification++;
            this.name = name;
            this.text = text;
            $("#notification").append('<div class="window" style="display:none;" id="window_notification_' + this
                .id +
                '"><center>                  <h1 class="window_h1">                      <div class="window_name">' +
                this.name + '</div>                  </h1></center><div id="window_text_' + this.id +
                '" class="window_text"><div><div style="width: 80%;margin: auto;margin-top: 10px;">' + this
                .text +
                '</div></div></div><div class="window_button"><a id="base_level_info_level" onclick=\'$("#window_notification_' +
                this.id +
                '").slideUp(500);setTimeout(function(){document.getElementById("window_notification_' + this
                .id + '").remove(); ' + (func != null ? func : '') +
                '},500)\'                      class="dws-submit"><?php echo $locale["BUTTON_CLOSE"];?></a>              </div>          </div>'
            );
            if (json != null) {
                var element =
                    '<div  class="base_element" style="border-left: 1px solid;"><div class="base_element_information"><div class="base_element_information_left"><img src="img/coin.png" width="12px"> <?php echo $locale["TEXT_MONEY"];?>: </div><div  class="base_element_information_right">+' +
                    json.addmoney +
                    '</div></div>               <div class="base_element_information"><div class="base_element_information_left"><img src="img/star.png" width="12px"><?php echo $locale["TEXT_SCORE"];?>: </div><div  class="base_element_information_right">+' +
                    json.addscore + '</div></div> '
                if (json.addrun != null) {
                    element +=
                        '<div class="base_element_information"><div class="base_element_information_left"><img src="img/knight.png" width="12px">  <?php echo $locale["TEXT_RUNDIST"];?>: </div><div  class="base_element_information_right">+' +
                        json.addrun + '</div></div>'
                }
                if (json.addspeed != null) {
                    element +=
                        '<div class="base_element_information"><div class="base_element_information_left"><img src="img/thunder.png" width="12px"> <?php echo $locale["TEXT_SPEED"];?>: </div><div  class="base_element_information_right">+' +
                        json.addspeed + '</div></div>'
                }
                /*
                if(json.addrun!=null){
                    element+='<div class="base_element_information"><div class="base_element_information_left"><img src="img/star.png" width="12px"><?php echo $locale["TEXT_SCORE"];?>: </div><div  class="base_element_information_right">+'+json.addscore+'</div></div>'
                }
                */
                element += "</div>"

                $("#window_text_" + this.id).append(element)
            }
            $("#window_notification_" + this.id).slideDown(1300)


        }





    }

    class MapsMultiplayerController {
        constructor() {

        }
        setMaps(jsonMain) {
            var jsonArray = jsonMain.maps;
            document.getElementById("mapsMultiplayerPreview").innerHTML = "";

            for (var i = 0; i < jsonArray.length; i++) {
                this.add(jsonArray[i])
            }
        }
        add(json) {
            var index = json.index;
            var img_src = images.get("train_" + index).src;
            var id = json.id;
            var name = json.name;
            var maxPlayer = json.maxPlayer;
            var type = json.type;
            var des = json.des;
            var html = '';
            var count_of_peoples = json.count;

            var html_el =
                null; //'<div class="shop_element_of_info"><div class="shop_element_of_text"><img src="' + src + '" class="shop_element_of_info_img"><div style="font-size: 3vw;"> ' + name + '</div></div><div class="shop_element_of_text"></div></div>'



            html += '<div class="base_element_information">' +
                '<div class="base_element_information_left"><img src="img/heart.png" width="12px"> Name: </div>' +
                '<div id="base_heart" class="base_element_information_right">' + name + '</div></div>';



            html += '  <div class="base_element_information">' +
                '<div class="base_element_information_left"><img src="img/thunder.png" width="12px"> Type:' +
                '</div>' +
                '<div id="base_speed" class="base_element_information_right">' + type + '</div></div>'


            html += ' <div class="base_element_information">' +
                '<div class="base_element_information_left"><img src="img/star.png" width="12px"> Max players: </div>' +
                '<div id="base_score_player" class="base_element_information_right">' + maxPlayer + '</div>' +
                '</div>'


            html += '<div class="base_element_information">' +
                '<div class="base_element_information_left"><img src="img/bomb.png" width="12px"> Count of Players:' +
                '</div>' +
                '<div id="' + id + '_count" class="base_element_information_right" >' + count_of_peoples +
                '</div>' +
                '</div>'

            /*html += '<div class="base_element_information">' +
                '<div class="base_element_information_left"><img src="img/knight.png" width="12px"> <?php echo $locale["TEXT_ENERGY"];?>: </div>' +
                '<div id="base_power" class="base_element_information_right">' + power + '</div>' +
                '</div>'


            html += '<div class="base_element_information">' +
                '<div class="base_element_information_left"><img src="img/kill.png" width="12px"> Running' +
                'distance: </div>' +
                '<div id="base_running_distance" class="base_element_information_right">' + run + '</div>' +
                '</div>'


            html += '<div class="base_element_information">' +
                '<div class="base_element_information_left"><img src="img/garbish.png" width="12px"> Velocity of' +
                'recovery: </div>' +
                '<div id="base_velocity_of_recovery" class="base_element_information_right">' + energy_recovery + '</div>' +
                '</div>'

            */
            if (type == "TM" || type == "DM") {
                html +=
                    '<div class="base_element_information">  <a id="base_level_info_level" style=" font-size: 2vw;   height: calc(100% - 2vw);    margin: 0px 0px;        width: 100%;"  class="dws-submit" onClick="play_map_multiplay(\'' +
                    id + '\')">Join</a></div>'
            } else {
                html +=
                    '<div class="base_element_information"><a id="base_level_info_level" style="font-size: 2vw;    height: calc(100% - 2vw);    margin: 0px 0px;    margin-left: 10px;    width: calc(50% - 30px);"  class="dws-submit" onClick="play_map_multiplay(\'' +
                    id +
                    '\',\'red\')" class="dws-submit">Join for Red</a>   <a id="base_level_info_level" style=" font-size: 2vw;   height: calc(100% - 2vw);    margin: 0px 0px;    margin-right: 10px;    width: calc(50% - 30px);"  class="dws-submit" class="dws-submit" onClick="play_map_multiplay(\'' +
                    id + '\',\'blue\')">Join for Blue</a></div>'

            }

            html_el = '<div style="margin-top: 10px;border-top: 1px solid;border-radius: 25px;" id="map_' + id +
                '" class="shop_element_of_info"><div class="shop_element_of_text"><div style="height: 50%;background: url(' +
                img_src +
                ');background-repeat: no-repeat;background-size: cover;border-radius: 25px 0px 0px 0px;"></div><div style="    max-height: 50%;font-size: 1.5vw;overflow-y: auto;margin-top: 0px;overflow-x: hidden;box-sizing: border-box;width: auto;max-width: 100%;border-radius: 25px;"> ' +
                des + '</div></div><div class="shop_element_of_text">' + html + '</div></div>'




            //$("#mapsMultiplayerPreview").append(html_el)
            $("#mapsMultiplayerPreview").prepend(html_el)



            //  var element = "";
            //  $("#").append()
        }

    }



    class WindowNotificationMinus {


        constructor(name, text, json, func) {
            this.id = index_notification++;
            this.name = name;
            this.text = text;
            $("#notification").append('<div class="window" style="display:none;" id="window_notification_' + this
                .id +
                '"><center>                  <h1 class="window_h1">                      <div class="window_name">' +
                this.name + '</div>                  </h1></center><div id="window_text_' + this.id +
                '" class="window_text"><div><div style="width: 80%;margin: auto;margin-top: 10px;">' + this
                .text +
                '</div></div></div><div class="window_button"><a id="base_level_info_level" onclick=\'$("#window_notification_' +
                this.id +
                '").slideUp(500);setTimeout(function(){document.getElementById("window_notification_' + this
                .id + '").remove(); ' + (func != null ? func : '') +
                '},500)\'                      class="dws-submit"><?php echo $locale["BUTTON_CLOSE"];?></a>              </div>          </div>'
            );
            if (json != null) {
                var element =
                    '<div  class="base_element" style="border-left: 1px solid;"><div class="base_element_information"><div class="base_element_information_left"><img src="img/coin.png" width="12px"> <?php echo $locale["TEXT_MONEY"];?>: </div><div  class="base_element_information_right">-' +
                    json.addmoney +
                    '</div></div>               <div class="base_element_information"><div class="base_element_information_left"><img src="img/star.png" width="12px"><?php echo $locale["TEXT_SCORE"];?>: </div><div  class="base_element_information_right">+' +
                    json.addscore + '</div></div> '
                if (json.addrun != null) {
                    element +=
                        '<div class="base_element_information"><div class="base_element_information_left"><img src="img/knight.png" width="12px">  <?php echo $locale["TEXT_RUNDIST"];?>: </div><div  class="base_element_information_right">+' +
                        json.addrun + '</div></div>'
                }
                if (json.addspeed != null) {
                    element +=
                        '<div class="base_element_information"><div class="base_element_information_left"><img src="img/thunder.png" width="12px"> <?php echo $locale["TEXT_SPEED"];?>: </div><div  class="base_element_information_right">+' +
                        json.addspeed + '</div></div>'
                }
                /*
                if(json.addrun!=null){
                    element+='<div class="base_element_information"><div class="base_element_information_left"><img src="img/star.png" width="12px"><?php echo $locale["TEXT_SCORE"];?>: </div><div  class="base_element_information_right">+'+json.addscore+'</div></div>'
                }
                */
                element += "</div>"

                $("#window_text_" + this.id).append(element)
            }
            $("#window_notification_" + this.id).slideDown(1300)


        }





    }

    class WindowBattlePreview {
        constructor(id_level, name, text, func) {
            this.id = index_notification++;
            this.id_level = id_level;
            this.text = text;
            this.name = name;
            $("#notification").append('<div class="window" style="display:none;" id="window_notification_' + this
                .id +
                '"><center>                  <h1 class="window_h1">                      <div class="window_name">' +
                this.name + '</div>                  </h1></center><div id="window_text_' + this.id +
                '" class="window_text"><div><div style="width: 80%;margin: auto;margin-top: 10px;text-align: center;"><img style=" width: 100%; border-radius: 10px; border: 1px solid; " src="' +
                images.get("train_" + id_level).src +
                '"></div><div style="width: 80%;margin: auto;margin-top: 10px;text-align: center;">' + this
                .text +
                '</div></div></div><div class="window_button"><a id="base_level_info_level" onclick=\'$("#window_notification_' +
                this.id +
                '").slideUp(500);setTimeout(function(){document.getElementById("window_notification_' + this
                .id + '").remove(); ' + ( /*func != null ? func : */ '') +
                '},500)\'                      class="dws-submit"><?php echo $locale["BUTTON_CLOSE"];?></a>   <a id="base_level_info_level" onclick=\'$("#window_notification_' +
                this.id +
                '").slideUp(500);setTimeout(function(){document.getElementById("window_notification_' + this
                .id + '").remove(); ' + ( /*func != null ? func : */ '') +
                '},500);showMultiBattle();\'                      class="dws-submit"><?php echo $locale["BUTTON_MULTIPLAY"];?></a>           <a id="base_level_info_level" onclick=\'$("#window_notification_' +
                this.id +
                '").slideUp(500);setTimeout(function(){document.getElementById("window_notification_' + this
                .id + '").remove(); ' + (func != null ? func : '') +
                '},500)\'                      class="dws-submit"><?php echo $locale["BUTTON_PLAY"];?></a>             </div>          </div>'
                );
            $("#window_notification_" + this.id).slideDown(1300)



        }




    }

    function play_map_multiplay(id, team) {
        connection.send("lobby;play_map_multiplay;" + id + ";" + team);
    }

    function showMultiBattle() {
        $("#MapsMultiplayerPreview").show(1500);
        connection.send("lobby;get_map_data")
    }

    function upgradeSend() {
        connection.send("lobby;upgrade;" + player.id);
    }
    var rounded = function(number) {
        return +number.toFixed(2);
    }

    function upgradePlayer() {
        var id_player = player.id
        // var myPlayerIdIndex = getPlayerIsGet();
        var jsonPlayer = player.json;
        var jsonPlayerFromBase = getPlayerIs();


        var id = jsonPlayerFromBase.id;
        var myPlayerIdIndex = jsonPlayerFromBase.type;

        var json = playerPreviewController.hash.get(player.id).json;
        var levels = json.levels;
        var jsonMain = levels[myPlayerIdIndex + 1]
        var jsonSecond = levels[myPlayerIdIndex]


        if (levels.length > myPlayerIdIndex && jsonMain != null) {
            var dt_h = jsonMain.health - jsonSecond.health;
            var dt_speed = rounded(jsonMain.speed - jsonSecond.speed);
            var dt_energy = jsonMain.energy - jsonSecond.energy;
            var dt_power = jsonMain.power - jsonSecond.power;
            var dt_energy_recovery = rounded(jsonMain.energy_recovery - jsonSecond.energy_recovery);
            var dt_jump = rounded(jsonMain.jump - jsonSecond.jump);
            var dt_run = jsonMain.run - jsonSecond.run;
            var buy = false;
            if (jsonMain.min_rang <= player.json.rang && jsonMain.price <= player.json.money) {
                buy = true;
            }
            new WindowConfirmUpgrade(id_player, "Level up to " + (myPlayerIdIndex + 1), "Minimal rang is " + rangArray[
                    jsonMain.min_rang] + ".<br/>Price for this is " + (jsonMain.price) +
                " <img src='img/coin.png' height='12px'>", "upgradeSend()", {
                    "speed": dt_speed,
                    "health": dt_h,
                    "jump": dt_jump,
                    "run": dt_run,
                    "energy": dt_energy,
                    "energy_recovery": dt_energy_recovery,
                    "power": dt_power

                }, buy);
        } else {
            new WindowConfirmUpgrade(id_player, "<?php echo $locale["BUTTON_LEVEL"];?> " + (myPlayerIdIndex),
                "<?php echo $locale["MAX_LEVEL"];?> " + (myPlayerIdIndex), "",
                null, false)

        }

    }

    class WindowConfirmUpgrade {
        constructor(id_level, name, text, func, json, isCan) {
            this.isCan = isCan;
            this.id = index_notification++;
            this.id_level = id_level;
            this.text = text;
            this.name = name;
            var button = ' <a id="base_level_info_level" onclick=\'$("#window_notification_' + this.id +
                '").slideUp(500);setTimeout(function(){document.getElementById("window_notification_' + this.id +
                '").remove(); ' + (func != null ? func : '') +
                '},500)\'                      class="dws-submit"><?php echo $locale["TEXT_YES"];?></a>';
            if (isCan == false) {
                button =
                    '<a id="base_level_info_level"   class="dws-submit">&zwnj;<img src="img/block.png" height="32px"></a>';

            }
            $("#notification").append(
                '<div class="window window_80" style="display:none;" id="window_notification_' + this.id +
                '"><center>                  <h1 class="window_h1">                      <div class="window_name">' +
                this.name + '</div>                  </h1></center><div id="window_text_' + this.id +
                '" class="window_text"><div style="width: 50%;"><div style="width: 80%;margin: auto;margin-top: 10px;text-align: center;"><div style="margin-top: 10px;text-align: center;">' +
                this.text + '</div><img style=" width: 100%; border-radius: 10px; border: 1px solid; " src="' +
                images.get(id_level + "_prev").src +
                '"></div></div></div><div class="window_button"><a id="base_level_info_level" onclick=\'$("#window_notification_' +
                this.id +
                '").slideUp(500);setTimeout(function(){document.getElementById("window_notification_' + this
                .id + '").remove(); ' + ( /*func != null ? func : */ '') +
                '},500)\'                      class="dws-submit"><?php echo $locale["TEXT_NO"];?></a>             ' +
                button +
                '             </div>          </div>');
            if (json != null) {
                var element = '<div  class="base_element" style="border-left: 1px solid;"> '
                if (json.health != null) {
                    element +=
                        '<div class="base_element_information"><div class="base_element_information_left"><img src="img/heart.png" width="12px"> Health: </div><div  class="base_element_information_right">+' +
                        json.health + '</div></div>'
                }



                if (json.speed != null) {
                    element +=
                        '<div class="base_element_information"><div class="base_element_information_left"><img src="img/thunder.png" width="12px"> <?php echo $locale["TEXT_SPEED"];?>: </div><div  class="base_element_information_right">+' +
                        json.speed + '</div></div>'
                }

                if (json.jump != null) {
                    element +=
                        '<div class="base_element_information"><div class="base_element_information_left"><img src="img/star.png" width="12px"> <?php echo $locale["TEXT_JUMP"];?>: </div><div  class="base_element_information_right">+' +
                        json.jump + '</div></div>'
                }
                if (json.energy != null) {
                    element +=
                        '<div class="base_element_information"><div class="base_element_information_left"><img src="img/bomb.png" width="12px"> <?php echo $locale["TEXT_ENERGY"];?>: </div><div  class="base_element_information_right">+' +
                        json.energy + '</div></div>'
                }
                if (json.power != null) {
                    element +=
                        '<div class="base_element_information"><div class="base_element_information_left"><img src="img/knight.png" width="12px"> <?php echo $locale["TEXT_POWER"];?>: </div><div  class="base_element_information_right">+' +
                        json.power + '</div></div>'
                }


                if (json.run != null) {
                    element +=
                        '<div class="base_element_information"><div class="base_element_information_left"><img src="img/kill.png" width="12px">  <?php echo $locale["TEXT_RUNDIST"];?>: </div><div  class="base_element_information_right">+' +
                        json.run + '</div></div>'
                }

                if (json.energy_recovery != null) {
                    element +=
                        '<div class="base_element_information"><div class="base_element_information_left"><img src="img/garbish.png" width="12px">  <?php echo $locale["TEXT_VELOCITY_OF_RECOVERY"];?>: </div><div  class="base_element_information_right">+' +
                        json.energy_recovery + '</div></div>'
                }

                /*
                if(json.addrun!=null){
                    element+='<div class="base_element_information"><div class="base_element_information_left"><img src="img/star.png" width="12px"><?php echo $locale["TEXT_SCORE"];?>: </div><div  class="base_element_information_right">+'+json.addscore+'</div></div>'
                }
                */
                element += "</div>"

                $("#window_text_" + this.id).append(element)
            }
            $("#window_notification_" + this.id).slideDown(1300)



        }




    }



    class WindowFinishBattle {
        constructor(name, text, json) {
            this.name = name;
            this.text = text;
            this.id = index_notification++;
            $("#notification").append('<div class="window" style="display:none;" id="window_notification_' + this
                .id +
                '"><center>                  <h1 class="window_h1">                      <div class="window_name">' +
                this.name + '</div>                  </h1></center><div id="window_text_' + this.id +
                '" class="window_text">' + this.text +
                '</div><div class="window_button"><a id="base_level_info_level" onclick=\'$("#window_notification_' +
                this.id +
                '").slideUp(500);setTimeout(function(){document.getElementById("window_notification_' + this
                .id +
                '").remove();exit();},500)\'                      class="dws-submit"><?php echo $locale["BUTTON_CLOSE"];?></a>  <a id="base_level_info_level" onclick=\'$("#window_notification_' +
                this.id +
                '").slideUp(500);setTimeout(function(){document.getElementById("window_notification_' + this
                .id +
                '").remove();nextLevel = false;trainInit();},500)\'                      class="dws-submit"><?php echo $locale['TEXT_NEXT'];?></a>              </div>          </div>'
            );
            if (json != null) {
                var element =
                    '<div  class="base_element" style="border-left: 1px solid;border-right: 1px solid;"><div class="base_element_information"><div class="base_element_information_left"><img src="img/coin.png" width="12px"> <?php echo $locale["TEXT_MONEY"];?>: </div><div  class="base_element_information_right">+' +
                    json.addmoney +
                    '</div></div>               <div class="base_element_information"><div class="base_element_information_left"><img src="img/star.png" width="12px"><?php echo $locale["TEXT_SCORE"];?>: </div><div  class="base_element_information_right">+' +
                    json.addscore + '</div></div> '

                /*
                if(json.addrun!=null){
                    element+='<div class="base_element_information"><div class="base_element_information_left"><img src="img/star.png" width="12px"><?php echo $locale["TEXT_SCORE"];?>: </div><div  class="base_element_information_right">+'+json.addscore+'</div></div>'
                }
                */
                element += "</div>"

                $("#window_text_" + this.id).append(element)
            }



            $("#window_notification_" + this.id).slideDown(1300)
            var windowFinishBattle = this;
            if (document.getElementById("window_notification_" + windowFinishBattle.id) != null) {
                setTimeout(function() {
                    $("#window_notification_" + windowFinishBattle.id).slideUp(1000);
                    setTimeout(function() {
                        if (document.getElementById("window_notification_" + windowFinishBattle
                                .id) != null) {
                            document.getElementById("window_notification_" + windowFinishBattle.id)
                                .remove()
                        }
                    }, 1000)
                }, 4000);
            }
        }
    }



    class WindowFinishBattleOver {
        constructor(name, text, json) {
            this.name = name;
            this.text = text;
            this.id = index_notification++;
            $("#notification").append('<div class="window" style="display:none;" id="window_notification_' + this
                .id +
                '"><center>                  <h1 class="window_h1">                      <div class="window_name">' +
                this.name + '</div>                  </h1></center><div id="window_text_' + this.id +
                '" class="window_text">' + this.text +
                '</div><div class="window_button"><a id="base_level_info_level" onclick=\'$("#window_notification_' +
                this.id +
                '").slideUp(500);setTimeout(function(){document.getElementById("window_notification_' + this
                .id +
                '").remove();exit();},500)\'                      class="dws-submit"><?php echo $locale["BUTTON_CLOSE"];?></a>  <a id="base_level_info_level" onclick=\'$("#window_notification_' +
                this.id +
                '").slideUp(500);setTimeout(function(){document.getElementById("window_notification_' + this
                .id +
                '").remove();nextLevel = false;trainInit();},500)\'                      class="dws-submit">Again</a>              </div>          </div>'
            );
            if (json != null) {
                var element =
                    '<div  class="base_element" style="border-left: 1px solid;border-right: 1px solid;"><div class="base_element_information"><div class="base_element_information_left"><img src="img/coin.png" width="12px"> <?php echo $locale["TEXT_MONEY"];?>: </div><div  class="base_element_information_right">' +
                    json.addmoney +
                    '</div></div>               <div class="base_element_information"><div class="base_element_information_left"><img src="img/star.png" width="12px"><?php echo $locale["TEXT_SCORE"];?>: </div><div  class="base_element_information_right">' +
                    json.addscore + '</div></div> '

                /*
                if(json.addrun!=null){
                    element+='<div class="base_element_information"><div class="base_element_information_left"><img src="img/star.png" width="12px"><?php echo $locale["TEXT_SCORE"];?>: </div><div  class="base_element_information_right">+'+json.addscore+'</div></div>'
                }
                */
                element += "</div>"

                $("#window_text_" + this.id).append(element)
            }



            $("#window_notification_" + this.id).slideDown(1300)
            var windowFinishBattle = this;
            if (document.getElementById("window_notification_" + windowFinishBattle.id) != null) {
                setTimeout(function() {
                    $("#window_notification_" + windowFinishBattle.id).slideUp(1000);
                    setTimeout(function() {
                        if (document.getElementById("window_notification_" + windowFinishBattle
                                .id) != null) {
                            document.getElementById("window_notification_" + windowFinishBattle.id)
                                .remove()
                        }
                    }, 1000)
                }, 4000);
            }
        }
    }


    class LoaderView {
        constructor() {
            this.element = "loader_view";
            this.doc = document.getElementById("loader_view");
            //this.interval;
            this.array = [
                "", ".", "..", "...", "....", "....."
            ]
            this.i = 0;
            this.loader = new Array();
            this.inited = false;

        }
        add() {
            this.loader.push(false)
            return this.loader.length - 1;
        }
        init() {
            if (!this.inited) {
                var loader = this;
                this.inited = true;
                this.doc.style = "display:block"
                this.interval = setInterval(function() {
                    loader.i++;
                    if (loader.i >= loader.array.length) loader.i = 0;
                    document.getElementById("loader_view_loader").innerHTML =
                        "<?php echo $locale["TEXT_LOADING"];?> " + loader.array[
                            loader.i]
                    if (loader.loader.length > 0) {
                        var remove = true;
                        for (var i = 0; i < loader.loader.length; i++) {
                            if (loader.loader[i] == false)
                                remove = false;
                        }
                        if (remove) {
                            loader.loader = new Array();
                            loader.stop();
                        }
                    }
                }, 500);

            }
        }
        stop() {
            clearInterval(this.interval)
            this.doc.style = "display:none"
            this.inited = false;
        }
        remove(jz) {
            if (this.loader.length > 0)
                this.loader[jz] = true;

        }
    }

    function isMobile() {
        var isMobile = false; //initiate as false
        // device detection
        if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i
            .test(navigator.userAgent) ||
            /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
            .test(navigator.userAgent.substr(0, 4))) {
            isMobile = true;
        }
        return isMobile;

    }

    function pause_resume() {
        var element = document.getElementById("button_pause_resume")
        if (element.innerHTML == "<?php echo $locale["BUTTON_PAUSE"];?>") {
            connection.send("battle;pause")
            element.innerHTML = "<?php echo $locale["BUTTON_RESUME"];?>"
        } else {
            connection.send("battle;resume")
            element.innerHTML = "<?php echo $locale["BUTTON_PAUSE"];?>"
        }
    }

    function pause_pause() {
        var element = document.getElementById("button_pause_resume")
        if (element.innerHTML == "<?php echo $locale["BUTTON_PAUSE"];?>") {
            connection.send("battle;pause")
            element.innerHTML = "<?php echo $locale["BUTTON_RESUME"];?>"
        }
    }



    function resume_resume() {
        var element = document.getElementById("button_pause_resume")
        if (element.innerHTML == "<?php echo $locale["BUTTON_RESUME"];?>") {

            connection.send("battle;resume")
            element.innerHTML = "<?php echo $locale["BUTTON_PAUSE"];?>"
        }
    }


    function checkNpc(id) {
        var p = npcMap.get(id)
        return p;
    }

    function trainInit() {
        document.getElementById("base").style = "display:none;";
        // document.getElementById("train").style = "";
        connection.send("lobby;train;" + window.innerWidth + ";" + window.innerHeight)
    }

    function getDataTrain() {
        //document.getElementById("base").style = "display:none;";
        // document.getElementById("train").style = "";
        connection.send("lobby;train_get;" + window.innerWidth + ";" + window.innerHeight)
    }
    class Train {
        constructor() {

        }
    }
    class ActionListener {
        constructor() {
            this.action = function() {};

        }
    }


    function getBreathofPlayer() {
        var jsonPlayerFromBase = getPlayerIs();


        var breath = jsonPlayerFromBase.breath[0].id;
        return breath;
    }



    class WindowLevel {
        constructor() {

            this.element = ("base_level_info");


        }
        init() {
            var jsonPlayer = player.json;
            var jsonPlayerFromBase = getPlayerIs();


            var id = jsonPlayerFromBase.id;
            var type = jsonPlayerFromBase.type;
            var breath = jsonPlayerFromBase.breath[0].id;


            var jsonCharcter = playerPreviewController.hash.get(id).json;
            var jsonCharcterObject = playerPreviewController.hash.get(id);

            var jsonBreath = breathPreviewController.hash.get(breath).json;
            document.getElementById("base_level_info_name").innerHTML = jsonCharcterObject.name;
            document.getElementById("base_heart").innerHTML = jsonCharcter.levels[type].health;
            document.getElementById("base_energy").innerHTML = jsonCharcter.levels[type].energy
            document.getElementById("base_power").innerHTML = jsonCharcter.levels[type].power
            document.getElementById("base_running_distance").innerHTML = jsonCharcter.levels[type].run
            document.getElementById("base_velocity_of_recovery").innerHTML = jsonCharcter.levels[type]
                .energy_recovery
            document.getElementById("base_speed").innerHTML = jsonCharcter.levels[type].speed
            document.getElementById("base_score_player").innerHTML = jsonPlayerFromBase.score
            document.getElementById("base_coins").innerHTML = jsonPlayer.money
            //base_rang
            document.getElementById("base_rang").innerHTML = rangArray[jsonPlayer.rang]

            // console.log(jsonPlayer)
            $("#" + this.element).slideDown(500)

            document.getElementById("base_styles").innerHTML = "";

            for (var i = 0; i < jsonPlayerFromBase.breath[0].styles.length; i++) {

                var index = jsonPlayerFromBase.breath[0].styles[i];
                var style_name = jsonBreath.styles[index]["des<?php echo $lan;?>"];
                if (images.get(breath + "_" + index) == null) continue;
                var style_img_src = images.get(breath + "_" + index).src;
                if (jsonBreath.styles[index].none != null && jsonBreath.styles[index].none == true) continue;
                var html = '<div class="element_of_info"><img src="' + style_img_src +
                    '" style=" border-radius: 10px;     margin-left: 10%;      width: 80%;  ">      <div class="element_of_text">' +
                    style_name + '</div>      </div>'
                $("#base_styles").append(html)
            }


        }


        inited() {
            var jsonPlayer = player.json;
            var jsonPlayerFromBase = getPlayerIs();


            var id = jsonPlayerFromBase.id;
            var type = jsonPlayerFromBase.type;
            var breath = jsonPlayerFromBase.breath[0].id;


            var jsonCharcter = playerPreviewController.hash.get(id).json;
            var jsonBreath = breathPreviewController.hash.get(breath).json;
            var jsonCharcterObject = playerPreviewController.hash.get(id);

            document.getElementById("base_level_info_name").innerHTML = jsonCharcterObject.name;
            document.getElementById("base_heart").innerHTML = jsonCharcter.levels[type].health;
            document.getElementById("base_energy").innerHTML = jsonCharcter.levels[type].energy
            document.getElementById("base_power").innerHTML = jsonCharcter.levels[type].power
            document.getElementById("base_running_distance").innerHTML = jsonCharcter.levels[type].run
            document.getElementById("base_velocity_of_recovery").innerHTML = jsonCharcter.levels[type]
                .energy_recovery
            document.getElementById("base_speed").innerHTML = jsonCharcter.levels[type].speed
            document.getElementById("base_score_player").innerHTML = jsonPlayerFromBase.score
            document.getElementById("base_coins").innerHTML = jsonPlayer.money
            //base_rangvar jsonPlayer = player.json.rang;
            document.getElementById("base_rang").innerHTML = rangArray[jsonPlayer.rang]

            // console.log(jsonPlayer)
            //$("#" + this.element).slideDown(500)

            document.getElementById("base_styles").innerHTML = "";

            for (var i = 0; i < jsonPlayerFromBase.breath[0].styles.length; i++) {
                if (jsonBreath.styles[index] == null) continue;

                var index = jsonPlayerFromBase.breath[0].styles[i];
                var style_name = jsonBreath.styles[index].des;


                if (jsonBreath.styles[index].none != null && jsonBreath.styles[index].none == true) continue;


                var style_img_src = images.get(breath + "_" + index).src;

                var html = '<div class="element_of_info"><img src="' + style_img_src +
                    '" style=" border-radius: 10px;     margin-left: 10%;      width: 80%;  ">      <div class="element_of_text">' +
                    style_name + '</div>      </div>'
                $("#base_styles").append(html)
            }


        }

        initData(players) {
            var jsonPlayer = player.json;
            var jsonPlayerFromBase = players;


            var id = jsonPlayerFromBase.id;
            var type = jsonPlayerFromBase.type;
            var breath = jsonPlayerFromBase.breath[0].id;


            var jsonCharcter = playerPreviewController.hash.get(id).json;
            var jsonBreath = breathPreviewController.hash.get(breath).json;
            var jsonCharcterObject = playerPreviewController.hash.get(id);

            document.getElementById("base_level_info_name").innerHTML = jsonCharcterObject.name;
            document.getElementById("base_heart").innerHTML = jsonCharcter.levels[type].health;
            document.getElementById("base_energy").innerHTML = jsonCharcter.levels[type].energy
            document.getElementById("base_power").innerHTML = jsonCharcter.levels[type].power
            document.getElementById("base_running_distance").innerHTML = jsonCharcter.levels[type].run
            document.getElementById("base_velocity_of_recovery").innerHTML = jsonCharcter.levels[type]
                .energy_recovery
            document.getElementById("base_speed").innerHTML = jsonCharcter.levels[type].speed
            document.getElementById("base_score_player").innerHTML = jsonPlayerFromBase.score
            document.getElementById("base_coins").innerHTML = jsonPlayer.money
            //base_rang
            document.getElementById("base_rang").innerHTML = rangArray[jsonPlayer.rang]

            // console.log(jsonPlayer)
            $("#" + this.element).slideDown(500)

            document.getElementById("base_styles").innerHTML = "";

            for (var i = 0; i < jsonPlayerFromBase.breath[0].styles.length; i++) {

                var index = jsonPlayerFromBase.breath[0].styles[i];
                var style_name = jsonBreath.styles[index].des;
                if (jsonBreath.styles[index].none != null && jsonBreath.styles[index].none == true) continue;

                var style_img_src = images.get(breath + "_" + index).src;

                var html = '<div class="element_of_info"><img src="' + style_img_src +
                    '" style=" border-radius: 10px;     margin-left: 10%;      width: 80%;  ">      <div class="element_of_text">' +
                    style_name + '</div>      </div>'
                $("#base_styles").append(html)
            }


        }





        close() {
            $("#" + this.element).slideUp(500)

        }




    }

    function add_styles() {
        var jsonPlayer = player.json;
        var jsonPlayerFromBase = getPlayerIs();
        /*var id = jsonPlayerFromBase.id;
            var type = jsonPlayerFromBase.type;
            
            var jsonCharcter = playerPreviewController.hash.get(id).json;
           */
        var breath = jsonPlayerFromBase.breath[0].id;
        var jsonBreath = breathPreviewController.hash.get(breath).json;
        document.getElementById("menu_of_style").innerHTML = "";

        for (var i = 0; i < jsonPlayerFromBase.breath[0].styles.length; i++) {

            var index = jsonPlayerFromBase.breath[0].styles[i];
            if (jsonBreath.styles[index] == null) continue;
            var style_ = jsonBreath.styles[index];
            var style_name = style_["des<?php echo $lan;?>"];
            //  var style_img_src = images.get(breath + "_" + index).src;
            if (jsonBreath.styles[index].none) continue
            var html = '<div class="element_of_style" onClick="setStyle(' + i + ')" style="background-color:  ' +
                get_color_of_button_of_style(breath) + ' ;"><div>' + style_name + '</div></div>';
            $("#menu_of_style").append(html)
        }
    }

    function get_color_of_button_of_style(breath) {
        if (breath == "WATER") {
            return "#2bd2e4"
        }

        return "#2bd2e4"
    }


    function nextPlayer() {
        var jsonPlayer = player.json;
        var jsonPlayerObject = getPlayerIs();

        var jsonPlayerFromBaseIndex = getPlayerIsIndex() + 1;
        jsonPlayerObject.is = false;

        // player.json.players[jsonPlayerFromBaseIndex].is = false;

        var jsonPlayerFromBase = getPlayerIndex(jsonPlayerFromBaseIndex);

        if (jsonPlayerFromBase == null) {
            return;
        }
        connection.send("lobby;change;" + jsonPlayerFromBase.id)
        jsonPlayerFromBase.is = true;

        var pl_id = player.getPlayerIs();
        var name = playerPreviewController.hash.get(pl_id.id);


        document.getElementById("base_name").innerHTML = name.name
        document.getElementById("base_level_info_name").innerHTML = name.name

        document.getElementById("base_about").innerHTML = name.text
        document.getElementById("base_img").src = images.get(pl_id.id + "_prev").src
        var jsonPlayerFromBase = getPlayerIs()
        document.getElementById("base_level").innerHTML = "<?php echo $locale["BUTTON_LEVEL"];?> " + jsonPlayerFromBase
            .type
        windowLevel.inited()
        // windowLevel.initData(jsonPlayerFromBase)

    }


    function upgradePlayerUpdate() {
        var jsonPlayer = player.json;
        var jsonPlayerObject = getPlayerIs();




        var pl_id = player.getPlayerIs();
        var name = playerPreviewController.hash.get(pl_id.id);


        document.getElementById("base_name").innerHTML = name.name
        document.getElementById("base_level_info_name").innerHTML = name.name

        document.getElementById("base_about").innerHTML = name.text
        document.getElementById("base_img").src = images.get(pl_id.id + "_prev").src
        var jsonPlayerFromBase = getPlayerIs()
        document.getElementById("base_level").innerHTML = "<?php echo $locale["BUTTON_LEVEL"];?> " + jsonPlayerFromBase
            .type
        windowLevel.inited()
        // windowLevel.initData(jsonPlayerFromBase)

    }

    function backPlayer() {
        var jsonPlayer = player.json;
        var jsonPlayerObject = getPlayerIs();

        var jsonPlayerFromBaseIndex = getPlayerIsIndex() - 1;
        jsonPlayerObject.is = false;

        // player.json.players[jsonPlayerFromBaseIndex].is = false;

        var jsonPlayerFromBase = getPlayerIndex(jsonPlayerFromBaseIndex);

        if (jsonPlayerFromBase == null) {
            return;
        }
        connection.send("lobby;change;" + jsonPlayerFromBase.id)
        jsonPlayerFromBase.is = true;

        var pl_id = player.getPlayerIs();
        var name = playerPreviewController.hash.get(pl_id.id);


        document.getElementById("base_name").innerHTML = name.name
        document.getElementById("base_level_info_name").innerHTML = name.name

        document.getElementById("base_about").innerHTML = name.text
        document.getElementById("base_img").src = images.get(pl_id.id + "_prev").src
        var jsonPlayerFromBase = getPlayerIs()
        document.getElementById("base_level").innerHTML = "<?php echo $locale["BUTTON_LEVEL"];?> " + jsonPlayerFromBase
            .type
        windowLevel.inited()
        // windowLevel.initData(jsonPlayerFromBase)

    }

    function init() {
        var jsonPlayer = player.json;
        var jsonPlayerFromBase = getPlayerIs();


        var id = jsonPlayerFromBase.id;
        var type = jsonPlayerFromBase.type;
        var breath = jsonPlayerFromBase.breath[0].id;


        var jsonCharcter = playerPreviewController.hash.get(id).json;
        var jsonBreath = breathPreviewController.hash.get(breath).json;
        var jsonCharcterObject = playerPreviewController.hash.get(id);

        document.getElementById("base_level_info_name").innerHTML = jsonCharcterObject.name;
        document.getElementById("base_heart").innerHTML = jsonCharcter.levels[type].health;
        document.getElementById("base_energy").innerHTML = jsonCharcter.levels[type].energy
        document.getElementById("base_power").innerHTML = jsonCharcter.levels[type].power
        document.getElementById("base_running_distance").innerHTML = jsonCharcter.levels[type].run
        document.getElementById("base_velocity_of_recovery").innerHTML = jsonCharcter.levels[type].energy_recovery
        document.getElementById("base_speed").innerHTML = jsonCharcter.levels[type].speed


        document.getElementById("base_score").innerHTML = jsonPlayer.score
        document.getElementById("base_coins").innerHTML = jsonPlayer.money
        document.getElementById("magicKey_score").innerHTML = jsonPlayer.magicKey
        //base_rang
        document.getElementById("base_rang").innerHTML = rangArray[jsonPlayer.rang]

        // console.log(jsonPlayer)
        document.getElementById("panel_rang_img").src = images.get("rang_" + jsonPlayer.rang).src


        for (var i = 0; i < jsonPlayerFromBase.breath[0].styles.length; i++) {

            var index = jsonPlayerFromBase.breath[0].styles[i];
            if (jsonBreath.styles[index] == null) continue;
            if (jsonBreath.styles[index].none != null && jsonBreath.styles[index].none == true) continue;
            var style_name = jsonBreath.styles[index].des;

            if (images.get(breath + "_" + index) == null) continue;
            var style_img_src = images.get(breath + "_" + index).src;

            var html = '<div class="element_of_info"><img src="' + style_img_src +
                '" class="element_of_image">      <div class="element_of_text">' + style_name + '</div>      </div>'
            $("#base_styles").append(html)
        }


    }

    async function asyncImageLoader(url) {
        return await new Promise((resolve, reject) => {
            var image = new Image()
            image.src = url
            image.onload = () => resolve(image)
            image.onerror = () => reject(new Error('could not load image'))
        })
    }
    async function loadJSON(url) {
        var req = await fetch(url);
        return await req.text();
    }

    class Thread {
        constructor(interval) {
            this.interval = interval;
        }

        runnable() {
            var thread = this;
            setInterval(function() {

            }, thread.interval)
        }
        start() {
            var thread = this;
            setInterval(function() {
                thread.run();
            }, 20)
        }
    }
    class Sprite {
        constructor(img, posx, posy, w, h, dx, dy, ddx, ddy, delta) {
            this.x0 = posx;
            this.y0 = posy;

            this.ddx = ddx;
            this.ddy = ddy;
            this.w = w;
            this.h = h;
            this.delta = delta

            this.dx = dx;
            this.dy = dy;

            this.img = img;
            this.posx = posx;
            this.posy = posy;
            this.images = new Image();
            this.images.src = getImage(this.img, this.dx, this.dy, this.ddx, this.ddy, this.w, this.h);
            this.draw = function(data) {
                //     data.drawImage(this.img, this.dx, this.dy, this.ddx, this.ddy, this.posx, this.posy, this.w, this.h);
                data.drawImage(this.images, this.posx, this.posy);
            }
        }

    }



    class BackgroundMountain {
        constructor(images, canvas) {
            this.player = new Player();
            this.images = images;
            this.posx1 = 0;
            this.posx2 = this.posx1 + this.images.get("background3").width;

            this.dv = 0;


            this.posy = 0;
            this.v = 0;
            this.dv = 0;
            this.canvas = canvas;
            /*
                            this.fastMountain = new Sprite(this.images.get("mountain"), 0, canvas.height - canvas.height / 100 * 50, this.images.get("mountain").width / (this.images.get("mountain").height / (canvas.height / 100 * 60)), canvas.height / 100 * 60, 0, 0, this.images.get("mountain").width, this.images.get("mountain").height, (canvas.width - this.images.get("mountain").width / (this.images.get("mountain").height / (canvas.height / 100 * 60))))
                            this.fastMountain1 = new Sprite(this.images.get("mountain"), canvas.width - this.fastMountain.w, canvas.height - canvas.height / 100 * 50, this.images.get("mountain").width / (this.images.get("mountain").height / (canvas.height / 100 * 60)), canvas.height / 100 * 60, 0, 0, this.images.get("mountain").width, this.images.get("mountain").height, canvas.width - this.fastMountain.w)
                            this.fastMountain2 = new Sprite(this.images.get("mountain"), 2 * (canvas.width - this.fastMountain.w), canvas.height - canvas.height / 100 * 50, this.images.get("mountain").width / (this.images.get("mountain").height / (canvas.height / 100 * 60)), canvas.height / 100 * 60, 0, 0, this.images.get("mountain").width, this.images.get("mountain").height, canvas.width - this.fastMountain.w)
                            this.fastMountain3 = new Sprite(this.images.get("mountain"), (canvas.width - this.fastMountain.w) * -1, canvas.height - canvas.height / 100 * 50, this.images.get("mountain").width / (this.images.get("mountain").height / (canvas.height / 100 * 60)), canvas.height / 100 * 60, 0, 0, this.images.get("mountain").width, this.images.get("mountain").height, canvas.width - this.fastMountain.w)
            */
            this.fastMountain = new Array();

            for (var i = 0; i < 4; i++) {
                var img = this.images.get("mountain")

                var w = canvas.width / 100 * 60;
                var h = (img.height / (img.width / w)) / 100 * 90
                var dt = w / 100 * 95
                var sprite = new Sprite(img, -dt + dt * i, canvas.height - h, w, h, 0, 0, img.width, img.height,
                    dt);
                this.fastMountain.push(sprite)

            }


            this.smoke = new Sprite(this.images.get("smoke"), 0, canvas.height - (this.images.get("smoke").height /
                (this.images.get("smoke").width / (canvas.height))) / 1.5, canvas.width, this.images.get(
                "smoke").height / (this.images.get("smoke").width / (canvas.height)), 0, 0, this.images.get(
                "smoke").width, this.images.get("smoke").height, canvas.width / 100 * 90);
            this.smoke0 = new Sprite(this.images.get("smoke"), -this.smoke.delta, canvas.height - (this.images.get(
                    "smoke").height / (this.images.get("smoke").width / (canvas.height))) / 1.5, canvas.width,
                this.images.get("smoke").height / (this.images.get("smoke").width / (canvas.height)), 0, 0, this
                .images.get("smoke").width, this.images.get("smoke").height, canvas.width / 100 * 90);
            this.smoke1 = new Sprite(this.images.get("smoke"), this.smoke.delta, canvas.height - (this.images.get(
                    "smoke").height / (this.images.get("smoke").width / (canvas.height))) / 1.5, canvas.width,
                this.images.get("smoke").height / (this.images.get("smoke").width / (canvas.height)), 0, 0, this
                .images.get("smoke").width, this.images.get("smoke").height, canvas.width / 100 * 90);


            this.sky = new Sprite(this.images.get("background2"), 0, 0, canvas.width, canvas.height, 0, 0, this
                .images.get("background2").width, this.images.get("background2").height, null)

            this.mountain2 = new Sprite(this.images.get("mountain2"), 0, canvas.height - canvas.height / 100 * 80,
                this.images.get("mountain2").width / (this.images.get("mountain2").height / (canvas.height /
                    100 * 90)), canvas.height / 100 * 90, 0, 0, this.images.get("mountain2").width, this.images
                .get("mountain2").height, this.images.get("mountain2").width / (this.images.get("mountain2")
                    .height / (canvas.height / 100 * 90)) / 100 * 80)
            this.mountain21 = new Sprite(this.images.get("mountain2"), -this.mountain2.delta, canvas.height - canvas
                .height / 100 * 80, this.images.get("mountain2").width / (this.images.get("mountain2").height /
                    (canvas.height / 100 * 90)), canvas.height / 100 * 90, 0, 0, this.images.get("mountain2")
                .width, this.images.get("mountain2").height, this.mountain2.delta)
            this.mountain22 = new Sprite(this.images.get("mountain2"), this.mountain2.delta, canvas.height - canvas
                .height / 100 * 80, this.images.get("mountain2").width / (this.images.get("mountain2").height /
                    (canvas.height / 100 * 90)), canvas.height / 100 * 90, 0, 0, this.images.get("mountain2")
                .width, this.images.get("mountain2").height, this.mountain2.delta)

            this.cloud2 = new Sprite(this.images.get("cloud2"), this.images.get("cloud").width / (this.images.get(
                    "cloud").height / (canvas.height / 100 * 28)), 0, this.images.get("cloud2").width / (this
                    .images.get("cloud2").height / (canvas.height / 100 * 28)), canvas.height / 100 * 28, 0, 0,
                this.images.get("cloud2").width, this.images.get("cloud2").height, null)
            this.cloudy = new Array();
            var size_cloud = 45;
            for (var i = 1; i < 16; i++) {
                var img = (this.images.get(
                    "cloud2")); // i%2==0?(this.images.get("cloud")):(this.images.get("cloud2"))
                var w = img.width / (img.height / (canvas.height / 100 * size_cloud));
                var cloud = new Sprite(img, (-5 * w) + w * i, i % 2 == 0 ? (canvas.height / 100 * -10) : (canvas
                    .height / 100 * 5) /*size_cloud/3*2)*/ , img.width / (img.height / (canvas.height /
                    100 * size_cloud)), canvas.height / 100 * size_cloud, 0, 0, img.width, img.height, null)
                //cloud.posx = cloud.w*i
                cloud.delta = w * 2
                // cloud.delta = 2*(this.images.get("cloud2").width / (this.images.get("cloud2").height / (canvas.height / 100 * size_cloud)));
                this.cloudy.push(cloud)
            }
            this.cloud = new Sprite(this.images.get("cloud"), 0, 0, this.images.get("cloud").width / (this.images
                    .get("cloud").height / (canvas.height / 100 * 25)), canvas.height / 100 * 25, 0, 0, this
                .images.get("cloud").width, this.images.get("cloud").height, null)
            //this.action = function(data){}
            this.action = function(data) {
                //this.action1 = function(data) {


                /*  if (Math.abs(this.fastMountain.posx - this.fastMountain.x0) >= this.fastMountain.delta) {
                          this.fastMountain.posx = this.fastMountain.x0;
                      }
                      if (Math.abs(this.fastMountain1.posx - this.fastMountain1.x0) >= this.fastMountain1.delta) {
                          this.fastMountain1.posx = this.fastMountain1.x0;
                      }
  
                      if (Math.abs(this.fastMountain2.posx - this.fastMountain2.x0) >= this.fastMountain2.delta) {
                          this.fastMountain2.posx = this.fastMountain2.x0;
                      }
                      if (Math.abs(this.fastMountain3.posx - this.fastMountain3.x0) >= this.fastMountain3.delta) {
                          this.fastMountain3.posx = this.fastMountain3.x0;
                      }
                      */


                if (Math.abs(this.mountain2.posx - this.mountain2.x0) >= this.mountain2.delta) {
                    this.mountain2.posx = this.mountain2.x0;
                }

                if (Math.abs(this.mountain21.posx - this.mountain21.x0) >= this.mountain21.delta) {
                    this.mountain21.posx = this.mountain21.x0;
                }

                if (Math.abs(this.mountain22.posx - this.mountain22.x0) >= this.mountain22.delta) {
                    this.mountain22.posx = this.mountain22.x0;
                }





                if (Math.abs(this.smoke.posx - this.smoke.x0) >= this.smoke.delta) {
                    this.smoke.posx = this.smoke.x0;
                }
                if (Math.abs(this.smoke1.posx - this.smoke1.x0) >= this.smoke1.delta) {
                    this.smoke1.posx = this.smoke1.x0;
                }
                if (Math.abs(this.smoke0.posx - this.smoke0.x0) >= this.smoke0.delta) {
                    this.smoke0.posx = this.smoke0.x0;
                }



                // console.log("dt "+(this.fastMountain.posx-this.fastMountain.x0)+" "+this.fastMountain.delta)

                // console.log("dt "+(this.fastMountain1.posx-this.fastMountain1.x0)+" "+this.fastMountain1.delta)

                this.mountain2.posx += this.v / 2.3;
                this.mountain21.posx += this.v / 2.3;
                this.mountain22.posx += this.v / 2.3;
                if (this.moving)
                    this.v += this.dv;

                if (this.v >= 0.5) this.v = 0.2;
                if (this.v <= -0.5) this.v = -0.2;
                /*  this.smoke.posx -= this.v / 2;
                  this.smoke0.posx -= this.v / 2;
                  this.smoke1.posx -= this.v / 2;
                     */



                /*
                this.fastMountain.posx -= this.v;
                this.fastMountain1.posx -= this.v;

                this.fastMountain2.posx -= this.v;
                this.fastMountain3.posx -= this.v;
                */




                /* 
                   if(this.v>0)
                    if(this.posx2-this.v<=0)
                    {
                        this.posx1 = 0;
                        this.posx2 = this.images.get("background1").width;
                    }else{
                        this.posx1-=this.v
                        this.posx2-=this.v
                    }
                    
                   if(this.posx1>=0)this.posx1=0;
                    */
                /* if(this.posx1>=this.images.get("background1").width)
                this.posx1=0//-this.images.get("background1").width;

                if(this.posx2>=this.images.get("background1").width)
                this.posx2=0;//this.posx1+this.images.get("background1").width;




                
                 /*

                this.posx3+=this.v;
                this.posx4+=this.v;
                
                if(this.posx3>=this.images.get("background1").width)
                this.posx3=posx4-this.images.get("background1").width;

                if(this.posx4>=this.images.get("background1").width)
                this.posx4=this.posx3-this.images.get("background1").width;
                */

                //  this.posx1+=this.v;
                //this.posx2+=this.v;
                // this.posy+=this.dv;
                // data.drawImage(this.images.get("background1"),this.posx1,this.posy);
                // data.drawImage(this.images.get("background1"),this.posx2,this.posy);
                // data.drawImage(this.images.get("background2"),0,0,this.images.get("background2").width,this.images.get("background2").height,0,0,canvas.width,canvas.height);
                // data.drawImage(this.images.get("mountain2"),0,0,this.images.get("mountain2").width,this.images.get("mountain2").height,0,canvas.height-canvas.height/100*90,this.images.get("mountain2").width/(this.images.get("mountain2").height/(canvas.height/100*90)),canvas.height/100*90);
                /*
                     data.drawImage(this.images.get("mountain"),0,0,this.images.get("mountain").width,this.images.get("mountain").height,0,canvas.height-canvas.height/100*60,this.images.get("mountain").width/(this.images.get("mountain").height/(canvas.height/100*60)),canvas.height/100*60);

                     data.drawImage(this.images.get("mountain"),0,0,this.images.get("mountain").width,this.images.get("mountain").height,this.images.get("mountain").width/(this.images.get("mountain").height/(canvas.height/100*60))+100,canvas.height-canvas.height/100*60,this.images.get("mountain").width/(this.images.get("mountain").height/(canvas.height/100*60)),canvas.height/100*60);
                    */


                // data.drawImage(this.images.get("smoke"),0,0,this.images.get("smoke").width,this.images.get("smoke").height,0,canvas.height-(this.images.get("smoke").height/(this.images.get("smoke").width/(canvas.height)))/1.5,canvas.width,this.images.get("smoke").height/(this.images.get("smoke").width/(canvas.height)));

                //data.drawImage(this.images.get("cloud"),0,0,this.images.get("cloud").width,this.images.get("cloud").height,0,0,this.images.get("cloud").width/(this.images.get("cloud").height/(canvas.height/100*25)),canvas.height/100*25);
                this.sky.draw(data)
                this.mountain2.draw(data)
                this.mountain21.draw(data)
                this.mountain22.draw(data)

                for (var i = 0; i < 4; i++) {
                    this.fastMountain[i].posx -= this.v;
                    var el = this.fastMountain[i]
                    if (Math.abs(el.posx - el.x0) >= el.delta) {
                        el.posx = el.x0;


                    }
                    this.fastMountain[i].draw(data)
                }
                /* 
                 this.fastMountain3.draw(data)
                 this.fastMountain.draw(data)
                 this.fastMountain1.draw(data)
                 this.fastMountain2.draw(data)
                */



                //  this.smoke.draw(data)
                // this.smoke0.draw(data)
                // this.smoke1.draw(data)
                // this.cloud.draw(data)
                for (var i = 0; i < this.cloudy.length; i++) {

                    this.cloudy[i].draw(data)
                    this.cloudy[i].posx -= this.v;
                    this.cloudy[i].posx -= 0.3;
                    if (Math.abs(this.cloudy[i].posx - this.cloudy[i].x0) >= this.cloudy[i].delta) {
                        this.cloudy[i].posx = this.cloudy[i].x0;


                    }
                }
                // this.cloud2.draw(data)
                // data.drawImage(this.images.get("cloud2"),0,0,this.images.get("cloud2").width,this.images.get("cloud2").height,this.images.get("cloud").width/(this.images.get("cloud").height/(canvas.height/100*25)),0,this.images.get("cloud2").width/(this.images.get("cloud2").height/(canvas.height/100*25)),canvas.height/100*25);
                if (this.init_storm) {
                    var v_return = 0.01;
                    if (this.strom == 1) {
                        this.v -= v_return;
                        if (this.v <= 0) {
                            this.v = 0;
                            this.init_storm = false;
                        }
                    }
                    if (this.strom == -1) {
                        this.v += v_return;
                        if (this.v >= 0) {
                            this.v = 0;
                            this.init_storm = false;
                        }
                    }
                }


            }
            this.move = function(x, y) {
                this.v = -x;
                // this.posx2-=x;
                this.dv = -y;
            }
            this.dvv = function(x) {
                if (this.moving) {
                    if (x > 0) {
                        this.strom = 1;

                    }
                    if (x < 0) {
                        this.strom = -1
                    }
                    if (x == 0) {
                        this.strom = 0;
                    }
                    this.init_storm = false;

                    this.dv = x;
                } else {
                    this.undvv();
                }
            }
            this.undvv = function() {
                this.init_storm = true;
                this.dv = 0;
            }
        }
    }

    class ImageLoader {
        constructor(json) {
            json = JSON.parse(json);
            this.json = json;

        }
        async loadAll(images) {

            /* images.set("ground", await this.asyncImageLoader(this.json.ground))
                images.set("grass", await this.asyncImageLoader(this.json.grass))
                images.set("background1", await this.asyncImageLoader(this.json.background1))
                images.set("background2", await this.asyncImageLoader(this.json.background2))
                images.set("background3", await this.asyncImageLoader(this.json.background3))
                images.set("mountain", await this.asyncImageLoader(this.json.mountain))
                images.set("mountain2", await this.asyncImageLoader(this.json.mountain2))
                images.set("cloud", await this.asyncImageLoader(this.json.cloud))
                images.set("cloud2", await this.asyncImageLoader(this.json.cloud2))
                images.set("smoke", await this.asyncImageLoader(this.json.smoke))
             */
            var key = Object.keys(this.json);
            for (var i = 0; i < key.length; i++) {
                images.set(key[i], await this.asyncImageLoader(this.json[key[i]]))
            }

        }
        async loadImage(url, name) {
            images.set(name, await this.asyncImageLoader(url))
        }


        async asyncImageLoader(url) {
            url = url; //+"?id="+Math.random();
            return await new Promise((resolve, reject) => {
                var image = new Image()
                image.src = url
                image.onload = () => resolve(image)
                image.onerror = () => reject(new Error('could not load image'))
            })
        }
    }

    function getImage(image, x1, y1, w1, h1, w, h) {

        var canvas = document.createElement("canvas");
        var ctx = canvas.getContext("2d");
        canvas.width = w;
        canvas.height = h;
        // Actual resizing
        ctx.drawImage(image, x1, y1, w1, h1, 0, 0, w, h);

        // Show resized image in preview element
        var dataurl = canvas.toDataURL("image/png");

        return dataurl;
    }
    class MapModel {
        constructor(arr, images, canvas) {
            this.finish = false;
            this.images = images;
            this.canvas = canvas
            this.size = SIZE;
            this.player = new Player();
            var size = SIZE;
            var listimg = images;
            this.arr = arr;
            this.lll = 1;
            //console.log(images)
            this.anotherPlayers = new Array();
            this.multiplayer = false;

            var image_coin = this.images.get("coin")


            var image_ground_tile = this.images.get("ground_tile");
            var image_grass = this.images.get("grass");
            var image_ground = this.images.get("ground");


            var image_grass_piece = null; //this.images.get("grass_tile");
            var image_ground_piece = null; // this.images.get("grass_tile");



            var igd = this.images.get("glizinia");
            var image_glizinia = new Image();
            image_glizinia.src = getImage(igd, 0, 0, igd.width, igd.height, START_SIZE * 8 / dt, START_SIZE * 8 /
                dt)

            var igd2 = this.images.get("glizinia2")

            var image_glizinia2 = new Image();
            image_glizinia2.src = getImage(igd2, 0, 0, igd2.width, igd2.height, START_SIZE * 8 / dt, START_SIZE *
                8 / dt)

            var it = this.images.get("trees")
            var image_trees = new Image();
            image_trees.src = getImage(it, 0, 0, it.width, it.height, START_SIZE * 8 / dt, START_SIZE * 8 / dt)


            var image_heart_src = getImage(this.images.get("heart"), 0, 0, this.images.get("heart").width, this
                .images.get("heart").height, 16 / dt, 16 / dt)
            var image_heart = new Image()
            image_heart.src = image_heart_src


            var image_amor_src = getImage(this.images.get("amor"), 0, 0, this.images.get("amor").width, this.images
                .get("amor").height, 16 / dt, 16 / dt)
            var image_health_src = getImage(this.images.get("health"), 0, 0, this.images.get("health").width, this
                .images.get("health").height, 16 / dt, 16 / dt)
            var image_power_src = getImage(this.images.get("power"), 0, 0, this.images.get("power").width, this
                .images.get("power").height, 16 / dt, 16 / dt)
            var image_nitro_src = getImage(this.images.get("nitro"), 0, 0, this.images.get("nitro").width, this
                .images.get("nitro").height, 16 / dt, 16 / dt)


            var image_amor = new Image();
            image_amor.src = image_amor_src



            var image_health = new Image();
            image_health.src = image_health_src



            var image_power = new Image();
            image_power.src = image_power_src



            var image_nitro = new Image();
            image_nitro.src = image_nitro_src



            var image_house1 = new Image()
            image_house1.src = getImage(this.images.get("house1"), 0, 0, this.images.get("house1").width, this
                .images.get("house1").height, START_SIZE * 12 / dt, START_SIZE * 8 / dt);
            var image_house2 = new Image()
            image_house2.src = getImage(this.images.get("house2"), 0, 0, this.images.get("house2").width, this
                .images.get("house2").height, START_SIZE * 12 / dt, START_SIZE * 8 / dt);
            var image_house3 = new Image()
            image_house3.src = getImage(this.images.get("house3"), 0, 0, this.images.get("house3").width, this
                .images.get("house3").height, START_SIZE * 12 / dt, START_SIZE * 8 / dt);








            this.action = function(data) {
                var playerPositionX = player.position.x
                var playerPositionY = player.position.y;
                for (var i = Math.floor(playerPositionX / SIZE - this.canvas.width / SIZE / 3) - 8; i < Math
                    .floor(playerPositionX / SIZE + this.canvas.width / SIZE / 3 * 2.1); i++) {
                    if (i < 0 || i >= arr.length) {
                        continue;
                    }

                    for (var j = Math.floor(playerPositionY / SIZE - this.canvas.height / SIZE / 3 * 1.18 + (
                            isMobile() == true ? 0.7 : 0)); j < Math.floor(playerPositionY / SIZE + this.canvas
                            .height / SIZE / 3 * (hightTop + (isMobile() == true ? 0.7 : 0.3))) + 8; j++) {
                        if (j < 0 || j >= arr[0].length) {
                            continue;
                        }
                        var posx = i * size - playerPositionX + this.canvas.width / 3
                        var posy = playerPositionY * -1 + j * size + this.canvas.height / 3 * hightTop;


                        if (arr[i][j] == 2 || arr[i][j] == 1) {

                            if (arr[i][j] == 2) {

                                if (i > 0 && arr[i - 1][j] == 2 && arr[i][j - 1] == 2) {
                                    data.drawImage(image_ground_tile, 0, 0, image_ground_tile.width,
                                        image_ground_tile.height, posx, posy, SIZE, SIZE)

                                } else if (1 + i < arr.length && arr[i + 1][j] == 2 && arr[i][j - 1] == 2) {
                                    data.drawImage(image_ground_tile, 0, 0, image_ground_tile.width,
                                        image_ground_tile.height, posx, posy, SIZE, SIZE)

                                } else if (arr[i][j + 1] == 2 && i + 1 < arr.length && arr[i + 1][j] == 2) {
                                    data.drawImage(image_grass, 0, 18 * 3, 15, 15, posx, posy, SIZE, SIZE)

                                } else if (arr[i][j + 1] == 2 && j + 1 < arr[0].length && arr[i - 1][j] == 2 &&
                                    i > 0) {
                                    data.drawImage(image_grass, 18, 18 * 3, 15, 15, posx, posy, SIZE, SIZE)

                                } else {
                                    if (image_grass_piece == null) {
                                        image_grass_piece = new Image(SIZE, SIZE);
                                        image_grass_piece.src = getImage(image_grass, 19, 0, 14, 15, SIZE, SIZE)

                                    }
                                    data.drawImage(image_grass_piece, posx, posy);
                                }
                            }
                            if (arr[i][j] == 1) {

                                if (image_ground_piece == null) {
                                    image_ground_piece = new Image(SIZE, SIZE);
                                    image_ground_piece.src = getImage(image_ground_tile, 0, 0, image_ground_tile
                                        .width, image_ground_tile.height, SIZE, SIZE)

                                }
                                data.drawImage(image_ground_tile, 0, 0, image_ground_tile.width,
                                    image_ground_tile.height, posx, posy, SIZE, SIZE)

                            }
                        }
                        var opx = posx;
                        var opy = posy;
                        if (arr[i][j] == 3) {
                            data.drawImage(image_glizinia, opx, opy - START_SIZE * 6 / dt)
                        }
                        if (arr[i][j] == 9) {
                            data.drawImage(image_glizinia2, opx, opy - START_SIZE * 6.5 / dt);

                        }
                        if (arr[i][j] == 8) {

                            data.drawImage(image_trees, opx, opy - START_SIZE * 6 / dt)
                        }


                        if (arr[i][j] == 200) {

                            data.drawImage(image_coin, 0, 0, image_coin.width, image_coin.height, posx, posy,
                                SIZE, SIZE)

                        }
                        if (arr[i][j] == 4) {


                            data.drawImage(image_health, 0, 0, image_health.width, image_health.height, posx,
                                posy, SIZE, SIZE)

                        }
                        if (arr[i][j] == 5) {

                            data.drawImage(image_power, 0, 0, image_power.width, image_power.height, posx, posy,
                                SIZE, SIZE)

                        }

                        if (arr[i][j] == 6) {

                            data.drawImage(image_amor, 0, 0, image_amor.width, image_amor.height, posx, posy,
                                SIZE, SIZE)

                        }


                        if (arr[i][j] == 7) {
                            data.drawImage(image_nitro, 0, 0, image_nitro.width, image_nitro.height, posx, posy,
                                SIZE, SIZE)

                        }
                        if (arr[i][j] == 11) {
                            data.drawImage(image_house1, posx, posy - START_SIZE * 7 / dt)
                        }
                        if (arr[i][j] == 12) {
                            data.drawImage(image_house2, posx, posy - START_SIZE * 6 / dt)
                        }
                        if (arr[i][j] == 13) {
                            data.drawImage(image_house3, posx, posy - START_SIZE * 7 / dt)
                        }








                    }
                }
                //   ctx.fillStyle = '#ffffff'
                // ctx.fillRect(0, 0, example.width, example.height);
                // #1a73e8
                //#1a0dab
                data.fillStyle = "#1a73e8"
                ctx.fill(new Path2D(roundedRectPath(this.canvas.width / 3 - player.w * 0.25, this.canvas
                    .height / 3 * hightTop - START_SIZE / dt, player.w * 1.5 / dt, START_SIZE / 2 /
                    dt)));
                ctx.fillStyle = '#000000'
                ctx.stroke(new Path2D(roundedRectPath(this.canvas.width / 3 - player.w * 0.25, this.canvas
                    .height / 3 * hightTop - START_SIZE / dt, player.w * 1.5 / dt, START_SIZE / 2 /
                    dt)));
                if (this.player.health >= 80) {
                    data.fillStyle = "#7fbf62"
                }


                if (this.player.health < 80 && this.player.health >= 50) {

                    data.fillStyle = "#1a0dab"
                }

                if (this.player.health < 50 && this.player.health >= 20) {

                    data.fillStyle = "#b77649"
                }
                if (this.player.health < 20) {
                    data.fillStyle = "#b74949"
                }
                ctx.fill(new Path2D(roundedRectPath(this.canvas.width / 3 - player.w * 0.25, this.canvas
                    .height / 3 * hightTop - START_SIZE / dt, (player.w * 1.5 * this.player.health /
                        100) / dt, START_SIZE / 2 / dt)));


                data.fillStyle = "#7f8001"
                ctx.fill(new Path2D(roundedRectPath(this.canvas.width / 3 - player.w * 0.25, this.canvas
                    .height / 3 * hightTop - START_SIZE / 2.1 / dt, player.w * 1.5 / dt,
                    START_SIZE / 2 / dt)));

                ctx.fillStyle = '#000000'
                ctx.stroke(new Path2D(roundedRectPath(this.canvas.width / 3 - player.w * 0.25, this.canvas
                    .height / 3 * hightTop - START_SIZE / 2.1 / dt, player.w * 1.5 / dt,
                    START_SIZE / 2 / dt)));

                data.fillStyle = "#d4d606"
                ctx.fill(new Path2D(roundedRectPath(this.canvas.width / 3 - player.w * 0.25, this.canvas
                    .height / 3 * hightTop - START_SIZE / 2.1 / dt, (player.w * 1.5 * this.player
                        .energy / 100) / dt, START_SIZE / 2 / dt)));




                if (this.player != null && this.player.animate != null) {
                    // data.fillRect(this.canvas.width / 3, this.canvas.height / 3 * hightTop, player.w / dt, player.h / dt);


                    var ww = 160 / 1.3;
                    var hh = 120 / 1.3;
                    var top = 0;

                    if (this.player.type == 50 && images.get(this.player.id + "_stay_top") != null) {
                        top = images.get(this.player.id + "_stay_top")
                    }
                    if (this.player.type == 51 && images.get(this.player.id + "_run_top") != null) {
                        top = images.get(this.player.id + "_run_top")
                    }
                    for (var l = 0; l < 20; l++) {
                        if (this.player.type == l) {
                            if (images.get(this.player.id + "_" + l + "_top") != null)
                                top = images.get(this.player.id + "_" + l + "_top")
                        }
                    }

                    // draw inventory and heart from this
                    var playerx = this.canvas.width / 3 - player.w * 0.25
                    var playery = this.canvas.height / 3 * hightTop - top / dt;


                    var g = 0;
                    for (var [key, value] of this.player.inventory) {
                        var element = value
                        var img_interface = null;

                        if (element == "amor") {
                            img_interface = image_amor

                        }

                        if (element == "power") {
                            img_interface = image_power

                        }

                        if (element == "nitro") {
                            img_interface = image_nitro

                        }
                        if (img_interface != null) {
                            if (this.player.inventory.size == 1) {
                                data.drawImage(img_interface, playerx + ww / dt / 4,
                                    playery - START_SIZE / 2 / dt - img_interface.height * 2 - 8 / dt);

                            }
                            if (this.player.inventory.size == 2) {
                                data.drawImage(img_interface, playerx + ww / dt / 12 * (g) + (ww / dt - ww /
                                        dt / 12 * this.player.inventory.size - img_interface.width * this
                                        .player.inventory.size) / 4, playery - START_SIZE / 2 / dt -
                                    img_interface.height * 2 - 8 / dt);

                            }
                            if (this.player.inventory.size == 3) {
                                data.drawImage(img_interface, playerx + ww / dt / 12 * (g) + (ww / dt - ww /
                                        dt / 12 * this.player.inventory.size - img_interface.width * this
                                        .player.inventory.size) / 5, playery - START_SIZE / 2 / dt -
                                    img_interface.height * 2 - 8 / dt);

                            }


                        }
                        g += 2;
                    }
                    for (var r = 0; r < this.player.heart * 2; r += 2) {
                        var img_interface = image_heart;
                        if (img_interface != null) {
                            if (this.player.heart == 1) {
                                data.drawImage(img_interface, playerx + ww / dt / 4,
                                    playery - START_SIZE / 2 / dt - img_interface.height - 3 / dt);

                            }
                            if (this.player.heart == 2) {
                                data.drawImage(img_interface, playerx + ww / dt / 12 * (r) + (ww / dt - ww /
                                        dt / 12 * this.player.heart - img_interface.width * this.player
                                        .heart) / 4, playery - START_SIZE / 2 / dt - img_interface.height -
                                    3 / dt);

                            }
                            if (this.player.heart == 3) {
                                data.drawImage(img_interface, playerx + ww / dt / 12 * (r) + (ww / dt - ww /
                                        dt / 12 * this.player.heart - img_interface.width * this.player
                                        .heart) / 5, playery - START_SIZE / 2 / dt - img_interface.height -
                                    3 / dt);

                            }

                        }
                    }

                    //to this
                    //draw animate of FLAME/WATER/THUNDER
                    player.fights.action(data)
                    if (player.animateAnimate != null) {
                        if (player.animateAnimate.side == -1) {
                            data.save()
                            data.scale(-1, 1)

                            ctx.translate(-this.canvas.width / 3 * 2 - player.w / dt, 0)
                            //  this.lll=0;
                        }
                        player.animateAnimate.draw(data);
                        if (player.animateAnimate.side == -1) {
                            data.scale(-1, 1)

                            ctx.translate(this.canvas.width / 3 * 2 + player.w / dt, 0)
                            data.restore();
                        }

                    }


                    //  if(this.lll !=0){
                    if (this.player.side == 1) {
                        data.save()
                        data.scale(-1, 1)

                        ctx.translate(-this.canvas.width / 3 * 2 - player.w / dt, 0)
                        //  this.lll=0;
                    }
                    //}






                    data.drawImage(this.player.animate, 0, 0, this.player.animate.width, this.player.animate
                        .height, this.canvas.width / 3 - ((ww - player.w) / 2 / dt), this.canvas.height /
                        3 * hightTop - top / dt, ww / dt, hh / dt)





                    // data.drawImage(this.player.animate_shot, this.canvas.width / 3 + this.player.animate_shot.width - ((ww - player.w) / 2 / dt), this.canvas.height / 3 * hightTop - top / dt)






                    if (this.player.side == 1) {
                        data.scale(-1, 1)

                        ctx.translate(this.canvas.width / 3 * 2 + player.w / dt, 0)
                        data.restore();
                    }


                }
                for (var i = 0; i < this.anotherPlayers.length; i++) {
                    var enemy_player = this.anotherPlayers[i];
                    if (enemy_player.animate == null) continue;

                    var ww = 160 / 1.3;
                    var hh = 120 / 1.3;
                    var top = 0;

                    if (enemy_player.type == 50 && images.get(enemy_player.id + "_stay_top") != null) {
                        top = images.get(enemy_player.id + "_stay_top")
                    }
                    if (enemy_player.type == 51 && images.get(enemy_player.id + "_run_top") != null) {
                        top = images.get(enemy_player.id + "_run_top")
                    }



                    for (var l = 0; l < 20; l++) {
                        if (enemy_player.type == l) {
                            if (images.get(enemy_player.id + "_" + l + "_top") != null)
                                top = images.get(enemy_player.id + "_" + l + "_top")
                        }
                    }



                    //data.fillRect(this.posx - this.player.position.x + this.canvas.width / 3, this.posy - this.player.position.y + this.canvas.height / 3 * hightTop, this.sizeX / dt, this.sizeY / dt);
                    var ppx = enemy_player.position.x - this.player.position.x + this.canvas.width / 3;
                    var ppy = enemy_player.position.y - this.player.position.y + this.canvas.height / 3 *
                        hightTop;



                    var playerx = ppx; //this.canvas.width / 3 - player.w * 0.25
                    var playery = ppy; // this.canvas.height / 3 * hightTop - top / dt;



                    data.fillStyle = "#ff0101"
                    //console.log(enemy_player.idPlayer+" "+(enemy_player.position.x - this.player.position.x + this.canvas.width / 3)+";"+(enemy_player.position.y - this.player.position.y + this.canvas.height / 3 * hightTop));
                    // data.fillRect(enemy_player.position.x - this.player.position.x + this.canvas.width / 3, enemy_player.position.y - this.player.position.y + this.canvas.height / 3 * hightTop, enemy_player.w / dt, enemy_player.h / dt);

                    //data.fillRect(posx, posy, 32 / dt, 48 / dt);
                    enemy_player.fights.action(data)
                    if (enemy_player.animateAnimate != null) {
                        if (enemy_player.side == -1) {
                            data.save()
                            data.scale(-1, 1)

                            data.translate(-example.width - (example.width - (example.width - ppx) * 2) -
                                enemy_player.w / 3 * 2 / dt, 0);
                            // console.log((example.width-(example.width-ppx)*2))
                            //console.log(-example.width+ppx)
                            //if(ppx<0 ||ppx>window.innerWidth)return;
                            // if(ppy<0 ||ppy>window.innerHeight)return;

                            //  ctx.translate(-example.width+ppx, 0)
                            //  this.lll=0;
                        }
                        enemy_player.animateAnimate.draw(data);
                        if (enemy_player.animateAnimate.side == -1) {
                            data.restore();
                        }

                    }
                    data.fillStyle = "#ff0000"
                    data.font = '24px serif';
                    data.fillText(enemy_player.login, playerx + ww / dt / 4 - 24 * enemy_player.login.length /
                        4,
                        playery - START_SIZE / 3 / dt - 8 / dt);
                    var g = 0;
                    for (var [key, value] of enemy_player.inventory) {
                        var element = value
                        var img_interface = null;

                        if (element == "amor") {
                            img_interface = image_amor

                        }

                        if (element == "power") {
                            img_interface = image_power

                        }

                        if (element == "nitro") {
                            img_interface = image_nitro

                        }
                        if (img_interface != null) {
                            if (enemy_player.inventory.size == 1) {
                                data.drawImage(img_interface, playerx + ww / dt / 4 - img_interface.width / 2,
                                    playery - START_SIZE / 2 / dt);

                            }
                            if (enemy_player.inventory.size == 2) {
                                data.drawImage(img_interface, playerx + ww / dt / 12 * (g) + (ww / dt - ww /
                                    dt / 12 * enemy_player.inventory.size - img_interface.width * this
                                    .player.inventory.size) / 8, playery - START_SIZE / 2 / dt);

                            }
                            if (enemy_player.inventory.size == 3) {
                                data.drawImage(img_interface, playerx + ww / dt / 12 * (g) + (ww / dt - ww /
                                    dt / 12 * enemy_player.inventory.size - img_interface.width *
                                    enemy_player.inventory.size) / 10, playery - START_SIZE / 2 / dt);

                            }


                        }
                        g += 2;
                    }

                    //  if(this.lll !=0){
                    if (enemy_player.side == 1) {
                        data.save()
                        data.scale(-1, 1)

                        data.translate(-example.width - (example.width - (example.width - ppx) * 2) -
                            enemy_player.w / 3 * 2 / dt - ww / dt / 4, 0);
                        // console.log((example.width-(example.width-ppx)*2))
                        //console.log(-example.width+ppx)
                        //if(ppx<0 ||ppx>window.innerWidth)return;
                        // if(ppy<0 ||ppy>window.innerHeight)return;

                        //  ctx.translate(-example.width+ppx, 0)
                        //  this.lll=0;
                    }
                    //}


                    // data.drawImage(this.player.animate, 0, 0, this.player.animate.width, this.player.animate.height, this.canvas.width / 3 - ((ww - player.w) / 2 / dt), this.canvas.height / 3 * hightTop - top / dt, ww / dt, hh / dt)

                    // data.drawImage(enemy_player.animate, 0, 0, enemy_player.animate.width, enemy_player.animate.height, ppx - ((ww - enemy_player.w + 15) / 2 / dt), ppy - (hh - enemy_player.h + 12) / dt, ww / dt, hh / dt)
                    data.drawImage(enemy_player.animate, 0, 0, enemy_player.animate.width, enemy_player.animate
                        .height, ppx - ((ww - enemy_player.w) / 2 / dt), ppy - top / dt, ww / dt, hh / dt)
                    if (enemy_player.side == 1) {
                        // data.scale(-1, 1)

                        //  ctx.translate(ppx, 0)

                        // ctx.translate(example.width, 0)
                        data.restore();
                    }






                    // data.drawImage(enemy_player.animate, 0, 0, enemy_player.animate.width, enemy_player.animate.height, this.canvas.width / 3 - ((ww - enemy_player.w) / 2 / dt), this.canvas.height / 3 * hightTop - top / dt, ww / dt, hh / dt)





                    // data.drawImage(this.player.animate_shot, this.canvas.width / 3 + this.player.animate_shot.width - ((ww - player.w) / 2 / dt), this.canvas.height / 3 * hightTop - top / dt)






                    /*if (this.player.side == 1) {
                        data.scale(-1, 1)

                        ctx.translate(this.canvas.width / 3 * 2 + player.w / dt, 0)
                        data.restore();
                    }
                    */

                }

            }

        }
        random(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);

            return Math.floor(Math.random() * (max - min) + min);
        }
        add(arr) {
            for (var k = 0; k < arr.length; k++) {
                this.arr.push(arr[k]);
            }

        }
        remove_user(id) {
            for (var i = 0; i < this.anotherPlayers.length; i++) {
                var enemy_player = this.anotherPlayers[i];
                if (enemy_player.idPlayer == id) {
                    this.anotherPlayers.splice(i, 1);
                }
            }
            //this.anotherPlayers.delete(id)
        }
    }

    function random(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);

        return Math.floor(Math.random() * (max - min) + min);
    }

    function getPlayerIs() {
        for (var i = 0; i < player.json.players.length; i++) {
            var jsonObject = player.json.players[i]
            if (jsonObject.is) {
                return jsonObject
            }
        }
        return null;
    }

    function getPlayerIsGet() {
        for (var i = 0; i < player.json.players.length; i++) {
            var jsonObject = player.json.players[i]
            if (jsonObject.is) {
                return i
            }
        }
        return null;
    }

    function getPlayerIsIndex() {
        for (var i = 0; i < player.json.players.length; i++) {
            var jsonObject = player.json.players[i]
            if (jsonObject.is) {
                return i
            }
        }
        return null;
    }

    function getPlayerIndex(i) {

        if (i >= player.json.players.length) {
            i = 0;
        }
        if (i < 0) i = player.json.players.length - 1
        var jsonObject = player.json.players[i]

        return jsonObject;
    }

    class PowerShot {
        constructor(power, color) {
            this.power = power;
            this.id = powerShot++;
            $("#power_shot").append("<div id='shot" + this.id + "' style='font-weight:900;color:" + color +
                ";left: calc(30% + " + (random(5, 100) * (random(0, 2) == 1 ? 1 : -1)) +
                "px);top: calc(45% + " + (random(5, 100) * (random(0, 2) == 1 ? 1 : -1)) +
                "px);display:none;' class='powerShot'>" + this.power + "</div>")
            $("#shot" + this.id).slideDown(850);
            var shot = this;
            setTimeout(function() {
                $("#shot" + this.id).slideUp(1000);
                setTimeout(function() {
                    document.getElementById("shot" + shot.id).remove();
                }, 1000)
            }, 1500);
        }
    }



    class NPCDeamon {
        constructor(json) {
            this.id = json.Type; // "deamon";
            this.json = json

            this.sizeX = 32;
            this.sizeY = 48;
            this.lines = new Array();
            this.posx = json.posx / START_SIZE * SIZE;
            this.posy = json.posy / START_SIZE * SIZE;
            this.animate = null;
            this.side = 0;
            var Pplayer = player;
            var player = this;
            var index = 0;
            this.w = json.w
            this.h = json.h
            this.type = 51; //50-stay 51-run  2-go 3-jump
            this.style = 0;
            this.fire = false;
            this.enemy = false;
            this.health = 0;
            this.animation = setInterval(function() {
                // console.log("data1")
                // console.log(player)
                if (player.id != null) {
                    if (player.type == 51) {
                        player.animate = images.get(player.id + "_run_small_web_" + index);
                        // console.log(index)
                        // console.log(player.animate)
                        index++;
                        if (index >= images.get(player.id + "_run_length")) index = 0;

                    }

                    if (player.type == 50) {
                        //  console.log("data")
                        player.animate = images.get(player.id + "_stay");

                    }

                    /*
                    for (var i = 0; i < 20; i++) {
                        if (player.type == i) {

                            if (player.fire == false) {
                                player.fire = true;
                                index = 0;
                            }


                            player.animate = images.get(player.id + "_" + player.type + "_" + index);
                            // console.log(index)
                            // console.log(player.animate)
                            index++;
                            if (index >= images.get(player.id + "_" + player.type + "_length")) {
                                index = 0;
                                player.type = 50;
                               player.fire = false;
                            }

                        }
                    }

                    */


                } else {
                    //  player.init();

                }




            }, 40);
            var drawLine = function(ctx, begin, end, stroke = 'black', width = 1) {
                if (stroke) {
                    ctx.strokeStyle = stroke;
                }

                if (width) {
                    ctx.lineWidth = width;
                }

                ctx.beginPath();
                ctx.moveTo(...begin);
                ctx.lineTo(...end);
                ctx.stroke();
            }
            this.draw = function(data) {
                // data.fillStyle = "#ff0101"
                //  data.fillRect(this.posx - this.player.position.x + this.canvas.width / 3, this.posy - this.player.position.y + this.canvas.height / 3 * hightTop, this.sizeX / dt, this.sizeY / dt);

                if (player != null && player.animate != null) {
                    // data.fillRect(this.canvas.width / 3, this.canvas.height / 3 * hightTop, player.w / dt, player.h / dt);
                    // data.fillStyle = "#ff0101"
                    //data.fillRect(this.posx - this.player.position.x + this.canvas.width / 3, this.posy - this.player.position.y + this.canvas.height / 3 * hightTop, this.sizeX / dt, this.sizeY / dt);
                    var ppx = this.posx - this.player.position.x + this.canvas.width / 3;
                    var ppy = this.posy - this.player.position.y + this.canvas.height / 3 * hightTop;


                    var dpx =this.player.position.x - this.canvas.width / 3;
                    var dpy = this.player.position.y - this.canvas.height / 3 * hightTop;

                    for (var i = -0; i < player.lines.length; i++) {
                        var line = this.lines[i];
                       
                        drawLine(data, [line.x/ START_SIZE * SIZE- this.player.position.x + this.canvas.width / 3,line.y/ START_SIZE * SIZE - this.player.position.y + this.canvas.height / 3 * hightTop], [line.endx/ START_SIZE * SIZE- this.player.position.x + this.canvas.width / 3,line.endy/ START_SIZE * SIZE - this.player.position.y + this.canvas.height / 3 * hightTop], 'white', line.lineWidth);
                    }
                    //  if(this.lll !=0){
                    if (player.side == 1) {
                        data.save()
                        data.scale(-1, 1)

                        data.translate(-example.width - (example.width - (example.width - ppx) * 2) - player.w /
                            3 * 2 / dt, 0);
                        // console.log((example.width-(example.width-ppx)*2))
                        //console.log(-example.width+ppx)
                        //if(ppx<0 ||ppx>window.innerWidth)return;
                        // if(ppy<0 ||ppy>window.innerHeight)return;

                        //  ctx.translate(-example.width+ppx, 0)
                        //  this.lll=0;
                    }
                    //}
                    var ww = 160 / 1.3;
                    var hh = 120 / 1.3;
                    var top = 0;
                    if (player.type == 50 && images.get(player.id + "_stay_top") != null) {
                        top = images.get(player.id + "_stay_top")
                    }
                    if (player.type == 51 && images.get(player.id + "_run_top") != null) {
                        top = images.get(player.id + "_run_top")
                    }
                    for (var l = 0; l < 20; l++) {
                        if (player.type == l) {
                            if (images.get(player.id + "_" + l + "_top") != null)
                                top = images.get(player.id + "_" + l + "_top")
                        }
                    }

                    // data.drawImage(this.player.animate, 0, 0, this.player.animate.width, this.player.animate.height, this.canvas.width / 3 - ((ww - player.w) / 2 / dt), this.canvas.height / 3 * hightTop - top / dt, ww / dt, hh / dt)

                    data.drawImage(player.animate, 0, 0, player.animate.width, player.animate.height, ppx - ((
                            ww - player.w + 15) / 2 / dt), ppy - (hh - player.h + 12) / dt, ww / dt, hh /
                        dt)
                    if (player.side == 1) {
                        // data.scale(-1, 1)

                        //  ctx.translate(ppx, 0)

                        // ctx.translate(example.width, 0)
                        data.restore();
                    }



                }
            }
        }
        // draw(data) {
        // data.fillStyle = "#ff0101"
        //  data.fillRect(this.posx - this.player.position.x + this.canvas.width / 3, this.posy - this.player.position.y + this.canvas.height / 3 * hightTop, this.sizeX / dt, this.sizeY / dt);

        // }
        move(json) {
            this.posx = json.posx / START_SIZE * SIZE;
            this.posy = json.posy / START_SIZE * SIZE;
            this.side = json.side;
        }
    }

    class AnimateController {

        constructor() {
            this.hashMap = new Map();

        }
        add(key, value) {
            this.hashMap.set(key, value)
        }

    }

    function from_degress_to_radian(degress) {
        return degress * Math.PI / 180;
    }








    class SpriteAnimate {
        constructor() {
            this.image = null;
            this.index = 0;
            this.position = new Vector();

        }
        draw(data) {
            if (this.image != null) {
                data.drawImage(this.image, this.position.x - this.image.width / 2, this.position.y - this.image
                    .height / 2)
            }
        }
    }





    class Animate {
        constructor() {
            this.type_moving = 0;
            this.array = new Array();
            this.index = 0;
            this.style = 0;
            this.px = 0;
            this.py = 0;

            this.angle = 0

            this.dk = 0.05;

            this.radius = 15
            this.speed = 3;
            this.type = null; //FLAME WATER THUNDER INSECT BEAST
            this.position = new Vector();
            this.mainImage = null;
            this.degress = 0;
            this.animateAnimate = Array();
            this.start_degress = 0;
            this.k = 0;
            this.period = 30;
            for (var i = 0; i < this.period; i++) {
                var spriteAnimate = new SpriteAnimate();
                this.animateAnimate.push(spriteAnimate)
            }



        }
        init(period) {
            this.period = period
            this.animateAnimate = new Array()
            for (var i = 0; i < this.period; i++) {
                var spriteAnimate = new SpriteAnimate();
                this.animateAnimate.push(spriteAnimate)
            }

        }
        draw(data) {
            for (var i = 0; i < this.animateAnimate.length; i++) {

                this.animateAnimate[i].draw(data);

            }
            /*
            if (this.mainImage != null) {
                data.drawImage(this.mainImage, this.position.x-this.mainImage.width/2, this.position.y-this.mainImage.height/2)
            }
            */

        }
        update(eplayer) {


            if (this.index >= this.array.length) {
                this.index = 0;
            }
            this.index++;
            var posx = example.width / 3 + player.w / dt / 2
            var posy = example.height / 3 * hightTop + player.h / dt / 2
            if (eplayer.enemy) {


                posx = eplayer.position.x - player.position.x + example.width / 3 + eplayer.w / dt / 2
                posy = eplayer.position.y - player.position.y + example.height / 3 *
                    hightTop + eplayer.h / dt / 2
            }
            //this.mainImage = this.array[this.index]
            //from top to right bottom
            //about from 100 to -40

            if (this.type_moving == 0) {


                /* if (this.k <= 1) {
                     this.k = 1
                     // this.degress=90;
                 } else {
                     this.k += this.dk;
                 }
                 */
                if (this.k <= 2 && this.k >= 0) {
                    this.k += this.dk;
                    if (this.k >= 1) {
                        this.k = -1;
                        this.degress += 140
                    }
                }
                if (this.k < 0) {
                    if (this.k + this.dk < 0) {
                        this.k += this.dk;
                        this.degress += 3;
                    } else {
                        eplayer.animateAnimate = null;

                    }
                }
                for (var i = 0; i < this.animateAnimate.length; i++) {

                    var animateAnimate = this.animateAnimate[i]
                    var ind_rand = randomIntFromInterval(0, this.array.length)
                    if (ind_rand >= this.array.length) ind_rand -= this.array.length
                    animateAnimate.image = this.array[ind_rand];

                    animateAnimate.position.x = posx + Math.cos(from_degress_to_radian(this.degress) +
                        from_degress_to_radian(140 / this.period * i * this.k)) * this.radius / dt
                    animateAnimate.position.y = posy + Math.sin(from_degress_to_radian(this.degress) +
                        from_degress_to_radian(140 / this.period * i * this.k)) * this.radius / dt

                }
            }











            //moving on circle 
            //360 degress
            if (this.type_moving == 1) {


                if (this.k >= 1) {
                    if (this.k >= 2) {
                        this.k = -1;
                        // this.k=1;
                    } else {
                        this.degress += this.speed;
                        this.k += this.dk
                    }
                } else if (this.k < 1 && this.k >= 0) {
                    this.k += this.dk;
                }
                if (this.k < 0) {
                    if (this.k + this.dk < 0) {
                        this.k += this.dk;
                        this.degress += 7;
                    } else {
                        eplayer.animateAnimate = null;

                    }
                }

                for (var i = 0; i < this.animateAnimate.length; i++) {

                    var animateAnimate = this.animateAnimate[i]
                    var ind_rand = randomIntFromInterval(0, this.array.length)
                    if (ind_rand >= this.array.length) ind_rand -= this.array.length
                    animateAnimate.image = this.array[ind_rand];

                    animateAnimate.position.x = posx + Math.cos(from_degress_to_radian(this.degress) +
                        from_degress_to_radian(360 / this.period * i * this.k)) * this.radius / dt
                    animateAnimate.position.y = posy + Math.sin(from_degress_to_radian(this.degress) +
                        from_degress_to_radian(360 / this.period * i * this.k)) * this.radius / dt

                }
                /*// this.canvas.width / 3, this.canvas.height / 3 * hightTop, player.w / dt, player.h / dt
                 this.position.x = posx + Math.cos(from_degress_to_radian(this.degress)) * this.radius
                 this.position.y = posy + Math.sin(from_degress_to_radian(this.degress)) * this.radius
                 */
            }
            //moving fro bottom to top
            //from minus 90 to the 90
            if (this.type_moving == 2) {

                //  this.degress=-100;
                /* if (this.k <= 1) {
                     this.k = 1
                     // this.degress=90;
                 } else {
                     this.k += 0.05;
                 }
                 */
                if (this.k <= 1 && this.k >= 0) {
                    this.k += this.dk;
                    if (this.k >= 1) {
                        this.k = -1;
                        this.degress += 200;
                    }
                }
                if (this.k < 0) {
                    if (this.k + this.dk < 0) {
                        this.k += this.dk;
                        this.degress += 3;
                    } else {
                        eplayer.animateAnimate = null;
                    }
                }
                for (var i = 0; i < this.animateAnimate.length; i++) {

                    var animateAnimate = this.animateAnimate[i]
                    var ind_rand = randomIntFromInterval(0, this.array.length)
                    if (ind_rand >= this.array.length) ind_rand -= this.array.length
                    animateAnimate.image = this.array[ind_rand];

                    animateAnimate.position.x = posx + Math.cos(from_degress_to_radian(this.degress) +
                        from_degress_to_radian(200 / this.period * i * this.k)) * this.radius / dt
                    animateAnimate.position.y = posy + Math.sin(from_degress_to_radian(this.degress) +
                        from_degress_to_radian(200 / this.period * i * this.k)) * this.radius / dt

                }
            }
            if (this.type_moving == 3) {

                //  this.degress=-100;
                /*   if (this.k <= 1) {
                       this.k = 1
                        this.degress+=this.speed;
                   } else {
                       this.k += 0.05;
                   }
                   
                  if(this.k<=1){
                   this.k += 0.05;
                  }
                  */
                this.degress += this.speed;
                for (var i = 0; i < this.animateAnimate.length; i++) {

                    var animateAnimate = this.animateAnimate[i]
                    var ind_rand = randomIntFromInterval(0, this.array.length)
                    if (ind_rand >= this.array.length) ind_rand -= this.array.length
                    animateAnimate.image = this.array[ind_rand];

                    animateAnimate.position.x = posx - eplayer.w / 3 / dt - i * animateAnimate.image.width / 4 / dt
                    animateAnimate.position.y = posy + Math.sin((from_degress_to_radian(this.degress) +
                        from_degress_to_radian(360 / this.period * i)) * 4) * this.radius / dt

                }
            }

            if (this.type_moving == 4) {
                this.degress += this.speed;

                for (var i = 0; i < this.animateAnimate.length; i++) {

                    var animateAnimate = this.animateAnimate[i]
                    var ind_rand = randomIntFromInterval(0, this.array.length)
                    if (ind_rand >= this.array.length) ind_rand -= this.array.length
                    animateAnimate.image = this.array[ind_rand];

                    animateAnimate.position.x = posx + eplayer.w / dt - i * animateAnimate.image.width / dt
                    animateAnimate.position.y = posy
                }
                if (this.degress >= 360) {
                    eplayer.animateAnimate = null;

                }
            }
        }

    }



    class Player {
        initAnimate() {
            console.log("is inited")
            //var breath = getBreathofPlayer();
            // console.log(breath)
            var breath = playerPreviewController.hash.get(this.id).json.styles[0]
            var timer_period = 40;
            var jsonBreath = breathPreviewController.hash.get(breath).json;
            var style = jsonBreath.styles[this.style]


            var type_player = this.id_type;
            if (type_player == null) {
                var jsonPlayerFromBase = getPlayerIs();
                type_player = jsonPlayerFromBase.type
            }
            if (type_player == 0) type_player = 1;
            var time = style.minTime + ((style.maxTime - style.minTime) / type_player)

            var delta_ = 1

            var dt_index = (time / timer_period);
            console.log(dt_index)

            var player = this;

            if (breath == "THUNDER") {
                if (player.style == 0) {
                    var animation1 = images.get("animate_thunderball_0")
                    var animation = Object.assign(Object.create(Object.getPrototypeOf(animation1)), animation1)
                    animation.init(4)
                    animation.type_moving = 4

                    animation.side = this.side
                    animation.degress = 0;
                    animation.speed = 15;

                    this.animateAnimate = animation
                }
                if (player.style == 1) {
                    var animation1 = images.get("animate_thunderball_0")
                    var animation = Object.assign(Object.create(Object.getPrototypeOf(animation1)), animation1)
                    animation.init(4)
                    animation.type_moving = 4

                    animation.side = this.side
                    animation.degress = 0;
                    animation.speed = 15;

                    this.animateAnimate = animation
                }
                if (player.style == 2) {
                    var animation1 = images.get("animate_thunderball_0")
                    var animation = Object.assign(Object.create(Object.getPrototypeOf(animation1)), animation1)
                    animation.init(4)
                    animation.type_moving = 4

                    animation.side = this.side
                    animation.degress = 0;
                    animation.speed = 15;

                    this.animateAnimate = animation
                }

                if (player.style == 3) {
                    var animation1 = images.get("animate_thunderball_0")
                    var animation = Object.assign(Object.create(Object.getPrototypeOf(animation1)), animation1)
                    animation.init(4)
                    animation.type_moving = 4

                    animation.side = this.side
                    animation.degress = 0;
                    animation.speed = 15;

                    this.animateAnimate = animation
                }
            }
            if (breath == "INSECT") {
                if (player.style == 1) {
                    var animation1 = images.get("animate_insectball_0")
                    var animation = Object.assign(Object.create(Object.getPrototypeOf(animation1)), animation1)
                    animation.type_moving = 1
                    animation.speed = 3
                    animation.dk = 0.05
                    animation.degress = -90
                    animation.side = this.side
                    animation.radius = 56
                    animation.dk = 2 / dt_index
                    this.animateAnimate = animation
                }
                if (player.style == 2) {
                    var animation1 = images.get("animate_insectball_0")
                    var animation = Object.assign(Object.create(Object.getPrototypeOf(animation1)), animation1)
                    animation.type_moving = 0
                    animation.speed = 5
                    animation.dk = 0.05
                    animation.degress = -90
                    animation.side = this.side;
                    animation.radius = 56
                    animation.dk = 1 / dt_index
                    this.animateAnimate = animation
                }

                if (player.style == 3) {
                    var animation1 = images.get("animate_insectball_0")
                    var animation = Object.assign(Object.create(Object.getPrototypeOf(animation1)), animation1)
                    animation.type_moving = 2
                    animation.speed = 5
                    animation.dk = 0.05
                    animation.degress = -90
                    animation.side = this.side;
                    animation.radius = 56
                    animation.dk = 1 / dt_index
                    this.animateAnimate = animation
                }
            }
            if (breath == "BEAST") {
                if (player.style == 1) {
                    var animation1 = images.get("animate_beastball_0")
                    var animation = Object.assign(Object.create(Object.getPrototypeOf(animation1)), animation1)
                    animation.type_moving = 0
                    animation.speed = 5
                    animation.dk = 0.05
                    animation.degress = -90
                    animation.side = this.side
                    animation.radius = 56
                    animation.dk = 1 / dt_index
                    this.animateAnimate = animation
                }
                if (player.style == 4) {
                    var animation1 = images.get("animate_beastball_0")
                    var animation = Object.assign(Object.create(Object.getPrototypeOf(animation1)), animation1)
                    animation.type_moving = 1
                    animation.speed = 3
                    animation.dk = 0.05
                    animation.degress = -90
                    animation.side = this.side
                    animation.radius = 56
                    animation.dk = 1 / dt_index
                    this.animateAnimate = animation
                }
                if (player.style == 8) {
                    var animation1 = images.get("animate_beastball_0")
                    var animation = Object.assign(Object.create(Object.getPrototypeOf(animation1)), animation1)
                    animation.type_moving = 2
                    animation.speed = 5
                    animation.dk = 0.05
                    animation.degress = -90
                    animation.side = this.side;
                    animation.radius = 56
                    animation.dk = 1 / dt_index
                    this.animateAnimate = animation
                }
            }
            if (breath == "WATER") {
                if (player.style == 1) {
                    var animation1 = images.get("animate_waterball_0")
                    var animation = Object.assign(Object.create(Object.getPrototypeOf(animation1)), animation1)
                    animation.type_moving = 1
                    animation.speed = 3
                    animation.dk = 0.05
                    animation.degress = -90
                    animation.side = this.side
                    animation.radius = 56
                    animation.dk = 3 / dt_index
                    this.animateAnimate = animation
                }
                if (player.style == 3) {
                    var animation1 = images.get("animate_waterball_0")
                    var animation = Object.assign(Object.create(Object.getPrototypeOf(animation1)), animation1)
                    animation.type_moving = 0
                    animation.speed = 5
                    animation.dk = 0.05
                    animation.degress = -90
                    animation.side = this.side
                    animation.radius = 56
                    animation.dk = 1.5 / dt_index
                    this.animateAnimate = animation
                }
                if (player.style == 6) {
                    /* var animation1 = images.get("animate_waterball_0")
                     var animation = Object.assign(Object.create(Object.getPrototypeOf(animation1)), animation1)
                     animation.type_moving = 3
                     animation.speed = 3
                     animation.dk = 0.05
                     animation.degress = -90
                     animation.side = this.side
                     animation.radius = 10
                     this.animateAnimate = animation
                     */
                }
                if (player.style == 8) {
                    var animation1 = images.get("animate_waterball_0")
                    var animation = Object.assign(Object.create(Object.getPrototypeOf(animation1)), animation1)
                    animation.type_moving = 0
                    animation.speed = 5
                    animation.dk = 0.05
                    animation.degress = -90
                    animation.side = this.side
                    animation.radius = 56
                    animation.dk = 1 / dt_index
                    this.animateAnimate = animation
                }
                if (player.style == 9) {
                    var animation1 = images.get("animate_waterball_0")
                    var animation = Object.assign(Object.create(Object.getPrototypeOf(animation1)), animation1)
                    animation.type_moving = 2
                    animation.speed = 5
                    animation.dk = 0.05
                    animation.degress = -90
                    animation.side = this.side;
                    animation.radius = 56
                    animation.dk = 1.2 / dt_index
                    this.animateAnimate = animation
                }
                if (player.style == 7) {
                    var animation1 = images.get("animate_waterball_0")
                    var animation = Object.assign(Object.create(Object.getPrototypeOf(animation1)), animation1)
                    animation.type_moving = 2
                    animation.speed = 5
                    animation.dk = 0.05
                    animation.degress = -90
                    animation.side = this.side;
                    animation.radius = 56
                    animation.dk = 1 / dt_index
                    this.animateAnimate = animation
                }
            }


            if (breath == "FLAME") {
                if (player.style == 1) {
                    var animation1 = images.get("animate_fireball_0")
                    var animation = Object.assign(Object.create(Object.getPrototypeOf(animation1)), animation1)
                    animation.type_moving = 1
                    animation.speed = 3
                    animation.dk = 0.05
                    animation.degress = -90
                    animation.radius = 56
                    animation.side = this.side;
                    animation.dk = 3 / dt_index
                    this.animateAnimate = animation


                }
                if (player.style == 2) {
                    var animation1 = images.get("animate_fireball_0")
                    var animation = Object.assign(Object.create(Object.getPrototypeOf(animation1)), animation1)
                    animation.type_moving = 0
                    animation.speed = 5
                    animation.dk = 0.05
                    animation.degress = -90
                    animation.side = this.side;
                    animation.radius = 56
                    animation.dk = 2 / dt_index
                    this.animateAnimate = animation
                }
                if (player.style == 4) {
                    var animation1 = images.get("animate_fireball_0")
                    var animation = Object.assign(Object.create(Object.getPrototypeOf(animation1)), animation1)
                    animation.type_moving = 2
                    animation.speed = 5
                    animation.dk = 0.05
                    animation.degress = -90
                    animation.side = this.side;
                    animation.radius = 56
                    animation.dk = 2 / dt_index
                    this.animateAnimate = animation
                }

            }
        }
        getPlayerIs() {
            for (var i = 0; i < this.json.players.length; i++) {
                var jsonObject = this.json.players[i]
                if (jsonObject.is) {
                    return jsonObject
                }
            }
            return null;
        }

        constructor() {

            this.position = new Vector();
            this.size = new Vector();
            this.img = new Image();

            this.animate_top = START_SIZE;
            this.side = 0;
            var player = this;
            var index = 0;
            this.id = null;
            this.id_type = 0;
            this.w = 0;
            this.h = 0;
            this.supplies = new Array();
            this.inventory = new Map();

            this.login = null;

            this.energy = 0;
            this.heart = 3;



            this.type = 50; //50-stay 51-run  2-go 3-jump
            this.style = 0;
            this.fire = false;
            this.enemy = false;
            this.health = 0;
            // this.animate_shot = images.get("THUNDER_SIDE_sprite_0")
            var timer_period = 40
            this.animateAnimate = null;
            this.start_fire = false;

            this.animate = null;
            this.fights = new Fights(this);
            this.animation = setInterval(function() {
                if (player.id != null) {

                    if (player.animateAnimate != null) {
                        player.animateAnimate.update(player)
                    }
                    if (player.fire == false && player.start_fire == false) {
                        if (player.type == 51) {
                            player.animate = images.get(player.id + "_run_small_web_" + index);
                            // console.log(index)
                            // console.log(player.animate)
                            index++;
                            //index = Math.floor(index);

                            if (index >= images.get(player.id + "_run_length")) index = 0;
                        }

                        if (player.type == 50) {
                            player.animate = images.get(player.id + "_stay");


                        }
                    } else {
                        player.type = player.style + 1;
                    }

                    for (var i = 0; i < 20; i++) {
                        if (player.type == i) {

                            if (player.start_fire == true && player.fire == false) {
                                player.fire = true;
                                index = 0;
                            }


                            player.animate = images.get(player.id + "_" + player.type + "_" + Math.floor(
                                index));
                            // console.log(index)
                            // console.log(player.animate)
                            var jsonPlayerFromBase = getPlayerIs();

                            var breath = jsonPlayerFromBase.breath[0].id;
                            var jsonBreath = breathPreviewController.hash.get(breath).json;
                            var style = jsonBreath.styles[player.style]
                            var type_player = jsonPlayerFromBase.type
                            if (type_player == 0) type_player = 1;
                            var time = style.minTime + ((style.maxTime - style.minTime) / type_player)

                            var delta_ = 1

                            var dt_index = (timer_period / (time / images.get(player.id +
                                "_" + player.type + "_length")));



                            console.log(images.get(player.id +
                                "_" + player.type + "_length"))


                            console.log()
                            index += dt_index;
                            if (Math.floor(index) >= images.get(player.id + "_" + player.type +
                                    "_length")) {
                                index = 0;
                                player.type = 50;
                                player.fire = false;
                                player.start_fire = false;

                            }

                        }
                    }


                } else {
                    player.init();

                }




            }, timer_period);

            //this.img.src=""
        }
        stay() {
            if (this.fire == false)
                this.type = 50;
        }
        init() {
            var jsonPlayer = this.json;
            var player = getPlayerIs();



            this.id = player.id;

        }
        setStyle(style) {

            this.style = style;

        }
        setPosition(x, y) {
            if (this.position.x > x) {
                if (this.fire == false) {
                    this.type = 51
                }

                //this.side = -1;
            }
            if (this.position.x < x) {
                if (this.fire == false) {
                    this.type = 51
                }

                //  this.side = 1;
            }
            if (this.position.x < x || this.position.x > x) {
                if (!this.enemy) {
                    backMain.moving = true;
                }
            } else {
                if (!this.enemy) {
                    backMain.moving = false;
                }
            }
            if (this.fire == false) {
                if (this.position.x == x) {
                    this.type = 50
                }
            }


            this.position.x = x;
            this.position.y = y;
        }

    }
    class Vector {
        constructor(x, y) {
            this.x = x;
            this.y = y;
        }


    }


    class Breath {
        constructor(id, styles) {
            this.id = id;
            this.styles = styles;
        }
    }


    class PlayerPreview {
        constructor(json) {
            this.id = json.id;
            this.name = json["name<?php echo $lan;?>"];
            this.text = json["text<?php echo $lan;?>"];
            this.json = json;
            this.image_sources = images.get(this.id + "_prev");
        }
    }
    class PlayerPreviewController {
        constructor() {
            this.array = new Array();
            this.hash = new Map();
        }
        async add(playerPreview) {
            var add = true;
            //var json_to_need = await loadJSON("img/union/" + playerPreview.id + "/index.json");
            //console.log(json_to_need)
            for (var i = 0; i < this.array.length; i++) {
                if (playerPreview.id == this.array[i].id) {
                    this.array[i] = new PlayerPreview(playerPreview);
                    add = false;
                }
            }
            if (add) {

                this.array.push(playerPreview)
            }
            this.hash.set(playerPreview.id, playerPreview)
        }
    }

    class BreathPreview {
        constructor(json) {
            this.json = json;
            this.id = this.json.id;
            this.styles = this.json.styles;
        }
    }

    class BreathPreviewController {
        constructor() {
            this.array = new Array();
            this.hash = new Map();
        }
        add(breathPreview) {
            this.array.push(breathPreview)
            this.hash.set(breathPreview.id, breathPreview)
        }
    }

    class Fights {
        constructor(player) {
            this.player = player;

            this.fights = new Array();
        }
        action(data) {
            for (var i = 0; i < this.fights.length; i++) {
                var element = this.fights[i];
                var x = element.x / START_SIZE * SIZE;
                var y = element.y / START_SIZE * SIZE;
                var w = element.w;
                var h = element.h;

                data.fillStyle = "#4dfe2a73"; //"#4dfe2a3d";//"#4cff2b"
                if (this.player.enemy) {
                    data.fillStyle = "#f35353b0";
                }
                data.fillRect(x - player.position.x + example.width / 3, y - player.position.y + example
                    .height / 3 * hightTop, w / dt, h / dt);

            }
        }




    }






    function initWebGL(canvas) {
        gl = null;

        try {
            // Попытаться получить стандартный контекст. Если не получится, попробовать получить экспериментальный.
            gl = canvas.getContext("webgl") || canvas.getContext("experimental-webgl");
        } catch (e) {}

        // Если мы не получили контекст GL, завершить работу
        if (!gl) {
            alert("Unable to initialize WebGL. Your browser may not support it.");
            gl = canvas.getContext('2d', {
                alpha: false
            });
        } else {
            gl = gl.canvas
        }

        return gl;
    }








    var v = 2; // Math.random();

    var connection = null;
    var styleKey = 0;

    var SHIFT = false;
    var touch = new Array();

    /* var boardi = '  <div  id ="sid" onClick="onShow(this)" style="float:left;display:flex;" class="boardList"><div style="display:flex;width:25%;margint-top:20%;font-size:95%;align-item:center;justify-content: center;align-items: center;">name</div><div style="display:flex;width:25%;margint-top:20%;font-size:95%;align-item:center;justify-content: center;align-items: center;">stavka$</div> <div style="width:25%;font-size:95%;align-items: center;display:flex;">numberpeop </div><div style="font-size:95%;width:25%;display:flex;align-items:center;">long min </div></div>';
     var str = '<div id="joined" value="cid" class="join"  style="display: flex;align-items: center;justify-content: center;" onClick="joined(this)"><dt><?php echo $locale["TEXT_LOGIN"];?></div>';
     var Side = "none";
    */
    var index_notification = 0;
    var rangArray = [
        <?php echo getMassive($locale["rank"]);?>

    ];
    var isScore = false;
    var pingdata = 0;
    var minWidth = 845;
    var minHeight = 525;
    var translate = 0;
    var moneygame = 0;
    var playergame = 0;
    var status = 0;


    var money = 0;
    var score = 0;
    var rang = 0;
    var powerShot = 0;
    var npcMap = new Map();
    var isLoading = false;


    var START_SIZE = 24;
    var SIZE_CHANGE_CANVAS_PHONE = 1.6; //1.3

    var scale = isMobile() == true ? 3.2 : 1.35;
    var dt = (1920 / window.innerWidth) / scale;
    var SIZE = Math.floor(START_SIZE / (1920 / window.innerWidth) * scale);
    var hightTop = isMobile() == true ? 1.55 : 1.4
    var shopModel = null;

    //alert(scale+" "+dt+" "+SIZE);

    var images = new Map();
    var train = false;
    var imageLoader;
    var example, ctx;
    var mapMain = null;
    var backMain = null;
    var mainInterval = null;
    var map = new Array();
    var player = null;
    var playerPreviewController = new PlayerPreviewController();
    var breathPreviewController = new BreathPreviewController();
    var mapsMultiplayerController = new MapsMultiplayerController();

    var windowLevel = new WindowLevel();
    var loaderview = null; //new LoaderView()
    var taskModel = null;
    var fights = null;
    var nextLevel = true;


    function roundedRectPath(x, y, w, h, r) {
        r = (Math.min(w, h) / 2 > r) ? r : Math.min(w, h) / 2;
        return `M ${x + r} ${y} l ${w-2*r} 0 q ${r} 0 ${r} ${r}
        l 0 ${h-2*r} q 0 ${r} ${-r} ${r}
        l ${-w+2*r} 0 q ${-r} 0 ${-r} ${-r}
        l 0 ${-h+2*r} q 0 ${-r} ${r} ${-r}`;
    }


    function setStyle(id) {
        connection.send("battle;change;" + id)
    }

    function showTask() {
        if (taskModel == null) return;
        pause_pause();
        new WindowNotification(getNameOfTask(taskModel.id), taskModel["text<?php echo $lan;?>"], taskModel,
            "resume_resume();")
    }

    function toggleFullScreen() {
        //    if (document.fullscreenElement==false) {

        document.documentElement.requestFullscreen();


        // }


        if (document.mozRequestFullScreen != null) {
            document.mozRequestFullScreen();
        }
        if (document.webkitRequestFullScreen != null) {
            document.webkitRequestFullScreen();
        }
        if (document.msRequestFullscreen != null) {
            document.msRequestFullscreen();
        }
    }

    // run();
    function resizeThrottler() {
        example.width = isMobile() == true ? window.innerWidth * SIZE_CHANGE_CANVAS_PHONE : window.innerWidth;
        example.height = isMobile() == true ? window.innerHeight * SIZE_CHANGE_CANVAS_PHONE : window.innerHeight;

        dt = (1920 / window.innerWidth) / scale;
        SIZE = Math.floor(START_SIZE / (1920 / window.innerWidth) * scale);

    }
    async function loadImage(url, name) {
        images.set(name, await this.asyncImageLoader(url))
    }
    async function loadJsonSprites() {
        var json = await loadJSON("res/animate.json?id=" + v);
        json = JSON.parse(json)
        var arr = Object.keys(json);
        for (var j = 0; j < arr.length; j++) {

            //if (arr[j] != "FLAME") continue;
            //console.log(json[arr[j]])
            // console.log(arr[j])


            var jlement = json[arr[j]];
            for (var l = 0; l < jlement.length; l++) {
                var element = jlement[l];



                var URL = element.url;

                // imageLoader.loadImage("img/union/" + playerPreview.id + "/stay_small_web.png?id=" + v, playerPreview.id + "_stay");
                var index = 0;
                var image = await this.asyncImageLoader(URL);

                var animate = new Animate();

                if (element.countX != null && element.dtX != null) {

                    for (var i = 0; i < element.countX; i++) {
                        if (element.dtY != null && element.countY != null) {
                            for (var d = 0; d < element.countY; d++) {
                                index++;
                                var newSizeX = 1;
                                var newSizeY = 1;
                                if (element.newSizeX != null) {
                                    newSizeX = element.newSizeX
                                }
                                if (element.newSizeY != null) {
                                    newSizeY = element.newSizeY

                                }
                                var img_url = getImage(image, i * element.dtX, d * element.dtY, element.dtX, element
                                    .dtY, 32 * newSizeX / dt, 32 * newSizeY / dt);
                                var img = new Image();
                                img.src = img_url;

                                images.set(arr[j] + "_sprite_" + element.name + "_" + index, img)
                                animate.array.push(img)
                            }

                        } else {
                            index++;
                            var newSizeX = 1;
                            var newSizeY = 1;
                            if (element.newSizeX != null) {
                                newSizeX = element.newSizeX
                            }
                            if (element.newSizeY != null) {
                                newSizeY = element.newSizeY

                            }
                            var img_url = getImage(image, i * element.dtX, 0, element.dtX, element.dtX, 32 *
                                newSizeX / dt,
                                32 * newSizeY / dt);
                            var img = new Image();
                            img.src = img_url;
                            animate.array.push(img)
                            images.set(arr[j] + "_sprite_" + element.name + "_" + index, img)

                        }
                    }
                    images.set(arr[j] + "_sprite_len_" + element.name, index)
                }
                if (element.count != null && element.countX == null && element.vertical == null) {

                    for (var i = 0; i < element.count; i++) {
                        var img_url = getImage(image, i * image.width / element.count, 0, image.width / element
                            .count, image.height, 6 * START_SIZE / dt, 3 * START_SIZE / dt);
                        var img = new Image();
                        img.src = img_url;
                        animate.array.push(img)
                        images.set(arr[j] + "_sprite_" + element.name + "_" + i, img)
                    }

                    images.set(arr[j] + "_sprite_len_" + element.name, element.count)
                }

                if (element.vertical != null && element.vertical == false) {
                    for (var i = 0; i < element.count; i++) {
                        var img_url = getImage(image, 0, i * image.height / element.count, image.width, image
                            .height / element.count, 4 * START_SIZE / dt, 3 * START_SIZE / dt);
                        var img = new Image();
                        img.src = img_url;
                        animate.array.push(img)
                        images.set(arr[j] + "_sprite_" + element.name + "_" + i, img)
                    }

                    images.set(arr[j] + "_sprite_len_" + element.name, element.count)

                }

                images.set("animate_" + element.name + "_" + l, animate)

            }



        }
    }
    async function loadJsonFromPlayer(playerPreview) {

        var jz = loaderview.add();
        loaderview.init()

        var json = await loadJSON("img/union/" + playerPreview.id + "/index.json?id=" + v);
        json = JSON.parse(json);

        if (json.run.folder == null || json.styles == null) {
            loaderview.remove(jz);
            return;
        }

        if (json.stay_top != null)
            images.set(playerPreview.id + "_stay_top", json.stay_top)




        var folder_run = json.run.folder + "_small_web";
        var i = json.run.start;
        var end = json.run.end;
        var index = 0;
        imageLoader.loadImage("img/union/" + playerPreview.id + "/stay_small_web.png?id=" + v, playerPreview.id +
            "_stay");

        for (; i < end; i++) {

            imageLoader.loadImage("img/union/" + playerPreview.id + "/" + (json.run.folder + "_small_web") +
                "/index_00" + (i < 100 ? (i > 9 ? "0" + i : "00" + i) : i) + ".png?id=" + v, playerPreview.id +
                "_" + folder_run + "_" + index);
            index++;
        }
        if (json.run.stay_top != null)
            images.set(playerPreview.id + "_run_top", json.run.stay_top)


        images.set(playerPreview.id + "_run_length", (json.run.end - json.run.start))
        i = 0;
        var ends = json.styles.length;
        for (; i < ends; i++) {
            var json1 = json.styles[i];
            var id = json1.id;
            var j = json1.start;
            var end = json1.end;
            var index = 0;
            for (; j < end; j++) {
                imageLoader.loadImage("img/union/" + playerPreview.id + "/" + (json1.folder + "_small_web") +
                    "/index_00" + (j < 100 ? (j > 9 ? "0" + j : "00" + j) : j) + ".png?id=" + v, playerPreview
                    .id + "_" + id + "_" + index);
                index++;

            }
            images.set(playerPreview.id + "_" + id + "_length", (json1.end - json1.start))
            //if (json.run.stay_top != null)
            //   images.set(playerPreview.id + "_" + id + "_top", json1.stay_top)
            if (json1.stay_top != null)
                images.set(playerPreview.id + "_" + id + "_top", json1.stay_top)

        }
        //console.log(json)
        // console.log(folder)
        playerPreview.json_anim = json
        loaderview.remove(jz)
        //console.log(json_to_need+" "+playerPreview.id)
        // return json_to_need
    }
    window.onload = function() {

        // if ( /* innerWidth <= minWidth || innerHeight <= minHeight || */ innerWidth / innerHeight < 1) {
        //connection.close();
        //  connection = null;
        //alert("Device is not support");
        /// return;
        //}

        if (isMobile()) {
            document.body.style = "zoom:70%"


        }
        loaderview = new LoaderView();
        connection = new WebSocket('ws://192.168.0.103:9999');
        connection.onopen = function(e) {
            console.log('Connected! ' + e);
            run()

            //auth(null)
            // connection.send("auth;login;false;");
        };
        connection.onerror = function(error) {
            alert("Соединение разорвано!");
            console.log('WebSocket Error ' + error);
        }

        function getPlayerIs() {
            for (var i = 0; i < player.json.players.length; i++) {
                var jsonObject = player.json.players[i]
                if (jsonObject.is) {
                    return jsonObject
                }
            }
            return null;
        }
        connection.onmessage = function(e) {
            var b = e.data.split(";");

            /* if(e.data!="lobby;ping" && e.data.includes("npc")==false) {
                 console.log(e.data)

             }
             */

            if (b[0] == "error") {
                if (b[1] == "toomany") {
                    alert(
                        "На данном сервере слишком много игроков ,пожалуйста,выберите другой или подождите немного времени"
                    )
                }
            }

            if (b[0] == "chat") {
                if (b[1] == "clear") {

                    document.getElementById("textMessage").innerHTML = "";

                } else if (b[1] == "reload") {
                    window.location.reload();
                } else if (b[1] == "ban") {
                    alert("Вы временно отключены от чата!!!");
                    soundClick();
                } else if (b[1] == "server") {
                    soundClick();
                    document.getElementById("textMessage").innerHTML = document.getElementById("textMessage")
                        .innerHTML + "<br/><span style='color:#3bd061;'>" + b[2] + "</span>";
                    document.getElementById("textMessage").scrollTop += 200;

                } else {
                    onMessageChat(b[2], b[1]);
                }
            }
            if (b[0] == "battle") {
                if(b[1]=="lines"){
                    var json = JSON.parse(e.data.replace("battle;lines;",""))
                    var npc = npcMap.get(json.id);
                    
                    if(npc!=null){

                  
                        npc.lines = json.lines;
                    }
                }
                if (b[1] == "add_supplies") {
                    if (b[3] == null || Number(b[3]) == player.idPlayer) {
                        player.inventory.set(b[2], b[2])
                    } else {
                        for (var j = 0; j < mapMain.anotherPlayers.length; j++) {

                            if (mapMain.anotherPlayers[j].idPlayer == Number(b[3])) {
                                mapMain.anotherPlayers[j].inventory.set(b[2], b[2])
                                return;

                            }
                        }
                    }
                }
                if (b[1] == "remove_supplies") {
                    if (b[3] == null || Number(b[3]) == player.idPlayer) {
                        player.inventory.delete(b[2])
                    } else {
                        for (var j = 0; j < mapMain.anotherPlayers.length; j++) {

                            if (mapMain.anotherPlayers[j].idPlayer == Number(b[3])) {
                                mapMain.anotherPlayers[j].inventory.delete(b[2])
                                return;

                            }
                        }
                    }

                }
                if (b[1] == "remove_user") {
                    var id = Number(b[2]);
                    mapMain.remove_user(id)
                }
                if (b[1] == "enter_to_battle") {
                    player.idPlayer = Number(b[2]);

                }
                if (b[1] == "add_player") {
                    var enemy = new Player();
                    var json = JSON.parse(b[4]);
                    enemy.id = b[3].split("_")[0];
                    enemy.id_type = Number(b[3].split("_")[1]);
                    enemy.login = json.login;
                    var x = json.posX;
                    var y = json.posY;
                    var w = json.w;
                    var h = json.h;
                    enemy.w = w;
                    enemy.h = h;
                    var health = json.health;
                    var energy = json.energy;
                    var side = json.side;
                    enemy.side = side;
                    enemy.idPlayer = Number(b[2]);

                    enemy.energy = energy;
                    enemy.health = health;
                    enemy.enemy = true;
                    enemy.setPosition(x, y);
                    mapMain.anotherPlayers.push(enemy);

                }

                if (b[1] == "gameOver") {
                    new WindowFinishBattleOver("GameOver!", "", {
                        "addscore": 0,
                        "addmoney": 0
                    });
                    setTimeout(function() {
                        exit();
                    }, 5500)
                    player.type = 50
                }
                if (b[1] == "set_energy_me") {
                    player.energy = Number(b[2])

                }
                if (b[1] == "set_health_me") {
                    player.health = Number(b[2])
                }
                if (b[1] == "shot_me") {
                    player.health = Number(b[2])
                }
                if (b[1] == "set_heart") {
                    if (b[3] == null || Number(b[3]) == player.idPlayer) {
                        document.getElementById("heartPanel").innerHTML = "";
                        player.heart = Number(b[2])

                        for (var i = 0; i < Number(b[2]); i++) {
                            // document.getElementById("base_score").classList.remove("animate_scale_run");

                            $("#heartPanel").append(
                                '<img class="animate_scale_run_" src="img/heart.png" style="height: 32px;margin-left:3px;">'
                            )
                        }
                    } else {
                        for (var j = 0; j < mapMain.anotherPlayers.length; j++) {

                            if (mapMain.anotherPlayers[j].idPlayer == Number(b[3])) {
                                mapMain.anotherPlayers[j].heart = Number(b[2]);
                                return;

                            }
                        }
                    }


                }



                if (b[1] == "shot") {
                    new PowerShot(b[2], "white");
                }
                if (b[1] == "killshot") {
                    new PowerShot(b[2], "red");
                }
                if (b[1] == "end") {

                    new WindowFinishBattle("Finish!", "", {
                        "addscore": b[2],
                        "addmoney": b[3]
                    });
                    setTimeout(function() {
                        exit();
                    }, 5500)
                    player.type = 50
                }
                if (b[1] == "fire") {
                    if (mapMain.multiplayer) {
                        if (Number(b[2]) == player.idPlayer) {

                            player.start_fire = true;
                            player.type = player.style + 1;

                            player.initAnimate();
                        } else {
                            for (var j = 0; j < mapMain.anotherPlayers.length; j++) {

                                if (mapMain.anotherPlayers[j].idPlayer == Number(b[2])) {

                                    mapMain.anotherPlayers[j].type = Number(b[3]) + 1;
                                    mapMain.anotherPlayers[j].style = Number(b[3]);
                                    mapMain.anotherPlayers[j].start_fire = true;
                                    mapMain.anotherPlayers[j].initAnimate(); // = true;

                                    return;

                                }
                            }
                        }
                    } else {
                        /*player.type = player.style + 1;
                        player.index = 0;
                        player.fire = false;
                        player.type = player.style + 1;
                        player.fire = false;
                        */

                        player.start_fire = true;
                        player.type = player.style + 1;

                        player.initAnimate();
                    }
                }
                if (b[1] == "setStyle") {
                    var num = Number(b[2]);
                    player.style = num;
                }
                if (b[1] == "pos_stay") {
                    if (mapMain.multiplayer) {
                        var id = Number(b[2])
                        if (id == player.idPlayer) {
                            player.stay();
                        } else {
                            for (var j = 0; j < mapMain.anotherPlayers.length; j++) {
                                if (mapMain.anotherPlayers[j].idPlayer == Number(b[2])) {
                                    mapMain.anotherPlayers[j].stay();
                                    return;

                                }
                            }
                        }
                    } else {
                        player.stay();
                    }
                }
                if (b[1] == "change_tile") {
                    //console.log("change_tile")
                    var i = Number(b[2])
                    var j = Number(b[3])
                    var k = b[4]
                    // console.log(mapMain.arr[i][j])

                    mapMain.arr[i][j] = k
                    //  console.log(mapMain.arr[i][j])

                }
                if (b[1] == "my_fight_clean") {
                    if (b[2] != null) {
                        var id = Number(b[2])
                        if (id == player.idPlayer) {
                            player.fights.fights = new Array()
                        } else {
                            for (var j = 0; j < mapMain.anotherPlayers.length; j++) {
                                if (mapMain.anotherPlayers[j].idPlayer == Number(b[2])) {
                                    mapMain.anotherPlayers[j].fights.fights = new Array()
                                    return;

                                }
                            }
                        }
                    } else
                        player.fights.fights = new Array()

                }

                if (b[1] == "fight_box") {
                    var json = JSON.parse(e.data.replace("battle;fight_box;", ""))
                    player.fights.fights = json.fights;
                }
                if (b[2] != null && b[2] == "fight_box") {
                    var id = Number(b[1]);
                    var json = JSON.parse(e.data.replace("battle;" + id + ";fight_box;", ""))

                    if (id == player.idPlayer) {
                        player.fights.fights = json.fights
                    } else {
                        for (var j = 0; j < mapMain.anotherPlayers.length; j++) {
                            if (mapMain.anotherPlayers[j].idPlayer == id) {
                                mapMain.anotherPlayers[j].fights.fights = json.fights
                                return;

                            }
                        }
                    }
                }
                if (b[1] == "exit") {
                    map = new Array();
                    npcMap.forEach(function(element) {

                        clearInterval(element.animation)

                    });
                    npcMap = new Map();
                    document.getElementById("base").style = "display: block;";
                    document.getElementById("boardlistview").style = "display: none;";
                    document.getElementById("menu_of_style").style = "display:none";
                    document.getElementById("train_showTask").style = "display:none"
                }

                if (b[1] == "npc") {
                    var json = JSON.parse(e.data.replace("battle;npc;", ""));
                    var element = checkNpc(json.id);
                    if (element == null) {
                        element = new NPCDeamon(json)
                        element.player = player;
                        element.canvas = example
                        npcMap.set(json.id, element)

                    }
                    element.move(json)
                }


                if (b[1] == "npc_remove") {
                    console.log("remove " + b[2])
                    console.log(npcMap.size)
                    clearInterval(npcMap.get(b[2]).animation)
                    npcMap.delete(b[2])
                    console.log(npcMap.size)
                }
                if (b[1] == "map_init") {

                    var element = document.getElementById("button_pause_resume")
                    element.innerHTML = "<?php echo $locale["BUTTON_PAUSE"];?>"

                    example.addEventListener('mousedown', function(data) {


                        connection.send("battle;down;fire")

                    });
                    document.getElementById("base").style = "display: none;";
                    document.getElementById("boardlistview").style = "display: block;";
                    document.getElementById("menu_of_style").style = "";
                    add_styles();




                    var arr = JSON.parse(b[2]).map_start;
                    mapMain = new MapModel(arr, images, example);
                    if (JSON.parse(b[2]).multiplayer == true) {
                        mapMain.multiplayer = true;
                        $("#MapsMultiplayerPreview").hide(1500);


                    }
                    backMain = new BackgroundMountain(images, example);
                    map.push(backMain)
                    map.push(mapMain)
                    if (isMobile()) {
                        document.getElementById("joy1Div").innerHTML = "";
                        var Joy1 = new JoyStick('joy1Div', {}, function(stickData) {
                            if (Math.abs(stickData.x) == 100 || Math.abs(stickData.y) == 100) {
                                connection.send("battle;down;shift")
                            }
                            if (stickData.cardinalDirection.includes("N")) {
                                connection.send("battle;down;up")
                            }
                            if (stickData.cardinalDirection.includes("E")) {
                                connection.send("battle;down;right")
                            }
                            if (stickData.cardinalDirection.includes("W")) {
                                connection.send("battle;down;left")
                            }
                            if (stickData.cardinalDirection.includes("C")) {
                                connection.send("battle;up;left")
                                connection.send("battle;up;right")
                                connection.send("battle;up;shift")
                            }

                            /*
                            joy1IinputPosX.value = stickData.xPosition;
                            joy1InputPosY.value = stickData.yPosition;
                            joy1Direzione.value = stickData.cardinalDirection;
                            joy1X.value = stickData.x;
                            joy1Y.value = stickData.y;
                            */
                        });
                        // initWebGL(example);
                    }


                    /* var Joy2 = new JoyStick('joy2Div', {}, function(stickData) {

                         
                         joy1IinputPosX.value = stickData.xPosition;
                         joy1InputPosY.value = stickData.yPosition;
                         joy1Direzione.value = stickData.cardinalDirection;
                         joy1X.value = stickData.x;
                         joy1Y.value = stickData.y;
                         
                     });*/
                }
                if (b[1] == "map_add") {
                    var arr = JSON.parse(b[2]).map;
                    mapMain.add(arr);

                }
                if (b[1] == "pos_me") {

                    player.setPosition(Number(b[2]) * SIZE, Number(b[3]) * SIZE)

                    mapMain.player = player;
                }
                if (b[1] == "pos") {
                    if (mapMain.multiplayer != null && mapMain.multiplayer) {
                        if (Number(b[2]) == player.idPlayer) {
                            player.setPosition(Number(b[3]) / START_SIZE * SIZE, Number(b[4]) / START_SIZE *
                                SIZE)
                            player.side = Number(b[5])
                        } else {

                            for (var j = 0; j < mapMain.anotherPlayers.length; j++) {
                                if (mapMain.anotherPlayers[j].idPlayer == Number(b[2])) {
                                    mapMain.anotherPlayers[j].setPosition(Number(b[3]) / START_SIZE * SIZE,
                                        Number(b[4]) / START_SIZE * SIZE);
                                    mapMain.anotherPlayers[j].side = Number(b[5]);
                                    return;

                                }
                            }

                        }

                    } else {
                        player.setPosition(Number(b[2]) / START_SIZE * SIZE, Number(b[3]) / START_SIZE * SIZE)
                        player.side = Number(b[4])
                    }
                    // mapMain.player = player;
                }
                if (b[1] == "task_add") {

                    var json = JSON.parse(e.data.replace("battle;task_add;", ""))
                    document.getElementById("train_showTask").style = ""
                    new WindowNotification(getNameOfTask(json.id), json["text<?php echo $lan;?>"], json,
                        "resume_resume();");
                    taskModel = json;
                    var element = document.getElementById("button_pause_resume")

                    if (element.innerHTML == "<?php echo $locale["BUTTON_PAUSE"];?>") {

                        element.innerHTML = "<?php echo $locale["BUTTON_RESUME"];?>"
                    } else {

                        element.innerHTML = "<?php echo $locale["BUTTON_PAUSE"];?>"
                    }

                }



            }
            if (b[0] == "lobby") {
                if (b[1] == "change_count_of_people") {
                    document.getElementById(b[2] + "_count").innerHTML = Number(b[3])
                }
                if (b[1] == "maps") {
                    var jsonMain = JSON.parse(e.data.replace("lobby;maps;", ""));
                    mapsMultiplayerController.setMaps(jsonMain);
                }
                if (b[1] == "addBattle") {
                    var json = JSON.parse(e.data.replace("lobby;addBattle;", ""));
                    mapsMultiplayerController.add(json)

                }

                if (b[1] == "shop_init") {
                    shopModel = new ShopModel(JSON.parse(e.data.replace("lobby;shop_init;", "")))
                }
                if (b[1] == "shop_bought") {
                    $("#" + b[2]).slideUp(500);
                    setTimeout(function() {
                        document.getElementById(b[2]).remove();

                        $('#shop').slideUp(1500)
                    }, 500)
                }
                if (b[1] == "shop") {
                    if (b[2] == "money_not_enough") {
                        alert("Недостаточно денег!");
                    }
                }

                if (b[1] == "train_get") {
                    var id = Number(b[2]);
                    var description = e.data.replace("lobby;train_get;" + id + ";", "");
                    var level = id;
                    //#№
                    new WindowBattlePreview(level, "<?php echo $locale["BUTTON_LEVEL"];?> " + level,
                        description, "trainInit()");


                }
                if (b[1] == "main_get") {
                    var id = Number(b[2]);
                    var description = e.data.replace("lobby;main_get;" + id + ";", "");
                    var level = id;
                    //#№
                    new WindowBattlePreview(level, "<?php echo $locale["BUTTON_LEVEL"];?> " + level,
                        description, "playInit()");


                }
                if (b[1] == "player_size") {
                    var w = Number(b[2])
                    var h = Number(b[3])
                    player.w = w;
                    player.h = h;
                }
                if (b[1] == "change_data") {
                    var name = b[2];
                    var jsonObject = JSON.parse(e.data.replace("lobby;change_data;" + name + ";", ""));
                    var playerPreview = new PlayerPreview(jsonObject)
                    loadJsonFromPlayer(playerPreview)

                    playerPreviewController.add(playerPreview)
                }
                if (b[1] == "ping") {
                    //var datas = new Date().getTime()
                    document.getElementById("ping").innerHTML = "Ping: " + (new Date().getTime() - pingdata);
                    //pingdata = datas
                }
                if (b[1] == "score_money") {






                    document.getElementById("base_score").innerHTML = Number(b[2]);
                    document.getElementById("base_coins").innerHTML = Number(b[3]);
                    document.getElementById("magicKey_score").innerHTML = Number(b[4]);
                    if (!isScore) {
                        document.getElementById("base_score").classList.remove("animate_scale_run");
                        document.getElementById("base_coins").classList.remove("animate_scale_run");
                        document.getElementById("base_score").classList.remove("animate_scale_unrun");
                        document.getElementById("base_coins").classList.remove("animate_scale_unrun");


                        document.getElementById("base_score").classList.add("animate_scale_run");
                        document.getElementById("base_coins").classList.add("animate_scale_run");
                        setTimeout(function() {
                            document.getElementById("base_score").classList.remove("animate_scale_run");
                            document.getElementById("base_coins").classList.remove("animate_scale_run");

                            //document.getElementById("base_score").classList.add("animate_scale_unrun");
                            //document.getElementById("base_coins").classList.add("animate_scale_unrun");


                        }, 1200)
                        setTimeout(function() {
                            // document.getElementById("base_score").classList.remove("animate_scale_unrun");
                            //document.getElementById("base_coins").classList.remove("animate_scale_unrun");

                            isScore = false;

                        }, 2200)
                        isScore = true;
                    }
                }
                if (b[1] == "login") {
                    // try {
                    if (isMobile()) toggleFullScreen();
                    player = new Player();
                    player.json = JSON.parse(e.data.replace("lobby;login;", ""))
                    player.login = player.json.login;



                    $("#shop").slideDown(600)
                    // $("#MapsMultiplayerPreview").show(600)




                    var pl_id = player.getPlayerIs();
                    var interval = setInterval(function() {
                        if (loaderview.inited == false /*isLoading == false*/ ) {
                            var name = playerPreviewController.hash.get(pl_id.id);


                            document.getElementById("base_name").innerHTML = name.name
                            document.getElementById("base_level_info_name").innerHTML = name.name
                            document.getElementById("base_about").innerHTML = name.text
                            document.getElementById("base_img").src = images.get(pl_id.id + "_prev").src
                            var jsonPlayerFromBase = getPlayerIs()
                            document.getElementById("base_level").innerHTML =
                                "<?php echo $locale["BUTTON_LEVEL"];?> " +
                                jsonPlayerFromBase.type
                            // connection.send("lobby;inited;" + innerWidth + ";" + innerHeight)

                            connection.send("lobby;shop_init")

                            init()
                            clearInterval(interval)
                        }
                    }, 500);
                    // } catch (e) {
                    //     alert(e)
                    // }

                }
                if (b[1] == "change_player") {
                    player.json = JSON.parse(e.data.replace("lobby;change_player;", ""))
                    var pl_id = player.getPlayerIs();
                    player.id = pl_id.id;

                }
                if (b[1] == "set_player") {
                    player.json = JSON.parse(e.data.replace("lobby;set_player;", ""))



                    var pl_id = player.getPlayerIs();
                    var name = playerPreviewController.hash.get(pl_id.id);


                    document.getElementById("base_name").innerHTML = name.name
                    document.getElementById("base_level_info_name").innerHTML = name.name

                    document.getElementById("base_about").innerHTML = name.text
                    document.getElementById("base_img").src = images.get(pl_id.id + "_prev").src
                    var jsonPlayerFromBase = getPlayerIs()
                    document.getElementById("base_level").innerHTML = "<?php echo $locale["BUTTON_LEVEL"];?> " +
                        jsonPlayerFromBase.type
                    windowLevel.inited()


                }
                if (b[1] == "upgrade") {
                    player.json = JSON.parse(e.data.replace("lobby;upgrade;", ""))
                    var pl_id = player.getPlayerIs();
                    player.id = pl_id.id;
                    upgradePlayerUpdate()
                    var id_player = player.id
                    // var myPlayerIdIndex = getPlayerIsGet();
                    var jsonPlayer = player.json;
                    var jsonPlayerFromBase = getPlayerIs();


                    var id = jsonPlayerFromBase.id;
                    var myPlayerIdIndex = jsonPlayerFromBase.type;

                    var json = playerPreviewController.hash.get(player.id).json;
                    var levels = json.levels;

                    var json = levels[myPlayerIdIndex]

                    new WindowNotificationMinus("<?php echo $locale["PURCHASE_SUCC"];?>",
                        "<?php echo $locale["ASQUIRED_LEVEL"];?> " +
                        myPlayerIdIndex, {
                            "addmoney": json.price,
                            "addscore": Math.floor(json.price / 2)
                        }, null)

                }
                if (b[1] == "players_setting") {
                    // isLoading = true;
                    var playerPreview = new PlayerPreview(JSON.parse(e.data.replace("lobby;players_setting;",
                        "")))
                    //console.log(e.data)
                    loadJsonFromPlayer(playerPreview)
                    //console.log(json)
                    playerPreviewController.add(playerPreview)
                }
                if (b[1] == "breath_setting") {

                    /*var jsonObject = JSON.parse(b[2])
                    var styles = jsonObject.styles
                    var id = jsonObject.id;
                    */
                    var breathPreview = new BreathPreview(JSON.parse(e.data.replace("lobby;breath_setting;",
                        "")))
                    breathPreviewController.add(breathPreview)


                }
            } else if (b[0] == "account") {
                if (b[3 - 2] == "money") {
                    var c = Number(b[2]);
                    document.getElementById("money").innerHTML = " " + b[2] + "$";

                }
            } else if (b[0] == "position") {
                if (b[3 - 2] == "board") {
                    //      $('.block').on('click',MoveTouch);
                    var a = Number(b[2]);
                    if (a == (0)) {
                        clear();
                        Side = "white";
                        //  initBoard();
                        // showFigure(boardfigureposition);

                        //  Move();
                    } else if (a == 1) {
                        clear();
                        Side = "black";
                        // initBlackBoard();
                        //  showFigure(boardfigureposition);
                        Move();
                    } else {
                        Side = "none";
                    }

                    document.getElementById('second').innerHTML = 16;
                    document.getElementById("timer").style = "display: block;";

                } else if (b[1] == "boardreturn") {
                    var a = Number(b[2]);
                    if (a == (0)) {
                        clear();
                        Side = "white";
                        //  initBoard();
                        //  showFigure(boardfigureposition);
                        //   $('.block').on('click',movet);
                        $('.block').on('vclick', movet);
                        Move();
                    } else if (a == 1) {
                        clear();
                        Side = "black";
                        //initBlackBoard();
                        //showFigure(boardfigureposition);
                        Move();
                        // $('.block').on('click',movet);
                        $('.block').on('vclick', movet);
                    } else {
                        Side = "none";
                    }

                    document.getElementById('second').innerHTML = 16;
                    document.getElementById("timer").style = "display: none;";
                }
            } else if (b[0] == "auth" || b[0] == "login") {

                if (b[1] == "true") {

                    //    alert("true");
                    var aaaa = document.getElementById("user").value;
                    var bbbb = document.getElementById("pass").value;
                    document.cookie = "db=" + aaaa;
                    document.cookie = "hash=" + bbbb;



                    document.getElementById("base").style = "display: block;";
                    document.getElementById("auth").style = "display: none;";
                    var height = window.innerHeight;
                    var width = window.innerWidth;
                    if (height >= 1080) height = 1080;
                    if (width >= 1920) width = 1920;

                    //example.style = "width:100%;height:100%;"

                    example.width = isMobile() == true ? width * SIZE_CHANGE_CANVAS_PHONE : width;
                    example.height = isMobile() == true ? height * SIZE_CHANGE_CANVAS_PHONE : height;

                    document.getElementById("boardid").style = "display: none;";
                    document.getElementById("panel_data").style = ""
                    // document.getElementById("board").style="display: none;";
                    // document.getElementById("exit").style = "display: none;";
                    // document.getElementById("Nickname").innerHTML = "" + get_cookie("db");



                    //////////////////////////////////







                } else {
                    alert("<?php echo $locale["INVALID_DATA"];?>");
                    window.location.href(window.location.reload() + "?invalid=true");
                }





            } else if (b[0] == "tables") {
                if (b[1] == "all") {
                    initBoardLists1(b[2], b[3], b[4], b[5]);
                } else if (b[1] == "remove") {
                    var c = document.getElementById("" + b[2]);
                    if (c != null)
                        c.remove();
                } else if (b[3 - 2] == "upd") {
                    document.getElementById("" + b[2]).innerHTML = "";
                    $('#' + b[2]).append(updates
                        .replace('stavka', b[5])
                        .replace('number', b[6])
                        .replace('long', b[7] / 60000)
                        .replace('name', b[3])
                        .replace('joined', b[2]));
                } else if (b[1] == "exit") {
                    document.getElementById("boardid").style = "display: none;";
                    document.getElementById("board").style = "display: none;";
                    document.getElementById("exit").style = "display: none;";
                    document.getElementById("EnemyPanel").innerHTML = "";

                    document.getElementById("boardlistview").style = "display: block;";



                } else if (b[1] == "money") {
                    document.getElementById("moneygame").innerHTML = b[2] + "$";
                } else if (b[1] == "tree") {
                    document.getElementById("treegame").innerHTML = b[2] + " - trees";
                } else if (b[1] == "oil") {
                    document.getElementById("oilgame").innerHTML = b[2] + " - oil";
                }

            } else if (b[0] == "game") {
                if (b[1] == "restart") {
                    document.getElementById("board").style = "display:block";
                } else if (b[1] == "enemyExit") {

                } else if (b[1] == "removetimers") {


                    document.getElementById("timer").style = "display:none";
                } else if (b[1] == "gamestart") {
                    alert("Игра началась!");
                } else if (b[1] == "captcha") {
                    var i = Number(b[2]);
                    document.cookie = "capid=" + i;
                    document.getElementById("captcha").style = "display:block";
                    document.getElementById("auth").style = "display:none";
                    document.getElementById("reg").style = "display:none";
                    var code = '<img src="data:image/png;base64,' + b[3] + '">';
                    document.getElementById("imgcap").innerHTML = code;


                } else if (b[1] == "outcap") {
                    alert("Время вышло,данная капча больше не действительна.")
                } else if (b[1] == "noncaptcha") {
                    alert("Капча введена неверно!");
                } else if (b[1] == "limit") {

                    alert("Лимит введения капчи исчерпан");
                    upd();
                } else if (b[1] == "unvalid") {
                    if (b[2] == "login") {
                        alert("Неправильно введён логин! Mинимум 4 символа,максимум 10 символов");
                    } else {
                        alert("Неправильно введён пароль! Mинимум 6 символов ,максимум 20");
                    }
                } else if (b[1] == "register") {
                    if (b[2] == "true") {
                        alert("Вы успешно зарегистрировались");
                        upd();
                    } else {
                        alert("Выбранный вами логин уже занят");
                        upd();
                    }
                } else if (b[1] == "join") {

                    document.cookie = "table=" + b[2];


                    Move();

                    initBoard1(Number(b[3].split("x")[0]), Number(b[3].split("x")[1]))
                    document.getElementById("s100000").className = "block " + b[4];
                    document.getElementById("boardlistview").style = "display: none;";
                    document.getElementById("auth").style = "display: none;";
                    document.getElementById("boardid").style = "display: flex;";

                    document.getElementById("board").style = "display: block;";
                    document.getElementById("exit").style = "display: block;";;


                } else if (b[1] == "return") {

                    if (b[2] = "boards") {
                        document.cookie = "table=" + b[3];
                        document.getElementById("boardlistview").style = "display: none;";
                        document.getElementById("auth").style = "display: none;";
                        document.getElementById("boardid").style = "display: flex;";
                        //    document.getElementById("board").style="display: block;";
                        document.getElementById("exit").style = "display: block;";
                        document.getElementById("board").style = "display: none;";


                    }
                } else if (b[3 - 2] == "goodbye") {
                    document.getElementById("boardid").style = "display: none;";
                    document.getElementById("board").style = "display: none;";
                    document.getElementById("exit").style = "display: none;";
                    document.getElementById("boardlistview").style = "display: block;";

                } else if (b[1] == "trashboard") {
                    alert("Вы не можете создавать больше 3-ёх столов в течение 3-ёх минут")
                } else if (b[3 - 2] == "tablelist") {
                    if (b[2] == "notfound") {
                        var c = document.getElementById("" + b[3]);
                        c.remove();
                        alert("Стол был закрыт.");
                    }
                }
            }



            // Move();

            //console.log('Server: ' + e.data);
        }






        document.getElementById("user").value = "" + get_cookie("db");
        document.getElementById("pass").value = "" + get_cookie("hash");
        example = document.getElementById("main");
        //initWebGL(example)
        ctx = example.getContext('2d'); //initWebGL(example);//example.getContext('2d');
        fights = new Fights(example);

        addEventListener("resize", resizeThrottler);
        addEventListener('keydown', (event) => {
            var k = event.code

            for (var i = 1; i <= 9; i++) {
                if (k == "Digit" + i) {
                    connection.send("battle;change;" + (i - 1))
                }
            }

            if (k == "Backquote") {
                connection.send("battle;change;10")
            }

            if (k == "Digit0") {
                connection.send("battle;change;9")
            }

            if (k == "KeyD") {
                connection.send("battle;down;right");
                // if (SHIFT) backMain.move(-1, 0)
                // else
                //   backMain.move(-0.5, 0)
                backMain.dvv(-0.005)

            }
            if (k == "KeyW") {
                connection.send("battle;down;up");
            }
            if (k == "KeyA") {
                connection.send("battle;down;left");
                //  if (SHIFT) backMain.move(1, 0)
                // else
                //   backMain.move(0.5, 0)
                backMain.dvv(0.005)
            }
            if (k == "ShiftLeft") {
                SHIFT = true
                connection.send("battle;down;shift");
            }

        });
        addEventListener('keyup', (event) => {
            var k = event.code
            if (k == "ShiftLeft") {
                SHIFT = false
            }
            if (k == "KeyD") {
                connection.send("battle;up;right");
                // backMain.move(0, 0)
                backMain.undvv();


            }
            if (k == "KeyA") {
                connection.send("battle;up;left");
                //backMain.move(0, 0)
                backMain.undvv();

            }
            if (k == "ShiftLeft") {
                SHIFT = false
                connection.send("battle;up;shift");
            }
        });



    }
    var time = 0;
    var timeIndex = 0;
    var timeLast = 0;
    var timeL = 0;

    function animate() {
        ctx.fillStyle = '#ffffff'
        ctx.fillRect(0, 0, example.width, example.height);
        for (var i = 0; i < map.length; i++) {
            if (map[i] != null)
                map[i].action(ctx);
        }
        for (var [key, value] of npcMap) {
            value.draw(ctx);

        }
        fights.action(ctx)
        var data = new Date();
        if (data.getTime() - timeLast >= 400) {
            timeLast = data.getTime()
            document.getElementById("fps").innerHTML = "FPS: " + Math.floor(1000 / (data.getTime() -
                time)); ///timeIndex;
            //   timeIndex=0;
            //   time = 0;
        } //else{
        //   timeIndex+=1;

        //   time+=data.getTime()-timeL
        //  console.log(data.getTime()-timeL)
        time = data.getTime();
        // }
        //console.log("fps: "+Math.floor(1000/(data.getTime()-time)))
        time = data.getTime()
        requestAnimationFrame(animate);
    }
    async function run() {
        var jsonforimageloader = await loadJSON("res/index.json?id=" + v);
        //  jsonforimageloader = JSON.parse(jsonforimageloader)

        imageLoader = new ImageLoader(jsonforimageloader);
        await loadJsonSprites()
        await imageLoader.loadAll(images)

        mainInterval = setInterval(function() {
            connection.send("lobby;ping")
            pingdata = new Date().getTime();
        }, 200);
        //setInterval(function(){animate()},15)
        requestAnimationFrame(animate);
    }


    function onShow(e) {

        var b = document.getElementsByClassName("join")[0];
        if (b != null)
            b.remove();
        $('.panel').append(str.replace('joined', e.id));

    }

    function create() {

        var c = prompt("Введите имя стола.(необязательное поле)");
        var b = prompt("Введите ставку.(обязательно,минимум 5$,введите цифру)");
        if (Number(b) > 3) {
            connection.send("tables;create;" + c + ";" + b + ";" + get_cookie("db") + ";" + get_cookie("hash"));
        } else {
            alert("Некорректно была введена ставка ,минимум 5$");
        }
    }

    function joined(e) {

        connection.send("tables;join;" + e.id + ";" + get_cookie("db") + ";" + get_cookie("hash"));
    }

    function auth(e) {
        var a = document.getElementById("user").value;
        var b = document.getElementById("pass").value;


        connection.send("login;" + a + ";" + b + ";<?php echo $lan_;?>");


    }

    function get_cookie(cookie_name) {
        var results = document.cookie.match('(^|;) ?' + cookie_name + '=([^;]*)(;|$)');

        if (results)
            return (unescape(results[2]));
        else
            return "";
    }

    function initBoardLists(cool, number, stavcka, time, name) {
        $('#boardlistview').append(boardi.replace('sid', cool)
            .replace('stavka', stavcka)
            .replace('number', number)
            .replace('long', time / 60000)
            .replace('name', name));


    }

    function initBoardLists1(id, level, time, size) {
        $('#boardlistview').append(boardi.replace('sid', id));
    }



    var figures = "";
    var updates =
        '<div style="display:flex;width:25%;margint-top:20%;font-size:95%;align-item:center;justify-content: center;align-items: center;">name</div><div style="display:flex;width:25%;margint-top:20%;font-size:95%;align-item:center;justify-content: center;align-items: center;">stavka$</div> <div style="width:25%;font-size:95%;align-items: center;display:flex;">numberpeop </div><div style="font-size:95%;width:25%;display:flex;align-items:center;">long min </div>';

    ///////////////////////////////////////


    //getFiguresLadia(getBoardsMas(),42);

    var c = String.fromCharCode()
    //////////////////////////////////////



    function reverseStr(str) {

        return str.split("").reverse().join("");

    }



    function conf() {
        let a = document.getElementById("cap").value;
        if (a != null) {
            connection.send("captcha;id;" + get_cookie("capid") + ";" + a);
        }
    }
    let a = 0;

    function upd() {
        if (a == 0) {
            a = 1;
            document.getElementById("auth").style = "display:none";
            document.getElementById("reg").style = "display:block";
            document.getElementById("captcha").style = "display:none";
        } else {
            a = 0;
            document.getElementById("auth").style = "display:block";
            document.getElementById("reg").style = "display:none";
            document.getElementById("captcha").style = "display:none;";
        }
    }
    // Log errors


    function reg() {
        var a = document.getElementById("reguser").value;
        var b = document.getElementById("regpass").value;
        if (a != null && b != null) {
            connection.send("register;" + a + ";" + b);
        }

    }
    // Log messages from the server


    function play() {
        connection.send("lobby;inited")
    }

    function playInit() {
        connection.send("lobby;play;" + window.innerWidth + ";" + window.innerHeight)
    }


    function done(e) {
        connection.send("tabless;" + get_cookie("table") + ";board;Done;" + get_cookie("db") + ";" + get_cookie(
            "hash") + ";true");
        document.getElementById("board").style = "display: none;";
        document.getElementById("timer").style = "display: none;";
        document.getElementById("exit").style = "display: block;";


    }




    var get = window
        .location
        .search
        .replace('?', '')
        .split('&')
        .reduce(
            function(p, e) {
                var a = e.split('=');
                p[decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
                return p;
            }, {}
        );



    function redraw() {

    }

    function clear() {


        document.getElementsByClassName("board")[0].innerHTML = "";
    }



    var width = 0;
    var height = 0;




    function exit(e) {
        if (nextLevel) {
            connection.send("battle;exit")
        }
        nextLevel = true;
        // connection.send("tabless;" + get_cookie("table") + ";removeuser;" + get_cookie("db") + ";" + get_cookie("hash"));
    }


    function putagain(str) {
        Move();
        if (str.id == "sell") {

            var p = prompt("How many oils you wanna sell>?");
            connection.send("tables;sell;" + p)
        } else if (str.id == "buytree") {
            var p = prompt("How many trees you wanna buy>?");
            connection.send("tables;buy;" + p)
        } else {
            map[100000] = str.id;
            document.getElementById("f100000").innerHTML = getChessSymbol(str.id);
        }
    }

    function randomIntFromInterval(min, max) { // min and max included 
        return Math.floor(Math.random() * (max - min + 1) + min)
    }

    function create_map_multiplayer() {
        var name = "Map#" + randomIntFromInterval(0, 1000000);
        connection.send('lobby;create_map_multiplay;{"type":"TM","name":"' + name + '","maxPlayer":10}');
    }
    </script>

    <div id="boardlistview" class="boardlistview" style="display: none;display: none;">

        <div style="display: flex;position:fixed;width: 100%;height:12%;top:0px;left:0px;justify-content: flex-start;">
        </div>
        <center>
            <h1 style="display:none; font-size:150%;margin-bottom: 0px;align-items: center;"> Список столов </h1>
        </center>
        <canvas id='main' style="position: absolute;width: 100%;height: 100%;">Обновите браузер</canvas>

        <div class="dws-submit pause_button" id="button_pause_resume" onclick="pause_resume();" style="
    bottom: calc(45px + 1%);
"><?php echo $locale["BUTTON_PAUSE"];?></div>

        <div id="joy1Div" style="width:160px;height:160px;position:absolute;bottom:6%;left:5%;zoom: 140%;"></div>

        <div id="fps"></div>
        <div id="ping"></div>


        <div class="dws-submit pause_button" id="exit_button_canvas" onclick="exit();">
            <?php echo $locale["TEXT_EXIT"];?></div>


        <div class="panel" style="display: none;">
            <div class="view" style="display: none;align-items: center;">Смотреть</div>
        </div>

        <div id="heartPanel"></div>

    </div>
    <div id="panel_data" style="display: none;">




        <div class="base_element_information" style="
            height: 100%;
            width: 20%;
            justify-content: flex-start;
        ">
            <div class="base_element_information_left"><img id="panel_rang_img" width="35px">
            </div>
            <div id="base_rang" class="base_element_information_right">10</div>
        </div>






        <div class="base_element_information" style="
            height: 100%;
            width: 20%;
        ">
            <div class="base_element_information_left"><img src="img/star.png"
                    width="15px"><?php echo $locale["TEXT_SCORE"];?>: </div>
            <div id="base_score" class="base_element_information_right">10</div>
        </div>


        <div class="base_element_information" style="
            height: 100%;
            width: 20%;
        ">
            <div class="base_element_information_left"><img src="img/magicCard.png" width="15px">
                <?php echo $locale["TEXT_MAGICKEY"];?>: </div>
            <div id="magicKey_score" class="base_element_information_right">0</div>
        </div>



        <div class="base_element_information" style="
            height: 100%;
            width: 20%;
        ">
            <div class="base_element_information_left"><img src="img/coin.png" width="15px">
                <?php echo $locale["TEXT_MONEY"];?>: </div>
            <div id="base_coins" class="base_element_information_right">10</div>
        </div>
    </div>
    <div id="base" style="display:none;">
        <center>
            <h1 style="font-style: oblique; color: #0e215b;font-size: 40pt;margin-top: 0px;" id="base_name"></h1>
        </center>
        <img id="base_img" style="position: absolute;width: 34%; bottom: 1%;left: 0%;">
        <div id="base_about">
        </div>
        <div id="base_level" onclick="windowLevel.init()" class="dws-submit"> <?php echo $locale["BUTTON_LEVEL"];?>
        </div>
        <div id="base_upgrade" class="dws-submit" onclick="windowLevel.init()"><?php echo $locale["BUTTON_UPGRADE"];?>
        </div>
        <div id="base_play" class="dws-submit" onclick="play();"><?php echo $locale["BUTTON_PLAY"];?></div>
        <div id="shop_button" class="dws-submit" onclick="$('#shop').slideDown(1500)"> <?php echo $locale["SHOP"];?>
        </div>
        <div id="base_level_info" style="display: none;">
            <center>
                <h1 id="base_level_info_name"></h1>
            </center>
            <div id="base_level_info_data">
                <div id="base_data" class="base_element">

                    <div class="base_element_information">
                        <div class="base_element_information_left"><img src="img/heart.png" width="12px">
                            <?php echo $locale["TEXT_HEALTH"];?>: </div>
                        <div id="base_heart" class="base_element_information_right">160</div>
                    </div>
                    <div class="base_element_information">
                        <div class="base_element_information_left"><img src="img/thunder.png" width="12px">
                            <?php echo $locale["TEXT_SPEED"];?>:
                        </div>
                        <div id="base_speed" class="base_element_information_right">0</div>
                    </div>


                    <div class="base_element_information">
                        <div class="base_element_information_left"><img src="img/star.png" width="12px">
                            <?php echo $locale["TEXT_JUMP"];?>: </div>
                        <div id="base_score_player" class="base_element_information_right">0</div>
                    </div>

                    <div class="base_element_information">
                        <div class="base_element_information_left"><img src="img/bomb.png" width="12px">
                            <?php echo $locale["TEXT_ENERGY"];?>:
                        </div>
                        <div id="base_energy" class="base_element_information_right">1000</div>
                    </div>
                    <div class="base_element_information">
                        <div class="base_element_information_left"><img src="img/knight.png" width="12px">
                            <?php echo $locale["TEXT_POWER"];?>: </div>
                        <div id="base_power" class="base_element_information_right">10000</div>
                    </div>



                    <div class="base_element_information">
                        <div class="base_element_information_left"><img src="img/kill.png" width="12px">
                            <?php echo $locale["TEXT_RUNDIST"];?>: </div>
                        <div id="base_running_distance" class="base_element_information_right">0</div>
                    </div>
                    <div class="base_element_information">
                        <div class="base_element_information_left"><img src="img/garbish.png" width="12px">
                            <?php echo $locale["TEXT_VELOCITY_OF_RECOVERY"];?>: </div>
                        <div id="base_velocity_of_recovery" class="base_element_information_right">0</div>
                    </div>



                </div>
                <div id="base_styles" class="base_element"></div>
            </div>


            <div id="base_level_panel">
                <a id="base_upgrade" onclick="windowLevel.close();getDataTrain();" class="dws-submit"
                    style="position: unset;right: 1%;font: size 100%;"><?php echo $locale["TEXT_TRAIN"];?></a>
                <a id="base_upgrade" class="dws-submit" style="position: unset;right: 1%;font: size 100%;"
                    onclick="windowLevel.close();upgradePlayer()"><?php echo $locale["BUTTON_UPGRADE"];?></a>
                <a id="base_level_info_level" style="font: size 100%;" onclick="windowLevel.close()"
                    class="dws-submit"><?php echo $locale["BUTTON_CLOSE"];?></a>

            </div>


        </div>
        <span class="right_arrow" onclick="nextPlayer()">→</span>
        <span class="left_arrow" onclick="backPlayer()">←</span>
    </div>



    <div id="MapsMultiplayerPreview" style="display: none;">

        <div class="shop">
            <center>
                <h1 id="base_level_info_name"><?php echo $locale["BUTTON_LOCATION"];?></h1>
            </center>
            <div id="mapsMultiplayer">


                <div class="shop_base_element" id="mapsMultiplayerPreview">

                </div>
            </div>


            <div id="base_level_panel">
                <a id="base_level_info_level" onclick="$('#MapsMultiplayerPreview').hide(1500)"
                    class="dws-submit"><?php echo $locale["BUTTON_CLOSE"];?></a>
                <a id="base_level_info_level" onclick="create_map_multiplayer()"
                    class="dws-submit"><?php echo $locale["BUTTON_CREATE"];?></a>

            </div>


        </div>
    </div>

    <div id="shop" style="display: none;">


        <div class="shop" style="">
            <center>
                <h1 id="base_level_info_name"><?php echo $locale["SHOP"];?></h1>
            </center>
            <div id="shop_product">


                <div class="shop_base_element" id="shop_piece">

                </div>
            </div>


            <div id="base_level_panel">
                <a id="base_level_info_level" onclick="$('#shop').slideUp(1500)"
                    class="dws-submit"><?php echo $locale["BUTTON_CLOSE"];?></a>

            </div>


        </div>
    </div>

    <div id="train" style="display: none;">


    </div>

    <div id="auth">
        <div class="container">
            <img class="tes" onclick=" toggleFullScreen();" src="https://dwstroy.ru/lessons/les3373/demo/img/men.png">
            <br />
            <a style="font-size:150%"><?php echo $locale["TEXT_LOGIN"];?></a>
            <br />
            <div class="dws-input">

                <input type="text" id="user" name="username" placeholder="логин" style="margin-top: 10px;">
            </div>
            <div class="dws-input">
                <input type="password" id="pass" name="password" placeholder="Пароль">
            </div>
            <button class="dws-submit"
                onClick="auth(this); return false;"><?php echo $locale["BUTTON_LOGIN"];?></button><br />
            <a href="#" onClick="upd()"><?php echo $locale["TEXT_REG"];?></a>

            <br />
            <a style="color:white"> 2020&copy;</a>
        </div>


    </div>












    <div id="reg" style="display:none;">
        <div class="container">
            <img class="tes" src="https://dwstroy.ru/lessons/les3373/demo/img/men.png">
            <br />
            <a style="font-size: 150%;"> <?php echo $locale["TEXT_REG"];?></a>
            <br />
            <div class="dws-input">

                <input type="text" style="margin-top:10px;" id="reguser" name="username"
                    placeholder="<?php echo $locale["INPUT_LOGIN_REG"];?>">
            </div>
            <div class="dws-input">
                <input type="password" id="regpass" name="password"
                    placeholder="<?php echo $locale["INPUT_PASSWORD_REG"];?>">
            </div>
            <button class="dws-submit" onClick="reg(); return false;"><?php echo $locale["TEXT_REG"];?></button><br />
            <a href="#" onClick="upd()"><?php echo $locale["TEXT_LOGIN"];?></a>


            <br />
            <a style="color:white">2020&copy;</a>
        </div>


    </div>






    <div id="captcha" style="display:none;">
        <div class="container">
            <img class="tes" src="https://dwstroy.ru/lessons/les3373/demo/img/men.png">
            <br />
            <a href="#">Подтверждение</a>
            <br />
            <div class="dws-input">

                <input type="number" id="cap" name="username" placeholder="Введите число">
                <br>
                <div id="imgcap"></div>
            </div>

            <button class="dws-submit" onClick="conf(); return false;">Ввести</button><br />



            <br />

        </div>


    </div>


    <div class="board" id="boardid" style="display:none;">

    </div>
    <div class="stl" style="display:none;">


    </div>



    <div id="notification">






    </div>


    <div id="train">
        <a id="train_showTask" style="display: none;" onclick="showTask()"
            class="dws-submit"><?php echo $locale["TEXT_TASK"];?></a>

    </div>
    <div id="menu_of_style" style="display: none;">



    </div>



    <div id="loader_view" style="display:none;">
        <div id="loader_view_back">
            <div id="loader_view_loader">
                <?php echo $locale["TEXT_LOADING"];?>
            </div>
        </div>
    </div>
    <div id="power_shot">

    </div>
</body>

</html>