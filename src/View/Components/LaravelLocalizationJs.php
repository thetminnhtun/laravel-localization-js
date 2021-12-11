<?php

namespace Thetminnhtun\LaravelLocalizationJs\View\Components;

use Illuminate\View\Component;

class LaravelLocalizationJs extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
        <script src="/vendor/localization-js/app.js"></script>
        <script>
            window.Lang = new Localization({
                messages: JSON.parse({!! json_encode(file_get_contents(resource_path('lang/' . app()->getLocale() . '.json'))) !!})
            });
            window.trans = (...key) => Lang.get(...key);
            window.__ = (...key) => Lang.get(...key);
        </script>
    blade;
    }
}
