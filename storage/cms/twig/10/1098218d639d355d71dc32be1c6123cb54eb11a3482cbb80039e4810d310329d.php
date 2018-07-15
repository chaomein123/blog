<?php

/* C:\wamp64\www\d3dengineering/themes/d3d-engineering/pages/project.htm */
class __TwigTemplate_bc555a5694d895aeff810f8bd7b864f7276b9dacb240ff41dcd4808bdf27de7c extends Twig_Template
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
        echo "<div class=\"container text-center under animated zoomInDown\">
\t<img src=\"";
        // line 2
        echo $this->extensions['System\Twig\Extension']->mediaFilter("jumbotron/4.jpg");
        echo "\" class=\"img-fluid rounded\">
    ";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("proj-en"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/pages/project.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container text-center under animated zoomInDown\">
\t<img src=\"{{'jumbotron/4.jpg'|media}}\" class=\"img-fluid rounded\">
    {% content 'proj-en' %}
</div>", "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/pages/project.htm", "");
    }
}
