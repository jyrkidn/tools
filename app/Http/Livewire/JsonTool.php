<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Throwable;

class JsonTool extends Component
{
    public string $minifiedJson = '';
    public string $beautifiedJson = '';
    public string $error = '';

    public function render()
    {
        return view('livewire.json-tool')
            ->layout('layouts.app');
    }

    public function convert()
    {
        try {
            $decodedJson = json_decode($this->minifiedJson, false, 512, JSON_THROW_ON_ERROR);
            $this->beautifiedJson = json_encode($decodedJson, JSON_PRETTY_PRINT|JSON_THROW_ON_ERROR);
        } catch (Throwable $e) {
            $this->beautifiedJson = '';
            $this->error = $e->getMessage();
        }
    }
}
