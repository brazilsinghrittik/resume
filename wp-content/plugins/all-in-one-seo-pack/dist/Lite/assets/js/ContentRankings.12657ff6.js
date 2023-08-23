import{z as C}from"./links.23796d97.js";import{C as x}from"./index.0eabb636.js";import{C as B}from"./Blur.8cc39c73.js";import{G as R,a as T}from"./Row.5242dafa.js";import{P}from"./PostsTable.45d6cea2.js";import{r as s,o as a,b as _,w as o,a as u,d as n,g as m,t as c,c as S,f as y}from"./vue.runtime.esm-bundler.b39e1078.js";import{_ as d}from"./_plugin-vue_export-helper.b97bdf23.js";import{C as U}from"./Index.f7bbb33f.js";import{R as L}from"./RequiredPlans.77523a56.js";import"./Caret.164d8058.js";/* empty css                                            *//* empty css                                              */import"./default-i18n.3881921e.js";import"./constants.1758f66e.js";import{L as q}from"./Statistic.169f1175.js";/* empty css                                              */import"./isArrayLikeObject.22a096cb.js";import"./numbers.c7cb4085.js";import"./WpTable.0fd0f82e.js";import"./PostTypes.9ab32454.js";import"./ScoreButton.a48abfb2.js";import"./Table.1ce53c08.js";import"./Tooltip.6979830f.js";import"./Slide.cdf6c622.js";import"./addons.afbe11a7.js";import"./upperFirst.8df5cd57.js";import"./_stringToArray.4de3b1f3.js";import"./toString.0891eb3e.js";import"./license.df046522.js";import"./_arrayEach.56a9f647.js";import"./_getAllKeys.4b428457.js";import"./_getTag.89be5fac.js";import"./vue.runtime.esm-bundler.60c71097.js";const A={setup(){return{searchStatisticsStore:C()}},components:{CoreAlert:x,CoreBlur:B,GridColumn:R,GridRow:T,PostsTable:P},data(){return{strings:{title:this.$t.__("Content Rankings",this.$td),alert:this.$t.__("The Content Rankings report provides valuable insights into the performance of your content in search results and helps you optimize your posts for better results. This report is generated on a monthly basis, covering the past 12 months leading up to the current month. By regularly reviewing this report, you can identify trends in your post rankings and make informed decisions to improve your content's visibility and ultimately increase rankings in search results.",this.$td)},defaultPages:{rows:[],totals:{page:0,pages:0,total:0}}}}},G={class:"aioseo-search-statistics-content-rankings"},N={class:"aioseo-search-statistics-content-rankings__title"};function V(e,h,g,l,t,f){const r=s("core-alert"),i=s("posts-table"),p=s("grid-column"),b=s("grid-row"),w=s("core-blur");return a(),_(w,null,{default:o(()=>[u("div",G,[n(b,null,{default:o(()=>[n(p,null,{default:o(()=>{var k,$;return[n(r,{class:"description",type:"blue","show-close":""},{default:o(()=>[m(c(t.strings.alert),1)]),_:1}),u("div",N,[u("h2",null,c(t.strings.title),1)]),n(i,{posts:(($=(k=l.searchStatisticsStore.data)==null?void 0:k.contentRankings)==null?void 0:$.paginated)||t.defaultPages,columns:["postTitle","lastUpdated","loss","drop","performance"],"show-items-per-page":"","show-table-footer":""},null,8,["posts"])]}),_:1})]),_:1})])]),_:1})}const D=d(A,[["render",V]]);const I={components:{Blur:D,Cta:U,RequiredPlans:L},data(){return{strings:{ctaButtonText:this.$t.sprintf(this.$t.__("Upgrade to %1$s and Unlock Search Statistics",this.$td),"Pro"),ctaHeader:this.$t.sprintf(this.$t.__("Search Statistics is only for licensed %1$s %2$s users.",this.$td),"AIOSEO","Pro"),ctaDescription:this.$t.__("Connect your site to Google Search Console to receive insights on how content is being discovered. Identify areas for improvement and drive traffic to your website.",this.$td),thisFeatureRequires:this.$t.__("This feature requires one of the following plans:",this.$td),feature1:this.$t.__("Search traffic insights",this.$td),feature2:this.$t.__("Track page rankings",this.$td),feature3:this.$t.__("Track keyword rankings",this.$td),feature4:this.$t.__("Speed tests for individual pages/posts",this.$td)}}}},z={class:"aioseo-search-statistics-content-rankings"};function E(e,h,g,l,t,f){const r=s("blur"),i=s("required-plans"),p=s("cta");return a(),S("div",z,[n(r),n(p,{"cta-link":e.$links.getPricingUrl("search-statistics","search-statistics-upsell","content-rankings"),"button-text":t.strings.ctaButtonText,"learn-more-link":e.$links.getUpsellUrl("search-statistics","content-rankings","home"),"feature-list":[t.strings.feature1,t.strings.feature2,t.strings.feature3,t.strings.feature4],"align-top":""},{"header-text":o(()=>[m(c(t.strings.ctaHeader),1)]),description:o(()=>[n(i,{"core-feature":["search-statistics","content-rankings"]}),m(" "+c(t.strings.ctaDescription),1)]),_:1},8,["cta-link","button-text","learn-more-link","feature-list"])])}const v=d(I,[["render",E]]),H={mixins:[q],components:{ContentRankings:v,Lite:v}},O={class:"aioseo-search-statistics-content-rankings"};function F(e,h,g,l,t,f){const r=s("content-rankings",!0),i=s("lite");return a(),S("div",O,[e.shouldShowMain("search-statistics","content-rankings")?(a(),_(r,{key:0})):y("",!0),e.shouldShowUpgrade("search-statistics","content-rankings")||e.shouldShowLite?(a(),_(i,{key:1})):y("",!0)])}const wt=d(H,[["render",F]]);export{wt as default};
