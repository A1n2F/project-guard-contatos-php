<div class="flex items-center justify-between w-screen h-screen">
    <div class="w-full h-screen relative">
        <img src="images/logo.svg" alt=""  class="mt-8 ml-8 absolute">
        <img src="images/background.png" alt="" class="w-full h-screen">
    </div>
    <div class="bg-[#1B1B1B] w-[1000px] h-screen flex items-center justify-center">
        <div class="flex flex-col items-center w-full relative">
            <div class="absolute text-center -top-60 right-10">
                <p class="text-gray-200">Ainda não possui uma conta?</p>
                <a href="/registrar" class="text-lime-400 hover:text-lime-500">Clique para cadastrar</a>
            </div>

            <form method="post" action="/login" class="w-full px-40">
                <?php 
                    $validacoes = flash()->get('validacoes'); 
                    $post = flash()->get('mensagem');
                ?>

                <h1 class="text-3xl text-gray-200 font-bold mb-10">Acessar conta</h1>

                <?php if($post): ?>
                    <span class="flex items-center gap-2 mb-2">
                        <p class="text-gray-800 bg-green-500 px-3 py-2 rounded-xl">Cadastrado com sucesso!</p>
                    </span>
                <?php endif; ?>
                <div>
                    <p class="text-gray-200 text-xl mb-2">E-mail</p>

                    <input 
                        name="email" 
                        type="text" 
                        placeholder="Digite seu email" 
                        class="border border-gray-700 px-2 py-3 w-full rounded-lg text-gray-100" 
                        value="<?=old('email')?>"
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
                        name="senha" 
                        type="password" 
                        placeholder="Digite sua senha" 
                        class="border border-gray-700 px-2 py-3 w-full rounded-lg text-gray-100" 
                        value="<?=old('senha')?>"
                    />

                    <?php if(isset($validacoes['senha'])): ?>
                        <span class="flex items-center gap-2 mt-2">
                            <img src="images/error.svg" alt="">
                            <p class="text-gray-200"><?=$validacoes['senha'][0]?></p>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="flex items-center justify-end mt-6">
                    <button class="bg-lime-500 p-3 rounded-xl font-medium hover:bg-lime-600 transition-colors cursor-pointer">
                        Acessar conta
                    </button>
                </div>
            </form>
        </div>
    </div>



</div>