#!/bin/bash

echo ""
char='c'
var="Testing in Shell"
echo "I'm a variable with the value $var and i have ${#var} letters"
echo "I'm a variable with the value ${var/Shell/Shell Script}"
echo "I'm a letter ${char}"


echo ""
echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ' > file1.txt
echo 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ' >> file1.txt
echo 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. . ' >> file1.txt
echo 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ' >> file1.txt
echo `ls`
echo `cat file1.txt`

echo ""
echo "List files"; touch file2.txt file3.txt; ls file*

echo ""
echo "Run programs without blocking the process."
echo " - Use: firefox&"

echo ""
echo "Pipe (|) sends the process output to the input of another process"
echo " - Use: ls | grep file1.txt" 
echo " - Use: ls | grep .txt | sort -r"

echo ""
echo "&& and ||"
echo " - Use: cat file1.txt && echo "\Exist\"""
echo " - Use: cat file10.txt || echo "\does not exist\" ""

echo ""
echo "Conditional Structures"
echo " - Use: -eq [int|float] equal"
echo " - Use: -ne [int|float] different"
echo " - Use: -lt [int|float] less than"
echo " - Use: -gt [int|float] bigger then"
echo " - Use: -le [int|float] less or equal"
echo " - Use: -ge [int|float] bigger or equal"
echo ""


value=10
if [ $value -gt 5 ] && [ $value -le 15 ]
then 
    echo " - ${value} is greater than 5 and less than 15"
else
    echo " - Ops, any error"
fi


value1=10
value2=20
let res=$value1+$value2
echo " - $value1 + $value2 = $res"
echo ""


value=500
if [ $value -lt 500 ] #Less than 500
then
    echo " - $valor is less than 500"
elif [ $value -ge 500 ] && [ $value -lt 1000 ] #Greater than or equal to 500 and less than 1000
then 
    echo " - $value it's between 500 and 1000"
else
    echo " - $value is less than 1000"
fi


value1=20
value2=20
if [ $value1 -gt $value2 ]
then
    echo " -$value1 is greater than $value2"
elif [ $value1 -eq $value2 ]
then
    echo " - $value1 is equal to the value $value2"
else
    echo " - $value1 is smaller than $value2"
fi
echo ""



value=300
case $value in
    100)
        echo " - $value equals 100 (switch case)"
        ;;
    200)
        echo " - $value equals 200 (switch case)"
        ;;
    300)
        echo " - $value equals 300 (switch case)"
        ;;
    *)
        echo " - $value unknown (switch case)"
        ;;
esac
echo ""