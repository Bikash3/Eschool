<template>
    <aside class="meta">
        <h1>{{heading}}</h1>
        <p v-html="para1"></p>
        <p v-html="para2"></p>
        <p>{{para3}}</p>
    </aside>
</template>

<script>
export default {
    data() {
        return {
            heading: 'Lorem ipsum dolor sit amet',
            para1: 'Lorem ipsum dolor sit amet<br />Lorem ipsum dolor sit amet <a href="#">Lorem ipsum dolor sit amet</a>',
            para2: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque libero in viverra feugiat. <strong>Login</strong> to see the effect.',
            para3: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        }
    }
}
</script>


<style scoped>
@import url(https://fonts.googleapis.com/css?family=Lato:400,300);
* {
  -webkit-transition: all 0.6s cubic-bezier(0.77, 0, 0.175, 1);
  transition: all 0.6s cubic-bezier(0.77, 0, 0.175, 1);
}

#login {
  width: 50vh;
  height: 90vh;
  padding: 6vh;
  background: white;
  box-shadow: 0 0 2rem rgba(0, 0, 0, 0.1);
}

.login-view {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.login-header {
  padding: 6vh;
}
.login-header, .login-header > * {
  font-size: 4.8vh;
  margin: 0;
  font-weight: 300;
}
.login-header > h1 {
  font-size: 4.8vh;
  font-weight: 400;
  margin-bottom: 4.8vh;
}
.login-header > h2 {
  font-size: 3vh;
}

.login-subheading {
  color: rgba(0, 0, 0, 0.45);
}

.login-register {
  position: absolute;
  bottom: 0;
  height: 10vh;
  line-height: 10vh;
  padding: 0 6vh;
  color: rgba(0, 0, 0, 0.45);
}
.login-register > a {
  font-weight: 400;
}

input {
  font-size: 2.5vh;
  width: calc(100% - 13vh);
  height: 7.5vh;
  margin-bottom: 2vh;
  background: transparent;
  position: absolute;
  top: 0;
  left: 6.5vh;
  z-index: 2;
  border: none;
  box-shadow: inset 0 -0.5vh rgba(0, 0, 0, 0.1);
}
input:focus {
  outline: none;
  box-shadow: inset 0 -0.5vh transparent;
}
input[type="email"] {
  top: 58%;
}
input[type="password"] {
  top: calc(58% + 7.5vh);
}

input[type="email"]:valid ~ * .st1 {
  -webkit-transition-timing-function: ease-in-out;
          transition-timing-function: ease-in-out;
  stroke-dasharray: 50, 153;
  stroke-dashoffset: 25;
}

input[type="password"]:focus ~ * .st0,
input[type="password"]:valid ~ * .st0,
.login-button:focus ~ * .st0 {
  stroke-dasharray: 210, 900;
  stroke-dashoffset: -305;
}

input[type="email"]:focus ~ * .st0 {
  stroke-dasharray: 210, 900;
  stroke-dashoffset: 0;
}

input:not(:valid) ~ .login-button {
  /*pointer-events: none;*/
  opacity: 0.6;
}

.login-button {
  color: #000000;
    font-size: 3vh;
    padding: .7vh 7vh;
    position: absolute;
    bottom: 10vh;
    /*bottom: -27vh;*/
    font-weight: 500;
    box-shadow: none;
    border: 1px solid #000;
    background: transparent;
    /* text-transform: lowercase; */
    left: 6.5vh;
}
.login-button:focus {
  outline: none;
}

@-webkit-keyframes button-press {
  from, 20% {
    opacity: 1;
  }
  10% {
    opacity: 0.4;
  }
  40%, to {
    opacity: 0;
  }
}

@keyframes button-press {
  from, 20% {
    opacity: 1;
  }
  10% {
    opacity: 0.4;
  }
  40%, to {
    opacity: 0;
  }
}
@-webkit-keyframes pulse {
  from, to {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  50% {
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
}

@keyframes pulse {
  from, to {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  50% {
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
}
@-webkit-keyframes disloginear {
  to {
    opacity: 0;
  }
}
@keyframes disloginear {
  to {
    opacity: 0;
  }
}
@-webkit-keyframes loginear {
  to {
    opacity: 1;
  }
}
@keyframes loginear {
  to {
    opacity: 1;
  }
}
.login-bar {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
          flex-direction: row;
  -webkit-box-pack: justify;
          justify-content: space-between;
  opacity: 0;
}

.login-item {
  flex-basis: 50%;
  -webkit-box-flex: 0;
          flex-grow: 0;
  flex-shrink: 0;
  border: 1px solid transparent;
  padding: 2vh 4vh;
  padding-bottom: 0;
}
.login-item > *:not(.login-graphic) {
  -webkit-transform: translateY(1rem);
          transform: translateY(1rem);
}
.login-item:nth-child(1) .login-graphic {
  -webkit-transform: translateX(17vh) translateY(5vh);
          transform: translateX(17vh) translateY(5vh);
}
.login-item:nth-child(2) .login-graphic {
  -webkit-transform: translateX(-4vh) translateY(4vh);
          transform: translateX(-4vh) translateY(4vh);
}
.login-item:nth-child(3) .login-graphic {
  -webkit-transform: translateX(6vh) translateY(-7vh);
          transform: translateX(6vh) translateY(-7vh);
}
.login-item:nth-child(4) .login-graphic {
  -webkit-transform: translateY(-8vh) translateX(-4vh);
          transform: translateY(-8vh) translateX(-4vh);
}

.login-graphic {
  -webkit-transition: opacity 0.6s 4.35s cubic-bezier(0.77, 0, 0.175, 1), -webkit-transform 1.2s 3.75s cubic-bezier(0.77, 0, 0.175, 1);
  transition: opacity 0.6s 4.35s cubic-bezier(0.77, 0, 0.175, 1), -webkit-transform 1.2s 3.75s cubic-bezier(0.77, 0, 0.175, 1);
  transition: transform 1.2s 3.75s cubic-bezier(0.77, 0, 0.175, 1), opacity 0.6s 4.35s cubic-bezier(0.77, 0, 0.175, 1);
  transition: transform 1.2s 3.75s cubic-bezier(0.77, 0, 0.175, 1), opacity 0.6s 4.35s cubic-bezier(0.77, 0, 0.175, 1), -webkit-transform 1.2s 3.75s cubic-bezier(0.77, 0, 0.175, 1);
  margin-top: 1rem;
  opacity: 0;
}

.login-data {
  font-size: 2rem;
}

.login-unit {
  font-size: 1rem;
  color: rgba(0, 0, 0, 0.45);
}

.login-label {
  font-size: 0.8rem;
  color: rgba(0, 0, 0, 0.45);
}

.login-menu-icon {
  width: 1.5rem;
  height: 2px;
  background: #D0DFF0;
  margin-top: 0.5rem;
}
.login-menu-icon:before, .login-menu-icon:after {
  content: '';
  display: block;
  position: absolute;
  width: 1rem;
  height: 100%;
  background: #D0DFF0;
}
.login-menu-icon:before {
  top: -0.5rem;
  right: 0.1rem;
}
.login-menu-icon:after {
  top: 0.5rem;
  left: 0.1rem;
}

.login-avatar {
  width: 2.5rem;
  height: 2.5rem;
  border-radius: 1.25rem;
}

.login-tag {
  font-size: 0.8rem;
  color: rgba(0, 0, 0, 0.45);
}
.login-tag + .login-tag {
  margin-left: 1rem;
}
.login-tag:before {
  content: '';
  display: inline-block;
  margin-right: 0.5rem;
  height: 0.5rem;
  width: 0.5rem;
  border-radius: 50%;
  background: #D0DFF0;
}
.login-tag.-active:before {
  background: #0F9EDE;
}

.login-body {
  font-family: Lato, sans-serif;
  font-weight: 300;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
          flex-direction: row;
  justify-content: space-around;
  -webkit-box-align: center;
          align-items: center;
 background: url(/images/bg.jpg) no-repeat;
    background-size: cover;
  }

.st0, .st1, .svg-loader-segment {
  fill: none;
  stroke: #0F9EDE;
  stroke-width: 0.5vh;
  stroke-alignment: inside;
  opacity: 1;
  -webkit-transition: all 0.6s cubic-bezier(0.77, 0, 0.175, 1);
  transition: all 0.6s cubic-bezier(0.77, 0, 0.175, 1);
}

.svg-loader {
  opacity: 0;
}

.st0 {
  stroke-dasharray: 0, 900;
  stroke-dashoffset: 0;
}

.st1 {
  -webkit-transition-delay: 0.3s;
          transition-delay: 0.3s;
  stroke-dasharray: 50, 153;
  stroke-dashoffset: -153;
}

.svg-loader-segment {
  -webkit-transition: opacity 0.85s cubic-bezier(0.77, 0, 0.175, 1), stroke 0.85s cubic-bezier(0.77, 0, 0.175, 1), -webkit-transform 1.2s cubic-bezier(0.77, 0, 0.175, 1);
  transition: opacity 0.85s cubic-bezier(0.77, 0, 0.175, 1), stroke 0.85s cubic-bezier(0.77, 0, 0.175, 1), -webkit-transform 1.2s cubic-bezier(0.77, 0, 0.175, 1);
  transition: transform 1.2s cubic-bezier(0.77, 0, 0.175, 1), opacity 0.85s cubic-bezier(0.77, 0, 0.175, 1), stroke 0.85s cubic-bezier(0.77, 0, 0.175, 1);
  transition: transform 1.2s cubic-bezier(0.77, 0, 0.175, 1), opacity 0.85s cubic-bezier(0.77, 0, 0.175, 1), stroke 0.85s cubic-bezier(0.77, 0, 0.175, 1), -webkit-transform 1.2s cubic-bezier(0.77, 0, 0.175, 1);
}

#svg-lines {
  position: absolute;
  top: 45%;
  left: 0;
  width: 100%;
  z-index: 0;
  overflow: visible;
  -webkit-transform-origin: center 4vh;
          transform-origin: center 4vh;
}

.svg-data {
  fill: none;
  stroke-width: 0.5vh;
}
.svg-data.-temp {
  stroke: #F4814B;
  stroke-dasharray: 20, 118;
}
.svg-data.-cal {
  stroke: #08B5CF;
  stroke-dasharray: 20, 113;
}
.svg-data.-steps-bg {
  stroke: #E0E1E0;
  stroke-dasharray: 40, 100;
  stroke-dashoffset: -60;
}
.svg-data.-steps {
  stroke: #0F9EDE;
  stroke-dasharray: 20, 73;
  stroke-dashoffset: -53;
}
.svg-data.-heart {
  stroke: #9965AA;
  stroke-dasharray: 50, 200;
  stroke-dashoffset: -150;
}

.svg-activity-fill {
  fill: #C4E4F8;
}

.svg-activity-line {
  fill: none;
  stroke: #65BCEA;
  stroke-miterlimit: 10;
  stroke-width: 0.25vh;
}

.svg-activity-avg, .svg-activity-indicator {
  fill: none;
  stroke: #D0DFF0;
  stroke-width: 0.25vh;
  mix-blend-mode: multiply;
}

.svg-activity-fill, .svg-activity-line {
  -webkit-transform: translateY(10vh);
          transform: translateY(10vh);
  opacity: 0;
}

html, body {
  font-size: 2.5vh;
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}

.meta {
    flex-basis: calc(90% - 50vh);
    background: rgba(2, 2, 2, 0.58);
    padding: 70px;
    height: 50vh;
    margin-right: 10vh;
}
.meta > * {
  -webkit-transition: none !important;
  transition: none !important;
}
.meta > h1 {
  font-weight: 300;
  font-size: 32px;
  color: #fff;
}
.meta > p {
  line-height: 1.3;
  font-size: 16px;
  color: #fff;
}
.meta a {
  color: #fff;
}
.meta a:hover {
  color: white;
}
@media (max-width: 750px) {
  .meta {
    display: none;
  }
}

.route {
  display: none;
}

*, *:before, *:after {
  box-sizing: border-box;
  position: relative;
}

</style>