<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b9c9d3530735de30904ec80fa2ee44458bd514f449532f5947868d0aed0709e5 extends Twig_Template
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
        $__internal_de4703a68ef0adfa825a7dc782d9b8c12ae542c18657478b294d17097e2703ff = $this->env->getExtension("native_profiler");
        $__internal_de4703a68ef0adfa825a7dc782d9b8c12ae542c18657478b294d17097e2703ff->enter($__internal_de4703a68ef0adfa825a7dc782d9b8c12ae542c18657478b294d17097e2703ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de4703a68ef0adfa825a7dc782d9b8c12ae542c18657478b294d17097e2703ff->leave($__internal_de4703a68ef0adfa825a7dc782d9b8c12ae542c18657478b294d17097e2703ff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e79fb968aaf0be05b5b43ec8d54aae4b3a08a3ebf4ede1741eb953bfaf4aa860 = $this->env->getExtension("native_profiler");
        $__internal_e79fb968aaf0be05b5b43ec8d54aae4b3a08a3ebf4ede1741eb953bfaf4aa860->enter($__internal_e79fb968aaf0be05b5b43ec8d54aae4b3a08a3ebf4ede1741eb953bfaf4aa860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e79fb968aaf0be05b5b43ec8d54aae4b3a08a3ebf4ede1741eb953bfaf4aa860->leave($__internal_e79fb968aaf0be05b5b43ec8d54aae4b3a08a3ebf4ede1741eb953bfaf4aa860_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1113737a38c70f1a4db02a777b53d31af850c2ba9635b4a0878577dc2c0b873b = $this->env->getExtension("native_profiler");
        $__internal_1113737a38c70f1a4db02a777b53d31af850c2ba9635b4a0878577dc2c0b873b->enter($__internal_1113737a38c70f1a4db02a777b53d31af850c2ba9635b4a0878577dc2c0b873b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1113737a38c70f1a4db02a777b53d31af850c2ba9635b4a0878577dc2c0b873b->leave($__internal_1113737a38c70f1a4db02a777b53d31af850c2ba9635b4a0878577dc2c0b873b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d4a11cfb76e7d288d56a204e485f01f0769cc3143b7f0b329780b652ecb658e = $this->env->getExtension("native_profiler");
        $__internal_8d4a11cfb76e7d288d56a204e485f01f0769cc3143b7f0b329780b652ecb658e->enter($__internal_8d4a11cfb76e7d288d56a204e485f01f0769cc3143b7f0b329780b652ecb658e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8d4a11cfb76e7d288d56a204e485f01f0769cc3143b7f0b329780b652ecb658e->leave($__internal_8d4a11cfb76e7d288d56a204e485f01f0769cc3143b7f0b329780b652ecb658e_prof);

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
