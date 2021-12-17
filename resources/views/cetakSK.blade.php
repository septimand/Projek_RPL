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
    @foreach($sk as $s)
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
                        <font size="20px">
                            <b><u>Surat Keterangan Aktif</u></b>
                        </font>
                        <br>
                        <font>
                            Nomor : {{$s->no_surat}}
                        </font>
                    </center>
                </td>
            </tr>
        </table>

        <br>

        <table width="70%" style="margin-left: 50px;">
            <tr>
                <td style="text-align: justify">
                    <p style="font-size: 15px">
                    Saya yang bertangan tanda tangan dibawah ini:
                    </p>
                </td>
            </tr>
        </table>
        <table width="60%" align="center">
            <tr>
                <td width="25%">
                    <font size="15px">Nama</font>
                </td>
                <td width="5%">:</td>
                <td><b>{{$s->nama_penjabat}}</b></td>
            </tr>
            <tr>
                <td>
                    <font size="15px">NIDN</font>
                </td>
                <td>:</td>
                <td><b>{{$s->nik}}</b></td>
            </tr>

            <tr>
                <td>
                    <font size="15px">Jabatan</font>
                </td>
                <td>:</td>
                <td><b>{{$s->jabatan}}</b></td>
            </tr>
        </table>
        <table width="85%" style="margin-left: 50px;">
            <tr>
                <td style="text-align: justify">
                    <p style="font-size: 15px">
                    Dengan ini menerangkan nama dibawah ini:
                    </p>
                </td>
            </tr>
        </table>
        <table width="60%" align="center">
            <tr>
                <td width="25%">
                    <font size="15px">Nama</font>
                </td>
                <td width="5%">:</td>
                <td><b>{{$s->name}}</b></td>
            </tr>
            <tr>
                <td>
                    <font size="15px">NIDN</font>
                </td>
                <td>:</td>
                <td><b>{{$s->no_induk}}</b></td>
            </tr>

            <tr>
                <td>
                    <font size="15px">Jabatan</font>
                </td>
                <td>:</td>
                <td><b>{{$s->keterangan_surat}}</b></td>
            </tr>
        </table>
        <br>
        <table width="100%" style="margin-left: 50px; margin-right: 50px; text-align: justify" align="center">
            <tr>
                <td>
                    <p>
                        Merupakan {{$s->keterangan_surat}} Fakultas Teknologi Informasi Universitas Kristen Duta Wacana yang aktif. Demikian surat keterangan ini kami buat, untuk dapat digunakan
                        sebagaimana mestinya. Atas, perhatian dan kerjasama kami ucapkan terimakasih.
                    </p>
                </td>
            </tr>
        </table>

        <br>
        <br>

        <table width="50%" align="left" style="margin-left: 50px;">
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

