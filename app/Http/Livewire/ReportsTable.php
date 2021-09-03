<?php

namespace App\Http\Livewire;

use App\Models\Report;
use Livewire\Component;
use Livewire\WithPagination;

class ReportsTable extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 5;
    public $sortField = 'id';
    public $sortAsc = true;
    public $date = '';

    public function render()
    {

        return view('livewire.reports-table', ['reports' => Report::search($this->search)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->simplePaginate($this->perPage)
        ]);
    }
}
