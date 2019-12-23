<?php

namespace xltxlm\arr\Features;


/**
 * 按照指定的索引值进行归组,明确每个组下面只有一个元素;
 */
class Arr_MapByKey_Uniq extends Arr_MapByKey_Uniq\Arr_MapByKey_Uniq_implements
{

    /**
     * 2维数组,每个key下面去重
     * @return array
     */
    public function __invoke(): array
    {
        $newmaps = array();
        foreach ($this->getObjects() as $object) {
            $key = (string)call_user_func([$object, 'get' . $this->getGroup_by_Keyname()]);
            $newmaps[$key] = $object;
        }

        return $newmaps;
    }


}