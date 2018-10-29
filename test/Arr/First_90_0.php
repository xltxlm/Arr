<?php

namespace xltxlm\Arr\test\Arr;

use xltxlm\arr\Arr;

/**
 *
 */
class First_90_0
{

    public function __invoke()
    {
        $array = [
            '',
            'cc',
            '',
            'dd'
        ];
        $getFirst = (new Arr($array))
            ->getFirst();
        \xltxlm\helper\Util::d($getFirst);
        assert($getFirst == 'cc');
    }

}

