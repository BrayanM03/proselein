<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <link rel="icon" href="assets/img/logo_ico.ico">
  <title>Catalogo de conectores| Proselein</title>

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
    <main class="dark:bg-gray-600 pt-4">

      <section class="z-0 bg-white flex flex-col dark:bg-gray-800">

        <div class="w-12/12 dark:bg-gray-800 max-w-screen-md m-auto text-center mb-5">
          <div class="flex flex-col items-center justify-center py-4 dark:bg-gray-800 flex-wrap">

            <span class="font-bold text-2xl text-stone-500 dark:text-white">Conectores de cobre flexibles y rigidos</span>

            <p class="text-gray-600 dark:text-gray-400 mt-4">En Proselein, nos enorgullecemos de ofrecer una amplia gama de conectores de cobre flexibles y rígidos para satisfacer las diversas necesidades de nuestros clientes. Nuestros conectores están fabricados con materiales de la más alta calidad y están diseñados para brindar un rendimiento confiable y duradero en las aplicaciones más exigentes.</p>

            <!-- <h3 class="text-2xl font-semibold text-gray-800 mt-8">Conectores de Cobre Flexibles</h3>

<ul class="list-disc  dark:text-white list-inside text-gray-600">
  <li>Versatilidad: Se adaptan fácilmente a espacios reducidos y curvas pronunciadas.</li>
  <li>Durabilidad: Fabricados con cobre de alta resistencia para una larga vida útil.</li>
  <li>Confiabilidad: Conexiones seguras y resistentes a la corrosión.</li>
  <li>Amplia gama de aplicaciones: Ideales para instalaciones eléctricas, sistemas de refrigeración, aire acondicionado y más.</li>
</ul>

<h3 class="text-2xl font-semibold text-gray-800 mt-8">Conectores de Cobre Rígidos</h3>

<ul class="list-disc  dark:text-white list-inside text-gray-600">
  <li>Resistencia: Soportan altas corrientes y temperaturas extremas.</li>
  <li>Estabilidad: Conexiones firmes y resistentes a vibraciones.</li>
  <li>Facilidad de instalación: Diseñados para un montaje rápido y sencillo.</li>
  <li>Amplia gama de tamaños: Disponibles en diversas medidas para adaptarse a sus necesidades específicas.</li>
  <p class="text-gray-600 mt-4">**Proselein: Su proveedor de confianza para soluciones eléctricas confiables.**</p>
</ul> -->



          </div>
        </div>
        <span class="font-bold text-lg text-center m-auto dark:text-white">Este es nuestro catalogo</span>
        <div class="grid grid-cols-2 lg:grid-cols-5 lx:grid-cols-6 mt-5 lg:gap-4 p-5 dark:bg-gray-600" id="area-catalogo">

        </div>



        <!-- <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-8 rounded-t-lg" src="/docs/images/products/apple-watch.png" alt="product image" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5">
                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                    </div>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                    <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                </div>
            </div>
        </div> -->

      </section>

      <?php require('views/footer.php')  ?>


    </main>
  </div>
</body>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="./assets/js/catalogo.js"></script>

</html>