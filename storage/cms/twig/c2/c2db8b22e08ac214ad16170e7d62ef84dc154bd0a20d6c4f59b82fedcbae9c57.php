<?php

/* /home/project/web/october.dev/public_html/themes/multi/pages/home.htm */
class __TwigTemplate_3658a3f795530e3b229f9db7f116b4f00676cdb6762e730aa0fbfaa87d56267b extends Twig_Template
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
        echo "<section id=\"main-slider\">
    ";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("slides"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "</section><!--/#main-slider-->
    
<section id=\"features\">
    ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("features"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "</section><!--/#features-->

<section id=\"animated-number\">
    ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("facts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "</section><!--/#animated-number-->

<section id=\"get-in-touch\">
    <div class=\"container\">
        <div class=\"section-header\">
            ";
        // line 16
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("precontact.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 17
        echo "        </div>
    </div>
</section><!--/#get-in-touch-->";
    }

    public function getTemplateName()
    {
        return "/home/project/web/october.dev/public_html/themes/multi/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  51 => 16,  44 => 11,  40 => 10,  35 => 7,  31 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <section id="main-slider">*/
/*     {% partial "slides" %}*/
/* </section><!--/#main-slider-->*/
/*     */
/* <section id="features">*/
/*     {% partial "features" %}*/
/* </section><!--/#features-->*/
/* */
/* <section id="animated-number">*/
/*     {% partial 'facts' %}*/
/* </section><!--/#animated-number-->*/
/* */
/* <section id="get-in-touch">*/
/*     <div class="container">*/
/*         <div class="section-header">*/
/*             {% content 'precontact.htm' %}*/
/*         </div>*/
/*     </div>*/
/* </section><!--/#get-in-touch-->*/
