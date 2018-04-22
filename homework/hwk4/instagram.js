
var data = {
  posts: [
    {
      text: 'working hard!',
      timestamp: 1519673597135,
      photo: 'img/turtle-sandwich.png',
      username: 'profjason',
      likes: 43,
      comments: [
        {
          text: "funny looking turtle",
          username: 'tommy',
          timestamp: 1519804800000,
        },
        {
          text: "@profjason looks like you",
          username: 'sarahlives',
          timestamp: 1519856607000,
        }
      ]
    },
    {
      text: 'where i will be #wheniretire',
      timestamp: 1518681617827,
      photo: 'img/resort.jpg',
      username: 'tommy',
      likes: 186,
      comments: [
        {
          text: "@tommy you will NEVER retire! too many spenders in your camp!",
          username: 'tommy',
          timestamp: 1518819807000,
        },
        {
          text: "i will be your neighbor",
          username: 'dropandroll',
          timestamp: 1518835500000,
        },
        {
          text: "already own that house and don't take company",
          username: 'profjason',
          timestamp: 1518977160000,
        }
      ]
    },
    {
      text: 'did he live',
      timestamp: 1519027278654,
      photo: 'img/shark-wave.jpg',
      username: 'sarahlives',
      likes: 22,
      comments: [
        {
          text: "yep",
          username: 'profjason',
          timestamp: 1518977160000,
        }
      ]
    },
    {
      text: 'wow...who knows that is out there. i wanted to be an astronaut, but decided to work fast food instead because i like to help people.',
      timestamp: 1513929600000,
      photo: 'img/space.jpg',
      username: 'nocluebill',
      likes: 1,
    },
    {
      text: 'smash it like a bug!',
      timestamp: 1462258800000,
      photo: 'img/parrot-smash.jpg',
      username: 'dropandroll',
      likes: 22,
      comments: [
        {
          text: "this is how my dad taught me to do it too!",
          username: 'tommy',
          timestamp: 1498703760000,
        },
        {
          text: "not happening",
          username: 'nocluebill',
          timestamp: 1498839900000,
        },
        {
          text: "way too hard",
          username: 'nocluebill',
          timestamp: 1498875900000,
        },
        {
          text: "birds can do anything",
          username: 'sarahlives',
          timestamp: 1499307900000,
        },
        {
          text: "you should really take this picture down. it is not fair to the bird to put it on a skateboard",
          username: 'profjason',
          timestamp: 1505653800000,
        }
      ]
    }
  ]
}

var postsContainer = document.createElement("div");
postsContainer.setAttribute('class','postsContainer');
document.body.appendChild(postsContainer);

for( post in data.posts){
  printPost(data.posts[post])
}

function printPost(post){
  //Create a container for each post
  var postContainer = document.createElement("div");
  postContainer.setAttribute("class", "post-item");
  
  //Create a span containing the username
  var user = document.createElement('span');
  user.setAttribute('class','user');
  user.innerHTML = post['username'];
  postContainer.appendChild(user);
    
  //Create a image containing the photo
  var photo = document.createElement('img');
  photo.setAttribute('class','photo');
  photo.setAttribute('src',post['photo']);
  postContainer.appendChild(photo);
     
  //Create a span containing the text
  var text = document.createElement('span');
  text.setAttribute('class','text');
  text.innerHTML = post['text'];
  postContainer.appendChild(text);
  
  //Create a span containing the likes
  var likes = document.createElement('span');
  likes.setAttribute('class','likes');
  likes.innerHTML = "Likes: "+ post['likes'];
  postContainer.appendChild(likes);
  
  
  //Create a button for show/hide comments
  var commentsButton = document.createElement('button');
  commentsButton.setAttribute('class','commentsButton');
  commentsButton.innerHTML ='Comments';
  postContainer.appendChild(commentsButton);
  
  
  //Create a div containing comments
  var commentsContainer = document.createElement('div');
  commentsContainer.setAttribute('class','commentsContainer');
  
  var comments = post['comments'];
  for(var index in comments){
    var comment = comments[index];
    //Create a span containing the likes
    var commentItem = document.createElement('span');
    commentItem.setAttribute('class','commentItem');
    commentItem.innerHTML = comment["username"] + " : " + comment['text'] + " " + comment['timestamp'];
    commentsContainer.appendChild(commentItem);
  }
  postContainer.appendChild(commentsContainer);


  //Create a button for reporting
  var reportButton = document.createElement('button');
  reportButton.setAttribute('class','reportButton');
  reportButton.innerHTML ='Report As Spam';
  postContainer.appendChild(reportButton);
  
  
  
  postsContainer.appendChild(postContainer);
}


//Comment hide/show
var commentButtons = document.getElementsByClassName("commentsButton");
for(index in commentButtons){
  var commentButton = commentButtons[index];
  commentButton.onclick = function(){
    this.parentNode.getElementsByClassName("commentsContainer")[0].classList.toggle('expand');
  }
}


//Report button
var reportButtons = document.getElementsByClassName("reportButton");
for(index in reportButtons){
  var reportButton = reportButtons[index];
  reportButton.onclick = function(){
    this.parentNode.classList.add('hide');
  }
}

