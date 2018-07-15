<?php

/* C:\wamp64\www\d3dengineering/themes/d3d-engineering/partials/jumbotron.htm */
class __TwigTemplate_bbb72a65f31deeee62778236112914c6b039632ff07e994b279bdf4bd9c3305f extends Twig_Template
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
        $context['__placeholder_jumbotron_default_contents'] = null;        ob_start();        // line 2
        echo "<div class=\"container-fluid mt-3\">
    <div id=\"carouselExample\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"9000\">
        <div class=\"carousel-inner row w-100 mx-auto\" role=\"listbox\">
            <div class=\"carousel-item col-md-3  active\">
               <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <a href=\"#\" title=\"image 1\" class=\"thumb\">
                      <img class=\"img-fluid mx-auto d-block\" src=\"";
        // line 9
        echo $this->extensions['System\Twig\Extension']->mediaFilter("jumbotron/1.jpg");
        echo "\" alt=\"slide 1\">
                    </a>
                  </div>
                </div>
            </div>
            <div class=\"carousel-item col-md-3 \">
               <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <a href=\"#\" title=\"image 3\" class=\"thumb\">
                     <img class=\"img-fluid mx-auto d-block\" src=\"";
        // line 18
        echo $this->extensions['System\Twig\Extension']->mediaFilter("jumbotron/2.jpg");
        echo "\" alt=\"slide 2\">
                    </a>
                  </div>
                </div>
            </div>
            <div class=\"carousel-item col-md-3 \">
               <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <a href=\"#\" title=\"image 4\" class=\"thumb\">
                     <img class=\"img-fluid mx-auto d-block\" src=\"";
        // line 27
        echo $this->extensions['System\Twig\Extension']->mediaFilter("jumbotron/3.jpg");
        echo "\" alt=\"slide 3\">
                    </a>
                  </div>
                </div>
            </div>
            <div class=\"carousel-item col-md-3 \">
                <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <a href=\"#\" title=\"image 5\" class=\"thumb\">
                     <img class=\"img-fluid mx-auto d-block\" src=\"";
        // line 36
        echo $this->extensions['System\Twig\Extension']->mediaFilter("jumbotron/4.jpg");
        echo "\" alt=\"slide 4\">
                    </a>
                  </div>
                </div>
            </div>
            <div class=\"carousel-item col-md-3 \">
                <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <a href=\"#\" title=\"image 5\" class=\"thumb\">
                     <img class=\"img-fluid mx-auto d-block\" src=\"";
        // line 45
        echo $this->extensions['System\Twig\Extension']->mediaFilter("jumbotron/6.jpg");
        echo "\" alt=\"slide 4\">
                    </a>
                  </div>
                </div>
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExample\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next text-faded\" href=\"#carouselExample\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
</div>
";
        $context['__placeholder_jumbotron_default_contents'] = ob_get_clean();        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('jumbotron', $context['__placeholder_jumbotron_default_contents']);
        unset($context['__placeholder_jumbotron_default_contents']);    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/partials/jumbotron.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 1,  81 => 45,  69 => 36,  57 => 27,  45 => 18,  33 => 9,  24 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% placeholder jumbotron default %}
<div class=\"container-fluid mt-3\">
    <div id=\"carouselExample\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"9000\">
        <div class=\"carousel-inner row w-100 mx-auto\" role=\"listbox\">
            <div class=\"carousel-item col-md-3  active\">
               <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <a href=\"#\" title=\"image 1\" class=\"thumb\">
                      <img class=\"img-fluid mx-auto d-block\" src=\"{{'jumbotron/1.jpg'|media}}\" alt=\"slide 1\">
                    </a>
                  </div>
                </div>
            </div>
            <div class=\"carousel-item col-md-3 \">
               <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <a href=\"#\" title=\"image 3\" class=\"thumb\">
                     <img class=\"img-fluid mx-auto d-block\" src=\"{{'jumbotron/2.jpg'|media}}\" alt=\"slide 2\">
                    </a>
                  </div>
                </div>
            </div>
            <div class=\"carousel-item col-md-3 \">
               <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <a href=\"#\" title=\"image 4\" class=\"thumb\">
                     <img class=\"img-fluid mx-auto d-block\" src=\"{{'jumbotron/3.jpg'|media}}\" alt=\"slide 3\">
                    </a>
                  </div>
                </div>
            </div>
            <div class=\"carousel-item col-md-3 \">
                <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <a href=\"#\" title=\"image 5\" class=\"thumb\">
                     <img class=\"img-fluid mx-auto d-block\" src=\"{{'jumbotron/4.jpg'|media}}\" alt=\"slide 4\">
                    </a>
                  </div>
                </div>
            </div>
            <div class=\"carousel-item col-md-3 \">
                <div class=\"panel panel-default\">
                  <div class=\"panel-thumbnail\">
                    <a href=\"#\" title=\"image 5\" class=\"thumb\">
                     <img class=\"img-fluid mx-auto d-block\" src=\"{{'jumbotron/6.jpg'|media}}\" alt=\"slide 4\">
                    </a>
                  </div>
                </div>
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExample\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next text-faded\" href=\"#carouselExample\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
</div>
{% endplaceholder %}", "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/partials/jumbotron.htm", "");
    }
}
