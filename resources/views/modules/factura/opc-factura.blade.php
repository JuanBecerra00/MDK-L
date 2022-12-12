<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    @vite('resources/css/app.css')
    <style type="text/tailwindcss">
        @layer utilities {
            body {
                font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            }
            .ion-title {
                color: black;
                font-size: 65px;
            }
            .ion-submenu {
                font-size: 40px;
            }
            .text-title {
                font-size: 60px;
            }
            .list-submenu {
                font-size: 24px;
            }
        }
    </style>
    <script>
        let html = document.querySelector("html");
        var checkCookie = (function () {
            return function () {
                let x = document.cookie;
                if (x == "dark") {
                    html.classList.add("dark");
                } else {
                    html.classList.remove("dark");
                }
            };
        })();

        window.setInterval(checkCookie, 1);
    </script>
</head>

<body
    class="mt-16 mx-16 bg-transparent dark:text-white max-sm:mt-4 max-sm:mx-4"
>
<div
    class="text-7xl flex mt-10 items-center justify-center max-sm:block max-sm:mt-0 max-sm:text-center"
>
    <ion-icon
        name="cash"
        class="ion-title mr-10 text-black-100 dark:text-white max-sm:mr-0 max-sm:text-[4rem]"
    ></ion-icon>
    <p class="text-title">Facturacion</p>
</div>
<p class="my-6">Seleccione el mantenimiento que se realizo al vehiculo</p>
<div class="flex justify-between max-sm:block">
    <article
        class="w-40 h-10 mr-5 border-redd border-b flex justify-center items-center text-redd-500 max-sm:mb-4"
    >
        <p>Trabajos realizados</p>
    </article>
    <form action="">
        <label for="buscar">
            <ion-icon name="search"></ion-icon>
        </label>
        <input
            type="search"
            id="buscar"
            placeholder=" Buscar"
            class="outline-0 border-black border-b border bg-transparent dark:border-white"
        />
    </form>
</div>
<section class="grid grid-cols-3 my-8 max-sm:my-4 max-sm:block">
    <div class="grid gap-4">
        <section>
            <input type="checkbox" id="r-motor" />
            <label for="r-motor">Reparacion del motor</label><br />
        </section>
        <section>
            <input type="checkbox" id="luces" />
            <label for="luces">Luces</label><br />
        </section>
        <section>
            <input type="checkbox" id="filtros" />
            <label for="filtros">Filtros</label><br />
        </section>
        <section>
            <input type="checkbox" id="r-frenos" />
            <label for="r-frenos">Revision de frenos</label><br />
        </section>
        <section>
            <input type="checkbox" id="s-escaner" />
            <label for="s-escaner">Servicio de escaner</label><br />
        </section>
        <section>
            <input type="checkbox" id="c-aceite" />
            <label for="c-aceite">Cambio de aceite</label><br />
        </section>
        <section>
            <input type="checkbox" id="bateria" />
            <label for="bateria">Bateria</label>
        </section>
    </div>
    <div class="mr-12 grid gap-4 max-sm:my-4">
        <section>
            <input type="checkbox" id="" />
            <label for="r-motor">Reparacion del motor</label><br />
        </section>
        <section>
            <input type="checkbox" id="" />
            <label for="luces">Luces</label><br />
        </section>
        <section>
            <input type="checkbox" id="" />
            <label for="filtros">Filtros</label><br />
        </section>
        <section>
            <input type="checkbox" id="" />
            <label for="r-frenos">Revision de frenos</label><br />
        </section>
        <section>
            <input type="checkbox" id="" />
            <label for="s-escaner">Servicio de escaner</label><br />
        </section>
        <section>
            <input type="checkbox" id="" />
            <label for="c-aceite">Cambio de aceite</label><br />
        </section>
        <section>
            <input type="checkbox" id="" />
            <label for="bateria">Bateria</label>
        </section>
    </div>
    <div class="mr-12 grid gap-4">
        <section>
            <input type="checkbox" id="" />
            <label for="r-motor">Reparacion del motor</label><br />
        </section>
        <section>
            <input type="checkbox" id="" />
            <label for="luces">Luces</label><br />
        </section>
        <section>
            <input type="checkbox" id="" />
            <label for="filtros">Filtros</label><br />
        </section>
        <section>
            <input type="checkbox" id="" />
            <label for="r-frenos">Revision de frenos</label><br />
        </section>
        <section>
            <input type="checkbox" id="" />
            <label for="s-escaner">Servicio de escaner</label><br />
        </section>
        <section>
            <input type="checkbox" id="" />
            <label for="c-aceite">Cambio de aceite</label><br />
        </section>
        <section>
            <input type="checkbox" id="" />
            <label for="bateria">Bateria</label>
        </section>
    </div>
</section>
<div class="flex justify-end gap-5 max-sm:mb-6 max-sm:justify-center">
    <a href="./facturacion.html" target="display">
        <button
            class="bg-grayd dark:bg-darkgrayl text-white w-28 h-12 rounded flex justify-center items-center"
        >
            Cancelar
        </button>
    </a>
    <a href="./facturacion.html" target="display">
        <button
            class="bg-redd text-white w-28 h-12 rounded flex justify-center items-center"
        >
            Siguiente
        </button>
    </a>
</div>
<script src="/js/check.js"></script>
<script src="/js/reg.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
