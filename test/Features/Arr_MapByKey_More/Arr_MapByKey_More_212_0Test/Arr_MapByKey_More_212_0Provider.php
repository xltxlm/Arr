<?php
namespace xltxlm\arr\test\Features\Arr_MapByKey_More\Arr_MapByKey_More_212_0Test;

/**
* 测试案例的数据供给
*/
Trait Arr_MapByKey_More_212_0Provider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        [[["id"=>100,"name"=>"a"],["id"=>1,"name"=>"a"],["id"=>2,"name"=>"b"]],["a"=>[["id"=>100,"name"=>"a"],["id"=>1,"name"=>"a"]],"b"=>[["id"=>2,"name"=>"b"]]],"name","普通数组归组整理"],
        [[call_user_func(function (){ return new \Exception("a",100);}),call_user_func(function (){ return new \Exception("a",101);}),call_user_func(function (){ return new \Exception("b",22);})],["a"=>[call_user_func(function (){ return new \Exception("a",100);}),call_user_func(function (){ return new \Exception("a",101);})],"b"=>[call_user_func(function (){ return new \Exception("b",22);})]],"message","二维对象数组整理"],
        ];
    }
}

