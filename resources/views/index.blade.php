@extends('template')

@section('content')

    <div id="wrapper">

        <div id="mode" >
            <div class="dark">
                <svg aria-hidden="true" viewBox="0 0 512 512">
                    <title>lightmode</title>
                    <path fill="currentColor" d="M256 160c-52.9 0-96 43.1-96 96s43.1 96 96 96 96-43.1 96-96-43.1-96-96-96zm246.4 80.5l-94.7-47.3 33.5-100.4c4.5-13.6-8.4-26.5-21.9-21.9l-100.4 33.5-47.4-94.8c-6.4-12.8-24.6-12.8-31 0l-47.3 94.7L92.7 70.8c-13.6-4.5-26.5 8.4-21.9 21.9l33.5 100.4-94.7 47.4c-12.8 6.4-12.8 24.6 0 31l94.7 47.3-33.5 100.5c-4.5 13.6 8.4 26.5 21.9 21.9l100.4-33.5 47.3 94.7c6.4 12.8 24.6 12.8 31 0l47.3-94.7 100.4 33.5c13.6 4.5 26.5-8.4 21.9-21.9l-33.5-100.4 94.7-47.3c13-6.5 13-24.7.2-31.1zm-155.9 106c-49.9 49.9-131.1 49.9-181 0-49.9-49.9-49.9-131.1 0-181 49.9-49.9 131.1-49.9 181 0 49.9 49.9 49.9 131.1 0 181z"></path>
                </svg>
            </div>
            <div class="light">
                <svg aria-hidden="true" viewBox="0 0 512 512">
                    <title>darkmode</title>
                    <path fill="currentColor" d="M283.211 512c78.962 0 151.079-35.925 198.857-94.792 7.068-8.708-.639-21.43-11.562-19.35-124.203 23.654-238.262-71.576-238.262-196.954 0-72.222 38.662-138.635 101.498-174.394 9.686-5.512 7.25-20.197-3.756-22.23A258.156 258.156 0 0 0 283.211 0c-141.309 0-256 114.511-256 256 0 141.309 114.511 256 256 256z"></path>
                </svg>
            </div>
        </div>

        <div class="container">

            <section id="top" class="section docs-heading">

                <div class="row">
                    <div class="col-md-12">
                        <div class="big-title text-center">
                            <h1>Open Al-Qur'an APIs</h1>
                            <p class="lead">versi 1.0</p>
                        </div>
                        <!-- end title -->
                    </div>
                    <!-- end 12 -->
                </div>
                <!-- end row -->

                <hr>

            </section>
            <!-- end section -->

            <div class="row">

                <div class="col-md-3">
                    <nav class="docs-sidebar" data-spy="affix" data-offset-top="300" data-offset-bottom="200" role="navigation">
                        <ul class="nav">
                            <li><a href="#line1">Pengenalan</a></li>
                            <li><a href="#line2">Mendapatkan Surah</a></li>
                            <li><a href="#line3">Mendapatkan Juz</a></li>
                            <li><a href="#line4">Data Ayat Berdasarkan Surah</a></li>
                            <li><a href="#line5">Data Ayat Berdasarkan Juz</a></li>
                            <li><a href="#line6">Lacak Versi</a></li>
                            <li><a href="#line7">Lisensi</a></li>
                            <li><a href="#line8">Tentang Developer</a></li>
                        </ul>
                    </nav >
                </div>
                <div class="col-md-9">
                    <section class="welcome section" id="line1">

                        <div class="row">
                            <div class="col-md-12 left-align">
                               <h2 class="dark-text">Pengenalan<hr></h2>
                                <div class="row">

                                    <div class="col-md-12 full">
                                        <div>
                                            <p>Open Al-Quran APIs merupakan layanan terbuka yang menyediakan surah-surah Al-Qur'an. Layanan ini dapat diakses secara public tanpa harus melakukan autentikasi dan autorisasi terlebih dahulu. Surah Al-Quran kami disediakan bentuk output API dengan format json, sehingga akan lebih mudah untuk parsing. API ini dapat dikonsumsi pada server side maupun pada elemen client side dalam mengembangkan aplikasi baik berbasis Web, Desktop maupun Mobile. Adanya Open API ini diharapkan dapat membantu para developer App dalam mengembangkan aplikasi Al-Quran.</p>
                                            <div class="intro2 clearfix">
                                                <p><i class="fa fa-exclamation-triangle"></i> Kami harap API Al-Quran ini dapat digunakan sebaik mungkin, sehingga dapat memberikan manfaat bagi kita semua.
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </section>

                    <section id="line2" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h3 class="dark-text">Mendapatkan Surah <hr></h3>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-12">
                                <p>Daftar Surah Al-Quran terdapat 114 Surah yang dapat diakses melalui endpoint berikut :</p>
                                <pre class="brush: html">
                                    https://alquranapi.herokuapp.com/apis/v2/surah/
                                </pre>
                                <p>Endpoint tersebut mengembalikan nilai json yang berisi, Nama Surah Latin dan Arab, Arti, Jumlah Ayat dan Tepat Diturunkannya (Makkiyah/Madaniyah)</p>
                                <img src="{{ asset('assets/images/surah.jpg') }}" alt="..">
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->
                    <section id="line3" class="section">
                        
                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h3 class="dark-text">Mendapatkan Juz <hr></h3>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                        <div class="row">
                            <div class="col-md-12">
                                <p>Daftar Juz Al-Quran terdapat 30 Juz yang dapat diakses melalui endpoint berikut:</p>
                                <pre class="brush: html">
                                    https://alquranapi.herokuapp.com/apis/v2/juz/
                                </pre>
                                <p>Endpoint tersebut mengembalikan nilai json yang berisi Nama Juz Latin dan Arab.</p>
                                <img src="{{ asset('assets/images/juz.jpg') }}" alt="..">
                                
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </section>
                    <!-- end section -->
                    <section id="line4" class="section">
                        
                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Mendapatkan Ayat Berdasarkan Surah <hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                        <div class="row">
                            <div class="col-md-12">
                                <p>Untuk mendapatkan ayat-ayat dalam satu Surah dapat mengakses melalui endpoint yang serupa dengan akses daftar Surah. Akses terhadap ayat berdasarkan Surah dapat ditambahkan {id} pada segment terakhir. {id} tersebut merujuk merujuk pada nomer Surah Al-Qur’an.</p>
                                <pre class="brush: html">
                                    https://alquranapi.herokuapp.com/apis/v2/surah/{id}
                                </pre>
                                <p>Endpoint akan mengembalikan json berisikan, Nomer Surah Latin + Arab, Ayat Latin + Arab, dan Terjemahannya</p>
                                <img src="{{ asset('assets/images/ayatbysurah.jpg') }}" alt="..">
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->
                    <section id="line5" class="section">
                        
                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Mendapatkan Ayat Berdasarkan Juz<hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-12">
                                <p>Untuk mendapatkan ayat-ayat dalam satu Juz dapat mengakses melalui endpoint yang serupa dengan akses daftar Juz. Akses terhadap ayat berdasarkan Juz dapat dilakukan dengan menambahkan {id} pada segment terakhir, {id} tersebut merujuk merujuk pada nomer Juz Al-Qur’an.</p>
                                <pre class="brush: html">
                                    https://alquranapi.herokuapp.com/apis/v2/juz/{id}
                                </pre>
                                <p>Endpoint juga mengembalikan ayat dalam satu Juz dalam bentu json berisikan, Nomer Surah Latin + Arab, Ayat Latin + Arab, serta Terjemahannya.</p>
                                <img src="{{ asset('assets/images/ayatbyjuz.jpg') }}" alt="..">
                                
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </section>
                    <!-- end section -->
                    
                    <section id="line6" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Version History (Changelog) <hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-12">

                                <p>Versi 1.0 API menyediakan akses untuk mendapatkan Daftar Surah, Daftar Juz, Mendapatkan Ayat berdasarkan Nomer Surah maupun Nomer Juz. </p>
                                <hr />
                                <p>Kritik dan Saran dapat anda kirimkan melalui email : <a href="mailto:faisoloffial99@gmail.com">faisolofficial99@gmail.com</a></p>
                            </div>
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->

                    <section id="line7" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">License <hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-12">
                                
                                <p>Layanan API ini terbuka untuk umum dan dapat digunakan secara free.</p>
                            
                            </div>
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->

                    <section id="line8" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Tentang Developer <hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-12 text-center">

                                <img src="{{ asset('assets/images/faisol.jpg') }}" alt=".." style="max-width:150px;border-radius:50%;margin-top:20px;">    
                                <p style="padding-bottom: 0;margin-top:8px;">Ach. Faisol S. Arifin</p>
                                <p>faisolofficial99@gmail.com</p>

                            </div>
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->
                </div>
                <!-- // end .col -->

            </div>
            <!-- // end .row -->

        </div>
        <!-- // end container -->

    </div>
    <!-- end wrapper -->


@endsection