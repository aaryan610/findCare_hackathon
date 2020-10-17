const slots = document.querySelectorAll(".slot");
const time = document.querySelector("input[name='time']");

slots.forEach((slot) => {
  slot.addEventListener("click", () => {
    const value = slot.getAttribute("value");
    time.value = value;
  });

  const status = document.createElement("div");
  status.setAttribute("class", "status");

  if (slot.classList.contains("available")) {
    //Add Status
    status.innerText = "Available";

    //Add Choose Button for Time Slot
    const button = document.createElement("button");
    button.setAttribute("type", "button");
    button.innerText = "CHOOSE";
    slot.appendChild(button);
  } else if (slot.classList.contains("break")) {
    status.innerText = "Break";
  } else {
    status.innerText = "Unavailable";
  }

  slot.appendChild(status);
});

const changeSection = (hide, show) => {
  const sections = document.querySelectorAll(".form");

  sections[hide - 1].classList.remove("active");
  sections[show - 1].classList.add("active");
};
