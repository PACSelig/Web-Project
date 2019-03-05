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
  localStorage.clear();
  const element = article.getElementsByClassName("Article");
  let index = 1;
  for (var art of element) {
    console.info(art);
      localStorage.setItem('Article' + index, art.outerHTML);
      index++;
    }
  }

function loadArticles() {
  for (let i = 1; i <= localStorage.length; i++) {
    const element = localStorage.getItem("Article" + i);    
    if(!(article.innerHTML.includes(element))){
      article.innerHTML = element + article.innerHTML;
    } else {
      console.log("Article's innerhtml already contains " + element);
    }
  }
}

function removeArticle(keyNum) {
  article = article - localStorage.getItem("article" + keyNum);
  saveArticles();
}