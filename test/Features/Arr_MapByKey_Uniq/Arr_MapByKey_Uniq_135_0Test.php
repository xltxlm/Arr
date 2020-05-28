<?php

namespace xltxlm\arr\test\Features\Arr_MapByKey_Uniq;

use PHPUnit\Framework\TestCase;
use xltxlm\arr\Features\Arr_MapByKey_Uniq;

/**
 *
 */
class Arr_MapByKey_Uniq_135_0Test extends TestCase
{
    use Arr_MapByKey_Uniq_135_0Test\Arr_MapByKey_Uniq_135_0Provider; #<---本次测试的数据供给来源

    /**
     * @test
     * @dataProvider MyProvider <---本次测试的数据供给来源
     * $input 输入值
     * $expected 期望的结果
     * @throws \Exception
     */
    public function __invoke($input, $expected, $args)
    {
        $result = $this->runcode($input, $args);
        //最终进行判断
        $this->assertEquals($expected, $result);
    }

    /**
     * 真正的逻辑计算
     * $input 输入值
     * $expected 期望的结果
     *
     * @throws \Exception
     */
    private function runcode($input, $args)
    {
        return (new Arr_MapByKey_Uniq($args, $input))
            ->__invoke();
    }

}


