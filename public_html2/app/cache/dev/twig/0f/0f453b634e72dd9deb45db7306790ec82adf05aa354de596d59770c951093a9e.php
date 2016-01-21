<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_72f32040ce0f9304984f8f37db1c7275242f50356b8c632377d13c19d3a34836 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_063a799de91239fb3ca00c1ae6750f18b3955265dab70d2de086d7912edf3ca6 = $this->env->getExtension("native_profiler");
        $__internal_063a799de91239fb3ca00c1ae6750f18b3955265dab70d2de086d7912edf3ca6->enter($__internal_063a799de91239fb3ca00c1ae6750f18b3955265dab70d2de086d7912edf3ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_063a799de91239fb3ca00c1ae6750f18b3955265dab70d2de086d7912edf3ca6->leave($__internal_063a799de91239fb3ca00c1ae6750f18b3955265dab70d2de086d7912edf3ca6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_552192fa339c5a878dc19c3569aa7c99cf1005b7843e61b12036225a81772f91 = $this->env->getExtension("native_profiler");
        $__internal_552192fa339c5a878dc19c3569aa7c99cf1005b7843e61b12036225a81772f91->enter($__internal_552192fa339c5a878dc19c3569aa7c99cf1005b7843e61b12036225a81772f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_552192fa339c5a878dc19c3569aa7c99cf1005b7843e61b12036225a81772f91->leave($__internal_552192fa339c5a878dc19c3569aa7c99cf1005b7843e61b12036225a81772f91_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9c14aeab51c8aa41531b5cd2a6c938415cd7be9f79e229ceaa2b01456e5fd31 = $this->env->getExtension("native_profiler");
        $__internal_b9c14aeab51c8aa41531b5cd2a6c938415cd7be9f79e229ceaa2b01456e5fd31->enter($__internal_b9c14aeab51c8aa41531b5cd2a6c938415cd7be9f79e229ceaa2b01456e5fd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b9c14aeab51c8aa41531b5cd2a6c938415cd7be9f79e229ceaa2b01456e5fd31->leave($__internal_b9c14aeab51c8aa41531b5cd2a6c938415cd7be9f79e229ceaa2b01456e5fd31_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_52bb6dc9e1b46f67adc14472658c746c72ceb6217b9c876f9f87136b53170f12 = $this->env->getExtension("native_profiler");
        $__internal_52bb6dc9e1b46f67adc14472658c746c72ceb6217b9c876f9f87136b53170f12->enter($__internal_52bb6dc9e1b46f67adc14472658c746c72ceb6217b9c876f9f87136b53170f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_52bb6dc9e1b46f67adc14472658c746c72ceb6217b9c876f9f87136b53170f12->leave($__internal_52bb6dc9e1b46f67adc14472658c746c72ceb6217b9c876f9f87136b53170f12_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
