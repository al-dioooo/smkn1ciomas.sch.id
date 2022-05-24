"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[197],{3744:(e,t)=>{t.Z=(e,t)=>{const r=e.__vccOpts||e;for(const[e,o]of t)r[e]=o;return r}},5222:(e,t,r)=>{r.d(t,{Z:()=>n});var o=r(6598),s={class:"text-sm text-gray-600"};const n={props:{on:Boolean},setup:function(e){return function(t,r){return(0,o.openBlock)(),(0,o.createElementBlock)("div",null,[(0,o.createVNode)(o.Transition,{"leave-active-class":"transition ease-in duration-1000","leave-from-class":"opacity-100","leave-to-class":"opacity-0"},{default:(0,o.withCtx)((function(){return[(0,o.withDirectives)((0,o.createElementVNode)("div",s,[(0,o.renderSlot)(t.$slots,"default")],512),[[o.vShow,e.on]])]})),_:3})])}}}},7041:(e,t,r)=>{r.d(t,{Z:()=>n});var o=r(6598),s=["type"];const n={props:{type:{type:String,default:"submit"}},setup:function(e){return function(t,r){return(0,o.openBlock)(),(0,o.createElementBlock)("button",{type:e.type,class:"inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"},[(0,o.renderSlot)(t.$slots,"default")],8,s)}}}},6036:(e,t,r)=>{r.d(t,{Z:()=>u});var o=r(6598),s=r(7829),n={class:"md:grid md:grid-cols-3 md:gap-6"},a={class:"mt-5 md:mt-0 md:col-span-2"},l={class:"grid grid-cols-6 gap-6"},c={key:0,class:"flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md"};const u={emits:["submitted"],setup:function(e){var t=(0,o.computed)((function(){return!!(0,o.useSlots)().actions}));return function(e,r){return(0,o.openBlock)(),(0,o.createElementBlock)("div",n,[(0,o.createVNode)(s.Z,null,{title:(0,o.withCtx)((function(){return[(0,o.renderSlot)(e.$slots,"title")]})),description:(0,o.withCtx)((function(){return[(0,o.renderSlot)(e.$slots,"description")]})),_:3}),(0,o.createElementVNode)("div",a,[(0,o.createElementVNode)("form",{onSubmit:r[0]||(r[0]=(0,o.withModifiers)((function(t){return e.$emit("submitted")}),["prevent"]))},[(0,o.createElementVNode)("div",{class:(0,o.normalizeClass)(["px-4 py-5 bg-white sm:p-6 shadow",(0,o.unref)(t)?"sm:rounded-tl-md sm:rounded-tr-md":"sm:rounded-md"])},[(0,o.createElementVNode)("div",l,[(0,o.renderSlot)(e.$slots,"form")])],2),(0,o.unref)(t)?((0,o.openBlock)(),(0,o.createElementBlock)("div",c,[(0,o.renderSlot)(e.$slots,"actions")])):(0,o.createCommentVNode)("",!0)],32)])])}}}},1959:(e,t,r)=>{r.d(t,{Z:()=>n});var o=r(6598),s=["value"];const n={props:{modelValue:String,isError:Boolean},emits:["update:modelValue"],setup:function(e,t){var r=t.expose,n=(0,o.ref)(null);return(0,o.onMounted)((function(){n.value.hasAttribute("autofocus")&&n.value.focus()})),r({focus:function(){return n.value.focus()}}),function(t,r){return(0,o.openBlock)(),(0,o.createElementBlock)("input",{ref_key:"input",ref:n,class:(0,o.normalizeClass)("".concat(e.isError?"border-red-300":"border-gray-300"," rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50")),value:e.modelValue,onInput:r[0]||(r[0]=function(e){return t.$emit("update:modelValue",e.target.value)})},null,42,s)}}}},604:(e,t,r)=>{r.d(t,{Z:()=>n});var o=r(6598),s={class:"text-sm text-red-600"};const n={props:{message:String},setup:function(e){return function(t,r){return(0,o.withDirectives)(((0,o.openBlock)(),(0,o.createElementBlock)("div",null,[(0,o.createElementVNode)("p",s,(0,o.toDisplayString)(e.message),1)],512)),[[o.vShow,e.message]])}}}},7088:(e,t,r)=>{r.d(t,{Z:()=>l});var o=r(6598),s={class:"block font-medium text-sm text-gray-700"},n={key:0},a={key:1};const l={props:{value:String},setup:function(e){return function(t,r){return(0,o.openBlock)(),(0,o.createElementBlock)("label",s,[e.value?((0,o.openBlock)(),(0,o.createElementBlock)("span",n,(0,o.toDisplayString)(e.value),1)):((0,o.openBlock)(),(0,o.createElementBlock)("span",a,[(0,o.renderSlot)(t.$slots,"default")]))])}}}},7829:(e,t,r)=>{r.d(t,{Z:()=>d});var o=r(6598),s={class:"md:col-span-1 flex justify-between"},n={class:"px-4 sm:px-0"},a={class:"text-lg font-medium text-gray-900"},l={class:"mt-1 text-sm text-gray-600"},c={class:"px-4 sm:px-0"};const u={},d=(0,r(3744).Z)(u,[["render",function(e,t){return(0,o.openBlock)(),(0,o.createElementBlock)("div",s,[(0,o.createElementVNode)("div",n,[(0,o.createElementVNode)("h3",a,[(0,o.renderSlot)(e.$slots,"title")]),(0,o.createElementVNode)("p",l,[(0,o.renderSlot)(e.$slots,"description")])]),(0,o.createElementVNode)("div",c,[(0,o.renderSlot)(e.$slots,"aside")])])}]])},197:(e,t,r)=>{r.r(t),r.d(t,{default:()=>V});var o=r(6598),s=r(9038),n=r(5222),a=r(7041),l=r(6036),c=r(1959),u=r(604),d=r(7088),i=(0,o.createTextVNode)(" Update Password "),p=(0,o.createTextVNode)(" Ensure your account is using a long, random password to stay secure. "),m={class:"col-span-6 sm:col-span-4"},f={class:"col-span-6 sm:col-span-4"},w={class:"col-span-6 sm:col-span-4"},v=(0,o.createTextVNode)(" Saved. "),g=(0,o.createTextVNode)(" Save ");const V={setup:function(e){var t=(0,o.ref)(null),r=(0,o.ref)(null),V=(0,s.cI)({current_password:"",password:"",password_confirmation:""}),y=function(){V.put(route("user-password.update"),{errorBag:"updatePassword",preserveScroll:!0,onSuccess:function(){return V.reset()},onError:function(){V.errors.password&&(V.reset("password","password_confirmation"),t.value.focus()),V.errors.current_password&&(V.reset("current_password"),r.value.focus())}})};return function(e,s){return(0,o.openBlock)(),(0,o.createBlock)(l.Z,{onSubmitted:y},{title:(0,o.withCtx)((function(){return[i]})),description:(0,o.withCtx)((function(){return[p]})),form:(0,o.withCtx)((function(){return[(0,o.createElementVNode)("div",m,[(0,o.createVNode)(d.Z,{for:"current_password",value:"Current Password"}),(0,o.createVNode)(c.Z,{id:"current_password",ref_key:"currentPasswordInput",ref:r,modelValue:(0,o.unref)(V).current_password,"onUpdate:modelValue":s[0]||(s[0]=function(e){return(0,o.unref)(V).current_password=e}),type:"password",class:"mt-1 block w-full",autocomplete:"current-password"},null,8,["modelValue"]),(0,o.createVNode)(u.Z,{message:(0,o.unref)(V).errors.current_password,class:"mt-2"},null,8,["message"])]),(0,o.createElementVNode)("div",f,[(0,o.createVNode)(d.Z,{for:"password",value:"New Password"}),(0,o.createVNode)(c.Z,{id:"password",ref_key:"passwordInput",ref:t,modelValue:(0,o.unref)(V).password,"onUpdate:modelValue":s[1]||(s[1]=function(e){return(0,o.unref)(V).password=e}),type:"password",class:"mt-1 block w-full",autocomplete:"new-password"},null,8,["modelValue"]),(0,o.createVNode)(u.Z,{message:(0,o.unref)(V).errors.password,class:"mt-2"},null,8,["message"])]),(0,o.createElementVNode)("div",w,[(0,o.createVNode)(d.Z,{for:"password_confirmation",value:"Confirm Password"}),(0,o.createVNode)(c.Z,{id:"password_confirmation",modelValue:(0,o.unref)(V).password_confirmation,"onUpdate:modelValue":s[2]||(s[2]=function(e){return(0,o.unref)(V).password_confirmation=e}),type:"password",class:"mt-1 block w-full",autocomplete:"new-password"},null,8,["modelValue"]),(0,o.createVNode)(u.Z,{message:(0,o.unref)(V).errors.password_confirmation,class:"mt-2"},null,8,["message"])])]})),actions:(0,o.withCtx)((function(){return[(0,o.createVNode)(n.Z,{on:(0,o.unref)(V).recentlySuccessful,class:"mr-3"},{default:(0,o.withCtx)((function(){return[v]})),_:1},8,["on"]),(0,o.createVNode)(a.Z,{class:(0,o.normalizeClass)({"opacity-25":(0,o.unref)(V).processing}),disabled:(0,o.unref)(V).processing},{default:(0,o.withCtx)((function(){return[g]})),_:1},8,["class","disabled"])]})),_:1})}}}}}]);