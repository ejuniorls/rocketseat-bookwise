<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookwise</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<?php

$livro = [
    'titulo'            => $_GET['titulo'],
    'autor'             => $_GET['autor'],
    'avaliacao'         => $_GET['avaliacao'],
    'numero_avaliacoes' => $_GET['numero_avaliacoes'],
    'descricao'         => $_GET['descricao']
];

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
            <h1><?= $livro['titulo'] ?></h1>
        </section>
    </main>
</body>

</html>