<?php

/* /home/project/web/october.dev/public_html/themes/multi/layouts/services.htm */
class __TwigTemplate_b63779603159ed497a313502a6108365265ebac8d74c1d8892b5c1f931051653 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("meta"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "

<body id=\"home\" class=\"homepage\">

<header id=\"header\">
    ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "</header><!--/header-->
";
        // line 11
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 12
        echo "<footer id=\"footer\">
    ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "</footer><!--/#footer-->
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 17
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 19
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/mousescroll.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/smoothscroll.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.prettyPhoto.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.isotope.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.inview.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/main.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/custom.js");
        echo "\"></script>
";
        // line 27
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 28
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 29
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/project/web/october.dev/public_html/themes/multi/layouts/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 29,  105 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 14,  46 => 13,  43 => 12,  41 => 11,  38 => 10,  34 => 9,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     {% partial "meta" %}*/
/* */
/* */
/* <body id="home" class="homepage">*/
/* */
/* <header id="header">*/
/*     {% partial "nav" %}*/
/* </header><!--/header-->*/
/* {% page %}*/
/* <footer id="footer">*/
/*     {% partial "footer" %}*/
/* </footer><!--/#footer-->*/
/*     <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>*/
/*     <script type="text/javascript" src="{{ 'assets/js/jquery.js'|theme }}"></script>*/
/*     <script type="text/javascript" src="{{ 'assets/js/bootstrap.min.js'|theme }}"></script>*/
/*     <script type="text/javascript" src="{{ 'assets/js/owl.carousel.min.js'|theme }}"></script>*/
/*     <script type="text/javascript" src="{{ 'assets/js/mousescroll.js'|theme }}"></script>*/
/*     <script type="text/javascript" src="{{ 'assets/js/smoothscroll.js'|theme }}"></script>*/
/*     <script type="text/javascript" src="{{ 'assets/js/jquery.prettyPhoto.js'|theme }}"></script>*/
/*     <script type="text/javascript" src="{{ 'assets/js/jquery.isotope.min.js'|theme }}"></script>*/
/*     <script type="text/javascript" src="{{ 'assets/js/jquery.inview.min.js'|theme }}"></script>*/
/*     <script type="text/javascript" src="{{ 'assets/js/wow.min.js'|theme }}"></script>*/
/*     <script type="text/javascript" src="{{ 'assets/js/main.js'|theme }}"></script>*/
/*     <script type="text/javascript" src="{{ 'assets/js/custom.js'|theme }}"></script>*/
/* {% framework extras %}*/
/* {% scripts %}*/
/* */
/* </body>*/
/* </html>*/
