#include <stdio.h>
 
int main()
{
   int array[100], search, c, n, count = 0;
 
   printf("Enter the number of elements in array\n");
   scanf("%d", &n);
 
   printf("Enter %d numbers\n", n);
 
   for ( c = 0 ; c < n ; c++ )
      scanf("%d", &array[c]);
 
   printf("Enter the number to search\n");
   scanf("%d", &search);
 
   for (c = 0; c < n; c++) {
      if (array[c] == search) {
         printf("%d is present at location %d.\n", search, c+1);
	 count++;
      }
   }
   if (count == 0)
      printf("%d is not present in array.\n", search);
   else
      printf("%d is present %d times in array.\n", search, count);
 
   return 0;
}