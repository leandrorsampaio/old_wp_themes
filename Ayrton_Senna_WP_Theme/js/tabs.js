        function tabs(x)
        {
            var lis=document.getElementById("theContent_comoChegar_links").childNodes; //gets all the LI from the UL
 
            for(i=0;i<lis.length;i++)
            {
                lis[i].className=""; //removes the classname from all the LI
            }
            x.className="selected"; //the clicked tab gets the classname selected
            var res=document.getElementById("theContent_comoChegar_quadro");  //the resource for the main tabContent
            var tab=x.id;
            switch(tab) //this switch case replaces the tabContent
            {
                case "theContent_comoChegar_links_trem":
                    res.innerHTML=document.getElementById("tremContent").innerHTML;
                    break;
 
                case "theContent_comoChegar_links_bus":
                    res.innerHTML=document.getElementById("onibusContent").innerHTML;
                    break;
                case "theContent_comoChegar_links_bike":
                    res.innerHTML=document.getElementById("bikeContent").innerHTML;
                    break;
                case "theContent_comoChegar_links_carro":
                    res.innerHTML=document.getElementById("carroContent").innerHTML;
                    break;
                case "theContent_comoChegar_links_taxi":
                    res.innerHTML=document.getElementById("taxiContent").innerHTML;
                    break;
                case "theContent_comoChegar_links_heli":
                    res.innerHTML=document.getElementById("helicopteroContent").innerHTML;
                    break;
                case "theContent_comoChegar_links_aviao":
                    res.innerHTML=document.getElementById("aviaoContent").innerHTML;
                    break;
                default:
                    res.innerHTML=document.getElementById("tremContent").innerHTML;
                    break;
 
                }
            }
