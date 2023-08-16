

abstract class Bike{

    abstract void crt();
    abstract void run();
    void changeGear(){System.out.println("gear changed");}
}

class Honda extends Bike{
    void run(){System.out.println("running safely..");}
    void crt(){System.out.println("bike created");}
}

class TestAbstraction2{
    public static void main(String args[]){
        Bike obj = new Honda();
        obj.crt();
        obj.run();
        obj.changeGear();
    }
}