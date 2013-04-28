
var limit = 2;
var url = 'http://bureauuser.tumblr.com';


$.getJSON(url+'/api/read/json?num='+limit+'&callback=?', function(data) {
        $.each(data.posts, function(i,posts){
                if(posts.type == 'video'){
                        displayVideoPost(posts);
                } else if(posts.type == 'link'){
                        displayLinkPost(posts);
                } else if(posts.type == 'regular'){
                        displayTextPost(posts);
                }

        });
});

function displayTextPost(posts){
        if(posts == null) return;
        $('#tumblrfeed').append('<a href="http://bureauuser.tumblr.com" class="blog-teaser-link"><article class="blog-teaser"><h2 class="header--red">'+posts['regular-title']+"</h2>" + '<date>'+posts['date']+"</date>" + posts['regular-body']+'</article></a>');
}

               

function displayLinkPost(posts){
        if(posts == null) return;
        $('#tumblrfeed').append('<a href="http://bureauuser.tumblr.com" class="blog-teaser-link"><article class="blog-teaser"><h2 class="header--red">'+posts['regular-title']+"</h2>" + '<date>'+posts['date']+"</date>" + posts['regular-body']+'</article></a>');
}

function displayVideoPost(posts){
        if(posts == null) return;
        $('#tumblrfeed').append('<a href="http://bureauuser.tumblr.com" class="blog-teaser-link"><article class="blog-teaser"><h2 class="header--red">'+posts['regular-title']+"</h2>" + '<date>'+posts['date']+"</date>" + posts['regular-body']+'</article></a>');
}
