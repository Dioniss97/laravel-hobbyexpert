export let renderAccordion = () => {

let questions = document.querySelectorAll(".accordion-header");
let answers = document.querySelectorAll(".content");
let arrows = document.querySelectorAll(".arrow");

// console.log(questions, answers, arrows);

if (questions) {

    questions.forEach((question, i) => {

        question.addEventListener("click", () => {

            arrows.forEach((arrow, i) => {

                answers[i].classList.remove("active");
                arrow.classList.remove("active");
            });

            console.log(answers[i], arrows[i]);

            answers[i].classList.add("active");
            arrows[i].classList.add("active");
        });
    });
}
}