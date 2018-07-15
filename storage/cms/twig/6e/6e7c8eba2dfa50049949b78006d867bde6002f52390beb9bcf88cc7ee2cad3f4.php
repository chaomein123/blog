<?php

/* C:\wamp64\www\d3dengineering/plugins/d3dengineering/contact/components/contactform/default.htm */
class __TwigTemplate_15a68211654ff12f4e38d1fc58cfff342e662c3bd17d72aa087fa9798f63f8db extends Twig_Template
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
        echo "<form data-request=\"onSend\">
  <div class=\"form-group\">
    <label for=\"usr\">Name:</label>
    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"name\">
  </div>
  <div class=\"form-group\">
    <label for=\"email\">Email address:</label>
    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\">
  </div>
  <div class=\"form-group\">
    <label for=\"comment\">Message:</label>
    <textarea class=\"form-control\" id=\"comment\" name=\"content\"></textarea>
  </div>
  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\d3dengineering/plugins/d3dengineering/contact/components/contactform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form data-request=\"onSend\">
  <div class=\"form-group\">
    <label for=\"usr\">Name:</label>
    <input type=\"text\" class=\"form-control\" id=\"usr\" name=\"name\">
  </div>
  <div class=\"form-group\">
    <label for=\"email\">Email address:</label>
    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\">
  </div>
  <div class=\"form-group\">
    <label for=\"comment\">Message:</label>
    <textarea class=\"form-control\" id=\"comment\" name=\"content\"></textarea>
  </div>
  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
</form>", "C:\\wamp64\\www\\d3dengineering/plugins/d3dengineering/contact/components/contactform/default.htm", "");
    }
}
