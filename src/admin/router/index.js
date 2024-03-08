import Home from "admin/pages/Home.vue";

import Options from "admin/pages/Options.vue";

import CategoryPage from "admin/pages/CategoriePage.vue";

import GuidePage from "admin/pages/GuidePage.vue";

// import GuidePageContent from "admin/pages/GuidePage.vue";

// import Menu from "admin/pages/Menu.vue";

import { createRouter, createWebHashHistory} from 'vue-router'

const router = createRouter({
  history: createWebHashHistory(),
  routes: [

    {

      path: "/",
      
      name: "Home",
      
      component: Home,
    
    },
    
    {
      
      path: "/options",
      
      name: "Options",
      
      component: Options,
    
    },
    
    {
      
      path: "/gob-categorie/:categoryId",
      
      name: "CategoryPage",
      
      component: CategoryPage,
    
    },
    
    {
      
      path: "/gob-categorie/:categoryId/gob-guides/:postId/gob-sections",
      
      name: "GuidePage",
      
      component: GuidePage,
    
    },

    // {
      
    //   path: "/gob-categorie/:categoryId/gob-guides/:postId/gob-sections/:sectionId",
      
    //   name: "GuidePageContent",
      
    //   component: GuidePageContent,
    
    // },

  ],
});

export default router;