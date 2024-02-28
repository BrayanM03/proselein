<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="icon" href="assets/img/logo_ico.ico">    
    <title>Servicios | Proselein</title>

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

<section class="bg-white dark:bg-gray-400">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Nuestros servicios</h2>
      <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-600 sm:text-xl">¡Te ofrecemos calidad y potenciamiento a tus proyectos!</p>
  </div>
</section>
<div id="secciones-servicios">
  
</div>
    <?php require('views/footer.php')  ?>


  </main>
</div>
</body>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="./assets/js/servicios.js"></script>
</html>