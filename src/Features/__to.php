<?php

namespace xltxlm\arr\Features;


/**
 * 基类;
 */
Trait __to
{
    use __to\__to_implements;

    public function __construct(string $Group_by_Keyname = null, array $Objects = null)
    {
        if ($Group_by_Keyname) {
            $this->setGroup_by_Keyname($Group_by_Keyname);
        }
        if ($Objects) {
            $this->setObjects($Objects);
        }
    }

}