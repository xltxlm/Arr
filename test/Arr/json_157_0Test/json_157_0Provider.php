<?php
namespace xltxlm\arr\test\Arr\json_157_0Test;

/**
* 测试案例的数据供给
*/
Trait json_157_0Provider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        [["a"],"[\"a\"]","数组的json化-常规"],
        [["xx","a"=>["cc"]],"{\"0\":\"xx\",\"a\":[\"cc\"]}","数组的json化-二维"],
        [[],"[]","空数组二维化"],
        [["a"=>"b"],"{\"a\":\"b\"}","一维map"],
        ];
    }
}

