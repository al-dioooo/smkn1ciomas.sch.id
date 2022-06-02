"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[836],{3744:(e,t)=>{t.Z=(e,t)=>{const n=e.__vccOpts||e;for(const[e,r]of t)n[e]=r;return n}},3206:(e,t,n)=>{n.d(t,{Z:()=>a});var r=n(6598),o={class:"min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"},i={class:"w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"};const s={},a=(0,n(3744).Z)(s,[["render",function(e,t){return(0,r.openBlock)(),(0,r.createElementBlock)("div",o,[(0,r.createElementVNode)("div",null,[(0,r.renderSlot)(e.$slots,"logo")]),(0,r.createElementVNode)("div",i,[(0,r.renderSlot)(e.$slots,"default")])])}]])},5501:(e,t,n)=>{n.d(t,{Z:()=>s});var r=n(6598),o=n(9038),i=(0,r.createElementVNode)("svg",{class:"w-16 h-16",viewBox:"0 0 48 48",fill:"none",xmlns:"http://www.w3.org/2000/svg"},[(0,r.createElementVNode)("path",{d:"M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z",fill:"#6875F5"}),(0,r.createElementVNode)("path",{d:"M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z",fill:"#6875F5"})],-1);const s={name:"AuthenticationCardLogo",setup:function(e){return function(e,t){return(0,r.openBlock)(),(0,r.createBlock)((0,r.unref)(o.rU),{href:"/"},{default:(0,r.withCtx)((function(){return[i]})),_:1})}}}},7041:(e,t,n)=>{n.d(t,{Z:()=>i});var r=n(6598),o=["type"];const i={name:"Button",props:{type:{type:String,default:"submit"}},setup:function(e){return function(t,n){return(0,r.openBlock)(),(0,r.createElementBlock)("button",{type:e.type,class:"inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"},[(0,r.renderSlot)(t.$slots,"default")],8,o)}}}},7836:(e,t,n)=>{n.r(t),n.d(t,{default:()=>p});var r=n(6598),o=n(9038),i=n(3206),s=n(5501),a=n(7041),l=(0,r.createElementVNode)("div",{class:"mb-4 text-sm text-gray-600"}," Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another. ",-1),c={key:0,class:"mb-4 font-medium text-sm text-green-600"},u=["onSubmit"],d={class:"mt-4 flex items-center justify-between"},f=(0,r.createTextVNode)(" Resend Verification Email "),m=(0,r.createTextVNode)(" Log Out ");const p={name:"VerifyEmail",props:{status:String},setup:function(e){var t=e,n=(0,o.cI)(),p=function(){n.post(route("verification.send"))},g=(0,r.computed)((function(){return"verification-link-sent"===t.status}));return function(e,t){return(0,r.openBlock)(),(0,r.createElementBlock)(r.Fragment,null,[(0,r.createVNode)((0,r.unref)(o.Fb),{title:"Email Verification"}),(0,r.createVNode)(i.Z,null,{logo:(0,r.withCtx)((function(){return[(0,r.createVNode)(s.Z)]})),default:(0,r.withCtx)((function(){return[l,(0,r.unref)(g)?((0,r.openBlock)(),(0,r.createElementBlock)("div",c," A new verification link has been sent to the email address you provided during registration. ")):(0,r.createCommentVNode)("",!0),(0,r.createElementVNode)("form",{onSubmit:(0,r.withModifiers)(p,["prevent"])},[(0,r.createElementVNode)("div",d,[(0,r.createVNode)(a.Z,{class:(0,r.normalizeClass)({"opacity-25":(0,r.unref)(n).processing}),disabled:(0,r.unref)(n).processing},{default:(0,r.withCtx)((function(){return[f]})),_:1},8,["class","disabled"]),(0,r.createVNode)((0,r.unref)(o.rU),{href:e.route("logout"),method:"post",as:"button",class:"underline text-sm text-gray-600 hover:text-gray-900"},{default:(0,r.withCtx)((function(){return[m]})),_:1},8,["href"])])],40,u)]})),_:1})],64)}}}}}]);