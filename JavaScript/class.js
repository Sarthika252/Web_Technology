class Employee{
    constructor(id,name)
    {
        this.id=id;
        this.name=name;
    }
    detail()
    {
        console.log(this.id+" "+this.name)
    }
}
var e1=new Employee(101,"Sayli Rote");
var e2=new Employee(102,"Kranti Pote");
e1.detail();
e2.detail();