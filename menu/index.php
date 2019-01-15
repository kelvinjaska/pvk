<?php
function soodus($hind, $soodusProtsent) {
    return round(  $hind * ((100 - $soodusProtsent) / 100),2);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kelvin</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="menu">
                <table>
                    <header id="flex">
                        <h2><div class="main-menu-title text-left">Praed</div></h2>
                        <i class="fas fa-utensils"></i>
                    </header>
                    <?php
                    $praed = array(
                         array(
                        'tuup' => "praed",
                        'nimetus' => 'Sealihapada ploomide ja aprikoosiga',
                        'kirjeldus' => 'sealiha, lisand, salat, leib',
                        'hind' => 2.65
                        ),
                              
                        array(
                        'tuup' => "praed",
                        'nimetus' => 'Praetud kanakints',
                        'kirjeldus' => 'praetud kana, lisand, salat, leib',
                        'hind' => 2.55
                        ),
                              
                        array(
                        'tuup' => "praed",
                        'nimetus' => 'Hakklihakaste',
                        'kirjeldus' => 'hakklihakaste, lisand, salat, leib',
                        'hind' => 2.45
                        ),
                              
                        array(
                        'tuup' => "praed",
                        'nimetus' => 'Kartul ,kaste, salat, leib',
                        'kirjeldus' => 'puudub',
                        'hind' => 1.38
                        ),
                        
                        array(
                        'tuup' => "praed",
                        'nimetus' => 'Hakklihakaste 1/2',
                        'kirjeldus' => 'hakklihakaste, lisand, salat, leib',
                        'hind' => 1.35
                        )
                        
                    );
                    foreach($praed as $praad=>$info) {
                        echo '<tr id = "1" >
                        <th class="menu-name" >' .$info['nimetus']. '</th >
                        <td ><span class="price" >' .$info['hind']. '€</span ></td >
                    <tr >
                        <th class="menu-keywords" >' .$info['kirjeldus']. '</th >
                        <td class="price-discount" >'.soodus($info['hind'], 15).'€</td>
                    </tr >
                    </tr >';
                    }
                    ?>

                </table>
            </div>

            <div class="menu">
                <table>
                    <header id="flex">
                        <h2><div class="main-menu-title text-left">Supid</div></h2>
                        <i class="fas fa-utensil-spoon"></i>
                    </header>

                    <?php
                    $supid = array(
                        array(
                            'tuup' => "supid",
                            'nimetus' => 'Borsch',
                            'kirjeldus' => 'supp, happukoor, leib',
                            'hind' => 2.25
                        ),
                        array(
                            'tuup' => "supid",
                            'nimetus' => 'Seljanka',
                            'kirjeldus' => 'supp, happukoor, leib',
                            'hind' => 2.45
                        )
                    );

                    foreach($supid as $sup=>$info) {
                    echo '<tr id = "1" >
                        <th class="menu-name" >' .$info['nimetus']. '</th >
                        <td ><span class="price" >' .$info['hind']. '€</span ></td >
                    <tr >
                        <th class="menu-keywords" >' .$info['kirjeldus']. '</th >
                        <td class="price-discount" >' .soodus($info['hind'], 15).'€</td>

                    </tr >
                    </tr >';
                    }
                    ?>
                </table>
            </div>
        </div> <!-- Left side -->
        <div class="col-sm-6">
            <div class="menu">
                <table>
                    <header id="flex">
                        <h2><div class="main-menu-title text-left">Magustoidud</div></h2>
                        <i class="fas fa-cookie-bite"></i>
                    </header>
                    <?php
                    $magustoidud = array(
                        array(
                            'tuup' => "magustoidud",
                            'nimetus' => 'Kihiline piparkoogi-kohupiimamaius',
                            'kirjeldus' => 'piparkook, kohupiim',
                            'hind' => 1.75
                        )
                    );

                    foreach($magustoidud as $magustoit=>$info) {
                        echo '<tr id = "1" >
                        <th class="menu-name" >' .$info['nimetus']. '</th >
                        <td ><span class="price" >' .$info['hind']. '€</span ></td >
                    <tr >
                        <th class="menu-keywords" >' .$info['kirjeldus']. '</th >
                        <td class="price-discount" >' .soodus($info['hind'], 15).'€</td>

                    </tr >
                    </tr >';
                    }
                    ?>

                </table>
            </div>
            <div class="menu">
                <table>
                    <header id="flex">
                        <h2><div class="main-menu-title text-left">Joogid</div></h2>
                        <i class="fas fa-coffee"></i>
                    </header>
                    <?php
                    $joogid = array(
                        array(
                            'tuup' => "joogid",
                            'nimetus' => 'Mahl',
                            'kirjeldus' => 'õun, sidrun, ploom, tomat, virsik',
                            'hind' => 0.50
                        ),
                        array(
                            'tuup' => "joogid",
                            'nimetus' => 'Kohv 300ml',
                            'kirjeldus' => 'kanukohv, kohv piimaga, capuccino, caffe latte',
                            'hind' => 1
                        ),
                        array(
                            'tuup' => "joogid",
                            'nimetus' => 'Piim',
                            'kirjeldus' => '&nbsp',
                            'hind' => 0.35
                        ),
                        array(
                            'tuup' => "joogid",
                            'nimetus' => 'Vesi',
                            'kirjeldus' => 'sidruniga',
                            'hind' => TASUTA
                        ),

                    );

                    foreach($joogid as $jook=>$info) {
                        echo '<tr id = "1" >
                        <th class="menu-name" >' .$info['nimetus']. '</th >
                        <td ><span class="price" >' .$info['hind']. '€</span ></td >
                    <tr >
                        <th class="menu-keywords" >' .$info['kirjeldus']. '</th >
                        <td class="price-discount" >' .soodus($info['hind'], 15).'€</td>

                    </tr >
                    </tr >';
                    }
                    ?>

                </table>
            </div>

        </div>
    </div>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>