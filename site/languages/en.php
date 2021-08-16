<?php

return [
  'code' => 'en',
  'default' => false,
  'direction' => 'ltr',
  'locale' => 'en_GB',
  'name' => 'en',
  'translations' => Yaml::decode(
    F::read(kirby()->root('languages') . '/vars/en.yml')
  ),
];
