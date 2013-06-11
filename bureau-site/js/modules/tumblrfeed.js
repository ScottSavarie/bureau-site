 google.load("feeds", "1");

function OnLoad() {
var feedControl = new google.feeds.FeedControl();

feedControl.addFeed("http://bureauuser.tumblr.com/rss");
feedControl.setNumEntries(2);


feedControl.draw(document.getElementById("tumblrfeed"));
}

google.setOnLoadCallback(OnLoad);
