 /*
    1.   Nested subprogram definitions
 */

fun sum(x: Int): Int{
    val sum = x + 10
    fun mult(y: Int): Int{
    	return sum * y
	}
    return mult(15)
}

/*
    2.    Scope of local variables
*/
val num1 = 10
fun scopeLocal(num1: Int) { 
    val num1 = 1
    val temp = 12
    var tot = 0
    println("Scope of Number 1 in function called is: ${num1}\n") 
    for (i in 1..num1) {
        tot += i
        val temp = 8
        println("The Scope of temp is for inside for: ${temp}")
    }
    println("The Scope of temp is for outside for: ${temp}")
}

/*
    3.    Parameter passing methods
*/
fun sumPassingVal():Int{
    var num3 = 5
    var num4 = 3
    return num3 + num4
}

fun passingVal(fn:()->Int):Int{
    val result=fn()
     return result
}
 /*
    4.    Keyword and default parameters
*/
fun passMethods(num5: Int = 3, num6: Int = 5, num7: Int = 7) {
    println("The default parameter is: ${num5}")
    println("The default parameter is: ${num6}")
    println("The default parameter is: ${num7}")
}

 /*
    5.    Closures
*/

fun main() {
    //1.     Nested subprogram definitions 
    var x = 8
    println("★★★	Nested subprogram definitions  ★★★") 
    println("Function in function is reached and the result is: ${sum(x)}\n") 

    // 2.    Scope of local variables 
    println("★★★	Scope of local variables  ★★★") 
    val num1 = 5
    println("Scope of Number 1 before function called is: ${num1}\n") 
    scopeLocal(num1)
    println("Scope of Number 1 after function called is: ${num1}\n") 
    println() 

    // 3.    Parameter passing methods
    println("★★★	Parameter passing methods  ★★★") 
    println("Parameter passing methods is successful and the result: ${passingVal(::sumPassingVal)}\n")//parameter passing function 

    // 4.    Keyword and default parameters
	println("★★★	Keyword and default parameters  ★★★")

    println("No parameter is entered")
    passMethods()

    println("\nFirst Parameter '10' is entered ")
    passMethods(10)

    println("\nFirst '10' and Second '15' Parameters  are entered")
    passMethods(10, 15)
    
    println("\nFirst '10', Second '15', and third '20' Parameters are entered")
    passMethods(10, 15, 20)
    
    println("\nChanging the Parameter's value directly in the main")
    println("\n num5: Int = 3, num6: Int = 5, num7: Int = 7 parameters are changed")
    passMethods(num5= 67, num6 = 35, num7= 53)
    
    // 5.    Closures
    println("\n★★★	Closures  ★★★")
    val stringClosure = arrayOf("ilke", "dogan", "says", "hello")
    println("For String array : Closures \"ilke\", \"dogan\", \"says\", \"hello\"")
    stringClosure.forEach { val tempString = println("Closures is successful and the result:$it")}

}