<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeedCategoria extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create(['nome'=>'Brinquedos']);
        Categoria::create(['nome'=>'Alimentos']);
        Categoria::create(['nome'=>'Bebidas']);
        Categoria::create(['nome'=>'Embutido']);
        Categoria::create(['nome'=>'Higiêne']);
        Categoria::create(['nome'=>'Limpeza']);
    }
}
