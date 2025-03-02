document.addEventListener("DOMContentLoaded", function addGreeting() {

  // Set a delay of 100ms
  setTimeout(function() {

    var hours = new Date().getHours();
    var greeting;

    if (hours < 12) {
        greeting = "Good morning,";
    } else if (hours < 18) {
        greeting = "Good afternoon,";
    } else {
        greeting = "Good evening,";
    }

    var greetingElement = document.createElement("span");
    greetingElement.textContent = greeting + " "; // Add space after greeting
    var paragraph = document.querySelector("#about .container p");
    paragraph.insertBefore(greetingElement, paragraph.firstChild);

  }, 100); // Delay by 100ms to ensure DOM is ready

});

function searchPosts() {
    var input, filter, posts, post, title, text, i;
    input = document.getElementById('search-input');
    filter = input.value.toLowerCase();
    posts = document.getElementById('posts-list').getElementsByClassName('post');

    for (i = 0; i < posts.length; i++) {
        post = posts[i];
        title = post.getElementsByTagName('h2')[0];
        text = post.getElementsByTagName('p')[0];
        if (title.innerHTML.toLowerCase().indexOf(filter) > -1 || text.innerHTML.toLowerCase().indexOf(filter) > -1) {
            post.style.display = "";
        } else {
            post.style.display = "none";
        }
    }
}
