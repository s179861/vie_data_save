<?php

/* ::weather.html.twig */
class __TwigTemplate_2b2b14a1dabc5a983637f9eddda7ef65108809834c2dce92de051e9ea2898cee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0330c2a3975073e03b5aa412aac381541d80a622c7fd8d44e55a57553e6a7e06 = $this->env->getExtension("native_profiler");
        $__internal_0330c2a3975073e03b5aa412aac381541d80a622c7fd8d44e55a57553e6a7e06->enter($__internal_0330c2a3975073e03b5aa412aac381541d80a622c7fd8d44e55a57553e6a7e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::weather.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["temp"]) ? $context["temp"] : $this->getContext($context, "temp")), "html", null, true);
        echo "</h1>";
        
        $__internal_0330c2a3975073e03b5aa412aac381541d80a622c7fd8d44e55a57553e6a7e06->leave($__internal_0330c2a3975073e03b5aa412aac381541d80a622c7fd8d44e55a57553e6a7e06_prof);

    }

    public function getTemplateName()
    {
        return "::weather.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <h1>{{ temp }}</h1>*/
