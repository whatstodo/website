<?php

return [
  'code' => 'de',
  'default' => true,
  'direction' => 'ltr',
  'locale' => 'de_DE',
  'name' => 'de',
  'translations' => Yaml::decode(F::read(kirby()->root('languages').'/vars/de.yml'))
];