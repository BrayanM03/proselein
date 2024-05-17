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
<main>

    <section class="z-0 bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <a href="#" class="inline-flex justify-between items-center py-1 px-1 pe-4 mb-7 text-sm text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800">
                <span class="text-xs bg-blue-600 rounded-full text-white px-4 py-1.5 me-3">Nuevo</span> <span class="text-sm font-medium">Hechale un ojo a nuestro catalogo de productos</span> 
                <svg class="w-2.5 h-2.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
            </a>
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Conectamos Ideas, Alimentamos Proyectos</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-200">En Prosein, nos enorgullece ofrecer una sólida trayectoria en el mundo de los servicios eléctricos y de instrumentación.</p>
            <form class="w-full max-w-md mx-auto">   
                <label for="default-email" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Email sign-up</label>
                <div class="relative">
                    <div class="absolute inset-y-0 rtl:inset-x-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                            <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                            <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                        </svg>
                    </div>
                    <input type="email" id="default-email" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escribe tu correo, nos contactaremos..." required>
                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Mandar</button>
                </div>
            </form>
        </div>
        <!-- <div class="bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full mt-16 h-60 absolute top-0 left-0 z-0"></div> -->
    </section>
  <img src="assets/img/nosotros2.jpeg" class="md:w-1/5 md:absolute md:bottom-10 md:left-10 md:border-8 border-4 sm:w-44 border-slate-200" alt="ingeniero">

    <section class="w-full bg-slate-100">
    <div class="mx-auto max-w-5xl px-4 py-6 sm:px-6 lg:px-8">
        <section class="mt-3 pt-10 pb-10 sm:pb-0 static">
          <p class="mb-8 sm:mb-3 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 text-center">
            Somos Proseleiin, proveedora de servicios eléctricos y de productos de instrumentación, estamos comprometidos a ayudarle
            y brindarle el mejor servicio, 5 años nos respaldan.
          </p>
          <hr class="w-96 h-1 mx-auto my-4 mt-52 bg-orange-300 border-0 rounded md:my-10 aboslute bottom-5 left-5">
        </section>
    </div>
    </section>

    <img src="assets/img/nosotros1.jpeg" class="md:w-1/5 md:absolute md:bottom-10 md:right-10 md:border-8 border-4 sm:w-44 border-slate-200" alt="instalacion">
    <section class="bg-white w-full">
      <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
        <figure class="max-w-screen-md mx-auto">
          <h2 class="mb-4 lg:mb-7 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 md:text-4xl">Nuestra misión</h2>
          <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
        </svg> 
        <blockquote>
          <p class="text-xl text-gray-900">Ser una empresa lider en proveedor soluciones de ingenieria, cumpliendo las espectativas de nuestros clientes, brindando confiabilidad, siendo 
            redituables y ofreciendo trabajos de calidad basados en el cumpliento normativo y responsabilidad ambiental, haciendo énfansis 
            que la seguridad es nuestra prioridad.
          </p>
        </blockquote>
        <figcaption class="flex items-center justify-center mt-6 space-x-3">
          <img src="assets/img/logo-blanco.jpg" alt="" class="w-40">
        </figcaption>
      </figure>
    </div>
  </section>
  <hr>
    <section class="bg-slate-100 w-full">
            <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
                <figure class="max-w-screen-md mx-auto">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 md:text-4xl">Nuestra visión</h2>
                        <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
                    </svg> 
                    <blockquote>
                        <p class="text-xl font-medium text-gray-900">Consolidarnos como la mejor opción en el mercado eléctrico y de instrumentación en la 
                            región, reconocidos en servicios y proyectos relacionados con los servicios que brindamos.
                        </p>
                    </blockquote>
                </figure>
            </div>
    </section>

    <?php require('views/footer.php')  ?>


  </main>
</div>
</body>
</html>