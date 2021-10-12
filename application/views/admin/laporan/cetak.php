<!DOCTYPE html">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>.:: Laporan Penjualan ::.</title>
    <style type="text/css">
        #judul {
            width: 100%;
            margin-bottom: 20px;
            text-align: center;
        }

        table {
            width: 100%;
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
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">

                        </header>
                        <div id="judul">
                            <br />
                            <br />
                            <font size="+2">LAPORAN HASIL PENJUALAM ILC LUXURY </font><br />
                            Jl. Kaliurang Km.4 Yogyakarta<br />
                            Telp : (0274) 585231 Email : ilcluxury@gmail.com 

                            <hr color="#c8c8c8" />
                        </div>
                        <div class="box-body table-responsive">
                            <table class="table table-bordered table-striped" id="table">
                                <thead>
                                    <tr>
                                        <th class="default"> No</th>
                                        <th><i class='icon-signal'></i>No Order</th>
                                        <th><i class='icon-terminal'></i>No PC</th>
                                        <th><i class='icon-signal'></i>Operator</th>
                                        <th><i class='icon-signal'></i> Tanggal</th>
                                        <th><i class='icon-signal'></i> Waktu</th>
                                        <th><i class='icon-signal'></i> Total Bayar</th>

                                    </tr>

                                </thead>
                                <tbody>

                                    <?php $no = 1;
                                    $totalPendapatan = 0;

                                    foreach ($selesai->result() as $data) { ?>
                                        <tr align="center">
                                            <td><?= $no++ ?>.</td>
                                            <td><?= $data->kd_order ?></td>
                                            <td><?= $data->NIP;  ?></td>
                                            <td><?= $data->no_user;  ?></td>
                                            <td><?= $data->tanggal;  ?></td>
                                            <td><?= $data->waktu ?></td>
                                            <td><?= $data->total ?></td>
                                        </tr>
                                    <?php $totalPendapatan += $data->total;
                                    } ?>
                                </tbody>
                                <tfoot>
                                    <tr class="totals-row" align="center">
                                        <td colspan="5" class="wide-cell"></td>
                                        <td><strong>Total Pendapatan</strong></td>
                                        <td coslpan="2"><?php echo $totalPendapatan; ?></td>
                                    </tr>

                                </tfoot>
                            </table>
                        </div>
                    </section>
                    <br>
                    <center>
                        <input type="submit" name="button" id="button" class='stdbtn' value="Print Laporan" type="hidden" onclick="print()" />


                        <!-- <br><br>
                        <form method="post" class='stdform stdform2' action="laporan/excel">

                            <input type="submit" name="button2" id="button2" value="Ekspor ke Ms. Excel" />
                        </form> -->
                    </center>
                    </body>

                    </html>