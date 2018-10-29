<?php

namespace xltxlm\arr;

/**
 * 数组的基本操作函数;
 */
class Arr extends Arr\Arr_implements
{


    /**
     * Arr constructor.
     */
    public function __construct(array $Values = [])
    {
        if ($Values) {
            $this->setValues($Values);
        }
    }

    /**
     * 去除掉空的内容
     * @param array $Values
     * @return Arr\Arr_implements
     */
    public function setValues(array $Values)
    {
        $Values = array_diff($Values, ['']);
        return parent::setValues($Values);
    }

    public function getFirst(): string
    {
        return current(array_slice($this->getValues(), 0, 1));
    }

    public function getLast(): string
    {
        return current(array_slice($this->getValues(), -1, 1));
    }


}