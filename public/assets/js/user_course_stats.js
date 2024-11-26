document.addEventListener("DOMContentLoaded", () => {
  // Attendance Progress Circle Animation
  function animateProgressCircle() {
    const progressCircle = document.querySelector(".progress-circle");
    const progressPath = document.getElementById("attendance-path");

    if (!progressCircle || !progressPath) return;

    const progress = parseFloat(progressCircle.dataset.progress);
    const radius = 15.9155;
    const circumference = 2 * Math.PI * radius;
    const strokeDashoffset = circumference - (progress / 100) * circumference;

    progressPath.setAttribute(
      "stroke-dasharray",
      `${circumference} ${circumference}`
    );
    progressPath.setAttribute("stroke-dashoffset", circumference);

    // Trigger reflow
    progressPath.getBoundingClientRect();

    progressPath.style.strokeDashoffset = strokeDashoffset;
  }

  // Animate Assignments Entries
  function animateAssignments() {
    const assignmentItems = document.querySelectorAll(".assignment-item");

    assignmentItems.forEach((item, index) => {
      item.style.opacity = "0";
      item.style.transform = "translateX(-20px)";

      setTimeout(() => {
        item.style.transition = "all 0.5s ease";
        item.style.opacity = "1";
        item.style.transform = "translateX(0)";
      }, index * 200);
    });
  }

  // Tooltips for Additional Information
  function initTooltips() {
    const statsCards = document.querySelectorAll(".stat-card");

    statsCards.forEach((card) => {
      card.addEventListener("mouseenter", (e) => {
        const tooltip = document.createElement("div");
        tooltip.classList.add("tooltip");

        switch (card.querySelector("h3").textContent) {
          case "Attendance":
            tooltip.textContent = "Your total course participation rate";
            break;
          case "Assignments":
            tooltip.textContent = "Current assignment completion status";
            break;
          case "Grade Summary":
            tooltip.textContent = "Your academic performance in the course";
            break;
          case "Payment Status":
            tooltip.textContent = "Course fee payment details";
            break;
        }

        card.appendChild(tooltip);
        tooltip.style.top = `-${tooltip.offsetHeight + 10}px`;
      });

      card.addEventListener("mouseleave", () => {
        const tooltip = card.querySelector(".tooltip");
        if (tooltip) card.removeChild(tooltip);
      });
    });
  }

  // Initialize all animations
  animateProgressCircle();
  animateAssignments();
  initTooltips();
});
