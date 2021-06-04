fn main() {
  /*
     Investigating the statements for iteration based on data structures provided in six different programming languages: C, GO (Golang), Javascript, PHP, Python, and Rust. You will investigate how the following design issues are addressed in these programming languages:
 
     1. Iteration statements provided,
     2. Data structures suitable for iteration,
     3. The way the next item is accessed.
 
 */
 
 // Rust Language
 /*
     1.     Iteration statements provided
 */
    
   // While Loop
 println!( "\n");
 println!( " 1. ITERATION STATEMENTS \n");
 println!( " ----   WHILE LOOP IN RUST  ---- \n");
 
   let mut x = 0;
   while x < 6 {
     x = x + 1;
     println!("{}= now the value and Print Until Finding '6' ", x);
     }
     println!("Reached  '6'");
   println!( "\n");
 
   // Loop
   println!( "\n");
   println!( " 1. ITERATION STATEMENTS \n");
   println!( " ----   LOOP IN RUST  ---- \n");
   
   let mut k = 0;
   loop {
     if k == 16 {
         println!("'16' is found!");
         break;
     }
     println!("{}= Print Until Finding '16' for", k);
     k = k + 1;
   }
 
     // FOR Loop
 println!( "\n");
 println!( " 1. ITERATION STATEMENTS \n");
 println!( " ----   FOR LOOP IN RUST  ---- \n");
 
 for x in 1..10 {
     println!("{}= Print Until reaching 11", x);
   }
 
 /*
     2.    Data structures suitable for iteration
 */
 
 println!( "\n");
 println!( " 2. DATA STRUCTURES FOR ITERATIONS \n");
 
 x = 0;
 let arrayExample = [22, 6, 1, 9, 9, 9];
   for i in arrayExample.iter() {
      x += i;
     println!("Array element is: {}", i);
   }
   println!("Array elements' sum is : {}", x);

 /*
     3.     The way the next item is accessed
  */
 println!( " ----   WHILE LOOP IN RUST  ---- \n");
 
  let mut x = 0;
   while x < 11 {
      if x == 6 {
        println!(" Reached  '6'");
        x = x + 2;
    }
    println!(" Turn {}", x);
    x = x + 1;
  }
   println!( "It should be printed 10 times if not next item related with what is written inside loop: {}", x);

 }