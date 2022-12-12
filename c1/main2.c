#include <stdio.h>

void go_south_east(int *lat, int *lon)
{
    *lat = *lat - 10; // уменьшение широты
    *lon = *lon + 10; // увеличение долготы
}

int main()
{
    int latitude = 32;
    int longitude = -64;

    go_south_east(&latitude, &longitude);

    printf("STOP! Teper' nashi koordinatu: [%i, %i]\n", latitude, longitude);
    return 0;
}