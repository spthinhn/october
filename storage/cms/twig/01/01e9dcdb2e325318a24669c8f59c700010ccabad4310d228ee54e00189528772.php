<?php

/* /home/project/web/october.dev/public_html/themes/multi/partials/meta.htm */
class __TwigTemplate_cc14e2ebd05e5500630d1224212f6ad595a96673087860726f13c5e0c1eefc00 extends Twig_Template
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
        echo "<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_keywords", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_author", array()), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Responsive Onepage HTML Template | Multi</title>
    <!-- core CSS -->
    <link href=\"";
        // line 10
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/font-awesome.min.css", 2 => "assets/css/animate.min.css", 3 => "assets/css/owl.carousel.css", 4 => "assets/css/owl.transitions.css", 5 => "assets/css/prettyPhoto.css", 6 => "assets/css/main.css", 7 => "assets/css/menu.css", 8 => "assets/css/custom.css"));
        // line 20
        echo "\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
    <script src=\"assets/js/html5shiv.js\"></script>
    <script src=\"assets/js/respond.min.js\"></script>
    <![endif]-->       
    <link rel=\"shortcut icon\" href=\"";
        // line 25
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/favicon.ico");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 26
        echo $this->env->getExtension('CMS')->themeFilter("images/ico/apple-touch-icon-144-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 27
        echo $this->env->getExtension('CMS')->themeFilter("images/ico/apple-touch-icon-114-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 28
        echo $this->env->getExtension('CMS')->themeFilter("images/ico/apple-touch-icon-72-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 29
        echo $this->env->getExtension('CMS')->themeFilter("images/ico/apple-touch-icon-57-precomposed.png");
        echo "\">
</head><!--/head-->";
    }

    public function getTemplateName()
    {
        return "/home/project/web/october.dev/public_html/themes/multi/partials/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 29,  60 => 28,  56 => 27,  52 => 26,  48 => 25,  41 => 20,  39 => 10,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8">*/
/*     <meta name="description" content="{{ this.page.meta_description }}">*/
/*     <meta name="keywords" content="{{ this.page.meta_keywords }}">*/
/*     <meta name="author" content="{{ this.page.meta_author }}">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <title>Responsive Onepage HTML Template | Multi</title>*/
/*     <!-- core CSS -->*/
/*     <link href="{{ [*/
/*             'assets/css/bootstrap.min.css',*/
/*             'assets/css/font-awesome.min.css',*/
/*             'assets/css/animate.min.css',*/
/*             'assets/css/owl.carousel.css',*/
/*             'assets/css/owl.transitions.css',*/
/*             'assets/css/prettyPhoto.css',*/
/*             'assets/css/main.css',*/
/*             'assets/css/menu.css',*/
/*             'assets/css/custom.css',*/
/*         ]|theme }}" rel="stylesheet">*/
/*     <!--[if lt IE 9]>*/
/*     <script src="assets/js/html5shiv.js"></script>*/
/*     <script src="assets/js/respond.min.js"></script>*/
/*     <![endif]-->       */
/*     <link rel="shortcut icon" href="{{ 'assets/images/ico/favicon.ico'|theme }}">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ 'images/ico/apple-touch-icon-144-precomposed.png'|theme }}">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ 'images/ico/apple-touch-icon-114-precomposed.png'|theme }}">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ 'images/ico/apple-touch-icon-72-precomposed.png'|theme }}">*/
/*     <link rel="apple-touch-icon-precomposed" href="{{ 'images/ico/apple-touch-icon-57-precomposed.png'|theme }}">*/
/* </head><!--/head-->*/
