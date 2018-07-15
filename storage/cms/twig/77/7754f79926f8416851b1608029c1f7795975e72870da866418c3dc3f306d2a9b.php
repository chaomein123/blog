<?php

/* C:\wamp64\www\d3dengineering/themes/d3d-engineering/layouts/fallback.htm */
class __TwigTemplate_a523634ba6ef4f61e080f53e810787a5d52dc008540e29f028244e3ce2e2fd94 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/layouts/fallback.htm", "");
    }
}
