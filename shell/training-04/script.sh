#!/bin/bash

echo "grep ^"
echo " - Use: grep ^Lorem file.txt" 
echo " - Use: grep ^Quando file.txt"
echo " - Use: ls | grep ^s"
echo ""
echo "grep ^Lorem file.txt"
grep ^Lorem file.txt
echo ""
echo "grep ^Quando file.txt"
grep ^Quando file.txt
echo ""


echo "grep $"
echo " - Use: grep 1500$ file.txt" 
echo " - Use: grep Ipsum$ file.txt"
echo " - Use: ls | grep ing$"
echo ""
echo "grep 1500$ file.txt"
grep 1500$ file.txt
echo ""
echo "grep Ipsum$ file.txt"
grep Ipsum$ file.txt
echo ""


echo "grep []"
echo " - Use: ls | grep [Aa]blabla.txt"
echo ""


echo "grep ."
echo " - Use: ls | grep ^..l"
echo ""


echo "egrep ."
echo " - Use: egrep ^..[:].*bash  = ??:*bash"
