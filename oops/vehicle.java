class Vehicle {
    protected String brand = "Ford";
    public void honk() {
        System.out.println("honk, honk!");
    }
}

class Car extends Vehicle {
    protected String modelName = "Mustang";
}
public class vehicle{
        public static void main(String[] args) {
            Car myFastCar = new Car();
            myFastCar.honk();
            System.out.println(myFastCar.brand + " " + myFastCar.modelName);
        }
    }

