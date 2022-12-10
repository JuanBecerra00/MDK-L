<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/login.css">
        <style>
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="overflow-hidden w-screen h-screen">
    <header class="bg-grayd flex px-24 max-sm:px-10 place-content-between items-center w-screen">
        <a href=""><img src="/img/logo.svg" alt="X" class="header-logo h-8"></a>
        <ul class="header-modules flex text-white items-center text-header gap-5 py-4">
            <li>
                <a href="">
                    <div class="flex align-center rounded-2xl p-1.5 duration-500 hover:bg-redd">
                        <ion-icon name="help" class="ion-small"></ion-icon>
                    </div>
                </a>
            </li>
        </ul>
    </header>
    <main class="screen flex justify-center items-center w-screen h-body overflow-hidden">
        <div class="content max-sm:-mt-20 duration-500">
            <div class="logo-div flex justify-center mb-5">
                <img src="/img/logo.svg" alt="X" class="login-container-logo-img w-20 top-14">
                <img src="/img/eyesblack.svg" alt="" class="error-eyes absolute mb-20 w-14 duration-500">
            </div>
            <div class="cards step-1 flex gap-10 duration-200">
                <div
                    class="form-container card-1 duration-200 bg-white w-[26rem] max-sm:w-80 max-sm:h-[22rem] h-[25rem] max-sm:h-[19.5rem] p-10 bg-white rounded-lg flex justify-center">
                    <form action="index.html" target="_self" class="login">
                        <div class="form-content">
                            <p class="form-title mt-5 mb-10 max-sm:mt-2 max-sm:mb-8" style="font-size: 24px;;">Iniciar
                                Sesión</p>
                            <input type="text" required pattern="[0-9]{1,}"
                                   class="form-id w-80 max-sm:w-56 h-10 border-0 border-b border-0 border-black mb-10 max-sm:mb-9 outline-0"
                                   placeholder=" " id="id">
                            <label for="" class="error-x-id absolute text-redl ion rotate-45 opacity-0">
                                <ion-icon name="add-outline" style="font-size: 30px;"></ion-icon>
                            </label>
                            <br>
                            <label for="id" class="placeholder placeholder-id absolute text-gray cursor-text">Numero de
                                documento</label>
                            <label for=""
                                   class="absolute error-message error-message-id text-redl opacity-0 duration-500"
                                   style="--i:0.2s;">Numeros (0-9)</label>

                            <input type="password" required pattern=".{8,}"
                                   class="form-pw w-80 max-sm:w-56 h-10 border-0 border-b border-0 border-black mb-5 outline-0"
                                   placeholder=" " id="pw" maxlength="16">
                            <label for="" class="error-x-pw absolute text-redl ion rotate-45 opacity-0 mt-1">
                                <ion-icon name="add-outline" style="font-size: 30px;"></ion-icon>
                            </label>
                            <br>
                            <label for=""
                                   class="absolute error-message error-message-pw text-redl opacity-0 duration-500 mt-5"
                                   style="--i:0.2s;">Minimo 8 caracteres</label>

                            <label for="pw"
                                   class="placeholder placeholder-pw absolute text-gray cursor-text mt-5">Contraseña</label>
                            <div class="flex items-start">
                                <label
                                    class="w-full recover-link text-redd underline text-base cursor-pointer hover:text-redl max-sm:text-sm mt-5 max-sm:mt-0">Olvide
                                    mi
                                    contraseña</label>
                                <div
                                    class="w-full flex justify-end mt-4 translate-x-5 max-sm:translate-x-0 max-sm:w-[320px] max-sm:mt-10 max-sm:absolute max-sm:left-0">
                                    <div class="">
                                        <button type="submit"
                                                class="form-button-login w-24 h-12 max-sm:w-20 max-sm:h-12 bg-redd text-white rounded-md duration-300 hover:shadow-list mt-9 max-sm:w-20 max-sm:translate-x-0 max-sm:h-12 max-sm:bg-white flex justify-center items-center">
                                            <p class="max-sm:opacity-0">Continuar</p>
                                            <ion-icon name="arrow-forward"
                                                      class="absolute text-redd invisible max-sm:visible text-[24px]">
                                            </ion-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>



                <div
                    class="card-2 duration-200 bg-white w-[26rem] max-sm:w-80 max-sm:h-[22rem] h-[25rem] max-sm:h-[19.5rem] p-10 bg-white rounded-lg flex justify-center">
                    <form action="#" target="_self" class="">
                        <div class="form-content">
                            <p class="form-title mt-5 mb-10 max-sm:mt-2 max-sm:mb-8" style="font-size: 24px;;">Recuperar
                                Contraseña</p>

                            <label for="id-type" class=" placeholder-id text-gray cursor-text">Tipo de
                                documento</label><br>
                            <select name="" id="id-type" class="recover-id-type mt-2 mb-2 border border-black">
                                <option value="">CC</option>
                                <option value="">TI</option>
                                <option value="">A</option>
                            </select>
                            <br>

                            <label for="id-recover" class="">Numero de
                                documento</label>
                            <input type="text" required pattern="[0-9]{1,}"
                                   class="recover-id-input w-80 max-sm:w-56 h-10 border-0 border-b border-0 border-black mb-5 outline-0"
                                   placeholder=" " id="id-recover">
                            <label for="" class="recover-error-x absolute text-redl ion rotate-45 opacity-0 mt-1">
                                <ion-icon name="add-outline" style="font-size: 30px;"></ion-icon>
                            </label>
                            <br>
                            <label for=""
                                   class="absolute error-message recover-error-label error-message-id-recover text-redl opacity-0 duration-500 mt-5"
                                   style="--i:0.2s;">Numeros (0-9)</label>


                            <div
                                class="w-full flex justify-center mt-4 max-sm:mt-[2rem] max-sm:absolute max-sm:w-screen max-sm:-ml-10 max-sm:justify-start">
                                <div class="flex gap-40 max-sm:w-[320px]">
                                    <button type="button"
                                            class="recover-cancel w-24 h-12 max-sm:w-20 max-sm:h-12 bg-grayd text-white rounded-md duration-300 hover:shadow-list mt-2 max-sm:w-20 max-sm:translate-x-0 max-sm:h-12 flex justify-center items-center">
                                        <p class="max-sm:opacity-0">Atras</p>
                                        <ion-icon name="arrow-back"
                                                  class="absolute text-redd invisible max-sm:visible text-[24px]">
                                        </ion-icon>
                                    </button>
                                    <button type="submit"
                                            class="recover-continue w-24 h-12 max-sm:w-20 max-sm:h-12 bg-redd text-white rounded-md duration-300 hover:shadow-list mt-2 max-sm:w-20 max-sm:translate-x-0 max-sm:h-12 flex justify-center items-center">
                                        <p class="max-sm:opacity-0">Siguiente</p>
                                        <ion-icon name="arrow-forward"
                                                  class="absolute invisible max-sm:visible text-[24px]">
                                        </ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>





                <div
                    class="card-3 duration-200 bg-white w-[26rem] max-sm:w-80 max-sm:h-[22rem] h-[25rem] max-sm:h-[19.5rem] p-10 bg-white rounded-lg flex justify-center">
                    <form action="index.html" target="_self" class="login w-full">
                        <div class="form-content">
                            <p class="form-title mt-5 mb-5 max-sm:mt-2 max-sm:mb-[1.8rem]" style="font-size: 24px;;">
                                Recuperar
                                Contraseña</p>

                            <label for="id-type" class=" placeholder-id text-gray cursor-text">Seleccione un metodo para
                                recuperar su contraseña:</label>
                            <div class="w-full h-44 max-sm:h-40 flex justify-center items-center gap-10">
                                <button type="button"
                                        class=" w-32 h-32 max-sm:h-24 rounded-xl hover:shadow-2xl bg-white duration-200">
                                    <div
                                        class="recover-button-online w-full h-2/3 text-black flex justify-center items-end text-[60px]">
                                        <ion-icon name="earth"></ion-icon>
                                    </div>
                                    <div class="w-full h-1/3 text-black flex justify-center items-start ">Web</div>
                                </button>
                                <button type="button"
                                        class="recover-button-local w-32 h-32 max-sm:h-24 rounded-xl hover:shadow-2xl bg-white duration-200">
                                    <div class="w-full h-2/3 text-black flex justify-center items-end text-[60px]">
                                        <ion-icon name="wifi"></ion-icon>
                                        <div class="absolute w-16 h-1 bg-black rotate-45 -translate-y-8"></div>
                                    </div>
                                    <div class="w-full h-1/3 text-black flex justify-center items-start ">Local</div>
                                </button>
                            </div>



                        </div>
                        <div
                            class="w-full flex justify-center -mt-[1.2rem] max-sm:-mt-1 max-sm:absolute max-sm:w-screen max-sm:-ml-10 max-sm:justify-start">
                            <div class="flex gap-40 max-sm:w-[320px]">
                                <button type="button"
                                        class="recover-method-cancel w-24 h-12 max-sm:w-20 max-sm:h-12 bg-grayd text-white rounded-md duration-300 hover:shadow-list mt-2 max-sm:w-20 max-sm:translate-x-0 max-sm:h-12 flex justify-center items-center">
                                    <p class="max-sm:opacity-0">Atras</p>
                                    <ion-icon name="arrow-back"
                                              class="absolute text-redd invisible max-sm:visible text-[24px]">
                                    </ion-icon>
                                </button>
                                <button type="submit"
                                        class="invisible w-24 h-12 max-sm:w-20 max-sm:h-12 bg-redd text-white rounded-md duration-300 hover:shadow-list mt-2 max-sm:w-20 max-sm:translate-x-0 max-sm:h-12 flex justify-center items-center">
                                    <p class="max-sm:opacity-0">Siguiente</p>
                                    <ion-icon name="arrow-forward" class="absolute invisible text-[24px]">
                                    </ion-icon>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>



                <div
                    class="card-4 duration-200 bg-white w-[26rem] max-sm:w-80 max-sm:h-[22rem] h-[25rem] max-sm:h-[19.5rem] p-10 bg-white rounded-lg flex justify-center">
                    <form action="#" target="_self" class="">
                        <div class="form-content">
                            <p class="form-title mt-4 mb-10 max-sm:mt-2 max-sm:mb-8" style="font-size: 24px;;">Recuperar
                                Contraseña</p>


                            <p class="form-title mt-4 mb-4 max-sm:mt-2 max-sm:mb-8" style="font-size: 18px;;">Tu pregunta clave es:</p>

                            <label for="new-pw" class="verification">"Nombre de tu primera mascota"</label>
                            <input type="text" required
                                   class="recover-local-input w-80 max-sm:w-56 h-10 border-0 border-b border-0 border-black mb-5 outline-0"
                                   placeholder=" " id="pw" maxlength="" pattern="[a-z]{4,}">
                            <label for=""
                                   class="recover-local-error-label absolute text-redl ion rotate-45 opacity-0 mt-1">
                                <ion-icon name="add-outline" style="font-size: 30px;"></ion-icon>
                            </label>
                            <br><label for=""
                                       class="absolute error-message recover-local-error-x text-redl opacity-0 duration-500 mt-5"
                                       style="--i:0.2s;">Respuesta incorrecta</label>




                            <div
                                class="w-full flex justify-center mt-[3.8rem] max-sm:mt-[3.6rem] max-sm:absolute max-sm:w-screen max-sm:-ml-10 max-sm:justify-start">
                                <div class="flex gap-40 max-sm:w-[320px]">
                                    <button type="button"
                                            class="recover-local-cancel w-24 h-12 max-sm:w-20 max-sm:h-12 bg-grayd text-white rounded-md duration-300 hover:shadow-list mt-2 max-sm:w-20 max-sm:translate-x-0 max-sm:h-12 flex justify-center items-center">
                                        <p class="max-sm:opacity-0">Atras</p>
                                        <ion-icon name="arrow-back"
                                                  class="absolute text-redd invisible max-sm:visible text-[24px]">
                                        </ion-icon>
                                    </button>
                                    <button type="submit"
                                            class="recover-local-continue w-24 h-12 max-sm:w-20 max-sm:h-12 bg-redd text-white rounded-md duration-300 hover:shadow-list mt-2 max-sm:w-20 max-sm:translate-x-0 max-sm:h-12 flex justify-center items-center">
                                        <p class="max-sm:opacity-0">Siguiente</p>
                                        <ion-icon name="arrow-forward"
                                                  class="absolute invisible max-sm:visible text-[24px]">
                                        </ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>



                <div
                    class="card-5 duration-200 bg-white w-[26rem] max-sm:w-80 max-sm:h-[22rem] h-[25rem] max-sm:h-[19.5rem] p-10 bg-white rounded-lg flex justify-center">
                    <form action="#" target="" class="">
                        <div class="form-content">
                            <p class="form-title mt-5 mb-10 max-sm:mt-2 max-sm:mb-8" style="font-size: 24px;;">Recuperar
                                Contraseña</p>

                            <label for="new-pw" class=""> Escriba su correo</label>
                            <input type="text" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z.]{2,20}$"
                                   class="recover-email-input w-80 max-sm:w-56 h-10 border-0 border-b border-0 border-black mb-5 outline-0"
                                   placeholder=" " id="pw">
                            <label for=""
                                   class="recover-online-error-label absolute text-redl ion rotate-45 opacity-0 mt-1">
                                <ion-icon name="add-outline" style="font-size: 30px;"></ion-icon>
                            </label>
                            <br><label for=""
                                       class="absolute error-message recover-online-error-x text-redl opacity-0 duration-500 mt-5"
                                       style="--i:0.2s;">correo@ejemplo.com</label>




                            <div
                                class="w-full flex justify-center mt-[6.25rem] max-sm:mt-[7.3rem] max-sm:absolute max-sm:w-screen max-sm:-ml-10 max-sm:justify-start">
                                <div class="flex gap-40 max-sm:w-[320px]">
                                    <button type="button"
                                            class="recover-online-cancel w-24 h-12 max-sm:w-20 max-sm:h-12 bg-grayd text-white rounded-md duration-300 hover:shadow-list mt-2 max-sm:w-20 max-sm:translate-x-0 max-sm:h-12 flex justify-center items-center">
                                        <p class="max-sm:opacity-0">Atras</p>
                                        <ion-icon name="arrow-back"
                                                  class="absolute text-redd invisible max-sm:visible text-[24px]">
                                        </ion-icon>
                                    </button>
                                    <button type="submit"
                                            class="recover-online-continue w-24 h-12 max-sm:w-20 max-sm:h-12 bg-redd text-white rounded-md duration-300 hover:shadow-list mt-2 max-sm:w-20 max-sm:translate-x-0 max-sm:h-12 flex justify-center items-center">
                                        <p class="max-sm:opacity-0">Siguiente</p>
                                        <ion-icon name="arrow-forward"
                                                  class="absolute invisible max-sm:visible text-[24px]">
                                        </ion-icon>
                                    </button>
                                </div>
                            </div>
                            <script src="https://smtpjs.com/v3/smtp.js">
                            </script>
                        </div>
                    </form>

                </div>

                <div
                    class="card-6 duration-200 bg-white w-[26rem] max-sm:w-80 max-sm:h-[22rem] h-[25rem] max-sm:h-[19.5rem] p-10 bg-white rounded-lg flex justify-center">
                    <form action="#" target="_self" class="">
                        <div class="form-content">
                            <p class="form-title mt-4 mb-10 max-sm:mt-2 max-sm:mb-8" style="font-size: 24px;;">Recuperar
                                Contraseña</p>

                            <label for="new-pw" class="verification">Escriba el codigo de 6 digitos que llego a su
                                correo</label>
                            <input type="text" required pattern="[0-9]{6,}"
                                   class="recover-code-input w-80 max-sm:w-56 h-10 border-0 border-b border-0 border-black mb-5 outline-0"
                                   placeholder=" " id="pw" maxlength="6">
                            <label for="" class="recover-code-error-x absolute text-redl ion rotate-45 opacity-0 mt-1">
                                <ion-icon name="add-outline" style="font-size: 30px;"></ion-icon>
                            </label>
                            <br><label for=""
                                       class="absolute recover-code-error-label error-message text-redl opacity-0 duration-500 mt-5"
                                       style="--i:0.2s;"></label>
                            <p for="" class="resend-email text-redd w-full cursor-pointer">Reenviar correo</p>




                            <div
                                class="w-full flex justify-center mt-[3.5rem] max-sm:mt-[4.3rem]  max-sm:absolute max-sm:w-screen max-sm:-ml-10 max-sm:justify-start">
                                <div class="flex gap-40 max-sm:w-[320px]">
                                    <button type="button"
                                            class="recover-code-cancel w-24 h-12 max-sm:w-20 max-sm:h-12 bg-grayd text-white rounded-md duration-300 hover:shadow-list mt-2 max-sm:w-20 max-sm:translate-x-0 max-sm:h-12 flex justify-center items-center">
                                        <p class="max-sm:opacity-0">Atras</p>
                                        <ion-icon name="arrow-back"
                                                  class="absolute text-redd invisible max-sm:visible text-[24px]">
                                        </ion-icon>
                                    </button>
                                    <button type="submit"
                                            class="recover-code-continue w-24 h-12 max-sm:w-20 max-sm:h-12 bg-redd text-white rounded-md duration-300 hover:shadow-list mt-2 max-sm:w-20 max-sm:translate-x-0 max-sm:h-12 flex justify-center items-center">
                                        <p class="max-sm:opacity-0">Siguiente</p>
                                        <ion-icon name="arrow-forward"
                                                  class="absolute invisible max-sm:visible text-[24px]">
                                        </ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>








                <div
                    class="card-7 duration-200 bg-white w-[26rem] max-sm:w-80 max-sm:h-[22rem] h-[25rem] max-sm:h-[19.5rem] p-10 bg-white rounded-lg flex justify-center">
                    <form action="" target="_self" class="">
                        <div class="form-content">
                            <p class="form-title mt-5 mb-10 max-sm:mt-2 max-sm:mb-8" style="font-size: 24px;;">Recuperar
                                Contraseña</p>

                            <label for="new-pw" class="">Nueva contraseña</label>
                            <input type="password" required pattern=".{8,}"
                                   class="recover-newpw w-80 max-sm:w-56 h-10 border-0 border-b border-0 border-black mb-5 outline-0"
                                   placeholder=" " id="pw" maxlength="16">
                            <label for=""
                                   class="recover-newpw-error-x1 absolute text-redl ion rotate-45 opacity-0 mt-1">
                                <ion-icon name="add-outline" style="font-size: 30px;"></ion-icon>
                            </label>
                            <br><label for=""
                                       class="absolute error-message recover-newpw-error-label1 text-redl opacity-0 duration-500 mt-5"
                                       style="--i:0.2s;">Minimo 8 caracteres</label>

                            <label for="new-pw-confirm" class="">Confirmar contraseña</label>
                            <input type="password" required pattern=".{8,}"
                                   class="recover-newpw-confirm w-80 max-sm:w-56 h-10 border-0 border-b border-0 border-black mb-5 outline-0"
                                   placeholder=" " id="pw-confirm" maxlength="16">
                            <label for=""
                                   class="recover-newpw-error-x2 absolute text-redl ion rotate-45 opacity-0 mt-1">
                                <ion-icon name="add-outline" style="font-size: 30px;"></ion-icon>
                            </label>
                            <br><label for=""
                                       class="absolute error-message recover-newpw-error-label2 text-redl opacity-0 duration-500 mt-5"
                                       style="--i:0.2s;">Las contraseñas no concuerdan</label>


                            <div
                                class="w-full flex justify-center mt-4 max-sm:mt-[2.05rem] max-sm:absolute max-sm:w-screen max-sm:-ml-10 max-sm:justify-start">
                                <div class="flex gap-40 max-sm:w-[320px]">
                                    <button type="button"
                                            class="recover-new-password-cancel w-24 h-12 max-sm:w-20 max-sm:h-12 bg-grayd text-white rounded-md duration-300 hover:shadow-list mt-2 max-sm:w-20 max-sm:translate-x-0 max-sm:h-12 flex justify-center items-center">
                                        <p class="max-sm:opacity-0">Atras</p>
                                        <ion-icon name="arrow-back"
                                                  class="absolute text-redd invisible max-sm:visible text-[24px]">
                                        </ion-icon>
                                    </button>
                                    <button type="submit"
                                            class="recover-new-password-continue w-24 h-12 max-sm:w-20 max-sm:h-12 bg-redd text-white rounded-md duration-300 hover:shadow-list mt-2 max-sm:w-20 max-sm:translate-x-0 max-sm:h-12 flex justify-center items-center">
                                        <p class="max-sm:opacity-0">Siguiente</p>
                                        <ion-icon name="arrow-forward"
                                                  class="absolute invisible max-sm:visible text-[24px]">
                                        </ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>




            </div>
        </div>
    </main>
    <footer class="max-sm:absolute bottom-0 bg-grayd w-full text-white h-8 flex items-center">
        <ul class="absolute flex gap-5 right-8">
            <li class=""><a href="" class="hover:underline">Empresa</a></li>
            <li class=""><a href="" class="hover:underline">Creditos</a></li>
        </ul>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="/js/login.js">
    </script>
    <script src="/js/logincards.js">
    </script>
    </body>
</html>
