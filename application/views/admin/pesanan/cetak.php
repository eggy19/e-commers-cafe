<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Pesanan</title>

    <style type="text/css">
          #judul {
            width: 100%;
            margin-bottom: 20px;
            text-align: center;
        }

        table {
            text-align: center;
            width: 80%;
            font-family: verdana, arial, sans-serif;
            font-size: 11px;
            color: #333333;
            border-width: 1px;
            border-color: #3A3A3A;
            border-collapse: collapse;
        }

        table th {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #a0a0a0;
            background-color: #808080;
            color: #ffffff;
        }

        table tr:hover td {
            cursor: pointer;
        }

        table tr:nth-child(even) td {
            background-color: #c8c8c8;
        }

        table td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #a0a0a0;
            background-color: #ffffff;
        }
    </style>
</head>
<body onload="print()">
    <div id="judul">
        <br />
        <br />
        <font size="+2">Internet Learning Cafe Luxury </font><br />
        Jl. Kaliurang Km.4 Yogyakarta<br />
        Telp : (0274) 585231<br />
        <?php echo 'pukul '.$jam ,' tanggal '.$tgl?>

        <hr color="#c8c8c8" />
    </div>
    <div class="cetak">
            <?php foreach ($menu as $menu ) :?>
                <h4><?php echo $menu->nm_menu?></h3>
                
                <table class="table">
                    <tr>
                        <td><?php echo number_format($menu->harga,0,',','.')?></td>
                        <td>X <?php echo $menu->banyak?></td>
                        <td>Rp.<?php echo number_format($menu->jumlah,0,',','.')?></td>
                    </tr>
                </table>
            <?php endforeach; ?>
                <?php foreach ($order as $order ) :?>
                <h3>Total    :   Rp.<?php echo number_format($order->total,0,',','.')?></h3> 
                <?php endforeach; ?>    
    </div>
</body>
</html>