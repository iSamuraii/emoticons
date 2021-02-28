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
    ->css(__DIR__.'/less/forum.less'),

  (new Extend\Formatter())
    ->configure(function (Configurator $configurator) {
      $configurator->Emoticons->add(
        ':sisi:', '<img class="emoticon" src="https://cdn.off-popic.it/emoticons/sisi.gif" alt=":sisi:" title="sisi">'
      );
      $configurator->Emoticons->add(
        ':asd:', '<img class="emoticon" src="https://cdn.off-popic.it/emoticons/asd.gif" alt=":asd:" title="asd">'
      );
      $configurator->Emoticons->add(
        ':look:', '<img class="emoticon" src="https://cdn.off-popic.it/emoticons/look.gif" alt=":look:" title="look">'
      );
      $configurator->Emoticons->add(
        ':rotfl:', '<img class="emoticon" src="https://cdn.off-popic.it/emoticons/rotfl.gif" alt=":rotfl:" title="rotfl">'
      );
    }),
];
