<?php

/* ::person.html.twig */
class __TwigTemplate_b2684d0eaec01e3eba7ee629ccf93b7533f4ece415ab1481c3401aec17371f04 extends Twig_Template
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
        $__internal_43636e7836294a3ab0519bb6ef811f2413ab0e783051c530fb09a3af43c553c7 = $this->env->getExtension("native_profiler");
        $__internal_43636e7836294a3ab0519bb6ef811f2413ab0e783051c530fb09a3af43c553c7->enter($__internal_43636e7836294a3ab0519bb6ef811f2413ab0e783051c530fb09a3af43c553c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::person.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["personName"]) ? $context["personName"] : $this->getContext($context, "personName")), "html", null, true);
        echo "</h1>";
        
        $__internal_43636e7836294a3ab0519bb6ef811f2413ab0e783051c530fb09a3af43c553c7->leave($__internal_43636e7836294a3ab0519bb6ef811f2413ab0e783051c530fb09a3af43c553c7_prof);

    }

    public function getTemplateName()
    {
        return "::person.html.twig";
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
/* <h1>{{ personName }}</h1>*/
