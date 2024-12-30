/*
console.log($('meta[name="csrf-token"]').attr('content'));
console.log('CSRF Token:', $('meta[name="csrf-token"]').attr('content'));

$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            
        }
    });
});

$("#formAgregarProducto").submit((event)=>{
    event.preventDefault();
    

    var nombre = $("#nombre").val();
    var precio = $("#precio").val();
    var direccionImagen = $("#direccionImagen").val();

    var categoria = $("#categoria").val();

    console.log(nombre, precio,direccionImagen,categoria);

    $.ajax({
        url:"./productos",
        method: "POST",
        data: {"nombre":nombre,"precio":precio,"direccionImagen":direccionImagen,"categoria":categoria},
        success: function(response) {
            alert(response);
        },
        error: function(){
            alert("salio todo mal");
        }
    });
   
})

*/

$(document).ready(function () {
    var carrito = [];
    var total = 0;

    
    $(".btn-agregar").on("click", function () {
        var id = $(this).data("id");
        var nombre = $(this).data("nombre");
        var precio = parseFloat($(this).data("precio"));

       
        carrito.push({ id, nombre, precio });
        total += precio;

      
        actualizarCarrito();
    });

    $("#carrito").on("click", ".btn-eliminar", function () {
        var index = $(this).data("index");
        total -= carrito[index].precio; 
        carrito.splice(index, 1); 

       
        actualizarCarrito();
    });

   
    function actualizarCarrito() {
        var $tbody = $("#carrito tbody");
        $tbody.empty(); 

        carrito.forEach((producto, index) => {
            $tbody.append(`
                <tr>
                    <td>${producto.nombre}</td>
                    <td>$${producto.precio.toFixed(2)}</td>
                    <td><button class="btn btn-danger btn-eliminar" data-index="${index}">Eliminar</button></td>
                </tr>
            `);
        });

        
        $("#total").text(`$${total.toFixed(2)}`);
    }
});