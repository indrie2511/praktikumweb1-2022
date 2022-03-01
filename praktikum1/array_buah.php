<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
 </head>
 <body class="bg-info">
    <?php
        $ar_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];
        // cetak buah ke index ke 2
        echo $ar_buah[2];
        // cetak jumlah buah
        echo '<br/>Jumlah Buah ' . count($ar_buah);
        // cetak seluruh buah
        echo '<ol>';
        foreach($ar_buah as $buah){
        echo '<li>'. $buah .'</li>';
        }
        echo '</ol>';
        // tambahkan buah
        $ar_buah[]="Durian";
        // hapus buah index ke 1
        unset($ar_buah[1]);
        // ubah buah index ke 2 menjadi Manggis
        $ar_buah[2]="Manggis";
        // cetak seluruh buah dengan index nya
        echo '<ul>';
        foreach($ar_buah as $k => $v){
        echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
        }
        echo '</ul>';
    ?>
 </body>
 </html>
