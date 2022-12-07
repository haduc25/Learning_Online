#include<stdio.h>
#define Max 50 //so phan tu toi da cua Queue 
typedef struct Queue
{
	int elem[Max];
    int Front, Rear; //front: phan tu dau hang, rear: phan tu cuoi hang
    int size; 
    int count; //dem so phan tu cua Queue
};
void Init (Queue &Q) 
{
    Q.Front = 0; 
    Q.Rear = -1; 
    Q.count = 0; 
}
int Isempty (Queue Q) //kiem tra Queue rong
{
    if (Q.count == 0) 
        return 1;
    return 0;
}
 
int Isfull (Queue Q) //kiem tra Queue day
{
    if (Q.count == Max) //so phan tu = Max => day
        return 1;
    return 0;
}
void EuQueue(Queue &Q, int x) //them phan tu vao cuoi Queue
{
    if (Q.count==Max) printf("Hang doi day !");
    else
    { 

        Q.elem[++Q.Rear]=x;
        Q.count++; //tang so phan tu len
    }
}

int DeQueue(Queue &Q) //
{
    if (Isempty(Q)) printf("Hang doi rong !");
    else
    {
        int x = Q.elem[Q.Front];
        for (int i=Q.Front; i<Q.Rear; i++) //di chuyen cac phan tu ve dau hang
            Q.elem[i] = Q.elem[i+1];
        Q.Rear--; 
        Q.count--;
        return x; 
    }
}
void Input (Queue &Q) //nhap hang doi
{
    int n;
    int x;
    do
    {
        printf("Nhap so phan tu cua Queue (<%d) :",Max);	
        scanf("%d",&n);
    } while (n>Max || n<1);
    for (int i=0; i<n; i++)
    {
        printf("Nhap phan tu thu %d : ", i+1);
        scanf("%d",&x);
        EuQueue(Q,x);

    }
}
void Output(Queue Q)
{
	while (Q.Rear!=-1)
	{
		int a=DeQueue(Q);
		printf("%d\t",a);
	}
}
void Deletelast(Queue &Q,Queue &Q1)
{	
	Init(Q1);
	while(Q.Rear!=0)
	{
		int a=DeQueue(Q);
		EuQueue(Q1,a);
	}
	DeQueue(Q);
	while(Q1.Rear!=-1)
	{
		int a=DeQueue(Q1);
		EuQueue(Q,a);
	}
	Output(Q);
}
int main()
{
	Queue Q,Q1;
	Init(Q);
	Input(Q);
	Output(Q);
	//Deletelast(Q,Q1);
}

