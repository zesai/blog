<?php 
class Event {
/**
 * Create a new event dispatcher instance.
 *
 * @param  \Illuminate\Contracts\Container\Container|null  $container
 * @return void
 */
public function __construct (Illuminate\Contracts\Container\Container $container =NULL)  
{
 	 return (new Illuminate\Events\Dispatcher)->__construct($container);
}
/**
 * Register an event listener with the dispatcher.
 *
 * @param  string|array  $events
 * @param  \Closure|string  $listener
 * @return void
 */
static public function listen ( $events , $listener )  
{
 	 return (new Illuminate\Events\Dispatcher)->listen($events,$listener);
}
/**
 * Determine if a given event has listeners.
 *
 * @param  string  $eventName
 * @return bool
 */
static public function hasListeners ( $eventName )  
{
 	 return (new Illuminate\Events\Dispatcher)->hasListeners($eventName);
}
/**
 * Determine if the given event has any wildcard listeners.
 *
 * @param  string  $eventName
 * @return bool
 */
static public function hasWildcardListeners ( $eventName )  
{
 	 return (new Illuminate\Events\Dispatcher)->hasWildcardListeners($eventName);
}
/**
 * Register an event and payload to be fired later.
 *
 * @param  string  $event
 * @param  array  $payload
 * @return void
 */
static public function push ( $event , $payload =array ())  
{
 	 return (new Illuminate\Events\Dispatcher)->push($event,$payload);
}
/**
 * Flush a set of pushed events.
 *
 * @param  string  $event
 * @return void
 */
static public function flush ( $event )  
{
 	 return (new Illuminate\Events\Dispatcher)->flush($event);
}
/**
 * Register an event subscriber with the dispatcher.
 *
 * @param  object|string  $subscriber
 * @return void
 */
static public function subscribe ( $subscriber )  
{
 	 return (new Illuminate\Events\Dispatcher)->subscribe($subscriber);
}
/**
 * Fire an event until the first non-null response is returned.
 *
 * @param  string|object  $event
 * @param  mixed  $payload
 * @return array|null
 */
static public function until ( $event , $payload =array ())  
{
 	 return (new Illuminate\Events\Dispatcher)->until($event,$payload);
}
/**
 * Fire an event and call the listeners.
 *
 * @param  string|object  $event
 * @param  mixed  $payload
 * @param  bool  $halt
 * @return array|null
 */
static public function dispatch ( $event , $payload =array (), $halt =false)  
{
 	 return (new Illuminate\Events\Dispatcher)->dispatch($event,$payload,$halt);
}
/**
 * Get all of the listeners for a given event name.
 *
 * @param  string  $eventName
 * @return array
 */
static public function getListeners ( $eventName )  
{
 	 return (new Illuminate\Events\Dispatcher)->getListeners($eventName);
}
/**
 * Register an event listener with the dispatcher.
 *
 * @param  \Closure|string  $listener
 * @param  bool  $wildcard
 * @return \Closure
 */
static public function makeListener ( $listener , $wildcard =false)  
{
 	 return (new Illuminate\Events\Dispatcher)->makeListener($listener,$wildcard);
}
/**
 * Create a class based listener using the IoC container.
 *
 * @param  string  $listener
 * @param  bool  $wildcard
 * @return \Closure
 */
static public function createClassListener ( $listener , $wildcard =false)  
{
 	 return (new Illuminate\Events\Dispatcher)->createClassListener($listener,$wildcard);
}
/**
 * Remove a set of listeners from the dispatcher.
 *
 * @param  string  $event
 * @return void
 */
static public function forget ( $event )  
{
 	 return (new Illuminate\Events\Dispatcher)->forget($event);
}
/**
 * Forget all of the pushed listeners.
 *
 * @return void
 */
static public function forgetPushed ()  
{
 	 return (new Illuminate\Events\Dispatcher)->forgetPushed();
}
/**
 * Set the queue resolver implementation.
 *
 * @param  callable  $resolver
 * @return static|$this
 */
static public function setQueueResolver (callable $resolver )  
{
 	 return (new Illuminate\Events\Dispatcher)->setQueueResolver($resolver);
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
 	 return (new Illuminate\Events\Dispatcher)->macro($name,$macro);
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
 	 return (new Illuminate\Events\Dispatcher)->mixin($mixin,$replace);
}
/**
 * Checks if macro is registered.
 *
 * @param  string  $name
 * @return bool
 */
static public function hasMacro ( $name )  
{
 	 return (new Illuminate\Events\Dispatcher)->hasMacro($name);
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
 	 return (new Illuminate\Events\Dispatcher)->__callStatic($method,$parameters);
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
 	 return (new Illuminate\Events\Dispatcher)->__call($method,$parameters);
}

}
