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
print( " ----  NESTED FOR LOOP IN PYTHON  ----")

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

print( " ----    1. TUPPLE IN PYTHON  ---- \n")
print(" Printing the tupple in tupple")
tuppleExample = ("22", '06', "1999",('Happy', 'Birthday'))
for i in tuppleExample:
    print(i)
print(tuppleExample)

print(" Finding the behaviour for negative array numbers, and the sequence is:") 
num = -4
num2 = -7
x = 1
while ( num < 2 ):
    num = num + 1
    num2 = num2 + 1
    x = x + 1
    print( x,". try: ",tuppleExample[num])
    print( "The couple: ",tuppleExample[num: ])
    
print( " \n----    2. LIST IN PYTHON  ---- \n")
print(" Printing the List in List")
listExample = ["22", '06', "1999",['Happy', 'Birthday'],['i','l', 'k', 'e']]
for i in listExample:
    print(i)
print(listExample)
print(" Finding every elements in the list by using Nested For ") 

listExample2 = []
print("\n✈ Before Seperating every item list in list: ")
print(listExample)
for i in listExample:
    for k in i:
        listExample2.append(k)
        
print(" \n✈ After Seperating every item list in list: ")
print(listExample2)

print( "\n----    3. DICTONARY IN PYTHON  ---- \n")
dictionaryExample = {"Day":22, "Mounth":'06', "Year":1999}
for i in dictionaryExample:
    print(i, " = ",dictionaryExample[i] )
print( "\n----    4. SET IN PYTHON  ---- \n")
print(" ✈ Before adding tupple into Set: ")

setExample = {"22", '06', "1999"}
for i in setExample:
    print(i)
print(setExample)

print(" \n✈  After Adding tupple into Set: ")
for i in listExample:
    for k in i:
        setExample.update(k)
print(setExample)

tempSet = setExample
print(" \n✈  After Deleting  first 10 numbers from Set: ")
b = 0
while ( b < 10 ):
    b = b + 1
    tempSet.pop()
print(tempSet)

"""
 3.     The way the next item is accessed
"""

print( "\n 3. REACHING THE NEXT ITEM ")

print( " ----      WHILE LOOP FOR NEXT ITEM EXAMINING IN PYTHON  ---- \n")

x = 0
while ( x < 11 ):
    if( x == 6):
        print(" Reached  '6'")
        x += 2
    x = x + 1
    print(" Turn ", x, " times")
print("It should be printed 10 times if not next item related with what is written inside loop: ", x)

x = 0
for x in range (0,10):
    if x == 6:
        print(" Reached  '6'")
        x += 2
    print(" Turn ", x, " times")
print("It should be printed 10 times if not next item related with what is written inside loop: ", x)