<?php 
class Str {
/**
 * Get a new stringable object from the given string.
 *
 * @param  string  $string
 * @return \Illuminate\Support\Stringable
 */
static public function of ( $string )  
{
 	 return (new Illuminate\Support\Str)->of($string);
}
/**
 * Return the remainder of a string after the first occurrence of a given value.
 *
 * @param  string  $subject
 * @param  string  $search
 * @return string
 */
static public function after ( $subject , $search )  
{
 	 return (new Illuminate\Support\Str)->after($subject,$search);
}
/**
 * Return the remainder of a string after the last occurrence of a given value.
 *
 * @param  string  $subject
 * @param  string  $search
 * @return string
 */
static public function afterLast ( $subject , $search )  
{
 	 return (new Illuminate\Support\Str)->afterLast($subject,$search);
}
/**
 * Transliterate a UTF-8 value to ASCII.
 *
 * @param  string  $value
 * @param  string  $language
 * @return string
 */
static public function ascii ( $value , $language ='en')  
{
 	 return (new Illuminate\Support\Str)->ascii($value,$language);
}
/**
 * Get the portion of a string before the first occurrence of a given value.
 *
 * @param  string  $subject
 * @param  string  $search
 * @return string
 */
static public function before ( $subject , $search )  
{
 	 return (new Illuminate\Support\Str)->before($subject,$search);
}
/**
 * Get the portion of a string before the last occurrence of a given value.
 *
 * @param  string  $subject
 * @param  string  $search
 * @return string
 */
static public function beforeLast ( $subject , $search )  
{
 	 return (new Illuminate\Support\Str)->beforeLast($subject,$search);
}
/**
 * Get the portion of a string between two given values.
 *
 * @param  string  $subject
 * @param  string  $from
 * @param  string  $to
 * @return string
 */
static public function between ( $subject , $from , $to )  
{
 	 return (new Illuminate\Support\Str)->between($subject,$from,$to);
}
/**
 * Convert a value to camel case.
 *
 * @param  string  $value
 * @return string
 */
static public function camel ( $value )  
{
 	 return (new Illuminate\Support\Str)->camel($value);
}
/**
 * Determine if a given string contains a given substring.
 *
 * @param  string  $haystack
 * @param  string|string[]  $needles
 * @return bool
 */
static public function contains ( $haystack , $needles )  
{
 	 return (new Illuminate\Support\Str)->contains($haystack,$needles);
}
/**
 * Determine if a given string contains all array values.
 *
 * @param  string  $haystack
 * @param  string[]  $needles
 * @return bool
 */
static public function containsAll ( $haystack ,array $needles )  
{
 	 return (new Illuminate\Support\Str)->containsAll($haystack,$needles);
}
/**
 * Determine if a given string ends with a given substring.
 *
 * @param  string  $haystack
 * @param  string|string[]  $needles
 * @return bool
 */
static public function endsWith ( $haystack , $needles )  
{
 	 return (new Illuminate\Support\Str)->endsWith($haystack,$needles);
}
/**
 * Cap a string with a single instance of a given value.
 *
 * @param  string  $value
 * @param  string  $cap
 * @return string
 */
static public function finish ( $value , $cap )  
{
 	 return (new Illuminate\Support\Str)->finish($value,$cap);
}
/**
 * Determine if a given string matches a given pattern.
 *
 * @param  string|array  $pattern
 * @param  string  $value
 * @return bool
 */
static public function is ( $pattern , $value )  
{
 	 return (new Illuminate\Support\Str)->is($pattern,$value);
}
/**
 * Determine if a given string is 7 bit ASCII.
 *
 * @param  string  $value
 * @return bool
 */
static public function isAscii ( $value )  
{
 	 return (new Illuminate\Support\Str)->isAscii($value);
}
/**
 * Determine if a given string is a valid UUID.
 *
 * @param  string  $value
 * @return bool
 */
static public function isUuid ( $value )  
{
 	 return (new Illuminate\Support\Str)->isUuid($value);
}
/**
 * Convert a string to kebab case.
 *
 * @param  string  $value
 * @return string
 */
static public function kebab ( $value )  
{
 	 return (new Illuminate\Support\Str)->kebab($value);
}
/**
 * Return the length of the given string.
 *
 * @param  string  $value
 * @param  string|null  $encoding
 * @return int
 */
static public function length ( $value , $encoding =NULL)  
{
 	 return (new Illuminate\Support\Str)->length($value,$encoding);
}
/**
 * Limit the number of characters in a string.
 *
 * @param  string  $value
 * @param  int  $limit
 * @param  string  $end
 * @return string
 */
static public function limit ( $value , $limit =100, $end ='...')  
{
 	 return (new Illuminate\Support\Str)->limit($value,$limit,$end);
}
/**
 * Convert the given string to lower-case.
 *
 * @param  string  $value
 * @return string
 */
static public function lower ( $value )  
{
 	 return (new Illuminate\Support\Str)->lower($value);
}
/**
 * Limit the number of words in a string.
 *
 * @param  string  $value
 * @param  int  $words
 * @param  string  $end
 * @return string
 */
static public function words ( $value , $words =100, $end ='...')  
{
 	 return (new Illuminate\Support\Str)->words($value,$words,$end);
}
/**
 * Parse a Class[@]method style callback into class and method.
 *
 * @param  string  $callback
 * @param  string|null  $default
 * @return array<int, string|null>
 */
static public function parseCallback ( $callback , $default =NULL)  
{
 	 return (new Illuminate\Support\Str)->parseCallback($callback,$default);
}
/**
 * Get the plural form of an English word.
 *
 * @param  string  $value
 * @param  int  $count
 * @return string
 */
static public function plural ( $value , $count =2)  
{
 	 return (new Illuminate\Support\Str)->plural($value,$count);
}
/**
 * Pluralize the last word of an English, studly caps case string.
 *
 * @param  string  $value
 * @param  int  $count
 * @return string
 */
static public function pluralStudly ( $value , $count =2)  
{
 	 return (new Illuminate\Support\Str)->pluralStudly($value,$count);
}
/**
 * Generate a more truly "random" alpha-numeric string.
 *
 * @param  int  $length
 * @return string
 */
static public function random ( $length =16)  
{
 	 return (new Illuminate\Support\Str)->random($length);
}
/**
 * Replace a given value in the string sequentially with an array.
 *
 * @param  string  $search
 * @param  array<int|string, string>  $replace
 * @param  string  $subject
 * @return string
 */
static public function replaceArray ( $search ,array $replace , $subject )  
{
 	 return (new Illuminate\Support\Str)->replaceArray($search,$replace,$subject);
}
/**
 * Replace the first occurrence of a given value in the string.
 *
 * @param  string  $search
 * @param  string  $replace
 * @param  string  $subject
 * @return string
 */
static public function replaceFirst ( $search , $replace , $subject )  
{
 	 return (new Illuminate\Support\Str)->replaceFirst($search,$replace,$subject);
}
/**
 * Replace the last occurrence of a given value in the string.
 *
 * @param  string  $search
 * @param  string  $replace
 * @param  string  $subject
 * @return string
 */
static public function replaceLast ( $search , $replace , $subject )  
{
 	 return (new Illuminate\Support\Str)->replaceLast($search,$replace,$subject);
}
/**
 * Begin a string with a single instance of a given value.
 *
 * @param  string  $value
 * @param  string  $prefix
 * @return string
 */
static public function start ( $value , $prefix )  
{
 	 return (new Illuminate\Support\Str)->start($value,$prefix);
}
/**
 * Convert the given string to upper-case.
 *
 * @param  string  $value
 * @return string
 */
static public function upper ( $value )  
{
 	 return (new Illuminate\Support\Str)->upper($value);
}
/**
 * Convert the given string to title case.
 *
 * @param  string  $value
 * @return string
 */
static public function title ( $value )  
{
 	 return (new Illuminate\Support\Str)->title($value);
}
/**
 * Get the singular form of an English word.
 *
 * @param  string  $value
 * @return string
 */
static public function singular ( $value )  
{
 	 return (new Illuminate\Support\Str)->singular($value);
}
/**
 * Generate a URL friendly "slug" from a given string.
 *
 * @param  string  $title
 * @param  string  $separator
 * @param  string|null  $language
 * @return string
 */
static public function slug ( $title , $separator ='-', $language ='en')  
{
 	 return (new Illuminate\Support\Str)->slug($title,$separator,$language);
}
/**
 * Convert a string to snake case.
 *
 * @param  string  $value
 * @param  string  $delimiter
 * @return string
 */
static public function snake ( $value , $delimiter ='_')  
{
 	 return (new Illuminate\Support\Str)->snake($value,$delimiter);
}
/**
 * Determine if a given string starts with a given substring.
 *
 * @param  string  $haystack
 * @param  string|string[]  $needles
 * @return bool
 */
static public function startsWith ( $haystack , $needles )  
{
 	 return (new Illuminate\Support\Str)->startsWith($haystack,$needles);
}
/**
 * Convert a value to studly caps case.
 *
 * @param  string  $value
 * @return string
 */
static public function studly ( $value )  
{
 	 return (new Illuminate\Support\Str)->studly($value);
}
/**
 * Returns the portion of string specified by the start and length parameters.
 *
 * @param  string  $string
 * @param  int  $start
 * @param  int|null  $length
 * @return string
 */
static public function substr ( $string , $start , $length =NULL)  
{
 	 return (new Illuminate\Support\Str)->substr($string,$start,$length);
}
/**
 * Returns the number of substring occurrences.
 *
 * @param  string  $haystack
 * @param  string  $needle
 * @param  int  $offset
 * @param  int|null  $length
 * @return int
 */
static public function substrCount ( $haystack , $needle , $offset =0, $length =NULL)  
{
 	 return (new Illuminate\Support\Str)->substrCount($haystack,$needle,$offset,$length);
}
/**
 * Make a string's first character uppercase.
 *
 * @param  string  $string
 * @return string
 */
static public function ucfirst ( $string )  
{
 	 return (new Illuminate\Support\Str)->ucfirst($string);
}
/**
 * Generate a UUID (version 4).
 *
 * @return \Ramsey\Uuid\UuidInterface
 */
static public function uuid ()  
{
 	 return (new Illuminate\Support\Str)->uuid();
}
/**
 * Generate a time-ordered UUID (version 4).
 *
 * @return \Ramsey\Uuid\UuidInterface
 */
static public function orderedUuid ()  
{
 	 return (new Illuminate\Support\Str)->orderedUuid();
}
/**
 * Set the callable that will be used to generate UUIDs.
 *
 * @param  callable|null  $factory
 * @return void
 */
static public function createUuidsUsing (callable $factory =NULL)  
{
 	 return (new Illuminate\Support\Str)->createUuidsUsing($factory);
}
/**
 * Indicate that UUIDs should be created normally and not using a custom factory.
 *
 * @return void
 */
static public function createUuidsNormally ()  
{
 	 return (new Illuminate\Support\Str)->createUuidsNormally();
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
 	 return (new Illuminate\Support\Str)->macro($name,$macro);
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
 	 return (new Illuminate\Support\Str)->mixin($mixin,$replace);
}
/**
 * Checks if macro is registered.
 *
 * @param  string  $name
 * @return bool
 */
static public function hasMacro ( $name )  
{
 	 return (new Illuminate\Support\Str)->hasMacro($name);
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
 	 return (new Illuminate\Support\Str)->__callStatic($method,$parameters);
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
 	 return (new Illuminate\Support\Str)->__call($method,$parameters);
}

}
