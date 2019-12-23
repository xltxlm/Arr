<?php
namespace xltxlm\arr\Plus\__to;

/**
 * :Trait;
 * 基类;
*/
Trait __to_implements
{


/* @var array  标准的get,set变量 */
    protected $Objects = [];





    /**
    * @return array;
    */
            public function getObjects():array        {
                return $this->Objects;
        }

    
    




/**
* @param array $Objects;
* @return $this
*/
    public function setObjects(array $Objects  = [])
    {
    $this->Objects = $Objects;
    return $this;
    }



/* @var string  需要归组的字段 */
    protected $Group_by_Keyname = '';





    /**
    * @return string;
    */
            public function getGroup_by_Keyname():string        {
                return $this->Group_by_Keyname;
        }

    
    




/**
* @param string $Group_by_Keyname;
* @return $this
*/
    public function setGroup_by_Keyname(string $Group_by_Keyname  = "")
    {
    $this->Group_by_Keyname = $Group_by_Keyname;
    return $this;
    }



/**
*  构造函数;
*  @return ;
*/
abstract public function __construct(string $Group_by_Keyname = null,array $Objects = null);
}