function foo(a, b) {
  if (a === 0) {
    return b;
  } else if (b === 0) {
    return a;
  } else {
    return foo(a - 1, b - 1);
  }
}

console.log(foo(5, 2)); // this will cause maximum call stack size exceeded