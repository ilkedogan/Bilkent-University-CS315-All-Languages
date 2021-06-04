"""
Investigating the statements for iteration based on data structures provided in six different programming languages: C, GO (Golang), Javascript, PHP, Python, and Rust. You will investigate how the following design issues are addressed in these programming languages:

    1. Iteration statements provided,
    2. Data structures suitable for iteration,
    3. The way the next item is accessed.

"""
    # PYTHON
"""
 1.     Iteration statements provided
"""
print( "  1. ITERATION STATEMENTS ")
# While Loop
print( " ----      WHILE LOOP IN PYTHON  ---- \n")

x = 1
boolvar = True
while ( boolvar ):
    if( x == 6 ):
        boovar = False
        print(" Reached  '6'")
        break
    x = x + 1
    print(" Print Until Finding '6' and now the value is: ", x)

# For Loop
print( "\n")
print( " ----     FOR LOOP IN PYTHON     ---- \n")


for i in range(1,10):
    if( i == 6 ):
        print(" Reached  '6'")
    print(" Print Until Finding '6' and now the value is: ", i)

# Nested For Loop
print( "\n")
print( " ----  NESTED FOR LOOP IN PYTHON  ---- \n")

x = 0
k = 0
for i in range(1,20,2):
    for k in range(k,30):
        x = x + 1
print(" Reached  '16' for", x, "times \n" )

"""
 2.  Data structures suitable for iteration
"""

print( "  2. DATA STRUCTURES FOR ITERATIONS ")

print( " ----      WHILE LOOP IN PYTHON  ---- \n")

"""
 3.     The way the next item is accessed
"""

print( "  1. REACHING THE NEXT ITEM ")

print( " ----      WHILE LOOP IN PYTHON  ---- \n")

