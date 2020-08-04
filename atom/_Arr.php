<?php 
class Arr {
/**
 * Determine whether the given value is array accessible.
 *
 * @param  mixed  $value
 * @return bool
 */
static public function accessible ( $value )  
{
 	 return (new Illuminate\Support\Arr)->accessible($value);
}
/**
 * Add an element to an array using "dot" notation if it doesn't exist.
 *
 * @param  array  $array
 * @param  string  $key
 * @param  mixed  $value
 * @return array
 */
static public function add ( $array , $key , $value )  
{
 	 return (new Illuminate\Support\Arr)->add($array,$key,$value);
}
/**
 * Collapse an array of arrays into a single array.
 *
 * @param  iterable  $array
 * @return array
 */
static public function collapse ( $array )  
{
 	 return (new Illuminate\Support\Arr)->collapse($array);
}
/**
 * Cross join the given arrays, returning all possible permutations.
 *
 * @param  iterable  ...$arrays
 * @return array
 */
static public function crossJoin ( $arrays )  
{
 	 return (new Illuminate\Support\Arr)->crossJoin($arrays);
}
/**
 * Divide an array into two arrays. One with keys and the other with values.
 *
 * @param  array  $array
 * @return array
 */
static public function divide ( $array )  
{
 	 return (new Illuminate\Support\Arr)->divide($array);
}
/**
 * Flatten a multi-dimensional associative array with dots.
 *
 * @param  iterable  $array
 * @param  string  $prepend
 * @return array
 */
static public function dot ( $array , $prepend ='')  
{
 	 return (new Illuminate\Support\Arr)->dot($array,$prepend);
}
/**
 * Get all of the given array except for a specified array of keys.
 *
 * @param  array  $array
 * @param  array|string  $keys
 * @return array
 */
static public function except ( $array , $keys )  
{
 	 return (new Illuminate\Support\Arr)->except($array,$keys);
}
/**
 * Determine if the given key exists in the provided array.
 *
 * @param  \ArrayAccess|array  $array
 * @param  string|int  $key
 * @return bool
 */
static public function exists ( $array , $key )  
{
 	 return (new Illuminate\Support\Arr)->exists($array,$key);
}
/**
 * Return the first element in an array passing a given truth test.
 *
 * @param  iterable  $array
 * @param  callable|null  $callback
 * @param  mixed  $default
 * @return mixed
 */
static public function first ( $array ,callable $callback =NULL, $default =NULL)  
{
 	 return (new Illuminate\Support\Arr)->first($array,$callback,$default);
}
/**
 * Return the last element in an array passing a given truth test.
 *
 * @param  array  $array
 * @param  callable|null  $callback
 * @param  mixed  $default
 * @return mixed
 */
static public function last ( $array ,callable $callback =NULL, $default =NULL)  
{
 	 return (new Illuminate\Support\Arr)->last($array,$callback,$default);
}
/**
 * Flatten a multi-dimensional array into a single level.
 *
 * @param  iterable  $array
 * @param  int  $depth
 * @return array
 */
static public function flatten ( $array , $depth =INF)  
{
 	 return (new Illuminate\Support\Arr)->flatten($array,$depth);
}
/**
 * Remove one or many array items from a given array using "dot" notation.
 *
 * @param  array  $array
 * @param  array|string  $keys
 * @return void
 */
static public function forget ( $array , $keys )  
{
 	 return (new Illuminate\Support\Arr)->forget($array,$keys);
}
/**
 * Get an item from an array using "dot" notation.
 *
 * @param  \ArrayAccess|array  $array
 * @param  string|int|null  $key
 * @param  mixed  $default
 * @return mixed
 */
static public function get ( $array , $key , $default =NULL)  
{
 	 return (new Illuminate\Support\Arr)->get($array,$key,$default);
}
/**
 * Check if an item or items exist in an array using "dot" notation.
 *
 * @param  \ArrayAccess|array  $array
 * @param  string|array  $keys
 * @return bool
 */
static public function has ( $array , $keys )  
{
 	 return (new Illuminate\Support\Arr)->has($array,$keys);
}
/**
 * Determine if any of the keys exist in an array using "dot" notation.
 *
 * @param  \ArrayAccess|array  $array
 * @param  string|array  $keys
 * @return bool
 */
static public function hasAny ( $array , $keys )  
{
 	 return (new Illuminate\Support\Arr)->hasAny($array,$keys);
}
/**
 * Determines if an array is associative.
 *
 * An array is "associative" if it doesn't have sequential numerical keys beginning with zero.
 *
 * @param  array  $array
 * @return bool
 */
static public function isAssoc (array $array )  
{
 	 return (new Illuminate\Support\Arr)->isAssoc($array);
}
/**
 * Get a subset of the items from the given array.
 *
 * @param  array  $array
 * @param  array|string  $keys
 * @return array
 */
static public function only ( $array , $keys )  
{
 	 return (new Illuminate\Support\Arr)->only($array,$keys);
}
/**
 * Pluck an array of values from an array.
 *
 * @param  iterable  $array
 * @param  string|array  $value
 * @param  string|array|null  $key
 * @return array
 */
static public function pluck ( $array , $value , $key =NULL)  
{
 	 return (new Illuminate\Support\Arr)->pluck($array,$value,$key);
}
/**
 * Push an item onto the beginning of an array.
 *
 * @param  array  $array
 * @param  mixed  $value
 * @param  mixed  $key
 * @return array
 */
static public function prepend ( $array , $value , $key =NULL)  
{
 	 return (new Illuminate\Support\Arr)->prepend($array,$value,$key);
}
/**
 * Get a value from the array, and remove it.
 *
 * @param  array  $array
 * @param  string  $key
 * @param  mixed  $default
 * @return mixed
 */
static public function pull ( $array , $key , $default =NULL)  
{
 	 return (new Illuminate\Support\Arr)->pull($array,$key,$default);
}
/**
 * Get one or a specified number of random values from an array.
 *
 * @param  array  $array
 * @param  int|null  $number
 * @return mixed
 *
 * @throws \InvalidArgumentException
 */
static public function random ( $array , $number =NULL)  
{
 	 return (new Illuminate\Support\Arr)->random($array,$number);
}
/**
 * Set an array item to a given value using "dot" notation.
 *
 * If no key is given to the method, the entire array will be replaced.
 *
 * @param  array  $array
 * @param  string|null  $key
 * @param  mixed  $value
 * @return array
 */
static public function set ( $array , $key , $value )  
{
 	 return (new Illuminate\Support\Arr)->set($array,$key,$value);
}
/**
 * Shuffle the given array and return the result.
 *
 * @param  array  $array
 * @param  int|null  $seed
 * @return the result.
 */
static public function shuffle ( $array , $seed =NULL)  
{
 	 return (new Illuminate\Support\Arr)->shuffle($array,$seed);
}
/**
 * Sort the array using the given callback or "dot" notation.
 *
 * @param  array  $array
 * @param  callable|string|null  $callback
 * @return array
 */
static public function sort ( $array , $callback =NULL)  
{
 	 return (new Illuminate\Support\Arr)->sort($array,$callback);
}
/**
 * Recursively sort an array by keys and values.
 *
 * @param  array  $array
 * @return array
 */
static public function sortRecursive ( $array )  
{
 	 return (new Illuminate\Support\Arr)->sortRecursive($array);
}
/**
 * Convert the array into a query string.
 *
 * @param  array  $array
 * @return string
 */
static public function query ( $array )  
{
 	 return (new Illuminate\Support\Arr)->query($array);
}
/**
 * Filter the array using the given callback.
 *
 * @param  array  $array
 * @param  callable  $callback
 * @return array
 */
static public function where ( $array ,callable $callback )  
{
 	 return (new Illuminate\Support\Arr)->where($array,$callback);
}
/**
 * If the given value is not an array and not null, wrap it in one.
 *
 * @param  mixed  $value
 * @return array
 */
static public function wrap ( $value )  
{
 	 return (new Illuminate\Support\Arr)->wrap($value);
}
/**
 * Register a custom macro.
 *
 * @param  string  $name
 * @param  object|callable  $macro
 * @return void
 */
static public function macro ( $name , $macro )  
{
 	 return (new Illuminate\Support\Arr)->macro($name,$macro);
}
/**
 * Mix another object into the class.
 *
 * @param  object  $mixin
 * @param  bool  $replace
 * @return void
 *
 * @throws \ReflectionException
 */
static public function mixin ( $mixin , $replace =true)  
{
 	 return (new Illuminate\Support\Arr)->mixin($mixin,$replace);
}
/**
 * Checks if macro is registered.
 *
 * @param  string  $name
 * @return bool
 */
static public function hasMacro ( $name )  
{
 	 return (new Illuminate\Support\Arr)->hasMacro($name);
}
/**
 * Dynamically handle calls to the class.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \BadMethodCallException
 */
static public function __callStatic ( $method , $parameters )  
{
 	 return (new Illuminate\Support\Arr)->__callStatic($method,$parameters);
}
/**
 * Dynamically handle calls to the class.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \BadMethodCallException
 */
static public function __call ( $method , $parameters )  
{
 	 return (new Illuminate\Support\Arr)->__call($method,$parameters);
}

}
