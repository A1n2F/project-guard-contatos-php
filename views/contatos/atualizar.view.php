<?php $validacoes = flash()->get('validacoes'); ?>

<div class="flex items-center mr-16">
    <div class="w-[160px] h-screen">
        <div class="flex flex-col items-center justify-between h-full py-12">
            <div>
                <img src="../images/logoSemNome.svg" alt="">
            </div>

            <div class="flex flex-col gap-3">
                <a href="/contatos" class="hover:scale-110 bg-[#1B1B1B] p-3 rounded-xl hover:bg-lime-500 transition-colors">
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
                <h1 class="text-gray-200 text-3xl font-bold">Atualizar Contato</h1>
                        <a href="/contatos" class="text-gray-300 hover:text-lime-500 transition-colors rounded-xl cursor-pointer">
                            Voltar
                        </a>
            </div>

            <div class="h-[700px] mt-10 gap-10 flex items-center justify-center">
                <div class="w-[575px] h-[570px] ">
                    <form action="/contatos/atualizar" method="post" id="form-atualizacao" class="flex flex-col space-y-5">
                        <input type="hidden" name="__method" value="PUT" />
                        <input type="hidden" name="id" />
                        <label>
                            <h1 class="text-xl text-gray-200 font-bold mb-2">Nome</h1>
                            <input
                                name="nome"
                                type="text" 
                                placeholder="Nome do contato" 
                                class="border border-gray-600 text-gray-300 w-full px-3 py-2 rounded-xl focus:outline-none"
                                value="<?=request()->post('nome')?>"
                            />

                            <?php if(isset($validacoes['nome'])): ?>
                                <span class="flex items-center gap-2 mt-2">
                                    <img src="../images/error.svg" alt="">
                                    <p class="text-red-400"><?=$validacoes['nome'][0]?></p>
                                </span>
                            <?php endif; ?>
                        </label>

                        <label>
                            <h1 class="text-xl text-gray-200 font-bold mb-2">Status</h1>
                            <input
                                name="status"
                                type="text" 
                                placeholder="Status do contato" 
                                class="border border-gray-600 text-gray-300 w-full px-3 py-2 rounded-xl focus:outline-none"
                                value="<?=request()->post('status')?>"
                            />

                            <?php if(isset($validacoes['status'])): ?>
                                <span class="flex items-center gap-2 mt-2">
                                    <img src="../images/error.svg" alt="">
                                    <p class="text-red-400"><?=$validacoes['status'][0]?></p>
                                </span>
                            <?php endif; ?>
                        </label>

                        <label>
                            <h1 class="text-xl text-gray-200 font-bold mb-2">Telefone</h1>
                            <input
                                name="telefone"
                                type="text" 
                                placeholder="Telefone do contato" 
                                class="border border-gray-600 text-gray-300 w-full px-3 py-2 rounded-xl focus:outline-none"
                                value="<?=request()->post('telefone')?>"
                            />

                            <?php if(isset($validacoes['telefone'])): ?>
                                <span class="flex items-center gap-2 mt-2">
                                    <img src="../images/error.svg" alt="">
                                    <p class="text-red-400"><?=$validacoes['telefone'][0]?></p>
                                </span>
                            <?php endif; ?>
                        </label>

                        <label>
                            <h1 class="text-xl text-gray-200 font-bold mb-2">Email</h1>
                            <input
                                name="email"
                                type="email" 
                                placeholder="Email do contato" 
                                class="border border-gray-600 text-gray-300 w-full px-3 py-2 rounded-xl focus:outline-none"
                                value="<?=request()->post('email')?>"
                            />

                            <?php if(isset($validacoes['email'])): ?>
                                <span class="flex items-center gap-2 mt-2">
                                    <img src="../images/error.svg" alt="">
                                    <p class="text-red-400"><?=$validacoes['email'][0]?></p>
                                </span>
                            <?php endif; ?>
                        </label>

                        <div class="flex justify-end">
                            <button type="submit" id="form-atualizacao" class="p-3 bg-gray-500 text-gray-300 w-20 hover:bg-lime-600 transition-colors rounded-xl cursor-pointer">
                                Atualizar
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>