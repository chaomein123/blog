<?php

/* C:\wamp64\www\d3dengineering/themes/d3d-engineering/partials/about-slider.htm */
class __TwigTemplate_96b0b2a858b4d06283895b862924ca18b72a72a94393767f981e580e11d6e0f3 extends Twig_Template
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
        echo "<div class=\"gallery-block grid-gallery\">
    <div class=\"row\">
        <div class=\"col-md-6 col-lg-4 item\">
            <a class=\"lightbox\" href=\"";
        // line 4
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/about-02.jpg");
        echo "\">
                <img class=\"img-fluid  scale-on-hover wow zoomIn\" src=\"";
        // line 5
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/about-02.jpg");
        echo "\">
            </a>
        </div>
        <div class=\"col-md-6 col-lg-4 item\">
            <a class=\"lightbox\" href=\"";
        // line 9
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/about-01.jpg");
        echo "\">
                <img class=\"img-fluid  scale-on-hover wow zoomIn \" src=\"";
        // line 10
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/about-01.jpg");
        echo "\">
            </a>
        </div>
        <div class=\"col-md-6 col-lg-4 item\">
            <a class=\"lightbox\" href=\"";
        // line 14
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/about-03.jpg");
        echo "\">
                <img class=\"img-fluid  scale-on-hover wow zoomIn float-right\" src=\"";
        // line 15
        echo $this->extensions['System\Twig\Extension']->mediaFilter("about/about-03.jpg");
        echo "\">
            </a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/partials/about-slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  50 => 14,  43 => 10,  39 => 9,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"gallery-block grid-gallery\">
    <div class=\"row\">
        <div class=\"col-md-6 col-lg-4 item\">
            <a class=\"lightbox\" href=\"{{'about/about-02.jpg'|media}}\">
                <img class=\"img-fluid  scale-on-hover wow zoomIn\" src=\"{{'about/about-02.jpg'|media}}\">
            </a>
        </div>
        <div class=\"col-md-6 col-lg-4 item\">
            <a class=\"lightbox\" href=\"{{'about/about-01.jpg'|media}}\">
                <img class=\"img-fluid  scale-on-hover wow zoomIn \" src=\"{{'about/about-01.jpg'|media}}\">
            </a>
        </div>
        <div class=\"col-md-6 col-lg-4 item\">
            <a class=\"lightbox\" href=\"{{'about/about-03.jpg'|media}}\">
                <img class=\"img-fluid  scale-on-hover wow zoomIn float-right\" src=\"{{'about/about-03.jpg'|media}}\">
            </a>
        </div>
    </div>
</div>", "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/partials/about-slider.htm", "");
    }
}
