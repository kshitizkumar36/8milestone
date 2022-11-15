const loginPopup = document.querySelector(".login-popup");
  const close = document.querySelector(".close");

if(loginPopup!==null){
  window.addEventListener("load",function(){
 
   showPopup();
   // setTimeout(function(){
   //   loginPopup.classList.add("show");
   // },5000)

  })

  function showPopup(){
        const timeLimit = 1 // seconds;
        let i=0;
        const timer = setInterval(function(){
         i++;
         if(i == timeLimit){
          clearInterval(timer);
          loginPopup.classList.add("show");
         } 
         console.log(i)
        },1000);
  }


  close.addEventListener("click",function(){
    loginPopup.classList.remove("show");
  })
}
 
  const cards = document.querySelectorAll(".uper")
  if(cards!==null){
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
      entry.target.classList.toggle("up", entry.isIntersecting)
      if(entry.isIntersecting) observer.unobserve(entry.target)
    })
})
cards.forEach(
  card => {
    observer.observe(card)

  })
  }

  const pic = document.querySelectorAll(".leftn")
const pick = new IntersectionObserver(entries => {
  entries.forEach(entry => {
      entry.target.classList.toggle("left", entry.isIntersecting)
      if(entry.isIntersecting) pick.unobserve(entry.target)
    })
})
pic.forEach(
  pics => {
    pick.observe(pics)

  })