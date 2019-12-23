<?php
namespace xltxlm\arr\Features\Arr_MapByKey_More;

use \xltxlm\arr\Plus\__to;
/**
 * :类;
 * 按照指定的索引值进行归组,每个组下面可以有多个元素;
*/
abstract class Arr_MapByKey_More_implements
{

    use __to;

/**
*  返回归组之后的数组;
*  @return :array;
*/
abstract public function __invoke():array;
}