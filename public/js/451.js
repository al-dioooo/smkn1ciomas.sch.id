"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[451],{3744:(e,t)=>{t.Z=(e,t)=>{const o=e.__vccOpts||e;for(const[e,n]of t)o[e]=n;return o}},5222:(e,t,o)=>{o.d(t,{Z:()=>s});var n=o(6598),r={class:"text-sm text-gray-600"};const s={props:{on:Boolean},setup:function(e){return function(t,o){return(0,n.openBlock)(),(0,n.createElementBlock)("div",null,[(0,n.createVNode)(n.Transition,{"leave-active-class":"transition ease-in duration-1000","leave-from-class":"opacity-100","leave-to-class":"opacity-0"},{default:(0,n.withCtx)((function(){return[(0,n.withDirectives)((0,n.createElementVNode)("div",r,[(0,n.renderSlot)(t.$slots,"default")],512),[[n.vShow,e.on]])]})),_:3})])}}}},3831:(e,t,o)=>{o.d(t,{Z:()=>c});var n=o(6598),r=o(7829),s={class:"md:grid md:grid-cols-3 md:gap-6"},l={class:"mt-5 md:mt-0 md:col-span-2"},a={class:"px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg"};const c={setup:function(e){return function(e,t){return(0,n.openBlock)(),(0,n.createElementBlock)("div",s,[(0,n.createVNode)(r.Z,null,{title:(0,n.withCtx)((function(){return[(0,n.renderSlot)(e.$slots,"title")]})),description:(0,n.withCtx)((function(){return[(0,n.renderSlot)(e.$slots,"description")]})),_:3}),(0,n.createElementVNode)("div",l,[(0,n.createElementVNode)("div",a,[(0,n.renderSlot)(e.$slots,"content")])])])}}}},7041:(e,t,o)=>{o.d(t,{Z:()=>s});var n=o(6598),r=["type"];const s={props:{type:{type:String,default:"submit"}},setup:function(e){return function(t,o){return(0,n.openBlock)(),(0,n.createElementBlock)("button",{type:e.type,class:"inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"},[(0,n.renderSlot)(t.$slots,"default")],8,r)}}}},7100:(e,t,o)=>{o.d(t,{Z:()=>i});var n=o(6598),r=o(312),s={class:"px-6 py-4"},l={class:"text-lg"},a={class:"mt-4"},c={class:"flex flex-row justify-end px-6 py-4 bg-gray-100 text-right"};const i={props:{show:{type:Boolean,default:!1},maxWidth:{type:String,default:"2xl"},closeable:{type:Boolean,default:!0}},emits:["close"],setup:function(e,t){var o=t.emit,i=function(){o("close")};return function(t,o){return(0,n.openBlock)(),(0,n.createBlock)(r.Z,{show:e.show,"max-width":e.maxWidth,closeable:e.closeable,onClose:i},{default:(0,n.withCtx)((function(){return[(0,n.createElementVNode)("div",s,[(0,n.createElementVNode)("div",l,[(0,n.renderSlot)(t.$slots,"title")]),(0,n.createElementVNode)("div",a,[(0,n.renderSlot)(t.$slots,"content")])]),(0,n.createElementVNode)("div",c,[(0,n.renderSlot)(t.$slots,"footer")])]})),_:3},8,["show","max-width","closeable"])}}}},1959:(e,t,o)=>{o.d(t,{Z:()=>s});var n=o(6598),r=["value"];const s={props:{modelValue:String,isError:Boolean},emits:["update:modelValue"],setup:function(e,t){var o=t.expose,s=(0,n.ref)(null);return(0,n.onMounted)((function(){s.value.hasAttribute("autofocus")&&s.value.focus()})),o({focus:function(){return s.value.focus()}}),function(t,o){return(0,n.openBlock)(),(0,n.createElementBlock)("input",{ref_key:"input",ref:s,class:(0,n.normalizeClass)("".concat(e.isError?"border-red-300":"border-gray-300"," rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50")),value:e.modelValue,onInput:o[0]||(o[0]=function(e){return t.$emit("update:modelValue",e.target.value)})},null,42,r)}}}},604:(e,t,o)=>{o.d(t,{Z:()=>s});var n=o(6598),r={class:"text-sm text-red-600"};const s={props:{message:String},setup:function(e){return function(t,o){return(0,n.withDirectives)(((0,n.openBlock)(),(0,n.createElementBlock)("div",null,[(0,n.createElementVNode)("p",r,(0,n.toDisplayString)(e.message),1)],512)),[[n.vShow,e.message]])}}}},312:(e,t,o)=>{o.d(t,{Z:()=>l});var n=o(6598),r={class:"fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50","scroll-region":""},s=[(0,n.createElementVNode)("div",{class:"absolute inset-0 bg-gray-500 opacity-75"},null,-1)];const l={props:{show:{type:Boolean,default:!1},maxWidth:{type:String,default:"2xl"},closeable:{type:Boolean,default:!0}},emits:["close"],setup:function(e,t){var o=t.emit,l=e;(0,n.watch)((function(){return l.show}),(function(){l.show?document.body.style.overflow="hidden":document.body.style.overflow=null}));var a=function(){l.closeable&&o("close")},c=function(e){"Escape"===e.key&&l.show&&a()};(0,n.onMounted)((function(){return document.addEventListener("keydown",c)})),(0,n.onUnmounted)((function(){document.removeEventListener("keydown",c),document.body.style.overflow=null}));var i=(0,n.computed)((function(){return{sm:"sm:max-w-sm",md:"sm:max-w-md",lg:"sm:max-w-lg",xl:"sm:max-w-xl","2xl":"sm:max-w-2xl"}[l.maxWidth]}));return function(t,o){return(0,n.openBlock)(),(0,n.createBlock)(n.Teleport,{to:"body"},[(0,n.createVNode)(n.Transition,{"leave-active-class":"duration-200"},{default:(0,n.withCtx)((function(){return[(0,n.withDirectives)((0,n.createElementVNode)("div",r,[(0,n.createVNode)(n.Transition,{"enter-active-class":"ease-out duration-300","enter-from-class":"opacity-0","enter-to-class":"opacity-100","leave-active-class":"ease-in duration-200","leave-from-class":"opacity-100","leave-to-class":"opacity-0"},{default:(0,n.withCtx)((function(){return[(0,n.withDirectives)((0,n.createElementVNode)("div",{class:"fixed inset-0 transform transition-all",onClick:a},s,512),[[n.vShow,e.show]])]})),_:1}),(0,n.createVNode)(n.Transition,{"enter-active-class":"ease-out duration-300","enter-from-class":"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95","enter-to-class":"opacity-100 translate-y-0 sm:scale-100","leave-active-class":"ease-in duration-200","leave-from-class":"opacity-100 translate-y-0 sm:scale-100","leave-to-class":"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"},{default:(0,n.withCtx)((function(){return[(0,n.withDirectives)((0,n.createElementVNode)("div",{class:(0,n.normalizeClass)(["mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:mx-auto",(0,n.unref)(i)])},[e.show?(0,n.renderSlot)(t.$slots,"default",{key:0}):(0,n.createCommentVNode)("",!0)],2),[[n.vShow,e.show]])]})),_:3})],512),[[n.vShow,e.show]])]})),_:3})])}}}},2575:(e,t,o)=>{o.d(t,{Z:()=>s});var n=o(6598),r=["type"];const s={props:{type:{type:String,default:"button"}},setup:function(e){return function(t,o){return(0,n.openBlock)(),(0,n.createElementBlock)("button",{type:e.type,class:"inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition"},[(0,n.renderSlot)(t.$slots,"default")],8,r)}}}},7829:(e,t,o)=>{o.d(t,{Z:()=>u});var n=o(6598),r={class:"md:col-span-1 flex justify-between"},s={class:"px-4 sm:px-0"},l={class:"text-lg font-medium text-gray-900"},a={class:"mt-1 text-sm text-gray-600"},c={class:"px-4 sm:px-0"};const i={},u=(0,o(3744).Z)(i,[["render",function(e,t){return(0,n.openBlock)(),(0,n.createElementBlock)("div",r,[(0,n.createElementVNode)("div",s,[(0,n.createElementVNode)("h3",l,[(0,n.renderSlot)(e.$slots,"title")]),(0,n.createElementVNode)("p",a,[(0,n.renderSlot)(e.$slots,"description")])]),(0,n.createElementVNode)("div",c,[(0,n.renderSlot)(e.$slots,"aside")])])}]])},5451:(e,t,o)=>{o.r(t),o.d(t,{default:()=>D});var n=o(6598),r=o(9038),s=o(5222),l=o(3831),a=o(7041),c=o(7100),i=o(1959),u=o(604),d=o(2575),m=(0,n.createTextVNode)(" Browser Sessions "),f=(0,n.createTextVNode)(" Manage and log out your active sessions on other browsers and devices. "),p=(0,n.createElementVNode)("div",{class:"max-w-xl text-sm text-gray-600"}," If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password. ",-1),y={key:0,class:"mt-5 space-y-6"},v={key:0,fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",viewBox:"0 0 24 24",stroke:"currentColor",class:"w-8 h-8 text-gray-500"},w=[(0,n.createElementVNode)("path",{d:"M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"},null,-1)],x={key:1,xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24","stroke-width":"2",stroke:"currentColor",fill:"none","stroke-linecap":"round","stroke-linejoin":"round",class:"w-8 h-8 text-gray-500"},h=[(0,n.createElementVNode)("path",{d:"M0 0h24v24H0z",stroke:"none"},null,-1),(0,n.createElementVNode)("rect",{x:"7",y:"4",width:"10",height:"16",rx:"1"},null,-1),(0,n.createElementVNode)("path",{d:"M11 5h2M12 17v.01"},null,-1)],g={class:"ml-3"},k={class:"text-sm text-gray-600"},V={class:"text-xs text-gray-500"},b={key:0,class:"text-green-500 font-semibold"},N={key:1},E={class:"flex items-center mt-5"},B=(0,n.createTextVNode)(" Log Out Other Browser Sessions "),S=(0,n.createTextVNode)(" Done. "),C=(0,n.createTextVNode)(" Log Out Other Browser Sessions "),Z=(0,n.createTextVNode)(" Please enter your password to confirm you would like to log out of your other browser sessions across all of your devices. "),_={class:"mt-4"},T=(0,n.createTextVNode)(" Cancel "),$=(0,n.createTextVNode)(" Log Out Other Browser Sessions ");const D={props:{sessions:Array},setup:function(e){var t=(0,n.ref)(!1),o=(0,n.ref)(null),D=(0,r.cI)({password:""}),M=function(){t.value=!0,setTimeout((function(){return o.value.focus()}),250)},L=function(){D.delete(route("other-browser-sessions.destroy"),{preserveScroll:!0,onSuccess:function(){return O()},onError:function(){return o.value.focus()},onFinish:function(){return D.reset()}})},O=function(){t.value=!1,D.reset()};return function(r,z){return(0,n.openBlock)(),(0,n.createBlock)(l.Z,null,{title:(0,n.withCtx)((function(){return[m]})),description:(0,n.withCtx)((function(){return[f]})),content:(0,n.withCtx)((function(){return[p,e.sessions.length>0?((0,n.openBlock)(),(0,n.createElementBlock)("div",y,[((0,n.openBlock)(!0),(0,n.createElementBlock)(n.Fragment,null,(0,n.renderList)(e.sessions,(function(e,t){return(0,n.openBlock)(),(0,n.createElementBlock)("div",{key:t,class:"flex items-center"},[(0,n.createElementVNode)("div",null,[e.agent.is_desktop?((0,n.openBlock)(),(0,n.createElementBlock)("svg",v,w)):((0,n.openBlock)(),(0,n.createElementBlock)("svg",x,h))]),(0,n.createElementVNode)("div",g,[(0,n.createElementVNode)("div",k,(0,n.toDisplayString)(e.agent.platform?e.agent.platform:"Unknown")+" - "+(0,n.toDisplayString)(e.agent.browser?e.agent.browser:"Unknown"),1),(0,n.createElementVNode)("div",null,[(0,n.createElementVNode)("div",V,[(0,n.createTextVNode)((0,n.toDisplayString)(e.ip_address)+", ",1),e.is_current_device?((0,n.openBlock)(),(0,n.createElementBlock)("span",b,"This device")):((0,n.openBlock)(),(0,n.createElementBlock)("span",N,"Last active "+(0,n.toDisplayString)(e.last_active),1))])])])])})),128))])):(0,n.createCommentVNode)("",!0),(0,n.createElementVNode)("div",E,[(0,n.createVNode)(a.Z,{onClick:M},{default:(0,n.withCtx)((function(){return[B]})),_:1}),(0,n.createVNode)(s.Z,{on:(0,n.unref)(D).recentlySuccessful,class:"ml-3"},{default:(0,n.withCtx)((function(){return[S]})),_:1},8,["on"])]),(0,n.createVNode)(c.Z,{show:t.value,onClose:O},{title:(0,n.withCtx)((function(){return[C]})),content:(0,n.withCtx)((function(){return[Z,(0,n.createElementVNode)("div",_,[(0,n.createVNode)(i.Z,{ref_key:"passwordInput",ref:o,modelValue:(0,n.unref)(D).password,"onUpdate:modelValue":z[0]||(z[0]=function(e){return(0,n.unref)(D).password=e}),type:"password",class:"mt-1 block w-3/4",placeholder:"Password",onKeyup:(0,n.withKeys)(L,["enter"])},null,8,["modelValue","onKeyup"]),(0,n.createVNode)(u.Z,{message:(0,n.unref)(D).errors.password,class:"mt-2"},null,8,["message"])])]})),footer:(0,n.withCtx)((function(){return[(0,n.createVNode)(d.Z,{onClick:O},{default:(0,n.withCtx)((function(){return[T]})),_:1}),(0,n.createVNode)(a.Z,{class:(0,n.normalizeClass)(["ml-3",{"opacity-25":(0,n.unref)(D).processing}]),disabled:(0,n.unref)(D).processing,onClick:L},{default:(0,n.withCtx)((function(){return[$]})),_:1},8,["class","disabled"])]})),_:1},8,["show"])]})),_:1})}}}}}]);