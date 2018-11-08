<?php
namespace xltxlm\arr\Features\Arr_MapByKey_Uniq;

/**
 * 按照指定的索引值进行归组,明确每个组下面只有一个元素;
*/
abstract class Arr_MapByKey_Uniq_implements
{



    /* @var array  标准的get,set变量 */
        protected $Objects = [];
    


    /**
     * @return array;
     */
    public function getObjects():array    {
        return $this->Objects;
    }






    /**
     * @param array $Objects;
     * @return $this
     */
    public function setObjects(array $Objects)
    {
        $this->Objects = $Objects;
        return $this;
    }

    /* @var string  需要归组的字段 */
        protected $Group_by_Keyname = '';
    


    /**
     * @return string;
     */
    public function getGroup_by_Keyname():string    {
        return $this->Group_by_Keyname;
    }






    /**
     * @param string $Group_by_Keyname;
     * @return $this
     */
    public function setGroup_by_Keyname(string $Group_by_Keyname)
    {
        $this->Group_by_Keyname = $Group_by_Keyname;
        return $this;
    }

    /**
     *   返回归组之后的结论;
     *   @return :array;
    */
    abstract public function __invoke():array;

}