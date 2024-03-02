<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="icon" href="assets/img/logo_ico.ico">    
    <title>Proselein | Inicio</title>

    <script>
        tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
    </script>
     <style type="text/tailwindcss">
    @layer utilities {
          .content-auto {
            content-visibility: auto;
          }
    }
  </style>
</head>
<body>
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
<?php require('views/navbar.php')  ?>

  <header class="bg-white shadow">
       <?php require('views/jumbotron-inicio.php')  ?>
  </header>
  <main>
    <section class="w-full bg-slate-100">
    <div class="mx-auto max-w-5xl px-4 py-6 sm:px-6 lg:px-8">
        <section class="mt-3 pt-10 pb-10 static">
          <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 text-center">
            Somos una compañía que brinda los siguientes servicios, contamos con personal altamente capacitado
            para desempañar cada una de las siguientes actividades de mantenimiento, preventivo, correctivo y predictivo.
          </p>
          <hr class="w-96 h-1 mx-auto my-4 mt-52 bg-orange-300 border-0 rounded md:my-10 aboslute bottom-5 left-5">
          <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-center mt-10">
              <div>
                  <img class="h-auto max-w-full w-64 rounded-lg m-auto" src="assets/img/capacitacion.jpg" alt="">
                  <span class="text-slate-700 dark:text-slate-500">Cursos de seguridad</span>
              </div>
              <div>
                  <img class="h-auto max-w-full w-64 rounded-lg m-auto" src="assets/img/instalacion.jpg" alt="">
                  <span class="text-slate-700 dark:text-slate-500">Instalaciones electricas</span>
              </div>
              <div>
                  <img class="h-auto max-w-full w-64 rounded-lg m-auto" src="assets/img/venta-equipos.jpeg" alt="">
                  <span class="text-slate-700 dark:text-slate-500 mt-2.5">Venta de equipo electrico y de instrumentación</span>
              </div>
          </div>
        </section>
    </div>
    </section>

    <section class="w-full bg-white">
          <div class="mx-auto max-w-5xl px-4 py-10 sm:px-6 lg:px-8 flex flex-row">
            <div class="basis-2/5 flex items-center justify-center">
              <h1 class="mb-4 text-4xl font-extrabold text-center tracking-tight leading-none text-black md:text-5xl lg:text-4xl">
                ¿Porque<br> elegirnos?
              </h1>
            </div>
            <div class="basis-1/5">
              <img src="assets/img/logo-blanco.jpg" alt="">
            </div>
            <div class="basis-2/5">
            <ul class="list-inside text-gray-500">
                <li class="flex items-center mt-2">
                  <img src="assets/img/success.png" class="h-8 w-8 mr-2" alt="Success icon">
                  <span class="text-lg">Contamos con cientos de clientes satisfechos</span>
                </li>
                <li class="flex items-center mt-2">
                  <img src="assets/img/success.png" class="h-8 w-8 mr-2" alt="Success icon">
                  <span class="text-lg">Tenemos certificación en termografia infraroja nivel 1</span>
                </li>
                <li class="flex items-center mt-2">
                  <img src="assets/img/success.png" class="h-8 w-8 mr-2" alt="Success icon">
                  <span class="text-lg">Contamos con un catalogo extenso en equipo electrico e instrumentación</span>
                </li>
            </ul>
            </div>
          </div>
    </section>
    <div style="background-image: url('assets/img/vista-area.jpeg'); background-size:cover;" class="mt-5">
    <section class="w-full mt-7 mb-5">
          <div class="mx-auto max-w-5xl px-4 py-6 sm:px-6 lg:px-8 flex flex-row">
              <div class="basis-1/5">
                <img class="border-2 border-white" src="assets/img/banner-img.png" alt="">
              </div>
              <div class="basis-3/5 flex flex-col items-center justify-center">
                <h1 class="drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)] subpixel-antialiased tracking-wide mb-4 text-4xl font-extrabold text-center tracking-tight leading-none text-white md:text-5xl lg:text-4xl">
                  Somos abastecedores de productos industriales
                </h1><br>
                <a href="catalogo.php" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">Ver catalogo <span aria-hidden="true">→</span></a>
              </div>
              <div class="basis-1/5">
                <img class="border-2 border-white" src="assets/img/banner-img-2.png" alt="">
              </div>
          </div>
    </section>
    </div>

    <section class="w-full bg-white">
          <p class="mb-4 mt-12 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 text-center">
          Nuestros clientes
          </p>
          <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8 flex flex-row">
              <div class="basis-1/5">
                <img class="border-2 border-white" src="assets/img/cliente_faconsa.png" alt="">
              </div>
              <div class="basis-1/5">
                <img class="border-2 border-white" src="assets/img/cliente_ppc.png" alt="">
              </div>
              <div class="basis-1/5">
                <img class="border-2 border-white" src="assets/img/cliente_joyson.png" alt="">
              </div>
              <div class="basis-1/5">
                <img class="border-2 border-white" src="assets/img/cliente_inovaciones.png" alt="">
              </div>
              <div class="basis-1/5">
                <img class="border-2 border-white" src="assets/img/cliente_voltek.png" alt="">
              </div>
              <div class="basis-1/5">
                <img class="border-2 border-white" src="assets/img/cliente_assa_abloy.png" alt="">
              </div>
              <div class="basis-1/5">
                <img class="border-2 border-white" src="assets/img/cliente_trico.png" alt="">
              </div>
          </div>
    </section>

    <?php require('views/footer.php')  ?>

  </main>
</div>
</body>
</html>