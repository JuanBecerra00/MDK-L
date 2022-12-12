<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <style type="text/tailwindcss">
        @layer utilities {
            body{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .ion-title{
                color:black;
                font-size:65px;
            }
            .ion-submenu{
                font-size:40px;
            }
            .text-title{
                font-size:60px;
            }
            .list-submenu{
                font-size:24px;
            }
        }

    </style>
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
</head>

<body class="mt-16 mx-16 bg-transparent dark:text-white max-sm:mt-4 max-sm:mx-4">
<div class="text-7xl flex mt-10 items-center max-sm:block max-sm:mt-0 max-sm:text-center">
    <ion-icon name="cash" class="ion-title mr-6 text-black-100 dark:text-white max-sm:mr-0 max-sm:text-[4rem]">
    </ion-icon>
    <p class="text-title">Facturacion</p>
</div>
<p class="my-8 max-sm:my-2">Seleccione el mantenimiento que se realizo al vehiculo</p>

<article class="w-40 h-10 mb-8 border-redd border-b flex justify-center items-center max-sm:mb-4">
    <p>Datos del cliente</p>
</article>
<div class="grid grid-cols-4 max-sm:grid-cols-none mb-8 max-sm:mb-4">
    <section
        class="shadow-xl rounded-3xl mr-5 p-8 col-span-3 dark:bg-darkgrayl max-sm:mr-0 max-sm:mb-8 max-sm:p-4 max-sm:text-center">
        <h2>
            <ion-icon name="person"></ion-icon>Cliente
        </h2>
        <article class="my-8 max-sm:my-4">
            <label for="documento">Documento del cliente</label><br>
            <input type="text" id="documento" required pattern="[0-9]{8,}"
                   class="outline-0 border-black border-b bg-transparent dark:border-white w-40">
        </article>
        <article class="grid grid-cols-3 max-sm:grid-cols-none">
            <div>
                <label for="nombre">Nombres</label><br>
                <input type="text" id="nombre" placeholder="Benito Khalo"
                       class="outline-0 border-black border-b bg-transparent dark:border-white w-40">
            </div>
            <div>
                <label for="telefono">Telefono</label><br>
                <input type="text" id="telefono"
                       class="outline-0 border-black border-b  bg-transparent dark:border-white w-40">
            </div>
            <div>
                <label for="correo">Correo</label><br>
                <input type="email" id="correo"
                       class="outline-0 border-black border-b  bg-transparent dark:border-white w-40">
            </div>
        </article>
    </section>
    <section class="shadow-xl rounded-3xl p-8 dark:bg-darkgrayl max-sm:col-span-3 max-sm:p-4 max-sm:text-center max-sm:mb-8">
        <h2>
            <ion-icon name="person"></ion-icon>Veliculo
        </h2>
        <div class="my-8 max-sm:my-4">
            <label for="placa">Placa</label><br>
            <input type="text" id="placa"
                   class="outline-0 border-black border-b  bg-transparent dark:border-white w-40"><br>
        </div>
        <div>
            <label for="model">Modelo</label><br>
            <input type="text" id="model" class="outline-0 border-black border-b  bg-transparent dark:border-white w-40">
        </div>
    </section>
</div>
<div>
    <article class="grid grid-cols-5">
        <article
            class="w-40 h-10 mb-4 border-red-800 border-b flex justify-center items-center text-redd-500 col-start-1 col-end-2 ">
            <p>Trabajos realizados</p>
        </article>
        <a href="./op-factura.html" target="display" class="col-end-8 col-span-2 max-sm:grid-cols-none">
            <button
                class="bg-red-800 text-white w-12 h-12 hover:shadow-list focus:bg-l rounded flex justify-center items-center">
                <ion-icon name="list" class="text-white col-start-1 col-end-2"></ion-icon>
            </button>
        </a>
    </article>
    <div class="grid grid-cols-4 p-8 bg-white rounded-3xl dark:bg-darkgrayl max-sm:p-4 max-sm:h-64 max-sm:overflow-scroll shadow-xl rounded-3xl max-sm:mb-8">
        <section class="col-span-3">
            <table class="">
                <thead>
                <tr class="flex">
                    <h2>
                        <ion-icon name="car"></ion-icon>Procedimientos
                    </h2>
                </tr>
                </thead>
                <tbody>
                <tr class="flex max-sm:block">
                    <td class="w-64 h-12 mr-5 flex justify-center items-center text-xl border-b max-sm:w-72 max-sm:mr-0">Cambio de
                        aceite
                    </td>
                    <td class="w-64 h-12 mr-5 flex justify-center items-center text-xl border-b max-sm:w-72 max-sm:mr-0">
                    </td>
                    <td class="w-64 h-12 mr-5 flex justify-center items-center text-xl border-b max-sm:w-72 max-sm:mr-0"></td>
                </tr>
                <tr class="flex max-sm:block">
                    <td class="w-64 h-12 mr-5 flex justify-center items-center text-xl border-b max-sm:w-72 max-sm:mr-0">
                    </td>
                    <td class="w-64 h-12 mr-5 flex justify-center items-center text-xl border-b max-sm:w-72 max-sm:mr-0"></td>
                    <td class="w-64 h-12 mr-5 flex justify-center items-center text-xl border-b max-sm:w-72 max-sm:mr-0"></td>
                </tr>
                <tr class="flex max-sm:block">
                    <td class="w-64 h-12 mr-5 flex justify-center items-center text-xl border-b max-sm:w-72 max-sm:mr-0">
                    </td>
                    <td class="w-64 h-12 mr-5 flex justify-center items-center text-xl border-b max-sm:w-72 max-sm:mr-0"></td>
                    <td class="w-64 h-12 mr-5 flex justify-center items-center text-xl border-b max-sm:w-72 max-sm:mr-0"></td>
                </tr>
            </table>
        </section>
    </div>
</div>
<div>
    <article class="w-40 h-10 my-8 border-redd border-b flex justify-center items-center max-sm:my-4">
        <p>Insumos gastados</p>
    </article>
    <section class="shadow-xl rounded-3xl mr-5 p-8 mb-8 dark:bg-darkgrayl max-sm:p-4 max-sm:mr-0 max-sm:h-64 max-sm:overflow-scroll">
        <table class="">
            <thead>
            <tr class="flex">
                <h2>
                    <ion-icon name="person"></ion-icon>Gastos
                </h2>
                <th
                    class="w-40 h-10 mr-5 border-red-800 border-b flex justify-center items-center text-redd-500 max-sm:w-20">
                    Nombre</th>
                <th
                    class="w-40 h-10 mr-5 border-red-800 border-b flex justify-center items-center text-redd-500 max-sm:w-20">
                    Cantidad</th>
                <th
                    class="w-40 h-10 mr-5 border-red-800 border-b flex justify-center items-center text-redd-500 max-sm:w-20">
                    Valor Unitario</th>
                <th
                    class="w-40 h-10 mr-5 border-red-800 border-b flex justify-center items-center text-redd-500 max-sm:w-20">
                    Total</th>

            </tr>
            </thead>
            <tbody>
            <tr class="flex border-b">
                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl max-sm:w-20">Aceite 1L
                </td>
                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl max-sm:w-20">10</td>
                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl max-sm:w-20">25000</td>
                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl max-sm:w-20">250000</td>
            </tr>
            <tr class="flex border-b">
                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl max-sm:w-20">Aceite 1L
                </td>
                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl max-sm:w-20">10</td>
                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl max-sm:w-20">25000</td>
                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl max-sm:w-20">250000</td>
            </tr>
            <tr class="flex border-b">
                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl max-sm:w-20">Aceite 1L
                </td>
                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl max-sm:w-20">10</td>
                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl max-sm:w-20">25000</td>
                <td class="w-40 h-12 mr-5 rounded flex justify-center items-center text-xl max-sm:w-20">250000</td>
            </tr>
        </table>
    </section>
</div>
<div class="max-sm:mb-4">
    <article class="w-40 h-10 border-redd border-b flex justify-center items-center">
        <p>Observaciones</p>
    </article>
    <label for="comentarios"></label><br>
    <textarea name="comentarios" id="comentarios" cols="46" rows="6"
              placeholder="Ingrese las obsevaciones sobre el proceso hecho en el vehiculo"
              class="bg-slate-200 dark:bg-darkgrayl"></textarea>
</div>
<div class="flex justify-end m-8 max-sm:m-0 max-sm:mb-4">
    <a href="./imp-factura.html" target="display">
        <button
            class="bg-red-800 text-white w-28 h-12 rounded flex items-center justify-center hover:shadow-list focus:bg-l">
            <ion-icon name="arrow-forward" class="text-white mr-2"></ion-icon>Siguiente
        </button>
    </a>
</div>
<script src="/js/reg.js"></script>
<script src="/js/checks.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>