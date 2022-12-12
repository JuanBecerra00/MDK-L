<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .ion{
            font-size: 26px;
        }
        .ion-small{
            font-size:20px;
        }
        .ion-card{
            font-size:82px;
        }
        .ion-separator{
            font-size:30px;
        }
        .header-submenu{
            z-index: -1;
            transition: transform .5s, width .5s, height .5s, padding .5s, border-radius .5s, box-shadow .5s;
            transition-delay: 1.2s, .7s, .5s, .7s, .7s, .5s;
            font-size:14px;
        }
        .header-submenu.active{
            width: 120px;
            height: 140px;
            border-radius: 5px;
            box-shadow: 0 0 5px 0px rgba(0, 0, 0, 0.6);;
            transform: translateY(80px);
            transition-delay: 0.2s, .5s, .7s, .5s, .5s, .5s;
        }
        .arrowtop{
            left:calc(50% - 8px);
        }
        .header-submenu.active .arrowtop{
            top:-5px;
        }
        .header-submenu li{
            transition-delay:calc(0s + var(--i));
        }
        .header-submenu.active li{
            opacity:1;
            visibility:visible;
            transition:.5s;
            transition-delay:calc(1s + var(--i));
        }
        .header-submenu.active a:hover{
            transition-delay: 0s;
            transition:.5s;
            background:#221e1e;
            color: #b81d28;
        }
        .header-submenu-button.active{
            animation: pop .5s;
        }
        @keyframes pop{
            10% {
                transform:scale(.9);
            }
        }
        .header-submenu-button-locker{
            transition: .7s;
        }
        .header-submenu-button-locker.active{
            width: 133px;
            height: 50px;
            transition: 0;
        }
        .header-submenu-button-locker.active:hover{
            border: 1px solid #b81d28;
        }
        .images{
            animation: pass 20s infinite;
        }
        @keyframes pass {
            15%{
                transform: translateX(0%);
            }
            20%{
                transform: translateX(-100%);
            }
            35%{
                transform: translateX(-100%);
            }
            40%{
                transform: translateX(-200%);
            }
            55%{
                transform: translateX(-200%);
            }
            60%{
                transform: translateX(-300%);
            }
            75%{
                transform: translateX(-300%);
            }
            80%{
                transform: translateX(-400%);
            }
            95%{
                transform: translateX(-400%);
            }
            100%{
                transform: translateX(0%);
            }
        }
        .images-dot0{
            animation: passdot 20s infinite;
        }
        @keyframes passdot {
            15%{
                width: .5rem;
            }
            17%{
                transform: translateX(0);
                width: 1.8rem;
            }
            20%{
                transform: translateX(calc(+1.25em));
                width: .5rem;
            }

            35%{
                width: .5rem;
            }
            37%{
                transform: translateX(calc(+1.25em));
                width: 1.8rem;
            }
            40%{
                transform: translateX(2.5em);
                width: .5rem;
            }
            55%{
                width: .5rem;
            }
            57%{
                transform: translateX(2.5rem);
                width: 1.8rem;
            }
            60%{
                transform: translateX(3.75em);
                width: .5rem;
            }
            75%{
                width: .5rem;
            }
            77%{
                transform: translateX(3.75rem);
                width: 1.8rem;
            }
            80%{
                transform: translateX(5em);
                width: .5rem;
            }
            95%{
                transform: translateX(5em);
            }
            100%{
                transform: translateX(0%);
            }
        }
    </style>
</head>
<body class="body bg-black">

<div class="theme w-10 h-10 bg-grayd dark:bg-darkredd rounded flex justify-center items-center fixed right-0 top-2/3 cursor-pointer max-sm:invisible max-sm:w-0 max-sm:h-0">
    <ion-icon name="moon" class="text-white moon opacity-0 dark:opacity-100"></ion-icon>
    <ion-icon name="sunny-outline" class=" text-white sun ion absolute duration-200 opacity-100 rotate-180 dark:opacity-0 dark:-rotate-180"></ion-icon>
</div>
<header class="bg-grayd fixed w-screen flex px-20
            max-sm:px-0 place-content-between items-center z-50 overflow-visible
            h-20">
    <div class="user-mobile max-sm:z-[1000] max-sm:h-[calc(100vh-80px)] max-sm:w-screen
                    max-sm:bg-grayd max-sm:-translate-x-full absolute top-[80px]
                    duration-200 p-5 flex flex-col place-content-between sm:translate-y-[-1000%]">
        <ul class="mobile-aside-ul flex flex-col justify-center text-white gap-5">
            <a href="/views/Usuarios.html" class="mobile-module-users flex items-center">
                <li class="h-12 flex items-center">
                    <ion-icon name="person" class="ion text-white
                                        duration-200 ion-module"></ion-icon>

                    <label class="aside-label relative ml-5
                                        duration-300 cursor-pointer">Perfil</label>
                </li>
            </a>


            <a href="/views/settings.html" class="mobile-module-clients" target="display">
                <li class="h-12 flex items-center">
                    <ion-icon name="cog-outline" class="ion text-white
                                    duration-200 ion-module"></ion-icon>
                    <label class="aside-label relative ml-5
                                    duration-300 cursor-pointer">Ajustes</label>
                </li>
            </a>

        </ul>
        <a href="/views/login.html">
            <div class="h-12 flex items-center text-white mb-0">
                <ion-icon name="log-out" class="ion"></ion-icon>

                <label class="aside-label relative ml-5
                                duration-300 cursor-pointer">Salir</label>
            </div>
        </a>
    </div>
    <div class="flex items-center rounded-2xl max-sm:h-5 h-8 duration-500
                text-white pl-5">



        <div class="mobile-theme sm:invisible sm:w-0 sm:h-0">
            <ion-icon name="moon" class="text-white moon opacity-0 dark:opacity-100"></ion-icon>
            <ion-icon name="sunny-outline" class=" text-white sun ion absolute duration-200 opacity-100 rotate-180 dark:opacity-0 dark:-rotate-180"></ion-icon>
        </div>

        <a href="index.html"><img src="/img/logo.svg" alt="X" class="header-logo h-8 max-sm:w-0 max-sm:h-0"
                                  tabindex="1"></a>
    </div>
    <a href="index.html"><img src="/img/logo.svg" alt="X" class="header-logo h-8 sm:w-0 sm:h-0"
                              tabindex="1"></a>
    <ul class="header-modules flex text-white items-center text-header">
        <li class="max-sm:w-0 max-sm:invisible max-sm:h-0">
            <a href="" tabindex="1">
                <div class="flex align-center rounded-2xl p-1.5
                            duration-500 hover:bg-redd">
                    <ion-icon name="help" class="ion-small"></ion-icon>
                </div>
            </a>
        </li>
        <li class="max-sm:w-0 max-sm:invisible max-sm:h-0">
            <div class="flex align-center rounded-2xl p-1.5 p-0
                        rotate-90 ion-separator">
                <ion-icon name="remove-outline" class=""></ion-icon>
            </div>
        </li>
        <li class="submenu-li ">
            <div class="header-submenu-div relative flex
                        justify-center pr-5 max-sm:w-10">
                <button class="header-submenu-button flex p-1.5 max-sm:p-0
                            duration-500 flex items-center gap-2 max-sm:gap-0
                            border border-grayd rounded sm:hover:border-redd
                            cursor-pointer px-3" tabindex="1">

                    <ion-icon name="person" style="font-size: 24px;" class="header-user max-sm:opacity-1">
                    </ion-icon>
                    <ion-icon name="add"
                              class="header-user-x ion text-white duration-200 ion-module rotate-45 absolute sm:opacity-0 max-sm:opacity-0">
                    </ion-icon>
                    <div class="max-sm:invisible max-sm:w-0">
                        <strong>Juan Becerra</strong>
                        <p>Administrador</p>
                    </div>
                </button>
                <button class="header-submenu-button-locker absolute -ml-2
                            opacity-0 border-grayd rounded" tabindex="1">
                </button>
                <div class="header-submenu max-sm:invisible absolute w-7
                            h-7 bg-grayd rounded-2xl ease-in-out" tabindex="1">
                    <div class="arrowtop absolute w-4 h-4 bg-grayd top-1
                                rotate-45 rounded-sm duration-500 delay-700
                                ease-in-out flex">
                    </div>
                    <ul class="header-submenu-ul flex flex-col m-5">
                        <li style="--i:0s;" class="submenu-profile
                                    opacity-0 invisible duration-500">
                            <a href="#" class="flex items-center mb-2.5
                                        duration-500" tabindex="1">
                                    <span class="w-7 mr-2.5 flex
                                            justify-center">
                                        <ion-icon name="person" class="ion"></ion-icon>
                                    </span> <span for="">Perfil</span>
                            </a>
                        </li>
                        <li style="--i:0.1s;" class="submenu-settings
                                    opacity-0 invisible duration-500">
                            <a href="#" class=" flex items-center mb-2.5
                                        duration-500" tabindex="1">
                                    <span class="w-7 mr-2.5 flex
                                            justify-center">
                                        <ion-icon name="cog" class="ion"></ion-icon>
                                    </span> <span for="">Ajustes</span>
                            </a>
                        </li>
                        <li style="--i:0.2s;" class="submenu-exit
                                    opacity-0 invisible duration-500">
                            <a href="login.html" class="flex
                                        items-center mb-2.5 duration-500" tabindex="1">
                                    <span class="w-7 mr-2.5 flex
                                            justify-center">
                                        <ion-icon name="exit" class="ion"></ion-icon>
                                    </span> <span for="">Salir</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="ml-2">
                </div>
        </li>
    </ul>
</header>
<main class=" max-sm:pt-16">
    <div class="h-128 max-sm:h-32 w-full overflow-hidden flex justify-center items-center">
        <div class="images flex items-center w-auto fixed -z-10">
            <img src="/img/home-images/1.jpg" alt="" class=" -z-10 blur">
            <img src="/img/home-images/2.jpg" alt="" class=" -z-10 blur">
            <img src="/img/home-images/3.jpg" alt="" class=" -z-10 blur">
            <img src="/img/home-images/4.jpg" alt="" class=" -z-10 blur">
            <img src="/img/home-images/5.jpg" alt="" class=" -z-10 blur">
        </div>
        <img src="" alt="" class="blur">
        <div class="max-sm:scale-50 h-32 w-32 z-10 absolute">
            <img src="/img/logo.svg" alt="" class="h-32">
            <p class="flex justify-center text-white text-3xl mt-5 font-semibold">MDK</p>
        </div>
    </div>
    <div class="max-sm:scale-50 w-full h-5 flex justify-center items-center gap-3 mb-3">
        <div class="flex justify-start w-24 h-2 absolute px-1">
            <div class="images-dot0 w-2 h-2 bg-white rounded"></div>
        </div>
        <div class="images-dot1 w-2 h-2 bg-white rounded opacity-50 cursor-pointer"></div>
        <div class="images-dot2 w-2 h-2 bg-white rounded opacity-50 cursor-pointer"></div>
        <div class="images-dot3 w-2 h-2 bg-white rounded opacity-50 cursor-pointer"></div>
        <div class="images-dot4 w-2 h-2 bg-white rounded  max-sm opacity-50 cursor-pointer"></div>
        <div class="images-dot5 w-2 h-2 bg-white rounded opacity-50 cursor-pointer"></div>
    </div>
    <div class="p-12 max-sm:p-5 w-full overflow-hidden flex flex-wrap justify-center items-center gap-8 max-sm:gap-2 text-white bg-white dark:bg-darkgrayd duration-500">
        <a href="modulos.html">
            <button class="bg-redd dark:bg-darkredd h-72 w-56 rounded-md sm:hover:shadow-cards duration-200 sm:hover:-mt-10 max-sm max-sm:h-24 max-sm:w-28 max-sm:p-4">
                <div class=" w-full flex justify-center items-center mt-8 max-sm:mt-0">
                    <ion-icon name="person" class="sm:text-card max-sm:text-3xl"></ion-icon>
                </div>
                <div>
                    <p class="w-full h-12 flex justify-center items-center text-3xl max-sm:text-lg">Usuarios</p>
                    <p class="w-full h-32 flex text-center pt-3 text-md max-sm px-10 max-sm:invisible max-sm:opacity-0 ">Personal que trabaja en la empresa</p>
                </div>
            </button>
        </a>
        <a href="">
            <button class="bg-redd dark:bg-darkredd h-72 w-56 rounded-md sm:hover:shadow-cards duration-200 sm:hover:-mt-10 max-sm max-sm:h-24 max-sm:w-28 max-sm:p-4">
                <div class=" w-full flex justify-center items-center mt-8 max-sm:mt-0">
                    <ion-icon name="people" class="sm:text-card max-sm:text-3xl"></ion-icon>
                </div>
                <div>
                    <p class="w-full h-12 flex justify-center items-center text-3xl max-sm:text-lg">Clientes</p>
                    <p class="w-full h-32 flex text-center pt-3 text-md max-sm px-10 max-sm:invisible max-sm:opacity-0 ">Personal que trabaja en la empresa</p>
                </div>
            </button>
        </a>
        <a href="">
            <button class="bg-redd dark:bg-darkredd h-72 w-56 rounded-md sm:hover:shadow-cards duration-200 sm:hover:-mt-10 max-sm max-sm:h-24 max-sm:w-28 max-sm:p-4">
                <div class=" w-full flex justify-center items-center mt-8 max-sm:mt-0">
                    <ion-icon name="car" class="sm:text-card max-sm:text-3xl"></ion-icon>
                </div>
                <div>
                    <p class="w-full h-12 flex justify-center items-center text-3xl max-sm:text-lg">Vehiculos</p>
                    <p class="w-full h-32 flex text-center pt-3 text-md max-sm px-10 max-sm:invisible max-sm:opacity-0 ">Vehiculos de los clientes</p>
                </div>
            </button>
        </a>
        <a href="">
            <button class="bg-redd dark:bg-darkredd h-72 w-56 rounded-md sm:hover:shadow-cards duration-200 sm:hover:-mt-10 max-sm max-sm:h-24 max-sm:w-28 max-sm:p-4">
                <div class=" w-full flex justify-center items-center mt-8 max-sm:mt-0">
                    <ion-icon name="cart" class="sm:text-card max-sm:text-3xl"></ion-icon>
                </div>
                <div>
                    <p class="w-full h-12 flex justify-center items-center text-3xl max-sm:text-lg">Proveedores</p>
                    <p class="w-full h-32 flex text-center pt-3 text-md max-sm px-10 max-sm:invisible max-sm:opacity-0 ">Personal que trabaja en la empresa</p>
                </div>
            </button>
        </a>
        <a href="">
            <button class="bg-redd dark:bg-darkredd h-72 w-56 rounded-md sm:hover:shadow-cards duration-200 sm:hover:-mt-10 max-sm max-sm:h-24 max-sm:w-28 max-sm:p-4">
                <div class=" w-full flex justify-center items-center mt-8 max-sm:mt-0">
                    <ion-icon name="file-tray-full" class="sm:text-card max-sm:text-3xl"></ion-icon>
                </div>
                <div>
                    <p class="w-full h-12 flex justify-center items-center text-3xl max-sm:text-lg">Insumos</p>
                    <p class="w-full h-32 flex text-center pt-3 text-md max-sm px-10 max-sm:invisible max-sm:opacity-0 ">Personal que trabaja en la empresa</p>
                </div>
            </button>
        </a>
        <a href="">
            <button class="bg-redd dark:bg-darkredd h-72 w-56 rounded-md sm:hover:shadow-cards duration-200 sm:hover:-mt-10 max-sm max-sm:h-24 max-sm:w-28 max-sm:p-4">
                <div class=" w-full flex justify-center items-center mt-8 max-sm:mt-0">
                    <ion-icon name="receipt" class="sm:text-card max-sm:text-3xl"></ion-icon>
                </div>
                <div>
                    <p class="w-full h-12 flex justify-center items-center text-3xl max-sm:text-lg">Facturación</p>
                    <p class="w-full h-32 flex text-center pt-3 text-md px-10 max-sm:invisible max-sm:opacity-0 ">Personal que trabaja en la empresa</p>
                </div>
            </button>
        </a>
    </div>

    <div class="bg-white w-full dark:bg-darkgrayd duration-500">

        <div class="shadow-lg rounded-lg overflow-hidden w-full h-screen px-10 max-sm:px-2">


            <div class="py-3 px-5 flex items-center gap-5">
                <ion-icon name="receipt" class="sm:text-card max-sm:text-3xl text-redd"></ion-icon><p class="text-5xl max-sm:text-3xl text-redd">Ventas</p></div>
            <div class="w-full flex justify-center items-center">
                <div class="w-286 max-sm:w-full">
                    <canvas class="p-5" id="chartLine"></canvas>
                </div>
            </div>

        </div>

        <!-- Required chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Chart line -->
        <script>
            const labels = ["January", "February", "March", "April", "May", "June"];
            const data = {
                labels: labels,
                datasets: [
                    {
                        label: "Ventas",
                        backgroundColor: "hsl(356, 73%, 42%)",
                        borderColor: "hsl(356, 73%, 42%)",
                        data: [0, 22, 5, 2, 20, 12, 35],
                    },
                    {
                        label: "Insumos gastados",
                        backgroundColor: "hsl(355, 73%, 25%)",
                        borderColor: "hsl(355, 73%, 25%)",
                        data: [0, 25, 15, 35, 42, 48, 50],
                    },
                    {
                        label: "Usuarios registrados",
                        backgroundColor: "hsl(354, 76%, 8%)",
                        borderColor: "hsl(354, 76%, 8%)",
                        data: [0, 10, 20, 25, 22, 33, 35],
                    },
                ],
            };

            const configLineChart = {
                type: "line",
                data,
                options: {},
            };

            var chartLine = new Chart(
                document.getElementById("chartLine"),
                configLineChart
            );
        </script>

    </div>
</main>
<footer class="absolute bg-grayd w-full text-white h-8">
    <ul class="absolute flex gap-5 inset-y-0 right-8">
        <li><a href="" class="align-middle hover:underline max-sm:text-sm">Empresa</a></li>
        <li><a href="" class="align-middle hover:underline max-sm:text-sm">Creditos</a></li>
    </ul>
</footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="/js/header.js"></script>
<script src="/js/dark.js"></script>
</body>
</html>
