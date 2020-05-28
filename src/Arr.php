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
     *
     * @param array $Values
     * @return $this
     */
    public function setValues(array $Values = [])
    {
        $Values_new = [];
        foreach ($Values as $k => $value) {
            if ($value || (is_string($value) && strlen($value) > 0)) {
                $Values_new[$k] = $value;
            }
        }
        //array_diff 在对比二维数组的时候，挂了。。。Array to string conversion
        //$Values = array_diff($Values, ['']);
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

    public function getbyIndex(int $index = 0)
    {
        return current(array_slice($this->getValues(), $index, 1));
    }


    public function Tojson(): string
    {
        return json_encode($this->getValues(), JSON_UNESCAPED_UNICODE) ?: '[]';
    }


}