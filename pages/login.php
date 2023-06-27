<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/tailwind.css">
    <title>Login</title>
</head>

<body>
    <div class="w-full min-h-screen h-fit flex">
        <div class="hidden lg:w-[60%] lg:flex h-screen bg-red-400"></div>
        <div class="w-[90%] lg:w-[40%] items-center justify-center flex h-screen flex-col container mx-auto px-2">
            <div class="rounded-md px-4 py-4">
                <h2 class=" text-4xl tracking-wide font-bold text-slate-900">Selamat Datang</h2>
                <p class="font-semibold text-base my-3">Masukkan username dan password akun anda!</p>
                <form action="" class="my-4 flex flex-col gap-4">
                    <label for="username">
                        <p class="font-light text-lg">Username</p>
                        <input type="text" id="username" name="username" class="py-2 px-3 w-full rounded-2xl outline-none ring-0 border-[1px] border-blue-500">
                    </label>
                    <label for="password">
                        <p class="font-light text-lg">Password</p>
                        <input type="text" id="password" name="password" class="py-2 px-3 w-full rounded-2xl outline-none ring-0 border-[1px] border-blue-500">
                    </label>
                    <button class="bg-gradient-to-r from-cyan-300 to-blue-600 py-2 rounded-lg text-xl text-white font-semibold">Login</button>
                </form>
                <p class="font-semibold tracking-wide text-base">Belum Punya akun? <a href="#" class="text-cyan-500 hover:text-cyan-600 active:text-cyan-700">Buat Akun Disini</a></p>
                <a href="#" class="text-center text-cyan-500 hover:text-cyan-600 active:text-cyan-700 font-semibold text-base font-mono">Lupa Password?</a>
            </div>
        </div>
    </div>
</body>

</html>