<?php
// Identificar la página actual
$pagina_actual = basename($_SERVER['PHP_SELF']); // Obtiene el nombre del archivo actual
// Array de elementos del menú y sus correspondientes páginas
$menu_items = array(
    'Inicio' => 'index.php',
    'Nosotros' => 'nosotros.php',
    'Servicios' => 'servicios.php',
    'Venta de equipo' => 'venta_equipo.php',
    'Contacto' => 'contacto.php',
);
$clase_activa = "bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium";
$clase_inactiva ="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium";
?>
<style>
  .transition-transform {
    transition: transform 0.3s ease;
}
</style>
<nav class="bg-gray-800 z-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <a href="index.php">
          <div class="flex-shrink-0 flex">
            <span class="text-white mr-2 mt-2 text-sm">PROSELEIN</span>
            <img class="h-8 w-8" src="assets/img/logo_2.png" alt="Proselein">
          </div>
          </a>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <?php foreach ($menu_items as $item => $pagina): ?>
                <?php if($pagina== 'venta_equipo.php'){ ?>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class='flex <?php echo $pagina_actual == $pagina ? $clase_activa : $clase_inactiva; ?>'>
                        Productos 
                        <svg class="w-2.5 h-2.5 ms-2.5 mt-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="hidden z-50 absolute mt-10 end-2/4 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="catalogo.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Conectores de cobre flexibles y rigidos.</a>
                            </li>
                            <li>
                                <a href="catalogo_equipos.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Equipos de alta tensión.</a>
                            </li>
                         <!--    <li>
                                <a href="contacto.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Equipos de instrumentación.</a>
                            </li> -->
                        </ul>
                        <!-- <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                        </div> -->
                    </div>
                <?php }else { ?>    
                    <a href="<?php echo $pagina; ?>" class='<?php echo $pagina_actual == $pagina ? $clase_activa : $clase_inactiva; ?>'>
                        <?php echo $item; ?>
                    </a>
              <?php }?>
            <?php endforeach; ?>
              
            </div>
          </div>
        </div>
    
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button id="mobile-menu-button" type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <?php
        $clase_opcion_activa = 'bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium';
        $clase_opcion_predeterminada = 'text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium';  
        ''
        ?>
        <a href="index.php" class="<?php echo $pagina_actual == 'index.php' ? $clase_opcion_activa : $clase_opcion_predeterminada; ?>" aria-current="page">Inicio</a>
        <a href="nosotros.php" class="<?php echo $pagina_actual == 'nosotros.php' ? $clase_opcion_activa : $clase_opcion_predeterminada; ?>">Nosotros</a>
        <a href="servicios.php" class="<?php echo $pagina_actual == 'servicios.php' ? $clase_opcion_activa : $clase_opcion_predeterminada; ?>">Servicios</a>
        <a href="#" data-dropdown-toggle="dropdown" 
          class="<?php echo $pagina_actual == 'catalogo.php' ? $clase_opcion_activa : $clase_opcion_predeterminada; ?>"  onclick="toggleRotation()">
          <div class="grid grid-cols-2">
            <div>Productos</div>
            <div class="flex justify-end">
                  <div>
                      <svg id="arrow-icon" class="w-2.5 h-2.5 ms-3 transition-transform duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                     <!-- <svg style="transform: rotate(180deg);" class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg> -->
                  </div>
            </div>
          </div>
        </a>
        <div id="dropdown" class="hidden static bg-white divide-y divide-gray-100 w-full rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
              <li>
                <a href="catalogo.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Conectores de cobre flexibles y rigidos</a>
              </li>
              <li>
              <a href="catalogo_equipos.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Equipos de alta tensión</a>

              </li>
            </ul>
        </div>
        <a href="contacto.php" class="<?php echo $pagina_actual == 'contacto.php' ? $clase_opcion_activa : $clase_opcion_predeterminada; ?>">Contacto</a>
      </div>
     
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

  <script>
    let mobile_menu_button= document.querySelector("#mobile-menu-button");
    let mobile_menu = document.querySelector('#mobile-menu');
    let dropdawnlink = document.querySelector("#dropdownNavbarLink");
    let dropdawn = document.querySelector('#dropdownNavbar');
    let flag = true;
    let flag_2=true;
    dropdawnlink.addEventListener('click', function(){
        if (flag){
            dropdawn.classList.remove('hidden');
            flag = false;
        }else{
            dropdawn.classList.add('hidden');
            flag = true;
        }
    })
    mobile_menu_button.addEventListener('click', function(){
        if (flag_2){
          mobile_menu.classList.remove('hidden');
            flag_2 = false;
        }else{
          mobile_menu.classList.add('hidden');
            flag_2 = true;
        }
    })

    function toggleRotation() {
    const arrowIcon = document.getElementById('arrow-icon');
    arrowIcon.classList.toggle('rotate-180');
}

  </script>