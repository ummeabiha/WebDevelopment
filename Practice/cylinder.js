import Circle from './circle.js'
export default class Cylinder extends Circle{
    constructor(radius, x, y, height){
        super(radius,x,y);
        this.height=height;
    }

    volume(){
        return(3.14*this.radius*this.radius*this.height);
    }

    show2(){
        return '<br>'+this.show1()+' and height is '+this.height;
    }
}