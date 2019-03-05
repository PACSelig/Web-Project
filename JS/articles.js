let article = document.getElementById("main-container").getElementsByTagName("article")[0];

function appendElem(title, content) {
<<<<<<< HEAD
let template = `
=======
  let template = `
>>>>>>> refs/remotes/origin/master
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
<<<<<<< HEAD
    const element = article.getElementsByClassName("Article");
    let index = 1;
    for(var art of element){
      console.info(art);
      localStorage.setItem('Article' + index, art.outerHTML);
      index++;
    }
}

function loadArticles() {
  article.innerHTML = "";
  for (let i = 1; i <= localStorage.length; i++) {
    const element = localStorage.getItem("Article" + i);
    article.innerHTML = element + article.innerHTML;

  }
}

function removeArticle(keyNum){
  article = article - localStorage.getItem("article"+keyNum);
  saveArticles();
}
=======
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
>>>>>>> refs/remotes/origin/master
