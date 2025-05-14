<div class="flex items-center mr-16">
    <div class="w-[160px] h-screen">
        <div class="flex flex-col items-center justify-between h-full py-12">
            <div>
                <img src="images/logoSemNome.svg" alt="">
            </div>

            <div class="flex flex-col gap-3">
                <img src="images/userOpen.svg" alt="" class="p-3 bg-[#1B1B1B] rounded-xl">

                <img src="images/engineer.svg" alt="" class="p-3 bg-[#1B1B1B] rounded-xl hover:bg-lime-500 transition-colors cursor-pointer">
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

    <div class="w-full h-screen py-10">
        <div class="bg-[#1B1B1B] w-full h-full rounded-4xl p-10">
            <div class="flex items-center justify-between">
                <h1 class="text-gray-200 text-3xl font-bold">Lista de contatos</h1>
                <form action="">
                    <div class="flex items-center gap-3">
                        <input 
                            name="pesquisar" 
                            type="text" 
                            placeholder="Pesquisar" 
                            class="p-3 w-[420px] text-gray-300 border border-gray-500 rounded-xl" 
                        />

                        <a href="/contatos/criar" class="p-3 bg-gray-500 text-gray-300 hover:bg-gray-600 transition-colors rounded-xl cursor-pointer">
                            + Adicionar contato
                        </a>
                        <a href="/mostrar" class="bg-gray-500 p-[15px] text-gray-300 hover:bg-gray-600 transition-colors rounded-xl cursor-pointer">
                            <img src="images/block.svg" alt="">
                        </a>
                    </div>
                </form>
            </div>

            <div class="h-[700px] mt-10 gap-10 flex items-center">
                <div class="bg-lime-500 h-full w-[100px] flex flex-col items-center text-gray-700 text-xl py-2 rounded-2xl cursor-pointer">

                    <?php require base_path('views/partials/_list.view.php'); ?>

                </div>

                <div class="w-full h-full">
                    <div class="border-b border-gray-600">
                        <h1 class="mb-8 text-2xl text-gray-200 font-bold">C</h1>
                    </div>

                    <div class="flex items-center justify-start gap-80">
                    <div class="flex flex-col mt-6 w-[200px]">
                        <h1 class="text-xl text-gray-400">Nome</h1>
                    </div>

                    <div class="flex gap-35">
                        <span>
                        <h1 class="text-xl text-gray-400 w-[100px]">Telefone</h1>
                        </span>

                        <span>
                        <h1 class="text-xl text-gray-400 w-[200px]">Email</h1>
                        </span>
                    </div>
                </div>

                <div class="flex items-center justify-start gap-80">
                    <div class="flex flex-col max-w-[200px]">
                        <h1 class="text-lg text-gray-200 w-[400px] mt-4">Nome do contato</h1>
                        <h1 class="text-gray-400">Colega</h1>
                    </div>

                    <div class="flex">
                        <span>
                        <h1 class="text-lg text-gray-200 w-[244px]">(99)9 9999999</h1>
                        </span>

                        <span class="max-w-[100px]">
                        <h1 class="text-lg text-gray-200 max-w-[244px]">email@email.com</h1>
                        </span>
                    </div>

                    <div class="flex gap-2">
                        <button class="flex items-center text-gray-200 gap-2 border border-gray-600 px-3 py-2 rounded-xl hover:bg-gray-600
                        transition-colors cursor-pointer">
                            <img src="images/edit.svg" alt="" class="w-4 h-4">
                            Editar
                        </button>
                        
                        <button class="flex items-center text-gray-200 gap-2 border border-gray-600 px-3 py-2 rounded-xl hover:bg-gray-600
                        transition-colors cursor-pointer">
                            <img src="images/openBlock.svg" alt="" class="w-4 h-4">
                        </button>

                        <button class="flex items-center text-gray-200 gap-2 border border-gray-600 px-3 py-2 rounded-xl hover:bg-gray-600
                        transition-colors cursor-pointer">
                            <img src="images/trash.svg" alt="" class="w-4 h-4">
                        </button>
                    </div>

                </div>
                <div class="border-b border-gray-600 w-full mt-6"></div>
                    
                </div>
            </div>
        </div>
    </div>
</div>