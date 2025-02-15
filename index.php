<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Zaki</title>
</head>
<body>
    <?php include "header.php"; ?>

    <div id="home" class="home" style=" color: black; display:flex; align-items:center; justify-content:center; height:400px; padding:40px;" >
        <div class="row gx-1" >
            <div class="col-md-4 col-6">
                <div class="sapaan"  style=" text-align:center;" data-aos="fade-right" data-aos-duration="1000">
                    <p class="fs-1" style="font-weight: 600;">HELLO,</p>
                </div>
            </div>
            <div class="col-md-8 col-12">
                <div class="deskripsi-diri" style="display: flex; align-items:center; font-family: 'Poppins', serif; justify-content:center; height:100%; font-size: 13px;  text-align:left;" data-aos="fade-left" data-aos-duration="1000">
                    <p>My name is <b>Zaki!</b> A Junior Programmer with a passion for web development and photography. 
                    I love building efficient applications while capturing moments through my lens. Let’s connect!</p>
                    <button class="btn btn-hover-effect rounded-2 mx-auto d-flex justify-content-center align-items-center" type="submit" style="color:white; border:1px solid transparent; font-size:15px; height:30px; width:100px; background-color:#6B240C;" onclick="setDarkMode(true)">darkmode</button>
                    <button class="btn btn-hover-effect rounded-2 mx-auto d-flex justify-content-center align-items-center" type="submit" style="color:white; border:1px solid transparent; font-size:15px; height:30px; width:100px; background-color:#6B240C;" onclick="setDarkMode(false)">whitemode</button>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="about">
        <div class="container">
            <div class="isi-about">        
                    <div class="col-md-12 ">
                        <div class="judul text-start align-items-center" style=" height:40px; width:fit-content;" data-aos="fade-right" data-aos-duration="1000">
                            <p style="font-family: 'Shafarik', serif; font-weight:400; font-size: 30px;">ABOUT</p>
                        </div>
                </div>

                <div class="gambarku">
                    <div class="row g-3 px-3">
                        <div class="col-6">
                            <div class="border d-flex align-items-center justify-content-center text-center"  style="height: 400px;" data-aos="fade-up" data-aos-duration="1000">
                                <img src="Asset/about1.jpg" class="img w-100 h-100" style="object-fit:cover;">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="border d-flex align-items-center justify-content-center text-center" style="height: 400px;" data-aos="fade-up" data-aos-duration="1000">
                                <img src="Asset/about2.jpg" class="img w-100 h-100" style="object-fit:cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="gallery" class="gallery">
            <div class="container-fluid" style="padding: 60px;">
                <div class="judul-galler">
                    <div class="col-md-12 col-12 text-start align-items-center" data-aos="fade-right" data-aos-duration="1000">
                        <p style="font-family: 'Shafarik', serif; font: weight 600px; font-size:22px;">SNAPSEED X LIGHTROOM X LENS DISTORSIONS</p>
                        <p style="font-family:'Poppins', serif; font-size:13px;">photography by : <b>zaki irfana rouf</b></p>
                    </div>
                </div>
                <div class="row g-3">
    <!-- Bagian kiri (8 kolom) -->
        <div class="col-md-8"  data-aos="fade-up" data-aos-duration="1000">
            <div class="row g-3">
                <div class="col-md-3 col-6">
                    <div class="gambar" style="width:100%; aspect-ratio: 4/5; overflow:hidden;">
                        <img src="Asset/gallery1.jpeg" class="w-100 h-100" style="object-fit:cover;">
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="gambar" style="width:100%; aspect-ratio: 4/5; overflow:hidden;">
                        <img src="Asset/gallery2.jpeg" class="w-100 h-100" style="object-fit:cover;">
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="gambar" style="width:100%; aspect-ratio: 4/5; overflow:hidden;">
                        <img src="Asset/gallery3.jpeg" class="w-100 h-100" style="object-fit:cover;">
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="gambar" style="width:100%; aspect-ratio: 4/5; overflow:hidden;">
                        <img src="Asset/gallery4.jpeg" class="w-100 h-100" style="object-fit:cover;">
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="gambar" style="width:100%; aspect-ratio: 4/5; overflow:hidden;">
                        <img src="Asset/gallery5.jpeg" class="w-100 h-100" style="object-fit:cover;">
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="gambar" style="width:100%; aspect-ratio: 4/5; overflow:hidden;">
                        <img src="Asset/gallery6.jpeg" class="w-100 h-100" style="object-fit:cover;">
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="gambar" style="width:100%; aspect-ratio: 4/5; overflow:hidden;">
                        <img src="Asset/gallery7.jpeg" class="w-100 h-100" style="object-fit:cover;">
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="gambar" style="width:100%; aspect-ratio: 4/5; overflow:hidden;">
                        <img src="Asset/gallery8.jpeg" class="w-100 h-100" style="object-fit:cover;">
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="gambar" style="width:100%; aspect-ratio: 4/5; overflow:hidden;">
                        <img src="Asset/gallery9.jpeg" class="w-100 h-100" style="object-fit:cover;">
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="gambar" style="width:100%; aspect-ratio: 4/5; overflow:hidden;">
                        <img src="Asset/gallery11.jpeg" class="w-100 h-100" style="object-fit:cover;">
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="gambar" style="width:100%; aspect-ratio: 4/5; overflow:hidden;">
                        <img src="Asset/gallery12.jpeg" class="w-100 h-100" style="object-fit:cover;">
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="gambar" style="width:100%; aspect-ratio: 4/5; overflow:hidden;">
                        <img src="Asset/gallery13.jpeg" class="w-100 h-100" style="object-fit:cover;">
                    </div>
                </div>
            </div>
        </div>

    <!-- Bagian kanan (4 kolom) -->
    <div class="col-md-4">
        <div class="gambar" style="width:100%; height:100%; overflow:hidden;" data-aos="fade-up" data-aos-duration="1000">
            <img src="Asset/gallery10.jpeg" class="w-100 h-100" style="object-fit:cover;">
        </div>
    </div>
</div>

            </div>
        </div>

    </div>
    <!-- Overlay untuk gambar yang diperbesar -->
<div class="overlay" id="overlay">
    <img id="overlay-img" src="" alt="Preview">
</div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
    // Ambil semua gambar di dalam gallery
    const images = document.querySelectorAll('.gallery .gambar img');
    const overlay = document.getElementById('overlay');
    const overlayImg = document.getElementById('overlay-img');

    images.forEach(img => {
        img.addEventListener('click', () => {
            overlay.style.display = 'flex';
            overlayImg.src = img.src;
        });
    });

    // Tutup overlay saat di-klik
    overlay.addEventListener('click', () => {
        overlay.style.display = 'none';
    });
</script>

<script>
    function setDarkMode(isDark){
        if(isDark){
            document.body.setAttribute('id','darkmode')
        }else{
            document.body.setAttribute('id', '')
        }
    }
</script>


</body>
</html>