#!/usr/bin/env bash

# Author: Rui Dias
# Email: Rui Dias <rui.dias10@gmail.com>
# Description: Development of program to do backup


backup_file="backup_$(date +%d%m%y).tar"

backup() 
{
    tar -czpf $backup_file $1
}

echo "Backup: Start program"

if [ -d "$1" ]
then
    echo " Backup folder $1* to $backup_file"
    for file in $(ls $1)
    do
        echo " Size $(du -sh $1/$file)"  
    done
else 
    echo " Backup file $1 to $backup_file"
    echo " Size $(du -sh $1)"    
fi

backup "$1"
echo " Final size $(du -sh $backup_file)"
