// advanced fillter

const advancedFillterBtn = document.querySelector(".search-advanced-fillter-btn");
const biodataSidebarPanel = document.querySelector(".aw-biodatas-sidebar");
const biodataSidebarPanelClose = document.querySelector(".biodats-sidebar-close-btn");

advancedFillterBtn.addEventListener("click", ()=> {
    biodataSidebarPanel.classList.toggle("active");

})
biodataSidebarPanelClose.addEventListener("click", ()=> {
    biodataSidebarPanel.classList.remove("active");
})

// love- icon changes

const biodataLove = document.querySelectorAll(".biodata-love");
const biodataLoveFill = document.querySelectorAll(".biodata-love-fill");


biodataLove.forEach((loveIcon)=> {
    loveIcon.addEventListener("click",()=> {
        biodataLoveFill.forEach((loveIconFill)=> {
            loveIconFill.classList.add("active");
        
        })
        biodataLoveFill.forEach((loveIconFill)=> {
            loveIconFill.addEventListener("click",()=> {
                loveIconFill.classList.remove("active");
            })
        })
    })
   
})
