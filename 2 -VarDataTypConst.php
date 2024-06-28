<?php
/*  Q. HOW MANY DATA TYPES ARE THERE IN PHP ? AND HOW TO DELCARE IT ? 
    PHP has mainly 8 Data Types
1. String - A string is a series of characters surrounded by quotes
2. Integer - Whole numbers
3. Float - Decimal numbers
4. Boolean - true or false
5. Array - An array is a special variable, which can hold more than one value
6. Object - Instance of a Class

7. NULL - Empty variable
8. Resource - A special variable that holds a resource

We can get the data type of any object by using the var_dump()
PHP has no command for declaring a variable. 
It is created the moment we first assign a value to it.

But, Variables must be prefixed with $   
*/

/* PHP is a Loosely Typed Language::
PHP automatically associates a data type to the variable, depending on its value. 
Since the data types are not set in a strict sense, we can do things like adding 
a string to an integer without causing an error. */
echo "5" + 5 . "\n";  // this will output 10
/* In PHP 7, type declarations were added. This gives an option to specify 
the data type expected when declaring a function, and by enabling 
the strict requirement, it will throw a "Fatal Error" on a type mismatch. 
*/


$name = 'Sudhanshu'; // String, Can be in single or double quotes
$age = 25; // Integer
$hasBrain = true; // Boolean
$gradeAvg = 8.11; //Float

var_dump($hasBrain);  // get the data type of a variable, use the var_dump() function.


// Double quotes can be used to add variables to strings
echo "$name is $age years old \n";
// We can even use . like +  but double quotes method is easier  
// Q. HOW CONCATNATION WORKS FOR PHP ? **


   // Strings Methods Q. WHAT ARE VARIOUS STRING METHODS IN PHP ?  

// strlen() function returns the length of a string
echo strlen("Sudhanshu") . "\n";   // outputs 9

// str_word_count() function counts the number of words in a string
echo str_word_count("Hello world!") . "\n";  // outputs 2 

// strpos() function searches for a specific text within a string
echo strpos("Hello world!", "world") . "\n" ;
/* returns the character position of the first match that is 6
      If no match is found, it will return FALSE. 
       */


// built-in functions that we can use to modify strings
/*
strtoupper() function returns the string in upper case
strtolower() function returns the string in lower case
str_replace() function replaces some characters with some other characters
strrev() function reverses a string
trim() removes any whitespace from the beginning or the end
explode() function splits a string into an array
returns a range of characters by using the substr() function
*/


// replacing characters in a string 
$greet = 'Hello World';
echo str_replace('World', 'PHP', $greet) . "\n";

echo substr($greet, 0, 5) . "\n"; // Specify the start index and end index 
// Use negative indexes to start the slice from the end of the string
  // The last character has index -1
 
// Q. EXPLAIN NULL IN PHP ? ***
// NULL value - no value assigned to it
  // If a variable is created without a value,
     //  it is automatically assigned a value of NULL.

// Q. WHAT IS PHP RESOURCE ? ***
/* PHP Resource - storing reference to functions and resources external 
to PHP. A common example of using the resource data type is a database call 
(Details about Resource later) */


// Q.HOW CASTING IS DONE IN PHP ? **
  /* Casting allows us to change the data type of an existing variable, 
   but not by changing the actual value. 
   Casting in PHP is done with these statements:
   (string) - Converts to data type String
   (int) - Converts to data type Integer
   (float) - Converts to data type Float
   (bool) - Converts to data type Boolean
   (array) - Converts to data type Array
   (object) - Converts to data type Object 
   (unset) - Converts to data type NULL */

   $aString = " 1999";
   $aString =(int) $aString;
   var_dump($aString); // outputs as int 



// Q. EXPALIN VARIABLE SCOPE IN PHP. HOW MANY ARE THERE ? ***
// Variables Scope 
/* The scope of a variable is the part where the variable can be referenced or used. 
PHP has 3 different variable scopes:
local -  declared within a function has a LOCAL SCOPE and 
         can only be accessed within that function
    
global - declared outside a function has a GLOBAL SCOPE and 
         can only be accessed outside a function and not inside a function 

static - does not lose its value when program execution leaves the scope
*/

// global, we already outputed global scoped varibles, those can't be acessed inside 
     // a function , (we will see about function in function file)

// Q. HOW CAN WE ACCESS GLOBAL VARIABLE INSIDE A FUNCTION IN PHP ? ***
// 'global' keyword is used to access a global variable from within a function

     function testFunction() {
      $x = 5; // local scope
      global $name; // used 'global' keyword and this $name is defined outside   
      echo "<h3> Variable inside function is: $x </h3>";
     //  echo "<h3>Variable inside function is: $name</h3>"; UNDEFINED 
     echo "<h3> Using 'global' keyword with global Variable inside function, we can 
                access the global varibale that is $name </h3>";
     }
     testFunction();


  // Q. WHERE GLOBAL VARIABLES ARE STORED IN PHP ? ** 
  /* PHP  stores all global variables in an array called $GLOBALS[index]. 
    The index holds the name of the variable. This array is also accessible from 
    within functions and can be used to update global variables directly. */
  // so this could be an alternative to 'global' keyword, we can do like this 
  
   $number1 = 10;
   $number2 = 15;

   function mySum() {
   $GLOBALS['number2'] = $GLOBALS['number1'] + $GLOBALS['number2'];
   }
   mySum();
   echo $number2 . "\n";  // 25 

//Q. CAN WE HAVE SAME NAME FOR LOCAL VARIABLES ? WHY ? *
// We can have local variables with the same name in different functions, 
  // because local variables are only recognized by the function
        // in which they are declared.

// EXPLAIN STATIC KEYWORD IN PHP ? ***
/* 'static' keyword - when a function is completed/executed, all of its variables are 
                     deleted. However, sometimes we want a local variable NOT to 
                     be deleted. We need it for a further job. To do this, 
                     use the static keyword when first declare the variable */
function testFun() {
    static $staticVAR = 1 . "\n";
    echo $staticVAR;
    $staticVAR++;
}
testFun(); // 1
testFun(); // 2 and so on .. 

// HOW CAN WE CHECK IF A VARIABLE EXITS OR NOT ? ***
/* variable lifecycle:
  Before a variable is used, it has no existence. It is unset. 
  It is possible to check if a variable doesn't exist by using isset().

  This returns true provided the variable exists and isn't set to null. 
  With the exception of null, the value a variable plays no part in 
  determining whether a variable is set. 
  
  Setting an existing variable to null 
  is a way of unsetting a variable. 
  
  Q. CAN WE UNSET A EXISTING VARIABLE AND HOW ? **
  
  Another way is variables may be destroyed by 
  using the unset().*/

  var_dump(isset($a)); // returns false as $a was not set 
  
  $bas = null;  
  var_dump(isset($bas)); // returns also false 
  
// A variable can be tested for emptiness using empty();




// EXPLAIN WHAT IS VARIABLE VARIABLES ? *** 
// PHP Variable variables
/* In PHP, it is possible to set variable name dynamically. 
  Such a variable uses value of an existing variable as name. 
  A variable variable is defined with two $ signs as prefix */

  $a = "Hello";
  $$a = "PHP "; // This creates a variable named $Hello with the value "PHP" 
  echo $Hello; 



/* -------------------------------------------PREDEFINED VARIABLES OR SUPERGLOBALS */


/*
Q. EXPLAIN WHAT ARE PREDEFINED VARIBALES IN PHP ? ***
PHP has some predefined variables (12 predefined variables in php 8) like
$GLOBALS, Superglobals - $_GET, $_POST etc.

Predefined variables in PHP, also simply known as superglobals, are built-in 
variables that are always accessible, regardless of scope. We can access them from 
any function, class or file without having to do anything special.

*/

// Q. EPLAIN WHAT IS $_SERVER superglobals ? **
/* 
$_SERVER is a PHP super global variable or array which holds information 
about the web server like header, script locations etc. Additionally there are 
various elements that could go inside $_SERVER like:
$_SERVER['PHP_SELF'] - Returns the filename of the currently executing script
$_SERVER['SERVER_ADDR'] -	Returns the IP address of the host server 
$_SERVER['REQUEST_METHOD'] - Returns the request method used to access the page 
$_SERVER['REMOTE_ADDR']	- Returns the IP address from where the user is viewing 
                          the current page
$_SERVER['SERVER_PORT']	- Returns the port on the server machine
etc. (refer internet when needed)

*/
// var_dump($_SERVER); by this we could see all info but we see this later clearly 
echo $_SERVER['PHP_SELF'];
/*The filename of the currently executing script, relative to the document root.
For instance, $_SERVER['PHP_SELF'] in a script at the address 
ht#p://example.com/foo/bar.php would be /foo/bar.php.  */





// $_GET & $_POST Superglobals *** Q. EXPLAIN ABOUT $_GET AND $_POST SUPERGLOBALS 
/* 
We can pass or get data through urls and forms using the $_GET and with $_POST
we could get data only through froms.

$_GET contains an array of variables received via the HTTP GET method.
There are two main ways to send variables via the HTTP GET method:
1. Query strings in the URL
2. HTML Forms
Q. WHAT IS QUERY STRING IN THE URL ? 
   A query string is data added at the end of a URL. In a link, everything after 
   the ? sign is part of the query string

*/
?> <!-- Ending this so that we work on little html 
         I know outputs in browser can be very confusing but with hard attention
         and liitle focus it can be adjusted 
     --> 

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?sname=sname"> Click Me </a>
<!-- This link will bring to our own current file, now we could pass variables or any
 data through a URL, for this we will put a ? near php's ending tag which would 
 be same as going up to address bar and putting ? there after php, we could 
 also verify this  --> 
<?php 
if(isset($_POST['Submit'])) {
  echo $_POST['sname']; 
}
?> 

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" 
  method="POST"> 
<!-- action is the file that we want this form to be submitted, here we would 
     use our php self and another thing to note that our form could be either 
     get request or post request and by default it gonna be get  -->
 <div>
  <label for="pname"> Enter Something: </label>
  <input type="text" name="sname">  
  <!--- Since we have name attribute as sname which had been used previously 
        it should replace $_GET['sname'] when form is submited to whatever
        written in from instead of  sname but the problem with get method
        is that anything with our name attribute is displayed in URL
        so post method is more secure for submiting data   --->
 </div>
 <input type="submit" value="Submit" name="submit"> 
</form>
<!--- 
A note for what will happen when we use post instead of get so we need just change 
the GET to POST and that it but at refresh it gonna give error which will be gone 
after submiting form which will be resolved using isset fucntion 
(Note we will need a practice on forms later + additionally forms using php can have 
security issues which we will see to resolve by sanitising later in dedicated form
project)
--->













<?php 
  // Q. EXPLAIN CONSTANTS IN PHP. HOW IT IS CREATED ? **
   // Constants 
  /* Constants are like variables except that once they are defined 
     they cannot be changed or made undefined. It is the identifier or the name of 
     a value that can not be changed during scripts. 
     Constants are automatically global across the entire script.*/

     // To create a constant, use the define() function.
     define("GREETING", "Welcome to the hell of PHP");  // two paras name and value
     echo GREETING;

     // We can also create a constant by using the const keyword.
     const GREET = " , Do not underestimate PHP";
     echo GREET;
     
     // DIFFERENCE BETWEEN DEINE() AND CONST ? **
     /*  const vs define 
      const cannot be created inside another block scope, like inside a function 
      or inside an if statement. 
      define can be created inside another block scope.
      define() had a case-insensitive option but is now depricated, so 
      both are case sensitive. */

      // Constants are used commonly for database credentials like 
      define('HOST', ' Localhost ');
      define ("db_name", "dev-db");
      echo HOST;
      // We will know this clearly when we do project

       // WHAT ARE PREDEFINED OR MAGIC CONSTANST ? 
      // PHP Predefined Constants or Magic Constants 
      /* PHP provides a large number of predefined constants to any script
       which it runs. Many of these constants, however, are created by various 
       extensions, and will only be present when those extensions are available 
       We can have many predefined constants like

       PHP_VERSION: Returns the version of the PHP 
       PHP_OS: Returns the name of the operating system PHP is running on
       PHP_EOL: Returns the end-of-line character sequence used by PHP scripts
       DIRECTORY_SEPARATOR: Returns the directory separator used in the file system 
                            (e.g., "/" on Unix-like systems, "" on Windows).
      __FILE__: Returns the full path and filename of the current file.
      __DIR__: Returns the directory of the current file.

       */

       
// Checking PHP version 
if (version_compare(PHP_VERSION, '7.4.0', '>=')) {
  // PHP 7.4.0 or newer specific code
  echo "Running PHP 7.4.0 or newer.";
} else {
  // Code for older PHP versions
  echo "Running PHP version older than 7.4.0.";
}


// Building Platform-Independent File Paths (?not fully understood)
$path = __DIR__ . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'config.php';
// $path will contain something like '/var/www/html/project/includes/config.php' 
    // on Unix-like systems


// Q. HOW MANY MAGIC CONSTANTS ARE THERE ? IS PREDEINED AND MAGIC CONSTANT SAME ? 
/* __DIR__ and __FILE__  are actually magic constants which can be thought of 
predefined constants but they not exactly constants at all and they are case 
insesitive. There are nine magical constants that change depending on where they 
are used. For example, the value of __LINE__ depends on the line that it's used on 
in our script. All these "magical" constants are resolved at compile time 
These magic constants are written with a double underscore at the start and the end,
 except for the ClassName::class constant.
 
__CLASS__: If used inside a class, the class name is returned.	
__DIR__:	The directory of the file.	
__FILE__:	The file name including the full path.	
__FUNCTION__:	If inside a function, the function name is returned.	
__LINE__:	The current line number.	
__METHOD__:	If used inside a function that belongs to a class, both class and 
            function name is returned.	
__NAMESPACE__:	If used inside a namespace, the name of the namespace is returned.	
__TRAIT__	If used inside a trait, the trait name is returned.	
ClassName::class :	Returns the name of the specified class and the name of the 
                    namespace, if any.*/
// will see later in details 
      ?>          
