<?php
namespace xltxlm\arr\test\Arr\getbyindex_211_0Test;

/**
* 测试案例的数据供给
*/
Trait getbyindex_211_0Provider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        [["a"=>"a1","b"=>"b1","c"=>"c1"],"a1",0,"map"],
        [["a1","b1","c1"],"b1",1,"array"],
        [["a1","b1","c1"],"c1",-1,"负数"],
        ];
    }
}

