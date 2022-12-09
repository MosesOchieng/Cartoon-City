const livingroomBtn = document.getElementById('livingroom');
const bedroomBtn = document.getElementById('bedroom');
const hallawayBtn = document.getElementById('hallway');
const assistantBtn = document.getElementById('assistant');
const televisionBtn = document.getElementById('television');

livingroomBtn.addEventListener("click", () => handleClick(livingroomBtn));
bedroomBtn.addEventListener("click", () => handleClick(bedroomBtn));
hallawayBtn.addEventListener("click", () => handleClick(hallawayBtn));
assistantBtn.addEventListener("click", () => handleClick(assistantBtn));
televisionBtn.addEventListener("click", () => handleClick(televisionBtn));

function handleClick(element) {
    element.classList.toggle('active');
    if(element.id == 'assistant') {
      sleep(2000).then(() => {
        element.classList.toggle('active');
      })
    }
};

function sleep(time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}