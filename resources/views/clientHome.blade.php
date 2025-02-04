<x-layouts.app title="Agendamento">
    <div class="flex flex-col md:flex-row h-screen bg-gray-100 items-center justify-center p-4">
        <!-- Lado esquerdo com a imagem -->
        <div class="w-full md:w-1/2 flex justify-center items-center p-4">
            <img src="{{ asset('images/agendamento-home-cliente.jpg') }}" alt="Agendamento" class="max-w-full h-auto">
        </div>

        <!-- Lado direito com os botões -->
        <div class="w-full md:w-1/2 flex flex-col space-y-6 items-center">
            <a href="#" 
               class="bg-gradient-to-r from-orange-500 to-sky-400 text-white px-6 md:px-8 py-5 md:py-6 rounded-lg shadow-md flex 
               flex-col items-center justify-center hover:from-orange-600 hover:to-sky-500 transition duration-300 w-full md:w-3/4 max-w-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 md:w-8 h-6 md:h-8 mb-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                </svg>
                <span class="text-base md:text-lg font-semibold">Novo Agendamento</span>
            </a>

            <a href="#" 
               class="bg-gradient-to-r from-sky-400 to-orange-500 text-white px-6 md:px-8 py-5 md:py-6 rounded-lg shadow-md flex 
               flex-col items-center justify-center hover:from-sky-500 hover:to-orange-600 transition duration-300 w-full md:w-3/4 max-w-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 md:w-8 h-6 md:h-8 mb-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V5a2 2 0 012-2h4a2 2 0 012 2v2m-6 4h4m-4 4h4m-7 4h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <span class="text-base md:text-lg font-semibold">Minhas Reservas</span>
            </a>
        </div>
    </div>
</x-layouts.app>
