function sum(obj){
var count = 0;
for(var i = 0; i < obj.length; i++)
{
    count = count + obj[i];
}
return count;
}

var JudgeDetail=[0,0,0,0,0];

// detail validation check
function yourDetailCheck(obj){

// get value
// var yourDetail=obj.children[1];
var nm=obj.children[1].children[0].children[1].value;
var lnm=obj.children[1].children[1].children[1].value;
var ph=obj.children[1].children[2].children[1].value;
var em1=obj.children[1].children[3].children[1].value;
var em2=obj.children[1].children[4].children[1].value;
// var pw2=obj.children[1].children[5].children[1].value;


// standard regex
var nmRex=/\b[a-z\s*]+/i;
var lnmRex=/\b[a-z\s*]+/i;
var phRex=/[0-9]{3}(\-|\s*)[0-9]{3}(\-|\s*)[0-9]{4}/i;
var emRex=/[\w-\._]+@[\w-_\.]+\.[\w-_]{2,4}/i;



// checking
// name
if(nm=="" | nm==null)
{
	obj.children[1].children[0].children[2].innerHTML="";
	JudgeDetail[0]=0;
}else if(nmRex.test(nm)!=true)
{
	obj.children[1].children[0].children[2].innerHTML="&nbsp&nbsp&nbsp&nbsp Invalid first name";
	JudgeDetail[0]=0;
}else
{
    JudgeDetail[0]=1;
    obj.children[1].children[0].children[2].innerHTML="";
}

//last name
if(lnm=="" | lnm==null)
{
	obj.children[1].children[1].children[2].innerHTML="";
	JudgeDetail[1]=0;

}else if(lnmRex.test(lnm)!=true)
{
	obj.children[1].children[1].children[2].innerHTML="&nbsp&nbsp&nbsp&nbsp Invalid last name";
	JudgeDetail[1]=0;
}else
{
	JudgeDetail[1]=1;
	obj.children[1].children[1].children[2].innerHTML="";
}



//phone
if(ph=="" | ph==null)
{
	obj.children[1].children[2].children[2].innerHTML="";
	JudgeDetail[2]=0;

}else if(emRex.test(ph)!=true)
{
	obj.children[1].children[2].children[2].innerHTML="&nbsp&nbsp&nbsp&nbsp Invalid Phone";
	JudgeDetail[2]=0;
}else
{
	JudgeDetail[2]=1;
	obj.children[1].children[2].children[2].innerHTML="";
}


//email
if(em1=="" | em1==null)
{
	obj.children[1].children[3].children[2].innerHTML="";
	JudgeDetail[3]=0;

}else if(emRex.test(em1)!=true)
{
	obj.children[1].children[3].children[2].innerHTML="&nbsp&nbsp&nbsp&nbsp Invalid Email";
	JudgeDetail[3]=0;
}else
{
	JudgeDetail[3]=1;
	obj.children[1].children[3].children[2].innerHTML="";
}


// email check
if(em2=="" | em2==null)
{
	obj.children[1].children[4].children[2].innerHTML="";
	JudgeDetail[4]=0;

}else if(em1!==em2)
{
	obj.children[1].children[4].children[2].innerHTML="&nbsp&nbsp&nbsp&nbsp email doesn't match";
	JudgeDetail[4]=0;
}else
{
	JudgeDetail[4]=1;
	obj.children[1].children[4].children[2].innerHTML="";
}

// password


// // password match
// if(pw2=="" | pw2==null)
// {
// 	obj.children[1].children[5].children[2].innerHTML="";
// 	JudgeDetail[5]=0;

// }else if(pw1!==pw2)
// {
// 	obj.children[1].children[5].children[2].innerHTML="&nbsp&nbsp&nbsp&nbsp password doesn't match";
// 	JudgeDetail[5]=0;
// }else
// {
// 	JudgeDetail[5]=1;
// 	obj.children[1].children[5].children[2].innerHTML="";
// }
console.log(JudgeDetail);
console.log(sum(JudgeDetail));
}

// overall check
function overallCheck()
{
	if(sum(JudgeDetail)<5)
	{
		alert("invalid input in your detail");
		return false;
	}
}