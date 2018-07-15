<?php

/* C:\wamp64\www\d3dengineering/themes/d3d-engineering/partials/meas-tech-part.htm */
class __TwigTemplate_677fdcc7080726d1ffa1d29c9b7ffbf53b358b4887d15b32009890fa526d0430 extends Twig_Template
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
\t\t<a href=\"#\"><h1><b>Measuring Technologies</b></h1></a>
\t\t<p>The quality, the performance and the security are own concern, LECO with its partnership and suppliers, will always propose to their Clients the best advanced technology services.</p>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-sm\">
\t\t\t<div class=\"gallery-block grid-gallery\">
\t\t\t\t";
        // line 9
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("measuring-en"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 10
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-sm\">
\t\t\t<div class=\"gallery-block grid-gallery\">
\t\t\t    <div class=\"row\">
\t\t\t        <div class=\"col-md-4 item\">
\t\t\t            <a class=\"lightbox\" href=\"";
        // line 16
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/about-02.jpg");
        echo "\">
\t\t\t                <img class=\"img-fluid scale-on-hover wow zoomIn\" src=\"";
        // line 17
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/about-02.jpg");
        echo "\">
\t\t\t            </a>
\t\t\t        </div>
\t\t\t        <div class=\"col-md-4 item\">
\t\t\t            <a class=\"lightbox\" href=\"";
        // line 21
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/about-01.jpg");
        echo "\">
\t\t\t                <img class=\"img-fluid scale-on-hover wow zoomIn\" src=\"";
        // line 22
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/about-01.jpg");
        echo "\">
\t\t\t            </a>
\t\t\t        </div>
\t\t\t        <div class=\"col-md-4 item\">
\t\t\t            <a class=\"lightbox\" href=\"";
        // line 26
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/about-03.jpg");
        echo "\">
\t\t\t                <img class=\"img-fluid scale-on-hover wow zoomIn float-right\" src=\"";
        // line 27
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/about-03.jpg");
        echo "\">
\t\t\t            </a>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"float-right font-italic\">*Non-contractual photo*</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/partials/meas-tech-part.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 27,  67 => 26,  60 => 22,  56 => 21,  49 => 17,  45 => 16,  37 => 10,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
\t<div class=\"text-center\">
\t\t<a href=\"#\"><h1><b>Measuring Technologies</b></h1></a>
\t\t<p>The quality, the performance and the security are own concern, LECO with its partnership and suppliers, will always propose to their Clients the best advanced technology services.</p>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-sm\">
\t\t\t<div class=\"gallery-block grid-gallery\">
\t\t\t\t{% content 'measuring-en' %}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-sm\">
\t\t\t<div class=\"gallery-block grid-gallery\">
\t\t\t    <div class=\"row\">
\t\t\t        <div class=\"col-md-4 item\">
\t\t\t            <a class=\"lightbox\" href=\"{{'about/about-02.jpg'|media}}\">
\t\t\t                <img class=\"img-fluid scale-on-hover wow zoomIn\" src=\"{{'about/about-02.jpg'|media}}\">
\t\t\t            </a>
\t\t\t        </div>
\t\t\t        <div class=\"col-md-4 item\">
\t\t\t            <a class=\"lightbox\" href=\"{{'about/about-01.jpg'|media}}\">
\t\t\t                <img class=\"img-fluid scale-on-hover wow zoomIn\" src=\"{{'about/about-01.jpg'|media}}\">
\t\t\t            </a>
\t\t\t        </div>
\t\t\t        <div class=\"col-md-4 item\">
\t\t\t            <a class=\"lightbox\" href=\"{{'about/about-03.jpg'|media}}\">
\t\t\t                <img class=\"img-fluid scale-on-hover wow zoomIn float-right\" src=\"{{'about/about-03.jpg'|media}}\">
\t\t\t            </a>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    <div class=\"float-right font-italic\">*Non-contractual photo*</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/partials/meas-tech-part.htm", "");
    }
}
