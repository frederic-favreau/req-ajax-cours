const btnAll = document.getElementById("selectall");
const divArticles = document.getElementById("articles");

btnAll.addEventListener("click", function () {
  fetch("./requetes/selectall.php")
    .then((response) => response.json())
    .then((datas) => {
        divArticles.innerHTML = "";
      for (const data of datas) {
        let divName = document.createElement("div");
        divName.innerText = data.title;
        divArticles.append(divName);
      }
    });
});

const btnOne = document.getElementById("selectone");

btnOne.addEventListener("click", function () {
  fetch("./requetes/selectone.php")
    .then((response) => response.json())
    .then((data) => {
      divArticles.innerHTML = "";
      let divName = document.createElement("div");
      divName.innerText = data.name;
      divArticles.appendChild(divName);
    });
});
