<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/tailwind.css">
    <title>Jogja Travel</title>
    <?php include('./material/fonts.php');
    include('./material/icons.php'); ?>
</head>

<body>
    <!-- Navbar Section -->
    <?php include('./components/navbar.php'); ?>
    <!-- End Navbar Section -->
    <!-- Hero Section (Banner Content) -->
    <section class="min-w-screen lg:aspect-video min-h-screen h-fit bg-center bg-cover mx-auto" style="background-image: url('./IMG/bus3.png');">
        <div class="container mx-auto flex justify-center items center flex-col min-h-screen h-fit px-3 lg:px-0 py-4 ">
            <div class="text-center md:text-left flex flex-col gap-2 md:w-3/4 lg:w-3/5">
                <h2 class="text-3xl md:text-4xl font-inter font-semibold text-white">Selamat Datang di <span class="text-[#00CEFB]">JOGJA TRAVEL</span></h2>
                <p class="text-base text-white font-inter font-semibold md:text-lg"><span class="text-[#00CEFB]">JOGJA TRAVEL</span> siap mengantar pelanggan dari Jogja ke seluruh wilayah Pulau Jawa! Kami adalah mitra perjalanan yang dapat diandalkan dan menyediakan layanan transportasi yang aman, nyaman, dan handal.</p>
                <p class="text-base text-white font-inter font-semibold md:text-lg">Kami dapat membantu anda untuk mencari tiket bus dengan cepat dan mudah hanya dengan sekali klik. Anda dapat membaca langkah langkah dibawah untuk mempermudah anda memesan tiket.</p>
                <div class="w-full md:inline-flex gap-5 items-center">
                    <p class="text-base text-white font-inter font-semibold my-4 md:w-fit md:text-lg">Pesan Tiket? Klik tombol <span class="hidden md:inline">disamping</span> <span class="md:hidden">dibawah</span></p>
                    <a href="#" class="px-12 py-2 rounded-md bg-gradient-to-r from-[#00C5F7] to-[#024EC1] font-semibold text-white text-center">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section (Banner Section) -->
    <!-- How To Order Section -->
    <section class="min-w-screen h-fit px-2 py-10">
        <div class="w-full h-fit text-center container mx-auto">
            <h2 class="text-xl md:text-3xl font-semibold font-inter text-[#00CEFB]">Langkah-Langkah Pemesanan Tiket Bus</h2>
            <p class="text-[#8b96a7] font-semibold text-base font-inter">Berikut langkah-langkah untuk memesan tiket bus JOGJA TRAVEL</p>
        </div>
        <div class="w-full h-fit flex justify-center container mx-auto my-2 flex-wrap gap-2">
            <div class="border-2 border-[#00CEFB] text-center rounded-xl text-[#8b96a7] py-8 px-2 w-3/4  md:w-2/5 aspect-square flex flex-col justify-center items-center max-w-[280px]">
                <h1 class="text-5xl font-poppins font-bold">1</h1>
                <p class="font-semibold font-poppins text-base ">Masuk kemenu pemesanan lalu isikan data seperti daerah tujuan dan tanggal keberangkatan.</p>
            </div>
            <div class="border-2 border-[#00CEFB] text-center rounded-xl text-[#8b96a7] py-8 px-2 w-3/4  md:w-2/5 aspect-square flex flex-col justify-center items-center max-w-[280px]">
                <h1 class="text-5xl font-poppins font-bold">2</h1>
                <p class="font-semibold font-poppins text-base ">Pilih jadwal keberangkatan yang sesuai dengan keinginan anda..</p>
            </div>
            <div class="border-2 border-[#00CEFB] text-center rounded-xl text-[#8b96a7] py-8 px-2 w-3/4  md:w-2/5 aspect-square flex flex-col justify-center items-center max-w-[280px]">
                <h1 class="text-5xl font-poppins font-bold">3</h1>
                <p class="font-semibold font-poppins text-base ">Memilih kursi bus yang tersedia. Pastikan memilih tempat duduk ternyaman anda.</p>
            </div>
            <div class="border-2 border-[#00CEFB] text-center rounded-xl text-[#8b96a7] py-8 px-2 w-3/4  md:w-2/5 aspect-square flex flex-col justify-center items-center max-w-[280px]">
                <h1 class="text-5xl font-poppins font-bold">4</h1>
                <p class="font-semibold font-poppins text-base ">Kemudian masukan identitas anda seperti nama lengkap dan nomor telepon, untuk keperluan pemesanan dan konfirmasi tiket.</p>
            </div>
            <div class="border-2 border-[#00CEFB] text-center rounded-xl text-[#8b96a7] py-8 px-2 w-3/4  md:w-2/5 aspect-square flex flex-col justify-center items-center max-w-[280px]">
                <h1 class="text-5xl font-poppins font-bold">5</h1>
                <p class="font-semibold font-poppins text-base ">Lakukan pembayaran sebagai tahap akhir pemesanan tiket. Anda dapat membayar melalui metode pembayaran yang tersedia, seperti kartu kredit, transfer bank, atau metode pembayaran elektronik lainnya</p>
            </div>
            <div class="border-2 border-[#00CEFB] text-center rounded-xl text-[#8b96a7] py-8 px-2 w-3/4  md:w-2/5 aspect-square flex flex-col justify-center items-center max-w-[280px]">
                <h1 class="text-5xl font-poppins font-bold">6</h1>
                <p class="font-semibold font-poppins text-base ">Setelah melakukan pembayaran anda akan menerima tiket online yang akan dikirim ke menu Tiket. Pastikan anda sudah mengeceknya sebelum keberangkatan. </p>
            </div>
        </div>
    </section>
    <!-- End How To Order Section -->
    <!-- Footer Start -->
    <footer class="min-w-screen h-fit bg-gradient-to-r bg-right from-[#00CEFB] to-[#024EC1]">
        <div class="container mx-auto h-full py-10 flex justify-between items-center flex-wrap px-2 md:px-0 gap-4">
            <h2 class="text-4xl font-inter font-semibold text-white w-full md:w-fit text-center">JOGJA<span class="text-base font-keania font-semibold">Travel</span></h2>
            <div class="w-full md:w-fit text-center md:text-left">
                <h2 class="text-2xl font-inter text-white font-semibold">Layanan Kami</h2>
                <ul class="font-inter text-base font-semibold text-white md:flex gap-3 py-0 md:py-2">
                    <li class="hover:text-pink-950"><a href="#">Home</a></li>
                    <li class="hover:text-pink-950"><a href="#">Pemesanan</a></li>
                    <li class="hover:text-pink-950"><a href="#">Tiket</a></li>
                    <li class="hover:text-pink-950"><a href="#">Pembayaran</a></li>
                </ul>
            </div>
            <h2 class=" w-full md:w-fit text-2xl font-inter text-white font-semibold text-center">Media Sosial</h2>
        </div>

    </footer>
    <!-- Footer End -->
</body>

</html>