<?php
namespace xltxlm\arr\Arr;

/**
 * 数组的基本操作函数;
*/
abstract class Arr_implements
{



    /* @var array 初始化设置值 */
        protected $Values = [];
    
    /**
     * @return array;
     */
    public function getValues():array    {
        return $this->Values;
    }

    /**
     * @param array $Values;
     * @return $this
     */
    public function setValues(array $Values)
    {
        $this->Values = $Values;
        return $this;
    }

    /* @var string 取出第一个内容 */
        protected $First = '';
    
    /**
     * @return string;
     */
    public function getFirst():string    {
        return $this->First;
    }

    /**
     * @param string $First;
     * @return $this
     */
    protected function setFirst(string $First)
    {
        $this->First = $First;
        return $this;
    }

    /* @var string 取出最后一个内容 */
        protected $Last = '';
    
    /**
     * @return string;
     */
    public function getLast():string    {
        return $this->Last;
    }

    /**
     * @param string $Last;
     * @return $this
     */
    protected function setLast(string $Last)
    {
        $this->Last = $Last;
        return $this;
    }

}