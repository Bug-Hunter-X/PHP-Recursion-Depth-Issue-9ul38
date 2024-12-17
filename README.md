# PHP Recursion Depth Issue

This repository demonstrates a common error in PHP: exceeding the maximum recursion depth.  The `bug.php` file contains a recursive function that, given large enough input, will cause a fatal error. The solution, `bugSolution.php`, illustrates a better approach using iterative methods to avoid stack overflow issues.