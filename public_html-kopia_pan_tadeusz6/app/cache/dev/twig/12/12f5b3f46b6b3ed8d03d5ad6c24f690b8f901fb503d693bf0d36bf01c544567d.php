<?php

/* base.html.twig */
class __TwigTemplate_93162c0591a74af6b59d88207ce1f2eb4bbc79b516c0abdbaa11dc2ac6044e49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5feef5ad21d4d4ff5390adfdebf5e063bd3b9a168c36cd54d28e9bcd647318d = $this->env->getExtension("native_profiler");
        $__internal_f5feef5ad21d4d4ff5390adfdebf5e063bd3b9a168c36cd54d28e9bcd647318d->enter($__internal_f5feef5ad21d4d4ff5390adfdebf5e063bd3b9a168c36cd54d28e9bcd647318d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f5feef5ad21d4d4ff5390adfdebf5e063bd3b9a168c36cd54d28e9bcd647318d->leave($__internal_f5feef5ad21d4d4ff5390adfdebf5e063bd3b9a168c36cd54d28e9bcd647318d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7956af560980b0c39238f1aa8d2c683883e90f20535deb3edca3b6d3f676cc4 = $this->env->getExtension("native_profiler");
        $__internal_c7956af560980b0c39238f1aa8d2c683883e90f20535deb3edca3b6d3f676cc4->enter($__internal_c7956af560980b0c39238f1aa8d2c683883e90f20535deb3edca3b6d3f676cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c7956af560980b0c39238f1aa8d2c683883e90f20535deb3edca3b6d3f676cc4->leave($__internal_c7956af560980b0c39238f1aa8d2c683883e90f20535deb3edca3b6d3f676cc4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a9d9de1583bdeb80348c0d35807b77b97a0114c7ae8394d4693a5ef17408eaa = $this->env->getExtension("native_profiler");
        $__internal_2a9d9de1583bdeb80348c0d35807b77b97a0114c7ae8394d4693a5ef17408eaa->enter($__internal_2a9d9de1583bdeb80348c0d35807b77b97a0114c7ae8394d4693a5ef17408eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2a9d9de1583bdeb80348c0d35807b77b97a0114c7ae8394d4693a5ef17408eaa->leave($__internal_2a9d9de1583bdeb80348c0d35807b77b97a0114c7ae8394d4693a5ef17408eaa_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_01739d713264ecc43100790cf03a2b0da24ac91c8d840200ca706988606e09c5 = $this->env->getExtension("native_profiler");
        $__internal_01739d713264ecc43100790cf03a2b0da24ac91c8d840200ca706988606e09c5->enter($__internal_01739d713264ecc43100790cf03a2b0da24ac91c8d840200ca706988606e09c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_01739d713264ecc43100790cf03a2b0da24ac91c8d840200ca706988606e09c5->leave($__internal_01739d713264ecc43100790cf03a2b0da24ac91c8d840200ca706988606e09c5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f257eaf34fc216c9aea260c8e5ef44d16173af901b3a9a0af4afcbd696eef29 = $this->env->getExtension("native_profiler");
        $__internal_3f257eaf34fc216c9aea260c8e5ef44d16173af901b3a9a0af4afcbd696eef29->enter($__internal_3f257eaf34fc216c9aea260c8e5ef44d16173af901b3a9a0af4afcbd696eef29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3f257eaf34fc216c9aea260c8e5ef44d16173af901b3a9a0af4afcbd696eef29->leave($__internal_3f257eaf34fc216c9aea260c8e5ef44d16173af901b3a9a0af4afcbd696eef29_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
