<?php
namespace Starbug\Users\Impersonate;

use function DI\add;
use function DI\get;

return [
  "route.providers" => add([
    get(RouteProvider::class)
  ]),
  "template.helpers" => add([
    "impersonate" => ImpersonateHelper::class
  ])
];
