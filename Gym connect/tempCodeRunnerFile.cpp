#include<stdio.h>
#include<string.h>

int main()
{
    int i,j,k,num;
    printf("Enter no. of names: ");
    scanf("%d",&num);
    char fname[num][50],lname[num][50];
    for(i=0;i<num;i++)
    {
        printf("Enter name: ");
        scanf("%s %s",&fname[i],&lname[i]);
    }
    char fswap[100],lswap[100];
    for(i=0;i<num;i++)
    {
        for(j=1;j<num;j++)
        {
            for(k=0;k<strlen(fname[i]);k++)
            {
                if(fname[i][k]>fname[j][k])
                {
                    strcpy(fswap,fname[i]);
                    strcpy(fname[i],fname[j]);
                    strcpy(fname[j],fswap);
                    strcpy(lswap,lname[i]);
                    strcpy(lname[i],lname[j]);
                    strcpy(lname[j],lswap);
                    k=strlen(fname[i]);
                }
            }
        }
    }
    for(i=0;i<num;i++)
    {
        printf("%s %s\n",fname[i],lname[i]);
    }
    return 0;
}