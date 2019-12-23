<?php

namespace xltxlm\arr\Features;


/**
 * 按照指定的索引值进行归组,每个组下面可以有多个元素;
 */
class Arr_MapByKey_More extends Arr_MapByKey_More\Arr_MapByKey_More_implements
{
    /**
     * 2维数组,每个key下面不去重,还是数组
     * @return array
     */
    public function __invoke(): array
    {
        $newmaps = array();
        foreach ($this->getObjects() as $object) {
            $key = (string)call_user_func([$object, 'get' . $this->getGroup_by_Keyname()]);
            $newmaps[$key][] = $object;
        }

        return $newmaps;
    }


}