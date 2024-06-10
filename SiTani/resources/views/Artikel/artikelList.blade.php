@extends('layout.main')

@section('Title', 'Artikel')

@section('css')
<style>
    .input-group {
        width: 50%;
    }

    a {
        text-decoration: none;
        color: black;
    }
    .tambahArtikel{
        background-color: #58A399; 
        border-radius: 50%; 
        width: 50px; 
        height: 50px; 
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        color: white;
        position: fixed;
        margin-top: 28rem;
        margin-left: 80rem
    }

    a.btn{
        color: white;
        font-size: 40px;
        font-weight: bold;
        margin-top: -9px;
    }
</style>
@endsection

@section('Content')

    <div class="d-flex justify-content-center mx-lg-5">
        <div class="input-group mb-3 mt-5">
            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-success" type="button" id="button-addon2">
                    <i class="fas fa-search">Search</i>
                </button>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
<!-- /copy dari sini -->
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card">
                    <img src="{{ URL('assets/sayur.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Manfaat Sayuran</h5>
                        <p class="card-text">sayur merupaka sumber serta terbaik untuk tubuh. Serat merupakan komponen yang penting untuk menjaga kesehatan saluran pencernaan dan mencegah konstipasi serta gangguan pencernaan lainnya.</p>
                    </div>
                </div>
            </div>
<!-- sampe sini -->
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card">
                    <img src="{{ URL('assets/bertani.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Manfaat Berkebun</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit quos fuga laborum sed neque at inventore? Aut eius possimus voluptatibus.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card">
                    <img src="{{ URL('assets/buahbuahan.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Manfaat Buah-Buahan</h5>
                        <p class="card-text">Sumber Air dan Gizi, buah merupakan salah satu sumber air untuk tubuh dan kebutuhan gizi yang dapat meningkatkan metabolisme tubuh.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card">
                    <img src="{{ URL('assets/berdagang.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Manfaat Berdagang</h5>
                        <p class="card-text">Berdagang hasil tani merupakan 'buah' yang dihasilkan untuk mendapatkan penghasilan</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card">
                    <img src="{{ URL('assets/petaniorganik.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pertanian Organik</h5>
                        <p class="card-text">Pertanian organik menghindari penggunaan bahan kimia sintetis dan berfokus pada keseimbangan ekosistem.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card">
                    <img src="{{ URL('assets/teknologipetani.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Teknologi Pertanian</h5>
                        <p class="card-text">LTeknologi modern seperti drone dan sensor tanah meningkatkan efisiensi dan hasil panen.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card">
                    <img src="{{ URL('assets/irigasi.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Irigasi</h5>
                        <p class="card-text">Sistem irigasi yang baik adalah kunci untuk menjaga tanah tetap subur dan tanaman tumbuh optimal.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card">
                    <img src="{{ URL('assets/hamapetani.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pengendalian Hama Alami</h5>
                        <p class="card-text">Penggunaan predator alami seperti serangga dan burung membantu mengendalikan populasi hama.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
