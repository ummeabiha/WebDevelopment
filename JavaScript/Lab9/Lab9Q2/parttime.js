import Employee from './employee.js'
export default class PartTime extends Employee{
    constructor(id,name,salary,designation,address,shiftHours){
        super(id,name,salary,designation,address);
        this.shiftHours=shiftHours;
    }

    getshiftHours(){
        return this.shiftHours;
    }

    showData(){
        return (this.show()+'\nShiftHours: '+this.shiftHours);
    }
};
