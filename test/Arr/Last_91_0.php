<?php

namespace xltxlm\arr\test\Arr;
use xltxlm\arr\Arr;

/**
 *
 */
class Last_91_0
{

    public function __invoke()
    {
        $array = [
            '',
            'cc',
            '',
            'dd',
            ''
        ];
        $getFirst = (new Arr($array))
            ->getLast();
        \xltxlm\helper\Util::d($getFirst);
        assert($getFirst == 'dd');
    }

}

