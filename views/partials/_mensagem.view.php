<?php if($mensagem = flash()->get('mensagem')) : ?>
    <span class="flex items-center gap-2 mb-2">
        <p class="text-gray-800 bg-green-500 px-3 py-2 rounded-xl"><?=$mensagem?></p>
    </span>
<?php endif; ?>