class Animl {
    String colour = "red";
    int age=10;
}

    class DOg extends Animl {
        String colour = "black";
int  age=10;
        void bark() {
            System.out.println(colour);
            System.out.println(age);
            System.out.println(super.colour);
            System.out.println(super.age);
        }
    }

    public class newss {
        public static void main(String[] args) {
            DOg a = new DOg();

            a.bark();
        }
    }

