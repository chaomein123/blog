<?php

/* C:\wamp64\www\d3dengineering/themes/d3d-engineering/partials/navbar.htm */
class __TwigTemplate_e41a306308e8a45ea4178c3aa5b6ad689832047e868001eea6fe8b5a142f1778 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-light sticky-top\" style=\"background-color: #eaf2e9;\">
  <img src=\"";
        // line 2
        echo $this->extensions['System\Twig\Extension']->mediaFilter("icons/uk.png");
        echo "\" class=\"flags_trans\" id=\"english_flag\" data-icon=\"en\"><img src=\"";
        echo $this->extensions['System\Twig\Extension']->mediaFilter("icons/fr.png");
        echo "\" class=\"flags_trans\" id=\"france_flag\" data-icon=\"fr\"> 
  <div class=\"container\">
      <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
        <img  src=\"";
        // line 5
        echo $this->extensions['System\Twig\Extension']->mediaFilter("Logo/d3d-logo.png");
        echo "\" height=\"55px\"; alt=\"\">
      </a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
  <span class=\"navbar-toggler-icon\"></span>
  </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
      <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item";
        // line 12
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "home")) ? (" active") : (""));
        echo "\">
          <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">HOME</a>
        </li>
        <li class=\"nav-item ";
        // line 15
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "about")) ? (" active") : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "d3d-france")) ? (" active") : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "d3d-phil")) ? (" active") : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "leco")) ? (" active") : (""))))))));
        echo " dropdown\">
          <a class=\"nav-link dropdown-toggle\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">ABOUT</a>
          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
            <a class=\"dropdown-item\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">D3D & LECO</a>
            <a class=\"dropdown-item\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("d3d-france");
        echo "\">D3D FRANCE</a>
            <a class=\"dropdown-item\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("d3d-phil");
        echo "\">D3D PHILIPPINES</a>
            <a class=\"dropdown-item\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("leco");
        echo "\">LECO</a>
          </div>
        </li>
        <li class=\"nav-item";
        // line 24
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "activities")) ? (" active") : (""));
        echo "\">
          <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("activities");
        echo "\">ACTIVITIES</a>
        </li>
        <li class=\"nav-item ";
        // line 27
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "expertise")) ? (" active") : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "ex-con")) ? (" active") : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "rev-des")) ? (" active") : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "meas-tech")) ? ("active") : (""))))))));
        echo " dropdown\">
          <a class=\"nav-link dropdown-toggle\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("expertise");
        echo "\">EXPERTISE</a>
          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
            <a class=\"dropdown-item\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("expertise");
        echo "\">OUR EXPERTISE</a>
            <a class=\"dropdown-item\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("rev-des");
        echo "\">REVERSE ENGINEERING & DESIGN 3D</a>
            <a class=\"dropdown-item\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ex-con");
        echo "\">EXPERTISE AND CONSULTING</a>
            <a class=\"dropdown-item\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("meas-tech");
        echo "\">MEASURING TECHNOLOGIES</a>
          </div>
        </li>
        <li class=\"nav-item";
        // line 36
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "project")) ? (" active") : (""));
        echo "\">
          <a class=\"nav-link\" href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("project");
        echo "\">PROJECT</a>
        </li>
        <li class=\"nav-item";
        // line 39
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "careers")) ? (" active") : (""));
        echo "\">
          <a class=\"nav-link\" href=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("careers");
        echo "\">CAREERS</a>
        </li>
        <li class=\"nav-item";
        // line 42
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "contact")) ? (" active") : (""));
        echo "\">
          <a class=\"nav-link\" href=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">CONTACT</a>
        </li>
        <form class=\"navbar-form navbar-right trans\">
            ";
        // line 46
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 47
        echo "        </form>
      </ul>
    </div>
  </div>
</nav>
<div class=\"hr\"></div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 47,  147 => 46,  141 => 43,  137 => 42,  132 => 40,  128 => 39,  123 => 37,  119 => 36,  113 => 33,  109 => 32,  105 => 31,  101 => 30,  96 => 28,  92 => 27,  87 => 25,  83 => 24,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  60 => 16,  56 => 15,  51 => 13,  47 => 12,  37 => 5,  33 => 4,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-lg navbar-light sticky-top\" style=\"background-color: #eaf2e9;\">
  <img src=\"{{'icons/uk.png'|media}}\" class=\"flags_trans\" id=\"english_flag\" data-icon=\"en\"><img src=\"{{'icons/fr.png'|media}}\" class=\"flags_trans\" id=\"france_flag\" data-icon=\"fr\"> 
  <div class=\"container\">
      <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">
        <img  src=\"{{'Logo/d3d-logo.png'|media}}\" height=\"55px\"; alt=\"\">
      </a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
  <span class=\"navbar-toggler-icon\"></span>
  </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
      <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item{{ this.page.baseFileName == 'home' ? ' active' }}\">
          <a class=\"nav-link\" href=\"{{ 'home'|page }}\">HOME</a>
        </li>
        <li class=\"nav-item {{ this.page.baseFileName == 'about' ? ' active' : this.page.baseFileName == 'd3d-france' ? ' active' : this.page.baseFileName == 'd3d-phil' ? ' active' : this.page.baseFileName == 'leco' ? ' active'}} dropdown\">
          <a class=\"nav-link dropdown-toggle\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"{{ 'about'|page }}\">ABOUT</a>
          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
            <a class=\"dropdown-item\" href=\"{{ 'about'|page }}\">D3D & LECO</a>
            <a class=\"dropdown-item\" href=\"{{ 'd3d-france'|page }}\">D3D FRANCE</a>
            <a class=\"dropdown-item\" href=\"{{ 'd3d-phil'|page }}\">D3D PHILIPPINES</a>
            <a class=\"dropdown-item\" href=\"{{ 'leco'|page }}\">LECO</a>
          </div>
        </li>
        <li class=\"nav-item{{ this.page.baseFileName == 'activities' ? ' active' }}\">
          <a class=\"nav-link\" href=\"{{ 'activities'|page }}\">ACTIVITIES</a>
        </li>
        <li class=\"nav-item {{ this.page.baseFileName == 'expertise' ? ' active': this.page.baseFileName == 'ex-con' ? ' active' : this.page.baseFileName == 'rev-des' ? ' active' : this.page.baseFileName == 'meas-tech' ? 'active'}} dropdown\">
          <a class=\"nav-link dropdown-toggle\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"{{ 'expertise'|page }}\">EXPERTISE</a>
          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
            <a class=\"dropdown-item\" href=\"{{ 'expertise'|page }}\">OUR EXPERTISE</a>
            <a class=\"dropdown-item\" href=\"{{ 'rev-des'|page }}\">REVERSE ENGINEERING & DESIGN 3D</a>
            <a class=\"dropdown-item\" href=\"{{ 'ex-con'|page }}\">EXPERTISE AND CONSULTING</a>
            <a class=\"dropdown-item\" href=\"{{ 'meas-tech'|page }}\">MEASURING TECHNOLOGIES</a>
          </div>
        </li>
        <li class=\"nav-item{{ this.page.baseFileName == 'project' ? ' active' }}\">
          <a class=\"nav-link\" href=\"{{ 'project'|page }}\">PROJECT</a>
        </li>
        <li class=\"nav-item{{ this.page.baseFileName == 'careers' ? ' active' }}\">
          <a class=\"nav-link\" href=\"{{ 'careers'|page }}\">CAREERS</a>
        </li>
        <li class=\"nav-item{{ this.page.baseFileName == 'contact' ? ' active' }}\">
          <a class=\"nav-link\" href=\"{{ 'contact'|page }}\">CONTACT</a>
        </li>
        <form class=\"navbar-form navbar-right trans\">
            {% component 'localePicker' %}
        </form>
      </ul>
    </div>
  </div>
</nav>
<div class=\"hr\"></div>", "C:\\wamp64\\www\\d3dengineering/themes/d3d-engineering/partials/navbar.htm", "");
    }
}
