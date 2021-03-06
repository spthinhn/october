<?php

/* /home/project/web/october.dev/public_html/themes/multi/partials/contact.htm */
class __TwigTemplate_1e37beb9ea51262a03cf053a2112600c799268ff078a058dfdee76c1189768ee extends Twig_Template
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
        echo "<div id=\"google-map\" style=\"height:650px\" data-latitude=\"52.365629\" data-longitude=\"4.871331\"></div>
        <div class=\"container-wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4 col-sm-offset-8\">
                        <div class=\"contact-form\">
                            <h3>Contact Info</h3>

                            <address>
                              <strong>Twitter, Inc.</strong><br>
                              795 Folsom Ave, Suite 600<br>
                              San Francisco, CA 94107<br>
                              <abbr title=\"Phone\">P:</abbr> (123) 456-7890
                            </address>

                            <form id=\"main-contact-form\" name=\"contact-form\" method=\"post\" action=\"#\">
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Name\" required>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"subject\" class=\"form-control\" placeholder=\"Subject\" required>
                                </div>
                                <div class=\"form-group\">
                                    <textarea name=\"message\" class=\"form-control\" rows=\"8\" placeholder=\"Message\" required></textarea>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary\">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "/home/project/web/october.dev/public_html/themes/multi/partials/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <div id="google-map" style="height:650px" data-latitude="52.365629" data-longitude="4.871331"></div>*/
/*         <div class="container-wrapper">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-4 col-sm-offset-8">*/
/*                         <div class="contact-form">*/
/*                             <h3>Contact Info</h3>*/
/* */
/*                             <address>*/
/*                               <strong>Twitter, Inc.</strong><br>*/
/*                               795 Folsom Ave, Suite 600<br>*/
/*                               San Francisco, CA 94107<br>*/
/*                               <abbr title="Phone">P:</abbr> (123) 456-7890*/
/*                             </address>*/
/* */
/*                             <form id="main-contact-form" name="contact-form" method="post" action="#">*/
/*                                 <div class="form-group">*/
/*                                     <input type="text" name="name" class="form-control" placeholder="Name" required>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <input type="email" name="email" class="form-control" placeholder="Email" required>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <input type="text" name="subject" class="form-control" placeholder="Subject" required>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>*/
/*                                 </div>*/
/*                                 <button type="submit" class="btn btn-primary">Send Message</button>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
