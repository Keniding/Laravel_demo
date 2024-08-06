<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alertDepende extends Component
{
    private $class;
    private $class_default;
    /**
     * Create a new component instance.
     */
    public function __construct($type = 'info')
    {
        switch($type) {
            case 'info':
                $this->class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
                break;
            case 'success':
                $this->class = 'text-green-800 bg-green-50 dark:bg-gray-800" dark:text-green-400';
                break;
            case 'warning':
                $this->class = 'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400';
                break;
            case 'danger':
                $this->class = 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400';
                break;
            default:
                $this->class = 'text-gray-800 bg-gray-50 dark:bg-gray-800 dark:text dark:text-gray-400';
                break;
        }

        $this->class_default = 'p-4 text-sm rounded-lg ';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert-depende', [
            'class' => $this->class,
            'class_default' => $this->class_default
        ]);
    }
}
