<?php

namespace App\Http\Livewire;

use App\Converts\Xml;
use App\Converts\Json;
use App\Converts\Unserialize;
use Livewire\Component;
use Throwable;

class Tool extends Component
{
    public string $minified = '';
    public string $error = '';

    public array $converts = [
        'xml' => Xml::class,
        'json' => Json::class,
        'unserialize' => Unserialize::class,
    ];

    public function render()
    {
        return view('livewire.tool')
            ->layout('layouts.app');
    }

    public function convert($convertClass)
    {
        $this->error = '';

        try {
            $this->dispatchBrowserEvent('value-beautified', [
                'beautified' => $this->converts[$convertClass]::new($this->minified)->beautify(),
                'language' => $this->converts[$convertClass]::mode()
            ]);
        } catch (Throwable $e) {
            $this->error = $e->getMessage();
            $this->dispatchBrowserEvent('value-beautified', [
                'beautified' => '',
                'language' => $this->converts[$convertClass]::mode()
            ]);
        }
    }
}
