<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookwise</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<?php
require_once 'dados.php';
?>

<body class="bg-stone-950 text-stone-200">
    <header class="bg-stone-900">
        <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4">
            <div class="font-bold text-xl tracking-wide">Book Wise</div>

            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-lime-500">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>

            <ul>
                <li><a href="/login" class="hover:underline">Fazer Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">
        <form class="w-full flex space-x-2 mt-6">
            <input type="text" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" name="pesquisar" id="" placeholder="pesquisar...">
            <button type="submit">🔎</button>
        </form>

        <section class="grid grid-cola-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php foreach ($livros as $livro) : ?>
                <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                    <div class="flex">
                        <div class="w-1/3 mt-2">Imagem</div>
                        <div>
                            <div class="font-semibold mt-2"><a href="/livro.php?id=<?= $livro['id'] ?>" class="font-semibold hover:underline"><?= $livro['titulo'] ?></a></div>
                            <div class="text-xs italic mt-2"><?= $livro['autor'] ?></div>
                            <div class="text-xs italic mt-2">⭐⭐⭐⭐⭐ (<?= $livro['avaliacoes'] ?> avaliações)</div>
                        </div>
                    </div>

                    <div class="text-sm mt-4"><?= $livro['descricao'] ?></div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>
</body>

</html>