<?php

 /*
        Boolean Expressions in JavaScript in 6 different Category
            1. Boolean operators provided
            2. Data types for operands of boolean operators
            3. Operator precedence rules
            4. Operator associativity rules
            5. Operand evaluation order
            6. Short-circuit evaluation
    */
// Variables
$boolTrue1 = true;
$boolTrue2 = true;
$boolTrue3 = true;
$boolFalse1 = false;
$boolFalse2 = false;
$boolFalse3 = false;

    /*
        1. Boolean operators provided 
            [ and, or, not]
            is examined in part 2 (below this part)
    
         [ 1.1 and oparator test ] 
    */
 // [ 1.1 and oparator test ] 
 printf( "\n");
 printf( " ----       1. BOOLEAN OPERATORS TEST  ---- \n");
 printf( " ----       BOOLEAN OPERATORS: AND      ---- \n");
 if ($boolTrue1 && $boolTrue2 == true){
     printf( "Boolean test for True  - True  and operator: True\n");
 }
 if ($boolTrue1 && $boolFalse1 == false){
     printf( "Boolean test for True  - False and operator: False\n");
 }
 printf( "\n");
 
 // [ 1.2 or  oparator test ] 
 printf( " ----       BOOLEAN OPERATORS: OR      ---- \n");
 if ($boolTrue1 || $boolTrue2 == true){
     printf( "Boolean test for True  - True  or operator: True\n");
 }
 if ($boolTrue1 || $boolFalse1 == true){
    printf( "Boolean test for True  - False or operator: : True\n");
 }
 
 printf( "\n");
 
 // [ 1.3 not oparator test ]
 printf( " ----   BOOLEAN OPERATORS: AND/OR NOT  ---- \n");
 
 if(!($boolFalse1)){
     printf("Boolean test for Not False for not operator");
 }
 printf( "\n");
 if (!($boolTrue1 && $boolTrue2) == false){
     printf( "Boolean test for True  - True  'and not' operator: False\n");
 }
 if (!($boolTrue1 && $boolFalse1)== true){
         printf( "Boolean test for True  - False 'and not' operator: True\n"); 
 }
  // [ 1.4 XOR oparator test ]
    printf( "Boolean test for True  - True  'XOR' operator:%d ",$boolTrue1 xor $boolTrue2);
    printf( "\n");
    printf( "Boolean test for True  - False 'XOR' operator:%d ", $boolTrue1 xor $boolFalse1); 
    printf( "\n");
     /*
    2.  Data types for operands of boolean operators
            [ and, or, not]

    */
   
    printf( "\n");
    printf( " ----      2. DATA TYPES FOR BOOLEAN OPERATORS      ----\n ");
    $varFloat = 1.2;
    $varInt = 1;
    $varIntTemp = 0;
    // 1 for True
    if ($varInt){
        printf( "Boolean test for True = 1 is working\n");
    }
    // 0 for True
    if (!($varIntTemp && $boolFalse1)){
        printf( "Boolean test for False = 0 is working\n");
    }
    if ($varFloat){
        printf( "Boolean test for Float for True\n");
    }
    else{
        printf( "Boolean test for Float for False\n");
    }
    if ($boolTrue3){
       printf( "Boolean test for boolean variable for boolean operator is working\n");
    }
    /*
         3.     Operator precedence rules
        
                Precedence Rank
                1:   ()        Parantheses 
                2:   and        
                3:   or  
    */
    printf("\n");
    printf( " ----      3. BOOLEAN PRECEDENCE TEST      ----\n ");
    printf(" BOOLEAN OPERATORS: 'AND' VERSUS 'OR'  \n");
    $temp1 =  $boolTrue1 && $boolTrue2  || $boolFalse1;
    if($temp1){
        printf("Boolean test for True and True  or False condition: True");
    }
    printf("\n");
    $temp2 =  $boolTrue1  || $boolTrue2 && $boolFalse1;
    if($temp2 != false){
        printf("Boolean test for True or True  and False condition: True");
    }
    printf("\n");

    printf(" BOOLEAN OPERATORS: 'AND' VERSUS 'Parantheses'   \n");
    $temp1 =  $boolFalse1 && $boolFalse2  || $boolTrue1;
    if($temp1){
        printf("Boolean test for False and False  and True condition: True");
    }
    printf("\n");
    $temp1 =  $boolFalse1  &&  ($boolFalse2 ||  $boolTrue1);
    if(!$temp1){
        printf("Boolean test for False and (False and True) condition: False");
    }
    printf("\n");
    $temp1 =  $boolTrue1  xor $boolFalse2 && $boolFalse1;
    if($temp1){
        printf("Boolean test for True XOR True AND False condition: XOR > AND");
    }
    else{
        printf("Boolean test for True XOR True AND False condition: AND > XOR");
    }
    printf("\n");
    
    /*
      4.     Operator associativity rules

        Precedence Rank       Associativity
        1:   AND           left associativity  
        2:   OR            left associativity
        3:   ()            non associative
    */
    printf("\n  4. OPERATOR ASSOCIATIVITY RULES \n");
    $varInt1  = 22;
	$varInt2  = 24;
	$varInt3  = 24;

	if (($varInt1 == $varInt2) && $varInt3 == 24) {
		printf("Right associativity is working for and\n"); // if it was right associativity, this line would work
	}
    else{
		printf("Left associativity is working for and\n");
	}

	if (($varInt1 == $varInt2) || $varInt3 == 24){
		printf("Left associativity is working\n"); // and and or has left associativity
	}
    else{
		printf("Right associativity is working  for or\n"); // if it was right associativity, this line would work
	}		

	// Left associativity test for not opartor
	if (!$boolTrue1 || $boolTrue2) {
		printf(" 'Not' has Right associativity\n");
	}
    else{
		printf(" 'Not' has Left associativity\n\n");
	}
	
	/*
		5.     Operand evaluation order      
		Aim is that the operands are from 
		LEFT -> RIGHT
		*/
        function  myFunction1()  {
            $boolvar = true;
            printf("Inside Test Function 1\n");
            return $boolvar;
        }
        
        function  myFunction2() {
            $boolvar = false;
            printf("Inside Test Function 2\n");
            return $boolvar;
        }
        
        function  myFunction3() {
            $boolvar  = true;
            printf("Inside Test Function 3\n");
            return $boolvar;
        }
        
        function  myFunction4() {
            $boolvar = false;
            printf("Inside Test Function 4\n");
            return $boolvar;
        }
        printf("\n  5. OPERAND EVALUATION ORDER \n");
        $boolvar2 = true;
        printf("Same statement with no '()'\n");
        $boolvar2 = myFunction1() && myFunction2() && myFunction3() && myFunction4();
        printf("Same statement no '()'\n");
        $boolvar2 = (myFunction1() && myFunction2()) && myFunction3() && myFunction4(); // same results are taken for and 
        printf("Same statement with no '()'\n");
        $boolvar2 = myFunction1() || myFunction2() || myFunction3() || myFunction4();
        printf("Same statement no '()'\n");
        $boolvar2 = (myFunction1() || myFunction2()) || myFunction3() || myFunction4(); // same results are taken for or 

        /*
		 6.     Short-circuit evaluation

		*/
		printf("\n  6. SHORT - CIRCUIT EVALUATION \n ");
		if (myFunction1() || myFunction2()) {
		   printf(" Short-circuit evaluation is working ");
		}
?>
