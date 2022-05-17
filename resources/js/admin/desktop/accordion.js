export let renderAccordion = () => {

let questions = document.querySelectorAll(".question-header");
let answers = document.querySelectorAll(".answer");
let arrows = document.querySelectorAll(".arrow");

// console.log(questions, answers, arrows);

if (questions) {

    questions.forEach((question, i) => {

        question.addEventListener("click", () => {

            arrows.forEach((arrow, i) => {

                answers[i].classList.remove("active");
                arrow.classList.remove("active");
            });

            // console.log(answers[i], arrows[i]);

            answers[i].classList.add("active");
            arrows[i].classList.add("active");

            // if (answers[i].classList == "active" && arrows[i].classList == "active") {

            //     answers[i].classList.remove("active");
            //     arrows[i].classList.remove("active");
            // } else {

            //     answers[i].classList.add("active");
            //     arrows[i].classList.add("active");
            // }
        });
    });
}
}