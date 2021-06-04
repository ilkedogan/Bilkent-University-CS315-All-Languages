<?php

  /*
       Investigating the statements for iteration based on data structures provided in six different programming languages: C, GO (Golang), Javascript, PHP, Python, and Rust. You will investigate how the following design issues are addressed in these programming languages:
   
       1. Iteration statements provided,
       2. Data structures suitable for iteration,
       3. The way the next item is accessed.
   
   */
   
   // PHP Language
   /*
       1.     Iteration statements provided
   */
      
     // While Loop
     $boolTrue1 = true;
     printf( "\n");
     printf( " 1. ITERATION STATEMENTS \n");
     printf( " ----   WHILE LOOP IN PHP  ---- \n");
     $x = 1;
    while($boolTrue1) {
    if ( $x == 6){
        printf( "Reached  '6'\n");
        break;
        }
    $x++;
    printf("Print Until Finding '6' and now the value is: %d", $x);
    printf("\n");
    }
     
     // Do-While Loop

     printf( "\n");
     printf( " ----   DO-WHILE LOOP IN PHP  ---- \n");
     $k = 0;
     do{
         $k+=2;
         printf("Print Until Finding '16' for %d", $k);
         printf("times increment by 2 \n" );
     } while( $k < 17 );
     
     
     // For Loop

     printf( "\n");
     printf( " ----   FOR LOOP IN PHP  ---- \n");
     for( $i= 0; $i< 11 ; $i++){
        if( $i == 6 ){
            printf("Reached  '6'");
        }
        printf("Print Until Finding '6' and now the value is: %d", $i);
        printf("\n");
    }
     // For-each Loop

     printf( "\n");
     printf( " ----   FOR-EACH LOOP IN PHP  ---- \n");
     $arrayNum = array(22, 06, 1999);

     foreach ($arrayNum as $value) {
        $value = $value + 4;
        printf("Print array: %d", $value);
        printf( "\n");
     }


/*
    2.    Data structures suitable for iteration
*/
    printf( " \n 2. DATA STRUCTURES FOR ITERATIONS \n");

    printf( " ----      ARRAY LOOP IN PHP  ---- \n");

    //Second example
    $arrayNum = array(22, 06, 1, 9, 9, 9);
    foreach ($arrayNum as $value) {
        printf("Print array: %d", $value);
        printf( "\n");
     }
    printf( "\n");
    //First example
     $birth = array ("day"  => 22, "month" => 6, "year"   => 1999 );
     foreach ($birth as $name => $value) {
        printf("Print array: %d", $value);
        printf( "\n");
     }

/*
    3.     The way the next item is accessed
 */

    printf( " \n 3. REACHING THE NEXT ITEM \n");

    $x = 1;
     while( $x < 11 ) {
     if ( $x == 6){
            printf("Reached  '6'\n");
            $x += 2;
         }
     $x++;
     printf(" Turn %d times", $x);
    printf("\n");
     }
     // For Loop

     printf( "\n");
     printf( " ----   FOR LOOP IN PHP  ---- \n");
     for( $i= 0; $i< 11 ; $i++){
        if( $i == 6 ){
            printf("Reached  '6'");
            $i += 2;
        }
        printf(" Turn %d times", $i);
        printf("\n");
    }
