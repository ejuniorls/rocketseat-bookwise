<?php
if (!$livro) {
    echo "Livro não encontrado.";
    return;
}
?>

<div class="p-2 rounded border-stone-800 border-2 bg-stone-900 mt-4">
    <div class="flex">
        <div class="w-1/3">imagem</div>

        <div class="space-y-1">
            <div class="font-semibold mt-2">
                <a href="/livro?id=<?= $livro['id'] ?>" class="font-semibold hover:underline">
                    <?= $livro['titulo'] ?>
                </a>
            </div>
            <div class="text-xs italic mt-2"><?= $livro['autor'] ?></div>
            <div class="text-xs italic mt-2">⭐⭐⭐⭐⭐ (<?= $livro['numero_avaliacoes'] ?> avaliações)</div>
        </div>
    </div>

    <div class="text-sm mt-4"><?= $livro['descricao'] ?></div>
</div>
