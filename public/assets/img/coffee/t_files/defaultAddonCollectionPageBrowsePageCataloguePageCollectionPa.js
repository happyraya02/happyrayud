(("undefined"!=typeof self?self:this).webpackJsonp=("undefined"!=typeof self?self:this).webpackJsonp||[]).push([[0],{1050:function(e,t,r){"use strict";var n=r(58);t.a=Object(n.a)({Icon:r(1236),iconClassNames:["icon-arrow-down"]})},1056:function(e,t,r){"use strict";var n=r(1553);r.d(t,"a",function(){return n.a}),r.d(t,"b",function(){return n.b}),r.d(t,"c",function(){return n.c}),r.d(t,"d",function(){return n.d}),r.d(t,"e",function(){return n.e})},1115:function(e,t,r){"use strict";var n=r(58);t.a=Object(n.a)({Icon:r(1162),iconClassNames:["icon-headshot"]})},1162:function(e,t,r){var n=r(0);function a(e){return n.createElement("svg",e,n.createElement("g",null,[n.createElement("circle",{cx:"7.5",cy:"4.5",fill:"none",r:"3.8",strokeMiterlimit:"10",key:0}),n.createElement("path",{d:"m1.5 14.2c0-3.3 2.7-6 6-6s6 2.7 6 6",fill:"none",strokeLinecap:"round",strokeMiterlimit:"10",key:1})]))}a.defaultProps={enableBackground:"new 0 0 15 15",viewBox:"0 0 15 15",x:"0",y:"0"},e.exports=a,a.default=a},1236:function(e,t,r){var n=r(0);function a(e){return n.createElement("svg",e,n.createElement("g",null,n.createElement("path",{d:"m11 2.5c0 .1 0 .2-.1.3l-5 6c-.1.1-.3.2-.4.2s-.3-.1-.4-.2l-5-6c-.2-.2-.1-.5.1-.7s.5-.1.7.1l4.6 5.5 4.6-5.5c.2-.2.5-.2.7-.1.1.1.2.3.2.4z"})))}a.defaultProps={enableBackground:"new 0 0 11 11",viewBox:"0 0 11 11",x:"0",y:"0"},e.exports=a,a.default=a},1247:function(e,t,r){"use strict";r.d(t,"a",function(){return c});var n=r(0),a=r(137),i=r.n(a),o=r(270),s=r(174);var c=function(e){var t,r;function a(t){var r;return i()(t.onEnterViewPort,"it's compulsory to pass onEnterViewPort function as props to LazyTrigger"),(r=e.call(this,t)||this).setRef=function(e){r._ref=e},r}r=e,(t=a).prototype=Object.create(r.prototype),t.prototype.constructor=t,t.__proto__=r;var c=a.prototype;return c.UNSAFE_componentWillMount=function(){s.a||this.props.onEnterViewPort()},c.componentDidMount=function(){s.a&&(this.props.observeMultipleTime?Object(o.a)(this._ref,{enterViewCallback:this.props.onEnterViewPort}):Object(o.b)(this._ref,{enterViewCallback:this.props.onEnterViewPort}))},c.componentWillUnmount=function(){s.a&&Object(o.c)(this._ref)},c.render=function(){return n.createElement("div",{ref:this.setRef},this.props.children)},a}(n.Component)},1330:function(e,t,r){"use strict";var n={};r.r(n),r.d(n,"Container",function(){return b}),r.d(n,"ImageContainer",function(){return y}),r.d(n,"ContentContainer",function(){return E}),r.d(n,"ButtonContainer",function(){return C});var a=r(0),i=r.n(a),o=r(904),s=r(58),c=Object(s.a)({Icon:r(1902),iconClassNames:["icon-default-image"]}),u=r(7),l=r(1903),d=r.n(l),p=4;var m=function(e){var t=e.images;if(0===t.length)return a.createElement(c,{className:d.a.emptyImage});if(1===t.length)return a.createElement(o.a,{src:Object(u.p)(t[0],!0),wrapperClassName:d.a.image,className:d.a.image,placeholderClassName:d.a.placeholder});for(var r=[],n=Math.min(p,t.length)-1;n>=0;n--)r.push(t[n]);return a.createElement("div",{className:d.a.multiImagecontainer},r.map(function(e,t){return a.createElement(o.a,{src:Object(u.p)(e,!0),wrapperClassName:d.a.wrapperMultiImage,className:d.a.image,placeholderClassName:d.a.placeholder,key:t})}))},h=r(8),f=r.n(h),v=r(1904),g=r.n(v),b=a.forwardRef(function(e,t){var r=e.className,n=e.children,i=e.onClick,o=e.showDivider,s=e.isUnread;return a.createElement(a.Fragment,null,a.createElement("div",{className:f()(r,g.a.container,s&&g.a.cardUnread),onClick:i,ref:t},n),o&&a.createElement("div",{className:g.a.divider}))});function y(e){var t=e.className,r=e.children;return a.createElement("div",{className:f()(t,g.a.imageContainer)},r)}function E(e){var t=e.className,r=e.children;return a.createElement("div",{className:f()(t,g.a.contentContainer)},r)}function C(e){var t=e.className,r=e.children;return a.createElement("div",{className:f()(t,g.a.buttonContainer)},r)}var I=r(1115),w=r(1905),_=r.n(w);var R=function(e){var t=e.avatarImage;return t?a.createElement(o.a,{src:Object(u.p)(t,!0),wrapperClassName:_.a.avatarContainer,className:_.a.avatar,placeholderClassName:_.a.placeholder,useImgTag:!0,isCovered:!0}):a.createElement(I.a,{className:_.a.emptyAvatar})};var k=function(){var e=i.a.useRef(!0);return Object(a.useEffect)(function(){return function(){e.current=!1}},[]),e};var N=function(e,t,r){var n=a.useRef({});a.useEffect(function(){var a=e.filter(function(e){return void 0===n.current[r(e)]});a.length>0&&t(a);for(var i=0;i<a.length;i++)n.current[r(a[i])]=!0})};r.d(t,"e",function(){return k}),r.d(t,"d",function(){return N}),r.d(t,"c",function(){return m}),r.d(t,"b",function(){return n}),r.d(t,"a",function(){return R})},1371:function(e,t,r){e.exports={container:"_3ZDC1p",heightKeeper:"OwvYzk",placeholderContainer:"_23gaSK",imageLoading:"_3kW5oi",imageReady:"_3XaILN",placeholder:"_2UMoMh"}},1477:function(e,t,r){"use strict";r.d(t,"c",function(){return m}),r.d(t,"d",function(){return h}),r.d(t,"e",function(){return f}),r.d(t,"f",function(){return v}),r.d(t,"g",function(){return g}),r.d(t,"a",function(){return b}),r.d(t,"b",function(){return y});var n=r(11),a=r(3);r(130);function i(){return(i=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var n in r)Object.prototype.hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e}).apply(this,arguments)}var o="/api/v2/shop/get",s="/shop/api/block_user/",c="/api/v2/shop/get_categories",u="/api/v2/liked_products/get",l="/api/v2/shop/get_list",d="/buyer/follow/shop/${shopId}/",p="/buyer/unfollow/shop/${shopId}/";function m(e,t){var r=void 0===t?{}:t,i=r.offset,o=void 0===i?0:i,s=r.limit,u=void 0===s?20:s,l=r.catid,d=l?{shopid:e,catid:l}:{limit:u,offset:o,shopid:e,catid:l};return Object(a.d)(c+Object(n.c)(d))}function h(e){var t=e.shopId,r=e.username,s=e.isBrief,c=void 0!==s&&s,u={};u=i({},u,t?{shopid:t}:{username:r||""}),c&&(u=i({},u,{is_brief:1}));var l=Object(n.c)(u);return Object(a.d)(o+l)}function f(e,t){var r=void 0===t?{}:t,i=r.offset,o=void 0===i?0:i,s=r.limit,c=void 0===s?20:s;return Object(a.d)(u+Object(n.c)({limit:c,offset:o,shopid:e}))}function v(e){return Object(a.g)(d.replace("${shopId}",e.toString()),{})}function g(e){return Object(a.g)(p.replace("${shopId}",e.toString()),{})}function b(e,t){return Object(a.f)(s,{userid:e,block:t?1:0})}function y(e,t){return void 0===t&&(t=!1),Object(a.g)(l,{shop_ids:e,need_detail:t?1:0})}},1553:function(e,t,r){"use strict";r.d(t,"c",function(){return d}),r.d(t,"a",function(){return h}),r.d(t,"d",function(){return v}),r.d(t,"e",function(){return g}),r.d(t,"b",function(){return y});var n=r(1477),a=r(1),i=r(454),o=r(69),s=r(18);function c(){return(c=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var n in r)Object.prototype.hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e}).apply(this,arguments)}function u(e,t,r,n,a,i,o){try{var s=e[i](o),c=s.value}catch(e){return void r(e)}s.done?t(c):Promise.resolve(c).then(n,a)}function l(e){return function(){var t=this,r=arguments;return new Promise(function(n,a){var i=e.apply(t,r);function o(e){u(i,n,a,o,s,"next",e)}function s(e){u(i,n,a,o,s,"throw",e)}o(void 0)})}}function d(e,t,r,i){return void 0===r&&(r=null),void 0===i&&(i=!1),function(){var s=l(regeneratorRuntime.mark(function s(u){var l,d,p,m;return regeneratorRuntime.wrap(function(s){for(;;)switch(s.prev=s.next){case 0:return u(Object(a.a)(o.d.REQUESTED,{shopId:e,username:r})),s.next=3,n.d({shopId:e,username:r,isBrief:i});case 3:return l=s.sent,d=l.response,p=l.error,m=l.error_response,!p&&d&&d.data?u(Object(a.a)(o.d.SUCCESS,{shopId:d.data.shopid,response:c({},d.data,{version:d.version})})):u(Object(a.a)(o.d.FAILED,{shopId:e,error:p,error_response:m})),t&&t(p),s.abrupt("return",{error:p,shopInfo:d&&d.data,errorData:m||null});case 10:case"end":return s.stop()}},s,this)}));return function(e){return s.apply(this,arguments)}}()}var p=5,m=20;function h(e,t){var r=(void 0===t?{}:t).getShopStore,n=void 0===r?function(e){return e.shop}:r;return function(){var t=l(regeneratorRuntime.mark(function t(r){var a,i,o,s;return regeneratorRuntime.wrap(function(t){for(;;)switch(t.prev=t.next){case 0:a=0,i=!0,o=0;case 3:if(!(i&&o++<p)){t.next=11;break}return t.next=6,r(f(e,{getShopStore:n,limit:m,offset:a}));case 6:s=t.sent,i=s&&!s.error&&s.shopCategories.length===m,a+=m,t.next=3;break;case 11:case"end":return t.stop()}},t,this)}));return function(e){return t.apply(this,arguments)}}()}function f(e,t){var r=void 0===t?{}:t,i=r.offset,s=void 0===i?0:i,c=r.limit,u=void 0===c?20:c,d=r.getShopStore,p=void 0===d?function(e){return e.shop}:d;return function(){var t=l(regeneratorRuntime.mark(function t(r,i){var c,l,d,m,h,f,v;return regeneratorRuntime.wrap(function(t){for(;;)switch(t.prev=t.next){case 0:if(c=p(i())[e],l=!!c&&!!c.shopCategories&&c.shopCategories.hasMore,d=c&&c.shopCategories&&c.shopCategories.items&&!!c.shopCategories.items[s],(l||0===s)&&!d){t.next=5;break}return t.abrupt("return");case 5:return r(Object(a.a)(o.c.REQUESTED,{shopId:e})),t.next=8,n.c(e,{offset:s,limit:u});case 8:return m=t.sent,h=m.response,!(f=m.error)&&h&&h.data?(v=h.data,r(Object(a.a)(o.c.SUCCESS,{shopId:e,data:v,offset:s,limit:u}))):r(Object(a.a)(o.c.FAILED,{shopId:e})),t.abrupt("return",{error:f,shopCategories:h&&h.data.items});case 13:case"end":return t.stop()}},t,this)}));return function(e,r){return t.apply(this,arguments)}}()}function v(e){return function(){var t=l(regeneratorRuntime.mark(function t(r){var i,s;return regeneratorRuntime.wrap(function(t){for(;;)switch(t.prev=t.next){case 0:return r(Object(a.a)(o.f.REQUESTED)),t.next=3,n.f(e);case 3:return i=t.sent,s=i.error,r(s?Object(a.a)(o.f.FAILED,{shopId:e}):Object(a.a)(o.f.SUCCESS,{shopId:e})),t.abrupt("return",{error:s});case 7:case"end":return t.stop()}},t,this)}));return function(e){return t.apply(this,arguments)}}()}function g(e){return function(){var t=l(regeneratorRuntime.mark(function t(r){var i,s;return regeneratorRuntime.wrap(function(t){for(;;)switch(t.prev=t.next){case 0:return r(Object(a.a)(o.g.REQUESTED)),t.next=3,n.g(e);case 3:return i=t.sent,s=i.error,r(s?Object(a.a)(o.g.FAILED,{shopId:e}):Object(a.a)(o.g.SUCCESS,{shopId:e})),t.abrupt("return",{error:s});case 7:case"end":return t.stop()}},t,this)}));return function(e){return t.apply(this,arguments)}}()}var b=[s.b.INIT,s.b.ERR,null,void 0];function y(e,t,r){return void 0===t&&(t=!1),void 0===r&&(r=function(e){return e.shop}),function(){var s=l(regeneratorRuntime.mark(function s(c,u){var l,d,p,m,h;return regeneratorRuntime.wrap(function(s){for(;;)switch(s.prev=s.next){case 0:if(l=new Set,e.forEach(function(e){b.includes(Object(i.b)(u(),e,r))&&!l.has(e)&&l.add(e)}),(d=Array.from(l.values())).length){s.next=5;break}return s.abrupt("return");case 5:return c(Object(a.a)(o.b.REQUESTED,{shopIds:d})),s.next=8,n.b(d,t);case 8:p=s.sent,m=p.error,h=p.response,c(m?Object(a.a)(o.b.FAILED,{shopIds:d}):Object(a.a)(o.b.SUCCESS,{response:h}));case 12:case"end":return s.stop()}},s,this)}));return function(e,t){return s.apply(this,arguments)}}()}},1902:function(e,t,r){var n=r(0);function a(e){return n.createElement("svg",e,n.createElement("g",null,[n.createElement("rect",{height:"2",style:{clipRule:"evenodd",fill:"none",fillRule:"evenodd",strokeLinecap:"round",strokeLinejoin:"round",strokeMiterlimit:"10"},width:"12",x:"1.5",y:"3.5",key:0}),n.createElement("circle",{clipRule:"evenodd",cx:"8.8",cy:"2.2",fill:"none",fillRule:"evenodd",r:"1.2",strokeMiterlimit:"10",key:1}),n.createElement("circle",{clipRule:"evenodd",cx:"6.2",cy:"2.2",fill:"none",fillRule:"evenodd",r:"1.2",strokeMiterlimit:"10",key:2}),n.createElement("rect",{clipRule:"evenodd",fill:"none",fillRule:"evenodd",height:"8.5",strokeLinejoin:"round",strokeMiterlimit:"10",width:"10",x:"2.5",y:"5.5",key:3}),n.createElement("line",{clipRule:"evenodd",fill:"none",fillRule:"evenodd",strokeMiterlimit:"10",x1:"2.5",x2:"12.5",y1:"9.8",y2:"9.8",key:4}),n.createElement("line",{clipRule:"evenodd",fill:"none",fillRule:"evenodd",strokeMiterlimit:"10",x1:"7.6",x2:"7.6",y1:"5.3",y2:"13.5",key:5})]))}a.defaultProps={enableBackground:"new 0 0 15 15",viewBox:"0 0 15 15",x:"0",y:"0"},e.exports=a,a.default=a},1903:function(e,t,r){e.exports={emptyImageContainer:"_18vWP9",wrapperMultiImage:"_3qnRGv",multiImagecontainer:"_1Y_EiY",emptyImage:"_9SfWBC",placeholder:"_2rl98q",image:"_3TL7ad"}},1904:function(e,t,r){e.exports={imageContainer:"F8NCl2",container:"_15YGwU",cardUnread:"_3hlXx2",divider:"_1PiTxJ",contentContainer:"_2eerWu",buttonContainer:"_1MnyUq"}},1905:function(e,t,r){e.exports={placeholder:"_2sX9D_",emptyAvatar:"_1TLmGT",avatarContainer:"_1ibw7K",avatar:"_3jsakd"}},904:function(e,t,r){"use strict";var n=r(0),a=r(8),i=r.n(a),o=r(270);function s(e,t){for(var r=0;r<t.length;r++){var n=t[r];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}var c=function(){function e(e){if(void 0===e&&(e={}),!(e.maxSize&&e.maxSize>0))throw new TypeError("`maxSize` must be a number greater than 0");this.maxSize=e.maxSize,this.cache=new Map,this.oldCache=new Map,this._size=0}var t,r,n,a=e.prototype;return a._set=function(e,t){this.cache.set(e,t),this._size++,this._size>=this.maxSize&&(this._size=0,this.oldCache=this.cache,this.cache=new Map)},a.get=function(e){if(this.cache.has(e))return this.cache.get(e);if(this.oldCache.has(e)){var t=this.oldCache.get(e);return this.oldCache.delete(e),this._set(e,t),t}},a.set=function(e,t){return this.cache.has(e)?this.cache.set(e,t):this._set(e,t),this},a.has=function(e){return this.cache.has(e)||this.oldCache.has(e)},a.peek=function(e){return this.cache.has(e)?this.cache.get(e):this.oldCache.has(e)?this.oldCache.get(e):void 0},a.delete=function(e){var t=this.cache.delete(e);return t&&this._size--,this.oldCache.delete(e)||t},a.clear=function(){this.cache.clear(),this.oldCache.clear(),this._size=0},t=e,(r=[{key:"size",get:function(){var e=0,t=this.oldCache.keys(),r=Array.isArray(t),n=0;for(t=r?t:t[Symbol.iterator]();;){var a;if(r){if(n>=t.length)break;a=t[n++]}else{if((n=t.next()).done)break;a=n.value}var i=a;this.cache.has(i)||e++}return this._size+e}}])&&s(t.prototype,r),n&&s(t,n),e}(),u=r(1371),l=r.n(u);function d(e,t){e.prototype=Object.create(t.prototype),e.prototype.constructor=e,e.__proto__=t}r.d(t,"a",function(){return h}),r.d(t,"b",function(){return f});var p=5e3,m=new c({maxSize:1e3}),h=function(e){function t(){return e.apply(this,arguments)||this}return d(t,e),t.prototype.render=function(){var e=this.props,t=e.useImgTag,r=e.src,a=e.className,o=e.wrapperClassName,s=e.placeholderClassName,c=e.placeholderWrapperClassName,u=e.customPlaceholder,d=e.hidePlaceholder,p=e.style,m=void 0===p?{}:p,h=e.children,g=i()(a,l.a.heightKeeper);return r?n.createElement(v,e):n.createElement("div",{className:i()(l.a.container,o),style:m},t?n.createElement("img",{className:g}):n.createElement("div",{className:g}),n.createElement(f,{className:s,wrapperClassName:c,customPlaceholder:u,hidePlaceholder:!!d}),h)},t}(n.Component);function f(e){var t=e.className,r=e.wrapperClassName,a=e.customPlaceholder,o=e.hidePlaceholder;return n.createElement("div",{className:i()(r,l.a.placeholderContainer)},!o&&(a||n.createElement("div",{className:i()(l.a.placeholder,t)})))}h.disableLazyAnimation=!1;var v=function(e){function t(t){var r;return(r=e.call(this,t)||this)._mounted=!1,r.tryInsertImage=function(){r._wrapper&&r.state.imageReady&&r.props.useImgTag&&r.state.imageElement&&r._wrapper.insertBefore(r.state.imageElement,r._wrapper.firstChild)},r.tryRemoveImage=function(){r._wrapper&&r.state.imageReady&&r.props.useImgTag&&r.state.imageElement&&r._wrapper.removeChild(r.state.imageElement)},r.tryReplaceImage=function(){if(r.state.imageReady&&r.props.useImgTag){var e=r.handleCreateImageElement();e.src=r.props.src,e.onload=function(){r.handleImageOnLoad(e),r._wrapper&&r.state.imageElement&&(r._wrapper.replaceChild(e,r.state.imageElement),r.setState({imageElement:e}))}}},r.handleCreateImageElement=function(){var e=r.props,t=e.alt,n=e.src,a=e.isCovered,o=e.className,s=i()(o,l.a.imageReady),c=m.get(n),u=c?c.cloneNode():new Image(0,0);return t&&u.setAttribute("alt",t),u.setAttribute("class",s),u.setAttribute("style","object-fit: "+(a?"cover":"contain")),r.props.dataCy&&u.setAttribute("data-cy",r.props.dataCy),u.setAttribute("width","invalid-value"),u.setAttribute("height","invalid-value"),u},r.handleEnterViewport=function(){var e=r.handleCreateImageElement();r.handleCallback=requestAnimationFrame(function(){r.props.useImgTag&&"decode"in e?(e.src=r.props.src,e.decode().then(function(){return r.handleImageOnLoad(e)}).catch(r.handleImageError)):(e.onload=function(){return r.handleImageOnLoad(e)},e.onerror=r.handleImageError,e.src=r.props.src)}),r._timeoutId=setTimeout(function(){return r.handleImageOnLoad(e)},p)},r.handleImageOnLoad=function(e){clearTimeout(r._timeoutId),m.set(r.props.src,e),r._mounted&&!r.state.imageReady&&(r.setState({imageReady:!0,imageElement:r.props.useImgTag?e:null}),"function"==typeof r.props.onImageReady&&r.props.onImageReady())},r.handleImageError=function(e){clearTimeout(r._timeoutId)},r.onRef=function(e){r._wrapper=e},m.get(r.props.src)?r.state={imageReady:!0,imageElement:r.props.useImgTag?r.handleCreateImageElement():null}:r.state={imageReady:r.props.disabled||h.disableLazyAnimation,imageElement:null},r}d(t,e);var r=t.prototype;return r.componentDidMount=function(){this._mounted=!0,Object(o.b)(this._wrapper,{enterViewCallback:this.handleEnterViewport}),this.tryInsertImage()},r.componentDidUpdate=function(e,t){this.props.useImgTag&&(!t.imageReady&&this.state.imageReady?this.tryInsertImage():t.imageReady&&!this.state.imageReady?this.tryRemoveImage():e.src!==this.props.src&&this.tryReplaceImage())},r.componentWillUnmount=function(){this._mounted=!1;var e=this._wrapper;e&&Object(o.c)(e),cancelAnimationFrame(this.handleCallback),clearTimeout(this._timeoutId)},r.renderImage=function(){var e=this.props,t=e.src,r=e.className,a=e.isCovered,o=e.useImgTag,s=e.alt,c=i()(r,l.a.imageReady);if(h.disableLazyAnimation)return n.createElement("img",{alt:s,src:t,className:c,style:{objectFit:a?"cover":"contain",width:"100%",paddingTop:0}});var u=this.state.imageReady,d=o&&!this.state.imageElement;if(!u||d){var p=i()(r,l.a.imageLoading);return o?n.createElement("img",{className:p}):n.createElement("div",{className:p})}return o?null:n.createElement("div",{className:c,style:{backgroundImage:"url("+t+")",backgroundSize:a?"cover":"contain",backgroundRepeat:"no-repeat"}})},r.render=function(){var e=this.props,t=e.wrapperClassName,r=e.placeholderClassName,a=e.placeholderWrapperClassName,o=e.customPlaceholder,s=e.hidePlaceholder,c=e.style,u=void 0===c?{}:c,d=e.children;return n.createElement("div",{ref:this.onRef,className:i()(l.a.container,t),style:u},this.renderImage(),!this.state.imageReady&&n.createElement(f,{className:r,wrapperClassName:a,customPlaceholder:o,hidePlaceholder:s}),d)},t}(n.Component);v.defaultProps={disabled:!1}}}]);
//# sourceMappingURL=https://shopee.sg/assets/default~AddonCollectionPage~BrowsePage~CataloguePage~CollectionPage~EventPage~Homepage~OfficialShopB~3a3cc730.8f75049c8ad33bf8f7a7.js.map