(("undefined"!=typeof self?self:this).webpackJsonp=("undefined"!=typeof self?self:this).webpackJsonp||[]).push([[5],{1159:function(e,t,n){"use strict";var o=n(0),a=n(8),r=n.n(a),c=n(203);var i=Object(c.a)(n(2104),"zoom"),u=Object(c.a)(n(2105),"zoom"),s=Object(c.a)(n(2106),"zoom"),l=Object(c.a)(n(2107),"zoom"),m=Object(c.a)(n(2108),"zoom"),d=Object(c.a)(n(2109),"zoom"),p=Object(c.a)(n(2110),"zoom"),h=Object(c.a)(n(2111),"zoom"),f=Object(c.a)(n(2112),"zoom"),_=Object(c.a)(n(2113),"zoom"),v=function(e){var t=e.number,n=function(e,t){if(null==e)return{};var n,o,a={},r=Object.keys(e);for(o=0;o<r.length;o++)n=r[o],t.indexOf(n)>=0||(a[n]=e[n]);return a}(e,["number"]);switch(t){case 1:return o.createElement(i,n);case 2:return o.createElement(u,n);case 3:return o.createElement(s,n);case 4:return o.createElement(l,n);case 5:return o.createElement(m,n);case 6:return o.createElement(d,n);case 7:return o.createElement(p,n);case 8:return o.createElement(h,n);case 9:return o.createElement(f,n);case 0:return o.createElement(_,n)}},E=n(1620),y=(n(2114),n(114));n.d(t,"b",function(){return b}),n.d(t,"a",function(){return w});var b={COUNT_UP:-1,COUNT_DOWN:1},w={HOUR:36e5,MINUTE:6e4,SECOND:1e3},D={SENARY:[0,5,4,3,2,1,0],DECIMAL:[0,9,8,7,6,5,4,3,2,1,0]},k=function(e){var t=e.colonState,n=e.theme,a=e.style;return o.createElement("div",{className:r()("shopee-countdown-timer__colon","shopee-countdown-timer__colon--flashing-"+t,n&&"shopee-countdown-timer__colon--"+n),style:a},o.createElement("div",{className:"colon-dot__wrapper"},o.createElement("span",{className:"colon-dot"})),o.createElement("div",{className:"colon-dot__wrapper"},o.createElement("span",{className:"colon-dot"})))},N=function(e){var t,n;function a(){for(var t,n=arguments.length,o=new Array(n),a=0;a<n;a++)o[a]=arguments[a];return(t=e.call.apply(e,[this].concat(o))||this).state={isCountdownEnded:1e3*t.props.targetTimeInSeconds-new Date<=0},t.onSafariVisibilityChange=function(){t.setState({isCountdownEnded:document.hidden||1e3*t.props.targetTimeInSeconds-new Date<=0})},t}n=e,(t=a).prototype=Object.create(n.prototype),t.prototype.constructor=t,t.__proto__=n;var c=a.prototype;return c.componentDidMount=function(){var e=this,t=1e3*this.props.targetTimeInSeconds-new Date;t<2147483647&&(this.countdownEndTimer=setTimeout(function(){e.state.isCountdownEnded||(e.setState({isCountdownEnded:!0}),e.props.onCountdownEnded&&e.props.onCountdownEnded())},t)),Object(y.e)()&&document.addEventListener("visibilitychange",this.onSafariVisibilityChange,!1)},c.componentWillUnmount=function(){clearTimeout(this.countdownEndTimer),Object(y.e)()&&document.removeEventListener("visibilitychange",this.onSafariVisibilityChange,!1)},c.render=function(){var e=this.props,t=e.flipRate,n=e.nonFlashing,a=e.flipBoardStyle,c=e.colonStyle,i=e.numberStyle,u=e.targetTimeInSeconds,s=this.state.isCountdownEnded,l=+new Date,m=Math.max(0,(1e3*u-l)*this.props.type),d=Object(E.c)(m),p=d.hour,h=d.minute,f=d.second,_=x(p,h,f),y=_.hourHundDelay,b=_.hourDecaDelay,N=_.hourHexaDelay,L=_.minuteDecaDelay,S=_.minuteHexaDelay,C=_.secondDecaDelay,g=_.secondHexaDelay,z=n?"on":"off";return o.createElement("div",{className:r()("shopee-countdown-timer",this.props.classNames)},o.createElement("div",{className:"shopee-countdown-timer__number",style:a},p>99&&o.createElement("div",{className:r()("shopee-countdown-timer__number__hexa",s?"":"shopee-countdown-timer__number__hund--hour"),style:{animationDelay:y},key:y},D.DECIMAL.map(function(e,t){return o.createElement("div",{className:r()("shopee-countdown-timer__number__item"),key:t},o.createElement(v,{number:e,iconStyle:i}))})),o.createElement("div",{className:r()("shopee-countdown-timer__number__hexa",s?"":"shopee-countdown-timer__number__hexa--hour"),style:{animationDelay:N},key:N},D.DECIMAL.map(function(e,t){return o.createElement("div",{className:r()("shopee-countdown-timer__number__item"),key:t},o.createElement(v,{number:e,iconStyle:i}))})),o.createElement("div",{className:r()("shopee-countdown-timer__number__deca",s?"":"shopee-countdown-timer__number__deca--hour"),style:{animationDelay:b},key:b},D.DECIMAL.map(function(e,t){return o.createElement("div",{className:r()("shopee-countdown-timer__number__item"),key:t},o.createElement(v,{number:e,iconStyle:i}))}))),t<=w.MINUTE&&[o.createElement(k,{key:"colon-before-minute",colonState:z,theme:this.props.theme,style:c}),o.createElement("div",{key:"digit-minute",className:"shopee-countdown-timer__number",style:a},o.createElement("div",{className:r()("shopee-countdown-timer__number__hexa",s?"":"shopee-countdown-timer__number__hexa--minute"),style:{animationDelay:S},key:S},D.SENARY.map(function(e,t){return o.createElement("div",{className:r()("shopee-countdown-timer__number__item"),key:t},o.createElement(v,{number:e,iconStyle:i}))})),o.createElement("div",{className:r()("shopee-countdown-timer__number__deca",s?"":"shopee-countdown-timer__number__deca--minute"),style:{animationDelay:L},key:L},D.DECIMAL.map(function(e,t){return o.createElement("div",{className:r()("shopee-countdown-timer__number__item"),key:t},o.createElement(v,{number:e,iconStyle:i}))})))],t<=w.SECOND&&[o.createElement(k,{key:"colon-before-second",colonState:z,theme:this.props.theme,style:c}),o.createElement("div",{key:"digit-second",className:"shopee-countdown-timer__number",style:a},o.createElement("div",{className:r()("shopee-countdown-timer__number__hexa",s?"":"shopee-countdown-timer__number__hexa--second"),style:{animationDelay:g},key:g},D.SENARY.map(function(e,t){return o.createElement("div",{className:r()("shopee-countdown-timer__number__item"),key:t},o.createElement(v,{number:e,iconStyle:i}))})),o.createElement("div",{className:r()("shopee-countdown-timer__number__deca",s?"":"shopee-countdown-timer__number__deca--second"),style:{animationDelay:C},key:C},D.DECIMAL.map(function(e,t){return o.createElement("div",{className:r()("shopee-countdown-timer__number__item"),key:t},o.createElement(v,{number:e,iconStyle:i}))})))])},a}(o.PureComponent);N.defaultProps={type:b.COUNT_DOWN,flipRate:w.SECOND};var x=function(e,t,n){return{secondDecaDelay:n%10-9+"s",secondHexaDelay:n-68+"s",minuteDecaDelay:t%10*60+n-658+"s",minuteHexaDelay:60*t+n-4198+"s",hourDecaDelay:e%10*3600+60*t+n-39598+"s",hourHexaDelay:e%100*3600+60*t+n-395998+"s",hourHundDelay:e%1e3*3600+60*t+n-3959998+"s"}};t.c=N},1620:function(e,t,n){"use strict";n.d(t,"c",function(){return r}),n.d(t,"a",function(){return c}),n.d(t,"b",function(){return i});var o=3600,a=60;function r(e){var t=Math.floor(e/1e3),n=Math.floor(t/o);return t%=o,{hour:n||0,minute:Math.floor(t/a)||0,second:t%a||0}}function c(e,t){var n=+new Date;return Math.max(0,(1e3*e-n)*t)}function i(e){return e<10?"0"+e:""+e}},2104:function(e,t,n){var o=n(0);function a(e){return o.createElement("svg",e,o.createElement("path",{fillRule:"evenodd",strokeLinecap:"round",strokeWidth:".945",d:"M12.1 18.4v49.7H25V0L0 13v11.9l12.1-6.5z"}))}a.defaultProps={viewBox:"0 0 25 68.1"},e.exports=a,a.default=a},2105:function(e,t,n){var o=n(0);function a(e){return o.createElement("svg",e,o.createElement("path",{fillRule:"evenodd",strokeLinecap:"round",strokeWidth:".945",d:"M21.6 56.403l12.5-18.3c5.081-7.491 7.492-12.684 8.063-17.877a22.986 22.986 0 0 0 .137-2.523A17.062 17.062 0 0 0 30.133 1.242 24.304 24.304 0 0 0 22.3.003a23.551 23.551 0 0 0-9.787 1.948C5.323 5.212 1.199 12.42 1.199 22.443a36.776 36.776 0 0 0 .001.26H13a70.067 70.067 0 0 1 .052-1.368c.118-2.398.351-3.497.948-5.032a7.181 7.181 0 0 1 5.187-4.431 9.74 9.74 0 0 1 2.313-.269c4.599 0 7.899 3.099 7.9 7.398a5.467 5.467 0 0 1 0 .002 11.162 11.162 0 0 1-.092 1.496c-.29 2.167-1.352 4.335-4.331 9.011a261.731 261.731 0 0 1-1.677 2.593L0 67.703h40.5v-11.3H21.6z"}))}a.defaultProps={viewBox:"0 0 42.3 67.703"},e.exports=a,a.default=a},2106:function(e,t,n){var o=n(0);function a(e){return o.createElement("svg",e,o.createElement("path",{fillRule:"evenodd",strokeLinecap:"round",strokeWidth:".945",d:"M22.5 11L7.3 31.3l7.2 6.1c1.9-1.2 3.8-1.7 6.1-1.7a10.732 10.732 0 0 1 5.741 1.573c2.816 1.762 4.559 4.87 4.559 8.627a10.175 10.175 0 0 1-2.626 6.924A10.165 10.165 0 0 1 20.7 56.1c-4.086 0-7.199-2.156-8.584-5.887A12.3 12.3 0 0 1 11.5 47.8L0 48.2c.595 4.955 1.386 7.553 3.347 10.52a24.795 24.795 0 0 0 .053.08 19.859 19.859 0 0 0 13.535 8.466A24.541 24.541 0 0 0 21 67.6c11.745 0 20.628-8.083 22.012-19.459A25.999 25.999 0 0 0 43.2 45a22.484 22.484 0 0 0-2.049-9.694c-2.825-5.949-8.41-9.794-15.751-10.406L43.9 0H3.3v11h19.2z"}))}a.defaultProps={viewBox:"0 0 43 67"},e.exports=a,a.default=a},2107:function(e,t,n){var o=n(0);function a(e){return o.createElement("svg",e,o.createElement("path",{fillRule:"evenodd",strokeLinecap:"round",strokeWidth:".945",d:"M24.5 53.2v13.7h12.3V53.2h6.1v-11h-6.1V0H23.4L0 42.5v10.7h24.5zm0-11h-14l14-24.8v24.8z"}))}a.defaultProps={viewBox:"0 0 42.9 66.9"},e.exports=a,a.default=a},2108:function(e,t,n){var o=n(0);function a(e){return o.createElement("svg",e,o.createElement("path",{fillRule:"evenodd",strokeLinecap:"round",strokeWidth:".945",d:"M15.2 11.6h22.3V0h-34v39.5h8.4a13.796 13.796 0 0 1 2.081-2.256A9.364 9.364 0 0 1 20.4 35c5.6 0 9.9 4.5 9.9 10.3 0 5.8-4.3 10.2-9.8 10.2a9.594 9.594 0 0 1-3.975-.775c-2.283-1.024-3.971-3.081-5.231-6.281a22.17 22.17 0 0 1-.094-.244L0 52.4a62.066 62.066 0 0 0 .565 1.425c1.46 3.548 2.682 5.38 4.659 7.484a37.124 37.124 0 0 0 .276.291 21.422 21.422 0 0 0 13.729 5.945 25.179 25.179 0 0 0 1.671.055 21.976 21.976 0 0 0 13.258-4.2c4.31-3.202 7.279-8.057 8.275-13.942A26.715 26.715 0 0 0 42.8 45c0-11.9-8.3-20.9-19.4-20.9a20.186 20.186 0 0 0-2.2.112c-1.856.203-3.576.691-5.716 1.57a41.606 41.606 0 0 0-.284.118V11.6z"}))}a.defaultProps={viewBox:"0 0 42.8 67.6"},e.exports=a,a.default=a},2109:function(e,t,n){var o=n(0);function a(e){return o.createElement("svg",e,o.createElement("path",{fillRule:"evenodd",strokeLinecap:"round",strokeWidth:".945",d:"M38.501 0h-14.6l-16.6 26.2a87.112 87.112 0 0 0-2.841 4.806C1.956 35.606.636 39.352.184 43.098A25.786 25.786 0 0 0 .001 46.2c0 11.983 8.875 21.071 20.561 21.391a23.329 23.329 0 0 0 .639.009c12.3 0 22.2-9.9 22.2-22.2a20.356 20.356 0 0 0-5.04-13.557 17.916 17.916 0 0 0-13.46-6.143c-1.043 0-1.817.09-3.26.526a26.98 26.98 0 0 0-.24.074L38.501 0zm-7.326 44.352a9.309 9.309 0 0 0-9.274-8.052 10.442 10.442 0 0 0-.638.019A9.653 9.653 0 0 0 12.101 46a10.844 10.844 0 0 0 .031.817c.196 2.596 1.324 4.831 3.063 6.396a9.473 9.473 0 0 0 6.406 2.387c5.4 0 9.7-4.3 9.7-9.6a10.703 10.703 0 0 0-.126-1.648z"}))}a.defaultProps={viewBox:"0 0 43.402 67.6"},e.exports=a,a.default=a},2110:function(e,t,n){var o=n(0);function a(e){return o.createElement("svg",e,o.createElement("path",{fillRule:"evenodd",strokeLinecap:"round",strokeWidth:".945",d:"M21.6 11.6L0 66.3h13.3L39.5 0H.1v11.6h21.5z"}))}a.defaultProps={viewBox:"0 0 39.5 66.3"},e.exports=a,a.default=a},2111:function(e,t,n){var o=n(0);function a(e){return o.createElement("svg",e,o.createElement("path",{fillRule:"evenodd",strokeLinecap:"round",strokeWidth:".945",d:"M33.603 32.802a31.686 31.686 0 0 0 .79-.423c2.107-1.169 3.051-2.091 4.378-4.03a32.68 32.68 0 0 0 .032-.047c1.9-2.9 2.8-6.1 2.8-9.7 0-10.8-8.2-18.6-19.6-18.6-11.335 0-19.479 7.414-19.976 17.97a21.882 21.882 0 0 0-.024 1.03 17.926 17.926 0 0 0 1.016 6.155 13.457 13.457 0 0 0 6.884 7.645C4.606 35.049 1.434 38.971.389 44.62a24.628 24.628 0 0 0-.386 4.482c0 11.8 8.7 19.9 21.4 19.9a24.237 24.237 0 0 0 11.074-2.514c6.306-3.218 10.335-9.304 10.699-16.947a23.948 23.948 0 0 0 .027-1.139 20.81 20.81 0 0 0-.846-6.134c-1.294-4.206-4.073-7.299-8.337-9.278a20.642 20.642 0 0 0-.417-.188zm-11.9 6.1c4.9 0 9.1 4.2 9.1 9.3 0 5.1-4.1 9.2-9.2 9.2a9.644 9.644 0 0 1-5.269-1.484c-2.255-1.453-3.734-3.872-3.991-6.794a10.51 10.51 0 0 1-.04-.922 9.237 9.237 0 0 1 2.404-6.318c1.703-1.853 4.18-2.982 6.996-2.982zm.2-27.9c4.5 0 8.4 3.8 8.4 8.2 0 4.4-4 8.2-8.5 8.2-4.6 0-8.2-3.7-8.2-8.4a7.892 7.892 0 0 1 1.919-5.273c1.232-1.404 2.986-2.353 5.055-2.638a9.726 9.726 0 0 1 1.326-.089z"}))}a.defaultProps={viewBox:"0 0 43.204 69.004"},e.exports=a,a.default=a},2112:function(e,t,n){var o=n(0);function a(e){return o.createElement("svg",e,o.createElement("path",{fillRule:"evenodd",strokeLinecap:"round",strokeWidth:".945",d:"M5.501 67.701h14.4l16.4-26.1c4.512-7.165 6.676-12.531 7.115-17.896a25.743 25.743 0 0 0 .085-2.104c0-11.759-8.183-20.64-19.519-21.527a24.115 24.115 0 0 0-1.881-.073c-12.5 0-22.1 9.5-22.1 22 0 11.3 8.3 19.9 19.3 19.9.851 0 1.523-.089 2.777-.352a55.135 55.135 0 0 0 .223-.048l-16.8 26.2zm25.797-46.447a9.47 9.47 0 0 0-9.297-9.353 10.339 10.339 0 0 0-.503.013 9.524 9.524 0 0 0-9.197 9.487c0 5.4 4.1 9.6 9.4 9.6 2.785 0 5.25-1.09 6.985-2.886a9.421 9.421 0 0 0 2.615-6.614 10.005 10.005 0 0 0-.003-.247z",vectorEffect:"non-scaling-stroke"}))}a.defaultProps={viewBox:"0 0 43.503 67.701"},e.exports=a,a.default=a},2113:function(e,t,n){var o=n(0);function a(e){return o.createElement("svg",e,o.createElement("path",{fillRule:"evenodd",strokeLinecap:"round",strokeWidth:".945",d:"M.001 23.201v21.3a86.087 86.087 0 0 0 .141 5.239c.24 3.911.8 6.807 1.788 9.131a13.986 13.986 0 0 0 3.071 4.53c3.183 3.183 8.009 5.116 13.716 5.52a32.308 32.308 0 0 0 2.284.08 27.934 27.934 0 0 0 6.391-.693c2.999-.704 5.593-1.942 7.767-3.697a17.608 17.608 0 0 0 1.042-.91 16.219 16.219 0 0 0 4.725-8.397c.365-1.533.594-3.225.702-5.11a47.264 47.264 0 0 0 .073-2.693v-25.9c0-4.153-.458-7.389-1.5-10.073a15.929 15.929 0 0 0-4.5-6.327A20.063 20.063 0 0 0 26.805.689a27.077 27.077 0 0 0-6.204-.688c-6.7 0-12.5 2.2-16.1 6.2C1.536 9.443.202 13.886.022 21.359a76.328 76.328 0 0 0-.021 1.842zm29.1-.6v23.2a49.403 49.403 0 0 1-.043 2.168c-.07 1.589-.23 2.783-.497 3.768a8.197 8.197 0 0 1-.86 2.064 7.193 7.193 0 0 1-3.81 2.919 8.858 8.858 0 0 1-2.89.481 8.941 8.941 0 0 1-5.066-1.538 6.167 6.167 0 0 1-1.634-1.662 8.307 8.307 0 0 1-.297-.421c-.937-1.425-1.103-2.85-1.103-7.679v-22.7c0-2.681.162-4.465.54-5.847a8.234 8.234 0 0 1 .86-2.053c1.2-2.1 3.7-3.3 6.7-3.3a9.192 9.192 0 0 1 3.315.591 7.04 7.04 0 0 1 2.785 1.909 6.754 6.754 0 0 1 1.558 2.985c.316 1.252.442 2.856.442 5.115z"}))}a.defaultProps={viewBox:"0 0 41.701 69.001"},e.exports=a,a.default=a},2114:function(e,t,n){}}]);
//# sourceMappingURL=https://shopee.sg/assets/default~Homepage~MDFlashSale~PageFlashSale~PageGroupBuyDetail~PageGroupBuyInvite~PageGroupBuyMyGroup~06c42ccf.ce19c9f45c4bd7fcb420.js.map