<?php
$tujuan = $_POST['tujuan'];
$tanggal = $_POST['tanggal'];

if (empty($tujuan) || empty($tanggal)) {
    header("Location: ./searchTicket.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOGJA TRAVEL | Ticket</title>
    <link rel="stylesheet" href="../CSS/tailwind.css">
    <?php include('../material/fonts.php');
    include('../material/icons.php'); ?>
</head>

<body>
    <?php include('../components/navbar.php'); ?>
    <!-- Banner Section -->
    <section class="min-w-screen lg:aspect-video min-h-screen h-fit bg-center bg-cover" style="background-image: url('../IMG/bus5.png');">
        <div class="container mx-auto py-4 px-2 md:px-2 flex flex-col gap-4 lg:px-14">
            <h2 class="text-center text-3xl font-semibold text-slate-900 font-inter">Ticket Bus</h2>
            <h4 class="font-semibold text-lg md:text-xl font-inter text-center md:text-left lg:w-3/4 lg:mx-auto">Yogyakarta &#8594; <?php echo $_POST['tujuan']; ?></h4>
            <p class="font-semibold text-lg  md:text-xl font-inter text-center md:text-left lg:w-3/4 lg:mx-auto"><?php echo $_POST['tanggal']; ?></p>
            <!-- Ticket Section -->
            <div class="w-full lg:w-4/5 rounded-lg aspect-video bg-white h-fit sm:max-h-12 md:max-h-44 py-4 px-3 md:px-6 mx-auto">
                <div class="flex w-full justify-between">
                    <h2 class="text-xl md:text-2xl lg:text-3xl text-black font-inter font-semibold">Sudiro Tunggal Jaya</h2>
                    <h3 class="font-semibold font-inter"><span class="text-[#FF0505] text-xl md:text-2xl lg:text-3xl">100.000</span> / <span class="font-md">Kursi</span></h3>
                </div>
                <h4 class="text-base font-inter capitalize font-light">Ekonomi Class</h4>
                <div class="min-w-full flex justify-between h-fit flex-wrap gap-4 md:gap-0">
                    <div class="w-full md:w-1/2">
                        <div class="flex items-center gap-2"><span class="material-symbols-outlined">
                                radio_button_unchecked
                            </span> 22.00 WIB <span class="text-sm font-inter text-slate-400">Yogyakarta</span></div>
                        <span class="material-symbols-outlined my-2">
                            south
                        </span>
                        <div class="flex items-center gap-2"><span class="material-symbols-outlined">
                                radio_button_checked
                            </span> 22.00 WIB <span class="text-sm font-inter text-slate-400">Yogyakarta</span></div>
                    </div>
                    <div class="w-full md:w-1/2 flex justify-center md:block relative">
                        <a href="#" class="md:w-fit text-sm text-white font-semibold font-inter px-4 py-2 rounded-md bg-gradient-to-r from-[#00CEFB] to-[#024EC1] md:absolute md:bottom-0 md:right-0">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- Ticket Section End -->
            <!-- Ticket Section -->
            <div class="w-full lg:w-4/5 rounded-lg aspect-video bg-white h-fit sm:max-h-12 md:max-h-44 py-4 px-3 md:px-6 mx-auto">
                <div class="flex w-full justify-between">
                    <h2 class="text-xl md:text-2xl lg:text-3xl text-black font-inter font-semibold">Sudiro Tunggal Jaya</h2>
                    <h3 class="font-semibold font-inter"><span class="text-[#FF0505] text-xl md:text-2xl lg:text-3xl">100.000</span> / <span class="font-md">Kursi</span></h3>
                </div>
                <h4 class="text-base font-inter capitalize font-light">Ekonomi Class</h4>
                <div class="min-w-full flex justify-between h-fit flex-wrap gap-4 md:gap-0">
                    <div class="w-full md:w-1/2">
                        <div class="flex items-center gap-2"><span class="material-symbols-outlined">
                                radio_button_unchecked
                            </span> 22.00 WIB <span class="text-sm font-inter text-slate-400">Yogyakarta</span></div>
                        <span class="material-symbols-outlined my-2">
                            south
                        </span>
                        <div class="flex items-center gap-2"><span class="material-symbols-outlined">
                                radio_button_checked
                            </span> 22.00 WIB <span class="text-sm font-inter text-slate-400">Yogyakarta</span></div>
                    </div>
                    <div class="w-full md:w-1/2 flex justify-center md:block relative">
                        <a href="#" class="md:w-fit text-sm text-white font-semibold font-inter px-4 py-2 rounded-md bg-gradient-to-r from-[#00CEFB] to-[#024EC1] md:absolute md:bottom-0 md:right-0">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- Ticket Section End -->

        </div>
    </section>
    <!-- End Banner Section -->
    <?php include('../components/footer.php'); ?>
</body>

</html>