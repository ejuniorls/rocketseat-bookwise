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
                     <div class="font-semibold mt-2"><a href="/livro?id=<?= $livro['id'] ?>" class="font-semibold hover:underline"><?= $livro['titulo'] ?></a></div>
                     <div class="text-xs italic mt-2"><?= $livro['autor'] ?></div>
                     <div class="text-xs italic mt-2">⭐⭐⭐⭐⭐ (<?= $livro['numero_avaliacoes'] ?> avaliações)</div>
                 </div>
             </div>

             <div class="text-sm mt-4"><?= $livro['descricao'] ?></div>
         </div>
     <?php endforeach; ?>
 </section>