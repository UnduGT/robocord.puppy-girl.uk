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
    "luki"          => array("#ff0000"),
);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Robocord exposed</title>
    <meta property="og:title" content="Robocord exposed.">
    <meta property="og:description" content="People from the Robopup Party Discord server saying unhinged things">
    <meta property="og:url" content="https://robocord.puppy-girl.uk">
    <meta property="og:image" content="https://robocord.puppy-girl.uk/voidpointer/2026-05-12_00-51_4.png">
    <meta name="theme-color" content="#7289da">
    <style>
        html {
            -moz-text-size-adjust: none;
            -webkit-text-size-adjust: none;
            text-size-adjust: none;
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
        }
        img:hover {
            transition: 0.1s; 
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
        }
        .servr:hover {
            transition: 0.2s; 
            scale: 1.1; 
            background-color: #5865f2;
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
        }
        .name_bg:hover {
            scale: 1.05;
            background-color: rgba(255, 255, 255, 0.3);
            transition: 0.1s;
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
    echo "<div class=\"".$dirname."_bg name_bg\">";
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
?>
</body>
</html>
