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
    <div class="min-w-screen lg:aspect-video min-h-screen h-fit bg-center bg-cover mx-auto" style="background-image: url('./IMG/bus3.png');">
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
    </div>
    <!-- End Hero Section (Banner Section) -->
</body>

</html>