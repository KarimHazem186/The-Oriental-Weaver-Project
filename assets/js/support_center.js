const arrows = document.querySelectorAll(".QandA");

arrows.forEach((question) => {
  question.addEventListener("click", () =>{
    question.classList.toggle("active");
  })
});
