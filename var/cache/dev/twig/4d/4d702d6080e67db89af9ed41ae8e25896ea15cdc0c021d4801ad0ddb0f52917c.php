<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ed5760694f9e6b1db70a9ba8bfcca222998d04520a657848c510cd7b2b15ea9c extends Twig_Template
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
        $__internal_17b5b164c228f33f5816d6b66967a5a45633a0fa5bc89e7be6db76be8bd26afb = $this->env->getExtension("native_profiler");
        $__internal_17b5b164c228f33f5816d6b66967a5a45633a0fa5bc89e7be6db76be8bd26afb->enter($__internal_17b5b164c228f33f5816d6b66967a5a45633a0fa5bc89e7be6db76be8bd26afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17b5b164c228f33f5816d6b66967a5a45633a0fa5bc89e7be6db76be8bd26afb->leave($__internal_17b5b164c228f33f5816d6b66967a5a45633a0fa5bc89e7be6db76be8bd26afb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c97624a60cc1bca3860d45d90c03ff20a3e89694ec83aa6f8b62c9a76c5c7e3 = $this->env->getExtension("native_profiler");
        $__internal_5c97624a60cc1bca3860d45d90c03ff20a3e89694ec83aa6f8b62c9a76c5c7e3->enter($__internal_5c97624a60cc1bca3860d45d90c03ff20a3e89694ec83aa6f8b62c9a76c5c7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5c97624a60cc1bca3860d45d90c03ff20a3e89694ec83aa6f8b62c9a76c5c7e3->leave($__internal_5c97624a60cc1bca3860d45d90c03ff20a3e89694ec83aa6f8b62c9a76c5c7e3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dec2d7623780b112ec66197e186ca56afd0dd2ee515260648a75f3d712e07f74 = $this->env->getExtension("native_profiler");
        $__internal_dec2d7623780b112ec66197e186ca56afd0dd2ee515260648a75f3d712e07f74->enter($__internal_dec2d7623780b112ec66197e186ca56afd0dd2ee515260648a75f3d712e07f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dec2d7623780b112ec66197e186ca56afd0dd2ee515260648a75f3d712e07f74->leave($__internal_dec2d7623780b112ec66197e186ca56afd0dd2ee515260648a75f3d712e07f74_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_339afaa5812cb57ff7a7fdd19f10938bf862370c12e75d4bd5d278bcdb2c09f5 = $this->env->getExtension("native_profiler");
        $__internal_339afaa5812cb57ff7a7fdd19f10938bf862370c12e75d4bd5d278bcdb2c09f5->enter($__internal_339afaa5812cb57ff7a7fdd19f10938bf862370c12e75d4bd5d278bcdb2c09f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_339afaa5812cb57ff7a7fdd19f10938bf862370c12e75d4bd5d278bcdb2c09f5->leave($__internal_339afaa5812cb57ff7a7fdd19f10938bf862370c12e75d4bd5d278bcdb2c09f5_prof);

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
