<div class="flex items-center mr-16">
    <div class="w-[160px] h-screen">
        <div class="flex flex-col items-center justify-between h-full py-12">
            <div>
                <img src="images/logoSemNome.svg" alt="">
            </div>

            <div class="flex flex-col gap-3">
                <img src="images/user.svg" alt="" class="p-3 bg-[#1B1B1B] rounded-xl">

                <img src="images/engineer.svg" alt="" class="p-3 bg-[#1B1B1B] rounded-xl">
                <a href="/logout" class="hover:scale-110 bg-[#1B1B1B] p-3 rounded-xl hover:bg-lime-500 transition-colors">
                    <img src="images/logout.svg" alt="">
                </a>
            </div>

            <div class="text-center">
                <h1 class="text-gray-400">Logado como:</h1>
                <h1 class="text-gray-200"><?=$user->nome?></h1>
            </div>
        </div>
    </div>

    <div class="w-full h-screen py-20">
        <div class="bg-[#1B1B1B] w-full h-full rounded-4xl p-10">
            <div class="flex items-center justify-between">
                <h1 class="text-gray-200 text-3xl font-bold">Lista de contatos</h1>

                <div class="flex items-center gap-3">
                    <input type="text" placeholder="Pesquisar" class="p-3 w-[420px] text-gray-300 border border-gray-500 rounded-xl">
                    <button class="p-3 bg-gray-500 text-gray-300 hover:bg-gray-600 transition-colors rounded-xl cursor-pointer">
                        Adicionar contato
                    </button>
                    <img src="images/block.svg" alt="" class="p-[14px] border border-gray-500 rounded-xl">
                </div>
            </div>
        </div>
    </div>
</div>