<template>
  <div class="form">
          <div class="holder" id="hold">   
              <input type="email" class="browser-default" id="name" @focus.stop.prevent='isFocused(nameObj)' @blur="isBlur(nameObj)" v-model.lazy:value='nameObj.name' autocomplete="off">
              <label for="name" :class="nameObj.nameClass">Email</label>
          </div>
          <div class="holder">            
              <input type="password" id="inputText" class="browser-default" @focus='[isFocused(pwObj),enterClass=["enter","opacity"]]' @blur="isBlur(pwObj)" v-model.lazy:value='pwObj.name' v-on:keyup.enter="click">
              <label for="inputText" :class="pwObj.nameClass" >Contraseña</label>
              <div class="earser" :style="{left:left}">
                   <div class="pacman"></div>
                   <div class="dotsBlocker"></div>
              </div> 
          </div>      
        <svg  preserveAspectRatio="none">   
            <g :class="pwObj.lineClass" >
                <line x1="160" y1="150" :x2="holdWidth" y2="150" ></line>
                <path  d="m 0 150 Q 50 150 160 150" fill="none">
                   <animate 
                      attributeName="d" 
                      from = "M 0 150 Q 50 150 160 150"
                      to =   "M 0 150 Q 50 150 160 150"
                      dur="500ms" 
                      repeatCount="1"
                      keyTimes="0; 0.4; 0.6; 0.8;0.9; 1"
                      values= "M 0 150 Q 50 150 160 150;
                               M 0 150 Q 50 160 160 150;
                               M 0 150 Q 50 80 160 150;
                               M 0 150 Q 50 160 160 150;
                               M 0 150 Q 50 140 160 150;
                               M 0 150 Q 50 150 160 150;"
                      begin="start"
                      id="nameLineA"
                   />
                </path>
            </g>
            <g :class="nameObj.lineClass">
                <line x1="160" y1="50" :x2="holdWidth" y2="50" ></line>
                <path  d="M 0 50 Q 110 50 160 50" fill="none">
                  <animate 
                    attributeName="d" 
                    from = "M 0 50 Q 50 10 160 50"
                    to =   "M 0 50 Q 50 50 160 50"
                    dur="500ms" 
                    repeatCount="1" 
                    keyTimes="0; 0.4; 0.6; 0.8;0.9; 1"
                    values= "M 0 50 Q 50 50 160 50;
                             M 0 50 Q 50 60 160 50;
                             M 0 50 Q 50 50 160 50;
                             M 0 50 Q 50 10 160 50;
                             M 0 50 Q 50 60 160 50;
                             M 0 50 Q 50 50 160 50;"
                    begin="start"
                    id="nameLineB"
                  />
                </path>
            </g>
        </svg>
       <div :class="enterClass" @click="click">Enter</div>
  </div>
</template>
<script>
  export default {
    data() {
      return {
        nameObj:{
          name:"",
          nameClass:"",
          lineClass:"lines",
          lineObj:"nameLineB"
        },
        pwObj:{
          name:"",
          nameClass:"",
          lineClass:"lines",
          lineObj:"nameLineA"
        },
        left:"-120%",
        enterClass:["enter"],
        holdWidth: 300
      }
    },
    methods: {
      click: function(){  
          var vm=this;
          vm.left=5+"%";
          axios.post(vm.$root.apiMap.login,{
            email: vm.nameObj.name,
            password: vm.pwObj.name
          })
          .then(function(response){
            vm.pwObj.name="";
            vm.nameObj.name="";
            vm.resetPacman();
            vm.getUser();
          })
          .catch(function(error){
            vm.resetPacman();
            vm.isFocused(vm.pwObj);
          });
      },
      resetPacman: function(){
        let vm = this
        vm.left=-120+"%";
        vm.pwObj.nameClass=[];
        vm.pwObj.lineClass="lines";
        vm.nameObj.nameClass=[];
        vm.enterClass=["enter"];
      },
      isFocused:function(obj){
          obj.nameClass=["focused","filled"]; 
          obj.lineClass=["lines","lineFilled"];
          var lineObj = document.getElementById(obj.lineObj);
          lineObj.beginElement();
      },
      isBlur:function(obj){
          if (obj.name==""){  
              obj.nameClass=[];
              obj.lineClass="lines";
          }else{
              obj.nameClass=["filled"];
          }
          obj.lineClass="lines";
          this.enterClass=["enter"];
      },
      setWidth: function(){
        this.holdWidth = document.getElementById("hold").offsetWidth
      }
    },
    mounted() {
      window.addEventListener("resize", this.setWidth);
      this.setWidth()
    }
  }
</script>

<style lang="scss" scoped>
$yellow: #F0D022;
$gry-bg: #111;
$light-gry: #262626;
$light-gry-bg: #121212;

@mixin tranision {
     transition: (all 400ms cubic-bezier(0, 0.4, 0.6, 1) 150ms);
     -webkit-transition: (all 400ms cubic-bezier(0, 0.4, 0.8, 1) 150ms);
}
  svg{ 
  position: relative;
  z-index: 10; 
  pointer-events: none;
  width:85%; height:400px; 
  left:24px; top:-160px;
}

label{
  @include tranision;
  transform:(translateY(0px));
  display: block;
  width: 90%;height: 40px;
  line-height: 40px;    
  cursor: text;
  font-size: 20px;
  color: $light-gry;
  z-index: 1;
  &.filled { transform:(translateY(-20px));color:$light-gry-bg;}
  &.focused { color: $yellow;
              transform:(translateY(-30px)); 
              z-index: 1;
            }
}

input{
  @include tranision;
  width: 90%;height:40px;
  font-size:20px;
  background-color: $light-gry-bg;
  text-align:left;
  border:0px solid $light-gry-bg;
  position: relative;
  z-index: 0;
  color:$light-gry;
  transform:(translateX(0px)translateY(42px)); 
}

input:focus{
  outline: 0px;
  color:$yellow; 
}

.lines{
    @include tranision;
    stroke-width:2;
    stroke:$light-gry;
}

.lineGry{ stroke:$light-gry;}

.lineFilled{ stroke:$yellow;}

.holder{
  width: 85%;height: 80px;
  margin: 20px auto;
  background-color: $light-gry-bg;
  overflow: hidden;
  z-index: 0;
}

.form{ 
  width: 400px;height: 300px;
  background-color: $light-gry-bg;
  border:1px solid #0b0b0b;
  margin: 50px auto;
  z-index: 0;    
}

//pacman stuff
.earser{
    position: relative;
    float: left;
    width: 90%; height: 30px;
    background: $light-gry-bg;
    transition:4s all;
    left:-120%;top:-34px;
    z-index: 1;  
}
 .enter{
  @include tranision;
   width: 100px; height: 48px;
   color:$light-gry;
   border: 2px solid $light-gry;
   border-radius: 10px;
   line-height: 48px;
   text-align: center;
   position: relative;
   top:-148%; left:110%;
   opacity:0;
   z-index: 200;
 }
 .opacity{
   top:-164%;
   opacity:1;
 }
.pacman{
  position: relative;
  left:92%; top:-10px;
  width: 50px;height: 25px;
  background-color: $yellow;
  border-radius:50px 50px 0px 0px;
  animation: pacmanMouthB 0.2s linear infinite;
  transform-origin:center bottom;
  z-index: 2;
}

.pacman:after{
  content:"";
  position: absolute;
  top:25px;
  width: 50px;height: 25px;
  background-color: $yellow;
  border-radius:0px 0px 50px 50px;
  animation: pacmanMouthA  0.2s linear infinite;
  transform-origin:center top;
  z-index: 2;
}

.dotsBlocker{
  width: 150%;height: 30px;
  background-color: $light-gry-bg;
  position: relative;
  left: -87%;
  top:-25px;
  transition:3s all;
  z-index: 1;
}

@keyframes pacmanMouthA
{0% { transform: rotate(60deg)scale(1);}
50% { transform: rotate(0deg)scale(1);}
100% {transform: rotate(60deg)scale(1);}
}

@keyframes pacmanMouthB
{0% { transform: rotate(-30deg)scale(0.5);}
50% { transform: rotate(0deg)scale(0.5);}
100% {transform: rotate(-30deg)scale(0.5);}
}

</style>
