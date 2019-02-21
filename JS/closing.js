var part = document.getElementById("dll-J-R");
var favoriteDlId = document.getElementById("favoriteDlId");
var organizationName = "Pittston Area School District";
var cookieList = document.cookie.split(";");
var favoriteClass = "";
for (var i = 0; i < cookieList.length; i++) {
  if (cookieList[i].indexOf("organizationName") > -1) {
    var nameStr = cookieList[i].replace("organizationName=", "");
    var nameList = nameStr.split("<gap>");
    for (var j = 0; j < (nameList.length - 1); j++) {
      if (nameList[j] == organizationName) {
        favoriteClass = " selected"
      }
    }
  }
}
var publishClass = "38J";
var typeOr = "organizationName";
var alertContent = '<dd class="accordion-navigation active" id= "dd' + publishClass + '"><a href="#closingPanel' + publishClass + '" id="orga">' + organizationName + '</a><div class="toggle-favorite' + favoriteClass + '" id="div' + publishClass + '"href="#" onclick="editCookie(this, typeOr)"><i class="fa fa-star selected-icon" id="i' + publishClass + '"></i><i class="fa fa-star-o not-selected-icon" id="is' + publishClass + '"></i></div><div id="closingPanel' + publishClass + '" class="content active "><p>2 Hour Delay</p></div></dd>';
if (favoriteClass != "") {
  favoriteDlId.innerHTML = favoriteDlId.innerHTML + alertContent
}
if (part.innerHTML.indexOf("<p>There are no current closing alerts. Please check back later.</p>") >= 0) {
  part.innerHTML = part.innerHTML.replace("<p>There are no current closing alerts. Please check back later.</p>", "")
}
part.innerHTML = part.innerHTML + alertContent;
