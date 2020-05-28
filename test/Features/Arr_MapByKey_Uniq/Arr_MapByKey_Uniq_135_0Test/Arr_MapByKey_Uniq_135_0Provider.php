<?php
namespace xltxlm\arr\test\Features\Arr_MapByKey_Uniq\Arr_MapByKey_Uniq_135_0Test;

/**
* 测试案例的数据供给
*/
Trait Arr_MapByKey_Uniq_135_0Provider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        [[["id"=>1,"name"=>"a"],["id"=>2,"name"=>"b"]],["a"=>["id"=>1,"name"=>"a"],"b"=>["id"=>2,"name"=>"b"]],"name","二维普通数组变map，把指定的值，提取成索引"],
        [[["id"=>100,"name"=>"a"],["id"=>1,"name"=>"a"],["id"=>2,"name"=>"b"]],["a"=>["id"=>1,"name"=>"a"],"b"=>["id"=>2,"name"=>"b"]],"name","二维数组去重。后面的覆盖掉前面的"],
        [[call_user_func(function (){ return new \Exception("a",100);}),call_user_func(function (){ return new \Exception("b",22);})],["a"=>call_user_func(function (){ return new \Exception("a",100);}),"b"=>call_user_func(function (){ return new \Exception("b",22);})],"message","二维对象数组变map，把指定的值，提取成索引。
用内置的类Exception来做演示，因为里面刚好有get函数：getMessage"],
        [[call_user_func(function (){ return new \Exception("a",100);}),call_user_func(function (){ return new \Exception("a",101);}),call_user_func(function (){ return new \Exception("b",22);})],["a"=>call_user_func(function (){ return new \Exception("a",101);}),"b"=>call_user_func(function (){ return new \Exception("b",22);})],"message","二维对象去重。后面的覆盖掉前面的"],
        ];
    }
}

