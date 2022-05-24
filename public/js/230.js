"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[230,648],{3744:(e,t)=>{t.Z=(e,t)=>{const r=e.__vccOpts||e;for(const[e,n]of t)r[e]=n;return r}},7041:(e,t,r)=>{r.d(t,{Z:()=>a});var n=r(6598),o=["type"];const a={props:{type:{type:String,default:"submit"}},setup:function(e){return function(t,r){return(0,n.openBlock)(),(0,n.createElementBlock)("button",{type:e.type,class:"inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"},[(0,n.renderSlot)(t.$slots,"default")],8,o)}}}},6036:(e,t,r)=>{r.d(t,{Z:()=>i});var n=r(6598),o=r(7829),a={class:"md:grid md:grid-cols-3 md:gap-6"},l={class:"mt-5 md:mt-0 md:col-span-2"},s={class:"grid grid-cols-6 gap-6"},c={key:0,class:"flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md"};const i={emits:["submitted"],setup:function(e){var t=(0,n.computed)((function(){return!!(0,n.useSlots)().actions}));return function(e,r){return(0,n.openBlock)(),(0,n.createElementBlock)("div",a,[(0,n.createVNode)(o.Z,null,{title:(0,n.withCtx)((function(){return[(0,n.renderSlot)(e.$slots,"title")]})),description:(0,n.withCtx)((function(){return[(0,n.renderSlot)(e.$slots,"description")]})),_:3}),(0,n.createElementVNode)("div",l,[(0,n.createElementVNode)("form",{onSubmit:r[0]||(r[0]=(0,n.withModifiers)((function(t){return e.$emit("submitted")}),["prevent"]))},[(0,n.createElementVNode)("div",{class:(0,n.normalizeClass)(["px-4 py-5 bg-white sm:p-6 shadow",(0,n.unref)(t)?"sm:rounded-tl-md sm:rounded-tr-md":"sm:rounded-md"])},[(0,n.createElementVNode)("div",s,[(0,n.renderSlot)(e.$slots,"form")])],2),(0,n.unref)(t)?((0,n.openBlock)(),(0,n.createElementBlock)("div",c,[(0,n.renderSlot)(e.$slots,"actions")])):(0,n.createCommentVNode)("",!0)],32)])])}}}},1959:(e,t,r)=>{r.d(t,{Z:()=>a});var n=r(6598),o=["value"];const a={props:{modelValue:String,isError:Boolean},emits:["update:modelValue"],setup:function(e,t){var r=t.expose,a=(0,n.ref)(null);return(0,n.onMounted)((function(){a.value.hasAttribute("autofocus")&&a.value.focus()})),r({focus:function(){return a.value.focus()}}),function(t,r){return(0,n.openBlock)(),(0,n.createElementBlock)("input",{ref_key:"input",ref:a,class:(0,n.normalizeClass)("".concat(e.isError?"border-red-300":"border-gray-300"," rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50")),value:e.modelValue,onInput:r[0]||(r[0]=function(e){return t.$emit("update:modelValue",e.target.value)})},null,42,o)}}}},604:(e,t,r)=>{r.d(t,{Z:()=>a});var n=r(6598),o={class:"text-sm text-red-600"};const a={props:{message:String},setup:function(e){return function(t,r){return(0,n.withDirectives)(((0,n.openBlock)(),(0,n.createElementBlock)("div",null,[(0,n.createElementVNode)("p",o,(0,n.toDisplayString)(e.message),1)],512)),[[n.vShow,e.message]])}}}},7088:(e,t,r)=>{r.d(t,{Z:()=>s});var n=r(6598),o={class:"block font-medium text-sm text-gray-700"},a={key:0},l={key:1};const s={props:{value:String},setup:function(e){return function(t,r){return(0,n.openBlock)(),(0,n.createElementBlock)("label",o,[e.value?((0,n.openBlock)(),(0,n.createElementBlock)("span",a,(0,n.toDisplayString)(e.value),1)):((0,n.openBlock)(),(0,n.createElementBlock)("span",l,[(0,n.renderSlot)(t.$slots,"default")]))])}}}},7829:(e,t,r)=>{r.d(t,{Z:()=>u});var n=r(6598),o={class:"md:col-span-1 flex justify-between"},a={class:"px-4 sm:px-0"},l={class:"text-lg font-medium text-gray-900"},s={class:"mt-1 text-sm text-gray-600"},c={class:"px-4 sm:px-0"};const i={},u=(0,r(3744).Z)(i,[["render",function(e,t){return(0,n.openBlock)(),(0,n.createElementBlock)("div",o,[(0,n.createElementVNode)("div",a,[(0,n.createElementVNode)("h3",l,[(0,n.renderSlot)(e.$slots,"title")]),(0,n.createElementVNode)("p",s,[(0,n.renderSlot)(e.$slots,"description")])]),(0,n.createElementVNode)("div",c,[(0,n.renderSlot)(e.$slots,"aside")])])}]])},7452:(e,t,r)=>{r.d(t,{Z:()=>Pe});var n=r(6598),o=r(9680),a=r(9038),l={viewBox:"0 0 48 48",fill:"none",xmlns:"http://www.w3.org/2000/svg"},s=[(0,n.createElementVNode)("path",{d:"M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z",fill:"#6875F5"},null,-1),(0,n.createElementVNode)("path",{d:"M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z",fill:"#6875F5"},null,-1)];const c={},i=(0,r(3744).Z)(c,[["render",function(e,t){return(0,n.openBlock)(),(0,n.createElementBlock)("svg",l,s)}]]);var u={class:"max-w-screen-xl mx-auto py-2 px-3 sm:px-6 lg:px-8"},d={class:"flex items-center justify-between flex-wrap"},m={class:"w-0 flex-1 flex items-center min-w-0"},p={key:0,class:"h-5 w-5 text-white",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24",stroke:"currentColor"},f=[(0,n.createElementVNode)("path",{"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"},null,-1)],g={key:1,class:"h-5 w-5 text-white",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24",stroke:"currentColor"},h=[(0,n.createElementVNode)("path",{"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"},null,-1)],x={class:"ml-3 font-medium text-sm text-white truncate"},v={class:"shrink-0 sm:ml-3"},k=[(0,n.createElementVNode)("svg",{class:"h-5 w-5 text-white",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24",stroke:"currentColor"},[(0,n.createElementVNode)("path",{"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M6 18L18 6M6 6l12 12"})],-1)];const b={setup:function(e){var t=(0,n.ref)(!0),r=(0,n.computed)((function(){var e;return(null===(e=(0,a.qt)().props.value.jetstream.flash)||void 0===e?void 0:e.bannerStyle)||"success"})),o=(0,n.computed)((function(){var e;return(null===(e=(0,a.qt)().props.value.jetstream.flash)||void 0===e?void 0:e.banner)||""}));return function(e,a){return(0,n.openBlock)(),(0,n.createElementBlock)("div",null,[t.value&&(0,n.unref)(o)?((0,n.openBlock)(),(0,n.createElementBlock)("div",{key:0,class:(0,n.normalizeClass)({"bg-indigo-500":"success"==(0,n.unref)(r),"bg-red-700":"danger"==(0,n.unref)(r)})},[(0,n.createElementVNode)("div",u,[(0,n.createElementVNode)("div",d,[(0,n.createElementVNode)("div",m,[(0,n.createElementVNode)("span",{class:(0,n.normalizeClass)(["flex p-2 rounded-lg",{"bg-indigo-600":"success"==(0,n.unref)(r),"bg-red-600":"danger"==(0,n.unref)(r)}])},["success"==(0,n.unref)(r)?((0,n.openBlock)(),(0,n.createElementBlock)("svg",p,f)):(0,n.createCommentVNode)("",!0),"danger"==(0,n.unref)(r)?((0,n.openBlock)(),(0,n.createElementBlock)("svg",g,h)):(0,n.createCommentVNode)("",!0)],2),(0,n.createElementVNode)("p",x,(0,n.toDisplayString)((0,n.unref)(o)),1)]),(0,n.createElementVNode)("div",v,[(0,n.createElementVNode)("button",{type:"button",class:(0,n.normalizeClass)(["-mr-1 flex p-2 rounded-md focus:outline-none sm:-mr-2 transition",{"hover:bg-indigo-600 focus:bg-indigo-600":"success"==(0,n.unref)(r),"hover:bg-red-600 focus:bg-red-600":"danger"==(0,n.unref)(r)}]),"aria-label":"Dismiss",onClick:a[0]||(a[0]=(0,n.withModifiers)((function(e){return t.value=!1}),["prevent"]))},k,2)])])])],2)):(0,n.createCommentVNode)("",!0)])}}};var V={class:"relative"};const y={props:{align:{type:String,default:"right"},width:{type:String,default:"48"},contentClasses:{type:Array,default:function(){return["py-1","bg-white"]}}},setup:function(e){var t=e,r=(0,n.ref)(!1),o=function(e){r.value&&"Escape"===e.key&&(r.value=!1)};(0,n.onMounted)((function(){return document.addEventListener("keydown",o)})),(0,n.onUnmounted)((function(){return document.removeEventListener("keydown",o)}));var a=(0,n.computed)((function(){return{48:"w-48"}[t.width.toString()]})),l=(0,n.computed)((function(){return"left"===t.align?"origin-top-left left-0":"right"===t.align?"origin-top-right right-0":"origin-top"}));return function(t,o){return(0,n.openBlock)(),(0,n.createElementBlock)("div",V,[(0,n.createElementVNode)("div",{onClick:o[0]||(o[0]=function(e){return(0,n.isRef)(r)?r.value=!(0,n.unref)(r):r=!(0,n.unref)(r)})},[(0,n.renderSlot)(t.$slots,"trigger")]),(0,n.withDirectives)((0,n.createElementVNode)("div",{class:"fixed inset-0 z-40",onClick:o[1]||(o[1]=function(e){return(0,n.isRef)(r)?r.value=!1:r=!1})},null,512),[[n.vShow,(0,n.unref)(r)]]),(0,n.createVNode)(n.Transition,{"enter-active-class":"transition ease-out duration-200","enter-from-class":"transform opacity-0 scale-95","enter-to-class":"transform opacity-100 scale-100","leave-active-class":"transition ease-in duration-75","leave-from-class":"transform opacity-100 scale-100","leave-to-class":"transform opacity-0 scale-95"},{default:(0,n.withCtx)((function(){return[(0,n.withDirectives)((0,n.createElementVNode)("div",{class:(0,n.normalizeClass)(["absolute z-50 mt-2 rounded-md shadow-lg",[(0,n.unref)(a),(0,n.unref)(l)]]),style:{display:"none"},onClick:o[2]||(o[2]=function(e){return(0,n.isRef)(r)?r.value=!1:r=!1})},[(0,n.createElementVNode)("div",{class:(0,n.normalizeClass)(["rounded-md ring-1 ring-black ring-opacity-5",e.contentClasses])},[(0,n.renderSlot)(t.$slots,"content")],2)],2),[[n.vShow,(0,n.unref)(r)]])]})),_:3})])}}};var N={key:0,type:"submit",class:"block w-full px-4 py-2 text-sm leading-5 text-gray-700 text-left hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition"},w=["href"];const E={props:{href:String,as:String},setup:function(e){return function(t,r){return(0,n.openBlock)(),(0,n.createElementBlock)("div",null,["button"==e.as?((0,n.openBlock)(),(0,n.createElementBlock)("button",N,[(0,n.renderSlot)(t.$slots,"default")])):"a"==e.as?((0,n.openBlock)(),(0,n.createElementBlock)("a",{key:1,href:e.href,class:"block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition"},[(0,n.renderSlot)(t.$slots,"default")],8,w)):((0,n.openBlock)(),(0,n.createBlock)((0,n.unref)(a.rU),{key:2,href:e.href,class:"block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition"},{default:(0,n.withCtx)((function(){return[(0,n.renderSlot)(t.$slots,"default")]})),_:3},8,["href"]))])}}},B={props:{href:String,active:Boolean},setup:function(e){var t=e,r=(0,n.computed)((function(){return t.active?"inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition":"inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition"}));return function(t,o){return(0,n.openBlock)(),(0,n.createBlock)((0,n.unref)(a.rU),{href:e.href,class:(0,n.normalizeClass)((0,n.unref)(r))},{default:(0,n.withCtx)((function(){return[(0,n.renderSlot)(t.$slots,"default")]})),_:3},8,["href","class"])}}},C={props:{active:Boolean,href:String,as:String},setup:function(e){var t=e,r=(0,n.computed)((function(){return t.active?"block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition":"block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition"}));return function(t,o){return(0,n.openBlock)(),(0,n.createElementBlock)("div",null,["button"==e.as?((0,n.openBlock)(),(0,n.createElementBlock)("button",{key:0,class:(0,n.normalizeClass)([(0,n.unref)(r),"w-full text-left"])},[(0,n.renderSlot)(t.$slots,"default")],2)):((0,n.openBlock)(),(0,n.createBlock)((0,n.unref)(a.rU),{key:1,href:e.href,class:(0,n.normalizeClass)((0,n.unref)(r))},{default:(0,n.withCtx)((function(){return[(0,n.renderSlot)(t.$slots,"default")]})),_:3},8,["href","class"]))])}}};var S={class:"min-h-screen bg-gray-100"},$={class:"bg-white border-b border-gray-100"},_={class:"px-4 mx-auto max-w-7xl sm:px-6 lg:px-8"},T={class:"flex justify-between h-16"},j={class:"flex"},M={class:"flex items-center shrink-0"},z={class:"hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"},D=(0,n.createTextVNode)(" Dashboard "),Z=(0,n.createTextVNode)(" Student "),F=(0,n.createTextVNode)(" Staff "),L={class:"hidden sm:flex sm:items-center sm:ml-6"},A={class:"relative ml-3"},P={class:"inline-flex rounded-md"},I={type:"button",class:"inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition bg-white border border-transparent rounded-md hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50"},U=(0,n.createElementVNode)("svg",{class:"ml-2 -mr-0.5 h-4 w-4",xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 20 20",fill:"currentColor"},[(0,n.createElementVNode)("path",{"fill-rule":"evenodd",d:"M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z","clip-rule":"evenodd"})],-1),O={class:"w-60"},R=(0,n.createElementVNode)("div",{class:"block px-4 py-2 text-xs text-gray-400"}," Manage Team ",-1),q=(0,n.createTextVNode)(" Team Settings "),G=(0,n.createTextVNode)(" Create New Team "),H=(0,n.createElementVNode)("div",{class:"border-t border-gray-100"},null,-1),J=(0,n.createElementVNode)("div",{class:"block px-4 py-2 text-xs text-gray-400"}," Switch Teams ",-1),K=["onSubmit"],Q={class:"flex items-center"},W={key:0,class:"w-5 h-5 mr-2 text-green-400",fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",stroke:"currentColor",viewBox:"0 0 24 24"},X=[(0,n.createElementVNode)("path",{d:"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"},null,-1)],Y={class:"relative ml-3"},ee={key:0,class:"flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300"},te=["src","alt"],re={key:1,class:"inline-flex rounded-md"},ne={type:"button",class:"inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none"},oe=(0,n.createElementVNode)("svg",{class:"ml-2 -mr-0.5 h-4 w-4",xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 20 20",fill:"currentColor"},[(0,n.createElementVNode)("path",{"fill-rule":"evenodd",d:"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z","clip-rule":"evenodd"})],-1),ae=(0,n.createElementVNode)("div",{class:"block px-4 py-2 text-xs text-gray-400"}," Manage Account ",-1),le=(0,n.createTextVNode)(" Profile "),se=(0,n.createTextVNode)(" API Tokens "),ce=(0,n.createElementVNode)("div",{class:"border-t border-gray-100"},null,-1),ie=["onSubmit"],ue=(0,n.createTextVNode)(" Log Out "),de={class:"flex items-center -mr-2 sm:hidden"},me={class:"w-6 h-6",stroke:"currentColor",fill:"none",viewBox:"0 0 24 24"},pe={class:"pt-2 pb-3 space-y-1"},fe=(0,n.createTextVNode)(" Dashboard "),ge=(0,n.createTextVNode)(" Student "),he=(0,n.createTextVNode)(" Staff "),xe={class:"pt-4 pb-1 border-t border-gray-200"},ve={class:"flex items-center px-4"},ke={key:0,class:"mr-3 shrink-0"},be=["src","alt"],Ve={class:"text-base font-medium text-gray-800"},ye={class:"text-sm font-medium text-gray-500"},Ne={class:"mt-3 space-y-1"},we=(0,n.createTextVNode)(" Profile "),Ee=(0,n.createTextVNode)(" API Tokens "),Be=["onSubmit"],Ce=(0,n.createTextVNode)(" Log Out "),Se=(0,n.createElementVNode)("div",{class:"border-t border-gray-200"},null,-1),$e=(0,n.createElementVNode)("div",{class:"block px-4 py-2 text-xs text-gray-400"}," Manage Team ",-1),_e=(0,n.createTextVNode)(" Team Settings "),Te=(0,n.createTextVNode)(" Create New Team "),je=(0,n.createElementVNode)("div",{class:"border-t border-gray-200"},null,-1),Me=(0,n.createElementVNode)("div",{class:"block px-4 py-2 text-xs text-gray-400"}," Switch Teams ",-1),ze=["onSubmit"],De={class:"flex items-center"},Ze={key:0,class:"w-5 h-5 mr-2 text-green-400",fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",stroke:"currentColor",viewBox:"0 0 24 24"},Fe=[(0,n.createElementVNode)("path",{d:"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"},null,-1)],Le={key:0,class:"bg-white shadow"},Ae={class:"px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8"};const Pe={props:{title:String},setup:function(e){var t=(0,n.ref)(!1),r=function(e){o.Inertia.put(route("current-team.update"),{team_id:e.id},{preserveState:!1})},l=function(){o.Inertia.post(route("logout"))};return function(o,s){return(0,n.openBlock)(),(0,n.createElementBlock)("div",null,[(0,n.createVNode)((0,n.unref)(a.Fb),{title:e.title},null,8,["title"]),(0,n.createVNode)(b),(0,n.createElementVNode)("div",S,[(0,n.createElementVNode)("nav",$,[(0,n.createElementVNode)("div",_,[(0,n.createElementVNode)("div",T,[(0,n.createElementVNode)("div",j,[(0,n.createElementVNode)("div",M,[(0,n.createVNode)((0,n.unref)(a.rU),{href:o.route("dashboard")},{default:(0,n.withCtx)((function(){return[(0,n.createVNode)(i,{class:"block w-auto h-9"})]})),_:1},8,["href"])]),(0,n.createElementVNode)("div",z,[(0,n.createVNode)(B,{href:o.route("dashboard"),active:o.route().current("dashboard")},{default:(0,n.withCtx)((function(){return[D]})),_:1},8,["href","active"]),null===o.$page.props.user.authenticatable_type?((0,n.openBlock)(),(0,n.createElementBlock)(n.Fragment,{key:0},[(0,n.createVNode)(B,{href:o.route("dashboard.student.index"),active:o.route().current("dashboard.student.index")},{default:(0,n.withCtx)((function(){return[Z]})),_:1},8,["href","active"]),(0,n.createVNode)(B,{href:o.route("dashboard.staff.index"),active:o.route().current("dashboard.staff.index")},{default:(0,n.withCtx)((function(){return[F]})),_:1},8,["href","active"])],64)):(0,n.createCommentVNode)("",!0)])]),(0,n.createElementVNode)("div",L,[(0,n.createElementVNode)("div",A,[o.$page.props.jetstream.hasTeamFeatures&&null!=o.$page.props.user.current_team?((0,n.openBlock)(),(0,n.createBlock)(y,{key:0,align:"right",width:"60"},{trigger:(0,n.withCtx)((function(){return[(0,n.createElementVNode)("span",P,[(0,n.createElementVNode)("button",I,[(0,n.createTextVNode)((0,n.toDisplayString)(o.$page.props.user.current_team.name)+" ",1),U])])]})),content:(0,n.withCtx)((function(){return[(0,n.createElementVNode)("div",O,[o.$page.props.jetstream.hasTeamFeatures?((0,n.openBlock)(),(0,n.createElementBlock)(n.Fragment,{key:0},[R,(0,n.createVNode)(E,{href:o.route("teams.show",o.$page.props.user.current_team)},{default:(0,n.withCtx)((function(){return[q]})),_:1},8,["href"]),o.$page.props.jetstream.canCreateTeams?((0,n.openBlock)(),(0,n.createBlock)(E,{key:0,href:o.route("teams.create")},{default:(0,n.withCtx)((function(){return[G]})),_:1},8,["href"])):(0,n.createCommentVNode)("",!0),H,J,((0,n.openBlock)(!0),(0,n.createElementBlock)(n.Fragment,null,(0,n.renderList)(o.$page.props.user.all_teams,(function(e){return(0,n.openBlock)(),(0,n.createElementBlock)("form",{key:e.id,onSubmit:(0,n.withModifiers)((function(t){return r(e)}),["prevent"])},[(0,n.createVNode)(E,{as:"button"},{default:(0,n.withCtx)((function(){return[(0,n.createElementVNode)("div",Q,[e.id==o.$page.props.user.current_team_id?((0,n.openBlock)(),(0,n.createElementBlock)("svg",W,X)):(0,n.createCommentVNode)("",!0),(0,n.createElementVNode)("div",null,(0,n.toDisplayString)(e.name),1)])]})),_:2},1024)],40,K)})),128))],64)):(0,n.createCommentVNode)("",!0)])]})),_:1})):(0,n.createCommentVNode)("",!0)]),(0,n.createElementVNode)("div",Y,[(0,n.createVNode)(y,{align:"right",width:"48"},{trigger:(0,n.withCtx)((function(){return[o.$page.props.jetstream.managesProfilePhotos?((0,n.openBlock)(),(0,n.createElementBlock)("button",ee,[(0,n.createElementVNode)("img",{class:"object-cover w-8 h-8 rounded-full",src:o.$page.props.user.profile_photo_url,alt:o.$page.props.user.name},null,8,te)])):((0,n.openBlock)(),(0,n.createElementBlock)("span",re,[(0,n.createElementVNode)("button",ne,[(0,n.createTextVNode)((0,n.toDisplayString)(o.$page.props.user.name)+" ",1),oe])]))]})),content:(0,n.withCtx)((function(){return[ae,(0,n.createVNode)(E,{href:o.route("profile.show")},{default:(0,n.withCtx)((function(){return[le]})),_:1},8,["href"]),o.$page.props.jetstream.hasApiFeatures?((0,n.openBlock)(),(0,n.createBlock)(E,{key:0,href:o.route("api-tokens.index")},{default:(0,n.withCtx)((function(){return[se]})),_:1},8,["href"])):(0,n.createCommentVNode)("",!0),ce,(0,n.createElementVNode)("form",{onSubmit:(0,n.withModifiers)(l,["prevent"])},[(0,n.createVNode)(E,{as:"button"},{default:(0,n.withCtx)((function(){return[ue]})),_:1})],40,ie)]})),_:1})])]),(0,n.createElementVNode)("div",de,[(0,n.createElementVNode)("button",{class:"inline-flex items-center justify-center p-2 text-gray-400 transition rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500",onClick:s[0]||(s[0]=function(e){return t.value=!t.value})},[((0,n.openBlock)(),(0,n.createElementBlock)("svg",me,[(0,n.createElementVNode)("path",{class:(0,n.normalizeClass)({hidden:t.value,"inline-flex":!t.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M4 6h16M4 12h16M4 18h16"},null,2),(0,n.createElementVNode)("path",{class:(0,n.normalizeClass)({hidden:!t.value,"inline-flex":t.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M6 18L18 6M6 6l12 12"},null,2)]))])])])]),(0,n.createElementVNode)("div",{class:(0,n.normalizeClass)([{block:t.value,hidden:!t.value},"sm:hidden"])},[(0,n.createElementVNode)("div",pe,[(0,n.createVNode)(C,{href:o.route("dashboard"),active:o.route().current("dashboard")},{default:(0,n.withCtx)((function(){return[fe]})),_:1},8,["href","active"]),null===o.$page.props.user.authenticatable_type?((0,n.openBlock)(),(0,n.createElementBlock)(n.Fragment,{key:0},[(0,n.createVNode)(C,{href:o.route("dashboard.student.index"),active:o.route().current("dashboard.student.index")},{default:(0,n.withCtx)((function(){return[ge]})),_:1},8,["href","active"]),(0,n.createVNode)(C,{href:o.route("dashboard.staff.index"),active:o.route().current("dashboard.staff.index")},{default:(0,n.withCtx)((function(){return[he]})),_:1},8,["href","active"])],64)):(0,n.createCommentVNode)("",!0)]),(0,n.createElementVNode)("div",xe,[(0,n.createElementVNode)("div",ve,[o.$page.props.jetstream.managesProfilePhotos?((0,n.openBlock)(),(0,n.createElementBlock)("div",ke,[(0,n.createElementVNode)("img",{class:"object-cover w-10 h-10 rounded-full",src:o.$page.props.user.profile_photo_url,alt:o.$page.props.user.name},null,8,be)])):(0,n.createCommentVNode)("",!0),(0,n.createElementVNode)("div",null,[(0,n.createElementVNode)("div",Ve,(0,n.toDisplayString)(o.$page.props.user.name),1),(0,n.createElementVNode)("div",ye,(0,n.toDisplayString)(o.$page.props.user.email),1)])]),(0,n.createElementVNode)("div",Ne,[(0,n.createVNode)(C,{href:o.route("profile.show"),active:o.route().current("profile.show")},{default:(0,n.withCtx)((function(){return[we]})),_:1},8,["href","active"]),o.$page.props.jetstream.hasApiFeatures?((0,n.openBlock)(),(0,n.createBlock)(C,{key:0,href:o.route("api-tokens.index"),active:o.route().current("api-tokens.index")},{default:(0,n.withCtx)((function(){return[Ee]})),_:1},8,["href","active"])):(0,n.createCommentVNode)("",!0),(0,n.createElementVNode)("form",{method:"POST",onSubmit:(0,n.withModifiers)(l,["prevent"])},[(0,n.createVNode)(C,{as:"button"},{default:(0,n.withCtx)((function(){return[Ce]})),_:1})],40,Be),o.$page.props.jetstream.hasTeamFeatures&&null!=o.$page.props.user.current_team?((0,n.openBlock)(),(0,n.createElementBlock)(n.Fragment,{key:1},[Se,$e,(0,n.createVNode)(C,{href:o.route("teams.show",o.$page.props.user.current_team),active:o.route().current("teams.show")},{default:(0,n.withCtx)((function(){return[_e]})),_:1},8,["href","active"]),o.$page.props.jetstream.canCreateTeams?((0,n.openBlock)(),(0,n.createBlock)(C,{key:0,href:o.route("teams.create"),active:o.route().current("teams.create")},{default:(0,n.withCtx)((function(){return[Te]})),_:1},8,["href","active"])):(0,n.createCommentVNode)("",!0),je,Me,((0,n.openBlock)(!0),(0,n.createElementBlock)(n.Fragment,null,(0,n.renderList)(o.$page.props.user.all_teams,(function(e){return(0,n.openBlock)(),(0,n.createElementBlock)("form",{key:e.id,onSubmit:(0,n.withModifiers)((function(t){return r(e)}),["prevent"])},[(0,n.createVNode)(C,{as:"button"},{default:(0,n.withCtx)((function(){return[(0,n.createElementVNode)("div",De,[e.id==o.$page.props.user.current_team_id?((0,n.openBlock)(),(0,n.createElementBlock)("svg",Ze,Fe)):(0,n.createCommentVNode)("",!0),(0,n.createElementVNode)("div",null,(0,n.toDisplayString)(e.name),1)])]})),_:2},1024)],40,ze)})),128))],64)):(0,n.createCommentVNode)("",!0)])])],2)]),o.$slots.header?((0,n.openBlock)(),(0,n.createElementBlock)("header",Le,[(0,n.createElementVNode)("div",Ae,[(0,n.renderSlot)(o.$slots,"header")])])):(0,n.createCommentVNode)("",!0),(0,n.createElementVNode)("main",null,[(0,n.renderSlot)(o.$slots,"default")])])])}}}},9230:(e,t,r)=>{r.r(t),r.d(t,{default:()=>c});var n=r(6598),o=r(7452),a=r(8648),l=(0,n.createElementVNode)("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Create Team ",-1),s={class:"max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"};const c={setup:function(e){return function(e,t){return(0,n.openBlock)(),(0,n.createBlock)(o.Z,{title:"Create Team"},{header:(0,n.withCtx)((function(){return[l]})),default:(0,n.withCtx)((function(){return[(0,n.createElementVNode)("div",null,[(0,n.createElementVNode)("div",s,[(0,n.createVNode)(a.default)])])]})),_:1})}}}},8648:(e,t,r)=>{r.r(t),r.d(t,{default:()=>k});var n=r(6598),o=r(9038),a=r(7041),l=r(6036),s=r(1959),c=r(604),i=r(7088),u=(0,n.createTextVNode)(" Team Details "),d=(0,n.createTextVNode)(" Create a new team to collaborate with others on projects. "),m={class:"col-span-6"},p={class:"flex items-center mt-2"},f=["src","alt"],g={class:"ml-4 leading-tight"},h={class:"text-sm text-gray-700"},x={class:"col-span-6 sm:col-span-4"},v=(0,n.createTextVNode)(" Create ");const k={setup:function(e){var t=(0,o.cI)({name:""}),r=function(){t.post(route("teams.store"),{errorBag:"createTeam",preserveScroll:!0})};return function(e,o){return(0,n.openBlock)(),(0,n.createBlock)(l.Z,{onSubmitted:r},{title:(0,n.withCtx)((function(){return[u]})),description:(0,n.withCtx)((function(){return[d]})),form:(0,n.withCtx)((function(){return[(0,n.createElementVNode)("div",m,[(0,n.createVNode)(i.Z,{value:"Team Owner"}),(0,n.createElementVNode)("div",p,[(0,n.createElementVNode)("img",{class:"object-cover w-12 h-12 rounded-full",src:e.$page.props.user.profile_photo_url,alt:e.$page.props.user.name},null,8,f),(0,n.createElementVNode)("div",g,[(0,n.createElementVNode)("div",null,(0,n.toDisplayString)(e.$page.props.user.name),1),(0,n.createElementVNode)("div",h,(0,n.toDisplayString)(e.$page.props.user.email),1)])])]),(0,n.createElementVNode)("div",x,[(0,n.createVNode)(i.Z,{for:"name",value:"Team Name"}),(0,n.createVNode)(s.Z,{id:"name",modelValue:(0,n.unref)(t).name,"onUpdate:modelValue":o[0]||(o[0]=function(e){return(0,n.unref)(t).name=e}),type:"text",class:"block w-full mt-1",autofocus:""},null,8,["modelValue"]),(0,n.createVNode)(c.Z,{message:(0,n.unref)(t).errors.name,class:"mt-2"},null,8,["message"])])]})),actions:(0,n.withCtx)((function(){return[(0,n.createVNode)(a.Z,{class:(0,n.normalizeClass)({"opacity-25":(0,n.unref)(t).processing}),disabled:(0,n.unref)(t).processing},{default:(0,n.withCtx)((function(){return[v]})),_:1},8,["class","disabled"])]})),_:1})}}}}}]);