package env

import (
	"log"
	"os"

	"github.com/joho/godotenv"
)


func Init() {
	err := godotenv.Load()

	if err != nil {
		log.Fatal("Error loading .env file")
	}
}

func Get(envName string) string {
	envVariable := os.Getenv(envName)

	if envVariable == "" {
		log.Fatal("The .env variable: " + envName + " wasn't found")
	}

	return envVariable
}
