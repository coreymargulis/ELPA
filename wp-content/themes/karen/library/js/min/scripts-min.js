function updateViewportDimensions(){var t=window,e=document,i=e.documentElement,a=e.getElementsByTagName("body")[0],r=t.innerWidth||i.clientWidth||a.clientWidth,n=t.innerHeight||i.clientHeight||a.clientHeight;return{width:r,height:n}}function loadGravatars(){viewport=updateViewportDimensions(),viewport.width>=768&&jQuery(".comment img[data-gravatar]").each(function(){jQuery(this).attr("src",jQuery(this).attr("data-gravatar"))})}jQuery(".shipping_tab").remove(),jQuery(".linked_product_tab").remove(),jQuery(".attribute_tab").remove(),jQuery(".variations_tab").remove(),jQuery(".advanced_tab").remove();var viewport=updateViewportDimensions(),waitForFinalEvent=function(){var t={};return function(e,i,a){a||(a="Don't call this twice without a uniqueId"),t[a]&&clearTimeout(t[a]),t[a]=setTimeout(e,i)}}(),timeToWaitForLast=100;jQuery(document).ready(function($){loadGravatars()});