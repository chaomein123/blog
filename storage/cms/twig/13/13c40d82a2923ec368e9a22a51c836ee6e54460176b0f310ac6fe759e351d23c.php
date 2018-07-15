<?php

/* C:\wamp64\www\d3dengineering/themes/d3d-engineering/pages/contact.htm */
class __TwigTemplate_9e24879e335247347f63e2ef71c9dc32d05249641252b39acf698b49ac0eaa2e extends Twig_Template
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
\t<div class=\"text-center\">
\t\t<h1><b>Contact Us</b></h1>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-sm\">
\t\t\t";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("googleMap"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "\t\t</div>
\t\t<div class=\"col-sm\">
\t\t\t";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  39 => 10,  35 => 8,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
\t<div class=\"text-center\">
\t\t<h1><b>Contact Us</b></h1>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-sm\">
\t\t\t{% component 'googleMap' %}
\t\t</div>
\t\t<div class=\"col-sm\">
\t\t\t{% component 'contactForm' %}
\t\t</div>
\t</div>
</div>", "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/pages/contact.htm", "");
    }
}
