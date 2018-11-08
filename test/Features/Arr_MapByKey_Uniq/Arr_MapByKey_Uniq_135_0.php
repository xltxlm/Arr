<?php

namespace xltxlm\arr\test\Features\Arr_MapByKey_Uniq;

use xltxlm\arr\Features\Arr_MapByKey_Uniq;

/**
 *
 */
class Arr_MapByKey_Uniq_135_0
{

    public function __invoke()
    {
        $arr = [
            new a(__LINE__),new a(__LINE__),new a(__LINE__),
            new a(__LINE__),
            new a(__LINE__),
        ];
        $newarr = (new Arr_MapByKey_Uniq('abc', $arr))
            ->__invoke();

        \xltxlm\helper\Util::d($newarr);
    }

}


class a
{


    protected $abc = __LINE__;

    /**
     * a constructor.
     * @param int $abc
     */
    public function __construct($abc)
    {
        $this->abc = $abc;
    }

    /**
     * @return int
     */
    public function getAbc(): int
    {
        return $this->abc;
    }

    /**
     * @param int $abc
     * @return a
     */
    public function setAbc(int $abc): a
    {
        $this->abc = $abc;
        return $this;
    }

}

