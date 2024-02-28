<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="icon" href="assets/img/logo_ico.ico">    
    <title>Contacto | Proselein</title>

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

<section class="bg-white dark:bg-gray-600">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contactanos</h2>
      <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">¡Contacta con Nosotros para una Solución Energética Personalizada!</p>
      <form action="#" id="contacto-proselein" class="space-y-8">
          <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tu correo electronico</label>
              <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@proselein.com" required>
          </div>
          <div>
              <label for="nombre_usuario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre</label>
              <input type="text" id="nombre_usuario" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Escribe tu nombre">
          </div>
          <div>
              <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Asunto</label>
              <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Permítenos saber en qué te podemos ayudar" required>
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tu mensaje</label>
              <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Escribe un mensaje..."></textarea>
          </div>
          <!-- <div class="g-recaptcha" 
        data-sitekey="6LfKYHspAAAAAFq17Tb-2NN3EQh7KrR349f1e3hQ" 
        data-callback='onSubmit' 
        data-action='submit'></div> -->
          <button onclick="validarCorreo(event)" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-yellow-400 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Enviar mensaje</button>
      </form>
  </div>
  
</section>

    <?php require('views/footer.php')  ?>


  </main>
</div>
</body>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="./assets/js/correo.js"></script>
</html>