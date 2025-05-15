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
                <h1 class="text-gray-200"><?=auth()->nome?></h1>
            </div>
        </div>
    </div>

    <div class="w-full h-screen py-10">
        <div class="bg-[#1B1B1B] w-full h-full rounded-4xl p-10">
            <div class="flex items-center justify-between">
                <h1 class="text-gray-200 text-3xl font-bold">Lista de contatos</h1>
                <form action="" class="flex flex-col relative">
                    <div class="flex items-center gap-3">
                        <input 
                            name="pesquisar" 
                            type="text" 
                            placeholder="Pesquisar" 
                            class="p-3 w-[420px] text-gray-300 border border-gray-500 rounded-xl" 
                            value="<?=isset($_GET['pesquisar']) ? $_GET['pesquisar'] : ''?>"
                        />

                        <a href="/contatos/criar" class="p-3 bg-gray-500 text-gray-300 hover:bg-gray-600 transition-colors rounded-xl cursor-pointer">
                            + Adicionar contato
                        </a>
                        <a href="/mostrar" class="bg-gray-500 p-[15px] text-gray-300 hover:bg-gray-600 transition-colors rounded-xl cursor-pointer">
                            <img src="images/block.svg" alt="">
                        </a>
                    </div>

                    <div class="w-full absolute right-90 top-2">
                        <?php require base_path('views/partials/_mensagem.view.php'); ?>
                    </div>
                </form>
            </div>

            <div class="h-[700px] mt-10 gap-10 flex items-center">
                <div class="bg-lime-500 h-full w-[100px] flex flex-col items-center text-gray-700 text-xl py-2 rounded-2xl cursor-pointer">

                    <?php require base_path('views/partials/_list.view.php'); ?>
                </div>

                <div class="w-full h-full">
                    <div class="border-b border-gray-600">
                        <h1 class="mb-8 text-2xl text-gray-200 font-bold"><?=isset($_GET['pesquisar']) ? $_GET['pesquisar'] : ''?></h1>
                    </div>

                    <div class="flex items-center justify-start gap-80 mt-6">
                    <div class="flex flex-col w-[200px]">
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
    
                
                  <h1 class="text-2xl text-gray-200 text-center mt-30">Nenhum contato encontrado.</h1> 
                </div>
            </div>
        </div>
    </div>
</div>