<?php 
class Mail {
/**
 * Create a new Mail manager instance.
 *
 * @param  \Illuminate\Contracts\Foundation\Application  $app
 * @return void
 */
public function __construct ( $app )  
{
 	 return (new Illuminate\Mail\MailManager)->__construct($app);
}
/**
 * Get a mailer instance by name.
 *
 * @param  string|null  $name
 * @return \Illuminate\Mail\Mailer
 */
static public function mailer ( $name =NULL)  
{
 	 return (new Illuminate\Mail\MailManager)->mailer($name);
}
/**
 * Get a mailer driver instance.
 *
 * @param  string|null  $driver
 * @return \Illuminate\Mail\Mailer
 */
static public function driver ( $driver =NULL)  
{
 	 return (new Illuminate\Mail\MailManager)->driver($driver);
}
/**
 * Create a new transport instance.
 *
 * @param  array  $config
 * @return \Swift_Transport
 */
static public function createTransport (array $config )  
{
 	 return (new Illuminate\Mail\MailManager)->createTransport($config);
}
/**
 * Get the default mail driver name.
 *
 * @return string
 */
static public function getDefaultDriver ()  
{
 	 return (new Illuminate\Mail\MailManager)->getDefaultDriver();
}
/**
 * Set the default mail driver name.
 *
 * @param  string  $name
 * @return void
 */
static public function setDefaultDriver (string $name )  
{
 	 return (new Illuminate\Mail\MailManager)->setDefaultDriver($name);
}
/**
 * Register a custom transport creator Closure.
 *
 * @param  string  $driver
 * @param  \Closure  $callback
 * @return static|$this
 */
static public function extend ( $driver ,Closure $callback )  
{
 	 return (new Illuminate\Mail\MailManager)->extend($driver,$callback);
}
/**
 * Dynamically call the default driver instance.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */
static public function __call ( $method , $parameters )  
{
 	 return (new Illuminate\Mail\MailManager)->__call($method,$parameters);
}

}
