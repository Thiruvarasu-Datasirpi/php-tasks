import java.util.Scanner;

public class Banker {
    String name;
    int age;
    int balance;
    int abalance;
    int vbalance;

    public void setName(String name) {
        this.name = name;
    }

    public void setAge(int age) {
        this.age = age;
    }

    public String getName() {
        return name;
    }

    public int getAge() {
        return age;
    }

    public int getBalance() {
        return balance;
    }
public void bal(){
        System.out.println("enter the amount");
    Scanner scanner =new Scanner(System.in);
        int a = scanner.nextInt();
        balance=balance+a;
        System.out.println("your balance is "+balance);


}
public void wit(){
        Scanner scanner = new Scanner(System.in);
    System.out.println("enter the amount to withdraw");
    int w = scanner.nextInt();
    balance=balance-w;
    System.out.println(balance);
}
public void baldis(){
        System.out.println("your balance is "+balance);
}
    public void display() {
        Scanner scanner = new Scanner(System.in);
        System.out.println("enter your name");

        String name = scanner.next();
        setName(name);
        System.out.println("enter age");
        int age = scanner.nextInt();
        setAge(age);


    }
    public void tran(){
        System.out.println("enter the account number you want to transfer");
        Scanner scanner = new Scanner(System.in);
        int ac =scanner.nextInt();
        System.out.println("enter amount");
        int amount =scanner.nextInt();
        balance=balance-amount;
        System.out.println("successfully transfered");



        vbalance=vbalance +amount;
        System.out.println("balance left is "+balance);


    }
}
