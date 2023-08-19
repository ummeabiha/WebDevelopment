export default class Animal{
    constructor(age,gender){
        this.age=age;
        this.gender=gender;
    }

    isMamal(){
        return 'is a mamal';
    }

    mate(){
        return 'can mate';
    }

    showData(){
        return('Age: '+this.age+'\nGender: '+this.gender);
    }

};