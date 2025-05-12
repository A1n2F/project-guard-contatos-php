<div class="flex items-center justify-between w-screen h-screen">
    <div class="w-full h-screen relative">
        <img src="images/logo.svg" alt=""  class="mt-8 ml-8 absolute">
        <img src="images/background.png" alt="" class="w-full h-screen">
    </div>
    <div class="bg-[#1B1B1B] w-[1000px] h-screen flex items-center justify-center">
        <div class="flex flex-col items-center w-full relative">
            <div class="absolute text-center -top-32 right-10">
                <p class="text-gray-200">Já possui uma conta?</p>
                <a href="/login" class="text-lime-400 hover:text-lime-500">Acessar conta</a>
            </div>

            <form method="POST" action="/registrar" class="w-full px-40">
                <?php 
                    $validacoes = flash()->get('validacoes'); 
                ?>

                <h1 class="text-3xl text-gray-200 font-bold mb-10">Crie a sua conta</h1>

                <div>
                    <p class="text-gray-200 text-xl mb-2">Nome</p>

                    <input 
                        type="text" 
                        placeholder="Digite seu nome" 
                        class="border border-gray-700 px-2 py-3 w-full rounded-lg text-gray-100" 
                        name="nome"
                    />

                    <?php if(isset($validacoes['nome'])): ?>
                        <span class="flex items-center gap-2 mt-2">
                            <img src="images/error.svg" alt="">
                            <p class="text-gray-200"><?=$validacoes['nome'][0]?></p>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="mt-6">
                    <p class="text-gray-200 text-xl mb-2">E-mail</p>

                    <input 
                        type="text" 
                        placeholder="Digite seu email" 
                        class="border border-gray-700 px-2 py-3 w-full rounded-lg text-gray-100" 
                        name="email"
                    />

                    <?php if(isset($validacoes['email'])): ?>
                        <span class="flex items-center gap-2 mt-2">
                            <img src="images/error.svg" alt="">
                            <p class="text-gray-200"><?=$validacoes['email'][0]?></p>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="mt-6">
                    <p class="text-gray-200 text-xl mb-2">Senha</p>

                    <input 
                        type="password" 
                        placeholder="Digite sua senha" 
                        class="border border-gray-700 px-2 py-3 w-full rounded-lg text-gray-100" 
                        name="senha"   
                    />
                
                    <?php if(isset($validacoes['senha'])): ?>
                        <span class="flex items-center gap-2 mt-2">
                            <img src="images/error.svg" alt="">
                            <p class="text-gray-200"><?=$validacoes['senha'][0]?></p>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="mt-6">
                    <p class="text-gray-200 text-xl mb-2">Repetir senha</p>

                    <input 
                        type="password" 
                        placeholder="Repita sua senha para confirmar" 
                        class="border border-gray-700 px-2 py-3 w-full rounded-lg text-gray-100" 
                        name="confirmed"    
                    />
                </div>

                <div class="flex items-center justify-end mt-6">
                    <button class="bg-lime-500 p-3 rounded-xl font-medium hover:bg-lime-600 transition-colors cursor-pointer">
                        Criar conta
                    </button>
                </div>
            </form>
        </div>
    </div>



</div>