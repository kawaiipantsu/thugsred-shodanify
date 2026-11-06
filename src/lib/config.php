<?php
// THUGSred Shodanify — branding and form fields.
return [
    'name' => 'Shodanify',
    'service' => 'Shodan',
    'tagline' => 'Know your surface. Shape your search.',
    'description' => 'Build precise Shodan searches, understand service filters, and explore indexed infrastructure.',
    'icon' => 62003,
    'sample' => 'hostname:example.com port:443',
    'scope_note' => 'The builder combines populated scope fields. Hostname matches are clues, not proof of ownership.',
    'access_note' => 'Shodan account and plan limits still apply. Some filters and result features require a paid plan.',
    'docs' => 'https://help.shodan.io/the-basics/search-query-fundamentals',
    'modes' => [
        'search' => 'Shodan',
    ],
    'scope' => [
        [
            'key' => 'hostname',
            'label' => 'Hostname / domain',
            'placeholder' => 'example.com',
        ],
        [
            'key' => 'net',
            'label' => 'Network / CIDR',
            'placeholder' => '203.0.113.0/24',
        ],
        [
            'key' => 'org',
            'label' => 'Organisation',
            'placeholder' => 'Example Organisation',
        ],
        [
            'key' => 'asn',
            'label' => 'ASN',
            'placeholder' => 'AS64496',
        ],
    ],
    'fields' => [
        [
            'key' => 'port',
            'label' => 'Port',
            'placeholder' => '443',
            'type' => 'number',
            'min' => 1,
            'max' => 65535,
        ],
        [
            'key' => 'product',
            'label' => 'Product',
            'placeholder' => 'nginx',
        ],
        [
            'key' => 'country',
            'label' => 'Country code',
            'placeholder' => 'DK',
        ],
        [
            'key' => 'banner',
            'label' => 'Banner phrase',
            'placeholder' => 'Welcome',
        ],
        [
            'key' => 'http_title',
            'label' => 'HTTP title phrase',
            'placeholder' => 'Example portal',
        ],
        [
            'key' => 'cert_name',
            'label' => 'Certificate subject CN',
            'placeholder' => 'example.com',
        ],
        [
            'key' => 'tls',
            'label' => 'TLS observations',
            'placeholder' => '',
            'type' => 'select',
            'options' => [
                ['', 'Any'],
                ['true', 'Has TLS data'],
                ['false', 'No TLS data'],
            ],
        ],
        [
            'key' => 'expired',
            'label' => 'Expired certificate',
            'placeholder' => '',
            'type' => 'select',
            'options' => [
                ['', 'Any'],
                ['true', 'Expired'],
                ['false', 'Not expired'],
            ],
        ],
        [
            'key' => 'favicon',
            'label' => 'HTTP favicon hash',
            'placeholder' => 'Signed integer',
        ],
        [
            'key' => 'status',
            'label' => 'HTTP status',
            'placeholder' => '',
            'type' => 'select',
            'options' => [
                ['', 'Any'],
                ['200', '200 — OK'],
                ['301', '301 — redirect'],
                ['302', '302 — redirect'],
                ['401', '401 — login required'],
                ['403', '403 — forbidden'],
                ['404', '404 — not found'],
                ['500', '500 — server error'],
            ],
        ],
    ],
    'slug' => 'shodanify',
    'version' => '1.0.0',
    'repo' => 'https://github.com/kawaiipantsu/thugsred-shodanify',
    'homepage' => 'https://thugs.red',
    'site' => 'https://shodanify.thugs.red',
];
