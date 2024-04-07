# A filament plugin for the VisJS graph package.
[![Total Downloads](https://img.shields.io/packagist/dt/cmsedore/filament-visjs.svg?style=flat-square)](https://packagist.org/packages/cmsedore/filament-visjs)



This is a basic plugin for filament v3 that allows you to use the VisJS Network graph package in your filament projects.
## Installation

You can install the package via composer:

```bash
composer require cmsedore/filament-visjs
```

It isn't in the public packagist repository, so you will need to add the repository to your composer.json file.

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/cmsedore/filament-visjs"
    }
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-visjs-chart-views"
```


## Usage

This is a filament widget -- you should extend the FilamentVisJsChart widget class and reference it in the appropriate place (panel, etc).  Here is an example of a simple widget that displays a network graph.

```php
<?php

namespace App\Filament\Resources\VertexResource\Widgets;

use Cmsedore\FilamentVisjsChart\FilamentVisjsChart;

class NetworkChartDemo extends FilamentVisjsChart
{

    protected static ?string $heading = 'Network Chart Demo';
    protected static ?string $description = 'This is a demo of a network chart.';

    protected array $options = [

        'layout' => [
            'hierarchical' => [
                'shakeTowards' => 'roots',
                'direction' => 'UD',
            ],
        ],
        'physics' => [
            'barnesHut' => [
                'springConstant' => 1,
                'avoidOverlap' => 1,
            ],
            'hierarchicalRepulsion' => [
                'nodeDistance' => 200,
                'avoidOverlap' => 1,
            ],
        ],
    ];

    protected function getData(): array
    {

        $nodes = [
            [
                'id' => 1,
                'label' => "Node 1",
                'color' => 'purple',
                'level' => 1,
                'shape' => 'box',
                'mass' => 10,
            ],
            [
                'id' => 2,
                'label' => "Node 2",
                'color' => 'green',
                'level' => 2,
                'shape' => 'box',
                'mass' => 10,
            ],
            [
                'id' => 3,
                'label' => "Node 3",
                'color' => 'red',
                'level' => 2,
                'shape' => 'box',
                'mass' => 10,
            ],
            [
                'id' => 4,
                'label' => "Node 4",
                'color' => 'blue',
                'level' => 2,
                'shape' => 'box',
                'mass' => 10,
            ],
            [
                'id' => 5,
                'label' => "Node 5",
                'color' => 'gray',
                'level' => 2,
                'shape' => 'box',
                'mass' => 10,
            ]
        ];
        $edges = [
            [
                'from' => 1,
                'to' => 2,
                'label' => 'Edge 1',
                'color' => 'pink',
                'arrows' => 'to',
            ],
            [
                'from' => 1,
                'to' => 3,
                'label' => 'Edge 2',
                'color' => 'pink',
                'arrows' => 'to',
            ],
            [
                'from' => 1,
                'to' => 4,
                'label' => 'Edge 3',
                'color' => 'pink',
                'arrows' => 'to',
            ],
            [
                'from' => 1,
                'to' => 5,
                'label' => 'Edge 4',
                'color' => 'pink',
                'arrows' => 'to',
            ],
            [
                'from' => 4,
                'to' => 5,
                'label' => 'Edge 5',
                'color' => 'pink',
                'arrows' => 'to',
            ]
        ];

        $data = [
            'nodes' => $nodes,
            'edges' => $edges,
        ];

        return $data;
    }

    protected function getType(): string
    {
        return 'forceDirectedGraph';
    }
}

````

## Credits

- [Chris Sedore](https://github.com/cmsedore)

This is heavily based on the chart widget in the filament package.  I just added the VisJS package and some basic functionality to get it working.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
