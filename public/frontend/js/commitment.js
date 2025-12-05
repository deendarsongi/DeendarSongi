 // commitment biodata

 const commitmentFemaleBtn = document.querySelector(
    ".commitment-female-btn-box"
  );
  const commitmentMaleBtn = document.querySelector(
    ".commitment-male-btn-box"
  );
  const commitmentMaleContent = document.querySelector(
    ".commitment-male-content"
  );
  const commitmentFemaleContent = document.querySelector(
    ".commitment-female-content"
  );

  commitmentMaleBtn.addEventListener("click", () => {
    commitmentMaleContent.classList.add("active"); {
        commitmentFemaleContent.classList.remove("active");
    }
  });

  commitmentFemaleBtn.addEventListener("click", () => {
    commitmentFemaleContent.classList.add("active"); {
        commitmentMaleContent.classList.remove("active");
    }
  });