flag = 1;
let servicios =[
    {color_text:'text-gray-800', text1: 'Instalaciones', text2:'Eléctricas Industriales', src: 'instalaciones.jpg', color:'#E8E9D3'},
    {color_text:'text-gray-800', text1: 'Mantenimiento a subestaciones eléctricas ', text2:'en media y alta tensión', src: 'subestacion.png', color:'#C2AA92'},
    {color_text:'text-white', text1: 'Pruebas eléctricas a equipo primario ', text2:'(Resistencias de Aislamiento, TTR, Resistencia óhmica, Factor de potencia, Rigidez dialéctrico al aceite, prueba de disparo relevaodres de protección, entre otras.', src: 'pruebas.png', color:'#3F5547'},
    {color_text:'text-white', text1: 'Análisis de aceite de transformadores', text2:'mediante Cromatografia de gases disueltos y Fisicoquímicos.', src: 'analisis.png', color:'#8C9F9E'},
    {color_text:'text-white', text1: 'Integración de soluciones', text2:'eléctricas industriales.', src: 'integracion.png', color:'#687876'},
    {color_text:'text-white', text1: 'Implementación de soluciones de instrumentación', text2:'y control para procesos químicos y no químicos.', src: 'implementacion.png', color:'#589ED6'},
    {color_text:'text-white', text1: 'Venta de equipo eléctrico y', text2:'de instrumentación.', src: 'instrumentacion.jpeg', color:'#B7934C'},
]


servicios.forEach(element => {
    if(flag == 1){
        $("#secciones-servicios").append(`
        <section class="overflow-hidden">
          <div class="flex">
            <div class="bg-[${element.color}] basis-1/3 h-60">
                <img src="./assets/img/servicios/${element.src}" class="w-full mb-5" alt="">
            </div>
            <div class="bg-[${element.color}] basis-2/3 flex align-center justify-center items-center">
                <div>
                  <h2 class="font-bold text-center ${element.color_text} text-2xl">${element.text1}</h2>
                  <h2 class="font-bold text-center ${element.color_text} text-2xl">${element.text2}</h2>
                </div>
            </div>
          </div>
      </section>
        `)
        flag = 2;
    }else{
        $("#secciones-servicios").append(`
    <section class="overflow-hidden">
      <div class="flex">
        <div class="bg-[${element.color}] basis-2/3 flex align-center justify-center items-center">
            
            <div>
              <h2 class="font-bold text-center ${element.color_text} text-2xl">${element.text1}</h2>
              <h2 class="font-bold text-center ${element.color_text} text-2xl">${element.text2}</h2>
            </div>
        </div>
        <div class="bg-[${element.color}] basis-1/3 h-60">
             <img src="./assets/img/servicios/${element.src}" class="w-full mb-5" alt="">
        </div>
      </div>
  </section>
    `)
    flag = 1;
    }
  
});