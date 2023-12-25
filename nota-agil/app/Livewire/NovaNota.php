<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;
use App\Models\Categoria;
use App\Models\Nota;
use Illuminate\Support\Facades\Auth;

class NovaNota extends Component
{
    public $produtos;
    public $categorias;
    public $filter=0;
    public $carrinho = [];
    public $precos = [];
    public $precototal;

    public function mount()
    {
        $this->categorias = Categoria::orderBy('nome','asc')->get();
    }

    public function add(Produto $produto)
    {
        array_push($this->carrinho, $produto);
        array_push($this->precos, $produto->preco);

        $this->precototal = array_sum($this->precos);
    }

    public function finalizar()
    {
        if ($this->carrinho) {
            $nota = Nota::create([
                'preco_total' => $this->precototal,
                'user_id' => Auth::user()->id,
            ]);

            for ($i = 0; $i < sizeof($this->carrinho); $i++) {
                $nota->produtos()->attach($this->carrinho[$i]['id']);
            }
            unset($this->precototal);
            $this->precos=[];
            $this->carrinho=[];           
        }
    }

    public function remove($i)
    {
        unset($this->carrinho[$i]);
        $this->carrinho = array_values($this->carrinho);
        unset($this->precos[$i]);
        $this->precos = array_values($this->precos);
        $this->precototal = array_sum($this->precos);
    }

    public function render()
    {
        if ($this->filter != 0) {
            $this->produtos = Produto::where('categoria_id', $this->filter)->get();
        } else {
            $this->produtos = Produto::orderBy('asc')->get();
        }

        return view('livewire.nova-nota');
    }
}
