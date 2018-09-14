// Correct me:
// with two arguments this runs in O(n^m + 2) ?
// where n = largest array length, m = smallest array length

const intersect = (...arrays) => {
  const [largest, ...smallers] = arrays.sort((a,b) => b.length - a.length)
  const uniq = arr => [...new Set(arr)];
  const innerIntersect = (a, b, ...rest) => {
    if (rest.length) return innerIntersect(a, innerIntersect(b, ...rest));
    return uniq(a).filter(x => b.includes(x));
  };
  return innerIntersect(largest, ...smallers)
}

console.log(intersect([1,2,3,4], [2,4], [4,2,6])) // <-- [2,4]
