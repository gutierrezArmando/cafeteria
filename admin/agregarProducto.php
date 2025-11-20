<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6 max-w-2xl">
        <h2 class="text-3xl font-bold text-center text-amber-900 mb-8">
            <span role="img" aria-label="Café">➕</span> Agregar Nuevo Producto
        </h2>

        <!-- <form action="/api/productos" method="POST" enctype="multipart/form-data"  -->
        <form action="procesaInfo.php" method="GET" enctype="multipart/form-data" 
              class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
            
            <div class="mb-5">
                <label for="nombre" class="block text-sm font-medium text-gray-700 mb-2">Nombre del Producto</label>
                <input type="text" id="nombre" name="nombre" required maxlength="100"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-amber-500 focus:border-amber-500 transition duration-150"
                       placeholder="Ej: Espresso Premium o Tarta de Manzana">
            </div>

            <div class="mb-5">
                <label for="precio" class="block text-sm font-medium text-gray-700 mb-2">Precio ($)</label>
                <input type="number" id="precio" name="precio" required min="0.01" step="0.01"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-amber-500 focus:border-amber-500 transition duration-150"
                       placeholder="Ej: 4.50">
            </div>

            <div class="mb-5">
                <label for="categoria" class="block text-sm font-medium text-gray-700 mb-2">Categoría</label>
                <select id="categoria" name="categoria" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-amber-500 focus:border-amber-500 bg-white transition duration-150">
                    <option value="">Seleccione una categoría</option>
                    <option value="Cafe">Café</option>
                    <option value="Pastel">Pastel</option>
                    <option value="Bebida Fria">Bebida Fría</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>
            
            <div class="mb-5">
                <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-2">Descripción</label>
                <textarea id="descripcion" name="descripcion" rows="4"
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-amber-500 focus:border-amber-500 transition duration-150"
                          placeholder="Detalles sobre el sabor, ingredientes y preparación."></textarea>
            </div>

            <div class="mb-6">
                <label for="imagen_url" class="block text-sm font-medium text-gray-700 mb-2">URL de la Imagen (Opcional)</label>
                <input type="text" id="imagen_url" name="imagen_url" maxlength="255"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-amber-500 focus:border-amber-500 transition duration-150"
                       placeholder="Ej: assets/images/nuevo-cafe.png">
            </div>

            <button type="submit" 
                    class="w-full bg-amber-700 text-white font-bold py-3 px-4 rounded-lg hover:bg-amber-800 transition duration-300 transform hover:scale-[1.01] focus:outline-none focus:ring-4 focus:ring-amber-300">
                Guardar Producto
            </button>
        </form>
        </div>
</section>
</body>
</html>