<?php

namespace xltxlm\arr\test\Arr;

use xltxlm\arr\Arr;

/**
 *
 */
class json_157_0
{

    public function __invoke()
    {
        $j = (new Arr(['a', 'b']))
            ->Tojson();
        p($j);
        assert($j == '["a","b"]');
    }

}

