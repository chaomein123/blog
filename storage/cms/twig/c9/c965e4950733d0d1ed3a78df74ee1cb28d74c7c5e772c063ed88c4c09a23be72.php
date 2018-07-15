<?php

/* C:\wamp64\www\d3dengineering/themes/d3d-engineering/pages/rev-des.htm */
class __TwigTemplate_4cfa288cad81e0924236e93f23912b75e71273ce9e3c7819e9661def5f092d90 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("rev-des-part"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/pages/rev-des.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'rev-des-part' %}", "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/pages/rev-des.htm", "");
    }
}
