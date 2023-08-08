void main() {
  // Create an empty list of integers
  List<int> numbers = [];

  numbers.add(10);
  numbers.addAll([20, 30, 40, 50]);

  print("First element: ${numbers[0]}"); 

  numbers[1] = 25;

  print("List of numbers: $numbers"); 

  int sum = 0;
  for (int number in numbers) {
    sum += number;
  }
  print("Sum of all elements: $sum"); 

  List<int> filteredNumbers = [];
  for (int number in numbers) {
    if (number > 30) {
      filteredNumbers.add(number);
    }
  }
  print("Filtered numbers: $filteredNumbers"); 
}