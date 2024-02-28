$.ajax({
    type: "post",
    url: "./model/catalogo/conectores.php",
    data: {'tipo':1},
    dataType: "json",
    success: function (response) {
        if(response.estatus){
            $("#area-catalogo").empty()
            response.data.forEach(element => {
                $("#area-catalogo").append(`
                  

<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
<a href="#">
    <img class="p-8 rounded-t-lg w-full" src="assets/img/catalogo/P${element.id}.png" alt="product image" />
</a>
<div class="px-5 pb-5">
    <a href="#">
        <h5 class="text-dm font-semibold text-gray-900 dark:text-white">${element.nombre}</h5>
    </a>
   
    <div class="flex items-center justify-between">
        
    </div>
</div>
</div>

                `)
            });
            
        }
    }
});

{/* <div>
<img class="h-auto max-w-full rounded-lg" src="assets/img/catalogo/P${element.id}.png" alt="">
</div> */}