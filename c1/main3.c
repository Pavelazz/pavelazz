#include <stdio.h>

void fortune_cookie(char msg[]) {
    printf("Сообщение гласит: %s\n", msg);
     printf("Длина сообщения: %lu", sizeof(msg));

}

int main() {
    char quotes[] = "Печенька!";
    fortune_cookie(quotes);
    return 0;

}