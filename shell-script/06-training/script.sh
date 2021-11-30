#!/bin/bash

echo "Control commands"
echo " - exit (0, 1-255, 126, 127, 130)"
echo " - trap (rever)"
echo " - break"
echo " - continue"
echo ""


echo "Example with functions 1"
function welcome()
{
    echo " - Welcome $1"
}

res=$( welcome "User name" )
echo "$res"



echo ""
echo "Example with functions 2"
function mySum()
{
    value1=10
    value2=12

    return `expr $value1 + $value2`
}

mySum
res=$?
echo " - $res"



echo ""
echo "Example with functions 3"

res=""
newFolder(){
    if mkdir "$1"
    then
        res=" - Successfully created: $1"
    else
        res=" - Error: $1"
    fi
}

newFolder "temp"
echo "$res"