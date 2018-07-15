<?php

/* C:\wamp64\www\d3dengineering/themes/d3d-engineering/pages/leco.htm */
class __TwigTemplate_d540a620481bdb744d94bdcf516f4c868af2b67b8ba386f7f0b27c7bdbf17585 extends Twig_Template
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
    ";
        // line 2
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("d3dnig-en"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 3
        echo "\t<div class=\"gallery-block grid-gallery\">
\t\t<a class=\"lightbox\" href=\"";
        // line 4
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/leco-flow.jpg");
        echo "\">
\t\t    <img class=\"img-fluid scale-on-hover text-center animated zoomInDown \" src=\"";
        // line 5
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/leco-flow.jpg");
        echo "\" >
\t\t</a>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/pages/leco.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  33 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    {% content 'd3dnig-en' %}
\t<div class=\"gallery-block grid-gallery\">
\t\t<a class=\"lightbox\" href=\"{{'about/leco-flow.jpg'|media}}\">
\t\t    <img class=\"img-fluid scale-on-hover text-center animated zoomInDown \" src=\"{{'about/leco-flow.jpg'|media}}\" >
\t\t</a>
\t</div>
</div>", "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/pages/leco.htm", "");
    }
}
