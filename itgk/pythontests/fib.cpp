#include <iostream>

int main() {
  long a = 0;
  long b = 1;

  long c = 0;

  for (int i = 0; i < 50000; i++) {
    c = a + b;
    a = b;
    b = c;
  }

  std::cout << c << std::endl;

  return 0;
}
