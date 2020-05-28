<?php
namespace xltxlm\arr\test\Arr\First_90_0Test;

/**
* 测试案例的数据供给
*/
Trait First_90_0Provider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        [["a"=>"a1","b"=>"b1"],"a1","map"],
        [["cc","dd"],"cc","array"],
        ];
    }
}

