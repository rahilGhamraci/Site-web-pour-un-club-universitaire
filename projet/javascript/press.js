let  header = document.querySelector("header");

window.onscroll = () => {
    if (window.scrollY > 75) {
        header.classList.add("sticky");
       
        
    } else {
        header.classList.remove("sticky");
      
    }
    


}
