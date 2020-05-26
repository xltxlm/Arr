package Plus

type __to struct {
    /* 标准的get,set变量 */
    Objects array

    /* 需要归组的字段 */
    Group_by_Keyname string

}

func New__to(Objects array,Group_by_Keyname string) *__to{
    var this = new(__to)
    this.SetObjects(Objects);
    this.SetGroup_by_Keyname(Group_by_Keyname);
    return this
}

func (this *__to)GetObjects() array{
    return this.Objects;
}

func (this *__to)SetObjects(Objects array) *__to{
    this.Objects = Objects;
    return this
}
func (this *__to)GetGroup_by_Keyname() string{
    return this.Group_by_Keyname;
}

func (this *__to)SetGroup_by_Keyname(Group_by_Keyname string) *__to{
    this.Group_by_Keyname = Group_by_Keyname;
    return this
}

/**
    构造函数*/
func (this *__to)__construct(Group_by_Keyname string,Objects ){

}

