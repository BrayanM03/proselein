flag = 1;
let servicios = [
  {
    color_text: "text-gray-800",
    text1: "Instalaciones",
    text2: "Eléctricas Industriales",
    src: "instalaciones.jpg",
    color: "#E8E9D3",
  },
  {
    color_text: "text-gray-800",
    text1: "Mantenimiento a subestaciones eléctricas ",
    text2: "en media y alta tensión",
    src: "subestacion.png",
    color: "#C2AA92",
  },
  {
    color_text: "text-white",
    text1: "Pruebas eléctricas a equipo primario ",
    text2:
      "(Resistencias de Aislamiento, TTR, Resistencia óhmica, Factor de potencia, Rigidez dialéctrico al aceite, prueba de disparo relevaodres de protección, entre otras.",
    src: "pruebas.png",
    color: "#3F5547",
  },
  {
    color_text: "text-white",
    text1: "Análisis de aceite de transformadores",
    text2: "mediante Cromatografia de gases disueltos y Fisicoquímicos.",
    src: "analisis.png",
    color: "#8C9F9E",
  },
  {
    color_text: "text-white",
    text1: "Integración de soluciones",
    text2: "eléctricas industriales.",
    src: "integracion.png",
    color: "#687876",
  },
  {
    color_text: "text-white",
    text1: "Implementación de soluciones de instrumentación",
    text2: "y control para procesos químicos y no químicos.",
    src: "implementacion.png",
    color: "#589ED6",
  },
  {
    color_text: "text-white",
    text1: "Venta de equipo eléctrico y",
    text2: "de instrumentación.",
    src: "instrumentacion.jpeg",
    color: "#B7934C",
  },
  {
    color_text: "text-gray",
    text1: "Reportes termograficos",
    text2: "",
    src: "reporte.png",
    color: "#d7d6d2",
  },

  {
    color_text: "text-gray",
    text1: "Estudios de la resistencia de la Red de tierras y Pararrayos, cumplimiento a la NOM 022 STPS 2015.",
    text2: "",
    src: "estudios_resistencia_red.jpeg",
    color: "#f2d4d2",
  },
];

let windowWidth = window.innerWidth;
let sectionClass, divClass, textClass;

if (windowWidth < 640) {
  servicios.forEach((element) => {
    $("#secciones-servicios").append(`
        <section class="overflow-hidden">
          <div class="flex flex-col md:flex-row">
            <div class="bg-[${element.color}] basis-full md:basis-1/3 h-20">
                <img src="./assets/img/servicios/${element.src}" class="w-full mb-5 object-cover h-48 object-top" alt="">
            </div>
            <div class="bg-[${element.color}] basis-full md:basis-2/3 p-4 flex align-center justify-center items-center">
                <div>
                  <h2 class="font-bold text-center ${element.color_text} text-xl  md:text-2xl">${element.text1}</h2>
                  <h2 class="font-bold text-center ${element.color_text} text-xl  md:text-2xl">${element.text2}</h2>
                </div>
            </div>
          </div>
      </section>
        `);
  });
} else if (windowWidth >= 640 && windowWidth < 1024) {
  servicios.forEach((element) => {
    if (flag == 1) {
      $("#secciones-servicios").append(`
        <section class="overflow-hidden">
          <div class="flex flex-col md:flex-row">
            <div class="bg-[${element.color}] basis-full md:basis-1/3 h-60">
                <img src="./assets/img/servicios/${element.src}" class="w-full mb-5" alt="">
            </div>
            <div class="bg-[${element.color}] basis-full md:basis-2/3 flex align-center justify-center items-center">
                <div>
                  <h2 class="font-bold text-center ${element.color_text} text-xl  md:text-2xl">${element.text1}</h2>
                  <h2 class="font-bold text-center ${element.color_text} text-xl  md:text-2xl">${element.text2}</h2>
                </div>
            </div>
          </div>
      </section>
        `);
      flag = 2;
    } else {
      $("#secciones-servicios").append(`
    <section class="overflow-hidden">
      <div class="flex flex-col md:flex-row">
        <div class="bg-[${element.color}] basis-full md:basis-2/3 h-60 flex align-center justify-center items-center">
            
            <div>
              <h2 class="font-bold text-center ${element.color_text} text-xl  md:text-2xl">${element.text1}</h2>
              <h2 class="font-bold text-center ${element.color_text} text-xl  md:text-2xl">${element.text2}</h2>
            </div>
        </div>
        <div class="bg-[${element.color}] basis-full md:basis-1/3 h-60">
             <img src="./assets/img/servicios/${element.src}" class="w-full mb-5" alt="">
        </div>
      </div>
  </section>
    `);
      flag = 1;
    }
  });
} else {
  servicios.forEach((element) => {
    if (flag == 1) {
      $("#secciones-servicios").append(`
        <section class="overflow-hidden">
          <div class="flex flex-col md:flex-row">
            <div class="bg-[${element.color}] basis-full md:basis-1/3 h-60">
                <img src="./assets/img/servicios/${element.src}" class="w-full mb-5" alt="">
            </div>
            <div class="bg-[${element.color}] basis-full md:basis-2/3 flex align-center justify-center items-center">
                <div>
                  <h2 class="font-bold text-center ${element.color_text} text-xl  md:text-2xl">${element.text1}</h2>
                  <h2 class="font-bold text-center ${element.color_text} text-xl  md:text-2xl">${element.text2}</h2>
                </div>
            </div>
          </div>
      </section>
        `);
      flag = 2;
    } else {
      $("#secciones-servicios").append(`
    <section class="overflow-hidden">
      <div class="flex flex-col md:flex-row">
        <div class="bg-[${element.color}] basis-full md:basis-2/3 h-60 flex align-center justify-center items-center">
            
            <div>
              <h2 class="font-bold text-center ${element.color_text} text-xl  md:text-2xl">${element.text1}</h2>
              <h2 class="font-bold text-center ${element.color_text} text-xl  md:text-2xl">${element.text2}</h2>
            </div>
        </div>
        <div class="bg-[${element.color}] basis-full md:basis-1/3 h-60">
             <img src="./assets/img/servicios/${element.src}" class="w-full mb-5" alt="">
        </div>
      </div>
  </section>
    `);
      flag = 1;
    }
  });
}

function modalServicioMantenimientos() {
  Swal.fire({
    html: `
      <div class="container" id="container-services-mtto">
      <a href="#" class="flex items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl dark:border-gray-700">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Servicios de mantenimiento</h5>
        <p class="mb-3 font-normal text-gray-700">Además de brindar servicios de mantenimiento a Compresores de aire, Chiller, Generadores Eléctricos industriales, Subestaciones eléctricas.</p>
    </div>
    
    </a>
    <div class="flex flex-row mt-5">
      <div class="basis-1/2 sm:basis-1/1"><img class="object-cover rounded-t-lg h-96 md:h-auto md:w-60 md:rounded-none md:rounded-s-lg" src="./assets/img/servicios/mantenimientos_1.png" alt="">
      </div>
      <div class="basis-1/2 sm:basis-1/1"><img class="object-cover rounded-t-lg h-96 md:h-auto md:w-60 md:rounded-none md:rounded-s-lg" src="./assets/img/servicios/mantenimientos_2.png" alt="">
      </div>
    </div>
    <div class="flex flex-row mt-5">
      <div class="basis-1/2 sm:basis-1/1"><img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-60 md:rounded-none md:rounded-s-lg" src="./assets/img/servicios/mantenimientos_3.png" alt="">
      </div>
      <div class="basis-1/2 sm:basis-1/1"><img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-60 md:rounded-none md:rounded-s-lg" src="./assets/img/servicios/mantenimientos_4.png" alt="">
      </div>
    </div>

      </div>
    `,
    width: 'auto',
    confirmButtonText: 'Entendido',
    showCloseButton: true,

    didOpen: function(){
      if (windowWidth < 640){
        console.log('lol');
        $("#container-services-mtto").empty().append(
          `
          <a href="#" class="flex items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700">
          <div class="flex flex-col justify-between p-4 leading-normal">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Servicios de mantenimiento</h5>
              <p class="mb-3 font-normal text-gray-700">Además de brindar servicios de mantenimiento a Compresores de aire, Chiller, Generadores Eléctricos industriales, Subestaciones eléctricas.</p>
          </div>
          
          </a>
          <div class="flex flex-col mt-5">
            <div class="basis-1/1"><img class="object-cover rounded-t-lg md:rounded-none md:rounded-s-lg" src="./assets/img/servicios/mantenimientos_1.png" alt="">
            </div>
            <div class="basis-1/1"><img class="object-cover rounded-t-lg md:rounded-none md:rounded-s-lg" src="./assets/img/servicios/mantenimientos_2.png" alt="">
            </div>
          </div>
          <div class="flex flex-col mt-5">
            <div class="basis-1/1"><img class="object-cover w-full rounded-t-lg md:rounded-none md:rounded-s-lg" src="./assets/img/servicios/mantenimientos_3.png" alt="">
            </div>
            <div class="basis-1/1"><img class="object-cover w-full rounded-t-lg md:rounded-none md:rounded-s-lg" src="./assets/img/servicios/mantenimientos_4.png" alt="">
            </div>
          `
        )
      }
    },
  });
}

function modalServicioAsesoriaYReportes() {
  Swal.fire({
    html: `
    <div class="container mx-auto">
    <h2 class="text-3xl font-bold text-gray-800 mb-4">Inspección termográfica de equipos eléctricos de potencia</h2>
  
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div>
        <h3 class="text-2xl font-semibold text-gray-800">Servicios ofrecidos</h3>
  
        <ul class="list-disc list-inside text-start text-start text-gray-600">
          <li>Inspección termográfica de equipos eléctricos de potencia:</li>
            <ul class="list-disc list-inside ml-4">
              <li>Interruptores</li>
              <li>Motores</li>
              <li>Arrancadores</li>
              <li>Centros de carga</li>
            </ul>
          <li>Corrección de puntos calientes en subestaciones eléctricas en alta y media tensión.</li>
          <li>Implementación de programas de mantenimiento predictivo de termografías en subestaciones y cuartos eléctricos.</li>
        </ul>
      </div>
  
      <div>
        <h3 class="text-2xl font-semibold text-gray-800">Beneficios de la inspección termográfica</h3>
  
        <ul class="list-disc list-inside text-start text-gray-600">
          <li>Detección temprana de fallas en equipos eléctricos.</li>
          <li>Reducción de costos de mantenimiento no planificado.</li>
          <li>Mejora de la confiabilidad y seguridad de las instalaciones eléctricas.</li>
          <li>Prolongación de la vida útil de los equipos eléctricos.</li>
        </ul>
      </div>
    </div>
  
    <div class="grid grid-cols-1 gap-4">
         <img src="./assets/img/servicios/reporte_cert.png" class="m-auto mt-5 w-4/5 mb-5" alt="">
    </div>
  </div>

    `,
    width:'auto',
    confirmButtonText: 'Entendido',
    showCloseButton: true,
  });
}

function modalServicioImplementacion() {
  Swal.fire({
    html: `
    <div class="container mx-auto">
        <a href="#" class="flex items-center bg-white m-auto border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl dark:border-gray-700">
          <div class="flex flex-col justify-between p-4 leading-normal">
              <h3 class="text-lg m-auto font-bold text-gray-800">Implementamos lazos de control de variables de proceso, sistemas automatizados que le permiten:

              </h3>
              <ul class="mt-3 p-5 list-disc	text-start m-auto">
                <li class="text-gray-600">Mayor eficiencia</li>
                <li class="text-gray-600">Mejor calidad del producto</li>
                <li class="text-gray-600">Reducción de costos</li>
                <li class="text-gray-600">Aumento de la productividad</li>
                <li class="text-gray-600">Mayor seguridad</li>
              </ul>
          </div>
        </a>
  
        <div class="grid grid-cols-1 gap-4">
            <img src="./assets/img/servicios/implementacion_graph.png" class="m-auto mt-5 w-4/5 mb-5" alt="">
        </div>
    </div>
    `,
    width:'auto',
    confirmButtonText: 'Entendido',
    showCloseButton: true,
  });
}

function modalServicioInstalaciones() {
  Swal.fire({
    html: `
    <div class="container mx-auto">
        <a href="#" class="flex items-center bg-white m-auto border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl dark:border-gray-700">
          <div class="flex flex-col justify-between p-4 leading-normal">
              <h3 class="text-lg m-auto font-bold text-gray-800">
              Nuestro equipo de Proselein se dedica a diseñar, instalar y mantener sistemas eléctricos personalizados, adaptados a las necesidades específicas de cada industria.
              </h3>
          </div>
        </a>
  
        <div class="grid grid-cols-1 gap-4">
            <img src="./assets/img/servicios/instalacion_electrica.png" class="m-auto mt-5 w-4/5 mb-5" alt="">
        </div>
    </div>
    `,
    width:'auto',
    confirmButtonText: 'Entendido',
    showCloseButton: true,
  });
}

