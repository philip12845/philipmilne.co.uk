document.addEventListener("DOMContentLoaded", function() {
    var path = window.location.pathname.split("/").pop();
    var tabName = "about"; // Default tab

    if (path === "cv") {
        tabName = "cv";
    } else if (path === "posts") {
        tabName = "posts";
    }

    openTab(null, tabName);
    document.querySelector('.tab-links[href="#' + tabName + '"]').className += " active";

    // Add greeting to the About Me section
    addGreeting();
});

function openTab(evt, tabName) {
    // Declare all variables
    var i, tabContent, tabLinks;

    // Get all elements with class="tab-content" and hide them
    tabContent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }

    // Get all elements with class="tab-links" and remove the class "active"
    tabLinks = document.getElementsByClassName("tab-links");
    for (i = 0; i < tabLinks.length; i++) {
        tabLinks[i].className = tabLinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    if (evt) {
        evt.currentTarget.className += " active";
    }
}

function addGreeting() {
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
}

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
