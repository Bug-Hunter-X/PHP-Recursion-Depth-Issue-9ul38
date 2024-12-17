function foo(a, b) {
  while (a !== 0 && b !== 0) {
    a--;
    b--;
  }
  return a + b; 
}

console.log(foo(5, 2));