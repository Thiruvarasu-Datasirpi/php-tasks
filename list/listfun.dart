void main() {
  List<int> numbers = [10, 70, 30, 40, 50];

  bool isEmpty = numbers.isEmpty;
  print("Is the list empty? $isEmpty"); 

  bool isNotEmpty = numbers.isNotEmpty;
  print("Is the list not empty? $isNotEmpty");

  // Check if the list contains a specific element
  bool contains30 = numbers.contains(30);
  print("Does the list contain 30? $contains30"); // Output: Does the list contain 30? true

  // Sort the list in ascending order
  numbers.sort();
  print("Sorted list: $numbers"); // Output: Sorted list: [10, 20, 30, 40, 50]

  // Create a new list by applying a function to each element in the original list
  List<String> stringNumbers = numbers.map((number) => number.toString()).toList();
  print("List of strings: $stringNumbers"); // Output: List of strings: [10, 20, 30, 40, 50]

  // Filter elements greater than 30
  List<int> filteredNumbers = numbers.where((number) => number > 30).toList();
  print("Filtered numbers: $filteredNumbers"); // Output: Filtered numbers: [40, 50]

  // Calculate the sum of all elements in the list using fold
  int sum = numbers.fold(0, (previousValue, element) => previousValue + element);
  print("Sum of all elements: $sum"); // Output: Sum of all elements: 150
}
