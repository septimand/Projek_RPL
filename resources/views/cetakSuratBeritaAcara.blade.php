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
    @foreach($ba as $s)
    <style>
        td.judulSurat{
            font-size: 18px;
        }
        tr.judul{
            text-align: center;
        }

    </style>
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
                            <b>Berita Acara</b>
                        </font>
                        <br>
                        <br>
                        <font>
                            <b>Kuliah Umum</b>
                        </font>
                        <br>
                        <font>
                            <i><b>"{{$s->tema_kgt}}"</b></i>
                        </font>
                        <br>
                        <font>
                            Nomor : {{$s->no_surat}}
                        </font>
                    </center>
                </td>
            </tr>
        </table>


        <table width="100%" align="center">
            <tr>
                <td style="text-align: justify">
                    <p>
                        Pada hari {{ \Carbon\Carbon::parse($s->tgl_laksanakan)->isoformat('dddd, D MMMM Y') }} bertempat di {{$s->tmpt_kgt}} dengan tema: <i>"{{$s->tema_kgt}}"</i> dengan
                        mengundang pembicara yaitu {{$s->kepada}}. Acara ini
                        diikuti oleh {{$s->keterangan_surat}}.
                    </p>

                    <p>
                        Adapun TOR acara, daftar kehadiran peserta, foto kegiatan seperti
                        terlampir pada acara ini.
                    </p>

                    <p>
                        Demikian Berita Acara ini dibuat dengan sebenarnya, untuk dapat
                        dipergunakan sebagaimana mestinya.
                    </p>
                </td>
            </tr>
        </table>


        <br>

        <table width="50%" align="left" style="margin-left: 10px;" >
            <tr>
                <td>
                    <font style="font-size: 16px"> Yogyakarta, {{ \Carbon\Carbon::parse($s->tanggal_masuk)->isoformat('D MMMM Y') }}</font><br>
                    <font style="font-size: 16px">{{$s->jabatan}}</font><br>
                    <div class="visible-print text-center">
                        <!--{!! QrCode::size(250)->generate($s -> nama_penjabat); !!} -->
                        <img src="images/{{$s->ttd}}" width="160" height="160">
                    </div>
                    <font style="font-size: 16px"><b><u>{{$s->nama_penjabat}}</u></b></font><br>
                    <font style="font-size: 16px">NIK : {{$s->nik}}</font>
                </td>
            </tr>
        </table>
        @endforeach
    </body>
</html>
