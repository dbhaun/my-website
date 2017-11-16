var heroX = mouseX;
var heroY = mouseY;
var enemySpeed = 4;
var lives = 5;
var dead = false;
var numEnemies = 18;
var points = 0;

var Enemy = function(x, y){
       this.x = x;
       this.y = y;
    
};

Enemy.prototype.draw = function() {
     fill(209, 62, 209);
     ellipse(this.x, this.y, 60, 60);
     
};

Enemy.prototype.onCollide = function(){
    this.y = -30;
    this.x = random(30,360);
};

Enemy.prototype.collisionCheck = function(hero){
    if(dist(mouseX, mouseY, this.x, this.y) < 40){
        this.onCollide();
        hero.onCollide();
    }
};

var Hero = function(x,y){
    this.x = heroX;
    this.y = heroY;
    
};

Hero.prototype.onCollide = function(){
    lives--;
    if(lives === 0){
        
    }
};
Hero.prototype.draw = function() {
    fill(20, 142, 163);
    ellipse(mouseX,mouseY,20,20);
};

var Score = function(x, y){
    this.x = x;
    this.y = y;
    
};

Score.prototype.draw = function() {
    fill(0, 0, 0);
    textSize(22);
    text("Lives: " + lives, 40, 40);
    text("Score: " + points, 260, 40);
};

var drawDeathScene = function(){
    background(0, 0, 0);
    textSize(42);
    text("You LOSE!!!!!", 90,200);
    textSize(20);
    text("click to play again", 135 ,265);
    points = 0;
    
};

var mouseClicked = function(){
    if(dead === true){
        lives = 5;
        dead = false;
    }
};
var enemy = new Enemy(200,200);
var hero = new Hero(heroX, heroY);
var score = new Score(40,40);

var enemies = [];
 for(var i = 0; i < numEnemies; i++){
        enemies.push(new Enemy(random(-30,430), i*40));
    }
    
var draw = function() {
    background(197, 235, 207);
    for(var j = 0; j < enemies.length; j++){
       
        enemies[j].draw();
        enemies[j].y += enemySpeed;
        if(enemies[j].y > 430){
            points++;
            enemies[j].y -= 470;
            enemies[j].x = random(30, 370);
        }
        enemies[j].collisionCheck(hero); 
    }
    score.draw();
    hero.draw();
   if(lives <= 0){
       drawDeathScene();
       dead = true;
   }
};
var canvas = document.getElementById("mycanvas"); 
    // Pass the function sketchProc (defined in myCode.js) to Processing's constructor.
    var processingInstance = new Processing(canvas, sketchProc);