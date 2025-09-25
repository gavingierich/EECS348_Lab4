
CC = gcc

CFLAGS = -c -Wall
all: main

main: main.o isOdd.o
	$(CC) main.o isOdd.o -o main
main.o: main.c
	$(CC) $(CFLAGS) main.c

isOdd.o: isOdd.c
	$(CC) $(CFLAGS) isOdd.c

clean:
	rm -rf *.o prog
