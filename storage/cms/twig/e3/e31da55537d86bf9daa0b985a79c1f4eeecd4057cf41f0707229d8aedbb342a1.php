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
                    <ul id=\"menu\">
                        <li><a href=\"/\" class=\"drop\">Accueil</a></li>

                        <li><a class=\"drop\">Services & Solutions<span class=\"caret\"></span></a><span class=\"dropdown-arrow\"></span>
                            <div class=\"dropdown_5columns\">
                                <div class=\"col_5\">
                                    <a class=\"navigationMenu\" href=\"/services-solutions/developpement-logiciel\"><h2>Développement logiciel</h2></a>
                                </div>
                                
                                <div class=\"col_1\">
                                    <a class=\"navigationMenu\" href=\"/services-solutions/developpement-logiciel/#application-mobile\">Application mobile</a>
                                </div>
                                
                                <div class=\"col_1\">
                                    <a class=\"navigationMenu\" href=\"/services-solutions/developpement-logiciel/#logiciel-dedie\">Logiciel dédié</a>
                                </div>
                                
                                <div class=\"col_1\">
                                    <a class=\"navigationMenu\" href=\"/services-solutions/developpement-logiciel/#infogerance\">Infogérance</a>
                                </div>
                                
                                <div class=\"col_1\">
                                    <a class=\"navigationMenu\" href=\"/services-solutions/developpement-logiciel/#systeme-connecte-embarque\">Système connecté & embarqué</a>
                                </div>
                                
                                <div class=\"col_5\">
                                    <a class=\"navigationMenu\" href=\"/services-solutions/realite-virtuelle/\"><h2>Réalité Virtuelle</h2></a>
                                </div>
                               
                                <div class=\"col_1\">
                                    <a class=\"navigationMenu\" href=\"/services-solutions/realite-virtuelle/#visite-3D\">Visite 3D 360°</a>
                                </div>
                                
                                <div class=\"col_1\">
                                    <a class=\"navigationMenu\" href=\"/services-solutions/realite-virtuelle/#visite-vr-temps-reel\">Visite VR temps réel</a>
                                </div>
                                
                                <div class=\"col_1\">
                                    <a class=\"navigationMenu\" href=\"/services-solutions/realite-virtuelle/#outils-conception-vr\">Outils conception VR</a>
                                </div>
                                
                                <div class=\"col_1\">
                                    <a class=\"navigationMenu\" href=\"/services-solutions/realite-virtuelle/#realite-augmentee\">Réalité Augmentée</a>
                                </div>
                                
                                <div class=\"col_5\">
                                    <a class=\"navigationMenu\" href=\"/services-solutions/ingenierie-technique-scientifique-virtuelle/\"><h2>Ingénierie Technique & Scientifique & Virtuelle</h2></a>
                                </div>
                               
                                <div class=\"col_1\">
                                    <a class=\"navigationMenu\" href=\"/services-solutions/ingenierie-technique-scientifique-virtuelle/#cao-maillage\">CAO/maillage</a>
                                </div>
                                
                                <div class=\"col_1\">
                                    <a class=\"navigationMenu\" href=\"/services-solutions/ingenierie-technique-scientifique-virtuelle/#calcul-scientifique\">Calcul scientifique</a>
                                </div>
                                
                                <div class=\"col_1\">
                                    <a class=\"navigationMenu\" href=\"/services-solutions/ingenierie-technique-scientifique-virtuelle/#hpc-codes-dedies\">HPC & Codes dédiés</a>
                                </div>
                                
                                <div class=\"col_1\">
                                    <a class=\"navigationMenu\" href=\"/services-solutions/ingenierie-technique-scientifique-virtuelle/#modelisation-avancee\">Modélisation avancée</a>
                                </div>
                            </div>
                        </li>
                        <li><a href=\"/\" class=\"drop\">Actualités</a></li>
                        <li><a href=\"/\" class=\"drop\">Contact</a></li>
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
/*                     <ul id="menu">*/
/*                         <li><a href="/" class="drop">Accueil</a></li>*/
/* */
/*                         <li><a class="drop">Services & Solutions<span class="caret"></span></a><span class="dropdown-arrow"></span>*/
/*                             <div class="dropdown_5columns">*/
/*                                 <div class="col_5">*/
/*                                     <a class="navigationMenu" href="/services-solutions/developpement-logiciel"><h2>Développement logiciel</h2></a>*/
/*                                 </div>*/
/*                                 */
/*                                 <div class="col_1">*/
/*                                     <a class="navigationMenu" href="/services-solutions/developpement-logiciel/#application-mobile">Application mobile</a>*/
/*                                 </div>*/
/*                                 */
/*                                 <div class="col_1">*/
/*                                     <a class="navigationMenu" href="/services-solutions/developpement-logiciel/#logiciel-dedie">Logiciel dédié</a>*/
/*                                 </div>*/
/*                                 */
/*                                 <div class="col_1">*/
/*                                     <a class="navigationMenu" href="/services-solutions/developpement-logiciel/#infogerance">Infogérance</a>*/
/*                                 </div>*/
/*                                 */
/*                                 <div class="col_1">*/
/*                                     <a class="navigationMenu" href="/services-solutions/developpement-logiciel/#systeme-connecte-embarque">Système connecté & embarqué</a>*/
/*                                 </div>*/
/*                                 */
/*                                 <div class="col_5">*/
/*                                     <a class="navigationMenu" href="/services-solutions/realite-virtuelle/"><h2>Réalité Virtuelle</h2></a>*/
/*                                 </div>*/
/*                                */
/*                                 <div class="col_1">*/
/*                                     <a class="navigationMenu" href="/services-solutions/realite-virtuelle/#visite-3D">Visite 3D 360°</a>*/
/*                                 </div>*/
/*                                 */
/*                                 <div class="col_1">*/
/*                                     <a class="navigationMenu" href="/services-solutions/realite-virtuelle/#visite-vr-temps-reel">Visite VR temps réel</a>*/
/*                                 </div>*/
/*                                 */
/*                                 <div class="col_1">*/
/*                                     <a class="navigationMenu" href="/services-solutions/realite-virtuelle/#outils-conception-vr">Outils conception VR</a>*/
/*                                 </div>*/
/*                                 */
/*                                 <div class="col_1">*/
/*                                     <a class="navigationMenu" href="/services-solutions/realite-virtuelle/#realite-augmentee">Réalité Augmentée</a>*/
/*                                 </div>*/
/*                                 */
/*                                 <div class="col_5">*/
/*                                     <a class="navigationMenu" href="/services-solutions/ingenierie-technique-scientifique-virtuelle/"><h2>Ingénierie Technique & Scientifique & Virtuelle</h2></a>*/
/*                                 </div>*/
/*                                */
/*                                 <div class="col_1">*/
/*                                     <a class="navigationMenu" href="/services-solutions/ingenierie-technique-scientifique-virtuelle/#cao-maillage">CAO/maillage</a>*/
/*                                 </div>*/
/*                                 */
/*                                 <div class="col_1">*/
/*                                     <a class="navigationMenu" href="/services-solutions/ingenierie-technique-scientifique-virtuelle/#calcul-scientifique">Calcul scientifique</a>*/
/*                                 </div>*/
/*                                 */
/*                                 <div class="col_1">*/
/*                                     <a class="navigationMenu" href="/services-solutions/ingenierie-technique-scientifique-virtuelle/#hpc-codes-dedies">HPC & Codes dédiés</a>*/
/*                                 </div>*/
/*                                 */
/*                                 <div class="col_1">*/
/*                                     <a class="navigationMenu" href="/services-solutions/ingenierie-technique-scientifique-virtuelle/#modelisation-avancee">Modélisation avancée</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li><a href="/" class="drop">Actualités</a></li>*/
/*                         <li><a href="/" class="drop">Contact</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div><!--/.container-->*/
/*         </nav><!--/nav-->*/
