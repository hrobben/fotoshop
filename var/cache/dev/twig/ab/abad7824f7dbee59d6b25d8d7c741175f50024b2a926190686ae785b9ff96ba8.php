<?php

/* StoreBundle:articles:edit.html.twig */
class __TwigTemplate_70d8a5129a173d132bd998a4acc5b59934059374fdc19eac20b5c7031469dcb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StoreBundle::base.html.twig", "StoreBundle:articles:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9953bf61396e54d7caf65552a681a0e9b8b39534379e9a0b86b8ccbc48628809 = $this->env->getExtension("native_profiler");
        $__internal_9953bf61396e54d7caf65552a681a0e9b8b39534379e9a0b86b8ccbc48628809->enter($__internal_9953bf61396e54d7caf65552a681a0e9b8b39534379e9a0b86b8ccbc48628809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreBundle:articles:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9953bf61396e54d7caf65552a681a0e9b8b39534379e9a0b86b8ccbc48628809->leave($__internal_9953bf61396e54d7caf65552a681a0e9b8b39534379e9a0b86b8ccbc48628809_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_384fd2f2b5cff1420fe2708c2ab5ecf93e7e98309fc40b5cff1e4e9b20a364d5 = $this->env->getExtension("native_profiler");
        $__internal_384fd2f2b5cff1420fe2708c2ab5ecf93e7e98309fc40b5cff1e4e9b20a364d5->enter($__internal_384fd2f2b5cff1420fe2708c2ab5ecf93e7e98309fc40b5cff1e4e9b20a364d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
        <h1>Articles</h1>
    </div>

";
        // line 9
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 10
            echo "    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">Current image</label>
        <div class=\"col-sm-10\"><img src=\"/uploads/documents/";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "imagePath", array()), "html", null, true);
            echo "\" alt=\"image not found!\" style=width:200px;\"></div>
        <p>.</p>
    </div>
    ";
            // line 15
            $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
            // line 16
            echo "    ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
            echo "
        ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
            echo "
        <button type=\"submit\" class=\"btn btn-primary center-block col-lg-3\">Save</button>
    ";
            // line 19
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
            echo "

    <a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("articles_index");
            echo "\"><button type=\"button\" class=\"btn btn-info col-lg-2 right\">Back to List</button></a>
    ";
            // line 22
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
    <button type=\"submit\" class=\"btn btn-danger pull-right\">Delete</button>
    ";
            // line 24
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
";
        } else {
            // line 26
            echo "    <h3>U dient eerst als adminUser aanmelden!</h3>
";
        }
        // line 28
        echo "
";
        
        $__internal_384fd2f2b5cff1420fe2708c2ab5ecf93e7e98309fc40b5cff1e4e9b20a364d5->leave($__internal_384fd2f2b5cff1420fe2708c2ab5ecf93e7e98309fc40b5cff1e4e9b20a364d5_prof);

    }

    public function getTemplateName()
    {
        return "StoreBundle:articles:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 28,  90 => 26,  85 => 24,  80 => 22,  76 => 21,  71 => 19,  66 => 17,  61 => 16,  59 => 15,  53 => 12,  49 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'StoreBundle::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <!-- Main jumbotron for a primary marketing message or call to action -->*/
/*     <div class="jumbotron">*/
/*         <h1>Articles</h1>*/
/*     </div>*/
/* */
/* {% if is_granted("ROLE_ADMIN") %}*/
/*     <div class="form-group">*/
/*         <label class="col-sm-2 control-label">Current image</label>*/
/*         <div class="col-sm-10"><img src="/uploads/documents/{{ article.imagePath }}" alt="image not found!" style=width:200px;"></div>*/
/*         <p>.</p>*/
/*     </div>*/
/*     {% form_theme edit_form 'bootstrap_3_horizontal_layout.html.twig' %}*/
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <button type="submit" class="btn btn-primary center-block col-lg-3">Save</button>*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <a href="{{ path('articles_index') }}"><button type="button" class="btn btn-info col-lg-2 right">Back to List</button></a>*/
/*     {{ form_start(delete_form) }}*/
/*     <button type="submit" class="btn btn-danger pull-right">Delete</button>*/
/*     {{ form_end(delete_form) }}*/
/* {% else %}*/
/*     <h3>U dient eerst als adminUser aanmelden!</h3>*/
/* {% endif %}*/
/* */
/* {% endblock %}*/
/* */
