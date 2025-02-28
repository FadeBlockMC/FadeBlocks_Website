<?php

namespace App\Livewire;

use Livewire\Component;

class Rules extends Component
{
    public $currentSection = 'Network';

    public $sections = [
        'Network' => 'Dit zijn de regels voor het hele netwerk...',
        'Skyblock' => 'Skyblock regels: Geen griefing, geen duping...',
        'Survival' => 'Survival regels: PvP is optioneel, geen hacks...',
        'Discord' => 'Discord regels: Respecteer anderen, geen spam...',
        'Website' => 'Website regels: Geen ongepaste content, respecteer anderen...',
    ];

    public function setSection($section)
    {
        if (array_key_exists($section, $this->sections)) {
            $this->currentSection = $section;
        }
    }

    public function render()
    {
        return view('livewire.rules');
    }
}

