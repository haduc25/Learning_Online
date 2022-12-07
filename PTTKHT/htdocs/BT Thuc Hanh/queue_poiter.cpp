//con tro
#include <stdio.h>
#include <stdlib.h>

typedef int item; //kiem dl

struct Node
{
	item Data;
	Node * Next;
};
struct Queue
{
    Node * Front, *Rear;
    int count;
};
//khoi tao Queue
void Init (Queue &q)
{
	q.Front = q.Rear = NULL;
	q.count = 0;
}
//tao Node P
Node *MakeNode(item x) //tao 1 Node
{
    Node *P = (Node*) malloc(sizeof(Node)); // cap phat bo nho
    P->Next = NULL;
    P->Data = x;
    return P;
}
//check empty
int isEmpty(Queue q)
{
	if(q.count == 0)
		return 1;
	return 0;
}
//them pt vao cuoi Queue
void enLast(Queue &q, item x) 
{
    Node *P = MakeNode(x);
    if (isEmpty(q))
        q.Front = q.Rear = P; //front & rear -> P
    else
    { 
        q.Rear->Next = q;
        q.Rear = P;
    }
    q.count++;
}
//xoa pt dau Queue
int deFist(Queue &q)
{
	if(isEmpty(q))
	{
		printf("Queue rong !");
		return 0;
	}
	else
	{
		item x = q.Front->Data;
		if (q.count == 1)
			Init(q);
		else
			q.Front = q.Front->Next;
		q.count--;
		return x;
	}
}
//nhap
void nhap(Queue &q)
{
	int i,n,x;
	do
	{
		printf("Nhap so phan tu Queue [Yeu Cau: Phan tu < %d]=> ",MAX);
		scanf("%d",&n);
	}while(n>MAX || n<1);
	for (i=0;i<n;i++)
	{
		printf("Nhap phan tu [%d]: ",i+1);
		scanf("%d",&x);
		enLast(q,x);
	}
}
//xuat
void xuat(Queue q)
{
	
}
int main()
{
	Queue q;
    Init(q);
    nhap(q);
    xuat(q);
}


























