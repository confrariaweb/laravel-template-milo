<?php

return [
    'options' => [
        'sidebar' => [
            'label' => 'Sidebar',
            'name' => 'sidebar',
            'type' => 'select',
            'options' => [
                'yes' => 'Sim',
                'no' => 'Não'
            ],
            'value' => 'yes'
        ],
        'container' => [
            'label' => 'Template Fluido',
            'name' => 'container',
            'type' => 'select',
            'options' => [
                'container-fluid' => 'Full width',
                'container' => 'Box'
            ],
            'value' => 'container-fluid'
        ]
    ]
];