<?php

namespace xltxlm\arr\Features;


/**
 * 按照指定的索引值进行归组,明确每个组下面只有一个元素;
 */
class Arr_MapByKey_Uniq extends Arr_MapByKey_Uniq\Arr_MapByKey_Uniq_implements
{

    private $newmaps = array();

    /**
     * Arr_MapByKey_Uniq constructor.
     */
    public function __construct(string $Group_by_Keyname = '', array $Objects = [])
    {
        if ($Group_by_Keyname) {
            $this->setGroup_by_Keyname($Group_by_Keyname);
        }
        if ($Objects) {
            $this->setObjects($Objects);
        }
    }


    public function __invoke(): array
    {
        foreach ($this->getObjects() as $object) {
            $key = (string)call_user_func([$object, 'get' . $this->getGroup_by_Keyname()]);
            $this->newmaps[$key] = $object;
        }

        return $this->newmaps;
    }


}