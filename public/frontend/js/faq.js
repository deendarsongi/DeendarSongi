// FAQ- Accordions

var li_elements = document.querySelectorAll(".faq-content");
var item_elements = document.querySelectorAll(".faq-collapse");
for(var i = 0; i < li_elements.length; i++) {
    li_elements[i].addEventListener("click", function(){
        li_elements.forEach(function(li){
            li.classList.remove("active");
        })
        this.classList.add("active");
        var li_value = this.getAttribute("data-content");
        item_elements.forEach(function(item){
            item.style.display = "none";
        })
        if(li_value == "faqtab1") {
            document.querySelector("." + li_value).style.display = "block";

        }
        else if (li_value == "faqtab2") {
            document.querySelector("." + li_value).style.display = "block";
        }
        else if (li_value == "faqtab3") {
            document.querySelector("." + li_value).style.display = "block";
        }
        else {
            console.log("");
        }
    })
}


// accordion1 show/off

const accordionContents = document.querySelectorAll(".aw-accordion-content");
const accordionCollapse = document.querySelectorAll(".aw-accordion-collapse");
const accordionArrow = document.querySelectorAll(".accordion-arrow");

accordionContents.forEach((accordion)=>{
    accordion.addEventListener("click",()=> {
        if(accordion.classList.contains("active")) {
            accordion.classList.remove("active")
        }else{
            accordion.classList.add("active")
            accordionContents.forEach((otherAccordion)=>{
                if(otherAccordion != accordion){
                    otherAccordion.classList.remove("active");
                }
            })
        }
    })
})
