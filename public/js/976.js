"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[976],{3744:(e,t)=>{t.Z=(e,t)=>{const o=e.__vccOpts||e;for(const[e,r]of t)o[e]=r;return o}},3206:(e,t,o)=>{o.d(t,{Z:()=>s});var r=o(6598),n={class:"min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"},l={class:"w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"};const a={},s=(0,o(3744).Z)(a,[["render",function(e,t){return(0,r.openBlock)(),(0,r.createElementBlock)("div",n,[(0,r.createElementVNode)("div",null,[(0,r.renderSlot)(e.$slots,"logo")]),(0,r.createElementVNode)("div",l,[(0,r.renderSlot)(e.$slots,"default")])])}]])},5501:(e,t,o)=>{o.d(t,{Z:()=>a});var r=o(6598),n=o(9038),l=(0,r.createElementVNode)("svg",{class:"w-16 h-16",viewBox:"0 0 48 48",fill:"none",xmlns:"http://www.w3.org/2000/svg"},[(0,r.createElementVNode)("path",{d:"M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z",fill:"#6875F5"}),(0,r.createElementVNode)("path",{d:"M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z",fill:"#6875F5"})],-1);const a={setup:function(e){return function(e,t){return(0,r.openBlock)(),(0,r.createBlock)((0,r.unref)(n.rU),{href:"/"},{default:(0,r.withCtx)((function(){return[l]})),_:1})}}}},7041:(e,t,o)=>{o.d(t,{Z:()=>l});var r=o(6598),n=["type"];const l={props:{type:{type:String,default:"submit"}},setup:function(e){return function(t,o){return(0,r.openBlock)(),(0,r.createElementBlock)("button",{type:e.type,class:"inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"},[(0,r.renderSlot)(t.$slots,"default")],8,n)}}}},1959:(e,t,o)=>{o.d(t,{Z:()=>l});var r=o(6598),n=["value"];const l={props:{modelValue:String,isError:Boolean},emits:["update:modelValue"],setup:function(e,t){var o=t.expose,l=(0,r.ref)(null);return(0,r.onMounted)((function(){l.value.hasAttribute("autofocus")&&l.value.focus()})),o({focus:function(){return l.value.focus()}}),function(t,o){return(0,r.openBlock)(),(0,r.createElementBlock)("input",{ref_key:"input",ref:l,class:(0,r.normalizeClass)("".concat(e.isError?"border-red-300":"border-gray-300"," rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50")),value:e.modelValue,onInput:o[0]||(o[0]=function(e){return t.$emit("update:modelValue",e.target.value)})},null,42,n)}}}},7088:(e,t,o)=>{o.d(t,{Z:()=>s});var r=o(6598),n={class:"block font-medium text-sm text-gray-700"},l={key:0},a={key:1};const s={props:{value:String},setup:function(e){return function(t,o){return(0,r.openBlock)(),(0,r.createElementBlock)("label",n,[e.value?((0,r.openBlock)(),(0,r.createElementBlock)("span",l,(0,r.toDisplayString)(e.value),1)):((0,r.openBlock)(),(0,r.createElementBlock)("span",a,[(0,r.renderSlot)(t.$slots,"default")]))])}}}},9470:(e,t,o)=>{o.d(t,{Z:()=>u});var r=o(6598),n=o(9038),l={key:0},a=(0,r.createElementVNode)("div",{class:"font-medium text-red-600"}," Whoops! Something went wrong. ",-1),s={class:"mt-3 list-disc list-inside text-sm text-red-600"};const u={setup:function(e){var t=(0,r.computed)((function(){return(0,n.qt)().props.value.errors})),o=(0,r.computed)((function(){return Object.keys(t.value).length>0}));return function(e,n){return(0,r.unref)(o)?((0,r.openBlock)(),(0,r.createElementBlock)("div",l,[a,(0,r.createElementVNode)("ul",s,[((0,r.openBlock)(!0),(0,r.createElementBlock)(r.Fragment,null,(0,r.renderList)((0,r.unref)(t),(function(e,t){return(0,r.openBlock)(),(0,r.createElementBlock)("li",{key:t},(0,r.toDisplayString)(e),1)})),128))])])):(0,r.createCommentVNode)("",!0)}}}},976:(e,t,o)=>{o.r(t),o.d(t,{default:()=>g});var r=o(6598),n=o(9038),l=o(3206),a=o(5501),s=o(7041),u=o(1959),c=o(7088),i=o(9470),d=["onSubmit"],m={class:"mt-4"},f={class:"mt-4"},p={class:"flex items-center justify-end mt-4"},w=(0,r.createTextVNode)(" Reset Password ");const g={props:{email:String,token:String},setup:function(e){var t=e,o=(0,n.cI)({token:t.token,email:t.email,password:"",password_confirmation:""}),g=function(){o.post(route("password.update"),{onFinish:function(){return o.reset("password","password_confirmation")}})};return function(e,t){return(0,r.openBlock)(),(0,r.createElementBlock)(r.Fragment,null,[(0,r.createVNode)((0,r.unref)(n.Fb),{title:"Reset Password"}),(0,r.createVNode)(l.Z,null,{logo:(0,r.withCtx)((function(){return[(0,r.createVNode)(a.Z)]})),default:(0,r.withCtx)((function(){return[(0,r.createVNode)(i.Z,{class:"mb-4"}),(0,r.createElementVNode)("form",{onSubmit:(0,r.withModifiers)(g,["prevent"])},[(0,r.createElementVNode)("div",null,[(0,r.createVNode)(c.Z,{for:"email",value:"Email"}),(0,r.createVNode)(u.Z,{id:"email",modelValue:(0,r.unref)(o).email,"onUpdate:modelValue":t[0]||(t[0]=function(e){return(0,r.unref)(o).email=e}),type:"email",class:"mt-1 block w-full",required:"",autofocus:""},null,8,["modelValue"])]),(0,r.createElementVNode)("div",m,[(0,r.createVNode)(c.Z,{for:"password",value:"Password"}),(0,r.createVNode)(u.Z,{id:"password",modelValue:(0,r.unref)(o).password,"onUpdate:modelValue":t[1]||(t[1]=function(e){return(0,r.unref)(o).password=e}),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"new-password"},null,8,["modelValue"])]),(0,r.createElementVNode)("div",f,[(0,r.createVNode)(c.Z,{for:"password_confirmation",value:"Confirm Password"}),(0,r.createVNode)(u.Z,{id:"password_confirmation",modelValue:(0,r.unref)(o).password_confirmation,"onUpdate:modelValue":t[2]||(t[2]=function(e){return(0,r.unref)(o).password_confirmation=e}),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"new-password"},null,8,["modelValue"])]),(0,r.createElementVNode)("div",p,[(0,r.createVNode)(s.Z,{class:(0,r.normalizeClass)({"opacity-25":(0,r.unref)(o).processing}),disabled:(0,r.unref)(o).processing},{default:(0,r.withCtx)((function(){return[w]})),_:1},8,["class","disabled"])])],40,d)]})),_:1})],64)}}}}}]);