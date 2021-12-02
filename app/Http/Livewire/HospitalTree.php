<?php

namespace App\Http\Livewire;

use App\Models\Hospital;
use Livewire\Component;

class HospitalTree extends Component
{
    public $hospitals;
    public $openItems = [];

    public function render()
    {
        $this->hospitals = Hospital::with('locations.facilities')->orderBy('id', 'desc')->take(10)->get();
        return view('livewire.hospital-tree');
    }

    public function toggleTreeItem($id)
    {
        $keys = array_keys($this->openItems ?? []);
        if(!in_array($id, $keys)) {
            $this->openItems[$id] = $id;
        } else {
            unset($this->openItems[$id]);
        }
    }
}
