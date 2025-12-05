// About us- Accordions

var li_elements_about_us = document.querySelectorAll(".about-us-content");
var item_elements_about_us = document.querySelectorAll(".about-us-collapse");
for(var i = 0; i < li_elements_about_us.length; i++) {
    li_elements_about_us[i].addEventListener("click", function(){
        li_elements_about_us.forEach(function(li){
            li.classList.remove("active");
        })
        this.classList.add("active");
        var li_value = this.getAttribute("data-content");
        item_elements_about_us.forEach(function(item){
            item.style.display = "none";
        })
        if(li_value == "aboutustab1") {
            document.querySelector("." + li_value).style.display = "block";

        }
        else if (li_value == "aboutustab2") {
            document.querySelector("." + li_value).style.display = "block";
        }
        else if (li_value == "aboutustab3") {
            document.querySelector("." + li_value).style.display = "block";
        }
        else {
            console.log("");
        }
    })
}

