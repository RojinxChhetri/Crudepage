	//Function of Odd and Even --Coded by Rojin Chhetri
function odd_even(){
var no;
no=Number(document.getElementById("age").value);
if(no%2==0)
{
alert("Even Number");
}
else
{
alert("Odd Number");
}
}

//function to know if you are allowed for voting or not
function vote(){
var age;
age=Number(document.getElementById("vote").value);
if(age>=18)
{
	alert("You are Allowed For Voting");
}
else
{
	alert("You are still Kid baby");
}
}

//check palindrom
function palin()
{
var a,no,b,temp=0;

no=Number(document.getElementById("no_input").value);

b=no;
while(no>0)
{
a=no%10;
no=parseInt(no/10);
temp=temp*10+a;
}
if(temp==b)
{
alert("The Number is Palindrome");
}
else
{
alert("The Number is Not Palindrome");
}
}

//rev number
function rev()
{
var x,n,c,tem=0;

n=Number(document.getElementById("rever").value);

c=n;
while(n>0)
{
x=n%10;
n=parseInt(n/10);
tem=tem*10+x;
}
alert(tem);
}

//number table
function table(){
var number;
number=Number(document.getElementById("tab").value);

for(let i = 1; i <= 10; i++) {

    const result = i * number;

    console.log(`${number} * ${i} = ${result}`);
}
}

/////////////////////////////////////Coded by Rojin Chhetri///////////////////////////////////////////////////////////////////////////////