import Animal from "./animal.js";
export default class Duck extends Animal{
    constructor(age, gender, beakColor){
        super(age,gender);
        this.beakColor=beakColor;
    }

    swim(){
        return 'it can swim';
    }

    quack(){
        return 'it can quack';
    }

    show(){
        return(this.showData()+'\nBeak Color: '+this.beakColor);
    }

};