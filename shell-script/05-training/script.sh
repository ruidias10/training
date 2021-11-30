#!/bin/bash

numbers="one two three four"
for number in $numbers
do
	echo "Number $number"
done
echo ""


for (( i=1; i<=4; i++ ))
do
	echo "Number $i"
done
echo ""


number=1
while [ $number -le 4 ]
do
  echo "$number"
	(( number++ ))
done
