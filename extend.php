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

return [
  (new Extend\Frontend('forum'))
    ->css(__DIR__.'/resources/less/forum.less'),

  (new Extend\Formatter())
    ->configure(function (Configurator $configurator) {
      $configurator->Emoticons->add(
        ':{TEXT1}:',
        '<img class="emoticon" src="https://cdn.off-popic.it/emoticons/{TEXT1}.gif" alt="{TEST1}">'
      );
    }),
];
