#!/bin/bash

function echoHeader()
{
    echo ""
    echo "###############################"
    echo "#       Choose an option      #" 
    echo "###############################"
    echo " (1) List users"
    echo " (2) Exit program"    
    echo ""
}

function echoSpacer()
{
    echo "---------------------------------"
}

function listUsers()
{
    arr=( "$@" )
    len=${#arr[*]}

    for i in "${arr[@]}";
    do
        echo "$i"
    done
}


users=("User 1" "User 2" "User 3" "User 4" )

while true
do
    echoHeader

    read opcao

    case $opcao in
        1)
            clear
            echo "List users:"
            echoSpacer
            listUsers "${users[@]}"
            ;;
        2)
            clear
            echo "Goodbye"
            echoSpacer
            exit 0
            ;;      
        *)
            clear
            echo "Invalid option"
            echoSpacer
            ;;      
    esac
done