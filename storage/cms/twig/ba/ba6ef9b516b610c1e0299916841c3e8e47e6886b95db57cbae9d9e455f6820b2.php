<?php

/* C:\wamp64\www\d3dengineering/themes/d3d-engineering/pages/expertise.htm */
class __TwigTemplate_72dd92bfdb3a130d225d7381d4ec9e6e3d1ef2bf88edab138fa09b371fbe7dc8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-sm\">
\t\t\t<a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("rev-des");
        echo "\"><h1><b>Reverse Engineering & Design 3D</b></h1></a>
\t\t\t<p>3D Model development with PDMS...</p>
\t\t\t<a role=\"button\" class=\"btn btn-green\" title=\"D3D Engineering France\" href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("rev-des");
        echo "\"><i>Continue Reading</i></a>
\t\t</div>
\t\t<div class=\"col-sm\">
\t\t\t<a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ex-con");
        echo "\"><h1><b>Expertise and Consulting</b></h1></a>
\t\t\t<p>Listen Client’s concerns and needs.</p>
\t\t\t<p>Understand the problematic of the request...</p>
\t\t\t<a role=\"button\" class=\"btn btn-green\" title=\"D3D Engineering France\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ex-con");
        echo "\"><i>Continue Reading</i></a>
\t\t</div>
\t\t<div class=\"col-sm\">
\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("meas-tech");
        echo "\"><h1><b>Measuring Technologies</b></h1></a>
\t\t\t<p>The quality, the performance and the security are own concern, LECO with its partnership and suppliers, will always propose to their Clients the best advanced technology services.</p>
\t\t\t<a role=\"button\" class=\"btn btn-green\" title=\"D3D Engineering France\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("meas-tech");
        echo "\"><i>Continue Reading</i></a>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/pages/expertise.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  51 => 15,  45 => 12,  39 => 9,  33 => 6,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-sm\">
\t\t\t<a href=\"{{ 'rev-des'|page }}\"><h1><b>Reverse Engineering & Design 3D</b></h1></a>
\t\t\t<p>3D Model development with PDMS...</p>
\t\t\t<a role=\"button\" class=\"btn btn-green\" title=\"D3D Engineering France\" href=\"{{ 'rev-des'|page }}\"><i>Continue Reading</i></a>
\t\t</div>
\t\t<div class=\"col-sm\">
\t\t\t<a href=\"{{ 'ex-con'|page }}\"><h1><b>Expertise and Consulting</b></h1></a>
\t\t\t<p>Listen Client’s concerns and needs.</p>
\t\t\t<p>Understand the problematic of the request...</p>
\t\t\t<a role=\"button\" class=\"btn btn-green\" title=\"D3D Engineering France\" href=\"{{ 'ex-con'|page }}\"><i>Continue Reading</i></a>
\t\t</div>
\t\t<div class=\"col-sm\">
\t\t\t<a href=\"{{ 'meas-tech'|page }}\"><h1><b>Measuring Technologies</b></h1></a>
\t\t\t<p>The quality, the performance and the security are own concern, LECO with its partnership and suppliers, will always propose to their Clients the best advanced technology services.</p>
\t\t\t<a role=\"button\" class=\"btn btn-green\" title=\"D3D Engineering France\" href=\"{{ 'meas-tech'|page }}\"><i>Continue Reading</i></a>
\t\t</div>
\t</div>
</div>", "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/pages/expertise.htm", "");
    }
}
