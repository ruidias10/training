#!/bin/bash

clear

files=0
folders=0


if [ $1 ]
then
    path=$1
else    
    path="$HOME/Desktop"
fi

echo -e "\033[1;97mCommand ls: $path\033[0;37m"


if [ -d $path ]
then
	for l in $(ls $path)
	do
		if [ -d "$path/$l" ]
		then
			echo -e "\x1B[01;96m$l \x1B[0m"
			(( folders++ ))
		else
            
			echo "$l"
			(( files++ ))
		fi
	done
    echo "------------------------------------------------"
	echo -e "\033[1;95mTotal: folders: $folders files: $files\033[0;37m"
else
	echo -e "\033[1;95mInvalid path: $path\033[0;37m"
fi

echo ""