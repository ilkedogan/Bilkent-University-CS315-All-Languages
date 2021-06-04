
package main
import "fmt"

    func myFunction1() bool{
        var boolvar bool = true
	    fmt.Println("Inside Test Function 1")
	    return boolvar
    }
    
    func myFunction2() bool{
        var boolvar bool = false
	    fmt.Println("Inside Test Function 2")
	    return boolvar
    }
    
    func myFunction3() bool{
        var boolvar bool = true
	    fmt.Println("Inside Test Function 3")
	    return boolvar
    }
    
    func myFunction4() bool{
        var boolvar bool = false
	    fmt.Println("Inside Test Function 4")
	    return boolvar
    }
func main() {
    
    /*
        Boolean Expressions in JavaScript in 6 different Category
            1. Boolean operators provided
            2. Data types for operands of boolean operators
            3. Operator precedence rules
            4. Operator associativity rules
            5. Operand evaluation order
            6. Short-circuit evaluation
    */
    
    // # Variables
    var boolTrue1 bool  = true
    var boolTrue2 bool  = true
    var boolTrue3 bool  = true
    var boolFalse1 bool = false
    var boolFalse2 bool = false
    var boolFalse3 bool = false
    var boolvar bool    = true

    /*
        1. Boolean operators provided 
            [ and, or, not]
            is examined in part 2 (below this part)
    
         [ 1.1 and oparator test ] 
    */
    fmt.Println(" 1 . BOOLEAN OPERATORS TESTBOOLEAN OPERATORS: AND")
    
    fmt.Println(" BOOLEAN OPERATORS: AND")
    if boolTrue1 && boolTrue2 == true {
	 fmt.Println("Boolean test for True  - True  and operator: True")
    }
    
    if boolTrue1 && boolFalse3 == false {
	 fmt.Println("Boolean test for True  - False and operator: False\n")
    }
    
    // [ 1.2 or  oparator test ] 
    /*
        BOOLEAN OPERATORS: OR
    */
    
    fmt.Println(" BOOLEAN OPERATORS: OR ")
    if boolTrue1 || boolTrue3 == true {
	 fmt.Println("Boolean test for True  - True  or operator: True")
    }
    
    if boolTrue1 || boolFalse2 == true {
	 fmt.Println("Boolean test for True  - False or operator: True\n")
    }
    
    // [ 1.3 not oparator test ]
    /*
        BOOLEAN OPERATORS: AND/OR NOT
    */
    fmt.Println(" BOOLEAN OPERATORS: AND/OR NOT ")
    
    if !(boolTrue1 && boolTrue3) == false {
	 fmt.Println("Boolean test for True  - True  and not operator: False")
    }
    
    if !(boolTrue1 && boolFalse1) == true {
	 fmt.Println("Boolean test for True  - False and not operator: True")
    }
    fmt.Println("\n")
    
    /*
        2.  Data types for operands of boolean operators
            [ and, or, not]
    */
    
    fmt.Println( " ----       2. DATA TYPES FOR BOOLEAN OPERATORS      ---- ")

	if boolTrue3{
		fmt.Println( "Boolean test for boolean variable for boolean operator is working")
	}
    /*
         3.     Operator precedence rules
        
                Precedence Rank
                1:   ()        Parantheses 
                2:   and        
                3:   or  
    */

    fmt.Println(" BOOLEAN OPERATORS: 'AND' VERSUS 'OR'  ")
    fmt.Println("Boolean test for True and True  or False condition:", boolTrue1 && boolTrue2  || boolFalse1)
    fmt.Println("Boolean test for True or True  and False condition: ", boolTrue1  || boolTrue2 && boolFalse1)
    //and has precedence compared to or 
    fmt.Println("\n")

    fmt.Println(" BOOLEAN OPERATORS: 'AND' VERSUS 'Parantheses'   ")
    fmt.Println("Boolean test for False and False  and True condition :", boolFalse1 && boolFalse2  || boolTrue1)
    fmt.Println("Boolean test for False and (False and True) condition: ", boolFalse1  &&  (boolFalse2 ||  boolTrue1))
    // '()' has precedence compared to and
    fmt.Println("\n")

   /*
      4.     Operator associativity rules

        Precedence Rank       Associativity
        1:   AND           left associativity  
        2:   OR            left associativity
        3:   ()            non associative
    */
    fmt.Println("  4. OPERATOR ASSOCIATIVITY RULES ")
    var varInt1 uint8 = 22
	var varInt2 uint8 = 24
	var varInt3 uint8 = 24

	if (varInt1 == varInt2) && varInt3 == 24 {
		fmt.Println("Right associativity is working for and") // if it was right associativity, this line would work
	}else{
		print("Left associativity is working for and") 
	}

	if (varInt1 == varInt2) || varInt3 == 24{
		fmt.Println("Left associativity is working") // and and or has left associativity
	}else{
		fmt.Println("Right associativity is working  for or") // if it was right associativity, this line would work
	}		

	// Left associativity test for not opartor
	if !boolTrue1 || boolTrue2 {
		fmt.Println(" 'Not' has Right associativity")
	}else{
		fmt.Println(" 'Not' has Left associativity")
	}
		/*
		5.     Operand evaluation order      
		Aim is that the operands are from 
		LEFT -> RIGHT
		*/
		fmt.Println("  5. OPERAND EVALUATION ORDER ")
		
		boolvar = myFunction1() && myFunction2() && myFunction3() && myFunction4()
		fmt.Println("Function-1 and Function-2 and Function-3 and Function-4: ", boolvar)

		boolvar = true
		boolvar = myFunction1() || myFunction2() || myFunction3() || myFunction4();
		fmt.Println("Function-1 or Function-2 or Function-3 or Function-4: ", boolvar)
        
        /*
		 6.     Short-circuit evaluation

		*/
		fmt.Println("  6. SHORT - CIRCUIT EVALUATION  ")
		if myFunction1() || myFunction2() {
		    fmt.Println(" Short-circuit evaluation is working ")
		}
}