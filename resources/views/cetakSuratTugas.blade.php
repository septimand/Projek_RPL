<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    </head>
    <body>
    @foreach($st as $s)
        <table>
            <tr>
                <td width="60px">
                    <img src="https://www.ukdw.ac.id/wp-content/uploads/2017/10/logo-ukdw.png" width="60" height="80"/>
                </td>
                <td>&nbsp;&nbsp;</td>
                <td>
                    <font size="2" style="letter-spacing:1.2px">
                        UNIVERSITAS KRISTEN DUTA WACANA
                    </font>
                    <br>
                    <font size="3">
                        <b>FAKULTAS TEKNOLOGI INFORMASI</b>
                    </font>
                    <br>
                    <font size="1">
                        <li type="square" style="margin-left: 10px;"> PROGRAM STUDI INFORMATIKA
                        <li type="square" style="margin-left: 10px;"> PROGRAM STUDI SISTEM INFORMASI </li>
                    </font>
                </td>
            </tr>
        </table>

        <hr>

        <br>

        <table width="100%">
            <tr>
                <td align="center">
                    <center>
                        <font size="21px">
                            <b><u>SURAT TUGAS</u></b>
                        </font>
                        <br>
                        <font size="15px">
                            Nomor : {{$s->no_surat}}
                        </font>
                    </center>
                </td>
            </tr>
        </table>

        <br>
        <br>

        <table width="85%" align="center">
            <tr>
                <td style="text-align: justify">
                    <p style="font-size: 15px">
                        Dengan ini Dekan Fakultas Teknologi Informasi Universitas Kristen Duta Wacana memberikan tugas kepada :
                    </p>
                </td>
            </tr>
        </table>

        <table width="60%" align="center">
            <tr>
                <td width="25%">
                    <font size="15px"><b>Nama</b></font>
                </td>
                <td width="5%"><b>:</b></td>
                <td><b>{{$s->name}}</b></td>
            </tr>
            <tr>
                <td>
                    <font size="15px"><b>Nomer Induk</b></font>
                </td>
                <td><b>:</b></td>
                <td><b>{{$s->no_induk}}</b></td>
            </tr>
        </table>

        <table width="85%" align="center">
            <tr>
                <td style="text-align: justify">
                    <p style="font-size: 15px;">
                        Untuk tugas sebagai {{$s->kgt_tugas}} {{$s->tema_kgt}} yang diselenggarakan oleh {{$s->pyng_kgt}}
                        pada tanggal {{$s->hari_kgt}}, {{$s->tgl_laksanakan}}.
                    </p>
                    <p style="font-size: 15px;">
                        Demikian surat tugas ini dibuat untuk dapat dipergunakan sebagaimana perlunya.
                        Kepada penerima tugas setelah menyelesaikan tugas dimohon menyampaikan laporan kepada pemberi tugas.
                    </p>
                </td>
            </tr>
        </table>

        <br>

        <table width="85%" align="center">
            <tr>
                <td>
                    <font style="font-size: 15px"> Yogyakarta, {{$s->tanggal_masuk}}</font><br>
                    <font style="font-size: 15px"><b>{{$s->jabatan}}</b></font><br>
                    <div class="visible-print text-center">
                        <!--{!! QrCode::size(250)->generate($s -> nama_penjabat); !!} -->
                        <img src="images/{{$s->ttd}}" width="160" height="160">
                    </div>
                    <font style="font-size: 15px"><b><u>{{$s->nama_penjabat}}</u></b></font><br>
                    <font style="font-size: 15px">NIK : 004 E 289</font>
                </td>
            </tr>
        </table>
    @endforeach
    </body>
</html>






