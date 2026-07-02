<?php
$user_colours = array(
    "voidpointer"   => array("#ff0080"),
    "vandeer"       => array("#ed960b", "#e0e0e0"),
    "vanpointer"    => array("#ff0080", "#ed960b"),
    "tardis"        => array("#072A6C"),
    "yuukii"        => array("#ff8dee"),
    "jstar"         => array("#FF00FF"),
    "aurora"        => array("#FF8FAB"),
    "scaredy"       => array("#f4a4cc"),
    "hotdog"        => array("#cd2547", "#050505"),
    "acerx"         => array("#9d59b8"),
    "kotnik"        => array("#55165e", "#18848e"),
    "luki"          => array("#fccafd"),
    "atoms"         => array("#ff0000"),
);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Robocord being silly.</title>
    <meta property="og:title" content="Robocord being silly.">
    <meta property="og:description" content="People from the Robopup Party Discord server saying unhinged things">
    <meta property="og:url" content="https://robocord.puppy-girl.uk">
    <meta property="og:image" content="https://robocord.puppy-girl.uk/voidpointer/2026-06-23_14-02.png">
    <meta name="theme-color" content="#7289da">
    <style>
        ::-webkit-scrollbar {
            width: 12px;  /* Width of vertical scrollbars */
            height: 12px; /* Height of horizontal scrollbars */
        }

        /* 2. The background track */
        ::-webkit-scrollbar-track {
            background: #f3f4f6; 
            border-radius: 6px;
        }

        /* 3. The moving draggable handle */
        ::-webkit-scrollbar-thumb {
            background: #6366f1; 
            border-radius: 6px;
            border: 3px solid #f3f4f6; /* Creates padding around the thumb */
        }

        /* 4. Handle behavior on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #4f46e5; 
        }
        html {
            -moz-text-size-adjust: none;
            -webkit-text-size-adjust: none;
            text-size-adjust: none;
            scroll-behavior: smooth;
        }
        body {
            background-color: #0a0a0a;
        }
        a {
            width: fit-content;
            margin: auto;
            display: block;
        }
        img {
            width: fit-content;
            max-width: calc(98vw - 16px - 8px);
            margin: auto;
            display: block;
            border-radius: 5px;
            transition: 0.1s; 
        }
        img:hover {
            scale: 1.05;
        }
        .hb {
            color: #ff91ff; 
            width: fit-content;
            margin: auto; 
            padding: 5px
        }
        .name {
            color: #ffffff;
            width: fit-content;
            margin: auto; 
            font-size: 33px; 
            padding-bottom:1%;
        }
        .servr {
            border: solid 2px #545454;
            border-radius: 10px;
            padding: 8px;
            background-color: #7289da;
            color: #ffffff;
            user-select: none;
            text-decoration: none;
            transition: 0.2s; 
        }
        .servr:hover {
            scale: 1.1; 
            background-color: #5865f2;
        }
        .sourcecode {
            border: solid 2px #545454;
            border-radius: 10px;
            padding: 8px;
            background-color: #af0fafff;
            color: #ffffff;
            user-select: none;
            text-decoration: none;
            transition: 0.2s; 
        }
        .sourcecode:hover {
            scale: 1.1; 
            background-color: #ce32ceff;
        }
        .user {
            background-color: #252525;
            border: solid 4px #545454;
            border-radius: 25px;
            margin: 1vw;
        }
        .name_bg {
            background-color: rgba(255, 255, 255, 0.2); 
            backdrop-filter: blur(4px);
            width: fit-content;
            padding: 25px;
            margin: auto;
            margin-bottom: 15px;
            border-radius: 25px;
            transition: 0.1s;
        }
        .name_bg:hover {
            scale: 1.05;
            background-color: rgba(255, 255, 255, 0.3);
        }

        .menu_wrapper {
            
        }
        .menu {
            position: fixed;
            z-index: 1000;
            display: flex;
            justify-content: flex-end;
            height: 100vh;
            top: 0;
            gap: 0;
            border-left: solid 4px #545454;
            transition: 0.2s all;
            right: -8px;
        }
        .menu_list::-webkit-scrollbar {
            display: none;
        }
        .menu_list {
            display: flex;
            flex-direction: column;
            overflow-y: auto;
            height: 100%;
            scrollbar-width: none;
            -ms-overflow-style: none;
            background-color: rgba(255, 255, 255, 0.2); 
        }
        .menu_user {
            box-sizing: border-box;
            background-color: rgba(255, 255, 255, 0.2); 
            backdrop-filter: blur(4px);
            padding: 25px 4em;
            user-select: none;
            cursor: pointer;
            width: 100%;
            transition: 0.1s;
            text-decoration: none;
        }
        .menu_text {
            display: flex;
            justify-content: center;
            text-align: center;
            transition: 0.1s;
            text-decoration: none;
            color: white;
        }
        .menu_user:hover {
            filter: brightness(1.2);
        }
        .menu_user:hover .menu_text {
            scale: 1.1;
        }
        .menu_opener {
            position: absolute;
            left: -50px;
            z-index: 2;
            top: 50vh;
            display: flex;
            padding: 5px;
            border-top: solid 4px #545454;
            border-left: solid 4px #545454;
            border-bottom: solid 4px #545454;
            border-radius: 15px 0 0 15px;
            background-color: rgba(255, 255, 255, 0.4);
            transition: 0.1s;
            cursor: pointer;
            user-select: none;
        }
        .menu_opener:hover {
            background-color: rgba(255, 255, 255, 0.6);
        }
        .menu_opener svg {
            height: 2em;
            width: 2em;
            fill: white;
            transition: 0.1s;
        }
        .menu_opener:hover svg {
            scale: 1.05;
        }

        .menu_open {
            translate: 0 0;
        }
        .menu_close {
            translate: calc(100% - 8px) 0;
        }
        <?php 
        foreach ($user_colours as $u => $cs) {
            $c = $cs[0];
            if (count($cs) == 1) {
                echo ".".$u." {border-color: ".$c.";background-image: linear-gradient(to bottom, #252525,".$c.");}";
            } else {
                $c2 = $cs[1];
                echo ".".$u." {border-color: ".$c.";background-image: linear-gradient(to bottom, ".$c2.",".$c.");}";
            }
            echo ".".$u."_text {color:".$c.";}";
            echo ".".$u."_bg {border: solid 2px ".$c.";}";
        }
        ?>
    </style>
</head>
<body>
    <a class="servr" href="https://discord.com/invite/robopup">The server :3</a>
    <br>
    <a class="sourcecode" href="https://github.com/lenanya/robocord.puppy-girl.uk">Source Code!</a>
    <br>
    <p class="hb">Happy birthday, kotnik</p>
    <br>
    <p class="hb">if you want your colour changed just tell lena!</p>
<?php

function sortblob($a, $b) {
    if ($a[0] > $b[0]) {
        return 1;
    } elseif ($a[0] < $b[0]) {
        return -1;
    }
    return 0;
}

$dir = new DirectoryIterator(dirname(__FILE__));
$dirs = [];
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
        if ($fileinfo->isDir()) {
            $name = $fileinfo->getFilename();
            if ($name != ".git") {
                $dirs[] = $name;
            }
        }
    }
}

usort($dirs, "sortblob");

foreach ($dirs as $dir) {
    $dirname = $dir;
    echo "<div class=\"user ".$dirname."\"><br>";
    echo "<div id=\"$dirname\" class=\"".$dirname."_bg name_bg\">";
    echo "<p class=\"name ".$dirname."_text\">".$dirname."</p>\n";
    echo "</div>";
    $dirinner = new DirectoryIterator($dirname) ;
    foreach ($dirinner as $fileinfoinner) {
        if (!$fileinfoinner->isDot()) {
            $filename = $fileinfoinner->getFilename();
            if (str_ends_with($filename,".png")) {
                echo "<img src='https://robocord.puppy-girl.uk/".$dirname."/".$filename."'</img>\n<br>";
            }
        }
    }
    echo "</div>";
}

echo "<div class=\"menu menu_close\">";
echo "<div class=\"menu_opener\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"currentColor\"><path d=\"M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z\"></path></svg></div>";
echo "<div class=\"menu_list\">";
    foreach ($dirs as $dir) {
        $dirname = $dir;
        echo "<a href=\"#$dirname\" class=\"menu_user\">";
        echo "<span class=\"menu_text ".$dirname."_text\">".$dirname."</span>";
        echo "</a>";
    }
echo "</div>";
echo "</div>";


?>
<script>
const menuOpener = document.querySelector('.menu_opener');
const menu = document.querySelector('.menu');

menuOpener.addEventListener('click', () => {
  
  if (menu.classList.contains('menu_close')) {
    menu.classList.remove('menu_close');
    menu.classList.add('menu_open');
  } else {
    menu.classList.remove('menu_open');
    menu.classList.add('menu_close');
  }
});
</script>
</body>
</html>
