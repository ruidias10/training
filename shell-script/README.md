# Shell Training

This repository is for the study of Shell Script. It contains basic content that has helped me to move forward a little more in this area.



## Install

Scripts can be run without the need to be installed. To run:
```
$ cd 01-script
$ chmod +x script.sh
$ ./script.sh
```



#### Example 01

Small program to test functions, while loop and print array list. To run:
```
$ cd script-01
$ ./script.sh
```



#### Example 02

Program that receives an argument as a path to list content. If it does not receive parameters, list the desktop folder. At the end it displays a sum of files and folders.

```
$ cd 02-script
$ ./script.sh
$ ./script.sh anything
$ ./script.sh folder/
```



#### Example 03

This program receives as argument a folder or file creating a backup.

```
$ cd 03-script
$ ./script.sh file.txt
$ ./script.sh files/

Backup: Start program
 Backup folder files/* to backup_281018.tar
 Size 4.0K      files/file1.txt
 Size 16K       files/file2.txt
 Size 4.0K      files/file3.txt
 Final size 4.0K        backup_281018.tar
```

