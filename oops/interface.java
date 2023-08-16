package abs;

interface Animal {
    void makeSound();
    void move();


    String CATEGORY = "Living Being";
}


class Dog implements Animal {

    public void makeSound() {
        System.out.println("Dog barks: Woof! Woof!");
    }

    public void move() {
        System.out.println("Dog moves on four legs.");
    }


    public void fetch() {
        System.out.println("Dog is fetching a ball.");
    }
}

class ths {
    public static void main(String[] args) {
        Dog dog = new Dog();
        dog.makeSound();
        dog.move();
        dog.fetch();

        System.out.println("Category: " + Animal.CATEGORY);
    }
}
