"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[97],{3744:(e,t)=>{t.Z=(e,t)=>{const r=e.__vccOpts||e;for(const[e,n]of t)r[e]=n;return r}},3206:(e,t,r)=>{r.d(t,{Z:()=>c});var n=r(6598),o={class:"min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"},a={class:"w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"};const l={},c=(0,r(3744).Z)(l,[["render",function(e,t){return(0,n.openBlock)(),(0,n.createElementBlock)("div",o,[(0,n.createElementVNode)("div",null,[(0,n.renderSlot)(e.$slots,"logo")]),(0,n.createElementVNode)("div",a,[(0,n.renderSlot)(e.$slots,"default")])])}]])},5501:(e,t,r)=>{r.d(t,{Z:()=>l});var n=r(6598),o=r(9038),a=(0,n.createElementVNode)("svg",{class:"w-16 h-16",viewBox:"0 0 48 48",fill:"none",xmlns:"http://www.w3.org/2000/svg"},[(0,n.createElementVNode)("path",{d:"M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z",fill:"#6875F5"}),(0,n.createElementVNode)("path",{d:"M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z",fill:"#6875F5"})],-1);const l={name:"AuthenticationCardLogo",setup:function(e){return function(e,t){return(0,n.openBlock)(),(0,n.createBlock)((0,n.unref)(o.rU),{href:"/"},{default:(0,n.withCtx)((function(){return[a]})),_:1})}}}},7041:(e,t,r)=>{r.d(t,{Z:()=>a});var n=r(6598),o=["type"];const a={name:"Button",props:{type:{type:String,default:"submit"}},setup:function(e){return function(t,r){return(0,n.openBlock)(),(0,n.createElementBlock)("button",{type:e.type,class:"inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"},[(0,n.renderSlot)(t.$slots,"default")],8,o)}}}},5300:(e,t,r)=>{r.d(t,{Z:()=>a});var n=r(6598),o=["value"];const a={name:"Checkbox",props:{checked:{type:[Array,Boolean],default:!1},value:{type:String,default:null}},emits:["update:checked"],setup:function(e,t){var r=t.emit,a=e,l=(0,n.computed)({get:function(){return a.checked},set:function(e){r("update:checked",e)}});return function(t,r){return(0,n.withDirectives)(((0,n.openBlock)(),(0,n.createElementBlock)("input",{"onUpdate:modelValue":r[0]||(r[0]=function(e){return(0,n.isRef)(l)?l.value=e:null}),type:"checkbox",value:e.value,class:"rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"},null,8,o)),[[n.vModelCheckbox,(0,n.unref)(l)]])}}}},1959:(e,t,r)=>{r.d(t,{Z:()=>a});var n=r(6598),o=["value"];const a={name:"Input",props:{modelValue:String,isError:Boolean},emits:["update:modelValue"],setup:function(e,t){var r=t.expose,a=(0,n.ref)(null);return(0,n.onMounted)((function(){a.value.hasAttribute("autofocus")&&a.value.focus()})),r({focus:function(){return a.value.focus()}}),function(t,r){return(0,n.openBlock)(),(0,n.createElementBlock)("input",{ref_key:"input",ref:a,class:(0,n.normalizeClass)("".concat(e.isError?"border-red-300":"border-gray-300"," rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50")),value:e.modelValue,onInput:r[0]||(r[0]=function(e){return t.$emit("update:modelValue",e.target.value)})},null,42,o)}}}},7088:(e,t,r)=>{r.d(t,{Z:()=>c});var n=r(6598),o={class:"block font-medium text-sm text-gray-700"},a={key:0},l={key:1};const c={name:"Label",props:{value:String},setup:function(e){return function(t,r){return(0,n.openBlock)(),(0,n.createElementBlock)("label",o,[e.value?((0,n.openBlock)(),(0,n.createElementBlock)("span",a,(0,n.toDisplayString)(e.value),1)):((0,n.openBlock)(),(0,n.createElementBlock)("span",l,[(0,n.renderSlot)(t.$slots,"default")]))])}}}},9470:(e,t,r)=>{r.d(t,{Z:()=>u});var n=r(6598),o=r(9038),a={key:0},l=(0,n.createElementVNode)("div",{class:"font-medium text-red-600"}," Whoops! Something went wrong. ",-1),c={class:"mt-3 list-disc list-inside text-sm text-red-600"};const u={name:"ValidationErrors",setup:function(e){var t=(0,n.computed)((function(){return(0,o.qt)().props.value.errors})),r=(0,n.computed)((function(){return Object.keys(t.value).length>0}));return function(e,o){return(0,n.unref)(r)?((0,n.openBlock)(),(0,n.createElementBlock)("div",a,[l,(0,n.createElementVNode)("ul",c,[((0,n.openBlock)(!0),(0,n.createElementBlock)(n.Fragment,null,(0,n.renderList)((0,n.unref)(t),(function(e,t){return(0,n.openBlock)(),(0,n.createElementBlock)("li",{key:t},(0,n.toDisplayString)(e),1)})),128))])])):(0,n.createCommentVNode)("",!0)}}}},97:(e,t,r)=>{r.r(t),r.d(t,{default:()=>B});var n=r(6598),o=r(9038),a=r(3206),l=r(5501),c=r(7041),u=r(1959),s=r(5300),d=r(7088),i=r(9470),m=["onSubmit"],f={class:"mt-4"},p={class:"mt-4"},g={class:"mt-4"},v={key:0,class:"mt-4"},V={class:"flex items-center"},k={class:"ml-2"},h=(0,n.createTextVNode)(" I agree to the "),w=["href"],y=(0,n.createTextVNode)(" and "),x=["href"],N={class:"flex items-center justify-end mt-4"},b=(0,n.createTextVNode)(" Already registered? "),E=(0,n.createTextVNode)(" Register ");const B={name:"Register",setup:function(e){var t=(0,o.cI)({name:"",email:"",password:"",password_confirmation:"",terms:!1}),r=function(){t.post(route("register"),{onFinish:function(){return t.reset("password","password_confirmation")}})};return function(e,B){return(0,n.openBlock)(),(0,n.createElementBlock)(n.Fragment,null,[(0,n.createVNode)((0,n.unref)(o.Fb),{title:"Register"}),(0,n.createVNode)(a.Z,null,{logo:(0,n.withCtx)((function(){return[(0,n.createVNode)(l.Z)]})),default:(0,n.withCtx)((function(){return[(0,n.createVNode)(i.Z,{class:"mb-4"}),(0,n.createElementVNode)("form",{onSubmit:(0,n.withModifiers)(r,["prevent"])},[(0,n.createElementVNode)("div",null,[(0,n.createVNode)(d.Z,{for:"name",value:"Name"}),(0,n.createVNode)(u.Z,{id:"name",modelValue:(0,n.unref)(t).name,"onUpdate:modelValue":B[0]||(B[0]=function(e){return(0,n.unref)(t).name=e}),type:"text",class:"mt-1 block w-full",required:"",autofocus:"",autocomplete:"name"},null,8,["modelValue"])]),(0,n.createElementVNode)("div",f,[(0,n.createVNode)(d.Z,{for:"email",value:"Email"}),(0,n.createVNode)(u.Z,{id:"email",modelValue:(0,n.unref)(t).email,"onUpdate:modelValue":B[1]||(B[1]=function(e){return(0,n.unref)(t).email=e}),type:"email",class:"mt-1 block w-full",required:""},null,8,["modelValue"])]),(0,n.createElementVNode)("div",p,[(0,n.createVNode)(d.Z,{for:"password",value:"Password"}),(0,n.createVNode)(u.Z,{id:"password",modelValue:(0,n.unref)(t).password,"onUpdate:modelValue":B[2]||(B[2]=function(e){return(0,n.unref)(t).password=e}),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"new-password"},null,8,["modelValue"])]),(0,n.createElementVNode)("div",g,[(0,n.createVNode)(d.Z,{for:"password_confirmation",value:"Confirm Password"}),(0,n.createVNode)(u.Z,{id:"password_confirmation",modelValue:(0,n.unref)(t).password_confirmation,"onUpdate:modelValue":B[3]||(B[3]=function(e){return(0,n.unref)(t).password_confirmation=e}),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"new-password"},null,8,["modelValue"])]),e.$page.props.jetstream.hasTermsAndPrivacyPolicyFeature?((0,n.openBlock)(),(0,n.createElementBlock)("div",v,[(0,n.createVNode)(d.Z,{for:"terms"},{default:(0,n.withCtx)((function(){return[(0,n.createElementVNode)("div",V,[(0,n.createVNode)(s.Z,{id:"terms",checked:(0,n.unref)(t).terms,"onUpdate:checked":B[4]||(B[4]=function(e){return(0,n.unref)(t).terms=e}),name:"terms"},null,8,["checked"]),(0,n.createElementVNode)("div",k,[h,(0,n.createElementVNode)("a",{target:"_blank",href:e.route("terms.show"),class:"underline text-sm text-gray-600 hover:text-gray-900"},"Terms of Service",8,w),y,(0,n.createElementVNode)("a",{target:"_blank",href:e.route("policy.show"),class:"underline text-sm text-gray-600 hover:text-gray-900"},"Privacy Policy",8,x)])])]})),_:1})])):(0,n.createCommentVNode)("",!0),(0,n.createElementVNode)("div",N,[(0,n.createVNode)((0,n.unref)(o.rU),{href:e.route("login"),class:"underline text-sm text-gray-600 hover:text-gray-900"},{default:(0,n.withCtx)((function(){return[b]})),_:1},8,["href"]),(0,n.createVNode)(c.Z,{class:(0,n.normalizeClass)(["ml-4",{"opacity-25":(0,n.unref)(t).processing}]),disabled:(0,n.unref)(t).processing},{default:(0,n.withCtx)((function(){return[E]})),_:1},8,["class","disabled"])])],40,m)]})),_:1})],64)}}}}}]);