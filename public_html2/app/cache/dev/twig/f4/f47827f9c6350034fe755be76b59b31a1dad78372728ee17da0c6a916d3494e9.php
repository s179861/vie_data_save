<?php

/* ::card.html.twig */
class __TwigTemplate_ff63bd8cac8de6888c23e049bf43dbbda64f257a0791cb32ccd3699368212eff extends Twig_Template
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
        $__internal_835030d3a3194b400a592ed316b98b85a7a2a4c65ece066f1ebbec2bc191740b = $this->env->getExtension("native_profiler");
        $__internal_835030d3a3194b400a592ed316b98b85a7a2a4c65ece066f1ebbec2bc191740b->enter($__internal_835030d3a3194b400a592ed316b98b85a7a2a4c65ece066f1ebbec2bc191740b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::card.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["firstname"]) ? $context["firstname"] : $this->getContext($context, "firstname"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["lastname"]) ? $context["lastname"] : $this->getContext($context, "lastname"))), "html", null, true);
        echo "</h1>";
        
        $__internal_835030d3a3194b400a592ed316b98b85a7a2a4c65ece066f1ebbec2bc191740b->leave($__internal_835030d3a3194b400a592ed316b98b85a7a2a4c65ece066f1ebbec2bc191740b_prof);

    }

    public function getTemplateName()
    {
        return "::card.html.twig";
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
/* <h1>{{ firstname|upper }} {{ lastname|lower }}</h1>*/
