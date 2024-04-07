@php
    use Filament\Support\Facades\FilamentView;

    $heading = $this->getHeading();
    $description = $this->getDescription();
    $filters = $this->getFilters();
@endphp

<x-filament-widgets::widget>
    <x-filament::section :description="$description" :heading="$heading">
        <div
            ax-load
             wire:ignore
             ax-load-src="{{ \Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('visjs','cmsedore/filament-visjs') }}"
             x-data="visjs( {
        data: @js($this->getData()),
        options: @js($this->getOptions()),
        heightPercentage: @js($this->getHeightPercentage()),
        minZoom: @js($this->getMinZoom()),
        maxZoom: @js($this->getMaxZoom())
        })"
            style="position: relative; width: 100%; height: 100%;"
        >
            <div x-ref="container"></div>
        {{-- Widget content --}}
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
