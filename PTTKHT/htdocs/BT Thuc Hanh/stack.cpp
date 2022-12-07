#include <stdio.h>
#define MAX 50

typedef struct Stack
{
	int elem[MAX];
	int Front,Rear; //dau, cuoi
	int size;
	int count;
};
void Init(Stack &s)
{
	s.Front = 0;
	s.Rear = -1;
	s.count = 0;
}
//check Empty
int isEmpty(Stack s)
{
	if(s.count == 0)
		return 1;
	return 0;
}
//Check Full
int isFull(Stack s)
{
	if(s.count == MAX)
		return 1;
	return 0;	
}
/*
void euStack(Stack &s, int x) //them phan tu vao cuoi Queue
{
    if (s.count==MAX) printf("Hang doi day !");
    else
    { 

        s.elem[++s.Rear]=x;
        s.count++; //tang so phan tu len
    }
}

int deStack(Stack &s) //
{
    if (isEmpty(s)) printf("Hang doi rong !");
    else
    {
        int x = s.elem[s.Front];
        for (int i=s.Front; i<s.Rear; i++) //di chuyen cac phan tu ve dau hang
            s.elem[i] = s.elem[i+1];
        s.Rear--; 
        s.count--;
        return x; 
    }
}
*/

//delate stack
int deStack(Stack &s)
{
	if(isEmpty(s)) 
		printf("Stack is Empty !");
	else
	{
		int x=s.elem[s.Front];
		for (int i = s.Front ; i< s.Rear;i++)
		{
			s.elem[i] = s.elem[i+1];
		}
		s.Rear--;
		s.count--;
		return x;
	}
}

//them pt
void euStack(Stack &s, int x)
{
	if(s.count==MAX)
		printf("Stack is full !");
	else
	{
		s.elem[++s.Rear] =x;
		s.count++;
	}
}

//nhap
void nhap(Stack &s)
{
	int n,x,i;
	do
	{
		printf("Nhap so pt cua Stack [yc: phan tu < %d]: ",MAX);
		scanf("%d",&n);
	}while(n>MAX || n<1);
	for(i=0;i<n;i++)
	{
		printf("Nhap pt thu [%d]: ",i+1);
		scanf("%d",&x);
		euStack(s,x);
	}
}

void xuat(Stack s)
{
	while(s.Rear!=-1)
	{
		int a=deStack(s);
		printf("%d\t",a);
	}
}
int main()
{
	Stack s;
	Init(s);
	nhap(s);
	xuat(s);
}







































