CC=gcc
CFLAGS=
OBJFILES= conexion.o
LFLAGS=-I/usr/include/mysqlL/usr/lib/mysql -lmysqlclient

all: conexion

conexion: ${OBJFILES}
	${CC} ${CFLAGS} ${OBJFILES} ${LFLAGS} -o conexion

%.o: %.c
	${CC} ${CFLAGS} -c *.c 

clean:
	rm conexion *.o
