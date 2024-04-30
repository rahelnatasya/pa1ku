@extends('layout.main')

@section('content')
<nav class="navbar bg-primary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1 text-center mx-auto text-white">FASILITAS OLAHRAGA</span>
    </div>
</nav>
<nav class="navbar bg-dark"> <!-- Menambahkan kelas mt-3 dan mb-4 untuk memberikan margin top dan bottom pada navbar -->
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h6 text-center mx-auto text-white">LAPANGAN BASKET</span> <!-- Menambahkan kelas mb-3 untuk memberikan margin bottom -->
    </div>
</nav>
<!-- Text -->
<section class="py-2">
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-lg-15">
                <p class="text-lg-start mt-10 text-justify">Ruang seminar di Fakultas Teknologi Industri Institut Teknologi Del merupakan fasilitas yang bermanfaat bagi mahasiswa dan staf pengajar. Ruangan ini sering digunakan untuk kegiatan seperti seminar proposal, presentasi hasil penelitian, sidang, dan juga diskusi kelompok. 
                    Dalam ruang seminar, mahasiswa dan dosen dapat berkumpul untuk berbagai keperluan seminar seperti menyajikan hasil penelitian, dan mendiskusikan topik-topik menyangkut akademis. Fasilitas yang tersedia, seperti proyektor, meja, kursi, dan ruangan yang dilengkapi AC memungkinkan presentasi yang efektif, dan suasana yang nyaman dalam menciptakan kegiatan diskusi yang lebih produktif. 
                    Selain digunakan untuk kegiatan akademis formal, ruang seminar juga sering dijadikan tempat untuk mengerjakan progress tugas akhir dan rapat-rapat kecil. Ruang seminar menjadi tempat yang cocok untuk bertemu dan berdiskusi secara intensif tentang proyek-proyek penting.</p>
            </div>
        </div>
    </div>
</section>

<!-- Galeri Content -->
<div class="container-fluid"> <!-- Mengubah container menjadi container-fluid untuk membuatnya full width -->
    <div class="row text-center text-lg-start">
  
      <div class="col-lg-3 col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
        </a>
      </div>
      <!-- Masukkan gambar-gambar lainnya disini -->
    </div>
</div>
@endsection