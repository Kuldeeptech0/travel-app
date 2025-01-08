<?php

namespace App\View\Components\Alerts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InformativeAlert extends Component
{
    public $type;
    public $title;
    public $messages;
    public $maxHeightClass;

    public function __construct($type = 'error', $title = '', $messages = [], $maxHeightClass = 'max-h-[80px]')
    {
        $this->type = $type;
        $this->title = $title;
        $this->messages = $messages;
        $this->maxHeightClass = $maxHeightClass;
    }

    public function getTypeClasses()
    {
        return match($this->type) {
            'info' => 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400',
            'warning' => 'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400',
            'success' => 'text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400',
            default => 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400'
        };
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alerts.informative-alert');
    }
}
