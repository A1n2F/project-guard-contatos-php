<div class="flex items-center mr-16">
    <div class="w-[160px] h-screen">
        <div class="flex flex-col items-center justify-between h-full py-12">
            <div>
                <img src="../images/logoSemNome.svg" alt="">
            </div>

            <div class="flex flex-col gap-3">
                <a href="/dashboard" class="hover:scale-110 bg-[#1B1B1B] p-3 rounded-xl hover:bg-lime-500 transition-colors">
                    <img src="../images/user.svg" alt="">
                </a>
                
                <img src="../images/engineer.svg" alt="" class="p-3 bg-[#1B1B1B] rounded-xl hover:bg-lime-500 transition-colors">
                
                <a href="/logout" class="hover:scale-110 bg-[#1B1B1B] p-3 rounded-xl hover:bg-lime-500 transition-colors">
                    <img src="../images/logout.svg" alt="">
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
                <h1 class="text-gray-200 text-3xl font-bold">Criar Contato</h1>
                        <a href="/dashboard" class="text-gray-300 hover:text-lime-500 transition-colors rounded-xl cursor-pointer">
                            Voltar
                        </a>
            </div>

            <div class="h-[700px] mt-10 gap-10 flex items-center justify-center">
                <div class="w-[575px] h-[570px] ">
                    <form action="/contatos/criar" method="post" class="flex flex-col space-y-5">
                        <label>
                            <h1 class="text-xl text-gray-200 font-bold mb-2">Nome</h1>
                            <input
                                type="text" 
                                placeholder="Nome do contato" 
                                class="border border-gray-600 text-gray-300 w-full px-3 py-2 rounded-xl focus:outline-none"
                            />
                        </label>

                        <label>
                            <h1 class="text-xl text-gray-200 font-bold mb-2">Status</h1>
                            <input
                                type="text" 
                                placeholder="Status do contato" 
                                class="border border-gray-600 text-gray-300 w-full px-3 py-2 rounded-xl focus:outline-none"
                            />
                        </label>

                        <label>
                            <h1 class="text-xl text-gray-200 font-bold mb-2">Telefone</h1>
                            <input
                                type="text" 
                                placeholder="Telefone do contato" 
                                class="border border-gray-600 text-gray-300 w-full px-3 py-2 rounded-xl focus:outline-none"
                            />
                        </label>

                        <label>
                            <h1 class="text-xl text-gray-200 font-bold mb-2">Email</h1>
                            <input
                                type="email" 
                                placeholder="Email do contato" 
                                class="border border-gray-600 text-gray-300 w-full px-3 py-2 rounded-xl focus:outline-none"
                            />
                        </label>

                        <div class="flex justify-end">
                            <button class="p-3 bg-gray-500 text-gray-300 w-20 hover:bg-lime-600 transition-colors rounded-xl cursor-pointer">
                                Salvar
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>