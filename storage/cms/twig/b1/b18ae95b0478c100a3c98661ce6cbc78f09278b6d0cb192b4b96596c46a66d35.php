<?php

/* /home/project/web/october.dev/public_html/themes/multi/partials/slides.htm */
class __TwigTemplate_3e6c2fe8cd357b5d3256449f202cf9d171a2f85e5ebffcbc94daa719ef24e3f1 extends Twig_Template
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
        echo "<div class=\"owl-carousel\">
            <div class=\"item\" style=\"background-image: url(";
        // line 2
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slider/bg1.jpg");
        echo ");\">
                <div class=\"slider-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h2><span>Multi</span> is the best Onepage html template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                    <a class=\"btn btn-primary btn-lg\" href=\"#\">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class=\"item\" style=\"background-image: url(";
        // line 17
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slider/bg2.jpg");
        echo ");\">
                <div class=\"slider-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h2>Beautifully designed <span>free</span> one page template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                    <a class=\"btn btn-primary btn-lg\" href=\"#\">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->";
    }

    public function getTemplateName()
    {
        return "/home/project/web/october.dev/public_html/themes/multi/partials/slides.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 17,  22 => 2,  19 => 1,);
    }
}
/* <div class="owl-carousel">*/
/*             <div class="item" style="background-image: url({{ 'assets/images/slider/bg1.jpg'|theme }});">*/
/*                 <div class="slider-inner">*/
/*                     <div class="container">*/
/*                         <div class="row">*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="carousel-content">*/
/*                                     <h2><span>Multi</span> is the best Onepage html template</h2>*/
/*                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>*/
/*                                     <a class="btn btn-primary btn-lg" href="#">Read More</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!--/.item-->*/
/*              <div class="item" style="background-image: url({{ 'assets/images/slider/bg2.jpg'|theme }});">*/
/*                 <div class="slider-inner">*/
/*                     <div class="container">*/
/*                         <div class="row">*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="carousel-content">*/
/*                                     <h2>Beautifully designed <span>free</span> one page template</h2>*/
/*                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>*/
/*                                     <a class="btn btn-primary btn-lg" href="#">Read More</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!--/.item-->*/
/*         </div><!--/.owl-carousel-->*/
