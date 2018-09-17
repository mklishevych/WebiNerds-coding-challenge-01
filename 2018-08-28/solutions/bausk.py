import math
import functools


# implement

def pipe(*funcs):
    def compose(f, g):
        return lambda x: g(f(x))
    return functools.reduce(compose, funcs, lambda x: x)


# test

sqrt = lambda v: math.sqrt(v)
halve = lambda v: v / 2
plusFive = lambda v: v + 5
plusFive(halve(sqrt(16)));
# => 7

suchFun = pipe(sqrt, halve, plusFive)
suchFun(16)
# => 7
