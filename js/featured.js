class Game {
  constructor(cover, title, desc, tags, price) {
    this.cover = cover;
    this.title = title;
    this.desc = desc;
    this.tags = tags;
    this.price = price;
  }
}

//TODO: Database to fetch the games marked as featured
var featuredIndex = 0;
var featured = [];
featured.push(
  new Game("watchdogs.webp", "Watch Dogs", "Set in Chicago, where a central network of computers connects everyone and everything, Watch Dogs explores the impact of technology within our society. You play as Aiden Pearce, a brilliant hacker and former thug, whose criminal past led to a violent family tragedy. Now on the hunt for those who hurt your family, you'll be able to monitor and hack all who surround you by manipulating everything connected to the city’s network. Access omnipresent security cameras, download personal information to locate a target, control traffic lights and public transportation to stop the enemy... and more.", ["Action", "Open world", "Hacking"], 9.99),
  new Game("doom4.webp", "DOOM (2016)", "Developed by id software, the studio that pioneered the first-person shooter genre and created multiplayer Deathmatch, DOOM returns as a brutally fun and challenging modern-day shooter experience. Relentless demons, impossibly destructive guns, and fast, fluid movement provide the foundation for intense, first-person combat – whether you’re obliterating demon hordes through the depths of Hell in the single-player campaign, or competing against your friends in numerous multiplayer modes. Expand your gameplay experience using DOOM SnapMap game editor to easily create, play, and share your content with the world.", ["FPS", "Gore", "Demons"], 6.99)
);

function displayFeatured(index) {
  document.getElementById("featured-cover").src = "images/featured/" + featured[index].cover;
  document.getElementById("featured-title").innerText = featured[index].title;
  document.getElementById("featured-desc").innerText = featured[index].desc;
  // Clear previous tags
  let prevGameTags = document.getElementsByClassName("game-tags");
  if (prevGameTags.length > 0) {
    for (let tag of prevGameTags) {
      tag.remove();
    }
  }
  // Insert the new ones
  let gameTags = "";
  for (let tag of featured[index].tags) {
    gameTags += "<div class=\"game-tags\">" + tag + "</div>";
  }
  document.getElementById("featured-game-tags-container").innerHTML = gameTags;
}

function onLeftFeaturedBtnClick() {
  if (featuredIndex > 0) {
    featuredIndex -= 1;
    displayFeatured(featuredIndex);
  }
}

function onRightFeaturedBtnClick() {
  if (featuredIndex < featured.length - 1) {
    featuredIndex += 1;
    displayFeatured(featuredIndex);
  }
}

document.addEventListener("DOMContentLoaded", () => {displayFeatured(featuredIndex);})