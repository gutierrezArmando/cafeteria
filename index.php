<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafetería MiExpress - Saborea el Momento</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Estilos personalizados para el fondo del hero */
        .hero-bg {
            background-image: url('assets/images/cafeteriaBackground.png'); /* Cambia por tu imagen de café */
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <header class="bg-white shadow-md sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-amber-900">Delicioso</a>
            
            <div class="hidden md:flex space-x-6">
                <a href="#inicio" class="text-gray-600 hover:text-amber-700 transition duration-300">Inicio</a>
                <a href="#menu" class="text-gray-600 hover:text-amber-700 transition duration-300">Menú</a>
                <a href="#ubicacion" class="text-gray-600 hover:text-amber-700 transition duration-300">Ubicación</a>
                <a href="#contacto" class="text-gray-600 hover:text-amber-700 transition duration-300">Contacto</a>
            </div>

            <button class="md:hidden text-gray-600 hover:text-amber-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </nav>
    </header>

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
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
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
                </div>
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

    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto px-6 text-center text-sm">
            <p>&copy; 2025 Cafetería Delicioso. Todos los derechos reservados.</p>
            <div class="mt-2 space-x-4">
                <a href="#" class="hover:text-amber-500">Política de Privacidad</a>
                <a href="#" class="hover:text-amber-500">Términos de Servicio</a>
            </div>
        </div>
    </footer>

</body>
</html>