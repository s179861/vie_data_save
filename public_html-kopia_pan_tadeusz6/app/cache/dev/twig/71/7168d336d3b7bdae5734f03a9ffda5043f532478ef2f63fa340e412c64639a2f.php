<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4b943151ba0db94301f36b2159976bdea068eb32f37118873c3663a580585af9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c09f7d23fb9c55aefc09d368591f6d786981c1d8ff589758766619a3d21320aa = $this->env->getExtension("native_profiler");
        $__internal_c09f7d23fb9c55aefc09d368591f6d786981c1d8ff589758766619a3d21320aa->enter($__internal_c09f7d23fb9c55aefc09d368591f6d786981c1d8ff589758766619a3d21320aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c09f7d23fb9c55aefc09d368591f6d786981c1d8ff589758766619a3d21320aa->leave($__internal_c09f7d23fb9c55aefc09d368591f6d786981c1d8ff589758766619a3d21320aa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8270431aa05699af8e0fd0a703c970ebaf09b39829fb7300e8136b67df479ad9 = $this->env->getExtension("native_profiler");
        $__internal_8270431aa05699af8e0fd0a703c970ebaf09b39829fb7300e8136b67df479ad9->enter($__internal_8270431aa05699af8e0fd0a703c970ebaf09b39829fb7300e8136b67df479ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8270431aa05699af8e0fd0a703c970ebaf09b39829fb7300e8136b67df479ad9->leave($__internal_8270431aa05699af8e0fd0a703c970ebaf09b39829fb7300e8136b67df479ad9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_081f8a2cd165c3802c8047f60a88f48d33d324bdc455db9e0ee388719b27ca87 = $this->env->getExtension("native_profiler");
        $__internal_081f8a2cd165c3802c8047f60a88f48d33d324bdc455db9e0ee388719b27ca87->enter($__internal_081f8a2cd165c3802c8047f60a88f48d33d324bdc455db9e0ee388719b27ca87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_081f8a2cd165c3802c8047f60a88f48d33d324bdc455db9e0ee388719b27ca87->leave($__internal_081f8a2cd165c3802c8047f60a88f48d33d324bdc455db9e0ee388719b27ca87_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e01a20c57af4e0299eef2bb7464e30882f769a4009b6fe0f1669cc3918b71edc = $this->env->getExtension("native_profiler");
        $__internal_e01a20c57af4e0299eef2bb7464e30882f769a4009b6fe0f1669cc3918b71edc->enter($__internal_e01a20c57af4e0299eef2bb7464e30882f769a4009b6fe0f1669cc3918b71edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e01a20c57af4e0299eef2bb7464e30882f769a4009b6fe0f1669cc3918b71edc->leave($__internal_e01a20c57af4e0299eef2bb7464e30882f769a4009b6fe0f1669cc3918b71edc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
