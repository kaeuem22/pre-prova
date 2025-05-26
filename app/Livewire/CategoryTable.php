<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryTable extends Component
{
    public $search = '';  // Propriedade para armazenar o termo de pesquisa

    // Método que busca as categorias filtradas
    public function render()
    {
        $categories = Category::where('description', 'like', '%' . $this->search . '%')->get();
        return view('livewire.category-table', compact('categories'));
    }
}
