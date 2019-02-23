let article = document.getElementById("main-container").getElementsByTagName("article")[0];

function appendElem(title, content) {
let template = `
  <div class="Article">
    <h1 id="main-Title">${title}</h1>
    <hr>
    <p id="mainArticleText">${content}</p>
  <div>
`;
  article.innerHTML = template + article.innerHTML;
  saveArticles();
}

function saveArticles() {
  for (let i = 0; i < article.getElementsByClassName("Article").length; i++) {
    if(i > 1){
      const element = article.getElementsByClassName("Article")[i];
      localStorage.setItem("article" + (i-2), element.innerHTML);
    }
  }
}

function loadArticles() {
  article.innerHTML = "";
  for (let i = 0; i < localStorage.length; i++) {
      const element = localStorage.getItem("article" + i);
      article.innerHTML = article.innerHTML + element;
  }
}

function removeArticle(keyNum){
  article = article - localStorage.getItem("article"+keyNum);
  saveArticles();
}
