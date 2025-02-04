<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    </head>
    <body class="antialiased">
        <!-- <div class="bg-white p-8 max-w-4xl mx-auto">
            <h1 class="text-2xl font-bold mb-4">Escolher Data</h1>
            <p class="text-gray-600 mb-6">Selecione um dia específico</p>

            <div class="space-y-6">
                <div>
                    <h2 class="font-semibold text-lg">sábado, 22 de julho de 2023</h2>
                    <div class="grid grid-cols-4 gap-4 mt-2">
                        <button class="bg-blue-500 text-white p-2 rounded">12:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">13:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">14:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">15:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">16:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">17:00</button>
                    </div>
                </div>

                <div>
                    <h2 class="font-semibold text-lg">segunda-feira, 24 de julho de 2023</h2>
                    <div class="grid grid-cols-4 gap-4 mt-2">
                        <button class="bg-blue-500 text-white p-2 rounded">09:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">10:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">11:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">12:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">13:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">14:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">15:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">16:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">17:00</button>
                    </div>
                </div>

                <div>
                    <h2 class="font-semibold text-lg">terça-feira, 25 de julho de 2023</h2>
                    <div class="grid grid-cols-4 gap-4 mt-2">
                        <button class="bg-blue-500 text-white p-2 rounded">11:45</button>
                        <button class="bg-blue-500 text-white p-2 rounded">12:45</button>
                        <button class="bg-blue-500 text-white p-2 rounded">13:45</button>
                        <button class="bg-blue-500 text-white p-2 rounded">14:45</button>
                        <button class="bg-blue-500 text-white p-2 rounded">15:45</button>
                        <button class="bg-blue-500 text-white p-2 rounded">16:45</button>
                    </div>
                </div>

                <div>
                    <h2 class="font-semibold text-lg">quarta-feira, 26 de julho de 2023</h2>
                    <div class="grid grid-cols-4 gap-4 mt-2">
                        <button class="bg-blue-500 text-white p-2 rounded">09:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">+ Criar fila de espera</button>
                        <button class="bg-blue-500 text-white p-2 rounded">11:00</button>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex justify-between">
                <button class="text-blue-500">INÍCIO</button>
                <button class="text-blue-500">AGENDAR</button>
                <button class="text-blue-500">RESERVAS</button>
                <button class="text-blue-500">CARRINHO</button>
                <button class="text-blue-500">MAIS</button>
            </div>
        </div> -->

        <div class="bg-white p-4">
            <h1 class="text-xl font-bold mb-4">Escolher Data</h1>
            <p class="text-gray-600 mb-4">Selecione um dia específico</p>

            <div class="space-y-4">
                <div>
                    <h2 class="font-semibold">sábado, 22 de julho de 2023</h2>
                    <div class="grid grid-cols-3 gap-2 mt-2">
                        <button class="bg-blue-500 text-white p-2 rounded">12:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">13:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">14:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">15:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">16:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">17:00</button>
                    </div>
                </div>

                <div>
                    <h2 class="font-semibold">segunda-feira, 24 de julho de 2023</h2>
                    <div class="grid grid-cols-3 gap-2 mt-2">
                        <button class="bg-blue-500 text-white p-2 rounded">09:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">10:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">11:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">12:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">13:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">14:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">15:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">16:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">17:00</button>
                    </div>
                </div>

                <div>
                    <h2 class="font-semibold">terça-feira, 25 de julho de 2023</h2>
                    <div class="grid grid-cols-3 gap-2 mt-2">
                        <button class="bg-blue-500 text-white p-2 rounded">11:45</button>
                        <button class="bg-blue-500 text-white p-2 rounded">12:45</button>
                        <button class="bg-blue-500 text-white p-2 rounded">13:45</button>
                        <button class="bg-blue-500 text-white p-2 rounded">14:45</button>
                        <button class="bg-blue-500 text-white p-2 rounded">15:45</button>
                        <button class="bg-blue-500 text-white p-2 rounded">16:45</button>
                    </div>
                </div>

                <div>
                    <h2 class="font-semibold">quarta-feira, 26 de julho de 2023</h2>
                    <div class="grid grid-cols-3 gap-2 mt-2">
                        <button class="bg-blue-500 text-white p-2 rounded">09:00</button>
                        <button class="bg-blue-500 text-white p-2 rounded">+ Criar fila de espera</button>
                        <button class="bg-blue-500 text-white p-2 rounded">11:00</button>
                    </div>
                </div>
            </div>

            <div class="fixed bottom-0 left-0 right-0 bg-white p-4 flex justify-between border-t">
                <button class="text-blue-500">INÍCIO</button>
                <button class="text-blue-500">AGENDAR</button>
                <button class="text-blue-500">RESERVAS</button>
                <button class="text-blue-500">CARRINHO</button>
                <button class="text-blue-500">MAIS</button>
            </div>
        </div>
    </body>
</html>
