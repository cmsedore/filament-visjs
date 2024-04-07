<?php

namespace Cmsedore\FilamentVisjsChart;

use Filament\Widgets\Widget;

class FilamentVisjsChart extends Widget
{
    protected static ?string $heading = 'Chart';

    protected static ?string $description = null;

    protected static string $view = 'filament-visjs::visjs-chart.widgets.visjs-chart';

    protected static ?string $pollingInterval = null;

    protected int|string|array $columnSpan = 6;

    protected int|string|array $rowSpan = 6;

    protected static bool $isLazy = false;

    public mixed $filter = null;

    protected array $options = [];

    protected float $heightPercentage = 0.3;
    protected float $minZoom = 0.05;
    protected float $maxZoom = 2;

    protected function getFilters(): ?array
    {
        return [
        ];
    }

    protected function getDescription(): ?string
    {
        return self::$description;
    }

    protected function getHeading(): ?string
    {
        return self::$heading;
    }

    protected function getOptions(): array
    {
        return $this->options;
    }

    protected function getHeightPercentage(): float
    {
        return $this->heightPercentage;
    }

    protected function getMinZoom(): float
    {
        return $this->minZoom;
    }

    protected function getMaxZoom(): float
    {
        return $this->maxZoom;
    }

    protected function getData(): array
    {

        $data = [
        ];

        return $data;
    }

    protected function getType(): string
    {
        return 'forceDirectedGraph';
    }
}
