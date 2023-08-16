
class Addition {
    int add(int a, int b) {
        System.out.println("Adding integers...");
        return a + b;
    }

    double add(double a, double b) {
        System.out.println("Adding doubles...");
        return a + b;
    }
}

public class polymorphnum {

        public static void main(String[] args) {
            Addition addition = new Addition();

            int resultInt = addition.add(2, 3);
            System.out.println("Result of integer addition: " + resultInt);

            double resultDouble = addition.add(2.5, 3.5);
            System.out.println("Result of double addition: " + resultDouble);
        }
    }


