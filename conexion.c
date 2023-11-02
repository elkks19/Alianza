#include <stdio.h>
#include <mysql/mysql.h>


void terminarConError(MYSQL* conexion){
    fprintf(stderr, "%s\n", mysql_error(conexion));
    mysql_close(conexion);
    exit(1);
}

int main(){
    MYSQL* conexion = mysql_init(NULL);
    if (conexion == NULL)
    {
        fprintf(stderr, "No se pudo conectar al servidor\n%s\n", mysql_error(conexion));
        exit(1);
    }
    else{
        printf("Conexión exitosa con el servidor local\n");
    }
    
    
    if(mysql_real_connect(conexion, "localhost", "root", "Rafa1909", "alianzaSeguros", 0, NULL, 0) == NULL)
    {
        terminarConError(conexion);
    }



    if(mysql_query(conexion, "SELECT * FROM Seguros"))
    {
        terminarConError(conexion);
    }
    

    MYSQL_RES* resultado = mysql_store_result(conexion);
    
    if(resultado == NULL){
        terminarConError(conexion);
    }
    

    int num_fields = mysql_num_fields(resultado);

    MYSQL_ROW row;

    while ((row = mysql_fetch_row(resultado)))
    {
        for(int i = 0; i < num_fields; i++)
        {
            printf("%s ", row[i] ? row[i] : "NULL");
        }
        printf("\n");
    }

    mysql_free_result(resultado);

	if(mysql_query(conexion, "SELECT * FROM Asegurados"))
	{
		terminarConError(conexion);
	}

    resultado = mysql_store_result(conexion);
    
    if(resultado == NULL){
        terminarConError(conexion);
    }


    num_fields = mysql_num_fields(resultado);

    while ((row = mysql_fetch_row(resultado)))
    {
        for(int i = 0; i < num_fields; i++)
        {
            printf("%s ", row[i] ? row[i] : "NULL");
        }
        printf("\n");
    }

    mysql_free_result(resultado);
    mysql_close(conexion);

    exit(0);
    return 0;
}
