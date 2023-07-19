let header = document.querySelector("header"),
inter = document.querySelector(".inter"),
headerImg = document.querySelector(".inter a"),
eventBack = document.querySelector(".event-back"),
eventText = document.querySelector(".event-back .text"),
scrollBtn = document.querySelector(".inter .box-one .mouse_scroll");




window.onscroll = () => {
    if (window.scrollY > 0) {
        header.classList.add("sticky");
        // inter.classList.add("active");
        
    } else {
        header.classList.remove("sticky");
        // inter.classList.remove("active");
    }
    if (window.scrollY > 1222 && window.scrollY <1758.4 ) {
        header.classList.add("stickyy");
        // inter.classList.add("active");
        
    } else {
        header.classList.remove("stickyy");
        // inter.classList.remove("active");
    }

    if (this.scrollY > 188) {
        eventBack.classList.add("active");
        
        
    } else {
        eventBack.classList.remove("active");
        // eventText.classList.remove("active");
        
    }
    
    if (this.scrollY > 491) {
        eventText.classList.add("active");
        
    } else {
        eventText.classList.remove("active");

    }

}



headerImg.onclick = () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth',
    })
}

scrollBtn.onclick = () => {
    window.scrollTo({
        top: 606,
    })
}


window.addEventListener('load',() => {
    inter.classList.add("active");
})

