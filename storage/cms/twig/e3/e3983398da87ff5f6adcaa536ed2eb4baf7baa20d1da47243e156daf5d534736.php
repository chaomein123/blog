<?php

/* C:\wamp64\www\d3dengineering/themes/d3d-engineering/pages/d3d-france.htm */
class __TwigTemplate_6e7dde445cdabec607abed00bcc91fe438763bf1c5d0c8b2470a21b9ebd97647 extends Twig_Template
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
\t<h1 id=\"d3d_france\" class=\"text-center\"><a href=\"#\"><b>D3D Engineering France</b></a></h1>
\t<div class=\"gallery-block grid-gallery\">
\t\t<a class=\"lightbox\" href=\"";
        // line 4
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/d3d-flow.jpg");
        echo "\">
\t\t    <img class=\"img-fluid scale-on-hover text-center animated zoomInDown \" src=\"";
        // line 5
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/d3d-flow.jpg");
        echo "\" >
\t\t</a>
\t</div>
    ";
        // line 8
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("d3dfrance-en"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 9
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/pages/d3d-france.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  38 => 8,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
\t<h1 id=\"d3d_france\" class=\"text-center\"><a href=\"#\"><b>D3D Engineering France</b></a></h1>
\t<div class=\"gallery-block grid-gallery\">
\t\t<a class=\"lightbox\" href=\"{{'about/d3d-flow.jpg'|media}}\">
\t\t    <img class=\"img-fluid scale-on-hover text-center animated zoomInDown \" src=\"{{'about/d3d-flow.jpg'|media}}\" >
\t\t</a>
\t</div>
    {% content 'd3dfrance-en' %}
</div>", "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/pages/d3d-france.htm", "");
    }
}
