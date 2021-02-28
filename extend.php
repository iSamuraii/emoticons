<?php

/*
 * This file is part of isamuraii/emoticons.
 *
 * Copyright (c) 2021 wonderbeel.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Isamuraii\Emoticons;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

$emoticons= ['sisi', 'asd', 'look', 'rotfl'];

return [
  (new Extend\Frontend('forum'))
    ->css(__DIR__.'/less/forum.less'),

  (new Extend\Formatter())
    ->configure(function (Configurator $configurator) {
      foreach($emoticons as $key => $value) {
      $configurator->Emoticons->add(
        ':${value}:',
        '<img class="emoticon" src="https://cdn.off-popic.it/emoticons/${value}.gif" alt="${value}">'
      );
      }
    }),
];
