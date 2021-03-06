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
  (new Extend\Formatter())
   ->configure(function (Configurator $configurator) {
     $emoticons = [
       "+1",
       "addit",
       "ahumma",
       "alone",
       "asd",
       "autopat",
       "axe",
       "bad",
       "bah",
       "boing",
       "botte",
       "bro",
       "ç_ç",
       "çAç",
       "caffè",
       "ciao",
       "climb",
       "crazy",
       "cry",
       "eee",
       "ehooo",
       "facepalm",
       "fifi",
       "filenfio",
       "flame",
       "flower",
       "fofo",
       "fyeah",
       "gogo",
       "gogo2",
       "gogo3",
       "gogo4",
       "grattz",
       "grrrr",
       "grrrrrrr",
       "hmm",
       "hola",
       "hold",
       "holdskler",
       "kill",
       "L",
       "look",
       "malv",
       "malvasd",
       "master",
       "mka",
       "mki",
       "ninja",
       "NO",
       "nono",
       "o_o",
       "ocb",
       "OMG",
       "party",
       "patpat",
       "pff",
       "pip",
       "popcorn",
       "prrr",
       "rotfl",
       "sad",
       "sasa",
       "sbav",
       "sbav2",
       "scisci",
       "sese",
       "silook",
       "sisi",
       "skler",
       "smile_drop",
       "stalk",
       "suicide",
       "suicide2",
       "superpat",
       "susu",
       "trollface",
       "what",
       "yeah",
       "yeee",
       "zizi"
    ];
    for($i = 0; $i < $emoticons.length; $i+=1) {
      $configurator->Emoticons->add(
        ":#{$emoticons[$i]}:",
        "<img class=\"emoticon\" src=\"https://cdn.off-popic.it/$emoticons/#{$emoticons[$i]}.gif\" alt=\":#{$emoticons[$i]}:\" title=\":#{$emoticons[$i]}\">"
      );
    }
    $configurator->Emoticons->add(":test:", "Hello world");
    $configurator->Emoticons->add(":debug:", $emoticons.join(";"));
  })
];
