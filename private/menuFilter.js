var allbtn = document.getElementsByClassName("filter-btn");
var allmenugroups = document.getElementsByClassName("menu-iterm-group");
var allmenuiterms = document.getElementsByClassName("menu-iterm");
var allmenuinfos = document.getElementsByTagName("h3");
var state = "(a)";
var stateText= "";
var lastSelect = allbtn[2];
var inp=document.getElementsByTagName("input")[0];

//Bind function to the three buttons.
for(let i = 0; i< allbtn.length; i++)
{
    (function(j) {
        allbtn[j].onclick = function() {
            if(allbtn[j]==lastSelect) return;
            allbtn[j].className="btn-success btn-lg filter-btn";
            lastSelect.className="btn-info btn-lg filter-btn";
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
inp.oninput = function(){
    stateText = this.value.toLowerCase();
    searchBar(stateText); 
}
//search bar function.
function searchBar(value) {
    var H2 = document.getElementsByClassName("menu-header");
    if(!value||value=="Please Input the Keywords.")
    {
        for(let i=0;i<allmenuiterms.length;i++)
        {
            allmenuiterms[i].style.display="";
        }
        for(let i=0;i<allmenugroups.length;i++)
        {
            H2[i].style.display="";
            allmenugroups[i].style.display="";
        }
        if(state!="(a)")
        {
            FilterWork(state);
        }
        return ;
    }
    for(let i=0;i<allmenugroups.length;i++)
    {
        H2[i].style.display="";
    }
    for(let i=0;i<allmenuinfos.length;i++)
    {
        var OK=false;
        for(let j=0;j<allmenuinfos[i].childNodes.length;j++)
        {
            var now=allmenuinfos[i].childNodes[j];
            if(now.className!="dish-name") continue;
            if(now.innerHTML.toLowerCase().indexOf(value)>-1)
            {
                OK=true;
                break;
            }
         }
        if(!OK)
        {
            allmenuinfos[i].parentElement.style.display="none";
        }
    }
}
