<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/css/style.css">
    <script>
        let html = document.querySelector('html');
        let x = document.cookie;

        window.onload = function () {
            if (x == "dark") {
                html.classList.add('dark')

            } else {
                html.classList.remove('dark')
            }
        };


    </script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow: scroll;
        }

        .ion-title {
            color: black;
            font-size: 65px;
        }

        .ion-submenu {
            font-size: 20px;
        }

        .ion-medium {
            font-size: 30px;
        }

        .text-title {
            font-size: 60px;
        }

        .text-cardtitle {
            font-size: 40px;
        }

        .text-subtitle {
            font-size: 40px;
        }

        .list-submenu {
            font-size: 16px;
        }

        .most-used {
            font-size: 26px
        }

        .reg {
            transition: .5s;
            transform: translatex(100%);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.6);
        }

        .reg.active {
            transition: .5s;
            transform: translatex(0%);
        }

        .edit {
            transition: .5s;
            transform: translatex(100%);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.6);
        }

        .edit.active {
            transition: .5s;
            transform: translatex(0%);
        }

        .reg-bg {
            transition: backdrop-filter .5s, transform 0s;
            transition-delay: 0s, .5s;
            transform: translateX(100%);
            background: rgba(0, 0, 0, 0);
        }

        .reg-bg.active {
            transition: .5s;
            backdrop-filter: blur(5px);
            transform: translatex(0%);
            transition: backdrop-filter .5s, transform 0s;
        }

        .deleted {
            transform: translateX(90%);
        }
    </style>
</head>

<body class="body max-sm:flex max-sm:justify-center">

    <div class="sm:mx-16 pt-16">
        <div class="max-sm:w-screen max-sm:flex max-sm:justify-center max-sm:-mx-3">
            <div class="text-7xl text-black-100 flex items-center">
                <ion-icon name="car" class="ion-title text-black-100 mr-12 dark:text-white"></ion-icon>
                <p style="font-size: 42px;" class="text">XGD-545</p>
            </div>
        </div>


        <div class="stable sm:flex justify-center">
            <div class="mt-8 h-160 flex max-sm:flex-col">
                <div>
                    <div class="flex justify-between items-center">
                        <p style="font-size: 32px;">Datos</p>
                        <div class="relative flex items-center justify-center gap-2">
                            <div
                                class="data_edit_cancel opacity-0 bg-grayd rounded w-7 h-7 flex justify-center items-center duration-200 invisible">
                                <ion-icon name="add" class="w-7 h-7 rotate-45 text-red-500 cursor-pointer"></ion-icon>
                            </div>
                            <div
                                class="data_edit_save opacity-0 bg-grayd rounded w-7 h-7 flex justify-center items-center duration-200 invisible">
                                <ion-icon name="checkmark" class="w-6 h-6 text-green-700 cursor-pointer"></ion-icon>
                            </div>
                            <ion-icon name="create-outline"
                                class="data_edit w-7 h-7 text-grayd cursor-pointer duration-200 absolute right-0">
                            </ion-icon>
                        </div>
                    </div>
                    <div class="p-3 shadow-xl flex rounded-xl bg-white dark:bg-darkgrayl h-72 w-96 gap-2 p-8">
                        <div class=" w-full h-full grid grid-rows-5 items-center grid-cols-2">
                            <label class="font-bold" for="npt_id">ID</label>
                            <input disabled id="npt_id" type="text" value="1"
                                class="border-b disabled:border-white border-black disabled:bg-white">
                            <label class="font-bold" for="npt_plate">Placa</label>
                            <input disabled id="npt_plate" type="text" value="XGD123"
                                class="border-b disabled:border-white border-black disabled:bg-white">
                            <label class="font-bold" for="npt_owner">Propietario</label>
                            <input disabled id="npt_owner" type="text" value="David Martinez"
                                class="border-b disabled:border-white border-black disabled:bg-white">
                            <label class="font-bold" for="npt_model">Modelo</label>
                            <input disabled id="npt_model" type="text" value="Shelvy GT500"
                                class="border-b disabled:border-white border-black disabled:bg-white">
                            <p class="font-bold">Estado</p>
                            <div class="flex gap-2 items-center">
                                <div class="vehicle-status bg-zinc-300 w-10 h-5 rounded-3xl">
                                    <div class="vehicle-status-dot bg-zinc-700 h-full w-1/2 rounded-3xl duration-200">
                                    </div>
                                </div>
                                <p class="vehicle-status-text">Deshabilitado</p>
                                <input disabled type="checkbox" name="" id="npt_status"
                                    class="absolute translate-y-10 opacity-0">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center max-sm:mb-10">
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
                    <p style="font-size: 32px;">Adjuntar</p>
                    <div
                        class="most-used-container p-2 shadow-xl rounded-2xl h-32 w-96 mt-2 bg-white dark:bg-darkgrayl duration-500 p-5 flex flex-col justify-center items-center max-sm:mb-20">
                        <div>
                            <p class="mb-2">Archivo</p>
                            <div class="flex gap-5">

                                <div class="w-64 h-10 rounded bg-zinc-300 flex items-center px-3">
                                    <p class="filenamep w-full overflow-hidden"></p>
                                </div>
                                <div class="bg-redd w-10 h-10 rounded flex items-center justify-center cursor-pointer">
                                    <ion-icon name="attach-outline" class="text-white absolute"
                                        style="font-size: 32px;">
                                    </ion-icon><input type="file" class="fileinput w-10 h-10 opacity-0" id="upload"
                                        onchange="getFileData(this);">
                                </div>
                            </div>
                            <button
                                class="w-20 h-10 bg-redd absolute translate-y-[100%] translate-x-[330%] rounded text-white">Enviar</button>
                            <button
                                class="w-20 h-10 bg-grayd absolute translate-y-[100%] translate-x-[220%] rounded text-white">Cancelar</button>
                        </div>
                    </div>
                </div>
                <div class=" max-sm:mb-10 sm:ml-5">
                    <p style="font-size: 32px;">Informes</p>
                    <div
                        class="p-7 shadow-xl rounded-3xl bg-white dark:bg-darkgrayl max-sm:w-96 max-sm:h-96 max-sm:mb-10 h-table">
                        <form action="" class="sm:invisible sm:w-0 sm:h-0 search-form h-10 flex justify-center items-center">
                            <input type="search"
                                class="w-40 h-5 border-gray-300 rounded outline-0 npt-search py-3 dark:bg-darkgrayl border"
                                id="listsearch" placeholder=" ">
                            <label for="listsearch" class="lbl-search mr-3 flex items-center duration-500 absolute">
                                <ion-icon name="search-outline"></ion-icon>
                            </label>
                        </form>
                        <form action="" class="max-sm:invisible max-sm:h-0 max-sm:w-0 search-form h-10 flex justify-end items-center mb-3 pr-5">
                            <input type="search"
                                class="w-40 h-5 border-gray-300 rounded outline-0 npt-search py-3 dark:bg-darkgrayl border"
                                id="listsearch" placeholder=" ">
                            <label for="listsearch" class="lbl-search mr-3 flex items-center duration-500 absolute">
                                <ion-icon name="search-outline"></ion-icon>
                            </label>
                        </form>
                        <table class="sm:overflow-y-scroll w-96">
                            <thead>
                                <tr class="flex max-sm:gap-2 sm:gap-10">
                                    <th class="list-select-all flex justify-center items-center duration-500 w-5">
                                        <ion-icon name="caret-down"
                                            class="rounded-2xl p-1 -m-1 cursor-pointer hover:text-redd">
                                        </ion-icon>
                                    </th>
                                    <th
                                    class="w-20 h-10 border-redd border-b flex justify-center items-center text-redd-500">
                                    ID</th>
                                    <th
                                        class="sm:w-56 max-sm:w-32 h-10 border-redd border-b flex justify-center items-center text-redd-500">
                                        Archivo</th>
                                    <th
                                        class="max-sm:invisible w-56 h-10 border-redd border-b flex justify-center items-center text-redd-500">
                                        <p>Fecha</p></th>
                                    <th
                                        class="max-sm:invisible w-56 h-10 border-redd border-b flex justify-center items-center text-redd-500">
                                        Hora</th>

                                    <th class=" self-end h-12 sm:w-full"></th>

                                </tr>
                            </thead>
                            <tbody class="">
                                <div class="w-20 overflow-scroll">
                                    <tr class="flex border-b max-sm:gap-2 sm:gap-10 w-full" tabindex="1">
                                        <a href="">
                                            <td class="flex justify-center items-center w-5">
                                                <input type="checkbox" class="listcheck dark:accent-darkredd"
                                                       onclick="checkchecks()">
                                            </td>
                                            <td class="w-20 h-12 rounded flex justify-center items-center text-xl">1</td>
                                            <td class="sm:w-56 h-12 rounded flex justify-center sm:items-center text-xl flex-col">documento1.pdf
                                                <div class="max-sm:w-32 sm:invisible sm:w-0 sm:h-0 flex gap-2" style="font-size: 12px;">
                                                    <p>01/01/22</p>
                                                    <p>12:00</p>
                                                </div>
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">01/01/22
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">
                                                12:00</td>
                                            </td>
                                            <td
                                                class="hovertd flex self-end h-12 sm:w-full justify-end items-center gap-5 p-2">
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd text-grayd hover:text-white">
                                                    <ion-icon name="create-outline"
                                                              class="w-5 h-5 cursor-pointer"></ion-icon>
                                                </div>
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd">
                                                    <ion-icon name="add"
                                                              class="w-7 h-7 rotate-45 text-red-500 cursor-pointer"></ion-icon>
                                                </div>
                                            </td>
                                        </a>
                                    </tr>

                                    <tr class="flex border-b max-sm:gap-2 sm:gap-10 w-full" tabindex="1">
                                        <a href="">
                                            <td class="flex justify-center items-center w-5">
                                                <input type="checkbox" class="listcheck dark:accent-darkredd"
                                                       onclick="checkchecks()">
                                            </td>
                                            <td class="w-20 h-12 rounded flex justify-center items-center text-xl">1</td>
                                            <td class="sm:w-56 h-12 rounded flex justify-center sm:items-center text-xl flex-col">documento1.pdf
                                                <div class="max-sm:w-32 sm:invisible sm:w-0 sm:h-0 flex gap-2" style="font-size: 12px;">
                                                    <p>01/01/22</p>
                                                    <p>12:00</p>
                                                </div>
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">01/01/22
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">
                                                12:00</td>
                                            </td>
                                            <td
                                                class="hovertd flex self-end h-12 sm:w-full justify-end items-center gap-5 p-2">
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd text-grayd hover:text-white">
                                                    <ion-icon name="create-outline"
                                                              class="w-5 h-5 cursor-pointer"></ion-icon>
                                                </div>
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd">
                                                    <ion-icon name="add"
                                                              class="w-7 h-7 rotate-45 text-red-500 cursor-pointer"></ion-icon>
                                                </div>
                                            </td>
                                        </a>
                                    </tr><tr class="flex border-b max-sm:gap-2 sm:gap-10 w-full" tabindex="1">
                                        <a href="">
                                            <td class="flex justify-center items-center w-5">
                                                <input type="checkbox" class="listcheck dark:accent-darkredd"
                                                       onclick="checkchecks()">
                                            </td>
                                            <td class="w-20 h-12 rounded flex justify-center items-center text-xl">1</td>
                                            <td class="sm:w-56 h-12 rounded flex justify-center sm:items-center text-xl flex-col">documento1.pdf
                                                <div class="max-sm:w-32 sm:invisible sm:w-0 sm:h-0 flex gap-2" style="font-size: 12px;">
                                                    <p>01/01/22</p>
                                                    <p>12:00</p>
                                                </div>
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">01/01/22
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">
                                                12:00</td>
                                            </td>
                                            <td
                                                class="hovertd flex self-end h-12 sm:w-full justify-end items-center gap-5 p-2">
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd text-grayd hover:text-white">
                                                    <ion-icon name="create-outline"
                                                              class="w-5 h-5 cursor-pointer"></ion-icon>
                                                </div>
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd">
                                                    <ion-icon name="add"
                                                              class="w-7 h-7 rotate-45 text-red-500 cursor-pointer"></ion-icon>
                                                </div>
                                            </td>
                                        </a>
                                    </tr><tr class="flex border-b max-sm:gap-2 sm:gap-10 w-full" tabindex="1">
                                        <a href="">
                                            <td class="flex justify-center items-center w-5">
                                                <input type="checkbox" class="listcheck dark:accent-darkredd"
                                                       onclick="checkchecks()">
                                            </td>
                                            <td class="w-20 h-12 rounded flex justify-center items-center text-xl">1</td>
                                            <td class="sm:w-56 h-12 rounded flex justify-center sm:items-center text-xl flex-col">documento1.pdf
                                                <div class="max-sm:w-32 sm:invisible sm:w-0 sm:h-0 flex gap-2" style="font-size: 12px;">
                                                    <p>01/01/22</p>
                                                    <p>12:00</p>
                                                </div>
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">01/01/22
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">
                                                12:00</td>
                                            </td>
                                            <td
                                                class="hovertd flex self-end h-12 sm:w-full justify-end items-center gap-5 p-2">
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd text-grayd hover:text-white">
                                                    <ion-icon name="create-outline"
                                                              class="w-5 h-5 cursor-pointer"></ion-icon>
                                                </div>
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd">
                                                    <ion-icon name="add"
                                                              class="w-7 h-7 rotate-45 text-red-500 cursor-pointer"></ion-icon>
                                                </div>
                                            </td>
                                        </a>
                                    </tr><tr class="flex border-b max-sm:gap-2 sm:gap-10 w-full" tabindex="1">
                                        <a href="">
                                            <td class="flex justify-center items-center w-5">
                                                <input type="checkbox" class="listcheck dark:accent-darkredd"
                                                       onclick="checkchecks()">
                                            </td>
                                            <td class="w-20 h-12 rounded flex justify-center items-center text-xl">1</td>
                                            <td class="sm:w-56 h-12 rounded flex justify-center sm:items-center text-xl flex-col">documento1.pdf
                                                <div class="max-sm:w-32 sm:invisible sm:w-0 sm:h-0 flex gap-2" style="font-size: 12px;">
                                                    <p>01/01/22</p>
                                                    <p>12:00</p>
                                                </div>
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">01/01/22
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">
                                                12:00</td>
                                            </td>
                                            <td
                                                class="hovertd flex self-end h-12 sm:w-full justify-end items-center gap-5 p-2">
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd text-grayd hover:text-white">
                                                    <ion-icon name="create-outline"
                                                              class="w-5 h-5 cursor-pointer"></ion-icon>
                                                </div>
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd">
                                                    <ion-icon name="add"
                                                              class="w-7 h-7 rotate-45 text-red-500 cursor-pointer"></ion-icon>
                                                </div>
                                            </td>
                                        </a>
                                    </tr><tr class="flex border-b max-sm:gap-2 sm:gap-10 w-full" tabindex="1">
                                        <a href="">
                                            <td class="flex justify-center items-center w-5">
                                                <input type="checkbox" class="listcheck dark:accent-darkredd"
                                                       onclick="checkchecks()">
                                            </td>
                                            <td class="w-20 h-12 rounded flex justify-center items-center text-xl">1</td>
                                            <td class="sm:w-56 h-12 rounded flex justify-center sm:items-center text-xl flex-col">documento1.pdf
                                                <div class="max-sm:w-32 sm:invisible sm:w-0 sm:h-0 flex gap-2" style="font-size: 12px;">
                                                    <p>01/01/22</p>
                                                    <p>12:00</p>
                                                </div>
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">01/01/22
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">
                                                12:00</td>
                                            </td>
                                            <td
                                                class="hovertd flex self-end h-12 sm:w-full justify-end items-center gap-5 p-2">
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd text-grayd hover:text-white">
                                                    <ion-icon name="create-outline"
                                                              class="w-5 h-5 cursor-pointer"></ion-icon>
                                                </div>
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd">
                                                    <ion-icon name="add"
                                                              class="w-7 h-7 rotate-45 text-red-500 cursor-pointer"></ion-icon>
                                                </div>
                                            </td>
                                        </a>
                                    </tr><tr class="flex border-b max-sm:gap-2 sm:gap-10 w-full" tabindex="1">
                                        <a href="">
                                            <td class="flex justify-center items-center w-5">
                                                <input type="checkbox" class="listcheck dark:accent-darkredd"
                                                       onclick="checkchecks()">
                                            </td>
                                            <td class="w-20 h-12 rounded flex justify-center items-center text-xl">1</td>
                                            <td class="sm:w-56 h-12 rounded flex justify-center sm:items-center text-xl flex-col">documento1.pdf
                                                <div class="max-sm:w-32 sm:invisible sm:w-0 sm:h-0 flex gap-2" style="font-size: 12px;">
                                                    <p>01/01/22</p>
                                                    <p>12:00</p>
                                                </div>
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">01/01/22
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">
                                                12:00</td>
                                            </td>
                                            <td
                                                class="hovertd flex self-end h-12 sm:w-full justify-end items-center gap-5 p-2">
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd text-grayd hover:text-white">
                                                    <ion-icon name="create-outline"
                                                              class="w-5 h-5 cursor-pointer"></ion-icon>
                                                </div>
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd">
                                                    <ion-icon name="add"
                                                              class="w-7 h-7 rotate-45 text-red-500 cursor-pointer"></ion-icon>
                                                </div>
                                            </td>
                                        </a>
                                    </tr><tr class="flex border-b max-sm:gap-2 sm:gap-10 w-full" tabindex="1">
                                        <a href="">
                                            <td class="flex justify-center items-center w-5">
                                                <input type="checkbox" class="listcheck dark:accent-darkredd"
                                                       onclick="checkchecks()">
                                            </td>
                                            <td class="w-20 h-12 rounded flex justify-center items-center text-xl">1</td>
                                            <td class="sm:w-56 h-12 rounded flex justify-center sm:items-center text-xl flex-col">documento1.pdf
                                                <div class="max-sm:w-32 sm:invisible sm:w-0 sm:h-0 flex gap-2" style="font-size: 12px;">
                                                    <p>01/01/22</p>
                                                    <p>12:00</p>
                                                </div>
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">01/01/22
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">
                                                12:00</td>
                                            </td>
                                            <td
                                                class="hovertd flex self-end h-12 sm:w-full justify-end items-center gap-5 p-2">
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd text-grayd hover:text-white">
                                                    <ion-icon name="create-outline"
                                                              class="w-5 h-5 cursor-pointer"></ion-icon>
                                                </div>
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd">
                                                    <ion-icon name="add"
                                                              class="w-7 h-7 rotate-45 text-red-500 cursor-pointer"></ion-icon>
                                                </div>
                                            </td>
                                        </a>
                                    </tr><tr class="flex border-b max-sm:gap-2 sm:gap-10 w-full" tabindex="1">
                                        <a href="">
                                            <td class="flex justify-center items-center w-5">
                                                <input type="checkbox" class="listcheck dark:accent-darkredd"
                                                       onclick="checkchecks()">
                                            </td>
                                            <td class="w-20 h-12 rounded flex justify-center items-center text-xl">1</td>
                                            <td class="sm:w-56 h-12 rounded flex justify-center sm:items-center text-xl flex-col">documento1.pdf
                                                <div class="max-sm:w-32 sm:invisible sm:w-0 sm:h-0 flex gap-2" style="font-size: 12px;">
                                                    <p>01/01/22</p>
                                                    <p>12:00</p>
                                                </div>
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">01/01/22
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">
                                                12:00</td>
                                            </td>
                                            <td
                                                class="hovertd flex self-end h-12 sm:w-full justify-end items-center gap-5 p-2">
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd text-grayd hover:text-white">
                                                    <ion-icon name="create-outline"
                                                              class="w-5 h-5 cursor-pointer"></ion-icon>
                                                </div>
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd">
                                                    <ion-icon name="add"
                                                              class="w-7 h-7 rotate-45 text-red-500 cursor-pointer"></ion-icon>
                                                </div>
                                            </td>
                                        </a>
                                    </tr><tr class="flex border-b max-sm:gap-2 sm:gap-10 w-full" tabindex="1">
                                        <a href="">
                                            <td class="flex justify-center items-center w-5">
                                                <input type="checkbox" class="listcheck dark:accent-darkredd"
                                                       onclick="checkchecks()">
                                            </td>
                                            <td class="w-20 h-12 rounded flex justify-center items-center text-xl">1</td>
                                            <td class="sm:w-56 h-12 rounded flex justify-center sm:items-center text-xl flex-col">documento1.pdf
                                                <div class="max-sm:w-32 sm:invisible sm:w-0 sm:h-0 flex gap-2" style="font-size: 12px;">
                                                    <p>01/01/22</p>
                                                    <p>12:00</p>
                                                </div>
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">01/01/22
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">
                                                12:00</td>
                                            </td>
                                            <td
                                                class="hovertd flex self-end h-12 sm:w-full justify-end items-center gap-5 p-2">
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd text-grayd hover:text-white">
                                                    <ion-icon name="create-outline"
                                                              class="w-5 h-5 cursor-pointer"></ion-icon>
                                                </div>
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd">
                                                    <ion-icon name="add"
                                                              class="w-7 h-7 rotate-45 text-red-500 cursor-pointer"></ion-icon>
                                                </div>
                                            </td>
                                        </a>
                                    </tr><tr class="flex border-b max-sm:gap-2 sm:gap-10 w-full" tabindex="1">
                                        <a href="">
                                            <td class="flex justify-center items-center w-5">
                                                <input type="checkbox" class="listcheck dark:accent-darkredd"
                                                       onclick="checkchecks()">
                                            </td>
                                            <td class="w-20 h-12 rounded flex justify-center items-center text-xl">1</td>
                                            <td class="sm:w-56 h-12 rounded flex justify-center sm:items-center text-xl flex-col">documento1.pdf
                                                <div class="max-sm:w-32 sm:invisible sm:w-0 sm:h-0 flex gap-2" style="font-size: 12px;">
                                                    <p>01/01/22</p>
                                                    <p>12:00</p>
                                                </div>
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">01/01/22
                                            </td>
                                            <td class="max-sm:invisible max-sm:w-0 sm:w-56 h-12 rounded flex justify-center items-center text-xl">
                                                12:00</td>
                                            </td>
                                            <td
                                                class="hovertd flex self-end h-12 sm:w-full justify-end items-center gap-5 p-2">
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd text-grayd hover:text-white">
                                                    <ion-icon name="create-outline"
                                                              class="w-5 h-5 cursor-pointer"></ion-icon>
                                                </div>
                                                <div class="w-7 h-7 flex justify-center items-center rounded hover:bg-grayd">
                                                    <ion-icon name="add"
                                                              class="w-7 h-7 rotate-45 text-red-500 cursor-pointer"></ion-icon>
                                                </div>
                                            </td>
                                        </a>
                                    </tr>
                                </div>



                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="bg-green-700 translate-x-full bg-red-700"></div>

    <div class="warning invisible opacity-0 w-full h-full backdrop-blur-sm absolute top-0 left-0 flex justify-center items-center duration-200">
        <div class="w-96 h-32 bg-white shadow-[0px_0px_100px_-12px_rgb(0_0_0_/_0.25)] rounded-2xl relative flex flex-col justify-center items-center gap-5">
            <p>¿Esta seguro de guardar la informacion?</p>

            <div class="gap-3 flex justify-center w-full">
                <button class="warning-cancel w-20 h-10 bg-grayd rounded text-white">Cancelar</button>
                <button class="warning-accept w-20 h-10 bg-redd rounded text-white">Guardar</button>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="/js/vehicle-view.js"></script>
    <script src="/js/checks.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
