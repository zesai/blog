<?php 
class Blade {
/**
 * Compile the view at the given path.
 *
 * @param  string|null  $path
 * @return void
 */
static public function compile ( $path =NULL)  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->compile($path);
}
/**
 * Get the path currently being compiled.
 *
 * @return string
 */
static public function getPath ()  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->getPath();
}
/**
 * Set the path currently being compiled.
 *
 * @param  string  $path
 * @return void
 */
static public function setPath ( $path )  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->setPath($path);
}
/**
 * Compile the given Blade template contents.
 *
 * @param  string  $value
 * @return string
 */
static public function compileString ( $value )  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->compileString($value);
}
/**
 * Strip the parentheses from the given expression.
 *
 * @param  string  $expression
 * @return string
 */
static public function stripParentheses ( $expression )  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->stripParentheses($expression);
}
/**
 * Register a custom Blade compiler.
 *
 * @param  callable  $compiler
 * @return void
 */
static public function extend (callable $compiler )  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->extend($compiler);
}
/**
 * Get the extensions used by the compiler.
 *
 * @return array
 */
static public function getExtensions ()  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->getExtensions();
}
/**
 * Register an "if" statement directive.
 *
 * @param  string  $name
 * @param  callable  $callback
 * @return void
 */
static public function if ( $name ,callable $callback )  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->if($name,$callback);
}
/**
 * Check the result of a condition.
 *
 * @param  string  $name
 * @param  array  $parameters
 * @return bool
 */
static public function check ( $name , $parameters )  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->check($name,$parameters);
}
/**
 * Register a class-based component alias directive.
 *
 * @param  string  $class
 * @param  string|null  $alias
 * @param  string  $prefix
 * @return void
 */
static public function component ( $class , $alias =NULL, $prefix ='')  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->component($class,$alias,$prefix);
}
/**
 * Register an array of class-based components.
 *
 * @param  array  $components
 * @param  string  $prefix
 * @return void
 */
static public function components (array $components , $prefix ='')  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->components($components,$prefix);
}
/**
 * Get the registered class component aliases.
 *
 * @return array
 */
static public function getClassComponentAliases ()  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->getClassComponentAliases();
}
/**
 * Register a component alias directive.
 *
 * @param  string  $path
 * @param  string|null  $alias
 * @return void
 */
static public function aliasComponent ( $path , $alias =NULL)  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->aliasComponent($path,$alias);
}
/**
 * Register an include alias directive.
 *
 * @param  string  $path
 * @param  string|null  $alias
 * @return void
 */
static public function include ( $path , $alias =NULL)  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->include($path,$alias);
}
/**
 * Register an include alias directive.
 *
 * @param  string  $path
 * @param  string|null  $alias
 * @return void
 */
static public function aliasInclude ( $path , $alias =NULL)  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->aliasInclude($path,$alias);
}
/**
 * Register a handler for custom directives.
 *
 * @param  string  $name
 * @param  callable  $handler
 * @return void
 *
 * @throws \InvalidArgumentException
 */
static public function directive ( $name ,callable $handler )  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->directive($name,$handler);
}
/**
 * Get the list of custom directives.
 *
 * @return array
 */
static public function getCustomDirectives ()  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->getCustomDirectives();
}
/**
 * Register a new precompiler.
 *
 * @param  callable  $precompiler
 * @return void
 */
static public function precompiler (callable $precompiler )  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->precompiler($precompiler);
}
/**
 * Set the echo format to be used by the compiler.
 *
 * @param  string  $format
 * @return void
 */
static public function setEchoFormat ( $format )  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->setEchoFormat($format);
}
/**
 * Set the "echo" format to double encode entities.
 *
 * @return void
 */
static public function withDoubleEncoding ()  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->withDoubleEncoding();
}
/**
 * Set the "echo" format to not double encode entities.
 *
 * @return void
 */
static public function withoutDoubleEncoding ()  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->withoutDoubleEncoding();
}
/**
 * Indicate that component tags should not be compiled.
 *
 * @return void
 */
static public function withoutComponentTags ()  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->withoutComponentTags();
}
/**
 * Create a new compiler instance.
 *
 * @param  \Illuminate\Filesystem\Filesystem  $files
 * @param  string  $cachePath
 * @return void
 *
 * @throws \InvalidArgumentException
 */
public function __construct (Illuminate\Filesystem\Filesystem $files , $cachePath )  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->__construct($files,$cachePath);
}
/**
 * Get the path to the compiled version of a view.
 *
 * @param  string  $path
 * @return string
 */
static public function getCompiledPath ( $path )  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->getCompiledPath($path);
}
/**
 * Determine if the view at the given path is expired.
 *
 * @param  string  $path
 * @return bool
 */
static public function isExpired ( $path )  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->isExpired($path);
}
/**
 * Get a new component hash for a component name.
 *
 * @param  string  $component
 * @return string
 */
static public function newComponentHash (string $component )  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->newComponentHash($component);
}
/**
 * Compile a class component opening.
 *
 * @param  string  $component
 * @param  string  $alias
 * @param  string  $data
 * @param  string  $hash
 * @return string
 */
static public function compileClassComponentOpening (string $component ,string $alias ,string $data ,string $hash )  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->compileClassComponentOpening($component,$alias,$data,$hash);
}
/**
 * Compile the end-component statements into valid PHP.
 *
 * @return string
 */
static public function compileEndComponentClass ()  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->compileEndComponentClass();
}
/**
 * Sanitize the given component attribute value.
 *
 * @param  mixed  $value
 * @return mixed
 */
static public function sanitizeComponentAttribute ( $value )  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->sanitizeComponentAttribute($value);
}
/**
 * Compile Blade echos into valid PHP.
 *
 * @param  string  $value
 * @return string
 */
static public function compileEchos ( $value )  
{
 	 return (new Illuminate\View\Compilers\BladeCompiler)->compileEchos($value);
}

}
