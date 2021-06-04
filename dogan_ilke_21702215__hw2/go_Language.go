
package main
import "fmt"

func main() {
    
   /*
    Investigating the statements for iteration based on data structures provided in six different programming languages: C, GO (Golang), Javascript, PHP, Python, and Rust. You will investigate how the following design issues are addressed in these programming languages:

    1. Iteration statements provided,
    2. Data structures suitable for iteration,
    3. The way the next item is accessed.

    */
    
    // Go Language
    
    /*
        1.     Iteration statements provided
    */
   
    // While Loop
    fmt.Println(" 1. ITERATION STATEMENTS \n")
    fmt.Println(" ----   WHILE LOOP IN GO  ---- \n")
    var boolvar bool  = true 
    n:= 1 
    for boolvar {
        if  n == 6 {
		    fmt.Println("Reached  '6' and program is broken") 
            break
        }
        n = n + 1
        fmt.Println("Print Until Finding '6' and now the value is: ", n) 
    }
    fmt.Println("\n")

    // THREEE COMPONENT LOOP
    
    fmt.Println(" ----   THREE COMPONENT LOOP IN GO  ---- \n")
    for i := 0; i < 11; i++ {
        if  i == 6 {
		    fmt.Println("Reached  '6' and program is broken") 
            break
        }
        fmt.Println("Print Until Finding '6' and now the value is:", i) 
    }
    fmt.Println("\n")
    
    // For-each range LOOP
    
    fmt.Println(" ----   FOR-EACH RANGE LOOP IN GO  ---- \n")
    arrayNum := []int64{ 22, 06, 1999}
    for i, s := range arrayNum {
        fmt.Println("Print array: (Array Place:",i,") (Number: ", s, ")")
    }
    fmt.Println("\n")

    /*
    2.    Data structures suitable for iteration
    */
    fmt.Println("2. DATA STRUCTURES FOR ITERATIONS ")

    fmt.Println(" ----   ARRAY IN GO  ---- \n")
    arrayExample := [6]int{ 22, 6 , 1 , 9 , 9 , 9} 
    for i := 0; i < 6; i++ {
        fmt.Println(i+1, ". element is:", arrayExample[i]) 
    }
    fmt.Println("Whole array is:", arrayExample) 
    fmt.Println("\n")
    fmt.Println(" ----   SLICE IN GO  ---- \n")
    stringExample := [4]string{"Happy", "Birthday", "ilke", "dogan"} 
    for i := 0; i < 3; i++ {
        
        fmt.Println(stringExample[i]) 
    }
    /*
    3.     The way the next item is accessed
    */
    fmt.Println("\n 3. REACHING THE NEXT ITEM \n")
    // While Loop
    fmt.Println(" 1. ITERATION STATEMENTS \n")
    fmt.Println(" ----   WHILE LOOP IN GO  ---- ")

    a:= 0 
    for a < 11 {
        if  a == 6 {
		    fmt.Println("Reached  '6'") 
            a = a + 2
        }
        a= a + 1
        fmt.Println(" Turn ", a , " times") 
    }
    fmt.Println("\n")

    // THREEE COMPONENT ( FOR ) LOOP
    
    fmt.Println(" ----   THREE COMPONENT LOOP IN GO  ----" )
    for i := 1; i < 11; i++ {
        if  i == 6 {
		    fmt.Println("Reached  '6'") 
            n = n + 2
        }
        fmt.Println(" Turn ", i , " times") 
    }
}
