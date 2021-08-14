<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{asset('front/css/Style.css')}}" rel="stylesheet" />
    <title>Anasayfa</title>


</head>
<body>



<div class="page">

    <nav class="navbar navbar-expand
                justify-content-end sticky-top">

        <h3 class="baslik navbar-brand ">Hakkımda</h3>

        <ul class="navbar-nav" >
            <li class="nav-item">
                <button class="secim" onclick="window.location.href = 'Sayfa_En.html';"> Lang-En </button>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a href="#yeteneklerim">Yeteneklerim</a>
            </li>

            <li class="nav-item ml-2 mr-3">
                <a href="#iletisim">İletişim</a>
            </li>


        </ul>
    </nav>






    <div class="text">
        <div class="Me"> Rabia PARLAK</div>
        <div class="foto"> <img class="Ben" src="{{asset('front/asset/img/3.jpg')}}" alt="Alternate Text" />  </div>
        <div class="foto1"></div>
        <div class="foto2"></div>
        <div class="foto3"></div>
        <div class="foto4"></div>

    </div>
</div>


<div class="page2"   >

    <div class="text2">
        <h3 id="yeteneklerim" >Yeteneklerim </h3>
        <div class="diller" >
            <div class="Cplus">
                <div class=" on1 alert alert-primary  ">C++</div>
                <div class="arka1"></div>
            </div>
            <div class="Java">
                <div class="on2 alert alert-danger  ">Java</div>
                <div class="arka2"></div>
            </div>
            <div class="Cshirp">
                <div class="on3 alert alert-success">C#</div>
                <div class="arka3"></div>
            </div>
            <div class="Python">
                <div class="on4 alert alert-dark ">Python</div>
                <div class="arka4"></div>
            </div>
        </div>





        <!--  <div class="alert alert-danger mt-5 mb-3 ml-5">
              kjhgfd
          </div>
          -->
    </div>
</div>


<div class="page3">

    <div class="text">
        <h3 id="iletisim">İletişim</h3>
        <br /> <br /> <br /> <br /> <br />
        <div class="süs"> <p class="iletisim">  Telefon: 0533 973 6271 </p></div>
        <div class="süs"><p class="iletisim">  E-posta: rparlak368@gmail.com </p></div>
        <div class="süs"><p class="iletisim">  Sosyal medya: <a href="https://www.instagram.com/rabiap.my/?hl=tr">İnstagram Hesabım</a></p></div>
        <br /> <br />
        <h4>İletişime Geç</h4>
        <br /> <br /> <br />
        <div class="panel">
            <div class="form-group">
                <label for="name">İsim Soyisim</label>
                <input type="text"  id="name" class="form-control"
                       placeholder="İsim soyisim giriniz"/>
            </div>

            <div class="form-group">
                <label for="email">E-posta</label>
                <input type="email"  id="email" class="form-control"
                       placeholder="E-posta giriniz"/>
                <small class="form-text text-muted">Boş bırakmayınız</small>
            </div>




            <textarea name="message" cols="50" rows="10" class="form-control" placeholder="Mesajınızı giriniz"></textarea>

            <br />

            <button class="gonder btn btn-outline-black" type="button">Gönder</button>
            <button class="sıfırla btn btn-outline-black " type="button">Sıfırla</button>
            <br /> <br />
            <div class="iletildi alert alert-warning alert-dismissible fade">
                Mesajınız gönderildi.
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
            </div>

        </div>
        <div class="linkedln">
            <div class="LI-profile-badge"  data-version="v1" data-size="large" data-locale="tr_TR" data-type="horizontal" data-theme="dark" data-vanity="rabia-parlak-477a371b1"><a class="LI-simple-link" href='https://tr.linkedin.com/in/rabia-parlak-477a371b1?trk=profile-badge'>Rabia Parlak</a></div>
        </div>
    </div>
    <div class="alert alert bg-dark m-0 ">
        <h5 class="text-white">Ziyaretçiye not</h5>
        <p class="text-white">
            Hayat bisiklete binmek gibidir. Pedalı çevirmeye devam ettiğiniz sürece düşmezsiniz.
            <br /> -Claude Pepper

        </p>

    </div>

</div>

<div class="yazilar">
    <p> Merhaba ! <br />20 yaşında yazılım mühendisliği öğrencisiyim. Doğma büyüme Gaziantepliyim.
        Elazığda Fırat üniversitesinde öğrenim görmekteyim. Hayat felsefem : "Hayal edebildiğin
        her şey gerçekleşebilir."

    </p>
</div>



<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
