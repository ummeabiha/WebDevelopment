import Animal from "./animal.js";
export default class Fish extends Animal{
    constructor(age, gender, sizeInFt,canEat){
        super(age,gender);
        this.sizeInFt=sizeInFt;
        this.canEat=canEat;
    }

    swim(){
        return 'it can swim';
    }

    show(){
        return(this.showData()+'\nSize In Ft: '+this.sizeInFt+'\nCan Eat: '+this.canEat);
    }
};