Installation:

`composer require alexander-a2/symfony-basics`

register bundle in `config/bundles.php`:

`AlexanderA2\SymfonyBasics\BasicsBundle::class => ['all' => true],`

import routes in `config/routes.yaml`

`basics:
    resource: '@BasicsBundle/Resources/config/routing.yml`

add field `locale` (string(2), nullable) to User entity

t of available locales in
`config/packages/translation.yaml`

next way:
`framework:
    default_locale: en
    enabled_locales:
        - en
        - ua`

Whats inside:

Date/time picker form type:
    `$builder->add('date', DateTimePickerType::class)`
    https://xdsoft.net/jqplugins/datetimepicker/