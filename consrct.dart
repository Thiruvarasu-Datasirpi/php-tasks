

class Person {
  String name;
  int age;

  Person(this.name, this.age) {
    this.name = name;
    this.age = age;
  }

  void sayHello() {
    print('Hello, my name is $name, and I am $age years old.');
  }
}

void main() {
  var person1 = Person('Alice', 30);
  person1.sayHello();
}
