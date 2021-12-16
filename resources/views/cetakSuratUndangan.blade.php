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
    @foreach($su as $s)
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

        <table width="100%" style="margin-left: 30px; margin-right: 30px;">
            <tr>
                <td align="right" colspan="3">
                    <font size="15px">Yogyakarta, {{ \Carbon\Carbon::parse($s->tgl_surat)->isoformat('D MMMM Y') }}</font>
                </td>
            </tr>
        </table>

        <br>

        <table style="margin-left: 30px; margin-right: 30px;">
            <tr align="left">
                <td style="font-size: 15px">Nomor</td>
                <td style="font-size: 15px" align="center">:</td>
                <td style="font-size: 15px">{{$s->no_surat}}</td>
            </tr>
            <tr>
                <td style="font-size: 15px">Hal</td>
                <td style="font-size: 15px" align="center">:</td>
                <td style="font-size: 15px">{{$s->hal}}</td>
            </tr>
        </table>

        <br>

        <table style="margin-left: 30px; margin-right: 30px;">
            <tr>
                <td>
                    <font size="15px">Kepada Yth,</font><br>
                    <font size="15px">{{$s->kepada}}</font><br>
                    <!--font size="15px">Bapak Budi Sutedjo</font><br>
                    <font size="15px">Universitas Kristen Duta Wacana</font><br>
                    <font size="15px">ditempat,</font-->
                </td>
            </tr>
        </table>

        <br>

        <table width="100%" style="margin-left: 30px; margin-right: 30px;">
            <tr>
                <td style="text-align: justify">
                    <font size="15px">Dengan hormat,</font><br>
                    <font size="15px">Melalui undangan ini kami menginformasikan {{$s->keterangan_surat}}.
                        Untuk itu kami mengundang Bapak/Ibu untuk menghadiri Acara kami pada :
                    </font>
                </td>
            </tr>
        </table>

        <br>

        <table width="100%" style="margin-left: 30px; margin-right: 30px;">
            <tr>
                <td width="18%">
                    <font size="15px">Hari, Tanggal</font>
                </td>
                <td width="40%">: &nbsp; {{ \Carbon\Carbon::parse($s->tgl_laksanakan)->isoformat('dddd, D MMMM Y') }}</td>
                <td><b></b></td>
            </tr>
            <tr>
                <td width="18%">
                    <font size="15px">Tempat</font>
                </td>
                <td width="5%">: {{$s->tmpt_kgt}}</td>
                <td><b></b></td>
            </tr>
            <tr>
                <td>
                    <font size="15px">Waktu</font>
                </td>
                <td>: &nbsp;{{ \Carbon\Carbon::parse($s->waktu_kgt)->format('H:i') }} Wib</td>
                <td></td>
            </tr>
        </table>

        <br>

        <table width="100%" style="margin-left: 30px; margin-right: 30px;">
            <tr>
                <td>
                    <font size="15px">
                        Demikian surat ini kami sampaikan. Atas perhatian dan kerjasama kami ucapkan terimakasih.
                    </font>
                </td>
            </tr>
        </table>
        <br>
        <table width="50%" align="left" style="margin-left: 30px;">
            <tr>
                <td>
                    <font style="font-size: 15px"> Yogyakarta, {{ \Carbon\Carbon::parse($s->tanggal_masuk)->isoformat('D MMMM Y') }}</font><br>
                    <font style="font-size: 15px">{{$s->jabatan}}</font><br>
                    <div class="visible-print text-center">
                        <!--{!! QrCode::size(250)->generate($s -> nama_penjabat); !!} -->
                        <img src="images/{{$s->ttd}}" width="160" height="160">
                    </div>
                    <font style="font-size: 15px"><b><u>{{$s->nama_penjabat}}</u></b></font><br>
                    <font style="font-size: 15px">NIK : {{$s->nik}}</font>
                </td>
            </tr>
        </table>
        @endforeach
    </body>
</html>

