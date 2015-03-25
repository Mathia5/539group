function yourDetailCheck(){
	// document.getElementById("name").value="NULL";
	// document.getElementById("CheckName").innerHTML="&nbsp&nbsp&nbsp&nbspNULL";
	// check null for name
	var nm=document.getElementById("name").value;
	var nmRex=/\b[a-z\s]+/;
	if(nm!="" & nmRex.test(nm)==true)
	{
			document.getElementById("CheckName").innerHTML="";

	}else if(nmRex.test(nm)!=true & nm!="")
	{
		document.getElementById("CheckName").innerHTML="&nbsp&nbsp&nbsp&nbsp only contain char and space";
	}else
	{
		document.getElementById("CheckName").innerHTML="&nbsp&nbsp&nbsp&nbsp Name is required";
	}

	// var ph=document.getElementById("name").value;
	// if()
}