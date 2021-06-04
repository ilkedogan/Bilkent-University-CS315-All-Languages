fn myFunction1() -> bool {
    let boolvar  = true;
    println!("Inside Test Function 1\n");
    return boolvar;
}

fn myFunction2() -> bool {
    let boolvar  = false;
    println!("Inside Test Function 2\n");
    return boolvar;
}

fn myFunction3() -> bool{
    let boolvar  = true;
    println!("Inside Test Function 3\n");
    return boolvar;
}

fn myFunction4() -> bool{
    let boolvar  = false;
    println!("Inside Test Function 4\n");
    return boolvar;
}
fn main() {
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
let bool_true1   = true;
let bool_true2   = true;
let bool_true3   = true;
let bool_false1  = false;
let bool_false2  = false;
let bool_false3  = false;
     // [ 1.1 and oparator test ] 
println!( "\n");
println!( " ----       1. BOOLEAN OPERATORS TEST  ---- \n");
println!( " ----       BOOLEAN OPERATORS: AND      ---- \n");
if bool_true1 && bool_true2 == true{
    println!( "Boolean test for True  - True  and operator: True\n");
}
if bool_true1 && bool_false2 == false{
    println!( "Boolean test for True  - False and operator: False\n");
}
println!( "\n");

// [ 1.2 or  oparator test ] 
println!( " ----       BOOLEAN OPERATORS: OR      ---- \n");
if bool_true1 || bool_true2 == true{
    println!( "Boolean test for True  - True  or operator: True\n");
}
if bool_true3 || bool_false1 == true{
   println!( "Boolean test for True  - False or operator: : True\n");
}

println!( "\n");

// [ 1.3 not oparator test ]
println!( " ----   BOOLEAN OPERATORS: AND/OR NOT  ---- \n");

if !(bool_false3){
    println!("Boolean test for Not False for not operator");
}
println!( "\n");
if !(bool_true1 && bool_true2) == false{
    println!( "Boolean test for True  - True  'and not' operator: False");
}
if !(bool_true1 && bool_false1)== true{
        println!( "Boolean test for True  - False 'and not' operator: True"); 
}
 /*
2.  Data types for operands of boolean operators
        [ and, or, not]

*/

println!( "\n");
println!( " ----      2. DATA TYPES FOR BOOLEAN OPERATORS      ----\n ");

if bool_true3{
   println!( "Boolean test for True boolean variable for boolean operator is working\n");
} 
if !bool_false3{
   println!( "Boolean test for False boolean variable for boolean operator is working\n");
}
/*
     3.     Operator precedence rules
    
            Precedence Rank
            1:   ()        Parantheses 
            2:   and        
            3:   or  
*/
println!("\n");
println!( " ----      3. BOOLEAN PRECEDENCE TEST      ----\n ");
println!(" BOOLEAN OPERATORS: 'AND' VERSUS 'OR'  \n");

if bool_true1 && bool_true2  || bool_false1 {
    println!("Boolean test for True and True  or False condition: True");
}
println!("\n");
if (bool_true1  || bool_true2 && bool_false1) != false {
    println!("Boolean test for True or True  and False condition: True");
}
println!("\n");

println!(" BOOLEAN OPERATORS: 'AND' VERSUS 'Parantheses'   \n");
if bool_false1 && bool_false2  || bool_true1 {
    println!("Boolean test for False and False  and True condition: True");
}
println!("\n");
if !(bool_false1  &&  (bool_false2 ||  bool_true1)) {
    println!("Boolean test for False and (False and True) condition: False");
}
println!("\n");

/*
  4.     Operator associativity rules

    Precedence Rank       Associativity
    1:   AND           left associativity  
    2:   OR            left associativity
    3:   ()            non associative
*/
println!("\n  4. OPERATOR ASSOCIATIVITY RULES \n");
let var_int1  = 22;
let var_int2  = 24;
let var_int3  = 24;

if (var_int1 == var_int2) && var_int3 == 24 {
    println!("Right associativity is working for and\n"); // if it was right associativity, this line would work
}
else{
    println!("Left associativity is working for and\n");
}

if (var_int1 == var_int2) || var_int3 == 24{
    println!("Left associativity is working\n"); // and and or has left associativity
}
else{
    println!("Right associativity is working  for or\n"); // if it was right associativity, this line would work
}		

// Left associativity test for not opartor
if !bool_true1 || bool_true2 {
    println!(" 'Not' has Right associativity\n");
}
else{
    println!(" 'Not' has Left associativity\n\n");
}

    /*
    5.     Operand evaluation order      
    Aim is that the operands are from 
    LEFT -> RIGHT
    */
   
    println!("\n  5. OPERAND EVALUATION ORDER \n");
    let mut bool_var = myFunction1() && myFunction2() && myFunction3() && myFunction4();
    println!("{} = Function-1 and Function-2 and Function-3 and Function-4", bool_var);
    println!("\n");
    bool_var = myFunction1() || myFunction2() || myFunction3() || myFunction4();
    println!("{} =Function-1 or Function-2 or Function-3 or Function-4", bool_var);

      /*
		 6.     Short-circuit evaluation

		*/
		println!("  \n6. SHORT - CIRCUIT EVALUATION  ");
		if myFunction1() || myFunction2() {
		    println!(" Short-circuit evaluation is working ");
		}

}