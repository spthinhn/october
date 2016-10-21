<?php

/* /home/project/web/october.dev/public_html/themes/multi/partials/nav.htm */
class __TwigTemplate_f919c804156add73fce2aa7885b52a079dfe19c5330910d42bc6da9c11dce61f extends Twig_Template
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
        echo "<nav id=\"main-menu\" class=\"navbar navbar-default navbar-fixed-top\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#home\"><img src=\"";
        // line 10
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\" alt=\"logo\"></a>
                </div>
\t\t\t\t
                <div class=\"collapse navbar-collapse navbar-right\">
                   <ul class=\"nav navbar-nav\">
                        <li class=\" \">
                            <a href=\"\" class=\"\">Accueil</a>
                        </li>
                        <li class=\" dropdown\">
                            <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Services &amp; Solutions<span class=\"caret\"></span></a><span class=\"dropdown-arrow\"></span>
                            <ul class=\"dropdown-menu\">
                                <li class=\" \">
                                    <label>Test1</label>
                                    <a href=\"/blog\" class=\"\">Pricing Table</a>
                                    <a href=\"/blog\" class=\"\">Pricing Table</a>
                                    <a href=\"/blog\" class=\"\">Pricing Table</a>
                                </li>
                                <li class=\" \">
                                    <a href=\"/error\" class=\"\">Error Page Error Page Error Page</a>
                                </li>
                                <li class=\" \">
                                    <a href=\"/pages/shortcodes\" class=\"\">Shortcodes</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\" \">
                            <a href=\"/about-us\" class=\"\">Actualités</a>
                        </li>
                        <li class=\" \">
                            <a href=\"/contact-us\" class=\"\">Contact</a>
                        </li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->";
    }

    public function getTemplateName()
    {
        return "/home/project/web/october.dev/public_html/themes/multi/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }
}
/* <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="#home"><img src="{{ 'assets/images/logo.png'|theme }}" alt="logo"></a>*/
/*                 </div>*/
/* 				*/
/*                 <div class="collapse navbar-collapse navbar-right">*/
/*                    <ul class="nav navbar-nav">*/
/*                         <li class=" ">*/
/*                             <a href="" class="">Accueil</a>*/
/*                         </li>*/
/*                         <li class=" dropdown">*/
/*                             <a href="#" data-toggle="dropdown" class="dropdown-toggle">Services &amp; Solutions<span class="caret"></span></a><span class="dropdown-arrow"></span>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li class=" ">*/
/*                                     <label>Test1</label>*/
/*                                     <a href="/blog" class="">Pricing Table</a>*/
/*                                     <a href="/blog" class="">Pricing Table</a>*/
/*                                     <a href="/blog" class="">Pricing Table</a>*/
/*                                 </li>*/
/*                                 <li class=" ">*/
/*                                     <a href="/error" class="">Error Page Error Page Error Page</a>*/
/*                                 </li>*/
/*                                 <li class=" ">*/
/*                                     <a href="/pages/shortcodes" class="">Shortcodes</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class=" ">*/
/*                             <a href="/about-us" class="">Actualités</a>*/
/*                         </li>*/
/*                         <li class=" ">*/
/*                             <a href="/contact-us" class="">Contact</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div><!--/.container-->*/
/*         </nav><!--/nav-->*/
