<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->


    </head>
    <body>


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
        <br>
        @foreach($sp as $k)
        <table width="100%">
            <tr>
                <td align="center">
                    <center>
                        <font size="16px">
                            <b>SURAT KEPUTUSAN DEKAN</b>
                        </font>
                        <br>
                        <font size="15px">
                            <b>FAKULTAS TEKNOLOGI INFORMASI</b>
                        </font>
                        <br>
                        <font size="14px">
                            UNIVERSITAS KRISTEN DUTA WACANA
                        </font>
                        <br>
                        <font size="14px">
                            Nomor : <b>{{$k->no_surat}}</b>
                        </font>
                        <br>
                        <br>
                        <font size="12px">

                            Tentang : 

                        </font>
                    </center>
                </td>
            </tr>
        </table>

        <br>
        <table width="60%" align="center">
            <tr>
                <td align="center">
                    <font size="14px">
                        <b>
                            {{$k->tema_kgt}}
                        </b>
                    </font>
                </td>
            </tr>
        </table> @endforeach

        <br>
        <div class="col-sm; ml-30; mr-30;" align="justify" style="margin-left: 75px; margin-right: 75px">
        Dekan Fakultas Teknologi Informasi Universitas Kristen Duta Wacara <br>

        Menimbang :
        <?php $no = 1; ?>
        @foreach ($cetakJson->menimbang as $k)
        <div class="col-sm; ml-30; mr-30;" align="justify" style="margin-left: 80px; margin-right: 75px">
            {{$no++}}. {{ $k }}
        </div>
        @endforeach

        Meningat :
        <?php $no = 1; ?>
        @foreach ($cetakJson->mengingat as $data)
        <div class="col-sm; ml-30; mr-30;" align="justify" style="margin-left: 75px; margin-right: 75px">
            {{$no++}}. {{ $data }}
        </div>
        @endforeach

        <br>

        <div class="row" align="center">
        MEMUTUSKAN:
        </div>
        <br>

        Menetapkan:
        <?php $no = 1; ?>
        @foreach ($cetakJson->menetapkan as $data)
        <div class="col-sm; ml-30; mr-30;" align="justify" style="margin-left: 75px; margin-right: 75px">
            {{$no++}}. {{ $data }}
        </div>
        @endforeach
        <!-- <table width="75%" style="font-size:12px; text-align: justify" align="center">
            <tr>
                <td colspan="4" style="text-align: justify">
                    <font size="12px">Dekan Fakultas Teknologi Informasi Universitas Kristen Duta Wacana :</font>
                </td>
            </tr>
            <tr>
                <td rowspan="4" width="25%" valign="top">
                    Menimbang
                </td>
                <td width="5%" align="center" valign="top" rowspan="4">:</td>
                @php
                    $no =1;
                @endphp
                @foreach($cetakJson->menimbang as $k)
                <td width="2%" valign="top">{{$no++}}.</td>
                {{$k}}
                @endforeach
                <td>

                    Bahwa untuk kelancaran perkuliahan dan dukungan penuh pelaksanaan penelitian dosen
                    dan mahasiswa pada fasilitas Laboratorium, dipandang perlu adanya koordinator laboratorium
                    Fakultas Teknologi Informasi (FTI) Universitas Kristen Duta Wacana (UKDW) Yogyakarta;
                </td>
            </tr>
            <tr>
                <td valign="top">b.</td>
                <td>
                    Bahwa tugas sebagai koordinator laboratorium adalah tugas penunjang yang meliputi
                    pengembangan laboratorium, mendukung komunitas penelitian dosen dan mahasiswa, dan
                    pengaturan penggunaan laboratorium bagi dosen dan mahasiswa;
                </td>
            </tr>
            <tr>
                <td valign="top">c.</td>
                <td>
                    Bahwa dipandang perlu untuk meningkatkan efisiensi dan efektifitas pemanfaatan laboratorium
                    yang dikelola oleh FTI UKDW secara bersama-sama;
                </td>
            </tr>
            <tr>
                <td valign="top">d.</td>
                <td>
                    Bahwa dipandang perlu diterbitkannya Surat Keputusan Dekan terkait pengangkatan tim koordinator
                    untuk pengelolaan dan pengembangan laboratorium komputer yang dikelola oleh FTI UKDW.
                </td>
            </tr>
        </table>

        <table width="75%" style="font-size:12px; text-align: justify" align="center">
            <tr>
                <td rowspan="6" width="25%" valign="top">
                    Mengingat
                </td>
                <td width="5%" align="center" valign="top" rowspan="6">:</td>
                @php
                    $no =1;
                @endphp
                @foreach($cetakJson->mengingat as $k)
                <td width="2%" valign="top">{{$no++}}.</td>
                {{$k}}
                @endforeach

                <td>
                    Undang-undang Republik Indonesia Nomor 14 Tahun 2004 tentang Guru dan Dosen.
                </td>
            </tr>
            <tr>
                <td width="2%" valign="top">2.</td>
                <td>
                    Peraturan Pemerintah RI Nomor 37 Tahun 2009 tentang Dosen (Lembaran Negara Republik Indonesia
                    dan tambahan Lembaran Negara Republik Indonesia Nomor 2007).
                </td>
            </tr>
            <tr>
                <td width="2%" valign="top">3.</td>
                <td>
                    Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 17
                    Tahun 2013 tentang jabatan Fungsional Dosen dan Angka Kreditnya.
                </td>
            </tr>
            <tr>
                <td width="2%" valign="top">4.</td>
                <td>
                    Statuta Universitas Kristen Duta Wacana Yogyakrta tahun 2010 dengan nomor
                    QADW-110-SU-10.01.001 Bab 4 Pasal 33.
                </td>
            </tr>
            <tr>
                <td width="2%" valign="top">5.</td>
                <td>
                    Kebijakan Akademik Universitas Kristen Duta Wacana Yogyakarta tahun 2003-2013.
                </td>
            </tr>
            <tr>
                <td width="2%" valign="top">6.</td>
                <td>
                    Peraturan Akademik Universitas Kristen Duta Wacana tahun 2009-2014 Bab 3
                    pasal 5.
                </td>
            </tr>
        </table>

        <br>
        <br>


        <table width="75%" style="text-align: justify" align="center">
            <tr>
                <td colspan="3" style="text-align: justify; font-size:13px;">
                    <center>
                        <font>
                            <b>MEMUTUSKAN:</b>
                        </font>
                    </center>
                </td>
            </tr>
            <tr style="font-size:12px">
            <td width="22%">
                    Menetapkan
                </td>
                <td width="10%" align="center" valign="top">:</td>
                @php
                    $no =1;
                @endphp
                @foreach($cetakJson->menetapkan as $data)
                <td width="2%" valign="top">{{$no++}}.</td>
                {{ $data }}
                @endforeach
            </tr>
            <tr style="font-size:12px" >
                <td valign="top">
                    <p>
                        <b>Pertama</b>
                    </p>
                </td>
                <td valign="top" align="center"><p>:</p></td>
                <td>
                    <p>
                    </p>
                </td>
            </tr>
            <tr style="font-size:12px">
                <td valign="top">
                    <p>
                        <b>Kedua</b>
                    </p>
                </td>
                <td valign="top" align="center"><p>:</p></td>
                <td>
                    <p>
                        Terhitung mulai tanggal 1 Januari 2019 - 31 Desember 2019 mengangkat <b>Umi Proboyekti, S.Kom., MLIS.</b>
                        sebagai koordinator Pengelolaan Tenaga Volunteer Laboratorium FTI UKDW.
                    </p>
                </td>
            </tr>
            <tr style="font-size:12px">
                <td valign="top">
                    <p>
                        <b>Ketiga</b>
                    </p>
                </td>
                <td valign="top" align="center"><p>:</p></td>
                <td>
                    <p>
                        Berkaitan dengan beban kerja yang ditugaskan, kepada Koordinator Laboratorium FTI UKDW
                        diberikan penghargaan sebesar 1 SKS per semester.
                    </p>
                </td>
            </tr>
            <tr style="font-size:12px">
                <td valign="top">
                    <p>
                        <b>Keempat</b>
                    </p>
                </td>
                <td valign="top" align="center"><p>:</p></td>
                <td>
                    <p>
                        -Apabila di kemudian hari ternyata terdapat kekeliruan dalam surat keputusan ini, maka
                        akan dilakukan perbaikan sebagaimana mestinya.
                    </p>
                </td>
            </tr>
        </table> -->

        <br>
        <br>
        @foreach($sp as $k)
        <table width="50%" align="left" style="margin-left: 90px;">
            <tr>
                <td>
                    <font style="font-size: 12px">Ditetapkan di: Yogyakarta</font><br>
                    <font style="font-size: 12px">Pada tanggal : {{$k->tanggal_masuk}}</font><br>
                    <font style="font-size: 12px">{{$k->jabatan}},</font><br>
                    <div class="visible-print text-center">
                        <img src="images/{{$k->ttd}}" width="160" height="160">
                    </div>
                    <font style="font-size: 12px"><b>{{$k->nama_penjabat}}</b></font><br>
                    <font style="font-size: 12px">NIK : {{$k->nik}}</font>
                </td>
            </tr>
        </table>
        @endforeach
    </body>
</html>
