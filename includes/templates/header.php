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