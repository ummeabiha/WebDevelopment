export default class Employee{
    constructor(id,name,salary,designation,address){
        this.id=id;
        this.name=name;
        this.salary=salary;
        this.designation=designation;
        this.address=address;
    }

    getname(){
        return this.name;
    }

    show(){
        return('Emp Id: '+this.id+'\nEmp Name: '+this.name+'\nEmp Salary: '+this.salary+'\nEmp Designation: '+this.designation+'\nEmp Address: '+this.address)
    }
};
    
