<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script>
        let html = document.querySelector('html');
        var checkCookie = function () {
            return function () {
                let x = document.cookie;
                if (x == "dark") {
                    html.classList.add('dark')
                } else {
                    html.classList.remove('dark')
                }
            };
        }();
        window.setInterval(checkCookie, 1);
    </script>

    <style>
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow:hidden;
        }
        .ion-title{
            color:black;
            font-size:65px;
        }
        .ion-back{
            font-size:20px;
        }
        .ion-medium{
            font-size:30px;
        }
        .text-title{
            font-size:60px;
        }
        .text-subtitle{
            font-size:40px;
        }
        .list-submenu{
            font-size:16px;
        }
        .most-used{
            font-size:26px
        }
        .reg{
            transition:.5s;
            transform:translatex(100%);
            box-shadow:0 3px 10px rgba(0, 0, 0, 0.6);
        }
        .reg.active{
            transition:.5s;
            transform:translatex(0%);
        }
        .edit{
            transition:.5s;
            transform:translatex(100%);
            box-shadow:0 3px 10px rgba(0, 0, 0, 0.6);
        }
        .edit.active{
            transition:.5s;
            transform:translatex(0%);
        }
        .reg-bg{
            transition:backdrop-filter .5s, transform 0s;
            transition-delay:0s, .5s;
            transform:translateX(100%);
            background: rgba(0, 0, 0, 0);
        }
        .reg-bg.active{
            transition:.5s;
            backdrop-filter: blur(5px);
            transform:translatex(0%);
            transition:backdrop-filter .5s, transform 0s;
        }
        .deleted{
            transform: translateX(90%);
        }
        .reg-back {
            transform: translateX(-30px);
        }

        .list-select-all.no-rotating {
            animation: norotating .5s forwards;
            transform: rotate(180deg);
        }

        @keyframes norotating {
            50% {
                transform: rotate(-20deg);
            }

            75% {
                transform: rotate(20deg);
            }

            100% {
                transform: rotate(0deg);
            }

        }

        .list-select-all.rotating {
            animation: rotating .5s forwards;
        }

        @keyframes rotating {
            50% {
                transform: rotate(200deg);
            }

            75% {
                transform: rotate(160deg);
            }

            100% {
                transform: rotate(180deg);
            }
        }

        .lbl-search {
            transform: translateX(-8rem);
        }

        .npt-search:focus~.lbl-search {
            transform: translateX(-9.5rem);
        }

        .npt-search:not(:placeholder-shown)~.lbl-search {
            transform: translateX(-9.5rem);
        }

        .export-button.active {
            animation: pop 1s;
        }

        @keyframes pop {
            10% {
                transform: scale(.9);
            }
        }

        .export-formats.active{
            height: 4rem;
        }

        .export-formats.active *{
            opacity: 1;
        }
        .most-used-container.active{
            height: 27rem;
        }
    </style>
</head>

<body class="bg-transparent dark:text-white">


    <a href="Usuarios.html" target="display">
        <button class="w-30 h-10 mt-5 -mb-10 flex items-center justify-center rounded-xl bg-grayd text-white dark:bg-darkgrayl p-4 hover:">
            <ion-icon name="chevron-back" class="ion-back"></ion-icon>
            <span  class="ion-back ml-3">Atras</span>
        </button>
    </a>
    <div class="mx-16 pt-10">
        <div class="">
            <div class="text-7xl text-black-100 flex items-center">
                <ion-icon name="Person" class="ion-title text-black-100 mr-12 dark:text-white"></ion-icon>
                <p class="text-title">Usuarios Eliminados</p>
            </div>
        </div>


        <div class="stable flex justify-center">
            <div class="mt-8 h-160 flex">
                <div class="p-7 shadow-xl mr-5 rounded-3xl bg-white dark:bg-darkgrayl">
                    <form action="" class="search-form h-10 flex w-full justify-end items-center mb-3 pr-5">
                        <input type="search"
                            class="w-40 h-5 border border-gray-300 rounded outline-0 npt-search py-3 dark:bg-darkgrayl"
                            id="listsearch" placeholder=" ">
                        <label for="listsearch" class="lbl-search mr-3 flex items-center duration-500 absolute">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </form>
                    <table class="overflow-y-scroll h-custom">
                        <thead>
                            <tr class="flex gap-20">
                                <th class="list-select-all flex justify-center items-center mr-5 duration-500">
                                    <ion-icon name="caret-down"
                                        class="rounded-2xl p-1 -m-1 cursor-pointer hover:text-redd">
                                    </ion-icon>
                                </th>
                                <th
                                    class="w-16 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                    ID</th>
                                <th
                                    class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                    Nombre</th>
                                <th
                                    class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                    Telefono</th>
                                <th
                                    class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                                    Cargo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="flex border-b gap-20">
                                <td class="flex justify-center items-center mr-5">
                                    <ion-icon name="add" class="ion-medium -ml-2 rotate-45"></ion-icon>
                                </td>
                                <td class="w-16 h-12 mr-5 rounded flex justify-center items-center text-xl">1</td>
                                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">Aceite 1L
                                </td>
                                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">10</td>
                                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">25000</td>
                                </td>
                            </tr>
                            <tr class="flex border-b gap-20">
                                <td class="flex justify-center items-center mr-5">
                                    <ion-icon name="add" class="ion-medium -ml-2 rotate-45"></ion-icon>
                                </td>
                                <td class="w-16 h-12 mr-5 rounded flex justify-center items-center text-xl">1</td>
                                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">Aceite 1L
                                </td>
                                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">10</td>
                                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">25000</td>
                                </td>
                            </tr>
                            <tr class="flex border-b gap-20">
                                <td class="flex justify-center items-center mr-5">
                                    <ion-icon name="add" class="ion-medium -ml-2 rotate-45"></ion-icon>
                                </td>
                                <td class="w-16 h-12 mr-5 rounded flex justify-center items-center text-xl">1</td>
                                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">Aceite 1L
                                </td>
                                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">10</td>
                                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">25000</td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <div class="most-used-container p-2 shadow-xl rounded-3xl h-160 bg-white dark:bg-darkgrayl duration-500">
                        <p class="most-used">Recientes</p>
                        <div class="flex justify-center mt-3">
                            <table class="overflow-y-scroll h-custom">
                                <thead>
                                    <tr class="flex gap-2">
                                        <th class="w-12 h-10 border-redd border-b flex justify-center items-center">
                                            ID</th>
                                        <th class="w-20 h-10 border-redd border-b flex justify-center items-center">
                                            Nombre</th>
                                        <th class="w-20 h-10 border-redd border-b flex justify-center items-center">
                                            Telefono</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="flex border-b gap-2">
                                        <td class="w-12 h-12 rounded flex justify-center items-center text-xl">1</td>
                                        <td class="w-20 h-12 rounded flex justify-center items-center text-xl">Aceite 1L
                                        </td>
                                        <td class="w-20 h-12 rounded flex justify-center items-center text-xl">10</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>

    <script src="script/reg.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
