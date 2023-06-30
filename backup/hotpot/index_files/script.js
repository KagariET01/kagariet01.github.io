var place = [
  "1%","2%","3%","4%","5%","6%","7%","8%","9%","10%",
  "11%","12%","13%","14%","15%","16%","17%","18%","19%","20%",
  "21%","22%","23%","24%","25%","26%","27%","28%","29%","30%",
  "31%","32%","33%","34%","35%","36%","37%","38%","39%","40%",
  "41%","42%","43%","44%","45%","46%","47%","48%","49%","50%",
  "51%","52%","53%","54%","55%","56%","57%","58%","59%","60%",
  "61%","62%","63%","64%","65%","66%","67%","68%","69%","70%",
  "71%","72%","73%","74%","75%","76%","77%","78%","79%","80%",
  "81%","82%","83%","84%","85%","86%","87%","88%","89%","90%",
  "91%","92%","93%","94%","95%","96%","97%","98%","99%","100%",
  "101%","102%","103%","104%","105%","106%","107%","108%","109%","110%",
  "111%","112%","113%","114%","115%","116%","117%","118%","119%","120%",
  "121%","122%","123%","124%","125%","126%","127%","128%","129%","130%",
];
var items = [
  [-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0],[-1,0,0]//which,now,pass
];
var item_id = [
  "i1","i2","i3","i4","i5","i6","i7","i8","i9","i10","i11","i12","i13","i14","i15","i16","i17","i18","i19","i20","i21","i22","i23","i24","i25"
];
var item_sp_id = [
  "is1","is2","is3","is4","is5","is6","is7","is8","is9","is10","is11","is12","is13","is14","is15","is16","is17","is18","is19","is20","is21","is22","is23","is24","is25"
];
var img_link = [
  "https://media.discordapp.net/attachments/713379026487476235/879214110305304586/1629464926642.png?width=958&height=670",//+1
  "https://media.discordapp.net/attachments/713379026487476235/879214217062920222/1629464704303.png",//+5
  "https://media.discordapp.net/attachments/713379026487476235/879214144136544256/1629465340137.png",//die
  "https://media.discordapp.net/attachments/713379026487476235/879635742559723550/Z.png"//haachamachama
];
var speed = [
  [2,3,1],
  [1,1,5],
  [1,2,-1],
  [1,1,10]
];
var which_item = [
  [23],[0,15],[16,20],[21,22]
];
var hotpot_img = [
  "https://media.discordapp.net/attachments/713379026487476235/879251626290987008/Untitled6.png",
  "https://media.discordapp.net/attachments/713379026487476235/879214069624746094/1629470468549.png?width=433&height=670",
  "https://media.discordapp.net/attachments/713379026487476235/879214002205519933/1629470359067.png?width=529&height=670",
  "https://media.discordapp.net/attachments/713379026487476235/879636009443287050/1629791806883.png?width=644&height=669",
  "https://media.discordapp.net/attachments/713379026487476235/879773944620671016/haachama_scary.png?width=644&height=669"
]
var point=0,p=0,dif=0,m=0,eat=0;
var A_today=0,A_food=0,A_yagoo=0,A_aqua=0,A_watame=0,A_haa=0,A_doki=0;
//冰冰姐,墨西哥粽,YAGOO,洋蔥,羊,哈洽馬,DokiDoki
const a1 = document.createElement("audio");
a1.src = "static/music/music.mp3";
const a3 = document.createElement("audio");
a3.src = "static/music/idai.mp3";
const a5 = document.createElement("audio");
const a6 = document.createElement("audio");
a6.src = "static/music/haachama_scary.mp3";
function main_music(){
  a1.play();
}
function play_music(){
  main_music();
  var the_music = setInterval(
    function(){
      if(p==0){
        clearInterval(the_music);
      }
      else if(m==0&&dif!=-100){
        main_music();
      }
    },
    12000
  );
}
function the_game_start(){
  document.getElementById("ach1").value = 0;
  document.getElementById("ach2").value = 0;
  document.getElementById("ach3").value = 0;
  document.getElementById("ach4").value = 0;
  document.getElementById("ach5").value = 0;
  document.getElementById("ach6").value = 0;
  document.getElementById("ach7").value = 0;
  document.getElementById("ach8").value = 0;
  document.getElementById("ach9").value = 0;
  document.getElementById("ach10").value = 0;
  document.getElementById("ach11").value = 0;
  A_today=0,A_food=0,A_yagoo=0,A_aqua=0,A_watame=0,A_haa=0,A_doki=0;
  eat = 0;
  m=0;
  speed = [[2,3,1],[1,1,5],[1,2,-1],[1,1,10]];
  which_item = [[23],[0,15],[16,20],[21,22]];
  document.getElementById("hotpot").src=hotpot_img[0];
  p = 1;
  play_music();
  point = 0;
  dif = 0;
  document.getElementById("choose").style.display = "none";
  document.getElementById("game").style.opacity = "1";
  var the_game = setInterval(
    function(){
      play();
      if(p==0){
        clearInterval(the_game);
      }
    },
    10
  );
}
function game_over(){
  document.getElementById("WIN").value = parseInt(point);
  a1.pause();
  a3.play();
  p = 0;
  document.getElementById("hotpot").src=hotpot_img[1];
  setTimeout(
    function(){
      document.getElementById("hotpot").src=hotpot_img[2];
    },
    500
  )
  for(var i=0;i<25;i++){
    items[i][0] = -1;
    items[i][1] = 0;
    items[i][2] = 0;
    document.getElementById(item_id[i]).style.display = "none";
  }
  document.getElementById("game").style.opacity = "0.5";
  document.getElementById("hide1").style.display = "none";
  document.getElementById("hide2").style.display = "none";
  document.getElementById("hide3").style.display = "none";
  document.getElementById('big_title').innerHTML = "本次獲得分數：";
  document.getElementById('small_title').innerHTML = point;
  document.getElementById('start_button').innerHTML = "再來一次";
  document.getElementById("choose").style.display = "flex";
  document.getElementById("send_data").style.display = "block";
  //A_today=0,A_food=0,A_yagoo=0,A_aqua=0,A_watame=0,A_haa=0,A_doki=0;
  var A_yes=0,A_str="本次獲得成就（請注意，成就須送出才會記錄）：";
  if(A_today>=200){
    document.getElementById("ach1").value = 1;
    A_str+="<br>冰冰姐殺手";
    A_yes = 1;
  }
  if(A_yagoo>=100){
    document.getElementById("ach2").value = 1;
    A_str+="<br>YAGOO我婆";
    A_yes = 1;
  }
  if(A_watame>=100){
    document.getElementById("ach3").value = 1;
    A_str+="<br>わためは悪くないよねぇ";
    A_yes = 1;
  }
  if(A_aqua>=100){
    document.getElementById("ach4").value = 1;
    A_str+="<br>どうも、湊あくあです";
    A_yes = 1;
  }
  if(A_haa>=3){
    document.getElementById("ach5").value = 1;
    A_str+="<br>はあちゃまちゃま";
    A_yes = 1;
  }
  if(A_doki>=200){
    document.getElementById("ach6").value = 1;
    A_str+="<br>はあと...？";
    A_yes = 1;
  }
  if(point>=500&&A_today==0){
    document.getElementById("ach7").value = 1;
    A_str+="<br>我愛墨西哥粽";
    A_yes = 1;
  }
  if(point>=500&&A_food==0){
    document.getElementById("ach8").value = 1;
    A_str+="<br>我愛冰冰姐";
    A_yes = 1;
  }
  if(point>=500&&A_food==A_today){
    document.getElementById("ach9").value = 1;
    A_str+="<br>我全都要";
    A_yes = 1;
  }
  if(point>=1500&&A_today==0){
    document.getElementById("ach10").value = 1;
    A_str+="<br>墨西哥粽狂熱粉";
    A_yes = 1;
  }
  if(A_food>=200){
    document.getElementById("ach11").value = 1;
    A_str+="<br>我愛墨西哥粽";
    A_yes = 1;
  }
  if(A_yes==1){
    document.getElementById('ach_title').innerHTML = A_str;
    document.getElementById('ach_title').style.display = "block";
  }
  else{
    document.getElementById('ach_title').style.display = "none";
  }
}
function haachama(){
  var haachama = Math.floor(Math.random()*3);
  if(haachama==0 && m==0 && eat==1){
    var where = Math.floor(Math.random()*25);
    if(items[where][0] == -1){
      var ha_which = 3;
      document.getElementById(item_id[where]).src=img_link[ha_which];
      document.getElementById(item_id[where]).style.display = "block";
      items[where][0] = ha_which;//which,now,pass
    }
  }
}
function haachamachama(){
  m = 1;
  dif = -1;
  a1.pause();
  a5.src = "static/music/haachama.mp3";
  a5.play();
  var ha_speed = speed,ha_which_item = which_item,ha_img_link = img_link;
  document.getElementById('diff').innerHTML = "はあちゃまちゃま...？";
  document.getElementById('the_big_title').innerHTML = "はあちゃまcooking";
  document.getElementById("game").style.backgroundImage="url('https://media.discordapp.net/attachments/713379026487476235/879666598997262356/haachama-03-29-2021.png')";
  speed = [[1,1,10],[1,1,10],[1,1,-100],[1,1,10]];
  which_item = [[16],[0,4],[5,9],[10,15]];
  for(var i=0;i<25;i++){
    items[i][0] = -1;
    items[i][1] = 0;
    items[i][2] = 0;
    document.getElementById(item_id[i]).style.display = "none";
  }
  img_link =[
    "https://media.discordapp.net/attachments/713379026487476235/879639273488392212/1629792615913.png?width=670&height=670",
    "https://media.discordapp.net/attachments/713379026487476235/879639273022820362/1629792675561.png?width=670&height=670",
    "https://media.discordapp.net/attachments/713379026487476235/879639273916223508/1629792477828.png",
    "https://media.discordapp.net/attachments/713379026487476235/879635742559723550/Z.png"
  ];
  document.getElementById("hotpot").src=hotpot_img[3];
  setTimeout(
    function(){
      eat=0;
      speed = ha_speed;
      which_item = ha_which_item;
      img_link = ha_img_link;
      document.getElementById("hotpot").src=hotpot_img[0];
      document.getElementById('diff').innerHTML = "使用滑條控制統神，你可以接到多少火鍋料呢？";
      document.getElementById('the_big_title').innerHTML = "統神「接」火鍋";
      document.getElementById("game").style.backgroundImage="url('https://media.discordapp.net/attachments/760358052536123393/878284658981359676/unknown.png?width=1607&height=904')";
      for(var i=0;i<25;i++){
        items[i][0] = -1;
        items[i][1] = 0;
        items[i][2] = 0;
        document.getElementById(item_id[i]).style.display = "none";
      }
      m = 0;
    },
    47000
  )
}
document.onkeydown=function(e){
  var keyNum=window.event ? e.keyCode :e.which;
  if(keyNum==37){
    var now_control_val = document.getElementById("control").value;
    document.getElementById("control").value=parseInt(now_control_val)-1;
  }
  if(keyNum==39){
    var now_control_val = document.getElementById("control").value;
    document.getElementById("control").value=parseInt(now_control_val)+1;
  }
}
function play(){
  if(point<0&&dif==-1&&m==0){
    //scary
    A_doki++;
    speed = [[-1,1,20],[-1,1,20],[-1,1,20],[1,1,10]];
    which_item = [[15],[0,4],[5,9],[10,14]];
    dif = -100;
    document.getElementById('diff').innerHTML = "はあ...まち...";
    document.getElementById('the_big_title').innerHTML = "Doki Doki haachama club";
    document.getElementById("game").style.backgroundImage="url('https://media.discordapp.net/attachments/713379026487476235/879773912458739732/NIGHTMARE.gif?width=1191&height=670')";
    document.getElementById("hotpot").src=hotpot_img[4];
    a1.pause();
    img_link = [
      "https://media.discordapp.net/attachments/713379026487476235/879906227780468766/akai-haato-haachama.gif",//+1
      "https://media.discordapp.net/attachments/713379026487476235/879906227780468766/akai-haato-haachama.gif",//+5
      "https://media.discordapp.net/attachments/713379026487476235/879906227780468766/akai-haato-haachama.gif",//die
      "https://media.discordapp.net/attachments/713379026487476235/879635742559723550/Z.png"//haachamachama
    ];
    a6.play();
    var scary = setInterval(
      function(){
        if(dif!=-100){
          clearInterval(scary);
        }
        else{
          a6.play();
        }
      },
      37000
    );
  }
  if(point>=0&&point<100&&dif<0&&m==0){
    //common
    speed = [[2,3,1],[1,1,5],[1,2,-1],[1,1,10]];
    which_item = [[23],[0,15],[16,20],[21,22]];
    dif = 0;
    a6.pause();
    document.getElementById('diff').innerHTML = "使用滑條控制統神，你可以接到多少火鍋料呢？";
    document.getElementById('the_big_title').innerHTML = "統神「接」火鍋";
    document.getElementById("game").style.backgroundImage="url('https://media.discordapp.net/attachments/760358052536123393/878284658981359676/unknown.png?width=1607&height=904')";
    document.getElementById("hotpot").src=hotpot_img[0];
    for(var i=0;i<25;i++){
      items[i][0] = -1;
      items[i][1] = 0;
      items[i][2] = 0;
      document.getElementById(item_id[i]).style.display = "none";
    }
    img_link = [
      "https://media.discordapp.net/attachments/713379026487476235/879214110305304586/1629464926642.png?width=958&height=670",//+1
      "https://media.discordapp.net/attachments/713379026487476235/879214217062920222/1629464704303.png",//+5
      "https://media.discordapp.net/attachments/713379026487476235/879214144136544256/1629465340137.png",//die
      "https://media.discordapp.net/attachments/713379026487476235/879635742559723550/Z.png"//haachamachama
    ];
  }
  if(point>=100&&dif<=0&&m==0){
    //speed_up ver 100
    speed = [[1,1,1],[3,2,5],[2,3,-1],[1,1,10]];
    which_item = [[23],[0,15],[16,20],[21,22]];
    dif = 1;
    haachama();
  }
  if(point>=500&&dif<=1&&m==0){
    //more ver 500
    speed = [[1,1,1],[3,2,5],[2,3,-1],[1,1,10]];
    which_item = [[21],[0,10],[11,15],[16,20]];
    dif = 2;
    haachama();
  }
  if(point>=1000&&dif<=2&&m==0){
    //All +5 ver 1000
    speed = [[1,1,1],[2,1,5],[2,3,-1],[1,1,10]];
    which_item = [[11],[-1,-1],[0,10],[-1,-1]];
    dif = 3;
    haachama();
  }
  if(point>=1200&&dif<=3&&m==0){
    //+5 and die ver 1200
    speed = [[1,1,1],[2,1,5],[1,1,-1],[1,1,10]];
    which_item = [[3],[-1,-1],[0,1],[2,2]];
    dif = 4;
    haachama();
  }
  if(point>=1500&&dif<=4&&m==0){
    //all the same speed ver 1500
    speed = [[3,2,1],[3,2,5],[3,2,-1],[1,1,10]];
    which_item = [[16],[0,5],[6,10],[11,15]];
    dif = 5;
    haachama();
  }
  if(point>=2000&&dif<=5&&m==0){
    //can u still alive ver 2000
    speed = [[1,1,1],[1,1,5],[1,1,-1],[1,1,10]];
    which_item = [[16],[0,2],[3,5],[6,15]];
    dif = 6;
    haachama();
  }
  if(point>=2500&&dif<=6&&m==0){
    //explosion ver 2500
    speed = [[3,2,1],[2,1,5],[3,2,-1],[1,1,10]];
    which_item = [[16],[0,5],[6,10],[11,15]];
    dif = 7;
    haachama();
  }
  if(point>=3000&&dif<=7&&m==0){
    //computer? ver 3000
    speed = [[2,1,1],[2,1,5],[3,2,-1],[1,1,10]];
    which_item = [[16],[0,5],[6,10],[11,15]];
    dif = 8;
    haachama();
  }
  if(point>=3500&&dif<=8&&m==0){
    //computer? ver 3500
    speed = [[2,1,1],[2,1,5],[2,1,-1],[1,1,10]];
    which_item = [[21],[0,5],[6,10],[11,20]];
    haachama();
    dif=9;
  }
  if(point>=4000&&point>=((dif+1)*500)-1000&&dif<=((point+1000)/500)&&m==0){//4000
    speed = [[2,1,1],[2,1,5],[2,1,-1],[1,1,10]];
    which_item = [[21],[0,5],[6,10],[11,20]];
    haachama();
    dif = (point+1000)/500;
  }
  document.getElementById('score').innerHTML = point;
  //move
  var control = document.getElementById('control').value;
  document.getElementById("left").style.width=place[parseInt(control)-4];
  //upgrade
  for(var i=0;i<25;i++){
    if(items[i][0]!=-1&&dif!=-100){
      if(items[i][1]==0){
        document.getElementById(item_id[i]).style.display = "block";
      }
      if(items[i][1]<100){
        var j = items[i][0];
        if(items[i][2]+1>=speed[j][1]){
          var add = speed[j][0];
          items[i][2] = 0;
          items[i][1] += add;
          var now_p=items[i][1];
          document.getElementById(item_sp_id[i]).style.height=place[now_p-1];
        }
        else{
          items[i][2] += 1;
        }
      }
      if(items[i][1]>=98&&items[i][1]<=100){
        var con = parseInt(control);
        if((con-4<=(i*4)+1&&(i+1)*4<=con+4)||((i*4)+1<=con-4&&con-4<=(i+1)*4)||((i*4)+1<=con+4&&con+4<=(i+1)*4)){
          if(speed[items[i][0]][2]>0||speed[items[i][0]][2]==-100){
            if(items[i][0]==1&&m==0){
              const a2 = document.createElement("audio");
              a2.src = "static/music/only_today.mp3";
              A_today++;
              a2.play();
              point+=speed[items[i][0]][2];
              eat = 1;
            }
            else if(items[i][0]==0&&m==0){
              const a4 = document.createElement("audio");
              a4.src = "static/music/touch.mp3";
              A_food++;
              a4.play();
              point+=speed[items[i][0]][2];
              eat = 1;
            }
            else if(items[i][0]==3&&m==0){
              A_haa++;
              haachamachama();
            }
            else if(m==1){
              point+=speed[items[i][0]][2];
              if(items[i][0]==0){
                A_watame++;
              }
              else if(items[i][0]==1){
                A_aqua++;
              }
              else if(items[i][0]==2){
                A_yagoo++;
              }
            }
          }
          else if(m==0){
            game_over();
          }
          document.getElementById(item_sp_id[i]).style.height="0%";
          items[i][0] = -1;
          items[i][1] = 0;
          items[i][2] = 0;
          document.getElementById(item_id[i]).style.display = "none";
        }
      }
      if(items[i][1]>=100){
        document.getElementById(item_sp_id[i]).style.height="0%";
        items[i][0] = -1;
        items[i][1] = 0;
        items[i][2] = 0;
        document.getElementById(item_id[i]).style.display = "none";
      }
    }
    else if(dif==-100){
      if(items[i][1]==120){
        document.getElementById(item_id[i]).style.display = "block";
      }
      if(items[i][1]>0){
        var j = items[i][0];
        if(items[i][2]+1>=speed[j][1]){
          var add = speed[j][0];
          items[i][2] = 0;
          items[i][1] += add;
          var now_p=items[i][1];
          document.getElementById(item_sp_id[i]).style.height=place[now_p-1];
        }
        else{
          items[i][2] += 1;
        }
      }
      if(items[i][1]<=102&&items[i][1]>=98){
        var con = parseInt(control);
        if((con-4<=(i*4)+1&&(i+1)*4<=con+4)||((i*4)+1<=con-4&&con-4<=(i+1)*4)||((i*4)+1<=con+4&&con+4<=(i+1)*4)){
          if(speed[items[i][0]][2]>0||speed[items[i][0]][2]==-100){
            point+=speed[items[i][0]][2];
            eat = 1;
          }
          document.getElementById(item_sp_id[i]).style.height="0%";
          items[i][0] = -1;
          items[i][1] = 0;
          items[i][2] = 0;
          document.getElementById(item_id[i]).style.display = "none";
        }
      }
      if(items[i][1]<=0){
        document.getElementById(item_sp_id[i]).style.height="0%";
        items[i][0] = -1;
        items[i][1] = 0;
        items[i][2] = 0;
        document.getElementById(item_id[i]).style.display = "none";
      }
    }
  }
  // new item
  var new_item = Math.floor(Math.random()*15);
  if(new_item==0&&dif!=-100){
    var where = Math.floor(Math.random()*25);
    if(items[where][0] == -1){
      var which = Math.floor(Math.random()*which_item[0][0]);
      for(var i=0;i<which_item.length-1;i++){
        if(which_item[i+1][0]<=which&&which<=which_item[i+1][1]){
          which = i;
          break;
        }
      }
      items[where][0] = which;
      document.getElementById(item_id[where]).src=img_link[which];
      //which,now,pass
    }
  }
  else if(new_item==0&&dif==-100){
    var where = Math.floor(Math.random()*25);
    if(items[where][0] == -1){
      var which = Math.floor(Math.random()*which_item[0][0]);
      for(var i=0;i<which_item.length-1;i++){
        if(which_item[i+1][0]<=which&&which<=which_item[i+1][1]){
          which = i;
          break;
        }
      }
      items[where][0] = which;
      items[where][1] = 120;
      document.getElementById(item_id[where]).src=img_link[which];
      //which,now,pass
    }
  }
}
//100fps/sec
//+1) 1.6sec  80/160 = 1/2
//+5) 0.4sec  80/40 = 2/1
//die 0.8sec  80/80 = 1/1
//aver 5item per sec
