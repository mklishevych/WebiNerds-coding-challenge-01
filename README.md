# Let's try reincarnating the coding challenges!

The task is to implement a `pipe` function. It can be implemented in any language you're familiar with, but semantics should stay the same as in the example below.

To submit your solution do the following:
1. fork this repository
2. create folder `solution`
3. create a file in that folder named something like `max-klishevych.js`
4. submit a pull request back to this repository

```javascript
const sqrt = v => Math.sqrt(v);
const halve = v => v / 2;
const plusFive = v => v + 5;
plusFive(halve(sqrt(16)));
=> 7

const suchFun = pipe(sqrt, halve, plusFive);
suchFun(16);
=> 7
```
