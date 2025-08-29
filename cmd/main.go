package main

import (
	"net/http"
	"sandra-alianza-app/cmd/config/env"
	"sandra-alianza-app/cmd/renderer"
	"sandra-alianza-app/templates"

	"github.com/gin-gonic/gin"
)

func main(){
	env.Init()

	r := gin.Default()
	r.HTMLRender = renderer.NewTempleRenderer()

	r.GET("/", func(c *gin.Context) {
		c.HTML(http.StatusOK, "", templates.Index())
	})

    r.Static("/styles", "./static/styles/")


	r.Run(env.Get("APP_PORT"))
}
