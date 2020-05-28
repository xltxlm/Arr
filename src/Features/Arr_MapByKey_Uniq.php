<?php

namespace xltxlm\arr\Features;


/**
 * 按照指定的索引值进行归组,明确每个组下面只有一个元素;
 */
class Arr_MapByKey_Uniq extends Arr_MapByKey_Uniq\Arr_MapByKey_Uniq_implements
{

    /**
     * 2维数组,每个key下面去重
     *
     * @return array
     */
    public function __invoke(): array
    {
        $newmaps = array();
        foreach ($this->getObjects() as $object_or_array) {
            //如果传入的是对象数组
            if (is_object($object_or_array)) {
                $key = (string)call_user_func([$object_or_array, 'get' . $this->getGroup_by_Keyname()]);
            } elseif (is_array($object_or_array)) {
                //如果传入的是二维数组
                $key = (string)$object_or_array[$this->getGroup_by_Keyname()];
            } else {
                throw new \Exception("传递的参数不是二维数组，也不是对象数组。无法进行处理.");
            }
            $newmaps[$key] = $object_or_array;
        }

        return $newmaps;
    }


}