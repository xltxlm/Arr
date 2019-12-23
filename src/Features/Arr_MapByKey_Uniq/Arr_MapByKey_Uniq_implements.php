<?php
namespace xltxlm\arr\Features\Arr_MapByKey_Uniq;

use \xltxlm\arr\Plus\__to;
/**
 * :类;
 * 按照指定的索引值进行归组,明确每个组下面只有一个元素;
*/
abstract class Arr_MapByKey_Uniq_implements
{

    use __to;

/**
*  返回归组之后的结论;
*  @return :array;
*/
abstract public function __invoke():array;
}