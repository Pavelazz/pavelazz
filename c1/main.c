#include <stdio.h>

int main () {
    int x, y, d;
    float z;
    printf("vvedite x: ");
    scanf("%d", &x);
    printf("vvedite y: ");
    scanf("%d", &y);
    printf("Vvedite deitvie:\n");
    printf("1 - slojenie\n");
    printf("2 - vychitanie\n");
    printf("3 - umnojenite\n");
    printf("4 - delenie\n");
    scanf("%d", &d);

    if (d == 1) {
        z = x + y;
        printf("%d + %d = %d\n", x,y,z);
    }

    else if (d == 2) {
        z = x - y;
        printf("%d - %d = %d\n", x, y, z);
    }

    if (d == 3) {
        z = x * y;
        printf("%d * %d = %d\n", x, y, z);
    }

    else if (d == 4) {
        if (y == 0){
            printf("nelzya delit na nol\n");
        }
        else {
            z = (double)x / y;
        printf("%d / %d = %.2f\n", x, y, z);
        }
    
    }


    else {
        printf("Nevernoe deistvie!\n");
    }

    return 0;
}