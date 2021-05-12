package main

import (
	"fmt"
	"module/helpers"

	"github.com/badoux/checkmail"
)

func main() {
	fmt.Println("Main")
	helpers.Helper()

	erro := checkmail.ValidateFormat("rui.dias@gmail.com")
	fmt.Println(erro)
}
