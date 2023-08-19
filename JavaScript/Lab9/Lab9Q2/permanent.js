import Employee from './employee.js'
export default class Permanent extends Employee{
    constructor(id,name,salary,designation,address,salaryBonus){
        super(id,name,salary,designation,address);
        this.salaryBonus=salaryBonus;
    }

    getsalaryBonus(){
        return this.salaryBonus;
    }

    showData(){
        return (this.show()+'\nEmpBonus: '+this.salaryBonus);
    }
};