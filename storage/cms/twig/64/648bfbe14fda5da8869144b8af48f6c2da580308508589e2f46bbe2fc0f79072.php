<?php

/* C:\wamp64\www\d3dengineering/themes/d3d-engineering/pages/activities.htm */
class __TwigTemplate_dff3bf3fd028fad97583e3d447708e328d4c7580717c0ff1a7755078028dd424 extends Twig_Template
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
        echo "<div class=\"container activities\">
\t";
        // line 2
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("activities-en"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 3
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/pages/activities.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container activities\">
\t{% content 'activities-en' %}
</div>", "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/pages/activities.htm", "");
    }
}
