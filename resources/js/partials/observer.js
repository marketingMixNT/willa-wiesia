
const handleIntersection = (entries, observer, animationClass) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            
            entry.target.classList.add(animationClass);
        }
    });
};

const createIntersectionObserver = (animationClass) => {
    return new IntersectionObserver(
        (entries, observer) => {
            handleIntersection(entries, observer, animationClass);
        },
        {
            root: null,
            rootMargin: "0px",
            threshold: 0.5,
        }
    );
};


const textAnimation = document.querySelectorAll('.text-animation')



if (window.innerWidth > 768) {

 
    const observerText = createIntersectionObserver("fade-in-bottom");
   

   

 
    textAnimation.forEach((element) => {
        observerText.observe(element);
    });
 
}