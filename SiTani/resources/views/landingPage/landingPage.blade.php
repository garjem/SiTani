<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar dengan Bootstrap</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        
        *{
            font-family: "Be Vietnam Pro", sans-serif;
        }
        
        .navbar-brand img {
            height: 40px; 
        }
        .navbar-green {
            background: #58A399;
        }
        .nav-link {
            color: white;
        }
        .btn-login {
            background-color: #ffffff; 
            color: #58A399; 
            border-radius: 20px; 
            padding: 5px 20px; 
            border: 2px solid #58A399; 
        }
        .btn-login:hover {
            background-color: #58A399; 
            color: #ffffff;
        }
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        section.top {
            width: 100%;
            height: 100vh;
            background-image: url('assets/kebun.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
        } 

        section.bottom, section.aboutUs1, section.aboutUs2, section.aboutUs3{
            width: 100%;
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .logo {
            text-align: center;
        }

        .logo img {
            margin-top: 10rem;
        }

        .roundedone {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin: 0 10px; 
        }

        h2 {
            background-color: #58A399; 
            color: #ffffff; 
            border-radius: 50%; 
            width: 150px; 
            height: 150px; 
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            font-size: 3rem;
            font-weight: bold;
        }

        p {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
            color: black;
        }

        .aboutUs1, .aboutUs3{
            background-color: #58A399;
            color: white
        }

        .aboutUs3 p, .aboutUs1 p{
            color: white;
            font-weight: 400;
        }

        .aboutUs2 p, .aboutUs2 h3{
            color: #58A399
        }

        h3{
            font-size: 72px;
            font-weight: bold
        }
        .aboutUs2 p{
            font-weight: 400;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-green">
    <a class="navbar-brand" href="#">
        <img src="{{ URL('img/SiTani.png') }}" alt="SiTani"> 
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto nav-underline">
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link btn btn-login dropdown-toggle" href="#" id="loginDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 70rem; text-decoration: none;">
                    Login
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="loginDropdown">
                    <a class="dropdown-item" href="#">User</a>
                    <a class="dropdown-item" href="#">Mitra</a>
                    <a class="dropdown-item" href="#">Admin</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<section class="top">
    <div class="logo">        
        <img src="{{ URL('assets/SiTani.png') }}" width="700rem" alt="">
    </div>
</section>

<section class="bottom">
    <div class="d-flex justify-content-center">
        <div class="roundedone mx-5">
            <h2>1</h2>
            <p>Meningkatkan Pengetahuan dan Keterampilan</p>
        </div>
        <div class="roundedone mx-5">
            <h2>2</h2>
            <p>Optimasi Produksi dan Efisiensi</p>
        </div>
        <div class="roundedone mx-5">
            <h2>3</h2>
            <p>Akses ke Pasar dan Jaringan</p>
        </div>
    </div>
</section>


<section class="aboutUs1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 text-start">
                <p>Kami adalah perusahaan teknologi yang berfokus pada inovasi di sektor pertanian, dengan tujuan memberdayakan petani melalui edukasi dan solusi digital. Aplikasi pertanian kami dirancang untuk menjadi sahabat setia petani dalam setiap tahap proses pertanian, mulai dari perencanaan hingga panen.</p>
            </div>
            <div class="col-md-4 text-center">
                </div>
            <div class="col-md-4 text-end">
                <h3>Tentang Kami</h3>

            </div>
        </div>
    </div>
</section>

<section class="aboutUs2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 text-start">
                <h3>Visi Kami</h3>
            </div>
            <div class="col-md-4 text-center">
            </div>
            <div class="col-md-4 text-end">
                <p>Menciptakan generasi petani cerdas yang mandiri dan berdaya saing tinggi melalui edukasi dan teknologi, untuk mewujudkan pertanian berkelanjutan yang mampu memberikan kesejahteraan bagi masyarakat dan menjaga kelestarian lingkungan.</p>
            </div>
        </div>
    </div>
</section>

<section class="aboutUs3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 text-start ">
                <ol type="1">
                    <li><strong>Edukasi Berkualitas</strong>: Menyediakan akses informasi dan pelatihan untuk meningkatkan pengetahuan dan keterampilan petani.</li>
                    <li><strong>Inovasi Teknologi</strong>: Mengembangkan teknologi canggih untuk mengoptimalkan produksi dan efisiensi pertanian.</li>
                    <li><strong>Akses Pasar</strong>: Menghubungkan petani dengan pembeli dan distributor untuk mempermudah penjualan dan memperluas pasar.</li>
                    <li><strong>Praktik Berkelanjutan</strong>: Mempromosikan pertanian ramah lingkungan untuk menjaga kelestarian sumber daya alam.</li>
                </ol>
            </div>
            <div class="col-md-4 text-center -ms-">
            </div>
            <div class="col-md-4 text-end">
            <h3>Misi Kami</h3>

            </div>
        </div>
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
