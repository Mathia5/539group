//detailed validation check
function yourDetailCheck(){

    var detail = 0;

    nm = document.getElementById("firstname").value;
    lnm = document.getElementById("lastname").value;
    ph = document.getElementById("phone").value;
    em1 = document.getElementById("email").value;
    em2 = document.getElementById("confirm-email").value;

    // standard regex
    var nmRex=/\b[a-z\s*]+/i;
    var lnmRex=/\b[a-z\s*]+/i;
    var phRex=/[0-9]{3}(\-|\s*)[0-9]{3}(\-|\s*)[0-9]{4}/i;
    // var emRex=/^[^0-9][A-z0-9._%+-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/;update a rex
    var emRex=/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/i;

    //first name
    if(nm=="" | nm==null)
    {
        document.getElementById("CheckFirstName").innerHTML="";
    }   else if(nmRex.test(nm)!=true)
    {
        document.getElementById("CheckFirstName").innerHTML="&nbsp&nbsp&nbsp&nbsp Invalid first name";
        document.getElementById("CheckFirstName").style.color="red";
        document.getElementById("CheckFirstName").style.fontWeight="bold";
        document.getElementById("firstname").focus();
    }else
    {
        detail = detail + 1;
        document.getElementById("CheckFirstName").innerHTML="";
    }

    //last name
    if(lnm=="" | lnm==null)
    {
        document.getElementById("CheckLastName").innerHTML="";

    }else if(lnmRex.test(lnm)!=true)
    {
        document.getElementById("CheckLastName").innerHTML="&nbsp&nbsp&nbsp&nbsp Invalid last name";
        document.getElementById("CheckLastName").style.color="red";
        document.getElementById("CheckLastName").style.fontWeight="bold";

    }else
    {
        detail = detail + 1;
        document.getElementById("CheckLastName").innerHTML="";
    }

    //phone
    if(ph=="" | ph==null)
    {
        document.getElementById("CheckPhone").innerHTML="";

    }else if(phRex.test(ph)!=true)
    {
        document.getElementById("CheckPhone").innerHTML="&nbsp&nbsp&nbsp&nbsp Invalid Phone";
        document.getElementById("CheckPhone").style.color="red";
        document.getElementById("CheckPhone").style.fontWeight="bold";

    }else
    {
        detail = detail + 1;
        document.getElementById("CheckPhone").innerHTML="";
    }

    //email
    if(em1=="" | em1==null)
    {
        document.getElementById("CheckEmail").innerHTML="";

    }else if(emRex.test(em1)!=true)
    {
        document.getElementById("CheckEmail").innerHTML="&nbsp&nbsp&nbsp&nbsp Invalid Email";
        document.getElementById("CheckEmail").style.color="red";
        document.getElementById("CheckEmail").style.fontWeight="bold";

    }else
    {
        detail = detail + 1
        document.getElementById("CheckEmail").innerHTML="";
    }

    // email confirm check
    if(em2=="" | em2==null)
    {
        document.getElementById("CheckEmailConfirm").innerHTML="";
    }else if(em1!==em2)
    {
        document.getElementById("CheckEmailConfirm").innerHTML="&nbsp&nbsp&nbsp&nbsp Email don't match";
        document.getElementById("CheckEmailConfirm").style.color="red";
        document.getElementById("CheckEmailConfirm").style.fontWeight="bold";
    }else
    {
        detail = detail + 1;
        document.getElementById("CheckEmailConfirm").innerHTML="";
    }

    return detail;
}