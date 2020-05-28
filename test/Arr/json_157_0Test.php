<?php
namespace xltxlm\arr\test\Arr;

use PHPUnit\Framework\TestCase;
use xltxlm\arr\Arr;

/**
*
*/
class json_157_0Test extends TestCase
{
    use json_157_0Test\json_157_0Provider; #<---本次测试的数据供给来源

    /**
    * @test
    * @dataProvider MyProvider <---本次测试的数据供给来源
    * $input 输入值
    * $expected 期望的结果
    */
    public function __invoke($input,$expected)
    {
        $result = $this->runcode($input);
        //最终进行判断
        $this->assertEquals($expected, $result);
    }

    /**
    * 真正的逻辑计算
    * $input 输入值
    * $expected 期望的结果
    */
    private function runcode($input)
    {
        return (new Arr($input))
            ->Tojson();
    }

}

