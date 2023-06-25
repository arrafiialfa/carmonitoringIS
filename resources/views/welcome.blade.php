<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 md:top-5 md:right-3 sm:right-0 p-6 text-right z-10 bg-gray-900 rounded-md">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    class="w-7 h-7 stroke-red-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>
            </div>

            <div class="mt-16">
                <div class="">
                    <div
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline
                         focus:outline-2 focus:outline-red-500">
                        <div>
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">About The Application
                            </h2>

                            <p class="text-justify mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                A nickel mining company is located in several regions, with one headquarters, one branch
                                office, and six mines in different locations. The company has many vehicles, including
                                passenger and cargo transport vehicles. In addition to company-owned vehicles, there are
                                also vehicles rented from a leasing company.

                                The company needs an application to monitor the vehicles it owns. This includes
                                monitoring fuel consumption, service schedules, and vehicle usage history. In order to
                                use a vehicle, employees are required to make a reservation in advance with the vehicle
                                management department or pool, and the vehicle usage must be known or approved by their
                                respective supervisors.
                            </p>
                        </div>

                    </div>

                </div>
            </div>
            <div class="mt-4">
                <div class="">
                    <div
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline
                         focus:outline-2 focus:outline-red-500">
                        <div>
                            </h2>
                            <table class="table-fixed w-full">
                                <caption class="caption-top my-2 text-white">
                                    Daftar User
                                </caption>
                                <span class="text-white text-sm">User telah ada didalam sqlite database</span>
                                <thead class="">
                                    <tr class="bg-slate-400 rounded-md text-sm shadow-md ">
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Role</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-justify text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    <tr class="text-center">
                                        <td>1</td>
                                        <td>admin</td>
                                        <td>123123123</td>
                                        <td>Admin</td>
                                        <td>Admin yang bertugas untuk memasukkan dan mengedit data di dalam aplikasi
                                        </td>
                                    </tr>
                                    <tr class="text-center bg-slate-300 text-slate-800">
                                        <td>2</td>
                                        <td>manager1</td>
                                        <td>123123123</td>
                                        <td>First-Line Manager</td>
                                        <td>Manager yang bertugas memberi persetujuan awal terhadap semua pemesanan
                                            kendaraan</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>3</td>
                                        <td>manager2</td>
                                        <td>123123123</td>
                                        <td>Mid-Level Manager</td>
                                        <td>Manager yang merupakan atasan dari First-Line Manager, Manager ini akan
                                            menyetujui pemesanan yang telah disetujui oleh manager dibawahnya</td>
                                    </tr>
                                    <tr class="text-center bg-slate-300 text-slate-800">
                                        <td>4</td>
                                        <td>manager3</td>
                                        <td>123123123</td>
                                        <td>Top-Level Manager</td>
                                        <td>Manager yang merupakan atasan dari Mid-Line Manager, Manager ini akan
                                            menyetujui pemesanan yang telah disetujui oleh manager dibawahnya</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>
            </div>
            <div class="mt-4">
                <div class="">
                    <div
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline
                         focus:outline-2 focus:outline-red-500">
                        <div>
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                Cara Penggunaan
                            </h2>


                            <div
                                class="max-w-xl mx-auto p-4 text-justify mt-4 text-gray-500 dark:text-gray-400 leading-relaxed">
                                <ol class="list-decimal list-inside mb-4">
                                    <li>Register jika ingin menambahkan user baru</li>
                                    <li>Login dengan user Admin</li>
                                    <li>Pada halaman dashboard, admin dapat menambahkan pemesanan baru, klik tombol
                                        pemesanan baru</li>
                                    <li>Masukkan isian, jika ingin menambahkan kendaraan atau supir dapat menekan tombol
                                        plus disamping kolom isian</li>
                                    <li>Klik tombol buat pemesanan baru</li>
                                    <li>Pemesanan baru akan muncul di tabel pemesanan</li>
                                </ol>

                                <div class="font-bold">Update Pemesanan</div>
                                <ol class="list-decimal list-inside mb-4">
                                    <li>Klik update pada list di tabel pemesanan</li>
                                    <li>Disitu akan terlihat detail pemesanan dan persetujuan yang sedang berlangsung
                                    </li>
                                    <li>Login ke akun yang bersangkutan untuk menyetujui pemesanan. Contoh: persetujuan
                                        oleh: manager2 maka harus login sebagai manager2</li>
                                    <li>Klik tombol approve untuk menyetujui pemesanan atau reject untuk menolak
                                        pemesanan</li>
                                    <li>Jika manager menerima pemesanan maka sistem akan mengecek apakah manager
                                        tersebut punya atasan yang terdefinisikan pada database</li>
                                    <li>Jika iya, maka sistem akan membuat persetujuan baru yang akan diarahkan pada
                                        atasan manager tersebut</li>
                                </ol>

                                <div class="font-bold">Menambahkan Bawahan</div>
                                <p>Manager dapat menambahkan bawahan didalam sistem</p>
                                <ol class="list-decimal list-inside">
                                    <li>Klik tombol tambah bawahan, paling atas pojok kanan</li>
                                    <li>Lihat tabel user dibawah, jika daftar user ada maka dapat menekan tombol tambah
                                        pada user yang ingin dijadikan bawahan</li>
                                    <span class="block mb-2">Bawahan yang dapat dijadikan user adalah bawahan langsung
                                        yang memiliki tingkat managerial 1 tingkat dibawah manager tersebut</span>
                                    <span class="block">Admin memiliki managerial level 0 sehingga tidak dapat menambah
                                        bawahan</span>
                                </ol>
                            </div>



                        </div>

                    </div>

                </div>
            </div>

            <div class="flex justify-center mt-4 px-0 sm:items-center sm:justify-between">
                <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
</body>

</html>
