import Animal from "./animal.js";
export default class Zebra extends Animal {
    constructor(age, gender, isWild) {
        super(age, gender);
        this.isWild = isWild;
    }

    run() {
        return 'it can run';
    }

    show(){
        return(this.showData()+'\nIs Wild: '+this.isWild);
    }

};