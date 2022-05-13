"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[721],{3744:(e,t)=>{t.Z=(e,t)=>{const o=e.__vccOpts||e;for(const[e,n]of t)o[e]=n;return o}},3206:(e,t,o)=>{o.d(t,{Z:()=>s});var n=o(6598),r={class:"min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"},l={class:"w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"};const a={},s=(0,o(3744).Z)(a,[["render",function(e,t){return(0,n.openBlock)(),(0,n.createElementBlock)("div",r,[(0,n.createElementVNode)("div",null,[(0,n.renderSlot)(e.$slots,"logo")]),(0,n.createElementVNode)("div",l,[(0,n.renderSlot)(e.$slots,"default")])])}]])},5501:(e,t,o)=>{o.d(t,{Z:()=>a});var n=o(6598),r=o(9038),l=(0,n.createElementVNode)("svg",{class:"w-16 h-16",viewBox:"0 0 48 48",fill:"none",xmlns:"http://www.w3.org/2000/svg"},[(0,n.createElementVNode)("path",{d:"M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z",fill:"#6875F5"}),(0,n.createElementVNode)("path",{d:"M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z",fill:"#6875F5"})],-1);const a={setup:function(e){return function(e,t){return(0,n.openBlock)(),(0,n.createBlock)((0,n.unref)(r.rU),{href:"/"},{default:(0,n.withCtx)((function(){return[l]})),_:1})}}}},7041:(e,t,o)=>{o.d(t,{Z:()=>l});var n=o(6598),r=["type"];const l={props:{type:{type:String,default:"submit"}},setup:function(e){return function(t,o){return(0,n.openBlock)(),(0,n.createElementBlock)("button",{type:e.type,class:"inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"},[(0,n.renderSlot)(t.$slots,"default")],8,r)}}}},1959:(e,t,o)=>{o.d(t,{Z:()=>l});var n=o(6598),r=["value"];const l={props:{modelValue:String,isError:Boolean},emits:["update:modelValue"],setup:function(e,t){var o=t.expose,l=(0,n.ref)(null);return(0,n.onMounted)((function(){l.value.hasAttribute("autofocus")&&l.value.focus()})),o({focus:function(){return l.value.focus()}}),function(t,o){return(0,n.openBlock)(),(0,n.createElementBlock)("input",{ref_key:"input",ref:l,class:(0,n.normalizeClass)("".concat(e.isError?"border-red-300":"border-gray-300"," rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50")),value:e.modelValue,onInput:o[0]||(o[0]=function(e){return t.$emit("update:modelValue",e.target.value)})},null,42,r)}}}},7088:(e,t,o)=>{o.d(t,{Z:()=>s});var n=o(6598),r={class:"block font-medium text-sm text-gray-700"},l={key:0},a={key:1};const s={props:{value:String},setup:function(e){return function(t,o){return(0,n.openBlock)(),(0,n.createElementBlock)("label",r,[e.value?((0,n.openBlock)(),(0,n.createElementBlock)("span",l,(0,n.toDisplayString)(e.value),1)):((0,n.openBlock)(),(0,n.createElementBlock)("span",a,[(0,n.renderSlot)(t.$slots,"default")]))])}}}},9470:(e,t,o)=>{o.d(t,{Z:()=>u});var n=o(6598),r=o(9038),l={key:0},a=(0,n.createElementVNode)("div",{class:"font-medium text-red-600"}," Whoops! Something went wrong. ",-1),s={class:"mt-3 list-disc list-inside text-sm text-red-600"};const u={setup:function(e){var t=(0,n.computed)((function(){return(0,r.qt)().props.value.errors})),o=(0,n.computed)((function(){return Object.keys(t.value).length>0}));return function(e,r){return(0,n.unref)(o)?((0,n.openBlock)(),(0,n.createElementBlock)("div",l,[a,(0,n.createElementVNode)("ul",s,[((0,n.openBlock)(!0),(0,n.createElementBlock)(n.Fragment,null,(0,n.renderList)((0,n.unref)(t),(function(e,t){return(0,n.openBlock)(),(0,n.createElementBlock)("li",{key:t},(0,n.toDisplayString)(e),1)})),128))])])):(0,n.createCommentVNode)("",!0)}}}},5721:(e,t,o)=>{o.r(t),o.d(t,{default:()=>k});var n=o(6598),r=o(9038),l=o(3206),a=o(5501),s=o(7041),u=o(1959),c=o(7088),i=o(9470),d=(0,n.createElementVNode)("div",{class:"mb-4 text-sm text-gray-600"}," Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one. ",-1),m={key:0,class:"mb-4 font-medium text-sm text-green-600"},f=["onSubmit"],p={class:"flex items-center justify-end mt-4"},g=(0,n.createTextVNode)(" Email Password Reset Link ");const k={props:{status:String},setup:function(e){var t=(0,r.cI)({email:""}),o=function(){t.post(route("password.email"))};return function(k,v){return(0,n.openBlock)(),(0,n.createElementBlock)(n.Fragment,null,[(0,n.createVNode)((0,n.unref)(r.Fb),{title:"Forgot Password"}),(0,n.createVNode)(l.Z,null,{logo:(0,n.withCtx)((function(){return[(0,n.createVNode)(a.Z)]})),default:(0,n.withCtx)((function(){return[d,e.status?((0,n.openBlock)(),(0,n.createElementBlock)("div",m,(0,n.toDisplayString)(e.status),1)):(0,n.createCommentVNode)("",!0),(0,n.createVNode)(i.Z,{class:"mb-4"}),(0,n.createElementVNode)("form",{onSubmit:(0,n.withModifiers)(o,["prevent"])},[(0,n.createElementVNode)("div",null,[(0,n.createVNode)(c.Z,{for:"email",value:"Email"}),(0,n.createVNode)(u.Z,{id:"email",modelValue:(0,n.unref)(t).email,"onUpdate:modelValue":v[0]||(v[0]=function(e){return(0,n.unref)(t).email=e}),type:"email",class:"mt-1 block w-full",required:"",autofocus:""},null,8,["modelValue"])]),(0,n.createElementVNode)("div",p,[(0,n.createVNode)(s.Z,{class:(0,n.normalizeClass)({"opacity-25":(0,n.unref)(t).processing}),disabled:(0,n.unref)(t).processing},{default:(0,n.withCtx)((function(){return[g]})),_:1},8,["class","disabled"])])],40,f)]})),_:1})],64)}}}}}]);