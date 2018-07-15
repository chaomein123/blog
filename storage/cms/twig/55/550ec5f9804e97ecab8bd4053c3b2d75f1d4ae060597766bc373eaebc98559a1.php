<?php

/* C:\wamp64\www\d3dengineering/themes/d3d-engineering/pages/meas-tech.htm */
class __TwigTemplate_ce12899932f06b8decabe54918b06108a3f0821a9b97d6d7447a72d77d51be01 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("meas-tech-part"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/pages/meas-tech.htm";
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
        return new Twig_Source("{% partial 'meas-tech-part' %}", "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/pages/meas-tech.htm", "");
    }
}
