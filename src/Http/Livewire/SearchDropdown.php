<?php

namespace Mediconesystems\LivewireDatatables\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    public $column;
    public $table;
    public $search;
    public $searchResults = [];

    public function updatedSearch($newValue)
    {
        if (strlen($this->search) < 3) {
            $this->searchResults = [];

            return;
        }

        $response = Http::get('https://itunes.apple.com/search/?term=' . $this->search . '&limit=10');

        $this->searchResults = $response->json()['results'];
    }

    public function render()
    {
        return view('livewire.datatables.search-dropdown');
    }
}
