<?php
function soodus($hind, $soodusProtsent) {
    return $hind * ((100 - $soodusProtsent) / 100);
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
                        'hind' => 2.50
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
                        'hind' => 1.30
                        )
                        
                    );
                    foreach($praed as $praad=>$info) {
                        echo '<tr id = "1" >
                        <th class="menu-name" >' .$info['nimetus']. '</th >
                        <td ><span class="price" >' .$info['hind']. '€</span ></td >
                    <tr >
                        <th class="menu-keywords" >' .$info['kirjeldus']. '</th >
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

                    <tr id="6">
                        <th class="menu-name">Borsch</th>
                        <td><span class="price">2,25€</span></td>
                    <tr>
                        <th class="menu-keywords">supp, happukoor, leib</th>
                    </tr>
                    </tr>

                    <tr id="7">
                        <th class="menu-name">Seljanka</th>
                        <td><span class="price">2,40€</span></td>
                    <tr>
                        <th class="menu-keywords">supp, happukoor, leib</th>
                    </tr>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="menu">
                <table>
                    <header id="flex">
                        <h2><div class="main-menu-title text-left">Magustoidud</div></h2>
                        <i class="fas fa-cookie-bite"></i>
                    </header>

                    <tr id="9">
                        <th class="menu-name">Kihiline piparkoogi-kohupiimamaius</th>
                        <td><span class="price">1,75€</span></td>
                    <tr>
                        <th class="menu-keywords">piparkook, kohupiim</th>
                    </tr>
                    </tr>

                </table>
            </div>
            <div class="menu">
                <table>
                    <header id="flex">
                        <h2><div class="main-menu-title text-left">Joogid</div></h2>
                        <i class="fas fa-coffee"></i>
                    </header>

                    <tr id="10">
                        <th class="menu-name">Mahl</th>
                        <td><span class="price">0,50€</span></td>
                    <tr>
                        <th class="menu-keywords">õun, sidrun, ploom, tomat, virsik</th>
                    </tr>
                    </tr>

                    <tr id="11">
                        <th class="menu-name">Kohv 300ml</th>
                        <td><span class="price">1,00€</span></td>
                    <tr>
                        <th class="menu-keywords">kanukohv, kohv piimaga, capuccino, caffe latte</th>
                    </tr>
                    </tr>

                    <tr id="12">
                        <th class="menu-name">Piim</th>
                        <td><span class="price">0,35€</span></td>
                    <tr>
                        <th class="menu-keywords">&nbsp</th>
                    </tr>
                    </tr>

                    <tr id="13">
                        <th class="menu-name">Vesi</th>
                        <td><span class="price">Tasuta</span></td>
                    <tr>
                        <th class="menu-keywords">sidrun</th>
                    </tr>
                    </tr>

                </table>
            </div>

        </div>
    </div>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>