const navrespo = () => 
{
    const icon = document.querySelector('.bar-icon');
    const navbar = document.querySelector('.navbar');

    icon.addEventListener('click', () => 
    {
        navbar.classList.toggle('navhide');
    });
}
navrespo();



document.getElementById("member").addEventListener("submit", (e) => { e.preventDefault();

    var full_name = document.getElementById("full_name").value;

    var email = document.getElementById("email").value;

    var pass = document.getElementById("pass").value;

    var gender = document.getElementsByName("gender");

    var alamat = document.getElementById("alamat").value;

    var cekbox = document.getElementById("cekbox");

    // ========================================================

    if(full_name.length < 6)
    {
        alert("please enter your full name"); return;
    }

    if(pass.length < 8)
    {
        alert("please enter at least 8 characters for your password"); return;
    }

    if(!email_vali(email))
    {
        alert("please enter a valid email"); return; 
    }

    if(!(gender[0].checked || gender[1].checked))
    {
        alert("please select your gender"); return;
    }

    if(!alamat_vali(alamat))
    {
        alert("please start your address with jl or Jl"); return; 
    }

    if(!cekbox.checked)
    {
        alert("you must subscribe to our daily letter");
        return;
    }

    var yakin_submit = confirm("are you sure you want to become a member");

    if(yakin_submit){
        alert("CONGRATS YOU ARE NOW A MEMBER");
        setInterval('refresh()', 500);
    } else {
        alert("You cancelled your membership registration"); 
        setInterval('refresh()', 500);
    }


})

// functions

function refresh(){
    location.reload();
}

function email_vali(email){
    return(email.indexOf("@") != -1) && (email.endsWith(".com"))
}

function alamat_vali(alamat){
    return(
        (alamat.startsWith("jl")) || (alamat.startsWith("Jl")))
}



