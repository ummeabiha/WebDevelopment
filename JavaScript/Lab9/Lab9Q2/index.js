import Permanent from "./permanent.js";
import PartTime from "./parttime.js";

const peremp=new Permanent(1,'Abiha', 100000, 'SQA', 'Karachi',35000);
const partemp=new PartTime(1,'Sara', 50000, 'WE', 'Lahore',5);

console.log('Employee Details:\n'+peremp.getname()+'\n'+partemp.getname());
console.log('Permanent Employee:\n'+peremp.showData());
console.log('PartTime Employee:\n'+partemp.showData());