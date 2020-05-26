package 

type Arr struct {
    /* 初始化设置值 */
    Values array

    /* 取出第一个内容 */
    First string

    /* 取出最后一个内容 */
    Last string

}

func NewArr(Values array,First string,Last string) *Arr{
    var this = new(Arr)
    this.SetValues(Values);
    this.SetFirst(First);
    this.SetLast(Last);
    return this
}

func (this *Arr)GetValues() array{
    return this.Values;
}

func (this *Arr)SetValues(Values array) *Arr{
    this.Values = Values;
    return this
}
func (this *Arr)GetFirst() string{
    return this.First;
}

func (this *Arr)SetFirst(First string) *Arr{
    this.First = First;
    return this
}
func (this *Arr)GetLast() string{
    return this.Last;
}

func (this *Arr)SetLast(Last string) *Arr{
    this.Last = Last;
    return this
}

/**
    数组格式化成json字符串*/
func (this *Arr)Tojson()string{

}

