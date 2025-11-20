<?php
    // archivo a la base de datos
    require 'includes/funciones.php';
    $consulta = obtenerProductos();
    require 'includes/templates/header.php';

?>

    <section id="inicio" class="hero-bg h-96 flex items-center justify-center text-center">
        <div class="bg-black bg-opacity-50 p-8 rounded-lg">
            <h1 class="text-4xl sm:text-6xl font-extrabold text-white mb-4">El Mejor Café de la Ciudad</h1>
            <p class="text-lg text-gray-200 mb-6">Un espacio para relajarse y disfrutar.</p>
            <a href="#menu" class="inline-block bg-amber-700 text-white font-bold py-3 px-8 rounded-full hover:bg-amber-800 transition duration-300 transform hover:scale-105">Ver Menú</a>
        </div>
    </section>

    <section id="menu" class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-amber-900 mb-10">Nuestro Menú</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while( $producto = mysqli_fetch_assoc($consulta)){ ?>
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                        <img src="<?php echo $producto["imagen_url"] ?>" alt="Espresso" class="w-full h-50 object-cover rounded-md mb-4">
                        <h3 class="text-xl font-semibold text-gray-900"><?php echo $producto["nombre"] ?></h3>
                        <p class="text-amber-700 font-bold mt-2"><?php echo $producto["precio"] ?></p>
                        <p class="text-gray-600 mt-1"><?php echo $producto["descripcion"] ?></p>
                    </div>
                <?php } ?>
                <!-- <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="assets/images/expressoclasico.png" alt="Espresso" class="w-full h-50 object-cover rounded-md mb-4">
                    <h3 class="text-xl font-semibold text-gray-900">Espresso Clásico</h3>
                    <p class="text-amber-700 font-bold mt-2">$3.50</p>
                    <p class="text-gray-600 mt-1">El corazón de todo, intenso y aromático.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="assets/images/lattecremoso.png" alt="Latte" class="w-full h-50 object-cover rounded-md mb-4">
                    <h3 class="text-xl font-semibold text-gray-900">Latte Cremoso</h3>
                    <p class="text-amber-700 font-bold mt-2">$4.99</p>
                    <p class="text-gray-600 mt-1">Perfecta armonía de leche vaporizada y espresso.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="assets/images/pastelchocolate.png" alt="Pastel" class="w-full h-50 object-cover rounded-md mb-4">
                    <h3 class="text-xl font-semibold text-gray-900">Pastel de Chocolate</h3>
                    <p class="text-amber-700 font-bold mt-2">$5.50</p>
                    <p class="text-gray-600 mt-1">El acompañamiento ideal para tu bebida.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="assets/images/cappuccino.png" alt="Pastel" class="w-full h-50 object-cover rounded-md mb-4">
                    <h3 class="text-xl font-semibold text-gray-900">Cappuccino Clásico</h3>
                    <p class="text-amber-700 font-bold mt-2">$5.50</p>
                    <p class="text-gray-600 mt-1">Una bebida icónica con partes iguales de espresso, leche vaporizada y una generosa capa de espuma de leche. Perfecto para quienes disfrutan de una textura suave y un sabor equilibrado.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="assets/images/mocha.png" alt="Pastel" class="w-full h-50 object-cover rounded-md mb-4">
                    <h3 class="text-xl font-semibold text-gray-900">Mocha con Crema Batida</h3>
                    <p class="text-amber-700 font-bold mt-2">$5.50</p>
                    <p class="text-gray-600 mt-1">La indulgencia hecha café. Una deliciosa combinación de espresso, chocolate, leche vaporizada y coronado con una abundante porción de crema batida y un toque de drizzle de chocolate.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <img src="assets/images/frutos.png" alt="Pastel" class="w-full h-50 object-cover rounded-md mb-4">
                    <h3 class="text-xl font-semibold text-gray-900">Cheesecake de Frutos Rojos</h3>
                    <p class="text-amber-700 font-bold mt-2">$5.50</p>
                    <p class="text-gray-600 mt-1">Una tarta de queso suave y cremosa sobre una base de galleta, coronada con una salsa brillante de frutos rojos frescos. Un postre ligero y refrescante.</p>
                </div> -->
            </div>
            
            <div class="text-center mt-10">
                 <a href="#" class="inline-block border border-amber-700 text-amber-700 font-bold py-3 px-8 rounded-full hover:bg-amber-700 hover:text-white transition duration-300">Menú Completo</a>
            </div>
        </div>
    </section>
    
    <section id="ubicacion" class="bg-amber-900 text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-6">Visítanos</h2>
            <p class="text-xl mb-4">📍 Calle Falsa 123, Ciudad de los Sabores.</p>
            <p class="text-xl mb-8">Horario: Lun-Vie 7:00am - 8:00pm | Sáb-Dom 8:00am - 6:00pm</p>
            <a href="mailto:info@delicioso.com" id="contacto" class="text-lg underline hover:text-amber-300 transition duration-300">info@delicioso.com</a>
        </div>
    </section>

<?php
    require 'includes/templates/footer.php';
?>