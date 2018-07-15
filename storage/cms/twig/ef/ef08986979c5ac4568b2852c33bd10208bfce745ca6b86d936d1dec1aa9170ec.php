<?php

/* C:\wamp64\www\d3dengineering/themes/d3d-engineering/pages/about.htm */
class __TwigTemplate_7656936c439aca18e46b6f9dc961f22c32640f8f4c8ecbb4d031c437737dc746 extends Twig_Template
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
\t\t\t<!-- FRANCE -->
\t\t\t<h1 id=\"d3d_france\"><a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("d3d-france");
        echo "\"><b>D3D Engineering France</b></a></h1>
\t\t\t<p><b>D3D Engineering France</b> is a new company providing expertise and engineering services. We are specialized on Asset Integrity and development for existing industrial facilities.</p>
\t\t\t<a role=\"button\" class=\"btn btn-green\" title=\"D3D Engineering France\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("d3d-france");
        echo "\"><i>Continue Reading</i></a>
\t\t\t<!-- END FRANCE -->
\t\t</div>
\t\t<div class=\"col-sm\">
\t\t\t<!-- PHILIPPINES -->
\t\t\t<h1 id=\"d3d_phil\"><a href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("d3d-phil");
        echo "\"><b>D3D Engineering Philippines</b></a></h1>
\t\t\t<p>We are a team of young designers and engineers with solid experience on providing 3D models and 2D drawings for different onshore and offshore projects.</p>
\t\t\t<a role=\"button\" class=\"btn btn-green\" title=\"D3D Engineering Philippines\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("d3d-phil");
        echo "\"><i>Continue Reading</i></a>
\t\t\t<!-- END PHILIPPINES -->
\t\t</div>
\t\t<div class=\"col-sm\">
\t\t\t<!-- LECO -->
\t\t\t<a href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("leco");
        echo "\"><h1 id=\"d3d_nig\"><b>LECO</b> Louis Engineering and Construction Nigeria</h1></a>
\t\t\t<p>Will be responsible to ensure LECO Nigeria is fully registered with Nigerian Corporate Affairs and Nigerian Regulatory agencies (NNPC, DPR, VAT and others) to fully operate as a Nigerian company.</p>
\t\t\t<a role=\"button\" class=\"btn btn-green\" title=\"LECO\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("leco");
        echo "\"><i>Continue Reading</i></a>
\t\t\t<!-- END LECO -->
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 21,  55 => 19,  47 => 14,  42 => 12,  34 => 7,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-sm\">
\t\t\t<!-- FRANCE -->
\t\t\t<h1 id=\"d3d_france\"><a href=\"{{ 'd3d-france'|page }}\"><b>D3D Engineering France</b></a></h1>
\t\t\t<p><b>D3D Engineering France</b> is a new company providing expertise and engineering services. We are specialized on Asset Integrity and development for existing industrial facilities.</p>
\t\t\t<a role=\"button\" class=\"btn btn-green\" title=\"D3D Engineering France\" href=\"{{ 'd3d-france'|page }}\"><i>Continue Reading</i></a>
\t\t\t<!-- END FRANCE -->
\t\t</div>
\t\t<div class=\"col-sm\">
\t\t\t<!-- PHILIPPINES -->
\t\t\t<h1 id=\"d3d_phil\"><a href=\"{{ 'd3d-phil'|page }}\"><b>D3D Engineering Philippines</b></a></h1>
\t\t\t<p>We are a team of young designers and engineers with solid experience on providing 3D models and 2D drawings for different onshore and offshore projects.</p>
\t\t\t<a role=\"button\" class=\"btn btn-green\" title=\"D3D Engineering Philippines\" href=\"{{ 'd3d-phil'|page }}\"><i>Continue Reading</i></a>
\t\t\t<!-- END PHILIPPINES -->
\t\t</div>
\t\t<div class=\"col-sm\">
\t\t\t<!-- LECO -->
\t\t\t<a href=\"{{ 'leco'|page }}\"><h1 id=\"d3d_nig\"><b>LECO</b> Louis Engineering and Construction Nigeria</h1></a>
\t\t\t<p>Will be responsible to ensure LECO Nigeria is fully registered with Nigerian Corporate Affairs and Nigerian Regulatory agencies (NNPC, DPR, VAT and others) to fully operate as a Nigerian company.</p>
\t\t\t<a role=\"button\" class=\"btn btn-green\" title=\"LECO\" href=\"{{ 'leco'|page }}\"><i>Continue Reading</i></a>
\t\t\t<!-- END LECO -->
\t\t</div>
\t</div>
</div>", "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/pages/about.htm", "");
    }
}
