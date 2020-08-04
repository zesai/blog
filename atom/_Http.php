<?php 
class Http {
/**
 * Create a new factory instance.
 *
 * @return void
 */
public function __construct ()  
{
 	 return (new Illuminate\Http\Client\Factory)->__construct();
}
/**
 * Create a new response instance for use during stubbing.
 *
 * @param  array|string  $body
 * @param  int  $status
 * @param  array  $headers
 * @return \GuzzleHttp\Promise\PromiseInterface
 */
static public function response ( $body =NULL, $status =200, $headers =array ())  
{
 	 return (new Illuminate\Http\Client\Factory)->response($body,$status,$headers);
}
/**
 * Get an invokable object that returns a sequence of responses in order for use during stubbing.
 *
 * @param  array  $responses
 * @return \Illuminate\Http\Client\ResponseSequence
 */
static public function sequence (array $responses =array ())  
{
 	 return (new Illuminate\Http\Client\Factory)->sequence($responses);
}
/**
 * Register a stub callable that will intercept requests and be able to return stub responses.
 *
 * @param  callable|array  $callback
 * @return stub responses.
 */
static public function fake ( $callback =NULL)  
{
 	 return (new Illuminate\Http\Client\Factory)->fake($callback);
}
/**
 * Register a response sequence for the given URL pattern.
 *
 * @param  string  $url
 * @return \Illuminate\Http\Client\ResponseSequence
 */
static public function fakeSequence ( $url ='*')  
{
 	 return (new Illuminate\Http\Client\Factory)->fakeSequence($url);
}
/**
 * Stub the given URL using the given callback.
 *
 * @param  string  $url
 * @param  \Illuminate\Http\Client\Response|\GuzzleHttp\Promise\PromiseInterface|callable  $callback
 * @return static|$this
 */
static public function stubUrl ( $url , $callback )  
{
 	 return (new Illuminate\Http\Client\Factory)->stubUrl($url,$callback);
}
/**
 * Record a request response pair.
 *
 * @param  \Illuminate\Http\Client\Request  $request
 * @param  \Illuminate\Http\Client\Response  $response
 * @return void
 */
static public function recordRequestResponsePair ( $request , $response )  
{
 	 return (new Illuminate\Http\Client\Factory)->recordRequestResponsePair($request,$response);
}
/**
 * Assert that a request / response pair was recorded matching a given truth test.
 *
 * @param  callable  $callback
 * @return void
 */
static public function assertSent ( $callback )  
{
 	 return (new Illuminate\Http\Client\Factory)->assertSent($callback);
}
/**
 * Assert that a request / response pair was not recorded matching a given truth test.
 *
 * @param  callable  $callback
 * @return void
 */
static public function assertNotSent ( $callback )  
{
 	 return (new Illuminate\Http\Client\Factory)->assertNotSent($callback);
}
/**
 * Assert that no request / response pair was recorded.
 *
 * @return void
 */
static public function assertNothingSent ()  
{
 	 return (new Illuminate\Http\Client\Factory)->assertNothingSent();
}
/**
 * Assert how many requests have been recorded.
 *
 * @param $count
 * @return void
 */
static public function assertSentCount ( $count )  
{
 	 return (new Illuminate\Http\Client\Factory)->assertSentCount($count);
}
/**
 * Assert that every created response sequence is empty.
 *
 * @return void
 */
static public function assertSequencesAreEmpty ()  
{
 	 return (new Illuminate\Http\Client\Factory)->assertSequencesAreEmpty();
}
/**
 * Get a collection of the request / response pairs matching the given truth test.
 *
 * @param  callable  $callback
 * @return \Illuminate\Support\Collection
 */
static public function recorded ( $callback )  
{
 	 return (new Illuminate\Http\Client\Factory)->recorded($callback);
}
/**
 * Execute a method against a new pending request instance.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */
static public function __call ( $method , $parameters )  
{
 	 return (new Illuminate\Http\Client\Factory)->__call($method,$parameters);
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
 	 return (new Illuminate\Http\Client\Factory)->macro($name,$macro);
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
 	 return (new Illuminate\Http\Client\Factory)->mixin($mixin,$replace);
}
/**
 * Checks if macro is registered.
 *
 * @param  string  $name
 * @return bool
 */
static public function hasMacro ( $name )  
{
 	 return (new Illuminate\Http\Client\Factory)->hasMacro($name);
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
 	 return (new Illuminate\Http\Client\Factory)->__callStatic($method,$parameters);
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
static public function macroCall ( $method , $parameters )  
{
 	 return (new Illuminate\Http\Client\Factory)->macroCall($method,$parameters);
}

}
