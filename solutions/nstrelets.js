export const pipe = (...funcs) => val => (
  funcs.reduce((v, func) => func(v), val)
)