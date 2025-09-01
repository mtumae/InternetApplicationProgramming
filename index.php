<?php 


class HelloWorld {
    public function greet(){
        return "<h1>Hello, World!</h1>";
    }

    public function today(){
        return "<p>Today is " . date("l, F j, Y") . "</p>";
    }


}


print (new HelloWorld)->greet();
print (new HelloWorld)->today();
?>