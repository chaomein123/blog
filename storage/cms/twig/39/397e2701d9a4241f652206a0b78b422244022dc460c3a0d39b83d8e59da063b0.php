<?php

/* C:\wamp64\www\d3dengineering/themes/d3d-engineering/pages/d3d-phil.htm */
class __TwigTemplate_69fdf30c083f086389a4c4a2c52d7c653eea7a1382b9a82e2220bbc83492aff2 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("d3dphil-en"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 3
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("about-slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "    ";
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("d3dphil2-en"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 5
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/pages/d3d-phil.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  35 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    {% content 'd3dphil-en' %}
    {% partial 'about-slider' %}
    {% content 'd3dphil2-en' %}
</div>", "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/pages/d3d-phil.htm", "");
    }
}
