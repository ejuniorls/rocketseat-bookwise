<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookwise</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<?php

$livros = [
    [
        'titulo' => 'O Senhor dos Anéis: A Sociedade do Anel',
        'autor' => 'J.R.R. Tolkien',
        'avaliacao' => 4.9,
        'numero_avaliacoes' => 3520,
        'descricao' => 'Uma aventura épica na Terra Média, onde um grupo se une para destruir o Um Anel.'
    ],
    [
        'titulo' => '1984',
        'autor' => 'George Orwell',
        'avaliacao' => 4.8,
        'numero_avaliacoes' => 4785,
        'descricao' => 'Um clássico distópico sobre vigilância, totalitarismo e controle social.'
    ],
    [
        'titulo' => 'Orgulho e Preconceito',
        'autor' => 'Jane Austen',
        'avaliacao' => 4.7,
        'numero_avaliacoes' => 2560,
        'descricao' => 'Uma obra que explora as convenções sociais e o amor na Inglaterra do século XIX.'
    ],
    [
        'titulo' => 'O Pequeno Príncipe',
        'autor' => 'Antoine de Saint-Exupéry',
        'avaliacao' => 4.9,
        'numero_avaliacoes' => 5120,
        'descricao' => 'Uma fábula poética sobre amizade, inocência e valores humanos.'
    ],
    [
        'titulo' => 'Dom Casmurro',
        'autor' => 'Machado de Assis',
        'avaliacao' => 4.5,
        'numero_avaliacoes' => 1340,
        'descricao' => 'A história de Bentinho e Capitu, marcada por ciúmes e suspeitas.'
    ],
    [
        'titulo' => 'Cem Anos de Solidão',
        'autor' => 'Gabriel García Márquez',
        'avaliacao' => 4.8,
        'numero_avaliacoes' => 2750,
        'descricao' => 'A saga da família Buendía, entre realismo mágico e história latino-americana.'
    ],
    [
        'titulo' => 'Harry Potter e a Pedra Filosofal',
        'autor' => 'J.K. Rowling',
        'avaliacao' => 4.9,
        'numero_avaliacoes' => 6500,
        'descricao' => 'O início da jornada mágica de Harry Potter na escola de Hogwarts.'
    ],
    [
        'titulo' => 'O Hobbit',
        'autor' => 'J.R.R. Tolkien',
        'avaliacao' => 4.8,
        'numero_avaliacoes' => 4200,
        'descricao' => 'Bilbo Bolseiro parte para uma inesperada aventura pela Terra Média.'
    ],
    [
        'titulo' => 'A Revolução dos Bichos',
        'autor' => 'George Orwell',
        'avaliacao' => 4.6,
        'numero_avaliacoes' => 3100,
        'descricao' => 'Uma sátira política sobre uma fazenda tomada por animais revolucionários.'
    ],
    [
        'titulo' => 'O Código Da Vinci',
        'autor' => 'Dan Brown',
        'avaliacao' => 4.4,
        'numero_avaliacoes' => 4800,
        'descricao' => 'Um thriller repleto de enigmas históricos e simbologia religiosa.'
    ],
    [
        'titulo' => 'Memórias Póstumas de Brás Cubas',
        'autor' => 'Machado de Assis',
        'avaliacao' => 4.6,
        'numero_avaliacoes' => 1780,
        'descricao' => 'Uma narrativa inovadora contada por um defunto-autor.'
    ],
    [
        'titulo' => 'As Crônicas de Nárnia: O Leão, a Feiticeira e o Guarda-Roupa',
        'autor' => 'C.S. Lewis',
        'avaliacao' => 4.7,
        'numero_avaliacoes' => 3900,
        'descricao' => 'Quatro irmãos descobrem um mundo mágico através de um guarda-roupa.'
    ],
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
            <?php foreach ($livros as $livro) : ?>
                <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                    <div class="flex">
                        <div class="w-1/3 mt-2">Imagem</div>
                        <div>
                            <div class="font-semibold mt-2"><a href="/livro.php?<?= http_build_query($livro ) ?>" class="font-semibold hover:underline"><?= $livro['titulo'] ?></a></div>
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