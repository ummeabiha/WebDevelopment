import Duck from "./duck.js";
import Fish from "./fish.js";
import Zebra from "./zebra.js";

const d=new Duck(2,'F','Yellow');
console.log('Duck\n'+d.show()+'\nDuck '+d.isMamal()+', '+d.swim()+', and '+d.quack()+'.');
const f=new Fish(4,'M',2,true);
console.log('Fish\n'+f.show()+'\nFish '+f.mate()+', and '+f.swim()+'.');
const z=new Zebra(10,'F',true);
console.log('Zebra\n'+z.show()+'\nZebra '+z.isMamal()+', and '+z.run()+'.');