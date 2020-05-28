<?php
namespace xltxlm\arr\test\Arr\Last_91_0Test;

/**
* 测试案例的数据供给
*/
Trait Last_91_0Provider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        [["c","a"=>"b"],"b","取出最后一个-map"],
        [["1","3"],"3","取出最后一个-数组"],
        ];
    }
}

