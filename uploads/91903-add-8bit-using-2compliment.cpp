/*Add two 8-bits numbers using 2's compliment */

#include<stdio.h>
#include<conio.h>

void main()
{
    int num1[8], num2[8], i, sum[8], carry=0;

    printf("Enter 1st 8-bit number:\n");
    for(i=0;i<8;i++)
        scanf("%d",&num1[i]);
    printf("Enter 2nd 8-bit number:\n");
    for(i=0;i<8;i++)
        scanf("%d",&num2[i]);

    for(i=7;i>=0;i--)
    {
        sum[i]=num1[i]+num2[i]+carry;
        if(sum[i]>=2)
        {
            sum[i]=sum[i]%2;
            carry=0;
        }
        else
        {
            carry=1;
        }
    }

    printf("Sum = ");
    for(i=0;i<8;i++)
    {
        printf("%d",sum[i]);
    }
    getch();
}
