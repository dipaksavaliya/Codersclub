function checkname()
{
    flag=0;
    if(frm.txt_fname.value=='')
    {
        alert("Enter Your Name");
    }
    else
    {
        frm.txt_fname.value=frm.txt_fname.value.toUpperCase();
        for(i=0;i<frm.txt_fname.value.length;i++)
        {
            if(frm.txt_fname.value.charAt(i)>='A' && frm.txt_fname.value.charAt(i)<='Z' || frm.txt_fname.value.charAt(i)==' ' )
            {
                continue;
            }
            else
            {
                flag=1;
                break;
            }
        }
        if(flag!=1)
        {
            return true;
        }
        else
        {
            alert("Wrong Name");
            frm.txt_fname.value="";
            document.frm.txt_fname.focus();
        }
    }
}

function checkmail()
{
    var l=frm.txt_email.value.length;
    var flag=0;
    
    if(frm.txt_email.value.charAt(0)=='@')
    {
        flag=0;
    }
    else
    {
        for(i=1;i<l;i++)
        {
            if(frm.txt_email.value.charAt(i)=='@')
            {
                for(i=i;i<l;i++)
                {    
                    if(frm.txt_email.value.charAt(i)=='.')
                    {
                        flag=1;
                        break;
                    }
                }
            }
        }
    }
    if(flag==1)
    {
        return true;
    }
    else
    {
        alert("Invalid email address");
        frm.txt_email.value="";            
        document.frm.txt_email.focus();
        
    }
    
}
function sub()
{
    checkname();
    
    checkmail();

}