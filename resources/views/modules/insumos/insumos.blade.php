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
    <style type="text/tailwindcss">
        @layer utilities {
            body{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                overflow:hidden;
            }
            .ion-title{
                color:black;
                font-size:65px;
            }
            .ion-submenu{
                font-size:20px;
            }
            .ion-medium{
                font-size:30px;
            }
            .text-title{
                font-size:60px;
            }
            .text-cardtitle{
                font-size:40px;
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

        .export-formats.active {
            height: 4rem;
        }

        .export-formats.active * {
            opacity: 1;
        }

        .most-used-container.active {
            height: 27rem;
        }
    </style>
</head>

<body class="bg-transparent dark:text-white">

<div class="absolute reg-bg h-screen w-screen z-10"></div>
<div
    class="reg h-full w-152 absolute mt-0 p-0 z-30 right-0 bg-white dark:bg-darkgrayl  max-sm:block max-sm:justify-center max-sm:overflow-y-scroll max-sm:overflow-x-hidden max-sm:w-screen">
    <div class="p-10 max-sm:p-5">
        <div
            class="text-7xl flex mt-10 items-center justify-center max-sm:block max-sm:mt-0 max-sm:text-center">
            <ion-icon name="file-tray-full"
                      class="ion-title mr-6 dark:text-white max-sm:mr-0 max-sm:text-[4rem]"></ion-icon>
            <p class="text-cardtitle">Registro de Insumos</p>
        </div>
        <form
            class="mt-14 flex justify-center max-sm:block max-sm:mx-16 max-sm:mt-4 max-sm:items-center max-sm:w-screen">
            <div class="mb-12 mr-16 max-sm:mr-0 max-sm:mb-0">
                <label for="n-document">ID</label><br>
                <input type="text" id="n-document" pattern=".{8,}" maxlength="10" placeholder="xxx" required
                       class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4">
                <br>
                <label for="name">Nombre del producto</label><br>
                <input type="text" id="name" placeholder="Camaro"
                       class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4">
                <br>
                <label for="name and last">Cantidad</label><br>
                <input type="text" id="name and last" placeholder="5" pattern=".{8,}" maxlength="7"
                       class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4">
            </div>
            <div class="">
                <label for="city">Valor unitario</label><br>
                <input type="city" id="city" required
                       class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4 "><br>
                <label for="cell-phone"> N° de factura</label><br>
                <input type="text" id="cell-phone" pattern=".{8,}" maxlength="13" required
                       class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4"><br>
                <label for="cell-phone"> Fecha de compra</label><br>
                <input type="date" id="cell-phone" pattern=".{8,}" maxlength="13" required
                       class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4"><br>
            </div>
        </form>
        <div
            class="flex justify-center gap-6 right-10 absolute bottom-16 max-sm:static max-sm:gap-2 max-sm:mb-3 max-sm:mt-3">
            <button class="cancel-reg-button bg-grayd text-white w-20 h-10 rounded">Cancelar</button>
            <button class="bg-redd dark:bg-darkredd text-white w-20 h-10 rounded">Continuar</button>
        </div>
    </div>
</div>
<div
    class="edit h-full w-152 absolute mt-0 p-0 z-30 right-0 bg-white dark:bg-darkgrayl  max-sm:block max-sm:justify-center max-sm:overflow-y-scroll max-sm:overflow-x-hidden max-sm:w-screen">
    <div class="p-10 max-sm:p-5">
        <div
            class="text-7xl flex mt-10 items-center justify-center max-sm:block max-sm:mt-0 max-sm:text-center">
            <ion-icon name="create"
                      class="ion-title mr-6 dark:text-white max-sm:mr-0 max-sm:text-[4rem]"></ion-icon>
            <p class="text-cardtitle">Editar Insumos</p>
        </div>
        <form
            class="mt-14 flex justify-center max-sm:block max-sm:mx-16 max-sm:mt-4 max-sm:items-center max-sm:w-screen">
            <div class="mb-12 mr-16 max-sm:mr-0 max-sm:mb-0">
                <label for="n-document">ID</label><br>
                <input type="text" id="n-document" pattern=".{8,}" maxlength="10" placeholder="xxx" required
                       class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4">
                <br>
                <label for="name">Nombre del producto</label><br>
                <input type="text" id="name" placeholder="Camaro"
                       class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4">
                <br>
                <label for="name and last">Cantidad</label><br>
                <input type="text" id="name and last" placeholder="5" pattern=".{8,}" maxlength="7"
                       class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4">
            </div>
            <div class="">
                <label for="city">Valor unitario</label><br>
                <input type="city" id="city" required
                       class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4"
                ><br>
                <label for="cell-phone"> N° de factura</label><br>
                <input type="text" id="cell-phone" pattern=".{8,}" maxlength="13" required
                       class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4"><br>
                <label for="cell-phone"> Fecha de compra</label><br>
                <input type="date" id="cell-phone" pattern=".{8,}" maxlength="13" required
                       class="mb-8 outline-0 border-black border-b bg-transparent dark:border-redd max-sm:mb-4"><br>
            </div>
        </form>
        <div
            class="flex justify-center gap-6 right-10 absolute bottom-16 max-sm:static max-sm:gap-2 max-sm:mb-3 max-sm:mt-3">
            <button
                class="delete-edit-button bg-grayd text-white w-24 h-10 rounded mr-52 max-sm:mr-4">Desactivar</button>
            <button class="cancel-edit-button bg-grayd text-white w-20 h-10 rounded">Cancelar</button>
            <button class="bg-redd dark:bg-darkredd text-white w-20 h-10 rounded">Continuar</button>
        </div>
    </div>
</div>
<div class="mx-16 pt-16 max-sm:mx-2 max-sm:pt-2">
    <div class="">
        <div class="text-7xl text-black-100 flex items-center max-sm:justify-center">
            <ion-icon name="file-tray-full" class="ion-title text-black-100 mr-12 dark:text-white max-sm:mr-2 max-sm:w-12"></ion-icon>
            <p class="text-title">Insumos</p>
        </div>
    </div>

    <div class="stable flex justify-center">
        <div class="mt-8 h-160 flex  max-sm:overflow-y-hidden max-sm:block max-sm:mt-0">
            <div class="p-7 shadow-xl mr-5 rounded-3xl bg-white dark:bg-darkgrayl max-sm:p-2 max-sm:mb-3 max-sm:overflow-x-scroll max-sm:mr-0">
                <form action="" class="search-form h-10 flex w-full justify-end items-center mb-3 pr-5 max-sm:justify-center">
                    <input type="search"
                           class="w-40 h-5 border border-gray-300 rounded outline-0 npt-search py-3 dark:bg-darkgrayl"
                           id="listsearch" placeholder=" ">
                    <label for="listsearch" class="lbl-search mr-3 flex items-center duration-500 absolute max-sm:static">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </form>
                <table class="h-custom max-sm:overflow-x-scroll max-sm:h-auto">
                    <thead>
                    <tr class="flex">
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
                            Cantidad</th>
                        <th
                            class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                            Valor Unitario</th>
                        <th
                            class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                            Total</th>
                        <th
                            class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                            N° Factura</th>
                        <th
                            class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500">
                            Fecha de compra</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="flex border-b">
                        <td class="flex justify-center items-center mr-5">
                            <input type="checkbox" class="listcheck dark:accent-darkredd"
                                   onclick="checkchecks()">
                        </td>
                        <td class="w-16 h-12 mr-5 rounded flex justify-center items-center text-xl">1</td>
                        <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">Aceite Motor
                        </td>
                        <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">10</td>
                        <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">25000</td>
                        <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">250000</td>
                        <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">44564</td>
                        <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">01/01/2022
                        </td>
                    </tr>
                    <tr class="flex border-b">
                        <td class="flex justify-center items-center mr-5">
                            <input type="checkbox" class="listcheck dark:accent-darkredd"
                                   onclick="checkchecks()">
                        </td>
                        <td class="w-16 h-12 mr-5 rounded flex justify-center items-center text-xl">1</td>
                        <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">Aceite Motor
                        </td>
                        <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">10</td>
                        <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">25000</td>
                        <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">250000</td>
                        <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">44564</td>
                        <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">01/01/2022
                        </td>
                    </tr>
                    <tr class="flex border-b">
                        <td class="flex justify-center items-center mr-5">
                            <input type="checkbox" class="listcheck dark:accent-darkredd"
                                   onclick="checkchecks()">
                        </td>
                        <td class="w-16 h-12 mr-5 rounded flex justify-center items-center text-xl">1</td>
                        <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">Aceite Motor
                        </td>
                        <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">10</td>
                        <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">25000</td>
                        <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">250000</td>
                        <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">44564</td>
                        <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl">01/01/2022
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <div class="p-3 shadow-xl rounded-xl bg-white dark:bg-darkgrayl">
                    <div class="flex gap-2 max-sm:justify-center">
                        <button type="button"
                                class="reg-button flex justify-center items-center w-28 h-12 bg-redd text-white w-20 h-10 rounded hover:shadow-list duration-200 mb-2 focus:bg-l dark:bg-darkredd">
                            <ion-icon name="add" class="ion-submenu mr-2"></ion-icon>
                            <p>Añadir</p>
                        </button>
                        <button type="button"
                                class="edit-button flex justify-center items-center w-28 h-12 bg-grayd text-gray-500 w-20 h-10 rounded  duration-200 mb-2 focus:bg-l"
                                disabled>
                            <ion-icon name="create-outline" class="ion-submenu mr-2"></ion-icon>
                            <p>Editar</p>
                        </button>
                    </div>
                    <div class="flex gap-2 max-sm:justify-center">
                        <button type="button"
                                class="export-button reg-button flex justify-center items-center w-28 h-12 bg-redd dark:bg-darkredd text-white w-20 h-10 rounded hover:shadow-list duration-200 focus:bg-l">
                            <ion-icon name="download-outline" class="ion-submenu mr-2"></ion-icon>
                            <p>Exportar</p>
                        </button>
                        <a href="usuarios-del.html" target="display">
                            <button type="button"
                                    class="reg-button flex justify-center items-center w-28 h-12 bg-redd dark:bg-darkredd text-white w-20 h-10 rounded hover:shadow-list duration-200 focus:bg-l">
                                <ion-icon name="trash-outline" class="ion-submenu mr-2"></ion-icon>
                                <p>Ocultos</p>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <div
                        class="export-formats shadow-xl z- dark:bg-darkgrayl rounded-xl h-0 w-full mt-2 top-20 duration-500 flex justify-center items-center overflow-hidden gap-3 dark:bg-darkgrayl">
                        <button
                            class="bg-blue-900 text-white w-16 h-10  hover:shadow-list rounded flex justify-center items-center duration-500">
                            <ion-icon name="document-text"></ion-icon>
                        </button>
                        <button
                            class="bg-red-800 text-white w-16 h-10  hover:shadow-list rounded flex justify-center items-center duration-500">
                            <ion-icon name="print"></ion-icon>
                        </button>
                        <button
                            class="bg-green-900 text-white w-16 h-10 hover:shadow-list rounded flex justify-center items-center duration-500">
                            <ion-icon name="stats-chart"></ion-icon>
                        </button>
                    </div>
                </div>
                <div
                    class="most-used-container p-2 shadow-xl rounded-3xl h-123.2 mt-2 bg-white dark:bg-darkgrayl duration-500 max-sm:h-auto">
                    <p class="most-used">Mas usados</p>
                    <div class="flex justify-center mt-3">
                        <table class="overflow-y-scroll h-custom max-sm:h-auto">
                            <thead>
                            <tr class="flex gap-2">
                                <th class="w-12 h-10 border-redd border-b flex justify-center items-center">
                                    ID</th>
                                <th class="w-20 h-10 border-redd border-b flex justify-center items-center">
                                    Nombre</th>
                                <th class="w-20 h-10 border-redd border-b flex justify-center items-center">
                                    Cantidad</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="flex border-b gap-2">
                                <td class="w-12 h-12 rounded flex justify-center items-center text-xl">1</td>
                                <td class="w-20 h-12 rounded flex justify-center items-center text-xl">Aceite
                                    Motor
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

<script src="/js/checks.js"></script>
<script src="/js/reg.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>