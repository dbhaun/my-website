 var sketchProc = function(processingInstance) {
     with (processingInstance) {
        size(400, 400); 
        frameRate(30);
        
        // ProgramCodeGoesHere
        var heroX = 54;
        var heroY = 370;  
       var enemySpeed = 4;
    var toxicSpeed = 5;     
var lives = 5;
var dead = false;
var numEnemies = 10;
var points = 0;
var endpoints = 0;         
var numToxic = 2;
var level = 0;        
var Toxic = function(x,y){
    this.x = x;
    this.y = y;
};
Toxic.prototype.draw = function() {
    fill(255,0,0);
    ellipse(this.x,this.y,70,70);
}; 
Toxic.prototype.onCollide = function(){
    this.y = -30;
    this.x = random(30,360);
};
Toxic.prototype.collisionCheck = function(hero){
    if(dist(hero.x, hero.y, this.x, this.y) < 40){
        this.onCollide();
        hero.onToxic();

    }
};         
var Enemy = function(x, y){
       this.x = x;
       this.y = y;
    
};

Enemy.prototype.draw = function() {
     fill(0, 0, 255);
     ellipse(this.x, this.y, 60, 60);
     
};

Enemy.prototype.onCollide = function(){
    this.y = -30;
    this.x = random(30,360);
};

Enemy.prototype.collisionCheck = function(hero){
    if(dist(hero.x, hero.y, this.x, this.y) < 40){
        this.onCollide();
        hero.onEnemy();

    }
};
var Hero = function(x, y){
       this.x = x;
       this.y = y;
    
};
         
var hero = new Hero(heroX, heroY);
         
 var keyPressed = function(){
    if(hero.x > 29 && hero.x <371) {
			switch(keyCode) {
				case RIGHT:
					hero.x+=8;
					break;
				case LEFT:
					hero.x-=8;
					break;
				
            }
				
            }
};              
Hero.prototype.draw = function() {
     fill(0, 255, 0);
     ellipse(this.x, this.y, 60, 60);
     
};  
Hero.prototype.onEnemy = function(){
    switch (level) {
        case 1 : lives > 0 ? points++ : points = points;
            break;
        case 2 : lives > 0 ? points+=2 : points = points;  
            break;
        case 3 : lives > 0 ? points+=3 : points = points;
            break;
    }
   
   /* if(lives === 0){
        
    }*/
}; 
Hero.prototype.onToxic = function(){
    lives--;
    if(lives === 0){
        
    }
};               
   var Score = function(x, y){
    this.x = x;
    this.y = y;
    
};
var score = new Score(40,40);
Score.prototype.draw = function() {
    fill(255, 255, 255);
    textSize(22);
    text("Lives: " + lives, 40, 40);
    text("Score: " + points, 260, 40);
};
var drawDeathScene = function(){
    background(0, 0, 0);
    textSize(42);
    text("You LOSE!!!!!", 90,100);
    textSize(20);
    text("click to play again", 135 ,165);
    text("You Scored " + endpoints, 135,265);
    
};

var mouseClicked = function(){
    if(dead === true){
        lives = 5;
        points = 0;
        hero.x = 54;
        dead = false;
    }
    if (level == 0){
        level = 1;
    }
};         
    var enemies = [];
    for(var i = 0; i < numEnemies; i++){
        enemies.push(new Enemy(random(-30,430), i*40));
    } 
    var toxics = [];
    for(var h = 0; h < numToxic; h++){
        toxics.push(new Toxic(random(-30,430), h*40));
    } 
        var draw = function () {
        noStroke();
        if (level == 0 ){
          enemySpeed = 0;
          toxicSpeed = 0;
        }    
        else if (points < 20){
            enemySpeed = 4;
            toxicSpeed = 5;
            level = 1;
        }
        else if(points >= 20 && points < 60) {
            enemySpeed = 6;
            toxicSpeed = 7;
            level = 2;
        }
        else if(points >= 60) {
            enemySpeed = 7;
            toxicSpeed = 8;
            level = 3;
        }    
        background(0,0,0);
        for(var j = 0; j < enemies.length; j++){
       
        enemies[j].draw();
        enemies[j].y += enemySpeed;
        if(enemies[j].y > 430){
            enemies[j].y -= 470;
            enemies[j].x = random(30, 370);
        }
            enemies[j].collisionCheck(hero);
        }
        for(var k = 0; k < toxics.length; k++){
       
        toxics[k].draw();
        toxics[k].y += toxicSpeed;
        if(toxics[k].y > 430){
            toxics[k].y -= 470;
           lives > 0 ? points++ : points = points;
            toxics[k].x = random(30, 370);
        }
           toxics[k].collisionCheck(hero);
        }    
        score.draw();
        hero.draw();  
        if(lives <= 0){
            endpoints = points;
       drawDeathScene();
       dead = true;
            
   }


     


		}
		
        
		}
        
	};
     
    // Get the canvas that Processing-js will use
    var canvas = document.getElementById("mycanvas"); 
    // Pass the function sketchProc (defined in myCode.js) to Processing's constructor.
    var processingInstance = new Processing(canvas, sketchProc); 
  