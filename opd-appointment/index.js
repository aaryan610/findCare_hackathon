const appointment = () => {
  const slots = document.querySelectorAll(".slot");
  const time = document.querySelector("input[name='time']");
  const selectedSlot = document.querySelector(".selected-slot span");

  slots.forEach((slot) => {
    slot.addEventListener("click", () => {
      const value = slot.getAttribute("value");
      time.value = value;
      selectedSlot.innerText = value;
    });
  });
};

const changeSection = (hide, show) => {
  const sections = document.querySelectorAll(".form-wrapper > div");

  if (show == 2 && hide == 1) {
    if (
      document.querySelector("#name").value != "" &&
      document.querySelector("#contactno").value != ""
    ) {
      sections[0].classList.remove("active");
      sections[1].classList.add("active");
    } else {
      alert("Please fill out all the fields!");
    }
  } else if (show == 3) {
    if (
      document.querySelector("#department").value != "" &&
      document.querySelector("#date").value != ""
    ) {
      sections[1].classList.remove("active");
      sections[2].classList.add("active");

      appointment();
    } else {
      alert("Please fill out all the fields!");
    }
  } else {
    sections[hide - 1].classList.remove("active");
    sections[show - 1].classList.add("active");
  }
};

document.querySelectorAll("#department option").forEach((option, index) => {
  if (index != 0) option.innerText = option.value;
});

const setMinDate = () => {
  let today = new Date();
  let dd = today.getDate();
  let mm = today.getMonth() + 1;
  const yyyy = today.getFullYear();

  if (dd < 10) {
    dd = "0" + dd;
  }
  if (mm < 10) {
    mm = "0" + mm;
  }

  today = dd + "-" + mm + "-" + yyyy;
  document.querySelector("input[type='date']").setAttribute("min", today);
  alert(today);
};
setMinDate();
