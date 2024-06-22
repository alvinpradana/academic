<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SMAN 6 YOGYAKARTA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Login Akun SMAN 6 YOGYAKARTA">
    <link rel="stylesheet" href="{{ asset('assets/css/login/style.css') }}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <style>
        input:checked+label {
            border-color: #1F54DD;
            background-color: #55DFEC;
            color: #000;
        }
    </style>
</head>
<body class="bg-local " style="background-image: url(...)">
    <div id="wrapper" class="flex flex-col justify-between h-screen">
        <div class="bg-white py-4 shadow-md">
            <div class="max-w-6xl mx-auto">
                <div class="flex items-center lg:justify-between justify-around">
                    <a href="#">
                        <img src="https://www.sman6yogya.sch.id/assets/images/logo/1592363597-sma6-header.png"
                            alt="logo" class="lg:mx-0 lg:w-52 mx-auto w-40">
                        <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
                            <a href="{{ route('homepage') }}" class="shadow-lg py-3 px-3 rounded-lg text-white bg-gradient-to-r from-blue-600 via-blue-700 to-blue-800 hover:from-blue-800 hover:to-blue-900 text-center w-full hover:text-white">Ke website</a>
                        </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-2 md:grid-cols-2 lg:grid-cols-2">
            <div>
                <div class="hidden sm:table-cell max-w-xl lg:my-0 mx-auto p-6 float-right">
                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_gzl797gs.json"
                        background="transparent" speed="1" style="width: 500px; height: 500px;" hover
                        autoplay></lottie-player>
                    <div class=" pt-3.5 -mt-10 text-gray-400 text-xs text-center ">Komunitas ini
                        mewadahi warga sekolah dan alumni untuk berinteraksi dengan media sosial sekolah, untuk
                        Siswa,Guru, dan pegawai Sekolah silahkan meminta Akun kepada admin sekolah. Halaman Pendfataran
                        hanya khusus bagi Alumni . Alumni dapat berkontribusi untuk memberikan pengalaman motivasi
                        artikel dan informasi lowongan kerja bagi adik-adik tercinta. </div>
                </div>
            </div>
            <div>
                <div class="lg:p-12 max-w-lg lg:my-0 mx-auto p-6  ">
                    <form class="p-6 space-y-4 relative bg-white shadow-xl rounded-lg" id="form-login">
                        <div class="mb-6">
                            <span
                                class="lg:text-1xl text-xl font-semibold mb-1 text-transparent bg-clip-text bg-gradient-to-r to-blue-500 from-blue-600">Login</span><br>
                            <span
                                class="lg:text-1xl text-xl font-semibold mb-1 text-transparent bg-clip-text bg-gradient-to-r to-green-500 from-green-600">
                                SMAN 6 YOGYAKARTA</span>
                            <hr class="mt-3">
                            <div class="text-gray-600 text-xs mt-3">Silakan masukkan detail akun Anda.</div>
                        </div>
                        <div class="mb-6">
                            <label for="username"
                                class="block mb-2 text-sm font-medium">Email </label>
                            <input type="text" name="username" placeholder="Masukan Email ..." class="with-border" autofocus autocomplete="off">
                        </div>
                        <div class="mb-6">
                            <label for="password" class="block mb-4 text-sm font-medium">Password
                                <a href="{{ route('dashboard.index') }}" class="font-bold float-right text-blue-500 hover:underline text-sm">Lupa password ?</a></label>
                            <input type="password" name="password" placeholder="Masukan Password ..."
                                class="with-border" autocomplete="on">
                        </div>
                        <button type="button" name="submit" id="submit-login" class="font-bold shadow-lg py-3 rounded-lg text-white bg-gradient-to-r from-blue-600 via-blue-700 to-blue-800 hover:from-blue-800 hover:to-blue-900 text-center w-full">
                            Masuk
                        </button>
                    </form>
                    <div class="md:hidden lg:hidden pt-3.5 my-6 text-gray-400 text-xs text-center">
                        Komunitas ini mewadahi warga sekolah dan alumni untuk berinteraksi dengan media sosial sekolah,
                        untuk Siswa,Guru, dan pegawai Sekolah silahkan meminta Akun kepada admin sekolah. Halaman
                        Pendfataran hanya khusus bagi Alumni . Alumni dapat berkontribusi untuk memberikan pengalaman
                        motivasi artikel dan informasi lowongan kerja bagi adik-adik tercinta. </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <script type="text/javascript" src="https://www.sman6yogya.sch.id/assets/plugins/toast/jquery.toast.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-analytics.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>
</body>

</html>
