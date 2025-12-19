<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Animal extends Component
{
    public $name;
    public $age;
    public $species;
    public $desc;

    public $image;
    public function __construct($name, $age, $species, $desc, $image)
    {
        $this->name = $name;
        $this->age = $age;
        $this->species = $species;
        $this->desc = $desc;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.animal');
    }
}
