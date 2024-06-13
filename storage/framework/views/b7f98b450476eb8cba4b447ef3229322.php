

<?php $__env->startSection('content'); ?>
    <section id="about" class="about">
        <h2><span>About</span> Me</h2>

        <div class="row">
            <div class="about-img">
                <img src="../assets/img/Tentang-Kami.jpg" alt="AboutSaya">
            </div>
            <div class="content">
                <h3>Kenalan dulu dong!</h3>
                <p>Hai hai hai, Perkenalkan aku M.Nabil Zahin Siddiq , biasaya sih dipanggil Nabil. Aku adalah anak ke-2 dari 3 bersaudara.</p>
                <p>Aku juga sangat suka dengan hal-hal baru yang tidak pernah ku dengar, aku memiliki sifat yang periang dan juga antusias. Aku bersekolah di SMK Wikrama Bogor dan memilih jurusan PPLG. </p>
            </div>
            <div class="content">
                <h3>Sekolah</h3>
                <ul>
                    <li>PAUD = PAUD Mentari (lulus)</li>
                    <li>SD = SDN Banjarsari 02 (lulus)</li>
                    <li>SMP = SMP Negeri 01 Ciawi (lulus)</li>
                    <li>SMK = SMK Wikrama Bogor (saat ini)</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="hobby" class="hobby">
        <h2>My <span>Hobby</span></h2>

        <div class="row">
            <div class="hobby-card">
                <img src="../assets/img/hobby-volly.jpg" alt="MyHobbyPicture" class="hobby-card-img">
                <h3 class="hobby-card-title">- VolleyBall -</h3>
            </div>
            <div class="hobby-card">
                <img src="../assets/img/hobby-cosplay.jpg" alt="MyHobbyPicture" class="hobby-card-img">
                <h3 class="hobby-card-title">- Cosplaying -</h3>
            </div>
            <div class="hobby-card">
                <img src="../assets/img/hobby-reading.jpg" alt="MyHobbyPicture" class="hobby-card-img">
                <h3 class="hobby-card-title">- Reading Novel -</h3>
            </div>
            <div class="hobby-card">
                <img src="../assets/img/hobby-drawing.png" alt="MyHobbyPicture" class="hobby-card-img">
                <h3 class="hobby-card-title">- Pixel Art Artis -</h3>
            </div>
            <div class="hobby-card">
                <img src="../assets/img/hobby-music.jpg" alt="MyHobbyPicture" class="hobby-card-img">
                <h3 class="hobby-card-title">
                    <a href="#" class="hobby-card-links">- Listening Music -</a>
                </h3>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PortofolioNabil\resources\views/about.blade.php ENDPATH**/ ?>