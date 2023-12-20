<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeedProduto extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::create([
            'nome'=>"Mi Band 7",
            'preco'=>210,
            'categoria_id'=>8,
            'user_id'=>1,
        ]);

        Produto::create([
            'nome'=>"Mi Band 6",
            'preco'=>160,
            'categoria_id'=>8,
            'user_id'=>1,
        ]);

        Produto::create([
            'nome'=>"Mi Band 5",
            'preco'=>100,
            'categoria_id'=>8,
            'user_id'=>1,
        ]);

        Produto::create([
            'nome'=>"Chokitos",
            'preco'=>10,
            'categoria_id'=>2,
            'user_id'=>1,
        ]);

        Produto::create([
            'nome'=>"Kinder Ovo",
            'preco'=>15,
            'categoria_id'=>2,
            'user_id'=>1,
        ]);

        Produto::create([
            'nome'=>"Monitor LG",
            'preco'=>680,
            'categoria_id'=>8,
            'user_id'=>1,
        ]);

        Produto::create([
            'nome'=>"Monitor Samsung Ultra Wide",
            'preco'=>1500,
            'categoria_id'=>8,
            'user_id'=>1,
        ]);

        Produto::create([
            'nome'=>"Sabonete",
            'preco'=>6,
            'categoria_id'=>5,
            'user_id'=>1,
        ]);
        Produto::create([
            'nome'=>"Shampoo",
            'preco'=>10,
            'categoria_id'=>5,
            'user_id'=>1,
        ]);

        Produto::create([
            'nome'=>"Pasta de Dente",
            'preco'=>3,
            'categoria_id'=>5,
            'user_id'=>1,
        ]);

        Produto::create([
            'nome'=>"Detergente",
            'preco'=>8,
            'categoria_id'=>6,
            'user_id'=>1,
        ]);

        Produto::create([
            'nome'=>"Pano de chão",
            'preco'=>8,
            'categoria_id'=>6,
            'user_id'=>1,
        ]);


        Produto::create([
            'nome'=>"Água mineral",
            'preco'=>2,
            'categoria_id'=>2,
            'user_id'=>1,
        ]);

        Produto::create([
            'nome'=>"Coca Cola 2 litros",
            'preco'=>10,
            'categoria_id'=>3,
            'user_id'=>1,
        ]);

        Produto::create([
            'nome'=>"Cerveja",
            'preco'=>8,
            'categoria_id'=>3,
            'user_id'=>1,
        ]);

        Produto::create([
            'nome'=>"Óculos de Sol",
            'preco'=>39,
            'categoria_id'=>7,
            'user_id'=>1,
        ]);

        Produto::create([
            'nome'=>"Luffy Action Figure",
            'preco'=>300,
            'categoria_id'=>1,
            'user_id'=>1,
        ]);

        Produto::create([
            'nome'=>"Goku Action Figure",
            'preco'=>300,
            'categoria_id'=>1,
            'user_id'=>1,
        ]);

    }
}
