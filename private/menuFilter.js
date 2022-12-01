var allbtn = document.getElementsByClassName("filter-btn");
var allmenugroups = document.getElementsByClassName("menu-iterm-group");
var allmenuiterms = document.getElementsByClassName("menu-iterm");
var state = "(a)";

var lastSelect = allbtn[2];

//Bind function to the three buttons.
for(let i = 0; i< allbtn.length; i++)
{
    (function(j) {
        allbtn[j].onclick = function() {
            if(allbtn[j]==lastSelect) return;
            allbtn[j].className="btn-success btn-lg filter-btn";
            lastSelect.className="btn-danger btn-lg filter-btn";
            lastSelect=allbtn[j];
            state="("+allbtn[j].id+")";
            FilterWork(state);
        }
    }) (i)
}
//hide all the tags which don't fit to the requirement.
function FilterWork(type) {
    if(state=="(a)")
    {
        for(let i=0;i<allmenuiterms.length;i++)
        {
            allmenuiterms[i].style.display="";
        }
        return ;
    }
    for(let i=0;i<allmenuiterms.length;i++)
    {
        allmenuiterms[i].style.display="";
    }
    for(let i=0;i<allmenuiterms.length;i++)
    {
        var OK=false;
        for(let j=0;j<allmenuiterms[i].childNodes.length;j++)
        {
            var ele=allmenuiterms[i].childNodes[j];
            if(ele.className!="foodTag") continue;
            if(ele.innerHTML==type)
            {
                OK=true;
                break;
            }
        }
        if(!OK)
        {
            allmenuiterms[i].style.display= "none";
        }
    }
}
//Filter Appetizers.
function appFilter() {
    var H2 = document.getElementsByClassName("menu-header");
    for(let i=0;i<allmenugroups.length;i++)
    {
        H2[i].style.display="";
        allmenugroups[i].style.display="";
    }
    for(let i=0;i<allmenugroups.length;i++)
    {
        if(allmenugroups[i].id!="Appe")
        {
            allmenugroups[i].style.display="none";        
        }
        for(let i=0;i<H2.length;i++)
        {
            if(H2[i].innerHTML!="- Appetizers -")
            {
                H2[i].style.display="none";
            }
        }
    }
}
//Filter Main Dishes
function mainFilter() {
    var H2 = document.getElementsByClassName("menu-header");
    for(let i=0;i<allmenugroups.length;i++)
    {
        H2[i].style.display="";
        allmenugroups[i].style.display="";
    }
    for(let i=0;i<allmenugroups.length;i++)
    {
        if(allmenugroups[i].id!="main")
        {
            allmenugroups[i].style.display="none";        
        }
        for(let i=0;i<H2.length;i++)
        {
            if(H2[i].innerHTML!="- Main Dishes -")
            {
                H2[i].style.display="none";
            }
        }
    }
}
//Filter Desserts.
function dessFilter() {
    var H2 = document.getElementsByClassName("menu-header");
    for(let i=0;i<allmenugroups.length;i++)
    {
        H2[i].style.display="";
        allmenugroups[i].style.display="";
    }
    for(let i=0;i<allmenugroups.length;i++)
    {
        if(allmenugroups[i].id!="dess")
        {
            allmenugroups[i].style.display="none";        
        }
        for(let i=0;i<H2.length;i++)
        {
            if(H2[i].innerHTML!="- Desserts -")
            {
                H2[i].style.display="none";
            }
        }
    }
}
//Display All stuffs.
function allFilter() {
    var H2 = document.getElementsByClassName("menu-header");
    for(let i=0;i<allmenugroups.length;i++)
    {
        H2[i].style.display="";
        allmenugroups[i].style.display="";
    }
}